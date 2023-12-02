<?php
        $connect = mysqli_connect("localhost","root","","connect2local");


        $customer_register_query = "CREATE TABLE IF NOT EXISTS `customer_register` (
            `C_ID` int(11) NOT NULL,
            `C_FNAME` varchar(15) NOT NULL,
            `C_LNAME` varchar(15) NOT NULL,
            `C_BIRTH_DATE` date NOT NULL,
            `C_AGE` int(2) NOT NULL,
            `C_GENDER` varchar(6) NOT NULL,
            `C_PHONE` varchar(255) NOT NULL,
            `C_EMAIL` varchar(255) NOT NULL,
            `C_PASSWORD` varchar(255) NOT NULL,
            `C_ADDRESS` varchar(255) NOT NULL,
            `C_CITY` varchar(20) NOT NULL,
            `C_PINCODE` varchar(6) NOT NULL,
            `C_STATE` varchar(20) NOT NULL,
            `C_EMAIL_VERIFIED` varchar(3) NOT NULL,
            `C_PHONE_VERIFIED` varchar(3) NOT NULL,
            `C_TERM_AGREE` varchar(3) NOT NULL,
            `C_KEY` varchar(6) NOT NULL,
            `JOIN_DATE` datetime NOT NULL
          )";

          $query_run = mysqli_query($connect,$customer_register_query);

?>