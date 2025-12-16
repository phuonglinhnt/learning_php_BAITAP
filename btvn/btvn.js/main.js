document.getElementById("myForm").addEventListener("submit", function (e) {
  e.preventDefault();

  let user = document.getElementById("username").value.trim();
  let pass = document.getElementById("password").value.trim();
  let mess = document.getElementById("message");

  if (user !== "" && pass !== "") {
    mess.textContent = "Thành công";
    mess.className = "success";
  } else if (user === "" && pass != "") {
    mess.textContent = "Vui lòng nhập tên đăng nhập";
    mess.className = "error";
  } else if (pass === "" && user != "") {
    mess.textContent = "Vui lòng nhập mật khẩu";
    mess.className = "error";
  } else {
    mess.textContent = "Vui lòng nhập đầy đủ thông tin";
    mess.className = "error";
  }
});
