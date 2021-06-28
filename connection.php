<!DOCTYPE html>
<html>
<body>

<?php

//create.connection

$user="root";
$pass="";
$db="slick-control";

$connection= new mysqli("localhost",$user ,$pass ,$db);

//check connection
if(!$connection)
{
die("unable to connect to the database".connection_erorr);
}
echo "Database connection successfully .";
//close connection



$inser_data = $connection -> query("INSERT INTO repot (run,motorl1,motorl2,motorl3,motorl4,motorl5)
VALUES ('1','90','90','90','90','90')");
// كلمة محجوزة تستخدم لإضافة البيانات للجدول INSERT INTO 
/*
طريقة الاستخدام
ثم اسم الجدول المراد اضافة البيانات له INSERT INTO نقوم بكتابة 
داخل () نقوم بكتابة الاعمدة التي نرغب باضافة البيانات لها
نقوم بكتابة داخلها البيانات ويكون ترتيب البيانات مطابق لترتيب العمود المدخل في القوس السابق VALUES()
كأننا نقول اضف للجدول التالي (الاعمدة التالية) بالقيم التالية (القيم)
*/
// لتأكد من تنفيذ عملية اضافة البيانات
if ($inser_data === TRUE) {
    echo "تم إضافة البيانات للجدول";
}
else
{
    echo " خطأ، لم يتم اضافة البيانات :". $connection->error;
}
	?>
	</body>
</html>