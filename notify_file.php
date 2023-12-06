<?php
         use PhpOffice\PhpSpreadsheet\Spreadsheet;
         use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
         require './includes/fetch_data_function.php';
         require './includes/code_generator.php';
         require 'vendor/autoload.php'; 

        function notification_file_create($email,$user,$filename,$path){
            $filename = createUniqueFilename();

            
            $excelFilePath = "./database/$user/notification file/$filename";

            while(file_exists($excelFilePath)){
                $spreadsheet = new Spreadsheet();
                $writer = new Xlsx($spreadsheet);
                $writer->save($excelFilePath);
            }

        }
?>