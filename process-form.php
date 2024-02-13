<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Replace with your actual email address
  $to = "info@khemo.co.za";

  // Sanitize and validate input
  $name = htmlspecialchars(trim($_POST["name"]));
  $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
  $phone = htmlspecialchars(trim($_POST["phone"]));
  $message = htmlspecialchars(trim($_POST["message"]));
  $interest = htmlspecialchars(trim($_POST["interest"]));
  $otherInterest = htmlspecialchars(trim($_POST["otherInterest"]));

  // Validate required fields
  if (empty($name) || !$email || empty($message) || empty($interest)) {
    // Handle validation errors, redirect back to the form with an error message
    header("Location: contact.html?error=1");
    exit;
  }

  // Validate phone number pattern
  if (!preg_match("/^[0-9]{10}$/", $phone)) {
    // Handle invalid phone number error
    header("Location: contact.html?error=3");
    exit;
  }

  // Validate CAPTCHA (assuming client-side validation already occurred)
  // Replace with your CAPTCHA verification logic (e.g., Google reCAPTCHA)
  if (!/* validate CAPTCHA*/) {
    // Handle invalid CAPTCHA error
    header("Location: contact.html?error=4");
    exit;
  }

  // Handle selected interest with "other" option
  if ($interest === "other") {
    $interest = $otherInterest;
  }

  $email_body = "Name: $name\n";
  $email_body .= "Email: $email\n";
  $email_body .= "Phone: $phone\n";
  $email_body .= "Interest: $interest\n\n";
  $email_body .= "Message:\n$message";

  $headers = "From: $email";

  // Use PHPMailer or other advanced libraries for better email handling
  if (mail($to, "New Form Submission", $email_body, $headers)) {
    // Successful email send, redirect to thank-you page
    header("Location: thank-you.html");
    exit;
  } else {
    // Email send failed, handle accordingly (e.g., redirect with error message)
    header("Location: contact.html?error=2");
    exit;
  }
}

?>
