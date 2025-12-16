<?php
$conn = mysqli_connect('localhost', 'root', '', 'connectionvc');
// if ($conn) {
//     echo ('done');
// } else {
//     die('Chua duoc: ' . mysqli_connect_error($conn));
// }
//var_dump($conn);
$sql = "SELECT * FROM sinhvien";
$result = mysqli_query($conn, $sql);
//var_dump($result);
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='15' cellspacing='0'>
        <tr>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Ngày Sinh</th>
        </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                    <td>" . $row["ID"] . "</td>
                    <td>" . $row["HoTen"] . "</td>
                    <td>" . $row["NgaySinh"] . "</td>
                </tr>";
    }
} else {
    echo "Khoong co";
}

mysqli_close($conn);


// $sql = "INSERT INTO sinhvien(ID, HoTen, NgaySinh) VALUES ('2', 'Nguyen Van B', '2005-1-1')";
// $result = mysqli_query($conn, $sql);

// $sql = "INSERT INTO sinhvien(ID, HoTen, NgaySinh) VALUES ('4', N'Trần Thị Mai', '2002-07-25')";
// $result = mysqli_query($conn, $sql);

// $sql = "INSERT INTO sinhvien(ID, HoTen, NgaySinh) VALUES ('5', 'Hoàng Quốc Bảo', '200-11-09')";
// $result = mysqli_query($conn, $sql);

// $sql = "INSERT INTO sinhvien(ID, HoTen, NgaySinh) VALUES ('6', 'Lê Minh Tuấn', '2003-12-03'), ('7', 'Phạm Ngọc Anh', '2004-01-18'), 
// ('8', 'Vũ Thị Thu Hà', '2003-07-25'), ('9', 'Bùi Thanh Tâm', '2002-12-21'), ('10', 'Đỗ Mỹ Linh', '2003-08-06')";
// $result = mysqli_query($conn, $sql);
