<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากฟอร์ม
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // ที่อยู่อีเมล์ผู้รับ
    $to = 'sr341.edm@gmail.com';

    // หัวข้ออีเมล์
    $subject = "New Contact Form Submission from $name";

    // เนื้อหาอีเมล์
    $email_body = "
    <html>
    <head>
        <title>Contact Form Submission</title>
    </head>
    <body>
        <h2>Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong></p>
        <p>$message</p>
    </body>
    </html>
    ";

    // ตั้งค่า Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";

    // ส่งอีเมล์
    if (mail($to, $subject, $email_body, $headers)) {
        echo 'Sent successfully!';
    } else {
        echo 'Sorry! Has something wrong.';
    }
} else {
    echo 'Invalid request method';
}
?>
