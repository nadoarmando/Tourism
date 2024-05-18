<!--php code-->
<?php
    require_once "php_code/sign.php";
?>
<!--end php code-->
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
    <title>تسجيل </title>
</head>
<body>
    <div class="container">
        <div class="image">
            <img src="images/free-photo-of-man-with-camels-in-desert.jpeg" alt="">
        </div>
        <form action="" method="post">
            <div class="content">
                <div class="paragraph">
                    <h1>تسجيل</h1>
                    <p>يرجي تعبئة المعلومات المطلوبة في الاسفل</p>
                </div>
                <div class="row1">
                    <label for="f-name">الاسم </label>
                    <input type="text" placeholder="ادخل الاسم" name="name" required>
                    <!--php code-->
                        <div>
                            <?php
                            //لمعرفة هل يوجد اى اخطاء فى الاسم 
                                if(isset($Name_err))echo "<span style='color: red;'>$Name_err</span>";
                            ?>
                        </div>
                    <!--end php code-->

                    <label for="email"> الرقم القومى</label>
                    <input type="number" name="id"  placeholder="الرقم القومي" required>
                    <!--php code-->
                        <div>
                            <?php
                            //لمعرفة هل يوجد اى اخطاء فى الاسم 
                                if(isset($Id_err))echo "<span style='color: red;'>$Id_err</span>";
                            ?>
                        </div>
                    <!--end php code-->
                    
                    <label for="email"> رقم الهاتف</label>
                    <input type="number" name="phone" placeholder="رقم الهاتف" required>
                    <!--php code-->
                        <div>
                            <?php
                            //لمعرفة هل يوجد اى اخطاء فى الاسم 
                                if(isset($Phone_err))echo "<span style='color: red;'>$Phone_err</span>";
                            ?>
                        </div>
                    <!--end php code-->

                    <label for="email">البريد الالكتروني</label>
                    <input type="email" placeholder="ادخل البريد الالكتروني" name="email" required>
                    <!--php code-->
                        <div>
                            <?php
                            //لمعرفة هل يوجد اى اخطاء فى الاسم 
                                if(isset($Email_err))echo "<span style='color: red;'>$Email_err</span>";
                            ?>
                        </div>
                    <!--end php code-->
                    
                    
                    <label for="password">كلمه السر</label>                   
                    <input type="password" placeholder="ادخل كلمه السر" name="password" required>
                    <label for="conf-password">تأكيد كلمه السر</label>
                    <input type="password" placeholder="اعد كتابة كلمة السر" name="conf-password" required> 
                    <!--php code-->
                        <div>
                            <?php
                            //لمعرفة هل يوجد اى اخطاء فى الاسم 
                                if(isset($Password_err))echo "<span style='color: red;'>$Password_err</span>";
                            ?>
                        </div>
                    <!--end php code-->
                    

                    <label for="age">العمر</label>
                    <select name="age" required>
                        <option value="" selected>اختر</option>
                        <option value="<10"> اقل من ١٠ </option>
                        <option value="10->20"> ١٠-٢٠</option>
                        <option value="21->30"> ٢١-٣٠ </option>
                        <option value="31->40">  ٣١-٤٠ </option>
                        <option value=">40">  اكبر من ٤٠</option>
                    </select>
                    <label for="town">المحافظة</label>
                    <select name="town" >
                        <option value=""selected>اختر</option>
                        <option value="القاهرة">  محافظة القاهرة </option>
                        <option value="الجيزة"> محافظة الجيزة</option>
                        <option value="القليوبية"> محافظة القليوبية </option>
                        <option value="الإسكندرية"> محافظة الإسكندرية</option>
                        <option value="البحيرة">محافظة البحيرة</option>
                        <option value="مطروح"> محافظة مطروح</option>
                        <option value="دمياط"> محافظة دمياط</option>
                        <option value="الدقهلية"> محافظة الدقهلية</option>
                        <option value="كفر الشيخ"> محافظة كفر الشيخ </option>
                        <option value="الغربية"> محافظة الغربية</option>
                        <option value="المنوفية"> محافظة المنوفية</option>
                        <option value="الشرقية"> محافظة الشرقية</option>
                        <option value="بورسعيد">محافظة بورسعيد</option>
                        <option value="السويس"> محافظة السويس</option>
                        <option value="شمال سيناء">محافظة شمال سيناء</option>
                        <option value="جنوب سيناء"> محافظة جنوب سيناء</option>
                        <option value="بنى سويف"> محافظة بني سويف</option>
                        <option value="الفيوم">محافظة الفيوم</option>
                        <option value="المنيا"> محافظة المنيا</option>
                        <option value="أسيوط">محافظة أسيوط</option>
                        <option value="الوادى الجديد">محافظة الوادي الجديد</option>
                        <option value="البحر الاحمر"> محافظة البحر الأحمر</option>
                        <option value="سوهاج"> محافظة سوهاج</option>
                        <option value="قنا">محافظة قنا</option>
                        <option value="الأقصر">محافظة الأقصر</option>
                        <option value="أسوان"> محافظة أسوان</option>
                        <option value="الاسماعيلية">محافظة الاسماعيلية</option>
                    </select>
                </div>
                <div class="row3">
                    <input type="submit" id="submit" name="sub" value="تسجيل">
                    <input type="reset" id="reset" value="الغاء">
                </div>
            </div>
             <!--php code-->
             <div>
                    <?php
                        //لو الحجز تم بالفعل بعرف المستخدم
                        if($good!="")
                        {
                            echo "<script>alert('Registered successfully');</script>";
                            echo "<script type='text/javascript'> document.location = 'تسجيل الدخول.php'; </script>";
                        }
                    ?>
            </div>
           <!--end php code-->
        </form>
        
    </div>
    <script src="js/index.js"></script>
</body>
</html>