​<?php
require_once 'PHPMailer-master/PHPMailerAutoload.php';
if(isset($_POST['submit'])) {
$mail= new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug=1;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->CharSet="UTF-8";

$mail->Host='smtp.gmail.com';
$mail->Port=465;
$mail->Username='abhijeetupadhyay73@gmail.com';
$mail->Password='2011bcs1015';


$mail->From='abhijeetupadhyay73@gmail.com';
$mail->FromName='Abhijeet Upadhyay';
$mail->AddAddress('sharma.abhinav021@gmail.com');
$mail->AddReplyTo('abhijeetupadhyay73@gmail.com','information');

$mail->IsHTML(true);
$mail->Subject="php mailer send mail basics";
$mail->AltBody="to view please use html ..fsgs jfef fjrefs ";
$mail->Body="Hello";

if(!$mail->Send())
{
    echo"mailer error: ".$mail->ErrorInfo;
}
else
{
    echo "message sent!";
}
}
?>
​
