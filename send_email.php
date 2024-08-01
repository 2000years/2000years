<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    
    $to = 'sr341.edm@gmail.com';

    
    $subject = "New Contact from $name";

    
    $email_body = "
    <html>
    <head>
        <title>Contact Form Submission</title>
    </head>
    <body>
        <h2>Contact SR341</h2>
        <p><strong>Name</strong> $name</p>
        <p><strong>Email</strong> $email</p>
        <p><strong>Message</strong></p>
        <p>$message</p>
    </body>
    </html>
    ";

    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";

    
    if (mail($to, $subject, $email_body, $headers)) {
        echo 'Sent successfully!';
    } else {
        echo 'Sorry! Has something wrong.';
    }
} else {
    echo 'Invalid request method';
}
?>
