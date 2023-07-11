cat<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>نتیجه</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <script src="JavaScriptResume.js"></script>
    <button onclick="toggleDarkMode()" class="darkmod" id="darkmod" name="darkmod">🌓</button>
    <br/><br>
    <form action="#" method="get"></form>
    <table border="2px" id="result" align="center" dir="rtl" cellspacing="10" >
        <tr>
            <td colspan="4" ><?= $_POST['photo'] ?></td>
        </tr>
        <tr>
            <td id="Sresult">نام:</td>
             <td id="Sresult"><?= $_POST['first_name'] ?></td>
             <td id="Sresult">نام خانوادگی:</td>
             <td id="Sresult"><?= $_POST['last_name'] ?></td>
        </tr>
         <tr>
            <td id="Sresult">عنوان شغلی:</td>
            <td id="Sresult"><?= $_POST['job'] ?></td>
            <td id="Sresult">جنسیت:</td>
            <td id="Sresult"><?= $_POST['sex'] ?></td>
         </tr>
         <tr>
            <td id="Sresult">وضعیت تاهل:</td>
            <td id="Sresult"><?= $_POST['married'] ?></td>
            <td id="Sresult">وضعیت سربازی:</td>
            <td id="Sresult"><?= $_POST['soldier'] ?></td>
         </tr>
         <tr>
            <td id="Sresult">روز تولد:</td>
            <td id="Sresult"><?= $_POST['days'] ?></td>
            <td id="Sresult"><?= $_POST['month'] ?></td>
            <td id="Sresult"><?= $_POST['year'] ?></td>
         </tr>
         <tr>
            <td id="Sresult">شماره تماس:</td>
            <td id="Sresult"><?= $_POST['phone'] ?></td>
            <td id="Sresult">ایمیل:</td>
            <td id="Sresult"><?= $_POST['email'] ?></td>
         </tr>
         <tr>
         <td id="Sresult">تلفن:</td>
         <td id="Sresult"><?= $_POST['number'] ?></td>
         <td id="Sresult">وب سایت:</td>
         <td id="Sresult"><?= $_POST['web'] ?></td>
         </tr>
         <tr>
            <td id="Sresult">استان:</td>
            <td id="Sresult"><?= $_POST['province'] ?></td>
            <td id="Sresult">آدرس:</td>
            <td id="Sresult"><?= $_POST['address'] ?></td>
            </tr>
            <tr>
                <td id="Sresult">مدرک تحصیلی:</td>
                <td id="Sresult"><?= $_POST['endEducation'] ?></td>
                <td id="Sresult">رشته تحصیلی دبیرستان:</td>
                <td id="Sresult"><?= $_POST['schoolMajor'] ?></td>
            <tr>
                <td id="Sresult">رشته تحصیلی دانشگاه:</td>
                <td id="Sresult"><?= $_POST['universMajor'] ?></td> 
                <td id="Sresult">مهارت ها:</td>
                <td id="Sresult"><?= $_POST['alltrick'] ?></td> 
            </tr>
                
            <tr>
                <td id="Sresult">هنر مورد علاقه:</td>
                <td id="Sresult"><?= $_POST['allinterest'] ?></td> 
                <td id="Sresult">ورزش مورد علاقه:</td>
                <td id="Sresult"><?= $_POST['sport'] ?></td> 
            </tr>
    </table>
</body>
</html>