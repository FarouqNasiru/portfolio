<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['comment']);

    // Your email address
    $to = "farouqtest123@gmail.com";

    // Email subject
    $subject = "New Contact Form Submission";

    // Email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
} else {
    echo "Invalid request.";
}
?>
