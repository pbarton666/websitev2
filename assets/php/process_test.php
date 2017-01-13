<?php

//TODO:  add company
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //$firstname = test_input($_POST["firstname"]);
  //$lastname = test_input($_POST["lastname"]);
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $message = test_input($_POST["message"]);
  //$human = test_input($_POST["human"]);
}

$EmailTo = "barton.pj@gmail.com";
$Subject = "New Message Received";

// prepare email body text
$Body = "Name: ";
$Body .= $name;
//$Body .= $firstname;
//$Body .= " ";
//$Body .= $lastname;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success){
    echo "success";
}else{
    echo "invalid";
}

?>