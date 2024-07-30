# 20242024第14屆全國大專校院倫理個案分析暨微電影競賽網站

## 簡述
此網站提供比賽相關資訊給參賽者，參賽者可透過位於導覽列上的**最新消息**得知比賽最新資訊、 **關於競賽**得知賽程及介紹，也有**粉絲專頁、交通資訊**的連結可以直接連結到該網頁。
除此之外，還有**歷屆競賽**、**下載專區**、**活動相簿**，供參賽者參考。
而在右下角則有**點我報名**的小按鈕，提供參賽者報名的途徑。

## 環境設定
Windows 11
php 8.3.9
Apache 2.4.62 
mysql Ver 15.1 Distrib 10.4.16-MariaDB, for Win64 (AMD64)

## 如何用?
簡介:
    除了announcement.php這個網頁，其他網頁皆為靜態，可以直接下載完檔案後解壓縮，點擊檔案開啟即可。
    由於announcement.php需要搭配MySQL去進行最新消息的資料存取，所以必須在環境中也建立資料庫(MySQL)。
    而資料庫的連線資料目前是撰寫於conn.php中，若有需要變更資料庫連線方式可於conn.php更改。

詳細流程:
    1.下載apache、php、mysql
    2.將php相關設定加入apache設定檔中(httpd.conf)，並更改apache檔案預設路徑(Define SRVROOT，預設是在c槽)
    3.加入apache服務，並至"電腦管理"開啟apache服務
    4.可以打打看localhost看有沒有成功
    5.在php.ini中設定mysqli
    6.打開mysql 手動建立資料庫 並設定存取身分 (要更新至conn.php)
    7.測試網站連線

## 可能會遇到的問題
*********************************************************************************
如何加入apache服務
    1.使用管理員打開cmd
    2.切換至apache下的bin目錄
    3.輸入httpd -k install
    4.如果出現防火牆就允許存取

php檔無法打開 -> 要到apache的httpd.conf增加php相關設定。
    1.在httpd.conf中搜尋index.html，並在其尾部加上index.php
    2.加入AddType application/x-httpd-php .php
    3.去php檔案那邊找到php.ini-devlopment或productionr，將其中一個改成php.ini
    4.將第3點的路徑複製到httpd.conf最後加上PHPIniDir 路徑
    5.去php檔案中尋找php8apache2_4.dll 的檔案 並將路徑複製到httpd.conf最後，加上LoadModule 路徑
    
網址參考:https://www.youtube.com/watch?v=0o410safrAY&ab_channel=%E7%BF%94%E5%A4%AA%E5%B7%A5%E5%9D%8A

*********************************************************************************
can't find the class called mysqli -> 要到php.ini增加mysqli相關設定
    將extension_dir設定正確的ext資料夾路徑，並將extension=mysqli此句取消註解。

網址參考: https://stackoverflow.com/questions/54500881/how-do-i-enable-mysqli-for-my-php-script

*********************************************************************************
Unknown database  -> 必須在mysql中建立資料庫 且寫在conn.php相關設定

Unknown character set -> 可能是該版本沒有或打錯
