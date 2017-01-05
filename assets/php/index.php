<?php

  $firstname = "";
  $lastname = "";
  $email = "";
  $message = "";
  $human = 0;
  $body="";
  $to="";
  $from="";
  $subject="";
  $errHuman="";

  $firstname = $_POST['first-name'];
  $lastname = $_POST['last-name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $human = intval($_POST['human']);
  
  if ($human !== 4) {
    $errHuman = 'Your anti-spam is incorrect';
  }
  
  if (mail ($to, $subject, $body, $from)) {
     $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
  } 
  
  else {
  $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
  }
  
?>