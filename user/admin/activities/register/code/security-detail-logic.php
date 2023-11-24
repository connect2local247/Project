<?php
        session_start();

        if(isset($_SESSION['error'])){
            unset($_SESSION['error']);
        }
        function check_pattern($password){
            $password_pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$_])[\w@#$_]{8,16}$/";

            if(preg_match($password_pattern,$password)){
                return true;
            } else{
                $_SESSION['error'] = "Password Must Contain Uppercase,Lowercase or (@,_,#,$).";
            }

            return false;
        }
        if(isset($_POST['submit'])){
            $password = $_POST['password'];
            $key = $_POST['secure-key'];
            $agree_terms = $_POST['agree-terms'];
            $_SESSION['password'] = $password;
            if($agree_terms){
                $_SESSION['agree-terms'] = "Yes";
            } else{
                $_SESSION['agree-terms'] = "No";
            }

            if(check_pattern($password)){
                if($key == $_SESSION['key']){
                    $_SESSION['greet-message'] = "Submitted Successfully.";    
                    unset($_SESSION['error']);

                } else{
                    $_SESSION['error'] = "Security key doesn't matched.";
                }
            }
            header("location:/connect2local/user/admin/activities/register/form/security-detail.php");
            
        }

?>