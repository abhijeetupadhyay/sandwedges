​<?php
require_once 'PHPMailer-master/PHPMailerAutoload.php';

$namee=$_POST['name'];
$emaill=$_POST['email'];
$mobilee=$_POST['mobileno'];
$messagee=$_POST['message'];

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
$mail->AddAddress('abhijeetupadhyay73@gmail.com');
$mail->AddReplyTo('abhijeetupadhyay73@gmail.com','information');

$mail->IsHTML(true);
$mail->Subject="Sandwedges Website";
$mail->AltBody="to view please use html ..fsgs jfef fjrefs ";
$mail->Body="<br><br>Hello, My name is ".$namee."<br><br> Email ID is ".$emaill."<br><br> Mobile no. is ".$mobilee."<br><br><br><br> Message :".$messagee."<br><br>Sent via: Sandwedges website.";

if(!$mail->Send())
{
    echo"mailer error: ".$mail->ErrorInfo;
}
else
{

	
header("Location: file:///C:/xampp/htdocs/sandwedges/sandwedges.html"); /* Redirect browser */

/* Make sure that code below does not get executed when we redirect. */
exit;
    echo "message sent!";
	}
?>
​
