<?php
        session_start();

        if(isset($_SESSION['error'])){
            unset($_SESSION['error']);
        }

        function check_validate($fname,$lname){
            $name_pattern = "/^[A-Z][a-z]{0,14}$/";

            if(preg_match($name_pattern,$fname)){
                if(preg_match($name_pattern,$lname)){
                        return true;    
                } else{
                        $_SESSION['error'] = "Please Enter Surname in Valid Format.";
                }
            } else{
                    $_SESSION['error'] = "Please Enter Name in Valid Format.";
            }
        }
        
        function check_age($birth_date) {
            $birth_timestamp = strtotime($birth_date);
            $current_timestamp = time();
            $age = date('Y', $current_timestamp) - date('Y', $birth_timestamp);
        
          
            if ($age >= 18) {     
                session_start();
                $_SESSION['age'] = $age;
                return true;
            } else{
                $_SESSION['error'] = "You are not eligible to use our platform";
            }

            return false;
        }
        
        function store_info($fname,$lname,$gender,$birth_date){
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            $_SESSION['gender'] = $gender;
            $_SESSION['birth-date'] = $birth_date;
        }


        if(isset($_POST['submit'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $gender = $_POST['gender'];
            $birth_date = $_POST['birth-date'];

            store_info($fname,$lname,$gender,$birth_date);

            if(check_validate($fname,$lname)){
                if(check_age($birth_date)){
                    
                    store_info($fname,$lname,$gender,$birth_date);
                    unset($_SESSION['error']);
                    $_SESSION['greet-message'] = "Submitted Successfully";
                    header("Location:/connect2local/user/customer/activities/register/basic-info.php");
                } else{
                    
                }
            } 
            store_info($fname,$lname,$gender,$birth_date);
            header("Location:/connect2local/user/customer/activities/register/form/basic-info.php");
        }

?>