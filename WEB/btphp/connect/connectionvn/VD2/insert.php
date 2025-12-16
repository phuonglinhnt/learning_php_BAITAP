<?php
include("connect.php");
if (isset($_POST['btn'])) {
    $makhoa = $_POST['MaKhoa'];
    $tenkhoa = $_POST['TenKhoa'];
    $ghichu = $_POST['GhiChu'];
    $sql = "insert into khoa(MaKhoa, TenKhoa, GhiChu) values ('$makhoa', '$tenkhoa', '$ghichu')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: index_1.php?insert.php&insert_msg=insert thanh cong");
    }
}
?>

<form action="" method="post">
    <input type="text" name="makhoa" placeholder="Thêm vào đêi">
    <br><br>
    <input type="text" name="tenkhoa" placeholder="Thêm vào đêi">
    <br><br>
    <button type="submit" name="btn">Thêm</button>
    <button><a href="index_1.php">Quay lại</a></button>
</form>