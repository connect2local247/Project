<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Finished</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center w-100" style="height:90vh;">
        <h1 class="h2 text-center fw-bold px-4"><?php if(isset($_SESSION['greet-message'])) echo $_SESSION['greet-message'];?></h1>
        <p style="text-align: justify;" class="px-5">We will review your information and respond to your request to confirm your eligibility. Please allow us two days to make our decision. Once you are approved, you can log in as an administrator and manage your local area.</p>
        <a href="/connect2local/index.php" class="btn text-bg-dark bg-gradient py-3 px-4 mt-2">Back to Home</a>
    </div>
    <div class="container-fluid d-flex justify-content-end flex-column align-items-center py-2 fixed-bottom" style="background-color:rgb(56, 38, 38)">
        <div class="mt-2">
            <a href="#" class=" link-underline link-underline-opacity-0" style="font-size:13px;color:rgb(181, 166, 166)">Term & Condition</a><span  style="font-size:13px;color:rgb(181, 166, 166)"> | </span> <a href="#" class="link-underline link-underline-opacity-0"  style="font-size:13px;color:rgb(181, 166, 166)">Privacy Policy</a>
        </div>
        <div class="content text-white" style="font-size:13px">
            Copyright&copy;localbusiness.com, All rights reserved
        </div>
    </div>
</body>
</html>