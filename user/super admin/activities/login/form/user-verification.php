<?php
        session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify It's You</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">
</head>
<body>
<div class="modal" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-body text-bg-dark rounded">
            <div class="spinner-border text-primary d-flex m-auto" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div id="greet-message" class="d-none text-center"><i class="fa-solid fa-check text-white rounded-circle bg-gradient" style="padding:5px; background-color:royalblue"></i><?php if(isset($_SESSION['greet-message'])) echo $_SESSION['greet-message']; ?></div>
            </div>
            </div>
        </div>
        <div>
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
                                    });
                                </script>
                            ";
                            unset($_SESSION['greet-message']);
                        }
                            
            ?>
        </div>
    </div>        
    <div class="container" >
    
        <form action="/connect2local/user/customer/activities/login/code/check_email.php" method="POST" class="d-flex flex-column justify-content-center align-items-center" style="height:90vh;width:100%;">
            <div class="my-4">
                <?php
                        if (isset($_SESSION['error'])) {
                            $error = $_SESSION['error'];
                            echo "<p id='error-message' class='text-bg-dark text-center p-2 rounded m-auto' style='line-height:30px'><i class='fa-solid fa-triangle-exclamation text-warning px-1 fs-5'></i> $error</p>";
                        } else{
                            unset($_SESSION['error']);
                        }
                ?>
            </div>
            <fieldset class="border p-4 rounded-2" id="form-fieldset">
                <legend class="text-center fs-3 fw-bold my-4">Verify It's You</legend>
                <div class="mt-2">
                    <input type="email" name="login-email" class="form-control py-2" placeholder="Your Email Address" id="email" value="<?php if(isset($_SESSION['login-email'])) echo $_SESSION['login-email'];?>" required>
                </div>
                <div class="mt-3 d-flex justify-content-center">
                    <input type="submit" name="submit" value="Submit"  class="btn text-bg-dark bg-gradient py-2 px-5 rounded-pill" >
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