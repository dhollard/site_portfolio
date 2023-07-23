<?php 
//Appel des identifiants et paramètres secrets
require_once($_SERVER["DOCUMENT_ROOT"] . '/../private_env/cred-dh-portfolio.php');

//Inclure les fichiers PHPMailer
require_once($_SERVER["DOCUMENT_ROOT"] . '/assets/libraries/PHPMailer/PHPMailer.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/assets/libraries/PHPMailer/SMTP.php');
require_once($_SERVER["DOCUMENT_ROOT"] . '/assets/libraries/PHPMailer/Exception.php');

//Définir les noms
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//fonction homemade php de nettoyage du user input
function sanitize($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}

//check si le script est déclenché via une demande réelle ou un accès frauduleux
if (isset($_POST["bouton-envoi"])){

    $captcha_response = $_POST['g-recaptcha-response'];
    
    $captcha_result = file_get_contents(
    
        "https://www.google.com/recaptcha/api/siteverify?secret=" . $captcha_secret . "&response=" . $captcha_response
    
    );
    
    // use json_decode to extract json response
    
    $captcha_result = json_decode($captcha_result);
    
    // Vérification du catpcha
    if ($captcha_result->success==true){


        //Récupérer le contenu du formulaire et l'assainir
        $name = sanitize($_POST['sender_nom']);

        $email = sanitize($_POST['sender_mail']);

        $message = sanitize($_POST['sender_message']);

        // Vérification de l'input email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //Créer une instance de PHPMailer
            $mail = new PHPMailer();

            //Activer l'usage du SMTP
            $mail->isSMTP();

            //Définir le host SMTP
            $mail->Host = $SMTP_host;

            //Activer l'authentification SMTP
            $mail->SMTPAuth = $SMTP_auth;

            //Définir le type de chiffrage (ssl ou tls)
            $mail->SMTPSecure = $SMTP_protocol;

            //Définir les ports de connexion SMTP
            $mail->Port = $SMTP_port;

            //Définir nom utilisateur
            $mail->Username = $SMTP_sender_email;

            //Indiquer le mot de passe SMTP
            $mail->Password = $SMTP_sender_pswd;

            //Limiter l'usage des caractères non UTF-8
            $mail->CharSet = "UTF-8";

            //Définir l'objet du mail
            $mail->Subject = "Formulaire de contact site portfolio";

            //Définir l'expéditeur du mail
            $mail->setFrom('$email');
            $mail->AddReplyTo($email, $name);

            //Définir le corps du mail
            $mail->Body = "Nouveau message de la part de $name \n E-mail de contact : $email \n Contenu du message : \n $message";

            //Définir l'adresse recevant l'email
            $mail->addAddress($contact_mail_recep);

            //Envoi de l'email
            if ( $mail->Send() ) {
                header("Location: /fr/contact-envoi.php");
                exit();

                }else {
                    //erreur lors de l'envoi du mail
                    header("Location: /fr/contact-erreur.php");
                    //echo 'Mailer Error: ' . $mail->ErrorInfo;
                    exit();
            }
        }else{
            //mauvaise syntaxe de mail brute forcée
            echo "BAD EMAIL";
            exit();
        }
    }else{
        //captcha non valide
        header("Location: /fr/contact-erreur.php");
        exit();
    }

}
?>