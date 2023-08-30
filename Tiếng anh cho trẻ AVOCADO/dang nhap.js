document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault(); 
  
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username === "admin" && password === "123456") {
      alert("Đăng nhập thành công!");
      window.location.replace("Trang ca nhan.php");
    } else {
      alert("Tên đăng nhập hoặc mật khẩu không đúng.");
    }
  });