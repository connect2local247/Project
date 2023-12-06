<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer - Feedback Basic Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">
</head>
<body>
    
<form action="/connect2local/user/customer/activities/register/code/basic-info-validation.php" method="post" class="p-2 d-flex flex-column justify-content-center align-items-center" style="height:80vh;width:100%">
    <div class="my-4">
        <?php
        if (isset($_SESSION['error'])) {
            $error = $_SESSION['error'];
            echo "<p id='error-message' class='text-bg-dark text-center p-2 rounded m-auto' style='line-height:30px'><i class='fa-solid fa-triangle-exclamation text-warning px-1 fs-5'></i> $error</p>";
        } else{  
            if(isset($_SESSION['greet-message'])){

        ?>
            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
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
                                    // spinner.style.display = 'none';
                                    modalBody.removeChild(spinner);
                                    greetMessage.classList.remove('d-none');
                                }, 3000); // Close the modal after 3 seconds (3000 milliseconds)

                                setTimeout(function(){
                                    window.location.href='/connect2local/user/customer/activities/register/form/contact-info.php';
                                },5000);
                            });
                        </script>";
                        
                        unset($_SESSION['error']);
                        }
                    }                    
            ?>
            
        </div>
    </div>
        <fieldset class="border p-4 rounded position-relative" id="form-fieldset">
            <div class="row my-2">
                <div class="col-6">
                    <input type="text" class="form-control" name="fname" placeholder="First Name" value="<?php if (isset($_SESSION['fname'])) echo $_SESSION['fname']; ?>" required>
                </div>

                <div class="col-6">
                    <input type="text" class="form-control" name="lname" placeholder="Last Name" value="<?php if (isset($_SESSION['lname'])) echo $_SESSION['lname']; ?>" required>
                </div>
            </div>

            <div class="mt-2">
                <input type="tel" name="phone" id="contact" placeholder="Phone Number" class="form-control"   value="<?php if(isset($_SESSION['phone'])) echo $_SESSION['phone'] ?>" required>
             </div>
             
             <div class="mt-2">
                <input type="email" name="email" id="email" placeholder="Email Address" class="form-control"  value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'] ?>" required>
             </div>

            <div class="mt-3 d-flex align-items-center justify-content-center px-2">
                <input type="submit" name="submit" value="Submit" class="px-5 py-2 rounded text-bg-primary bg-gradient" style="border: grey; width: 150px; height: 45px;">
            </div>
        </fieldset>  
    </form>
        <?php
                include "../../../../../component/form-footer.php";
        ?>
</body>
</html>