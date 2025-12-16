<?php
include("connect.php");
if (!isset($_GET["makhoa"])) {
    header("location:index_1.php?edit_msg=chua nhan duoc");
}
$makhoa = $_GET["makhoa"];
$sql = "select * from khoa where MaKhoa='$makhoa'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<form action="" method="post">
    <input type="text" name="makhoa" value="<?php echo $row['MaKhoa']; ?>">
    <br><br>
    <input type="text" name="tenkhoa" value="<?php echo $row['TenKhoa']; ?>">
    <br><br>
    <button type="submit" name="btn">Sửa</button>
    <button><a href="index_1.php"></a>Quay lại</button>
</form>