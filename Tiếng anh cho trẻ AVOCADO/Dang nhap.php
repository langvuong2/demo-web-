<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'Tam1247' && $password == 'lethanhtam0904') {
        header('Location: Trang ca nhan.php');
        exit();
      } else {
        $error_message = 'Tên đăng nhập hoặc mật khẩu không chính xác.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="dang nhap.css">
    <link rel="shortcut icon" type="./img/AVOCADO.png" href="./img/AVOCADO.png">
</head>
<body>
  <h1>Đăng nhập</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" name="submit" value="Đăng nhập">
    </form>
    <?php
    if (isset($error_message)) {
        echo '<p>' . $error_message . '</p>';
    }
    ?>
        <br> <br><br> <br><br> <br><br> <br><br><br> <br><br><br> <br><br><br> <br>
    <footer align="center" id="content">
    <h4><b>Thông Tin Liên Hệ</b></h4>
  <li>
  <b>ADDRESS:</b> Số 14 Đường Nguyễn Thị Thập Phường Tân Hiển Quận 7 TP HCM
  </li>
  <li>
    <b>CONTACT:</b> MR HOÀNG LÂM
  </li>
  <li>
    <b>HOTLINE:</b> 023 569 9756
  </li>
  <li>
    <b>Email:</b> avocado@gmail.com
  </li>
  </footer>
</body>
</html>