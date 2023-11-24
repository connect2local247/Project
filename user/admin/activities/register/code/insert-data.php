<?php
        session_start();

        require_once "../../../../../includes/db_connection.php";

        function insert_data(){
            
            // Basic Information

            $fname = $_SESSION['fname'];
            $lname = $_SESSION['lname'];
            $birth_date = $_SESSION['birth-date'];
            $age = $_SESSION['age'];
            $gender = $_SESSION['gender'];

            // Contact Information

            $phone = $_SESSION['contact'];
            $email = $_SESSION['email'];
            $address = $_SESSION['address'];
            $city = $_SESSION['city'];
            $pincode = $_SESSION['pincode'];

            // Security Information 

            $password = $_SESSION['password'];
            $key = $_SESSION['key'];
            // Verification

            $email_verified = $_SESSION['email-verification'];
            // $phone_verified = $_SESSION['phone-verification'];

            // Upload Information

            $file = $_SESSION['image-file'];
            // Policy Agreement

            $term_agree = $_SESSION['agree-terms'];

            $query = "INSERT INTO `admin_register`(`FNAME`, `LNAME`, `BIRTH_DATE`, `AGE`, `GENDER`, `CONTACT`, `EMAIL`, `PASSWORD`, `SECURE_KEY`, `ADDRESS`, `CITY`, `PINCODE`, `IMAGE_FILE`, `EMAIL_VERIFIED`,`AGREE_TERM`, `JOIN_DATE`) VALUES ('$fname','$lname','$birth_date','$age','$gender','$phone','$email','$password','$key','$address','$city','$pincode','$file','$email_verified','$term_agree',NOW())";


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
        header("location:/connect2local/user/admin/activities/register/form/admin-register-finish.php");


?>