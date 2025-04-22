<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Capture form data
    $name     = htmlspecialchars($_POST['fullName']);
    $phone    = htmlspecialchars($_POST['phone']);
    $address  = htmlspecialchars($_POST['address']);
    $pincode  = htmlspecialchars($_POST['pincode']);
    $orderDetails = htmlspecialchars($_POST['orderDetails']);
    $orderTotal = htmlspecialchars($_POST['orderTotalValue']);

    // Set email parameters
    $to       = "manilukka143@gmail.com"; // Your real email
    $subject  = "🌿 New Order from Checkout Form";

    // Prepare the email message
    $message  = "You have received a new order:\n\n";
    $message .= "=== ORDER DETAILS ===\n";
    $message .= $orderDetails . "\n";
    $message .= "Total: ₹" . $orderTotal . "\n\n";
    $message .= "=== CUSTOMER INFORMATION ===\n";
    $message .= "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Pincode: $pincode\n";
    $message .= "Address: $address\n";

    // Set email headers
    $headers  = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $to\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email and handle response
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to a thank you page
        header("Location: thankyou.html");
        exit();
    } else {
        echo "❌ Failed to send email. Please try again later.";
    }
}
?>
