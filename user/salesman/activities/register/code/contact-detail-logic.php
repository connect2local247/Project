<?php
        session_start();

        require_once "../../../../../includes/db_connection.php";

        if(isset($_SESSION['error'])){
            unset($_SESSION['error']);
        }
        function check_pattern($contact,$email,$password){
            $contact_pattern = "/^\d{10}$/";
            $email_pattern = "/^[\w.%+-]{1,50}@gmail\.com$/i";
            $password_pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#_$])[\w@#_$]{8,16}$/";

            if(preg_match($contact_pattern,$contact)){
                    if(preg_match($email_pattern,$email)){
                        if(preg_match($password_pattern,$password)){
                                return true;
                        } else{
                                $_SESSION['error'] = "Password Must Contain Uppercase,Lowercase or (@,_,#,$ and 8 - 16 character only)";
                        } 
                    } else{
                        $_SESSION['error'] = "Please.. Provide valid email addresss.";
                    }
            } else{
                $_SESSION['error'] = "Please.. Provide Valid Phone number.";
            }

            return false;
        }

        function store_info(){
            $_SESSION['contact'] = $_POST['contact'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
        }

        function check_exist_detail($phone, $email) {
            $email_query = "SELECT S_EMAIL FROM salesman_register WHERE S_EMAIL = '$email'";
            $contact_query = "SELECT S_PHONE FROM salesman_register WHERE S_PHONE = $phone";
        
            $email_result = mysqli_query($GLOBALS['connect'], $email_query);
            $contact_result = mysqli_query($GLOBALS['connect'], $contact_query);
        
            if (mysqli_num_rows($email_result) > 0) {
                $_SESSION['error'] = "Email Already Exists";
                return false;
            }
        
            if (mysqli_num_rows($contact_result) > 0) {
                $_SESSION['error'] = "Phone number Already Exists.";
                return false;
            }
        
            return true;
        }

        if(isset($_POST['submit'])){
                $contact = $_POST['contact'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                store_info();
                if(check_pattern($contact,$email,$password)){
                    if(check_exist_detail($contact,$email)){
                        $_SESSION['greet-message'] = "Submitted Successfully";
                        unset($_SESSION['error']);
                        store_info();
                    }
                }
                header("Location:/connect2local/user/salesman/activities/register/form/contact-detail.php");
        }


?>
