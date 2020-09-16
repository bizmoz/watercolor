<?php

require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "mail.watercolor.in";

$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "web@watercolor.in";
$mail->Password = "Triangle123#";

$mail->From = "web@watercolor.in";
$mail->FromName = $_REQUEST['yourname'];
$mail->AddAddress("watercolor.ind@gmail.com");
//$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);

$mail->Subject = "Form From Watercolor";
$mail->Body = "<table width='600px' cellspacing='0' cellpadding='20' border='1' bordercolor='#dee2e6'><tr bgcolor='#e9ecef'><td>Name:</td><td>".$_REQUEST['yourname']."</td>  <tr><td>Email:</td><td> ".$_REQUEST['email']."</td></tr><tr bgcolor='#e9ecef'><td> Message :</td><td> ".$_REQUEST['description']."</td></tr>  </table>";
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

header("location:../contactus.php?status=success");

?>