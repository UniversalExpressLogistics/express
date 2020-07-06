<?php
$name = 'Name : ' . $_POST['name'];
$contact = 'Contact : ' . $_POST['contact'];
$email = 'Email : ' . $_POST['email'];
$subject = 'Subject : ' . $_POST['subject'];
$body = 'Body : ' . $_POST['message'];

$to      = 'universal.amanaggarwal@gmail.com';
$message = $name . "\r\n" . $contact ."\r\n" . $subject . "\r\n"  . $body;
$subject = 'Inquiry from Contact us page of Website';
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: universal.amanaggarwal@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
if (mail($to, $subject, $message, $headers)) {
    header('location: ../contact.html');
} else {
    header('location: ../404.html');
}
?>
