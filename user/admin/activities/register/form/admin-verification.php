<?php 
        session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Verification</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">

    <style>
    
        @media (min-width: 992px) {
            #form-fieldset {
                width: 45% !important;
            }
        }
    
    
        @media (min-width: 768px) and (max-width:991px){
            #form-fieldset {
                width: 75% !important;
            }
        }
    
    
        @media (max-width: 767px) {
            #form-fieldset {
                width: 100% !important;
            }
        }
    
        </style>

</head>
<body>
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-body text-bg-dark rounded">
                    <div class="spinner-border text-primary d-flex m-auto" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div id="greet-message" class="d-none text-center"><i class="fa-solid fa-check text-white rounded-circle bg-gradient" style="padding:5px; background-color:royalblue"></i><?php if(isset($_SESSION['greet-message'])) echo $_SESSION['greet-message'];?></div>
                    </div>
                    </div>
                </div>
            </div>
            <?php
                    if(isset($_SESSION['greet-message'])){

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
                                    window.location.href='/connect2local/user/admin/activities/register/verification/email-verification-code.php';
                                },5000);
                            });
                            </script>";
                            
                            unset($_SESSION['greet-message']);
                            unset($_SESSION['error']);
                        }
                            
            ?>
    <div class="container" >
        <form action="/connect2local/user/admin/activities/register/code/email-verification.php" method="post" class="d-flex justify-content-center align-items-center" style="height:90vh;width:100%;">
            <fieldset class="border p-4 rounded position-relative" id="form-fieldset">
                <legend class="text-center fw-bold fs-3 my-5">Admin Verification</legend>
                <div class="position-absolute end-0 top-0 me-4 mt-3">
                <i class="fa-solid fa-circle-info fs-4 text-primary"></i>
                </div>
                <div class="mt-5">
                    <label for="phone" class="form-label">Contact</label>
                    <input type="tel" name="contact" class="form-control" placeholder="Phone Number" id="contact" value="<?php if(isset($_SESSION['contact'])) echo $_SESSION['contact'];?>" readonly>            
                </div>

                <div class="mt-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email Address" id="email" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'];?>" readonly>
                </div>
                <div class="mt-3 d-flex align-items-center justify-content-between px-2" style="gap:10px">
                <a href="/connect2local/user/admin/activities/register/form/contact-detail.php" class=" nav-link px-5 py-2 rounded text-bg-primary bg-gradient" style="border:grey; width:150px;height:45px;">Previous</a>
                <input type="submit" value="Verify" name="verify" class="px-5 py-2 rounded text-bg-danger bg-gradient" style="border:grey; width:150px;height:45px;">
             </div>
            </fieldset>
        </form>
    </div>
    
    <?php
        include "../../../../../component/form-footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>