<?php
if (isset ($_POST['id_client'])  and isset($_POST['nombre_produit'])and isset($_POST['date_debut'])and isset($_POST['date_fin']))
require_once ('PHPMailerAutoload.php');
$mail = new PHPMailer;

                
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';  
                $mail->SMTPAuth = true;          
                $mail->Username = 'khaledhaguiga@gmail.com'; 
                $mail->Password = 'khaledhaguiga@yahoo.fr';      
                $mail->SMTPSecure = 'tls';               
                $mail->Port = 587;                       

                $mail->setFrom('khaledhaguiga@gmail.com', "Demande Installation"); //ehdb no reply
                $mail->addAddress('khaledhaguiga@gmail.com');
                $mail->addReplyTo('khaledhaguiga@gmail.com', 'Information');

                $mail->isHTML(true);                                  

                $mail->Subject = "installation";
                $mail->Body    = "Identifiant du client:".$_POST['id_client']."<br>"." Nombre des produits:".$_POST['nombre_produit']."<br>"." Date début désiré(e):".$_POST['date_debut']."<br>"." Date fin desiré(e):".$_POST['date_fin'];
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();

                header('Location: ../services_installation.php');
?>
