<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salesman Register Completed</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">
</head>
<body>
<div class="modal fade" id="loadingMessage" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
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
                            var successModal = new bootstrap.Modal(document.getElementById('loadingMessage'));

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
                                window.location.href='/connect2local/user/salesman/panel/salesman-dashboard.php';
                            },5000);
                        });
                        </script>";
                        
                        unset($_SESSION['greet-message']);
                        unset($_SESSION['error']);
                    }
                    
            ?>

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Terms & Conditions Agreement</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                <i class="fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close"></i>
            </div>
            <form action="/connect2local/user/salesman/activities/register/code/insert-data.php" method="post">
            <div class="modal-body">
                
                    <p>Please read and agree to our <a href="/connect2local/pages/policy/term-condition.php" target="_blank">Terms & Conditions</a> .</p>
                    <label class="d-flex align-items-center" style="gap:10px;height:30px">
                        <input type="radio" name="term-agree" value="Yes" required> I Agree
                    </label>
                    <label class="d-flex align-items-center" style="gap:10px;height:30px">
                        <input type="radio" name="term-agree" value="No" required> Not Agree
                    </label>
              
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" value="submit" class="btn text-bg-success bg-gradient px-5 py-2 rounded-pill" data-bs-target="#loadingModal" data-bs-toggle="modal">
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="loadingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loadingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <p>Please Wait For few Second...</p>
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container d-flex flex-column justify-content-center align-items-center w-100" style="height:90vh;">
    <h1 class="h2 text-center fw-bold px-4"><?php if(isset($_SESSION['term-condition'])){ if($_SESSION['term-condition'] == "Yes") echo "Congratulations..... You have Successfully Registered"; else echo "Sorry... You can't Register Before Accept our Term and Policy.";} ?> </h1>
    <p style="text-align: justify;" class="px-5">Click the below button to move forward and finish up the process.</p>
    <button type="button" id="btn-finish" class="btn text-bg-dark bg-gradient py-2 px-5 mt-2 rounded-2" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Finish</button>
    <!-- <a href="/local business/user/salesman/register/code/insert-data.php" class="btn text-bg-dark bg-gradient py-2 px-5 mt-2 rounded-2">Finish</a> -->
</div>
<?php
    include "../../../../../component/form-footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
