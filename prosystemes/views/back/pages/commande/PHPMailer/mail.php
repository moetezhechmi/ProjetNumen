<?php
require_once ('PHPMailerAutoload.php');
$mail = new PHPMailer;

                
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';  
                $mail->SMTPAuth = true;          
                $mail->Username = 'ramzi0369@gmail.com'; 
                $mail->Password = 'ptsdefnbv';      
                $mail->SMTPSecure = 'tls';               
                $mail->Port = 587;                       

                $mail->setFrom('ramzi0369@gmail.com', "merci"); //ehdb no reply
                $mail->addAddress('ramzi0369@gmail.com');
                $mail->addReplyTo('ramzi0369@gmail.com', 'Information');

                $mail->isHTML(true);                                  

                $mail->Subject = "Commande";
                $mail->Body    = "helle";
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();

                header('Location: fixed.php');
?>
