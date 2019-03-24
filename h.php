<?php     
$to_email = 'kshetrisunny1@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: poojavishwas21@gmail.com';
mail($to_email,$subject,$message,$headers);
?>