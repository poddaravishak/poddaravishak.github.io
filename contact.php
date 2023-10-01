<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Your email configuration
    $to = "avishakpoddar@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission from $fullname";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send the email
    $mailSuccess = mail($to, $subject, $message, $headers);
    
    if ($mailSuccess) {
        echo "<p>Your message has been sent successfully. Thank you!</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
}
?>
