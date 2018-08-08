<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

$mailTo = $_POST['emailTo'];
$mailFrom = $_POST['emailFrom'];
$subject = $_POST['subject'];
$message = $_POST['message'];


mail($mailTo, $subject, $message, "From: ".$mailFrom);
?>
  </body>
</html>
