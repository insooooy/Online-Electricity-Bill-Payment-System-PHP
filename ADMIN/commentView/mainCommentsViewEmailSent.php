<?php


$conn =	mysqli_connect('localhost' , 'root' ,'' ,'test');
$id=$_POST['id2'];
$message=$_POST['message'];
$sql="SELECT  * FROM usercoments WHERE QueryId='$id'";
$customerID="";
$email="";
$result  = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)) {

    $customerID=$row ['customerID'];
}
$sql2="SELECT  * FROM registration WHERE NIC='$customerID'";
$result2  = mysqli_query($conn,$sql2);
while($row2 = mysqli_fetch_assoc($result2)) {

    $email=$row2 ['Email'];
}
 
    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor2/autoload.php';

$mail = new PHPMailer();                              
$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com';              
$mail->SMTPAuth = true;                               
$mail->Username = 'ak9145993@gmail.com';                 
$mail->Password = 'Izaz12345';                           
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;  
$mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )
    );


$mail->From = 'ak9145993@gmail.com';
$mail->FromName = 'Mailer';

$mail->addAddress($email);             


$mail->isHTML(false);                                  

$mail->Subject = '';
$mail->Body  = $message;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    
    echo '<script> alert("message has been sent");</script>';
}



?>