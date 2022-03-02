<?php

$emailTo = "Brenda <fetchinc.k9@gmail.com>";
//$emailTo = "Serena <serena.c7@gmail.com>";
$emailSubject = "FETCHK9.CA: Contact Form";
$stopSpamAnswer = "25";


function isEmptyString($inString){
  if (isset($inString) && !is_null($inString) && strlen($inString) > 0) {
    return false;
  }else{
    return true;
  }
}


function throw_error($error) {
	echo "Sorry, but there were error(s) found with the form you submitted. ";
	echo "These errors appear below.<br /><br />";
	echo $error."<br /><br />";
	echo "Please go back and fix these errors.<br /><br />";
	
  echo "<br /><br /><p>Data Entered: <br />";
  foreach ($_POST as $key => $value) {
    
      switch($key){
        case "fullName":
          $label = "Full Name";
          break;
        case "emailAddr":
          $label = "Email Address";
          break;
        case "emailAddr":
          $label = "Email Address";
          break;
        case "queryAbout":
          $label = "Question Type";
          break;
        case "theMessage":
          $label = "Your message";
          break;
        case "antiSpam":
          $label = "Spam Prevention";
          break;
        default: 
          $label = $key;
      }
      echo "&nbsp;&nbsp;&nbsp;" .$label. ": '" . $value . "' <br />";
  }
  echo "</p>";
  
  die();
}


//set variables
$person = $_POST["fullName"]; // required
$emailFrom = $_POST["emailAddr"]; // required
$comments = $_POST["theMessage"]; // required
$stopSpam = $_POST["antiSpam"]; // required
$queryAbout = $_POST["queryAbout"];
$errorMessage = "";

//perform null checks  
if(isEmptyString($person)){
  $errorMessage .= "Full Name is required.<br />";
}
if(isEmptyString($emailFrom)){
  $errorMessage .= "Email Address is required.<br />";
}
if(isEmptyString($comments)){
  $errorMessage .= "Your Message is required.<br />";
}
if(isEmptyString($stopSpam)){
  $errorMessage .= "The anti-spam check is required.<br />";
}

//Other validations
if(!isEmptyString($emailFrom) && !filter_var($emailFrom, FILTER_VALIDATE_EMAIL)){
  $errorMessage .= "Email Address is invalid: ".$emailFrom."<br />";
}
if(!isEmptyString($stopSpam) && $stopSpam <> $stopSpamAnswer) {
  $errorMessage .= "The spam prevention response that was entered is not correct. Value entered: ".$stopSpam."<br />";
}

//Stop processing if any errors
if(!isEmptyString($errorMessage) > 0) {
	throw_error($errorMessage);
}

$emailMessage = "Contact Form details below:\r\n\r\n";

function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}

$emailMessage .= "Full Name: ".clean_string($person)."\r\n";
$emailMessage .= "Email: ".clean_string($emailFrom)."\r\n";
$emailMessage .= "Question Type: ".clean_string($queryAbout)."\r\n";
$emailMessage .= "Message: \r\n".clean_string($comments)."\r\n";

$headers = "From: Fetch Inc <info@fetchk9.ca> \r\n".
"Reply-To: ".$person." <".$emailFrom."> \r\n" .
"X-Mailer: PHP/" . phpversion();
@mail($emailTo, $emailSubject, $emailMessage, $headers);
?>

<!-- include success HTML here -->
<h1>Successfully sent!</h1>
<p>Thank you for contacting us. This email address is not checked regularly; if the matter is urgent, please call us directly at (902) 468-0207.</p>
<p><a href="https://fetchk9.ca/">Return Home</a></p>

<?php
die();
?>
