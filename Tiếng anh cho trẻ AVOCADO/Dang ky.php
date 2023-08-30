<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'dangky';

$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $package = $_POST['package'];

    $sql = "INSERT INTO dang_ky (name, age, dob, phone, email, package) 
            VALUES ('$name', $age, '$dob', '$phone', '$email', '$package')";

    $result = mysqli_query($connection, $sql);
    if ($result) {
        echo "Đăng ký thành công!";
    } else {
        echo "Đăng ký thất bại: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
    <link rel="stylesheet" href="Dangky.css">
    <link rel="shortcut icon" type="./img/AVOCADO.png" href="./img/AVOCADO.png">
</head>
<body>
<div class="container">
    <h1>Đăng ký học Anh văn</h1>
    <form method="POST" action="ketnoidk.php">
    <label for="name">Họ và tên:</label>
    <input type="text" id="name" name="name" required>
    <label for="age">Tuổi</label>
    <input type="text" name="age" id="age" required><br>

    <label for="dob">Ngày sinh:</label>
    <input type="date" name="dob" id="dob" required><br>

    <label for="phone">Số điện thoại:</label>
    <input type="tel" name="phone" id="phone" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>

    <label for="package">Gói cước:</label>
    <select name="package" id="package" required>
        <option value="Tiếng Anh Trẻ em 5-10 tuổi">Tiếng Anh Trẻ em 5-10 tuổi</option>
        <option value="Tiếng Anh Trẻ em 10-14 tuổi">Tiếng Anh Trẻ em 10-14 tuổi</option>
        <option value="Tiếng Anh Luyện IETLS cho trẻ">Tiếng Anh Luyện IETLS cho trẻ</option>
        <option value="Tiếng Anh trẻ du học">Tiếng Anh trẻ du học</option>
    </select><br>

    <input type="submit" name="submit" value="Đăng ký">
</form>
<br> <br><br> <br><br> <br>
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
</body>
</html>