<?php
    require "code_generator.php";

    $key = generateSecurityKey();
    $iv = openssl_random_pseudo_bytes(16);
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
?>