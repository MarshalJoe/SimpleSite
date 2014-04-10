<?php
$toemail = 'joseph.charles.marshall@gmail.com';
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

mail($toemail, 'New message', $message, 'From: ' . $email);

if(mail($toemail, 'New message re: '.$subject , $message, 'From: ' . $email)) {
	echo "Message sent";
} else {
	echo 'Uh oh... Try joseph.charles.marshall@gmail.com';
}
?>