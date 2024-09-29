<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_num = $_POST['phone_num'];
    $message = $_POST['message'];
    
    // Email details
    $to = "vaishnavlandmark@gmail.com"; // Destination email
    $subject = "New Contact Form Submission";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    // Email message content
    $body = "
    <html>
    <body>
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone Number:</strong> {$phone_num}</p>
        <p><strong>Message:</strong><br>{$message}</p>
    </body>
    </html>
    ";
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
