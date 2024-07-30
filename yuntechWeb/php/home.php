<?php
    session_start();
    if (!isset($_SESSION['username'])){
        echo "<script>alert('請先登入'); window.location.href='index.php';</script>";
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後台管理</title>
</head>
<body>
    <a href="read.php">查看"最新訊息"列表</a>
    <br>
    <a href="insert.php">新增"最新訊息"</a>
    <br>
    <a href="logout.php">登出</a>
</body>
</html>