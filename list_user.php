<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員列表</title>
</head>
<style>

table{
   border:1px solid #ccc;
   border-collapse:collapse;
   margin:auto;
}

table td{
   border:1px solid #ccc;
   padding:5px;
   text-align:center;
}

h1{
  align-items:center;
}

</style>


<body>
<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");


$sql="select * from `student`";
$rows=$pdo->query($sql)->fetchAll();
?>

<h1>會員列表</h1>
<table>
    <tr>
        <td>id</td>
        <td>帳號</td>
        <td>密碼</td>
        <td>姓名</td>
        <td>email</td>
        <td>手機</td>
        <td>生日</td>
        <td>註冊日期</td>
    </tr>

<?php
foreach($rows as $row){
    echo "<tr>";
    echo "   <td>". $row['id']. "</td>";
    echo "   <td>". $row['acc']. "</td>";
    echo "   <td>". $row['pw']. "</td>";
    echo "   <td>". $row['name']. "</td>";
    echo "   <td>". $row['email']. "</td>";
    echo "   <td>". $row['tel']. "</td>";
    echo "   <td>". $row['birthday']. "</td>";
    echo "   <td>". $row['create_time']. "</td>";

      
}
?>
</table>


   



</body>
</html>