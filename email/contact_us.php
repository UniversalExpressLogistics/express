<?
$name = 'Name : ' . $_POST['fname']; . "\r\n" . $_POST['lname'];
$email = $_POST['email'];
$subject = 'Subject : ' . $_POST['subject'];
$body = 'Body : ' . $_POST['message'];

$to      = 'universal.amanaggarwal@gmail.com';
$message = $name . "\r\n" . $subject . "\r\n"  . $body;
$subject = 'Inquiry from website';
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: universal.amanaggarwal@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
?>
