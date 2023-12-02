<?php   
    session_start();

    require "./includes/db_connection.php";
    require "./includes/security_function.php";

    // $fetch_query = "SELECT C_PHONE,C_KEY from customer_register where 1";

    // $result = mysqli_query($GLOBALS['connect'],$fetch_query);

    // if(mysqli_num_rows($result) > 0){
    //         $row = mysqli_fetch_assoc($result);

    //         $encryptedphone = $row['C_PHONE'];

    //         echo "$encryptedphone";

    //         $decryptphone = decryptData($encryptedphone,$row['C_KEY']);

    //         echo "<br> Decrypted phone : $decryptphone";
    // }


    function find_phone($phone,$table_name,$col_name_phone,$col_name_key,$key){

        echo "$phone <br>"."$table_name <br>"."$col_name_phone <br>"."$col_name_key <br>"."$key <br>";
        $query = "SELECT $col_name_phone FROM $table_name where $col_name_key = $key";
        $result = mysqli_query($GLOBALS['connect'],$query);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);

            $decryptphone = decryptData($row["$col_name_phone"],$key);

            if($phone == $decryptphone){
                return true;
            }
        } else{
            echo "No such rows.";
        }

        return false;
    }

    function find_email($email,$table_name,$col_name,$col_name_email,$col_name_key){
        $query = "SELECT $col_name,$col_name_key,$col_name_email FROM $table_name WHERE $col_name > 0";
        $result = mysqli_query($GLOBALS['connect'],$query);

        if($result){
            while ($row = mysqli_fetch_assoc($result)) {
                    $encryptEmail = $row["$col_name_email"];
                    $key = $row["$col_name_key"];
                    $decryptEmail = decryptData($encryptEmail,$key);

                    echo "Email : $decryptEmail  "."key : $key<br>";
                    if($email == $decryptEmail){
                        $_SESSION['message'] = "Email Matched";
                        return true;
                    }
            }

            $_SESSION['message'] = "Email not matched";
        } else{
            echo "No such rows.";
        }
        return false;
    }

    // $findMyNumber = find_phone("9723884857","customer_register","C_PHONE","C_KEY",661635);
    $findMyEmail = find_email("mycoding1724@gmail.com","customer_register","C_ID","C_EMAIL","C_KEY");
    echo "<div style='padding:0 5px; font-size:35px'>$findMyEmail</div>";
    echo $_SESSION['message'];

    
?>


Illustration by <a href="https://icons8.com/illustrations/author/lZpGtGw5182N">Elisabet Guba</a> from <a href="https://icons8.com/illustrations">Ouch!</a>