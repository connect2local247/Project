<?php
            require "db_connection.php";

            function find_data($data,$table_name,$col_name,$col_name_data,$col_name_key){
                $query = "SELECT $col_name,$col_name_key,$col_name_data FROM $table_name WHERE $col_name > 0";
                $result = mysqli_query($GLOBALS['connect'],$query);
        
                if($result){
                    while ($row = mysqli_fetch_assoc($result)) {
                            $encryptData = $row["$col_name_data"];
                            $key = $row["$col_name_key"];
                            $decryptData = decryptData($encryptData,$key);
    
                            if($data == $decryptData){
                                return true;
                            }
                    }
                } else{
                    echo "No such rows.";
                }
                return false;
            }
?>