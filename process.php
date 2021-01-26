<?php
//mail form script
$to = "talkaboutitrec@gmail.com";
$Subject = "--- NEW MESSAGE ---";

//values for email
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];

$headers .= "Content-type: text/html;\r\n";
$headers .= "From: $Email";

//mail function
mail($to, $Subject, $Message, $headers);
echo "---+ 3mail has been s3nt, th4nk Y0U<3 +---";
?>