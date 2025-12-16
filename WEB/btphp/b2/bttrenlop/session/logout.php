<?php 
        session_start();    //Bắt đầu session

        // Kiểm tra nếu form được gửi
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $_SESSION['username'] = $_POST['username'];   //Lưu vào session
            header("Location: welcome.php");     //Chuyển trang
            var_dump($_SERVER['REQUEST_METHOD'] );
            var_dump($_POST['username']);
            var_dump($_SESSION['username']);
            exit();
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form action="" method="post">
        <label >Nhập tên của bạn:</label>
        <input type="text" name="username" required>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>