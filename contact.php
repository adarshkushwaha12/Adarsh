<?php

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


// Insert into database
$sql = "INSERT INTO enquiries (name,email,subject,message)
VALUES ('$name','$email','$subject','$message')";

$conn->query($sql);


// Send Email
$to = "adarshkumarkushwaha976@gmail.com";
$headers = "From: $email";

$mailMessage = "Name: $name\n";
$mailMessage .= "Email: $email\n";
$mailMessage .= "Subject: $subject\n";
$mailMessage .= "Message: $message";

mail($to, $subject, $mailMessage, $headers);


echo "Message sent successfully!";

$conn->close();

?>