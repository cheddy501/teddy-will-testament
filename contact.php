<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "libbelmopan@yahoo.com";
    $subject = "New Contact Form Submission - C&J Estate Planning";

    // Sanitize inputs
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $matter = strip_tags(trim($_POST["matter"]));
    $message = strip_tags(trim($_POST["message"]));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address.";
    } elseif (empty($name) || empty($matter) || empty($message)) {
        $error = "Please fill in all required fields.";
    } else {
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Type of Matter: $matter\n\n";
        $email_content .= "Message:\n$message\n";

        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";

        if (mail($to, $subject, $email_content, $headers)) {
            $success = "Thank you for contacting us, $name. We will get back to you shortly.";
        } else {
            $error = "Sorry, your message could not be sent. Please try again later.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Contact | C&J Estate Planning</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
  <h2>Contact Us</h2>
  <p>Please reach out for consultations or questions regarding your estate planning needs.</p>
  <form action="contact.php" method="POST">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="matter">Type of Matter:</label><br>
    <select id="matter" name="matter" required>
      <option value="">-- Please Select --</option>
      <option value="Last Will & Testament Preparation">Last Will & Testament Preparation</option>
      <option value="Grant of Administration Preparation">Grant of Administration Preparation</option>
      <option value="Grant of Probate Preparation">Grant of Probate Preparation</option>
      <option value="POA for Financial & Legal Matters">POA for Financial & Legal Matters</option>
      <option value="POA for Healthcare & Personal Care">POA for Healthcare & Personal Care</option>
      <option value="Trusts">Trusts</option>
    </select><br><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="5" required></textarea><br><br>

    <button type="submit">Send Message</button>
  </form>
</div>

<footer>
  &copy; 2025 C&J Estate Planning Consultancy. All rights reserved.
</footer>

</body>
</html>
