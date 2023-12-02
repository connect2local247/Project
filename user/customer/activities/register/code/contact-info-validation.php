<?php
       session_start();
       
       require "../../../../../includes/db_connection.php";
       require "../../../../../includes/fetch_data_function.php";
       require "../../../../../includes/security_function.php";


       if(isset($_SESSION['error'])){
           unset($_SESSION['error']);
       }
       function check_pattern($phone,$email,$address,$city,$pincode){
        $phone_pattern = '/^\d{10}$/';
        $email_pattern = '/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
        $address_pattern = '/^[A-Za-z ]+$/';
        $city_pattern = '/^[A-Za-z ]+$/';
        $pincode_pattern = '/^\d{6}$/';

            if(preg_match($phone_pattern,$phone)){
                
                if(preg_match($email_pattern,$email)){
                
                    if(preg_match($address_pattern,$address)){
                
                        if(preg_match($city_pattern,$city)){
                
                            if(preg_match($pincode_pattern,$pincode)){
                                        return true;
                                } else{        
                                    $_SESSION['error'] = "Postal Code Doesn't exists.";
                                }
                            } else{            
                                    $_SESSION['error'] = "City Doesn't Exists.";
                            }
                        } else{      
                            $_SESSION['error'] = "Please Enter Valid Area Name.";
                        }
                    } else{     
                        $_SESSION['error'] = "Please Enter Email in Valid Format.";
                    }
            } else{
                $_SESSION['error'] = "Please Enter Valid Number.";
            }   
       }

       function store_info($phone,$email,$address,$city,$pincode,$state){
                    $_SESSION['phone'] = $phone;
                    $_SESSION['email'] = $email;
                    $_SESSION['address'] = $address;
                    $_SESSION['city'] = $city;
                    $_SESSION['pincode'] = $pincode;
                    $_SESSION['state'] = $state;
       }

       function check_exist_detail($phone, $email) {
        // $email_query = "SELECT C_EMAIL FROM customer_register WHERE C_EMAIL = AES_ENCRYPT('$email', '{$GLOBALS['key']}')";
        // $contact_query = "SELECT C_PHONE FROM customer_register WHERE C_PHONE = AES_ENCRYPT('$phone','{$GLOBALS['key']}')";
        // $email_result = mysqli_query($GLOBALS['connect'], $email_query);
        // $contact_result = mysqli_query($GLOBALS['connect'], $contact_query);
    
        // if (mysqli_num_rows($email_result) > 0) {
        //     $_SESSION['error'] = "Email Already Exists";
        //     return false;
        // }
    
        // if (mysqli_num_rows($contact_result) > 0) {
        //     $_SESSION['error'] = "Phone number Already Exists.";
        //     return false;
        // }
    
        // return true;

        if(find_data($email,"customer_register","C_ID","C_EMAIL","C_KEY")){
            $_SESSION['error'] = "Email Already Exist";
            return false;
        }

        if(find_data($phone,"customer_register","C_ID","C_PHONE","C_KEY")){
            $_SESSION['error'] = "Phone Number Already Exist";
            return false;
        }

        return true;


    }
    
       if(isset($_POST['submit'])){
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $pincode = $_POST['pincode'];
                $state = $_POST['state'];

                store_info($phone,$email,$address,$city,$pincode,$state);

                if(check_pattern($phone,$email,$address,$city,$pincode,$state)){

                    if(check_exist_detail($phone,$email)){
                        store_info($phone,$email,$address,$city,$pincode,$state);
                        $_SESSION['greet-message'] = "Submit Successfully";
                        unset($_SESSION['error']);
                    }
                } 
                header("Location:/connect2local/user/customer/activities/register/form/contact-info.php");
       }
?>
