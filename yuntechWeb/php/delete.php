<?php
    require_once('conn.php');
    if (empty($_GET['id'])){
        die("沒有id無法刪除");
    }
    $id = $_GET['id'];
    $sql = sprintf("DELETE FROM news WHERE id=%d",$id);

    $result = $conn->query($sql);
    if (!$result){
        echo $conn->connect_error;
        die('資料無法刪除');
    }
    header("Location:read.php");
?>