document.getElementById("myForm").addEventListener("submit", function (e) {
  let name = document.getElementById("ten").value;
  let surname = document.getElementById("ho").value;
  let mail = document.getElementById("email").value;
  let sodt = document.getElementById("sdt").value;
  let tp = document.getElementById("thanhpho").value;
  let tinh = document.getElementById("tinh").value;
  let text = document.getElementById("ghichu").value;
  if (
    name === "" ||
    surname === "" ||
    sodt === "" ||
    mail === "" ||
    tinh === "" ||
    tp === ""
  ) {
    alert("Vui lòng nhập đầy đủ thông tin");
    e.preventDefault(); // Ngăn form gửi đi
  } else {
    console.log("Tên: ", name);
    console.log("Họ: ", surname);
    console.log("Email: ", mail);
    console.log("SDT: ", sodt);
    console.log("Thành phố: ", tp);
    console.log("Tỉnh: ", tinh);
    console.log("Ghi chú: ", text);
    e.preventDefault();
  }
});
