<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $patient = $_POST['patient'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email address to send the form data to
    $to = "mydentalive@gmail.com";

    // Subject of the email
    $email_subject = "New Form Submission: $subject";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Patient: $patient\n";
    $email_message .= "Subject: $subject\n\n";
    $email_message .= "Message:\n$message";

    // Set additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Use mail() function to send the email
    if (mail($to, $email_subject, $email_message, $headers)) {
        echo "success"; 
        // header("Location: contact.php");

    } else {
        echo "error"; 
    }
} else {
    echo "error"; 
}
?>
