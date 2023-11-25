<!DOCTYPE html>
<html>
<title>Student Database</title>
<body>
<h2>Send Mail Form</h2>
<form method="post" action="send_email.php">
  <input type="text" name="name" placeholder="Your Name" required>
  <input type="email" name="email" placeholder="Your Email" required>
  <textarea name="message" placeholder="Your Message" required></textarea>
  <input type="submit" value="Send">
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "mail2activeshail@gmail.com.com"; // Replace with the recipient email address
  $subject = "New Form Submission";
  $headers = "From: $email\r\n" .
             "Reply-To: $email\r\n" .
             "X-Mailer: PHP/" . phpversion();

  // Compose the email message
  $emailMessage = "Name: $name\n";
  $emailMessage .= "Email: $email\n";
  $emailMessage .= "Message:\n$message\n";

  // Send the email
  if (mail($to, $subject, $emailMessage, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email.";
  }
}
?>