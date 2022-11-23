<?php
//kết nối đến database
require_once "database-user.php";
 
// Định nghĩa biến và khởi tạo giá trị rỗng
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Xử lý dữ liệu form khi form được gửi
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Vui lòng điền tên đăng nhập.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username không thể là kí tự đặc biệt !!!";
    } else{
        // Chuẩn bị câu lệnh select
        $sql = "SELECT id FROM users WHERE username = ?";// select id tới bảng users
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Liên kết các biến với câu lệnh đã chuẩn bị dưới dạng tham số
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
           // Đặt tham số
            $param_username = trim($_POST["username"]);
            
           // Cố gắng thực hiện câu lệnh đã chuẩn bị
            if(mysqli_stmt_execute($stmt)){
                /* lưu trữ kết quả */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Tên đăng nhập đã được sử dụng";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Web đang bảo trì, vui lòng quay lại sau.";
            }
// Đóng câu lệnh
            mysqli_stmt_close($stmt);
        }
    }
    
  // Xác thực mật khẩu
    if(empty(trim($_POST["password"]))){
        $password_err = "Vui lòng nhập mật khẩu.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Mật khẩu phải có độ dài hơn 6.";
    } else{
        $password = trim($_POST["password"]);
    }
    
   // Xác thực xác nhận mật khẩu
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Vui lòng nhập lại mật khẩu";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Mật khẩu không giống.";
        }
    }
    
    // Kiểm tra lỗi nhập liệu trước khi chèn vào cơ sở dữ liệu
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
    //Chuẩn bị câu lệnh chèn
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";//chèn vào bảng users
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Liên kết các biến với câu lệnh đã chuẩn bị dưới dạng tham số
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Đặt tham số
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);// Tạo mật khẩu băm(sẽ giúp mọi password cho dù giống nhau nhưng cũng sẽ không bị trùng)
            
           // Cố gắng thực hiện câu lệnh đã chuẩn bị
            if(mysqli_stmt_execute($stmt)){
                // Chuyển hướng đến trang đăng nhập
                header("location: login.php");
            } else{
                echo "Oops! Web đang bảo trì, vui lòng quay lại sau.";
            }

            // Đóng câu lệnh
            mysqli_stmt_close($stmt);
        }
    }
    
  // Đóng kết nối
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Login_Form/css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Poppins', sans-serif;
        }
                body {
                    background-color: #c8b7a6;
                    place-items: center;
                }
                .container{
                    widh:100%;
                }
                .wrapper {
                    background-color: white;
                    position: absolute;
                    left:40%;
                    top:20%;
                    width: 360px;
                    padding: 20px;
                    border-radius: 2%;
                    box-shadow: 0px 15px 20px rgb(0 0 0 / 10%);
                }
                .wrapper .title-text {
                    display: flex;
                    width: 200%;
                  }
                .title-login{
                    width: 50%;
                    font-size: 35px;
                    font-weight: 600;
                    text-align: center;
                    transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
                }
    </style>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title-text">
                <div class = "title-login">Đăng Ký</div>
            </div>
            <p>Vui lòng điền vào biểu mẫu này để tạo một tài khoản.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Tài Khoản:</label>
                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>    
                <div class="form-group">
                    <label>Mật Khẩu:</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group">
                    <label>Xác Nhận Mật Khẩu:</label>
                    <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                    <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Đăng Ký Ngay">
                </div>
                <p>Bạn đã có tài khoản? <a href="login.php">Đăng nhập ở đây!</a></p>
            </form>
        </div>    
    </div>
</body>
</html>