<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "database-user.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Vui lòng nhập mật khẩu mới.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Mật khẩu cần có ít nhất 6 kí tự.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Vui lòng nhập lại mật khẩu";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Mật khẩu không giống nhau.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Web đang bảo trì, vui lòng quay lại sau.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="uf8">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <p>Vui lòng điền vào biểu mẫu này để đặt lại mật khẩu của bạn.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
                <label>Mật khẩu mới</label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Xác nhận mật khẩu</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Đổi mật khẩu">
                <a class="btn btn-link ml-2" href="welcome.php">Hủy</a>
            </div>
        </form>
    </div>    
    </div>
</body>
</html>