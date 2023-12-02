<?php
            include "table_creation.php";

            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "connect2local";
            
            $connect = mysqli_connect($server,$username,$password,$database);
            
            if($connect){
                return true;
            } else{
                die($connect);
            }
?>