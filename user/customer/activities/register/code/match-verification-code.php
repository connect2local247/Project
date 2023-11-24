<?php
        session_start();

        if(isset($_SESSION['error'])){
            unset($_SESSION['error']);
        }

        if(isset($_POST['submit'])){
            $user_code = $_POST['user-code'];
            $verify_code = $_SESSION['code'];

            $_SESSION['user-code'] = $user_code;

            if($user_code == $verify_code){
                $_SESSION['email-verification'] = "Yes";
                $_SESSION['greet-message'] = "Verification Code Successfully Matched.";
                unset($_SESSION['code']);
            } else{
                $_SESSION['email-verification'] = "No";
                $_SESSION['error'] = "Verification code doesn't matched";
            }

            header("Location:/connect2local/user/customer/activities/register/verification/email-verification-code.php");
        }

?>