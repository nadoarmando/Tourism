<?php
    require_once "php_code/login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="yousef mohamed">
    <link type="image/png" sizes="16*16" rel="icon" href="#####">
    <!-- templet main css rules -->
    <link rel="stylesheet" href="style/تسجيل الدخول.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300..900&display=swap" rel="stylesheet">
    <!-- templet font awesome -->
    <link rel="stylesheet" href="style/all.min.css">
    <title>تسجيل دخول</title>
</head>
<body>
    <div class=" container container-s">
        <div class="image-s image" >
            <img src="images/free-photo-of-man-with-camels-in-desert.jpeg" alt="">
        </div>
        <form action="" method="post">
            <div class="content-s content">
                <div class="paragraph">
                    <h5>تسجيل الدخول مع البريد الإلكتروني وكلمة المرور الخاصة بك</h5>
                    <p>يرجى تعبئة المعلومات المطلوبة في الأسفل</p>
                </div>
                <div class="row1">
                    <label for="email">البريد الالكتروني</label>
                    <input type="email" placeholder="ادخل البريد الالكتروني" name="email" required>    
                    <label for="password">كلمه السر</label>                   
                    <input type="password" placeholder="ادخل كلمه السر" name="password" required>    
                <div class="row3">
                    <input type="submit" id="submit"  name="sub" value="تسجيل الدخول">
                    <a href="تسجيل.php">تسجيل</a>
                </div>
            </div>
        </form>
    </div>
    <script src="js/index.js"></script>
</body>
</html>