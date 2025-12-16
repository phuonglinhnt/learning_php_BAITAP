<?php
    if(isset($_GET['search'])) {
        echo "Từ khóa: ".htmlspecialchars($_GET['search']);
    }
?>

<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Họ tên: ". htmlspecialchars($_POST['fullname']);
    }
 ?>

 <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Tên: ". htmlspecialchars($_POST['username']);
    }
 ?>