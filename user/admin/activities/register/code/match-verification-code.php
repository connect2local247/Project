<?php
        session_start();
        
        include "../../../../../email_sending.php";
        include "../../../../../includes/code_generator.php";

        if(isset($_SESSION['error'])){
            unset($_SESSION['error']);
        }

        function send_security_key(){
            $email = $_SESSION['email'];
            $name = $_SESSION['fname']." ".$_SESSION['lname'];
            $subject = "Security Key from Connect2Local";
            $key = generateSecurityKey();
            // Inline styles for better email client compatibility
            $_SESSION['secure-key'] = $key;
            $styles = "
                style='
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    padding: 20px;
                    text-align: center;
                    border-radius: 10px;
                '
            ";

            $template = "
            <div $styles>
                <h2>Connect2Local Admin Account Security</h2>
                <p>Hi $name,</p>
                <p>Welcome to Connect2Local! As an administrator, your security is our priority. To ensure the security of your account, please use the following code:</p>
                <p style='font-size: 24px; font-weight: bold; color: #3498db;'>Security Key: $key</p>
                <p>This security key is crucial for completing the verification process. Please keep it confidential and do not share it with anyone.</p>
                <p>If you encounter any issues or have questions, feel free to contact our support team.</p>
                <p>Thank you for choosing Connect2Local!</p>
                <p>Best Regards,<br>Connect2Local Team</p>
            </div>
        
            ";


            send_mail($name,$email,$subject,$template);
        }
        if(isset($_POST['submit'])){
            $user_code = $_POST['user-code'];
            $verify_code = $_SESSION['code'];

            $_SESSION['user-code'] = $user_code;

            if($user_code == $verify_code){
                $_SESSION['greet-message'] = "Verification Code Successfully Matched.";
                $_SESSION['email-verification'] = "Yes";
                send_security_key();
                unset($_SESSION['code']);
            } else{
                $_SESSION['error'] = "Verification code doesn't matched";
                $_SESSION['email-verification'] = "No";
            }

            header("Location:/connect2local/user/admin/activities/register/verification/email-verification-code.php");
        }

?>