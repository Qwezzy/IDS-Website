<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Send notification email
        $to = "sales@intermediateds.co.za";  // Replace with your actual email address
        $subject = "New Subscription";
        $message = "A new user subscribed to notifications. Email: $email";
        $headers = "From: sales@intermediateds.co.za";  // Replace with your website's email

        mail($to, $subject, $message, $headers);

        // Return a JSON response
        $response = ['status' => 'success', 'message' => 'Thank you for subscribing!'];
        echo json_encode($response);
        exit;
    }
}
?>
