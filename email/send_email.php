<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Validate form data
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Error: All fields are required.";
        exit;
    }
    
    // Send email
    $to = "bansalneeraj951@gmail.com";
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\n$message";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Error: Email sending failed.";
    }
} else {
    echo "Error: Invalid request method.";
}
?>
