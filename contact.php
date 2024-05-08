<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Compose email message
    $to = "sudipdas0002@gmail.com"; // Your email address
    $subject = "New Message from $fullname";
    $body = "Name: $fullname\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Subject: $subject\n";
    $body .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully. We'll get back to you shortly!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
