<?php
        session_start();

        require "../../../../../includes/db_connection.php";
        
        function insert_info(){
                
                // Basic Information
                $fname = $_SESSION['fname'];
                $lname = $_SESSION['lname'];
                $birth_date = $_SESSION['birth-date'];
                $gender = $_SESSION['gender'];
                $age = $_SESSION['age'];                
                // Business Information 

                $category = $_SESSION['category'];
                $business_name = $_SESSION['business-name'];
                $pincode = $_SESSION['pincode'];
                $have_store = $_SESSION['validity'];
                $city = $_SESSION['city'];
                $address = $_SESSION['address'];

                // Contact Information

                $contact = $_SESSION['contact'];
                $email = $_SESSION['email'];
                $password = $_SESSION['password'];

                // Verification Information

                $email_verified = $_SESSION['email-verification'];
                $phone_verified = "No";

                // Policy Agreement Information 
                $is_agree_terms = $_SESSION['term-condition'];

                $query = "INSERT INTO `salesman_register`(`S_FNAME`, `S_LNAME`, `S_BIRTH_DATE`, `S_AGE`, `S_GENDER`, `S_CATEGORY`, `S_BUSINESS_NAME`, `S_HAVE_STORE`, `S_ADDRESS`, `S_CITY`, `S_PINCODE`, `S_PHONE`, `S_EMAIL`, `S_PASSWORD`, `S_EMAIL_VERIFIED`, `S_AGREE_TERM`, `JOIN_DATE`) VALUES ('$fname','$lname','$birth_date','$age','$gender','$category','$business_name','$have_store','$address','$city','$pincode','$contact','$email','$password','$email_verified','$is_agree_terms',NOW())";

                if(mysqli_query($GLOBALS['connect'],$query)){
                        return true;
                } else{
                        die($query);
                }      

                return false;

                
        }
        if(isset($_POST['submit'])){
            $term_condition = $_POST['term-agree'];

            $_SESSION['term-condition'] = $term_condition;
            if($term_condition == "Yes"){
                    if(insert_info()){
                        $_SESSION['registered'] = 1;
                        $_SESSION['greet-message'] = "Congratulation...!!! You are successfully register on Connect2Local.";
                }
        } 
        header("location:/connect2local/user/salesman/activities/register/form/register-finish.php");
        }
?>