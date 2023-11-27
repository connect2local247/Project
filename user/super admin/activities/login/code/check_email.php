<?php
    session_start();

    require "../../../../../includes/db_connection.php";
    require "../../../../../email_sending.php";

    if(isset($_SESSION['error'])){
        unset($_SESSION['error']);
    }

    function check_mail_exist($email){
            $check_query = "SELECT C_EMAIL from customer_register where C_EMAIL = '$email'";

            $result = mysqli_query($GLOBALS['connect'],$check_query);


            if($result == true){
                return true;
            } else{
                $_SESSION['error'] = "Email doesn't exist.";
            }

            return false;
    }

    if(isset($_POST['submit'])){
            $email = $_POST['login-email'];

            $_SESSION['login-email'] = $email;

            $name = $_SESSION['fname']." ".$_SESSION['lname'];
            $subject = "Forgot Password Link from Connect2Local";

            // Generate a unique verification code or link for password reset
            $verificationCode = uniqid(); // You may want to generate a more secure token

            $verificationLink = "http://localhost/connect2local/user/customer/activities/login/form/forgot-password.php?code=$verificationCode";
            $_SESSION['verification_code'] = $verificationCode;

            // Inline styles for better email client compatibility
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
                    <h2>Connect2Local Password Reset</h2>
                    <p>Hi $name,</p>
                    <p>We received a request to reset your password. To proceed with the password reset, please click the following link:</p>
                    <a href='$verificationLink' style='font-size: 16px; color: #3498db; text-decoration: none;'>
                        Reset Password
                    </a>
                    <p>This link will expire in 30 minutes. If you did not request a password reset, you can safely ignore this email.</p>
                    <p>If you encounter any issues, you can contact our support team.</p>
                    <p>Best Regards,<br>Connect2Local Team</p>
                </div>
            ";

        if(check_mail_exist($email)){
                unset($_SESSION['error']);
                $_SESSION['login-email'] = $email;
                $_SESSION['greet-message'] = "Link for Reset Password sent to your email account.";
                send_mail($name,$email,$subject,$template);
        }
        header("location:/connect2local/user/customer/activities/login/form/user-verification.php");

    }
?>