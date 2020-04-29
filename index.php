<h1>資料庫的連線</h1>
<?php
$dsn="mysql:host:localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');
date_default_timezone_set("Asia/Taipei");

$sql="insert into student (`id`,
                         `acc`,
                         `pw`,
                         `name`,
                         `email`,
                         `tel`,
                         `creat_time`,
                         `up_time`,
                         `birthday`) 
                  values(null,
                         'loca',
                         'pepsiloca',
                         '黃順琳',
                         'locasketch@gmail.com', 
                         '0920083324', 
                         '".date("Y-m-d H:i:s")."',
                         '".date("Y-m-d H:i:s")."', 
                         '1982-08-24')";

echo $sql;
echo "<br>";
// $pdo->query($sql);
echo $pdo->exec($sql); //不回傳資料 但回傳成功或失敗(0 or 1)
echo "資料已新增加";
