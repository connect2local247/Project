<?php
        session_start();

        if(isset($_SESSION['registered'])){
            unset($_SESSION['registered']);
        }

        
        header("location:/connect2local/index.php");
?>