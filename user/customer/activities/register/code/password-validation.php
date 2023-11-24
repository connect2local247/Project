<?php
    session_start();

    if(isset($_SESSION['error'])){
        unset($_SESSION['error']);
    }

    function check_pattern($password,$confirm_password){
            
        $password_pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$_])[\w@#$_]{8,16}$/";

        if(preg_match($password_pattern,$password) && preg_match($password_pattern,$confirm_password)){
                return true;
        } else{
            $_SESSION['error'] = "Password Must Contain Uppercase,Lowercase or (@,_,#,$).";
        }
        return false;
    }

    function match_password($password,$confirm_password){
        if($password == $confirm_password){
            return true;
        } 
        return false;
    }

    if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['conf-password'];
            $agree_terms = $_POST['agree-terms'];

            if($agree_terms == true){
                    $_SESSION['agree-terms'] = "Yes";
            } 

            $_SESSION['password'] = $password;
            $_SESSION['conf-password'] = $confirm_password;

            if(check_pattern($password,$confirm_password)){
                if(match_password($password,$confirm_password)){
                    $_SESSION['password'] = $password;
                    $_SESSION['greet-message'] = "Submitted Successfully";
                    unset($_SESSION['error']);
                } else{
                    $_SESSION['error'] = "Password Doesn't Matched.";
                }
            }

            header("location:/connect2local/user/customer/activities/register/form/password-detail.php");
    }
?>