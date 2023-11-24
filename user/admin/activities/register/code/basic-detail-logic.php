<?php
       session_start();

       if(isset($_SESSION['error'])){
            unset($_SESSION['error']);
       }

       function is_validate($fname,$lname){
           $name_pattern = "/^[A-Z][a-z]{0,14}$/";

            if(preg_match($name_pattern,$fname)){
                if(preg_match($name_pattern,$lname)){
                    return true;
                } else{
                    $_SESSION['error'] = "Please Enter Your Surname in valid Format.";
                }
            } else{
                $_SESSION['error'] = "Please Enter Your Name in Appropriate Format";
            }
            return false;
       }

       function is_eligible($birth_date){
        $dob = new DateTime($birth_date);
        // Calculate the current date
        $currentDate = new DateTime();
        // Calculate the difference in years between the current date and date of birth
        $age = $currentDate->diff($dob)->y;
    
        if($age >= 18){
            $_SESSION['age'] = $age;
            // Clear any existing error message in the session
            unset($_SESSION['error']);
            return true;
        }
    
        $_SESSION['error'] = "You are not eligible to use our platform.";
        return false;
    }
    

       function store_info($fname,$lname,$gender,$dob){
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['gender'] = $gender;
        $_SESSION['birth-date'] = $dob;
       }

       if(isset($_POST['submit']))
       {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $gender = $_POST['gender'];
            $dob = $_POST['birth-date'];

           store_info($fname,$lname,$gender,$dob);
            
            if(is_validate($fname,$lname)){
                if(is_eligible($dob)){

                    store_info($fname,$lname,$gender,$dob);
                    unset($_SESSION['error']);
                    $_SESSION['greet-message'] = "Submitted Successfully";

                } else{
                    $_SESSION['error'] = "You are not eligible to use our platform.";
                }
            } 
            header("Location:/connect2local/user/admin/activities/register/form/basic-detail.php");    

           
        }

?>