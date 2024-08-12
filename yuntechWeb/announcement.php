<?php
  require_once('php/conn.php');
  $result = $conn->query('SELECT * FROM news ORDER BY date DESC,  id DESC');
  if (!$result){
    die('查無訊息');
  }

?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>最新消息</title>
  <link rel="stylesheet" href="style/include.css">
  <link rel="stylesheet" href="style/blog.css">
  <script src="js/script.js" defer></script>
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
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSd65jcGMwVrLgqRH8gedoj-oalJHaJfVDCgLDuP7XuOjYcffA/closedform" id="apply">我要報名</a>
    
      <h1>訊息公告</h1>
      <hr>
      <div class="announcement-container">
        <ul>
          <?php while ($row = $result -> fetch_assoc()){?>
          <li>
            <a href="artical.php?id=<?php echo $row['id']?>"><?php echo $row['title'];?></a>
            <span><?php echo $row['date'];?></span>
          </li>
          <?php }?>
        </ul>
      </div>
      <!-- <div class="blog-container">
        <p>訊息<span class="date">2024/12/31</span><a href="https://google.com">【決賽佳作名次修正公告】2023第十三屆全國大專校院倫理個案分析暨微電影競賽決賽佳作隊伍誤植修正!</a></p>

      </div>
      <div class="blog-container">
        <p>訊息<span class="date">2024/12/31</span><a href="https://google.com">【決賽佳作名次修正公告】2023第十三屆全國大專校院倫理個案分析暨微電影競賽決賽佳作隊伍誤植修正!</a></p>

      </div> -->
  </main>

  <footer>
    <p>Copyright © 2024 全國大專校院倫理個案分析暨微電影競賽雲林科技大學籌辦團隊</p>
  </footer>
</body>
</html>