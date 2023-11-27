<?php
        session_start();

        include "../../../../../email_sending.php";
        include "../../../../../includes/code_generator.php";

            $email = $_SESSION['email'];
            $name = $_SESSION['fname']." ".$_SESSION['lname'];
            $subject = "Verification Code from Connect2Local";
            $verificationCode = generateVerificationCode();
            // Inline styles for better email client compatibility
            $_SESSION['code'] = $verificationCode;
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
                    <h2>Connect2Local Email Verification</h2>
                    <p>Hi $name,</p>
                    <p>We noticed that you haven't completed your registration with Connect2Local. To finalize your sign-up, please use the following verification code:</p>
                    <p style='font-size: 24px; font-weight: bold; color: #3498db;'>Verification Code: $verificationCode</p>
                    <p>This code will expire in 30 minutes. If you did not request this verification or if you've already completed the registration, you can safely ignore this email.</p>
                    <p>If you encounter any issues, you can contact our support team.</p>
                    <p>Best Regards,<br>Connect2Local Team</p>
                </div>
            ";


            send_mail($name,$email,$subject,$template);

            $_SESSION['greet-message'] = "Verification code resend successfully";
            $_SESSION['is_resend'] = "Yes";

            header("Location:/connect2local/user/admin/activities/register/verification/email-verification-code.php");
?>