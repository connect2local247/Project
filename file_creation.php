<?php
        use PhpOffice\PhpSpreadsheet\Spreadsheet;
        use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

        require './includes/fetch_data_function.php';
        require './includes/code_generator.php';
        require 'vendor/autoload.php'; // Adjust the path if needed

        // // Specify the full path to your Excel file
        // $excelFilePath = './database/user118.xlsx';

        // // Load the existing Excel file or create a new one
        // $spreadsheet = file_exists($excelFilePath) ? \PhpOffice\PhpSpreadsheet\IOFactory::load($excelFilePath) : new Spreadsheet();

        // // Get the active sheet
        // $sheet = $spreadsheet->getActiveSheet();

        // // Add headers to the first row if the file is new
        // if (!$sheet->getCellByColumnAndRow(1, 1)->getValue()) {
        //     $sheet->setCellValue('A1', 'Title');
        //     $sheet->setCellValue('B1', 'Message');
        //     $sheet->setCellValue('C1', 'Time');
        //     $sheet->setCellValue('D1', 'User Name');
        //     $sheet->setCellValue('E1', 'User Image');
        // }

        // // Example data to be inserted (replace this with your actual data)
        // $data = [
        //     ['Title 1', 'Message 1', '2023-01-01 12:00:00', 'User 1', 'user1.jpg'],
        //     ['Title 2', 'Message 2', '2023-01-02 15:30:00', 'User 2', 'user2.jpg'],
        //     // Add more data as needed
        // ];

        // // Determine the next available row for data
        // $nextRow = $sheet->getHighestRow() + 1;

        // // Insert data into the respective columns
        // foreach ($data as $rowIndex => $rowData) {
        //     foreach ($rowData as $columnIndex => $value) {
        //         $sheet->setCellValueByColumnAndRow($columnIndex + 1, $nextRow + $rowIndex, $value);
        //     }
        // }

        // // Explicitly close the file handle before saving
        // $writer = new Xlsx($spreadsheet);
        // $writer->save($excelFilePath);

        // echo "Data inserted successfully!";

function notification_file_create($email,$user,$filename,$path){
    $filename = createUniqueFilename();

    
    $excelFilePath = "./database/$user/notification file/$filename";

    $spreadsheet = file_exists($excelFilePath) ? \PhpOffice\PhpSpreadsheet\IOFactory::load($excelFilePath) : new Spreadsheet();

}
?>