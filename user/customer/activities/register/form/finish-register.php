<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Register Completed</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">
</head>
<body id="form-body" style="height:100vh;width:100%">
    <div class="container d-flex flex-column justify-content-center align-items-center w-100 text-white" style="height:90vh;">
        <h1 class="h2 text-center fw-bold px-4"><?php if(isset($_SESSION['greet-message'])) echo $_SESSION['greet-message'];?></h1>
        <p style="text-align: justify;" class="px-5" >Click the below button to move forward and finish up process.</p>
        <a href="/connect2local/user/customer/panel/customer-panel.php" style="background:linear-gradient(rgba(255, 34, 0, 0.527),rgba(255, 0, 144, 0.499)); color:white" class="btn  py-3 px-5 mt-2 rounded-3">Finish</a>
    </div>
    <?php
              include "../../../../../component/form-footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>