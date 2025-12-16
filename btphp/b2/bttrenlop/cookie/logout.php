<?php
// Xóa cookie bằng cách đặt tgian hết hạn về quá khứ
setcookie("username", "", time() - 3600, "/");

//Chuyển hướng về trang đăng nhập
header("Location: login.php");

exit();
