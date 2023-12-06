<?php
        session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Verification</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">
</head>
<body id="form-body"  style="height:100vh;width:100%">
<div class="modal fade" id="verificationHelpModal" aria-hidden="true" aria-labelledby="verificationHelpModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content" id="help-modal-bg">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-white" id="verificationHelpModalLabel">Help</h1>
                    <i class="fa-solid fa-xmark fs-5" data-bs-dismiss="modal" aria-label="Close"></i>
                </div>
                <div class="modal-body">
                <iframe class="rounded-3" style="width:100%;height:200px" src="https://www.youtube.com/embed/NEW_VIDEO_ID?si=s_tXODBoCTNNv2XC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <p style='text-align:justify;padding:3px 5px'>
                        Welcome to the Customer Verification process in Connect2Local. This step ensures the accuracy of the provided contact information. Here's what you need to know:

                        <ul>
                            <li>
                                <strong class="guideline-color">Contact Information:</strong>
                                <ul>
                                    <li><b class="data-color">Phone:</b> Your registered phone number will be displayed but is not editable in this step.</li>
                                    <li><b class="data-color">Email:</b> Similarly, your registered email address is displayed and not editable.</li>
                                </ul>
                            </li>
                            <li>
                                <strong class="guideline-color">Verification Process:</strong>
                                <ul>
                                    <li>A loading spinner indicates that the system is processing the verification.</li>
                                    <li>Once verified, a success message will be shown.</li>
                                    <li>The modal will automatically close after 3 seconds, and you will be redirected to the next step.</li>
                                </ul>
                            </li>
                        </ul>

                        If you encounter any issues during this process, please reach out to our support team for assistance.

                        </p>
                    <!-- The rest of your content remains the same -->
                </div>
            </div>
        </div>
    </div>

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
                                    window.location.href='/connect2local/user/customer/activities/register/verification/email-verification-code.php';
                                },5000);
                            });
                            </script>";
                            
                            unset($_SESSION['greet-message']);
                            unset($_SESSION['error']);
                        }
                            
            ?>
    <div class="container">
        <form action="/connect2local/user/customer/activities/register/code/email-verification.php" method="post" class="d-flex justify-content-center align-items-center" style="height:90vh;width:100%;">
            <fieldset class="border p-4 rounded position-relative" id="form-fieldset" style="background:linear-gradient(rgba(40, 1, 1, 0.413),rgba(6, 9, 20, 0.71));">
                <legend class="text-center fw-bold fs-3 my-5 text-white">Customer Verification</legend>
                <div class="position-absolute end-0 top-0 me-4 mt-3">
                <i class="fa-solid fa-circle-info fs-4 text-warning" data-bs-target="#verificationHelpModal" data-bs-toggle="modal"></i>
            </div>
                <div class="mt-5">
                    <label for="phone" class="form-label text-white">Contact</label>
                    <input type="tel" name="phone" class="form-control border-4 border-dark " placeholder="Phone Number" id="phone" value="<?php if(isset($_SESSION['phone'])) echo $_SESSION['phone'];?>" readonly>            
                </div>

                <div class="mt-2">
                    <label for="email" class="form-label text-white">Email</label>
                    <input type="email" name="email" class="form-control border-4 border-dark" placeholder="Email Address" id="email" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'];?>" readonly>
                </div>
                <div class="mt-3 d-flex align-items-center justify-content-between px-2" style="gap:7px">
                        <a href="/connect2local/user/customer/activities/register/form/contact-info.php" class=" nav-link px-5 py-2 rounded text-bg-primary bg-gradient" style="border:grey; width:150px;height:45px;" id="submit-btn">Previous</a>
                        <input type="submit" value="Verify" name="verify" id="submit-btn" class="px-5 py-2 rounded text-bg-success bg-gradient" style="border:grey; width:150px;height:45px;">
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