<?php
        session_start();

        require "../../../../../includes/db_connection.php";
        function check_pattern($pincode,$city,$address,$email,$contact){
            $pincode_pattern = "/^\d{6}$/";
            $address_pattern = '/^[A-Za-z ]{1,50}$/'; 
            $city_pattern = '/^[A-Za-z ]{1,20}$/';    
            $email_pattern = "/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";
            $contact_pattern = "/^\d{10}$/";

            if(preg_match($pincode_pattern,$pincode)){
                if(preg_match($city_pattern,$city)){
                        if(preg_match($address_pattern,$address)){
                                if(preg_match($email_pattern,$email)){
                                    if(preg_match($contact_pattern,$contact)){
                                            return true;
                                    } else{
                                        $_SESSION['error'] = "Please.. Enter phone number in valid format";
                                    }
                                } else{
                                    $_SESSION['error'] = "Please.. Enter email in valid format";
                                }
                        } else{
                            $_SESSION['error'] = "Please.. Enter valid address or area";
                        }
                } else{
                    $_SESSION['error'] = "Please.. Enter valid city name.";
                }
            } else{
                $_SESSION['error'] = "Please.. Enter pincode in appropriate format.";
            }

            return false;
        }

        function store_info($address,$pincode,$city,$email,$contact){
            $_SESSION['address'] = $address;
            $_SESSION['pincode'] = $pincode;
            $_SESSION['city'] = $city;
            $_SESSION['email'] = $email;
            $_SESSION['contact'] = $contact;
        }

        if(isset($_SESSION['error'])){
            $_SESSION['error'];
        }

        function check_exist_detail($phone, $email) {
            $email_query = "SELECT EMAIL FROM admin_register WHERE EMAIL = '$email'";
            $contact_query = "SELECT CONTACT FROM admin_register WHERE CONTACT = '$phone'";
        
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
            $address = $_POST['address'];
            $pincode = $_POST['pincode'];
            $city = $_POST['city'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];

            store_info($address,$pincode,$city,$email,$contact);

            if(check_pattern($pincode,$city,$address,$email,$contact)){
                if(check_exist_detail($contact,$email)){
                store_info($address,$pincode,$city,$email,$contact);
                $_SESSION['greet-message'] = "Submitted Successfully";
                unset($_SESSION['error']);
                }
            } 

            header("location:/connect2local/user/admin/activities/register/form/contact-detail.php");
            

        } 

?>