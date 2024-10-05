<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs and sanitize them
    $name = htmlspecialchars(trim($_POST["name"]));
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $nickname = htmlspecialchars(trim($_POST["nickname"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Admin email to receive messages
    $admin_email = "anupsingh2353@gmail.com"; // Change this to your email

    // Email subject and body
    $subject = "New Contact Form Submission from $name";
    $body = "Name: $name\n";
    $body .= "Phone: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: anupsingh2353@gmail.com"; // Change this to a valid email address

    // Send the email
    if (mail($admin_email, $subject, $body, $headers)) {
        // Show thank you message and redirect
        echo "<script>alert('Thank you, $name! Your message has been sent.'); window.location.href = 'your_contact_page.html';</script>";
    } else {
        echo "<script>alert('Oops! Something went wrong. Please try again later.'); window.location.href = 'your_contact_page.html';</script>";
    }
}
?>
