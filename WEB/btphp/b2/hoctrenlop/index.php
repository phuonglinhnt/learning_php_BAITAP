<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="get">
        <div><h3>$_GET</h3></div>
        <input type="text" name="search">
        <button type="submit">Tìm kiếm</button>
    </form>
    <form action="process.php" method="post">
        <div><h3>$_POST</h3></div>
        <input type="text" name="fullname">
        <button type="submit">Tìm kiếm</button>
    </form>
    <form action="process.php" method="post">
        <div><h3>$_SERVER</h3></div>
        <input type="text" name="username">
        <button type="submit">Gửi</button>
    </form>
</body>
</html>