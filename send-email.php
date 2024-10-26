<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedPolicy = $_POST['selectedPolicy'];

    $to = "kartiki.mrepale@gmail.com";
    $subject = "Selected LIC Policy";
    $message = "The selected policy is: " . $selectedPolicy;
    $headers = "From: noreply@yourdomain.com";

    mail($to, $subject, $message, $headers);
    
    echo "Email sent successfully!";
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "kartiki.mrepale@gmail.com"; // Change this to your email
    $subject = "Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>
