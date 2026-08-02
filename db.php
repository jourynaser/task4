<?php
// بيانات الاتصال بقاعدة البيانات - غيّرها ببياناتك من InfinityFree
$host = "sql304.infinityfree.com";      // اسم السيرفر (Hostname)
$user = "if0_42558441";                // اسم المستخدم
$pass = "gPVh6XXXtEK2";           // كلمة المرور
$dbname = "if0_42558441_control_db";   // اسم قاعدة البيانات

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "فشل الاتصال: " . $conn->connect_error]));
}
?>
