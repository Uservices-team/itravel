<?php
error_reporting(0);

$form_subject_start = $_POST['form_subject_start']; // required
$form_subject_end = $_POST['form_subject_end']; // required
$form_fname = $_POST['form_fname']; // required
$form_lname = $_POST['form_lname']; // required
$form_phone = $_POST['form_phone']; // required
$email_from = $_POST['form_email']; // required
$form_message = $_POST['form_message']; // required

$to = "accounts@stxbrokers.com";
$subject = $form_subject_start. ' '.$form_fname.' '.$form_lname.' '.$form_subject_end;
$txt = 'I am '.$form_fname.' '.$form_lname.'. My email is '.$email_from.'. My email is '.$email_from.'. My mailing address would be "'.$form_message.'"';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: <noreply@stxbrokers.com>" . "\r\n";
$headers .= "Cc: hello@stxbrokers.com" . "\r\n";
$headers .= "Reply-To: "."$email_from"."";

mail($to,$subject,$txt,$headers);

echo '<script type="text/javascript">window.location="../thank-you?status=success";</script>';

?>