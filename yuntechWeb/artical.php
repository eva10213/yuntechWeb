<?php
    require_once('php/conn.php');
    if (isset($_GET['id'])){
        $sql = sprintf("SELECT * FROM news WHERE id=%d",$_GET['id']);
        $result = $conn->query($sql);
    }


?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/include.css">
    <link rel="stylesheet" href="style/blog.css">
    <script src="js/script.js" defer></script>
    <title>article</title>
</head>

<body>
<header>
        <h1>2024 全國大專校院倫理個案分析暨微電影競賽</h1>
        <div class="menu-toggle">功能選單 ▽</div>
        <nav>
            <ul>
              <li><a href="index.html">首頁</a></li>
              <li><a href="announcement.php">最新消息</a></li>
              <li class="has-submenu"><a href="">關於競賽 ▽</a>
                <ul id="submenu">
                  <li><a href="workshop.html">賽前工作坊</a></li>
                  <li><a href="movie.html">微電影競賽</a></li>
                  <li><a href="caseAnalysis.html">個案分析競賽</a></li>
                  <li><a href="previousCompetitions.html">歷屆競賽</a></li>
                  <li><a href="eventAlbum.html">活動相簿</a></li>
                  <li><a href="download.html">下載專區</a></li>
                </ul>
              </li>
              <li><a href="https://www.yuntech.edu.tw/index.php/2019-08-20-05-41-18">交通資訊</a></li>
              <li><a href="https://www.facebook.com/NCCBE/">粉絲專頁</a></li>
            </ul>
        </nav>
      </header>
  
    <main>
      <body>
        <div class="blog-container">
            <?php while ($row = $result->fetch_assoc()){?>
            <div class="date"><?php echo $row['date'];?></div>
            <h2><?php echo $row['title'];?></h2>
            <div class="paragraph">
                <p><?php echo $row['content']; ?></p>
            </div>
            <?php }?>
        </div>    

      </body>
 

    </main>
</body>
</html>