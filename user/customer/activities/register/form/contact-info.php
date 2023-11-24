<?php
       session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer - Contact Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">
</head>
<body class="d-flex flex-column" style="height:100vh;width:100%">
   

    <form action="/connect2local/user/customer/activities/register/code/contact-info-validation.php" method="POST" class="p-2 d-flex flex-column align-items-center justify-content-center" style="height:90vh;width:100%;">
    <div class="my-4">
        <?php
        if (isset($_SESSION['error'])) {
            $error = $_SESSION['error'];
            echo "<p id='error-message' class='text-bg-dark text-center p-2 rounded m-auto' style='line-height:30px'><i class='fa-solid fa-triangle-exclamation text-warning px-1 fs-5'></i> $error</p>";
        } else{  
            if(isset($_SESSION['greet-message'])){

        ?>
            <div class="modal" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-body text-bg-dark rounded">
            <div class="spinner-border text-primary d-flex m-auto" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div id="greet-message" class="d-none text-center"><i class="fa-solid fa-check text-white rounded-circle bg-gradient" style="padding:5px; background-color:royalblue"></i> Submitted Successfully</div>
            </div>
            </div>
        </div>
        </div>
            <?php
                        unset($_SESSION['greet-message']);
                        echo "
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                var successModal = new bootstrap.Modal(document.getElementById('exampleModalToggle'));
                                var spinner = document.querySelector('.spinner-border');
                                var greetMessage = document.querySelector('#greet-message');
                                let modalBody = document.querySelector('.modal-body');
                                successModal.show();
                        
                                setTimeout(function () {
                                    modalBody.removeChild(spinner);
                                    greetMessage.classList.remove('d-none');
                                }, 3000); // Close the modal after 3 seconds (3000 milliseconds)

                                setTimeout(function(){
                                    window.location.href='/connect2local/user/customer/activities/register/form/customer-verification.php';
                                },5000);
                            });
                        </script>
                        ";
                        
                        unset($_SESSION['error']);
                        }
                    }                    
            ?>
            
        </div>
    </div>
        <fieldset class="border p-4 rounded" id="form-fieldset">
            <legend class="h2 fw-bold text-center mb-4">Contact Information</legend>
             
             <div class="mt-2">
                <label for="contact" class="form-label">Contact</label>
                <input type="tel" name="phone" id="contact" placeholder="Phone Number" class="form-control"   value="<?php if(isset($_SESSION['phone'])) echo $_SESSION['phone'] ?>" required>
             </div>
             
             <div class="mt-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" placeholder="Email Address" class="form-control"  value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'] ?>" required>
             </div>
             <div class="my-2">
             <label for="address" class="form-label px-1">Address</label>
             </div>
             <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" name="address" placeholder="Street Address" value="<?php if (isset($_SESSION['address'])) echo $_SESSION['address']; ?>" required>
                </div>

                <div class="col-6">
                    <input type="text" class="form-control" name="city" placeholder="City Name" value="<?php if (isset($_SESSION['city'])) echo $_SESSION['city']; ?>" required>
                </div>
            </div>
            
            <div class="row my-3">
                <div class="col-6">
                    <input type="text" class="form-control" name="pincode" placeholder="Postal Code" value="<?php if (isset($_SESSION['pincode'])) echo $_SESSION['pincode']; ?>" required>
                </div>
                
                <div class="col-6">
                    <input type="text" class="form-control" name="state" placeholder="State" value="<?php if (isset($_SESSION['state'])) echo $_SESSION['state']; ?>" required>
                </div>
            </div>

             <div class="mt-3 d-flex align-items-center justify-content-between px-2" style="gap:7px">
                <a href="/connect2local/user/customer/activities/register/form/basic-info.php" class=" nav-link px-5 py-2 rounded text-bg-primary bg-gradient" style="border:grey; width:150px;height:45px;">Previous</a>
                <input type="submit" value="Next" name="submit" class="px-5 py-2 rounded text-bg-danger bg-gradient" style="border:grey; width:150px;height:45px;">
             </div>
        </fieldset>
    </form>
        <?php
              include "../../../../../component/form-footer.php";
          ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>