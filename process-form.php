<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace with your actual email address
    $to = "info@khemo.co.za";

    // Sanitize and validate input
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Validate required fields
    if (empty($name) || !$email || empty($message)) {
        // Handle validation errors, perhaps redirect back to the form with an error message
        header("Location: contact.html?error=1");
        exit;
    }

    // Handle selected services
    $services = isset($_POST["services"]) ? implode(", ", $_POST["services"]) : "No services selected";

    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Services: $services\n\n";
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
