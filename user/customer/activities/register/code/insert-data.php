<?php
        session_start();

        require "../../../../../includes/db_connection.php";
        require "../../../../../includes/security_function.php";
        require "../../../../../email_sending.php";
        function email_content(){
                $email = $_SESSION['email'];
                $name = $_SESSION['fname']." ".$_SESSION['lname'];
                $subject = "Welcome to Connect2Local!";
                // You can customize the welcome message
                $welcomeMessage = "Congratulations, $name!";

                // Inline styles for better email client compatibility
                $styles = "
                    style='
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        padding: 20px;
                        text-align: center;
                        border-radius: 10px;
                    '
                ";

                $template = "
                    <div $styles>
                        <h2>Welcome to Connect2Local!</h2>
                        <p>$welcomeMessage</p>
                        <p>We are excited to have you on board. Your registration with Connect2Local is now complete.</p>
                        <!-- You can add more content here based on your welcome message -->
                        <p>If you have any questions or need assistance, feel free to contact our support team.</p>
                        <p>Best Regards,<br>Connect2Local Team</p>
                    </div>
                ";

                send_mail($name,$email,$subject,$template);
        }

        function insert_data(){
            
            // Basic Information

            $fname = $_SESSION['fname'];
            $lname = $_SESSION['lname'];
            $birth_date = $_SESSION['birth-date'];
            $age = $_SESSION['age'];
            $gender = $_SESSION['gender'];

            // Contact Information

            $phone = $_SESSION['phone'];
            $email = $_SESSION['email'];
            $address = $_SESSION['address'];
            $city = $_SESSION['city'];
            $pincode = $_SESSION['pincode'];
            $state = $_SESSION['state'];

            // Security Information 

            $password = $_SESSION['password'];

            // Verification

            $email_verified = $_SESSION['email-verification'];
            // $phone_verified = $_SESSION['phone-verification'];

            // Policy Agreement

            $term_agree = $_SESSION['agree-terms'];
            

            // Encrypted Data

            $encryptAddress = encryptData($address,$_SESSION['KEY']);
            $encryptPhone = encryptData($phone,$_SESSION['KEY']);
            $encryptEmail = encryptData($email,$_SESSION['KEY']);
            $encryptPassword = encryptData($password,$_SESSION['KEY']);

            $query = "INSERT INTO `customer_register`(`C_FNAME`, `C_LNAME`, `C_BIRTH_DATE`, `C_AGE`, `C_GENDER`, `C_PHONE`, `C_EMAIL`, `C_PASSWORD`, `C_ADDRESS`, `C_CITY`, `C_PINCODE`, `C_STATE`, `C_EMAIL_VERIFIED`, `C_TERM_AGREE`,`C_KEY`,`JOIN_DATE`) VALUES ('$fname','$lname','$birth_date',$age,'$gender','$encryptPhone','$encryptEmail','$encryptPassword','$encryptAddress','$city','$pincode','$state','$email_verified','$term_agree',{$_SESSION['KEY']},NOW())";


            $query_run = mysqli_query($GLOBALS['connect'],$query);

            if($query_run){

                return true;
               
            } else{
                die($query_run);
            }

            return false;

        }


        if(insert_data()){
            $_SESSION['notification'] = "You have successfully registered on Connect2local.";
            email_content();
            $_SESSION['registered'] = 1;
            $_SESSION['greet-message'] = "Congratulation... You have successfully registered.";
        } else{
            $_SESSION['greet-message'] = "Sorry... You are not registered.";
        }
        header("location:/connect2local/user/customer/activities/register/form/finish-register.php");


?>