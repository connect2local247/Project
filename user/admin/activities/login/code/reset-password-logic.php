<?php
        session_start();

        require "../../../../../includes/db_connection.php";

        if(isset($_SESSION['error'])){
            unset($_SESSION['error']);
        }

        function check_password_pattern($password){
            $password_pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#_$])[\w@#_$]{8,16}$/";

            if(preg_match($password_pattern,$password)){
                return true;
            } else{
                $_SESSION['error'] = "Password Must Contain Uppercase,Lowercase or (@,_,#,$).";
            }

            return false;
        }
        function store_info($password,$confirm_password){
            $_SESSION['password'] = $password;
            $_SESSION['conf-password'] = $confirm_password;
        }

        function match_password($password,$confirm_password){
            if($password == $confirm_password){
                return true;
            } else{
                $_SESSION['error'] = "Password doesn't Matched";
            }
            return false;
        }

        function email_exists($email) {
            $check_email_query = "SELECT * FROM admin_register WHERE EMAIL = '$email'";
            $result = mysqli_query($GLOBALS['connect'], $check_email_query);
        
            return mysqli_num_rows($result) > 0;
        }

        
        function update_password($email, $password) {
            if (email_exists($email)) {
                $update_password_query = "UPDATE admin_register SET PASSWORD = '$password' WHERE EMAIL = '$email'";
                $result = mysqli_query($GLOBALS['connect'], $update_password_query);
        
                if ($result !== false) {
                    // Check if any rows were affected
                    $affected_rows = mysqli_affected_rows($GLOBALS['connect']);
                    
                    if ($affected_rows > 0) {
                        // Password updated successfully
                        return true;
                    } else {
                        // No rows were affected, which should not happen after the email existence check
                        $_SESSION['error'] = "Password update failed. No rows were affected.";
                    }
                } else {
                    // SQL query execution failed
                    $_SESSION['error'] = "Password update failed. " . mysqli_error($GLOBALS['connect']);
                }
            } else {
                $_SESSION['error'] = "Email not found in the database.";
            }
        
            return false;
        }
        
        
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['conf-password'];
            $verify_code = $_SESSION['verification_code'];
            if(check_password_pattern($password)){
                if(match_password($password,$confirm_password)){
                    if(update_password($email,$password)){
                        unset($_SESSION['error']);
                        unset($_SESSION['password']);
                        $_SESSION['greet-message'] = "Password was Changed Successfully.";
                        store_info($password,$confirm_password);
                    }
                }
            }
            header("location:/connect2local/user/admin/activities/login/form/forgot-password.php?code=$verify_code");
        }
?>