<?php
    session_start();
    require_once("conn.php");
    $verifyAccount = 'yuntechAdmin';
    $verifyPasswordHash = '$2y$10$5PlrSEEIoUXESJX5reJrWOQVtQIw9HHJhvv4PwZOqgSHuEfnkIpiC';
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username === $verifyAccount && password_verify($password, $verifyPasswordHash)){
            $_SESSION['username'] = $username;
            echo "<script>alert('登入成功'); window.location.href='home.php';</script>";

            exit();
        }
        else{
            echo "<script>alert('輸入錯誤');</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
</head>
<body>
    <form action="index.php" method="POST">
    <label for="">使用者帳號</label>
    <input type="text" name="username">
    <br>
    <label for="">密碼</label>
    <input type="password" name="password">
    <br>
    <input type="submit" value="送出">
    </form>
</body>
</html>