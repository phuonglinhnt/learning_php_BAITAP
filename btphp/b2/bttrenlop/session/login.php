<?php
    session_start();
    // session_destroy();   // Hủy bỏ toàn bộ session
    header("Location: login.php");
    exit();
?>