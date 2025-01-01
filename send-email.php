<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "farouqtest123@gmail.com"; // Replace with your email address
        $subject = "New Contact Form Submission";
        $message = "You have received a new email: " . $email;
        $headers = "From: farouqnasiru@gmail.com"; // Replace with a valid sender email address

        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email.";
        }
    } else {
        echo "Invalid email address.";
    }
} else {
    echo "Invalid request method.";
}
?>
