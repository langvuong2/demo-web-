<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dangky";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Không thể kết nối đến cơ sở dữ liệu: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $storedPassword = $row["password"];

        if (password_verify($password, $storedPassword)) {
            session_start();
            $_SESSION["username"] = $username;
            header("Location: Trang ca nhan.php"); 
            exit();
        } else {
            echo "Sai tài khoản hoặc mật khẩu.";
        }
    } else {
        echo "Sai tài khoản hoặc mật khẩu.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="dang nhap.css">
    <link rel="shortcut icon" type="./img/AVOCADO.png" href="./img/AVOCADO.png">
</head>
<body>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Tên đăng nhập:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Mật khẩu:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Đăng nhập">
</form>
</body>
</html>
