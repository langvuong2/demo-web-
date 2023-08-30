document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
      event.preventDefault(); // Ngăn chặn gửi biểu mẫu bằng cách làm tải lại trang

      // Lấy giá trị từ các trường nhập liệu
      var name = document.getElementById('name').value;
      var birthday = document.getElementById('birthday').value;
      var phone = document.getElementById('phone').value;
      var email = document.getElementById('email').value;
      var classSelection = document.getElementById('class').value;
      var packageSelection = document.getElementById('package').value;

      // Gửi dữ liệu đăng ký lên máy chủ bằng AJAX hoặc fetch API
      // Ví dụ sử dụng fetch API:
      var data = {
        name: name,
        birthday: birthday,
        phone: phone,
        email: email,
        class: classSelection,
        package: packageSelection
      };

      fetch('dang ky.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      })
      .then(function(response) {
        // Xử lý phản hồi từ máy chủ (nếu cần)
      })
      .catch(function(error) {
        // Xử lý lỗi (nếu có)
      });
    });
  });