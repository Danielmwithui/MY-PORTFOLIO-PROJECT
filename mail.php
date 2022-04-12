<?php
use PHPMailer\PHPMailer\PHPMailer;
if(isset($_POST['name']) 
&& isset($_POST['email'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];


    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
    
    $mail= new PHPMailer();
    //SMTP SETTINGS
  
   
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'danielmwithui9@gmail.com';                     //SMTP username
    $mail->Password   = 'Danielbrand2000';                               //SMTP password
    $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Email Settings
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->setFrom($email, $name);
    $mail->addAddress("danielmwithui9@gmail.com");
    $mail->Subject = ($email ($subject));
    $mail->Body    =$body;
   if( $mail->send()){
       $status="success";
       $response="Email is sent";
   }else
   {
       $status="failed";
       $response= "Something went wrong: <br>" .$mail->ErrorInfo;
   }
   exit(json_encode(array("status"=>$status, "response"=> $response)));
   
}

?>