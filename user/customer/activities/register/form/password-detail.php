<?php
        session_start();
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer - Secure Email Account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>
    
    <div class="container">
        <form action="/connect2local/user/customer/activities/register/code/password-validation.php" method="POST" class="d-flex flex-column align-items-center justify-content-center" style="height:90vh;width: 100%;">
           
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
                                    window.location.href='/connect2local/user/customer/activities/register/code/insert-data.php';
                                },5000);
                            });
                        </script>
                        ";
                        
                        unset($_SESSION['error']);
                        }
                    }                    
            ?>
            </div>
            <fieldset class="p-3 border rounded" id="form-fieldset">
                <legend class="my-4 fw-bold fs-4 text-center">Email Account Protection</legend>
                <div class="mt-2">
                    <input type="email" name="email" class="form-control" id="email" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'];?>" disabled>
                </div>

                <div class="mt-2">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?php if(isset($_SESSION['password'])) echo $_SESSION['password'];?>" required>
                </div>

                <div class="mt-2">
                    <input type="password" name="conf-password" id="password" class="form-control" placeholder="Confirm Password" value="<?php if(isset($_SESSION['conf-password'])) echo $_SESSION['conf-password']; ?>" required>
                </div>

                <div class="mt-3 d-flex align-items-center justify-content-between px-2">
                    <div class="radio-group d-flex align-items-center" style="gap:7px;height:50px">
                        <input type="checkbox" name="agree-terms" id="agree-terms" class="form-input-checkbox" required>
                        <label for="agree-terms" class="form-label"><a href="/local business/webpage/policy/term-condition.php">Term & Condition</a></label>
                    </div>
                    <input type="submit" value="Finish" name="submit" class="px-5 py-2 rounded text-bg-danger bg-gradient" style="border:grey; width:150px;height:45px;">
                 </div>
            </fieldset>
        </form>
        <?php
                      include "../../../../../component/form-footer.php";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>