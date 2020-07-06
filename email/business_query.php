<?
$name = 'Name : ' . $_POST['fq_name'];
$email = 'Email : ' . $_POST['fq_email'];
$body = 'Body : ' . $_POST['fq_text'];
$contact = 'Contact : ' . $_POST['fq_contact'];

$to      = 'universal.amanaggarwal@gmail.com';
$message = $name  . "\r\n" . $contact . "\r\n"  . $body . "\r\n" . $email;
$subject = 'Business query from website';
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: universal.amanaggarwal@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo"<script language='javascript'>alert('Mail Sent Successfully');
    window.location.replace('../index.html');
    </script>";
} else {
    echo"<script language='javascript'>alert('Mail Failed, please try again');
    window.location.replace('../index.html');
    </script>";
}
?>
