<!DOCTYPE html>
<html>
<head>
  <title>Ưu Đãi Của Hệ Đào Tạo Ngoại Ngữ AVOCADO Cho Trẻ</title>
  <link rel="shortcut icon" type="./img/AVOCADO.png" href="./img/AVOCADO.png">
  <link rel="stylesheet" href="uu dai.css">
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
<div class="wrapper">
  <br>
  <h2 align="center" class="blink">Ưu Đãi Của AVOCADO</h2>
  <main>
    <div class="offer-card">
        <h2>Chương trình học tiếng Anh cho trẻ từ 5-14 tuổi</h2>
        <p>Trẻ được học ngoại ngữ từ nhỏ sẽ mang lại nhiều lợi ích về phát triển trí tuệ cũng như đạt hiệu quả cao trong phát âm, tiếp thu từ vựng…</p>
        <p>Hãy đăng ký ngay để con bạn được hưởng ưu đãi <span class="discount-badge">Giảm giá 30%</span> khi tham gia chương trình học tiếng Anh cho trẻ từ 5-14 tuổi trong 6 tháng đầu!</p>
        <button onclick="redirectToPayment()">Thanh toán</button>
    </div>
    <div class="offer-card">
        <h2>Chương trình song ngữ cho trẻ du học</h2>
        <p>Nghiên cứu đã chỉ ra rằng người nói song ngữ thường có khả năng ghi nhớ tên gọi, sự định hướng và nhận diện vật dụng tốt hơn người nói một ngôn ngữ.</p>
        <p>Hãy đăng ký ngay để con bạn được hưởng ưu đãi <span class="discount-badge">Giảm giá 50%</span> khi tham gia chương trình song ngữ cho trẻ du học cho 50 bé đăng ký trước ngày 21/07/2023</p>
        <button onclick="redirectToPayment()"><font clor="blue">Thanh toán</font></button>
      </div>
    <div class="offer-card">
        <h2>Chương trình luyện IELTS cho bé</h2>
        <p>Lợi ích thiết thực của IELTS mang tới cho học sinh cấp 2, cấp 3 là nâng cao khả năng tiếng Anh, tự tin giao tiếp, kể cả trong môi trường du học. Bài thi IELTS mang đến kiến thức, kiểm tra 4 kỹ năng nên bài học ở trường cũng không còn là trở ngại.</p>
        <button onclick="redirectToPayment()">Thanh toán</button>
      </div>
      <script>
        function redirectToPayment() {
            window.location.href = 'Thanh toán.php';
        }
    </script>
  </main>
  <div id="content">
    <h4><b>Thông Tin Liên Hệ</b></h4>
  <li>
  <b>ADDRESSb:</b> Số 14 Đường Nguyễn Thị Thập Phường Tân Hiển Quận 7 TPHCM
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
</html>