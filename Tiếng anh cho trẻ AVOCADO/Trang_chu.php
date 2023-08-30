<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVOCADO ENGLISH</title>
    <link rel="shortcut icon" type="./img/AVOCADO.png" href="./img/AVOCADO.png">
    <link rel="stylesheet" href="trangchu.css">
  </head>
  
  <body>
    <header>
      <h1 class="blink">AVOCADO ENGLISH</h1>
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
    <main>
      <section id="Trang chủ.php">
        <br>
      <h2 style="color: #0000FF; font-size: 40px;">Chào mừng đến với Hệ Đào Tạo Ngoại Ngữ AVOCADO!</h2>
      </section> 
      <section id="Dang nhap"></section>
      <div class="container">
        <h2>Log In</h2>
        <form id="login-form">
          <div class="form-group">
            <label for="username"><b>User name</b></label>
            <input type="text" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="password"><b>Password</b></label>
            <input type="password" id="password" name="password" required>
          </div>
          <button type="submit">Đăng nhập</button>
        </form>
        <script src="Dang nhap.js"></script>
      </div>
      <div align="center" id="content">
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
    </div>
  </div>
</body>
<script>
</script>
</html>