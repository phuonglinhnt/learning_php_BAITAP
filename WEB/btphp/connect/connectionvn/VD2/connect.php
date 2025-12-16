<?php
$conn = mysqli_connect("localhost", "root", "", "connectionvc");

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
} else {
    // echo ("Thanh cong");
}

// $sql = "INSERT INTO khoa(TenKhoa, GhiChu) VALUES ('Khoa-CNTT', 'UTT')";
// $sql = "UPDATE khoa SET TenKhoa ='UTT_CNTT', GhiChu='Truong DH Cong Nghe GTVT' WHERE MaKhoa=1";
// $sql = "DELETE from khoa WHERE MAKhoa=2";

// if (mysqli_query($conn, $sql)) {
//     echo "Thanh cong";
// } else {
//     echo "Loi: " . $sql . "<br>" . mysqli_error($conn);
// }

//mysqli_close($conn);
