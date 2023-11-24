<?php
function reset_session(){
    if(isset($_SESSION['registered'])){
        // Basic Information
        if(isset($_SESSION['fname'])) unset($_SESSION['fname']);
        if(isset($_SESSION['lname'])) unset($_SESSION['lname']);
        if(isset($_SESSION['birth-date'])) unset($_SESSION['birth-date']);
        if(isset($_SESSION['age'])) unset($_SESSION['age']);
        if(isset($_SESSION['gender'])) unset($_SESSION['gender']);

        // Contact Information
        if(isset($_SESSION['phone'])) unset($_SESSION['phone']);
        if(isset($_SESSION['contact'])) unset($_SESSION['contact']);
        if(isset($_SESSION['email'])) unset($_SESSION['email']);
        if(isset($_SESSION['address'])) unset($_SESSION['address']);
        if(isset($_SESSION['city'])) unset($_SESSION['city']);
        if(isset($_SESSION['pincode'])) unset($_SESSION['pincode']);
        if(isset($_SESSION['state'])) unset($_SESSION['state']);

        //Business Information 
        if(isset($_SESSION['category'])) unset($_SESSION['category']);
        if(isset($_SESSION['business-name'])) unset($_SESSION['business-name']);


        // Security Information 
        if(isset($_SESSION['password'])) unset($_SESSION['password']);

        // Verification
        if(isset($_SESSION['email-verification'])) unset($_SESSION['email-verification']);
        
        // Policy Agreement
        if(isset($_SESSION['agree-terms'])) unset($_SESSION['agree-terms']);
        if(isset($_SESSION['term-condition'])) unset($_SESSION['term-condition']);

        if(isset($_SESSION['error'])) unset($_SESSION['error']);
        if(isset($_SESSION['user-code'])) unset($_SESSION['user-code']);
    }
}
?>
