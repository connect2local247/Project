<?php
    session_start();

    if(isset($_SESSION['error'])){
        unset($_SESSION['error']);
    }

    if (isset($_POST['submit'])) {
        // Set the upload directory based on your structure
        $targetDir = "../../../../../database/"; 
    
        // Set the target file path
        $targetFile = $targetDir . basename($_FILES["imageInput"]["name"]);
        $_SESSION["image-file"] = $targetFile; 
        // Check file size (in bytes)
        $maxFileSize = 7 * 1024 * 1024; // 7 MB
        if ($_FILES["imageInput"]["size"] > $maxFileSize) {
            $_SESSION['error'] =  "File size should be 7 MB or less.";
        }
    
        // Move the uploaded file to the destination directory
        if (move_uploaded_file($_FILES["imageInput"]["tmp_name"], $targetFile)) {
            // Redirect to the desired page
            $_SESSION['greet-message'] = "Image Uploaded Successfully";
            unset($_SESSION['error']);
        } else {
            $_SESSION['error'] = "Sorry, there was an error uploading your file.";
        }
        header("Location:/connect2local/user/admin/activities/register/form/admin-role-approval.php");
    }
?>