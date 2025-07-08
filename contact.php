<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "libbelmopan@yahoo.com";
    $subject = "New Contact Form Submission - C&J Estate Planning";
    
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $matter = strip_tags(trim($_POST["matter"]));
    $message = strip_tags(trim($_POST["message"]));

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Type of Matter: $matter\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: $name <$email>";

    if (mail($to, $subject, $email_content, $headers)) {
        echo "<p>Thank you for contacting us, $name. We will get back to you shortly.</p>";
    } else {
        echo "<p>Sorry, your message could not be sent. Please try again later.</p>";
    }
} else {
    header("Location: contact.html");
    exit;
}
?>
