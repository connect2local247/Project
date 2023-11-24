<?php
        session_start();

        if(isset($_SESSION['error'])){
            unset($_SESSION['error']);
        }

        function check_pattern($business,$pincode,$address,$city){

            $business_pattern = "/^[A-Za-z0-9 !@#$%^&*()_+\-=\[\]{};:'\"<>,.?|]{1,50}$/";

            $pincode_pattern = "/^\d{6}$/";
            $address_pattern = "/^[A-Za-z0-9 -.,'\"&]{1,100}$/";
            $city_pattern = "/^[A-Za-z ]{1,20}$/";

            if(preg_match($business_pattern,$business)){
                if(preg_match($pincode_pattern,$pincode)){
                    if(preg_match($address_pattern,$address)){
                        if(preg_match($city_pattern,$city)){
                            return true;
                        } else{
                            $_SESSION['error'] = "City Doesn't exists.";
                        }
                    } else{
                        $_SESSION['error'] = "Address doesn't match specified format.";
                    }
                } else{
                    $_SESSION['error'] = "Postal Code Doesn't exists.";
                }
            } else{
                   $_SESSION['error'] = "business name doesn't match specified format.";
            }
            return false;
        }

        function check_eligibility($category,$check_store){
            if($category == "Product" && $check_store == "No"){
                $_SESSION['error'] = "Physical Store Required.";
                return false;
            }
            return true;
        }

        function store_info(){
            $_SESSION['category'] = $_POST['category'];
            $_SESSION['business-name'] = $_POST['business-name'];
            $_SESSION['pincode'] = $_POST['pincode'];
            $_SESSION['address'] = $_POST['address'];
            $_SESSION['city'] = $_POST['city'];
            $_SESSION['validity'] = $_POST['answer'];
        }

        if(isset($_POST['submit'])){
            $category = $_POST['category'];
            $business = $_POST['business-name'];
            $pincode = $_POST['pincode'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $have_store = $_POST['answer'];

            store_info();

            if(check_pattern($business,$pincode,$address,$city)){
                    if(check_eligibility($category,$have_store)){
                            store_info();
                            $_SESSION['greet-message'] = "Submitted Successfully";
                            unset($_SESSION['error']);

                        } 
                    } 
                header("Location:/connect2local/user/salesman/activities/register/form/business-detail.php");
            }
?>
