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
<body id="form-body" style="height:100vh;width:100%">
<div class="modal fade" id="securityHelpModal" aria-hidden="true" aria-labelledby="securityHelpModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content" id="help-modal-bg">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="securityHelpModalLabel">Help</h1>
                    <i class="fa-solid fa-xmark fs-5" data-bs-dismiss="modal" aria-label="Close"></i>
                </div>
                <div class="modal-body">
                <iframe class="rounded-3" style="width:100%;height:200px" src="https://www.youtube.com/embed/CO7voe1wmhA?si=s_tXODBoCTNNv2XC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <p style='text-align:justify;padding:3px 5px'>
                        Welcome to the Security Information setup in Connect2Local. This step ensures the protection of your email account. Here's what you need to know:

                        <ul>
                            <li>
                                <strong class="data-color">Email Account:</strong>
                                <ul>
                                    <li>Your registered email account is displayed but is not editable in this step.</li>
                                </ul>
                            </li>
                            <li>
                                <strong class="data-color">Password:</strong>
                                <ul>
                                    <li>Enter a secure password that meets the specified criteria:</li>
                                    <ul>
                                        <li>At least one uppercase letter</li>
                                        <li>At least one lowercase letter</li>
                                        <li>At least one digit</li>
                                        <li>At least one special character (@#$_)</li>
                                        <li>Between 8 to 16 characters</li>
                                    </ul>
                                    <li>Confirm the password to ensure accuracy.</li>
                                </ul>
                            </li>
                            <li>
                                <strong class="data-color">Terms & Conditions:</strong>
                                <ul>
                                    <li>Read and agree to the <a href="/local business/webpage/policy/term-condition.php" class="guideline-color">Terms & Conditions</a>.</li>
                                </ul>
                            </li>
                            <li>
                                <strong class="data-color">Finish:</strong>
                                <ul>
                                    <li>Submit the form to complete the Security Information setup.</li>
                                    <li>A loading spinner indicates that the system is processing the submission.</li>
                                    <li>Once completed, a success message will be shown, and you will be redirected to the next step.</li>
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
            <div id="greet-message" class="d-none text-center"><i class="fa-solid fa-check text-white rounded-circle bg-gradient" style="padding:5px; background-color:royalblue text-white"></i> Submitted Successfully</div>
            </div>
            </div>
        </div>
        </div>
            <?php
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
                            
                        unset($_SESSION['greet-message']);
                        unset($_SESSION['error']);
                        }
                    }                    
            ?>
            </div>
            <fieldset class="p-3 border rounded position-relative" id="form-fieldset" style="background:linear-gradient(rgba(40, 1, 1, 0.413),rgba(6, 9, 20, 0.71));">
                <legend class="my-4 fw-bold fs-4 text-center text-white">Email Account Protection</legend>
                <div class="position-absolute end-0 top-0 me-4 mt-3">
                <i class="fa-solid fa-circle-info fs-4 text-warning" data-bs-target="#securityHelpModal" data-bs-toggle="modal"></i>
                </div>
                <div class="mt-2">
                    <input type="email" name="email" class="form-control border-4 border-dark" id="email" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'];?>" disabled>
                </div>

                <div class="mt-2">
                    <input type="password" name="password" id="password" class="form-control border-4 border-dark" placeholder="Password" value="<?php if(isset($_SESSION['password'])) echo $_SESSION['password'];?>" required>
                </div>

                <div class="mt-2">
                    <input type="password" name="conf-password" id="password" class="form-control border-4 border-dark" placeholder="Confirm Password" value="<?php if(isset($_SESSION['conf-password'])) echo $_SESSION['conf-password']; ?>" required>
                </div>

                <div class="mt-3 d-flex align-items-center justify-content-between px-2">
                    <div class="radio-group d-flex align-items-center" style="gap:7px;height:50px">
                        <input type="checkbox" name="agree-terms" id="agree-terms" class="form-input-checkbox" required>
                        <label for="agree-terms" class="form-label"><a href="/local business/webpage/policy/term-condition.php" class="text-white nav-link">Term & Condition</a></label>
                    </div>
                    <input type="submit" value="Finish" id="submit-btn" name="submit" class="px-5 py-2 rounded text-bg-danger bg-gradient" style="border:grey; width:150px;height:45px;">
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