<?php
if (!isset($_COOKIE["username"])) {
    header("Cocation: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mừng</title>
</head>

<body>
    <h2>Xin chào, <?php echo $_COOKIE["username"]; ?></h2>
    <p>chào mừng bạn đã đăng nhập</p>
    <a href="logout.php">Đăng xuất</a>
</body>

</html>