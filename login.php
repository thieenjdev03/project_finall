<?php
// Khởi tạo phiên làm việc
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa, nếu có thì chuyển hướng đến trang chào mừng
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
    exit;
}

// Bao gồm tập tin cấu hình
require_once "database-user.php";

// Định nghĩa biến và khởi tạo giá trị rỗng
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Xử lý dữ liệu form khi form được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Kiểm tra xem tên người dùng có trống không
    if (empty(trim($_POST["username"]))) {
        $username_err = "Vui lòng nhập username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Kiểm tra xem mật khẩu có trống không
    if (empty(trim($_POST["password"]))) {
        $password_err = "Vui lòng nhập mật khẩu.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Xác thực thông tin đăng nhập
    if (empty($username_err) && empty($password_err)) {
        // Chuẩn bị câu lệnh select
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Liên kết các biến với câu lệnh đã chuẩn bị dưới dạng tham số
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Đặt tham số
            $param_username = $username;

            // Cố gắng thực hiện câu lệnh đã chuẩn bị
            if (mysqli_stmt_execute($stmt)) {
                //Lưu trữ kết quả
                mysqli_stmt_store_result($stmt);

                // Kiểm tra xem tên người dùng có tồn tại không, nếu có thì xác minh mật khẩu
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Ràng buộc các biến kết quả
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Mật khẩu đúng, bắt đầu phiên làm việc mới
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Lưu trữ dữ liệu trong các biến phiên
                            header("location: welcome.php");
                        } else {
                            // Mật khẩu không hợp lệ, hiển thị thông báo lỗi chung
                            $login_err = "Mật khẩu hoặc tên đăng nhập sai.";
                        }
                    }
                } else {
                    // Tên người dùng không tồn tại, hiển thị thông báo lỗi chung
                    $login_err = "Invalid username or password.";
                }
            } else {
                echo "Oops! Web đang bảo trì vui lòng thử lại sau.";
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
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #c8b7a6;
            place-items: center;
        }

        .container {
            weight: 100%;
        }

        .wrapper {
            background-color: white;
            position: absolute;
            left: 40%;
            top: 20%;
            width: 360px;
            padding: 20px;
            border-radius: 2%;
            box-shadow: 0px 15px 20px rgb(0 0 0 / 10%);
        }

        .wrapper .title-text {
            display: flex;
            width: 200%;
        }

        .title-login {
            width: 50%;
            font-size: 35px;
            font-weight: 600;
            text-align: center;
            transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title-text">
                <div class="title-login">Đăng Nhập</div>
            </div>
            <p>Vui lòng điền thông tin đăng nhập của bạn để đăng nhập.</p>

            <?php
            if (!empty($login_err)) {
                echo '<div class="alert alert-danger">' . $login_err . '</div>';
            }
            ?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Tài Khoản</label>
                    <input type="text" name="username"
                        class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $username; ?>">
                    <span class="invalid-feedback">
                        <?php echo $username_err; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label>Mật Khẩu</label>
                    <input type="password" name="password"
                        class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback">
                        <?php echo $password_err; ?>
                    </span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Đăng Nhập">
                </div>
                <p>Chưa có tài khoản? <a href="signup.php">Đăng Ký Ngay!</a></p>
            </form>
        </div>
</body>
</div>

</html>