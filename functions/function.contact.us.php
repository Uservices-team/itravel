<?php
error_reporting(0);

$form_subject = $_POST['form_subject']; // required
$form_fname = $_POST['form_fname']; // required
$form_lname = $_POST['form_lname']; // required
$email_from = $_POST['form_email']; // required
$form_phone = $_POST['form_phone']; // not required
$form_message = $_POST['form_message']; // required

$to = "info@thei.lk";
$subject = $form_subject. ' '.$form_fname.' '.$form_lname.;
$txt = 'I am '.$form_fname.' '.$form_lname.'. My contact number '.$form_phone.' & my email is '.$email_from.'. My message is "'.$form_message.'"';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: <accounts@stxbrokers.com>" . "\r\n";
$headers .= "Cc: hello@stxbrokers.com" . "\r\n";
$headers .= "Reply-To: "."$email_from"."";

mail($to,$subject,$txt,$headers);

echo '<script type="text/javascript">window.location="../contact?status=success";</script>';

?>