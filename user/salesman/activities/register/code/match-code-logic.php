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
            $_SESSION['greet-message'] = "Verification Code Successfully Matched.";
            $_SESSION['email-verification'] = "Yes"; 
            unset($_SESSION['code']);
        } else{
            $_SESSION['error'] = "Verification code doesn't matched";
            $_SESSION['email-verification'] = "No";
        }

        header("Location:/connect2local/user/salesman/activities/register/verification/email-verification-code.php");
    }

?>