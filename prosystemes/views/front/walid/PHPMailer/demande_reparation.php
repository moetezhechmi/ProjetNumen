<?php
if (isset ($_POST['id_client'])  and isset($_POST['id_produit'])and isset($_POST['probleme'])and isset($_POST['delai']))
require_once ('PHPMailerAutoload.php');
$mail = new PHPMailer;

                
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';  
                $mail->SMTPAuth = true;          
                $mail->Username = 'khaledhaguiga@gmail.com'; 
                $mail->Password = 'khaledhaguiga@yahoo.fr';      
                $mail->SMTPSecure = 'tls';               
                $mail->Port = 587;                       

                $mail->setFrom('khaledhaguiga@gmail.com', "merci"); //ehdb no reply
                $mail->addAddress('khaledhaguiga@gmail.com');
                $mail->addReplyTo('khaledhaguiga@gmail.com', 'Information');

                $mail->isHTML(true);                                  

                $mail->Subject = "reparation";
                $mail->Body    = "Identifiant du client:".$_POST['id_client']."<br>"." Identifiant d'un  produit:".$_POST['id_produit']."<br>"." Probleme:".$_POST['probleme']."<br>"." Delai:".$_POST['delai'];
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();

                header('Location: ../services_reparation.php');
?>
