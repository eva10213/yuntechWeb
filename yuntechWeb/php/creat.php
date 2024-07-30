<?php

    require_once('conn.php');
    try {
        $title = $_POST['title'];
        $content = $_POST['content'];
    
       if (empty($title) || empty($content)){
        die('有空值輸入'.$conn->connect_error);
       }
    
       $sql =  sprintf("INSERT INTO news(id,title,content,date)
        VALUES(NULL,'%s','%s',CURRENT_DATE())",$title,$content);
        $result = $conn->query($sql);
    
        if(!$result){
            die("新增錯誤".$conn->connect_error);
        }
        header("Location: read.php");
    }
    catch(Exception $e){
        echo "發生錯誤".$e->getMessage();

    }
?>
