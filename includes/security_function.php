<?php

    require "db_connection.php";

    function encryptData($data, $key, $iv) {
        $cipher = "aes-256-cbc";
        $options = OPENSSL_RAW_DATA;
        $encrypted = openssl_encrypt($data, $cipher, $key, $options, $iv);
        return base64_encode($encrypted);
    }
    
    // Function to decrypt data
    function decryptData($data, $key, $iv) {
        $cipher = "aes-256-cbc";
        $options = OPENSSL_RAW_DATA;
        $decrypted = openssl_decrypt(base64_decode($data), $cipher, $key, $options, $iv);
        return $decrypted;
    }

    function customer_sensitive_data($address,$contact,$email,$password,$key,$iv){
            $email_query = "SELECT C_EMAIL from customer_register where C_EMAIL = '$email'";
            $address_query = "SELECT C_ADDRESS from customer_register where C_ADDRESS = '$address'";
            $password_query = "SELECT C_PASSWORD from customer_register where C_PASSWORD = '$password'";
            $contact_query = "SELECT C_CONTACT from customer_register where C_CONTACT = '$contact'";

            $email_result = mysqli_query($GLOBALS['connect'],$email_query);

            if(mysqli_num_rows($result) > 0){
                encryptedData($email,$key,$iv);
            }

            $address_result = mysqli_query($GLOBALS['connect'],$address_query);

            if(mysqli_num_rows($address_result)){
                
            }

    }
?>