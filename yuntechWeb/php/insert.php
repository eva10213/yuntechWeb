<?php
    session_start();
    if (!isset($_SESSION['username'])){
        echo "<script>alert('請先登入'); window.location.href='index.php';</script>";
        exit();
    }

?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/script.js" defer></script>
    <title>增加新資料</title>
</head>
<body>
    <form action="creat.php" method="post">
        <h1>新增"最新訊息"</h1>

        <label for="">標題:</label>
        <textarea type="text" name="title" id="title" style="width: 300px; height: 50px;"></textarea>
        <br>
        <br>
        <label for="">內容:</label>
        <textarea type="text" name="content" id="content" style="width: 500px; height: 200px;"></textarea>
        <br>
        <br>
        <input type="button" value ="點我幫文章內容增加換行" onclick  = "insertText('<br>')">
        <input type="submit">
        </form>
        
    
</body>
</html>