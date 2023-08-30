// thanhtoan.js

// Lắng nghe sự kiện submit của form khi người dùng nhấn nút "Thanh toán"
document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Ngăn chặn việc gửi form mặc định

    // Lấy giá trị từ các trường dữ liệu trong form
    var fullName = document.getElementById('full_name').value;
    var cardNumber = document.getElementById('card_number').value;
    var expirationDate = document.getElementById('expiration_date').value;
    var cvv = document.getElementById('cvv').value;
    var package = document.getElementById('package').value;
    var age = document.getElementById('age').value;

    // Thực hiện xử lý thanh toán ở đây (gửi dữ liệu đến server, kiểm tra, v.v.)

    // Sau khi xử lý thành công, chuyển hướng người dùng đến trang thành công
    window.location.href = '#';
});