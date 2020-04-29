<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯會員</title>
<style>
.form{
        border:2px solid #ccf;
        width:350px;
        display:block;
        margin:auto;
    }

.form div{
        padding:5px;
        font-size:20px;
        font-weight:500px;
    }

.form input{
    padding:3px;
    font-size:18px;
    border:0;
    border-bottom:1px solid #aaa;
}

</style>
</head>
<body>
    <h1>編輯會員</h1>
    <?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,"root","");
    date_default_timezone_set("Asia/Taipei");

    $id=$_GET['user'];
    $sql="select * from `student` where `id`='$id'";
    $user=$pdo->query($sql)->fetch();
    ?>


    <form action="update_user.php" method="post" class="form">
        <input type='hidden' name="id" value="">
        <div><lable for="acc">帳號:</lable><input type='text' name="acc" value="<?=$user['acc'];?>"></div>
        <div><lable for="pw">密碼:</lable><input type='password' name="pw" value="<?=$user['pw'];?>"></div>
        <div><lable for="name">姓名:</lable><input type='text' name="name" value="<?=$user['name'];?>"></div>
        <div><lable for="email">email:</lable><input type='text' name="email" value="<?=$user['email'];?>"></div>
        <div><lable for="tel">電話:</lable><input type='text' name="tel" value="<?=$user['tel'];?>"></div>
        <div><lable for="birthday">生日:</lable><input type='date' name="birthday" value="<?=$user['birthday'];?>"></div>

    <div class="">
    <input type="submit" value="送出">
    <input type="reset" value="重置">
    </div>
    </form>
    

    
</body>
</html>