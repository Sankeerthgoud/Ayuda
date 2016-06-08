<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:login.php");
 }
?>


<?php
require_once('../PHPMailer/PHPMailerAutoload.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();
$subject=$_POST['comment'];
$body             = $subject;

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "smtp.gmail.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "goud.sankeerth@gmail.com";  // GMAIL username
$mail->Password   = "********";            // GMAIL password

$mail->SetFrom('goud.sankeerth@gmail.com', 'Sankeerth Goud');

$mail->Subject    = "Greetings from Ayuda";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$conn = new mysqli("localhost","root","","ayuda");
$query = "SELECT mail FROM volunteer";
$retval=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($retval))
{
    $address = $row['mail'];
    $mail->AddAddress("$address", "Volunteer");
}


$mail->Send();


  echo "Message sent!";


?>
