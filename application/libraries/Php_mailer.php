 <?php
   defined('BASEPATH') OR exit('No direct script access allowed');


        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;


class Php_Mailer {

 
   
    public function load(){

        require APPPATH. 'third_party/php_mailer/PHPMailer.php';
        require APPPATH. 'third_party/php_mailer/SMTP.php';
        require APPPATH. 'third_party/php_mailer/Exception.php';

        $mail = new PHPMailer;

        return $mail;
      
    }
}
 
 ?> 