<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <link rel="stylesheet" href="Thanh Toán.css">
    <link rel="shortcut icon" type="./img/AVOCADO.png" href="./img/AVOCADO.png">
    <style>
    </style>
</head>
<body>
    <h1>Thanh toán</h1>
    <form method="POST" action="process_payment.php">
        <label for="full_name">Họ và tên:</label>
        <input type="text" id="full_name" name="full_name" required>
        <br>
        <label for="card_number">Số thẻ:</label>
       <input type="text" id="card_number" name="card_number" required>
        <span id="card_number_error" style="color: red;"></span>
        <br>
        <label for="expiration_date">Ngày hết hạn:</label>
        <input type="text" id="expiration_date" name="expiration_date" required>
        <br>
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required>
        <br>
        <label for="package">Gói cước:</label>
        <select id="package" name="package">
            <option value="Goi_cuoc">Chọn gói</option>
            <option value="Tiếng Anh Trẻ em 10-14 tuổi">Gói cước Tiếng Anh Trẻ em 5-10 tuổi</option>
            <option value="Tiếng Anh Trẻ em 10-14 tuổi">Gói cước Tiếng Anh Trẻ em 10-14 tuổi</option>
            <option value="Tiếng Anh Luyện IETLS cho trẻ">Gói cước Tiếng Anh Luyện IETLS cho trẻ</option>
            <option value="Tiếng Anh trẻ du học">Gói cước Tiếng Anh trẻ du học</option>
            <option value="Tiếng Anh Trẻ em 10-14 tuổi"><font color="red">Khuyến mãi </font> Tiếng anh cho trẻ 5 - 14 tuổi Giảm 30%</option>
            <option value="Tiếng Anh Trẻ em 10-14 tuổi"><font color="red">Khuyến mãi </font> Tiếng anh cho trẻ luyện IETLS cho trẻ  Giảm 20%</option>
            <option value="Tiếng Anh Trẻ em 10-14 tuổi"><font color="red">Khuyến mãi </font> Tiếng anh cho trẻ Du học cho trẻ Giảm 20%</option>
        </select>
        <br>
        <label for="age">Tuổi:</label>
        <select id="age" name="age">
            <option value="tuoi">Độ tuổi</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
        </select>
        <br>
       <p align="center"> <input type="submit" value="Thanh toán"></p>
    </form>
    <script>
  var cardNumberInput = document.getElementById("card_number");
  var cardNumberError = document.getElementById("card_number_error");

  cardNumberInput.addEventListener("input", function() {
    var cardNumber = cardNumberInput.value;

    if (!/^[0-9]{16}$/.test(cardNumber)) {
      cardNumberError.textContent = "Số thẻ phải gồm 16 chữ số.";
    } else {
      cardNumberError.textContent = "";
    }
  });
</script>
<br><br>
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

