<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊會員</title>
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
    <H1>註冊會員</H1>
    <form action="add_user.php" method="post" class="form">
        <div><lable for="acc">帳號:</lable><input type='text' name="acc" value=""></div>
        <div><lable for="pw">密碼:</lable><input type='password' name="pw" value=""></div>
        <div><lable for="name">姓名:</lable><input type='text' name="name" value=""></div>
        <div><lable for="email">電話:</lable><input type='text' name="email" value=""></div>
        <div><lable for="tel">email:</lable><input type='text' name="tel" value=""></div>
        <div><lable for="birthday">生日:</lable><input type='date' name="birthday" value=""></div>

    <div>
    <input type='submit' value='送出'>
    <input type='reset' value='重置'>
    </div>
    </form>
    

    
</body>
</html>