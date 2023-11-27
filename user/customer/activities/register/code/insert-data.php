<?php
        session_start();

        require "../../../../../includes/db_connection.php";
        require "../../../../../includes/security_function.php";

        function insert_data(){
            
            // Basic Information

            $fname = $_SESSION['fname'];
            $lname = $_SESSION['lname'];
            $birth_date = $_SESSION['birth-date'];
            $age = $_SESSION['age'];
            $gender = $_SESSION['gender'];

            // Contact Information

            $phone = $_SESSION['phone'];
            $email = $_SESSION['email'];
            $address = $_SESSION['address'];
            $city = $_SESSION['city'];
            $pincode = $_SESSION['pincode'];
            $state = $_SESSION['state'];

            // Security Information 

            $password = $_SESSION['password'];

            // Verification

            $email_verified = $_SESSION['email-verification'];
            // $phone_verified = $_SESSION['phone-verification'];

            // Policy Agreement

            $term_agree = $_SESSION['agree-terms'];
            

            // Encrypted Data

            $encryptAddress = encryptData($address,$GLOBALS['key'],$GLOBALS['iv']);
            $encryptPhone = encryptData($phone,$GLOBALS['key'],$GLOBALS['iv']);
            $encryptEmail = encryptData($email,$GLOBALS['key'],$GLOBALS['iv']);
            $encryptPassword = encryptData($password,$GLOBALS['key'],$GLOBALS['iv']);

            $query = "INSERT INTO `customer_register`(`C_FNAME`, `C_LNAME`, `C_BIRTH_DATE`, `C_AGE`, `C_GENDER`, `C_PHONE`, `C_EMAIL`, `C_PASSWORD`, `C_ADDRESS`, `C_CITY`, `C_PINCODE`, `C_STATE`, `C_EMAIL_VERIFIED`, `C_AGREE_TERM`,`IV`,`JOIN_DATE`) VALUES ('$fname','$lname','$birth_date',$age,'$gender','$encryptPhone','$encryptEmail','$encryptPassword','$encryptAddress','$city','$pincode','$state','$email_verified','$term_agree','{$GLOBALS['iv']}',NOW())";


            $query_run = mysqli_query($GLOBALS['connect'],$query);

            if($query_run){

                return true;
               
            } else{
                die($query_run);
            }

            return false;

        }


        if(insert_data()){
            $_SESSION['registered'] = 1;
            $_SESSION['greet-message'] = "Congratulation... You have successfully registered.";
        } else{
            $_SESSION['greet-message'] = "Sorry... You are not registered.";
        }
        header("location:/connect2local/user/customer/activities/register/form/finish-register.php");


?>