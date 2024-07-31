<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากฟอร์ม
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // ที่อยู่อีเมล์ผู้รับ
    $to = 'sr341.edm@gmail.com';

    // หัวข้ออีเมล์
    $subject = "Email from $name";

    // ตั้งค่า Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";

    // ส่งอีเมล์
    if (mail($to, $subject, $email_body, $headers)) {
        echo 'อีเมล์ถูกส่งเรียบร้อยแล้ว';
    } else {
        echo 'ไม่สามารถส่งอีเมล์ได้';
    }
} else {
    echo 'Invalid request method';
}
?>

