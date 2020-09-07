
<?php
require 'config/configmailer.php';
require 'PHPMailer/PHPMailerAutoload.php';

Class MailerController {

   private $mail;



public function __construct()
{

    $this->mail = new PHPMailer();

}

 public function send_email()
 {

    echo 'Hello email send';

        //Server settings
       // $this->mail->SMTPDebug = 2;                    // Enable verbose debug output


        $this->mail->isSMTP();                                            // Send using SMTP
        $this->mail->Host       = HOST_SMTP_DEFECT;                    // Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $this->mail->Username   = USERNAME_EMAIL;                     // SMTP username
        $this->mail->Password   = PASSWORD_EMAIL;                               // SMTP password
        $this->mail->SMTPSecure = SMTPSecure;            // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mail->Port       = PORT_EMAIL;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $this->mail->setFrom('rb__samael_@hotmail.es', 'Correo Coorporativo');
        $this->mail->addAddress('rb__samael_@hotmail.es', 'Fea');     // Add a recipien, Destinatario           // Name is optional
      
        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Content
        $this->mail->isHTML(true);                                  // Set email format to HTML
        $this->mail->Subject = 'Prueba de archivo Config ';
        $this->mail->Body    = 'Hola saludos desde EdgecodeCorporation <b>como estas </b>';
        $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
         if(!$this->mail->send())
         {
              echo 'Error al enviar el mensaje';

         }else{
             echo 'Mensaje enviado';
         }

    
   

 }


};





?>


