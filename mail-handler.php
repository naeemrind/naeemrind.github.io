<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $msg = $_POST['msg'];

  $to = 'rindnaeem@gmail.com';
  $subject = 'Portfolio Email';
  $message = "Name: ".$name."\n"."Wrote the follwoing: "."\n\n".$msg;
  $headers = "From: ".$email;

  if (mail($to, $subject, $message, $headers)) {
    echo "Sent Successfully";
  } else {
      echo "Can not Send";
  }



}


 ?>












//
