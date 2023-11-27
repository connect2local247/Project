<?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
        
        //Load Composer's autoloader
        
         require "vendor/autoload.php";
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);


        function send_mail($name,$email,$subject,$template){
            global $mail; // Use the global $mail instance
            
            $mail->isSMTP();               
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'engagewithai2023@gmail.com';                     //SMTP username
            $mail->Password   = 'mctn pauh cmdn yztr';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                                      
            //Recipients
            $mail->setFrom('engagewithai2023@gmail.com', 'Connect2Local');
            $mail->addAddress($email);  //Optional name
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $template;
            $mail->send();
        }

?>