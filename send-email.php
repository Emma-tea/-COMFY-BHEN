<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $country = htmlspecialchars($_POST["country"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "comfybhentravelconsultant@gmail.com"; // Replace with your email
    $subject = "New Contact Form Submission";
    $headers = "From: $email" . "\r\n" . "Reply-To: $email";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Country: $country\n";
    $body .= "Message: $message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Success! Your message has been sent.";
    } else {
        echo "Error! Message could not be sent.";
    }
}
?>
