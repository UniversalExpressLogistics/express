<?
$name = 'Name : ' . $_POST['fq_name'];
$email = 'Email : ' . $_POST['fq_email'];
$body = 'Body : ' . $_POST['fq_text'];
$contact = 'Contact : ' . $_POST['fq_contact'];

$to      = 'universal.amanaggarwal@gmail.com';
$message = $name  . "\r\n" . $contact . "\r\n"  . $body . "\r\n" $email;
$subject = 'Business query from website';
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: universal.amanaggarwal@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
} else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
}
?>
