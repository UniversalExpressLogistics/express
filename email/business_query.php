<?
$name = 'Name : ' . $_POST['fq_name'];
$email = $_POST['fq_email'];
$body = 'Body : ' . $_POST['fq_text'];
$contact = 'Contact : ' . $_POST['fq_contact'];

$to      = 'universal.amanaggarwal@gmail.com';
$message = $name  . "\r\n" . $contact . "\r\n"  . $body;
$subject = 'Business query from website';
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: universal.amanaggarwal@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
?>
