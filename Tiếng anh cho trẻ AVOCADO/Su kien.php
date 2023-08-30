<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Su Kien</title>
  <link rel="shortcut icon" type="image/png" href="./img/AVOCADO.png">
  <link rel="stylesheet" href="sukien.css">
</head>
<body>
  <header>
    <h1 class="link" style="color: #c62028;">AVOCADO ENGLISH</h1>
  </header>
  <?php
$html = "<div>" .
  "<nav>" .
    "<ul>" .
      "<li><a href=\"Trang_chu.php\">Home</a></li>" .
      "<li><a href=\"Gói cước.php\">Course</a></li>" .
      "<li><a href=\"Su kien.php\">Event</a></li>" .
      "<li><a href=\"ưu đãi.php\">Endow</a></li>" .
      "<li><a href=\"Thông tin liên hệ.php\">Contact</a></li>" .
      "<li><a href=\"Dang ky.php\">Register</a></li>" .
      "<li><a href=\"Dang nhap.php\">Log In</a></li>" .
      "<li><a href=\"Thanh Toán.php\">Pay</a></li>" .
    "</ul>" .
  "</nav>" .
"</div>";
echo $html;
?>
  <div align="center" class="wrapper">
    <div class="package pa">
      <h2></h2>
      <p class="price"></p>
      <p></p>
    </div>
    <div class="package 02">
      <h2>Đăng ký ngay</h2>
      <p class="price"><del>Từ 6.500.000 VND - 16.500.000 VND</del> còn 4.500.000 VND - 12.500.000 VND</p>
      <p>Đăng ký ngay</p>
      <p>Nhận ngay ưu đãi <span class="discount-badge">Giảm 30%</span> Khi đăng ký gói cho trẻ từ 5 - 14 tuổi</p>
      <button onclick="redirectToPayment()">Thanh toán</button>
    </div>
  </div>
  <div align="right" class="wrapper">
    <div class="package pa">
      <h2></h2>
      <p class="price"></p>
      <p></p>
    </div>
    <div class="package 02">
      <h2>Đăng ký ngay</h2>
      <p>Từ ngày 13/08/2023 - 13/10/2023</p>
      <p class="price"><del>Từ 14.500.000 VND - 16.500.000 VND</del> còn 12.500.000 VND - 14.500.000 VND</p>
      <p>Đăng ký ngay</p>
      <p>Nhận ngay ưu đãi <span class="discount-badge">Giảm 20%</span> Khi đăng ký gói luyện IETLS cho trẻ và tiếng anh cho trẻ du học</p>
      <button onclick="redirectToPayment()">Thanh toán</button>
    </div>
  <script>
    function redirectToPayment() {
      window.location.href = 'Thanh toán.php';
    }
  </script>
  <br> <br> <br> <br>  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
 <div id="content">
    <h4 align="center"><b>Thông Tin Liên Hệ</b></h4>
<li align="center">
  <b>ADDRESSb:</b> Số 14 Đường Nguyễn Thị Thập Phường Tân Hiển Quận 7 TPHCM
  </li>
  <li align="center">
    <b>CONTACT:</b> MR HOÀNG LÂM
  </li>
  <li align="center">
    <b>HOTLINE:</b> 023 569 9756
  </li>
  <li align="center">
    <b>Email:</b> avocado@gmail.com
  </li>
  </div>
  </div>
</body>
</html>