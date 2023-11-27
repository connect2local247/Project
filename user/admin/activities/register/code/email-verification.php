<?php

    session_start();

    include "../../../../../email_sending.php";
    include "../../../../../includes/code_generator.php";

    if(isset($_POST['verify'])){
        $email = $_POST['email'];
        $phone = $_POST['contact'];
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
                <p>Thank you for signing up with Connect2Local as Administrator. To complete your registration, please use the following verification code:</p>
                <p style='font-size: 24px; font-weight: bold; color: #3498db;'>Verification Code: $verificationCode</p>
                <p>This code will expire in 30 minutes. If you did not request this verification, please ignore this email.</p>
                <p>Best Regards,<br>Connect2Local Team</p>
            </div>
        ";

        send_mail($name,$email,$subject,$template);

        $_SESSION['greet-message'] = "Verification Code Sent Successfully.";

        header("Location:/connect2local/user/admin/activities/register/form/admin-verification.php");
    }

?>
