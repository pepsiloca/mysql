<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root", "");
date_default_timezone_set("Asia/Taipei");

$sql="update `student` set `name`='李小名', `birthday`='2010-10-05',`tel`='0944003311' where `id`='3'";
$res=$pdo->exec($sql);

echo $sql;

if($res>=1){
    echo $res;
    echo "更新成功";
}else{
    echo $res;
    echo "更新失敗";
}


?>
