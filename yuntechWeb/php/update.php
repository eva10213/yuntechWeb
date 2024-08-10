<?php
    session_start();
    if (!isset($_SESSION['username'])){
        echo "<script>alert('請先登入'); window.location.href='index.php';</script>";
        exit();
    }

    require_once('conn.php');
    if (isset($_GET['id'])){
        $readSql = sprintf("SELECT * FROM news WHERE id=%d",$_GET['id']);
        $readResult = $conn->query($readSql)->fetch_assoc();
    }


    if (isset($_POST['id'])){
        if (empty($_POST['title']) || empty($_POST['content'])){
            echo $conn->connect_error;
            die("更新資料為空");        
        }
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
    
        $sql = sprintf("UPDATE news SET title='%s', content='%s' ,date=CURRENT_DATE() WHERE id='%d'"
        ,$title,$content,$id);
        $result = $conn->query($sql);
        
        if (!$result){
            echo $conn -> connect_error;
            die('修改出錯');
    
        }
        header("Location: read.php");
    }
    
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src = "../js/script.js"></script> -->
    <script src="../js/script.js" defer></script>
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="text" name="id" id="" value = <?php echo $readResult['id'];?> hidden>
        <label for="title">標題</label>
        <input type="text" name="title" value="<?php echo $readResult['title'];?>" style="width: 300px; height:50px;">
        <br>
        <br>
        <label for="content">內容</label>
        <textarea name="content" id='content' style="width: 300px; height: 100px;"><?php echo $readResult['content']; ?></textarea>
        <br>
        <br>
        <input type="button" value ="點我幫文章內容增加換行" onclick  = "insertText('<br>')">
        <input type="submit" name="" id="" value="送出修改資料">
    </form>
</body>
</html>