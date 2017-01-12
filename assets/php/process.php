<?php
//<!--ini_set('display_errors', 'On'); -->
//<!--error_reporting(E_ALL); $aUserScores = array('Ben' => 7,'Linda' => 4,'Tony' => 5,'Alice' => '9'); -->
//<!--echo '<pre>'; var_dump($aUserScores); echo '</pre>';-->

//TODO:  add company
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 

$firstname = test_input($_POST["firstname"]);
$lastname = test_input($_POST["lastname"]);
$email = test_input($_POST["email"]);
$message = test_input($_POST["message"]);

$EmailTo = "barton.pj@gmail.com";
$Subject = "New Message Received";

// prepare email body text
$Body .= $firstname;
$Body .=  " ";
$Body .= $lastname;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success){
    echo "success";
}else{
    echo "invalid";
}

?>