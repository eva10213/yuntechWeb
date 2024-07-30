<?php
    session_start();
    if (!isset($_SESSION['username'])){
        echo "<script>alert('請先登入'); window.location.href='index.php';</script>";
        exit();
    }

    require_once('conn.php');

    $result = $conn -> query("SELECT * FROM news");

    if (!$result) {
        die("查詢失敗".$conn->connect_error);
    }

?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>
    <a href="insert.html">新增"最新訊息"</a>
    <a href="home.php">回到主頁</a>
    <style>
        a {
            text-decoration: none;
            background-color: whitesmoke;
            width: 100px;
            height: 50px;
            border: 1px solid black;
            padding: 3px 6px;
            border-radius: 3px;
            color: black;
            font-size: 11pt;
        }

        a:hover {
            background-color: gainsboro;
        }
    </style>
</head>
<?php 
        while ($row = $result -> fetch_assoc()){
    ?>
        <h3>
            <?php 

            echo "Id:".$row['id'].'<br>';
            echo "Title:".$row['title'].'<br>';
            echo "Content:".$row['content'].'<br>';
            echo "Date:".$row['date'].'<br>';

            ?>

        </h3>
            
        <form action="delete.php" method="get">
            <input type="text" name="id" id="id" value=<?php echo $row['id'];?> hidden>
            <span><input type="submit" name="delete" value="刪除">
        </form>
            <a href="update.php?id=<?php echo $row['id'];?>">修改</a></span>
        <hr>

    <?php 
        }
    ?>

<body>
    
</body>
</html>