<?php
require_once ('PHPMailerAutoload.php');
$mail = new PHPMailer;

                
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';  
                $mail->SMTPAuth = true;          
                $mail->Username = 'proprosystemes@gmail.com'; 
                $mail->Password = 'propropro';      
                $mail->SMTPSecure = 'tls';               
                $mail->Port = 587;                       

                $mail->setFrom('proprosystemes@gmail.com', "merci"); //ehdb no reply
                $mail->addAddress('proprosystemes@gmail.com');
                $mail->addReplyTo('proprosystemes@gmail.com', 'Information');

                $mail->isHTML(true);                                  

                $mail->Subject = "Commande";
                $mail->Body    = "hello";
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();

                header('Location: formAjC.php');
?>
