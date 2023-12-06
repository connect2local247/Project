<?php
        $connect = mysqli_connect("localhost","root","","connect2local");


        $customer_register_query = "CREATE TABLE IF NOT EXISTS `customer_register` (
          `C_ID` int(11) NOT NULL AUTO_INCREMENT,
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
          `JOIN_DATE` datetime NOT NULL,
          PRIMARY KEY (`C_ID`)
      )";
          $query_run = mysqli_query($connect,$customer_register_query);


          $customer_data_query = "CREATE TABLE IF NOT EXISTS `customer_data` (
            `ID` int(11) NOT NULL AUTO_INCREMENT,
            `NAME` varchar(32) NOT NULL,
            `BIRTH_DATE` date NOT NULL,
            `AGE` int(2) NOT NULL,
            `GENDER` varchar(6) NOT NULL,
            `PHONE` varchar(255) NOT NULL,
            `EMAIL` varchar(255) NOT NULL,
            `NOTIFYFILE` varchar(255) NOT NULL,
            `C_KEY` int(6) NOT NULL,
            `C_ID` int(11) NOT NULL,
            PRIMARY KEY (`ID`),
            KEY `fk_customer_register` (`C_ID`),
            CONSTRAINT `fk_customer_register` FOREIGN KEY (`C_ID`) REFERENCES `customer_register` (`C_ID`)
        )";
          $query_run = mysqli_query($connect,$customer_data_query);
?>