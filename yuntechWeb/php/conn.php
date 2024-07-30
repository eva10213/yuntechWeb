<?php
    // $severName = 'localhost';
    // $userName = 'admin';
    // $pwd = '1234';
    // $dbName = 'yuntech';

    // $conn = new mysqli($severName, $userName, $pwd, $dbName);
    $host="127.0.0.1";
    $port=3306;
    $socket="";
    $user="admin";
    $password="1234";
    $dbname="yuntech";
    
    $conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
        or die ('Could not connect to the database server' . mysqli_connect_error());
    
    //$con->close();
    
    // if ($conn -> connect_error){
    //     die('資料庫連線錯誤'. $conn-> connect_error);
    // }
    // if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    //     echo 'We don\'t have mysqli!!!';
    // } else {
    //     echo 'Phew we have it!';
    // }

    $conn->query('SET NAMES UTF8');
    $conn->query('SET time_zone = "+8:00"');
    $conn->query("CREATE TABLE IF NOT EXISTS news (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    content VARCHAR(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    date DATE NOT NULL
);")

?>