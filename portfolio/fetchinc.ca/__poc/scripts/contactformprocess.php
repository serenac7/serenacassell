<?php

$email_to = "serena.c7@gmail.com";
$email_subject = "FETCHINC.CA CONTACT FORM EMAIL";
$antispam_answer = "25";

function throw_error($error) {
	echo "Sorry, but there were error(s) found with the form you submitted. ";
	echo "These errors appear below.<br /><br />";
	echo $error."<br /><br />";
	echo "Please go back and fix these errors.<br /><br />";
	die();
}

if(!isset($_POST['full_name']) ||
	!isset($_POST['email_addr']) ||
	!isset($_POST['the_message']) ||
	!isset($_POST['anti_spam'])
	) {
	throw_error('Sorry, there appears to be a problem with your form submission.');
}

$full_name = $_POST['full_name']; // required
$email_from = $_POST['email_addr']; // required
$comments = $_POST['the_message']; // required
$antispam = $_POST['anti_spam']; // required

$error_message = "";

if($antispam <> $antispam_answer) {
$error_message .= 'The Anti-Spam answer you entered is not correct.<br />';
}

if(strlen($error_message) > 0) {
	throw_error($error_message);
}

$email_message = "Form details below.\r\n\r\n";

function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}

$email_message .= "Full Name: ".clean_string($full_name)."\r\n";
$email_message .= "Email: ".clean_string($email_from)."\r\n";
$email_message .= "Message: ".clean_string($comments)."\r\n";

$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- include your own success html here -->

Thank you for contacting us. This email address is not checked regularly; if the matter is urgent, please call us directly at (902) 499-9999.
<br /><a href="http://wwww.fetchinc.ca">Return Home</a>

<?php

die();
?>
