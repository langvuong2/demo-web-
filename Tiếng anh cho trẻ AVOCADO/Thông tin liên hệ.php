<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin liên hệ giáo viên</title>
    <link rel="shortcut icon" type="./img/AVOCADO.png" href="./img/AVOCADO.png">
    <link rel="stylesheet" href="contact.css">
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
        <div class="container">
            <div class="teacher">
                <img src="./img/tam.jpg" alt="Teacher 1">
                <div>
                    <h3>LÊ THANH TÂM</h3>
                    <p>English Teacher</p>
                    <div class="contact">
                        <a href="mailoto:tam.le@avocado.com">tam.le@avocado.com</a>
                        <a href="tel:+05689001916">(056) 900-1916</a>
                        <br><a href="tam.php">contact</a>
                    </div>
                </div>
            </div>

            <div class="teacher">
                <img src="./img/huy.jpg" alt="Teacher 2">
                <div>
                    <h3>Vũ Đức Huy</h3>
                    <p>English Teacher</p>
                    <div class="contact">
                        <a href="mailoto:huy.vu@avocado.com">huy.vu@avocado.com</a>
                        <a href="tel.+0356987859">(035) 698-7859</a>
                        <br><a href="huy.php">contact</a>
                    </div>
                </div>
            </div>

            <div class="teacher">
                <img src="./img/linh.jpg" alt="Teacher 3">
                <div>
                    <h4>Nguyễn Văn Lĩnh</h4>
                    <p>English Teacher</p>
                    <div class="contact">
                        <a href="mailto:linh.nguyen@avocado.com">linh.nguyen@avocado.com</a>
                        <a href="tel:+056987563">(056) 987-563</a>
                        <br><a href="linh.php">contact</a>
                    </div>
                </div>
            </div>

            <div class="teacher">
                <img src="./img/bao.jpg" alt="Teacher 4">
                <div>
                    <h5>Nguyễn Trường Gia Bảo</h5>
                    <p>English Teacher</p>
                    <div class="contact">
                        <a href="mailto:bao.nguyen@avocado.com">bao.nguyen@avocado.com</a>
                        <a href="tel:+0895623568">(089) 562-3568</a>
                        <br><a href="bao.php">contact</a>
                    </div>
                </div>
            </div>

            <!-- Thêm thông tin liên hệ của các giáo viên khác tại đây -->

        </div>
        <div id="content">
            <h4>Thông Tin Liên Hệ</h4>
            <li><b>ADDRESSb:</b> Số 14 Đường Nguyễn Thị Thập Phường Tân Hiển Quận 7 TP HCM</li>
            <li><b>CONTACT:</b> MR HOÀNG LÂM</li>
            <li><b>HOTLINE:</b> 023 569 9756</li>
            <li><b>Email:</b> avocado@gmail.com</li>
        </div>
    </div>