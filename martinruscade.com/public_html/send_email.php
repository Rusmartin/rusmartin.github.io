<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Set up the email
  $to = "recipient@example.com";
  $subject = "New message from $name";
  $body = "Name: $name\nEmail: $email\n\n$message";
  $headers = "From: $email";
  
  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email.";
  }
}
?>