<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate form data (you may add more validation as needed)

    // Send email
    $to = "forouzanfallah@gmail.com";
    $subject = "Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\n\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        // Email sent successfully
        header("Location: thank_you_page.html"); // Redirect to a thank you page
        exit;
    } else {
        // Failed to send email
        echo "Failed to send email. Please try again later.";
    }
}
?>
