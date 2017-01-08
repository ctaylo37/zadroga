<?php

$EmailFrom = "Zadroga App";
$EmailTo = "Berwyn425@gmail.com";
$Subject = "Web Inquiry";
$Name = Trim(stripslashes($_POST['Name']));  
$Email = Trim(stripslashes($_POST['Email'])); 
$Feedback = Trim(stripslashes($_POST['Feedback']));  

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Feedback: ";
$Body .= $Feedback;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>