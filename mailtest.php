<?php 

if(@mail("joseph.charles.marshall@gmail.com", 'test message', "test body") {
	echo '<h1>Your email was sent successfully</h1>';
} else {
	echo '<h1>There was a problem sending your email.</h1>';
}


?>