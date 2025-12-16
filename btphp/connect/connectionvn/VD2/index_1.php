<?php
include("connect.php");
$sql = "SELECT *FROM khoa";
if (isset($_POST['btn_find'])) {
    $key = $_POST['txt_find'];
    if (!empty($key)) {
        $sql = "SELECT *FROM khoa where MaKhoa like '%$key%'";
    }
}

$result = mysqli_query($conn, $sql);

?>


<form action="" method="post">
    <div class="input">
        <input type="text" name="txt_find" id="inp_txt" placeholder="Nhập vào đêi">
        <button name="btn_find" id="btn_find" type="submit">
            <div class="text">Tìm kiếm</div>
        </button>
    </div>
</form>

<table align="center" border="1">
    <thead>
        <th>Mã khoa</th>
        <th>Tên khoa</th>
        <th>Ghi chú</th>
        <th><a href="insert.php">Thêm vào đêi</a></th>
    </thead>
    <tbody>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['MaKhoa']; ?></td>
                    <td><?php echo $row['TenKhoa']; ?></td>
                    <td><?php echo $row['GhiChu']; ?></td>
                    <td>
                        <a href="edit.php?MaKhoa=<?php echo $row['MaKhoa']; ?>">Sửa</a> |
                        <a href="delete.php?MaKhoa=<?php echo $row['MaKhoa']; ?>"
                            onclick="return confirm('Bạn có chắc muốn xóa không?')"
                            style="color:red;">Xóa</a>
                    </td>
                </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='4'>Không có dữ liệu</td></tr>";
        }
        ?>
    </tbody>
</table>
<div class="msg">
    <?php
    if (isset($_GET['insert.msg']))
        echo $_GET['insert.msg'];
    ?>
    <?php
    if (isset($_GET['edit.msg']))
        echo $_GET['edit.msg'];
    ?>
</div>