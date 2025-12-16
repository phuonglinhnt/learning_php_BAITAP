<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    setcookie("username", $username, time() + 3600, "/");   //lưu cookie trong 1 giờ
    header("Location: welcome.php"); //chuyển hướng đến trang welcom
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>

<body>
    <h2>Đăng nhập</h2>
    <form action="" method="post">
        <label>Nhập tên của bạn:</label>
        <input type="text" name="username" required>
        <button type="submit">Đăng nhập</button>
    </form>
</body>

</html>