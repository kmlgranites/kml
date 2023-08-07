<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $granite_type = $_POST["granite_type"];
    $message = $_POST["message"];

    // Set the recipient email address where you want to receive the form submissions
    $to = "vkpixelsart@gmail.com, contact@kmlgranites.com";

    // Set the email subject
    $email_subject = "Contact Form Submission: $granite_type";

    // Compose the email body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Granite Type: $granite_type\n\n";
    $email_body .= "Message:\n$message";

    // Set the email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // If the email is sent successfully, redirect to a thank-you page
        header("Location: thank_you.php");
        exit();
    } else {
        // If there's an error in sending the email, display an error message
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>