<?php
        session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salesman - Business Info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="d-flex justify-content-center align-items-center flex-column" style="height:100vh;width:100%">
   

    <form action="/connect2local/user/salesman/activities/register/code/business-detail-logic.php" method="POST" class="p-2 d-flex flex-column justify-content-center align-items-center" style="height:80vh;width:100%">
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
                                    window.location.href='/connect2local/user/salesman/activities/register/form/contact-detail.php';
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
            <legend class="h2 fw-bold text-center mb-4">Business Information</legend>
            <div class="position-absolute end-0 top-0 me-4 mt-3">
                <i class="fa-solid fa-circle-info fs-4 text-primary"></i>
            </div>
             <div class="row my-2">
                    <div class="col-6">
                        <select name="category" id="category" class="form-select" required>
                            <option value="" disabled selected>Select category</option>
                            <option value="Product" <?php if(isset($_SESSION['category']) && $_SESSION['category'] === 'Product') echo 'selected';?>>Product</option>
                            <option value="Service" <?php if(isset($_SESSION['category']) && $_SESSION['category'] === 'Service') echo 'selected';?>>Service</option>
                        </select>
                    </div>

                    <div class="col-6">
                        <input type="text" class="form-control" name="business-name" placeholder="Business Name" value="<?php if(isset($_SESSION['business-name'])) echo $_SESSION['business-name'];?>"  required>
                    </div>
             </div>

             <div class="row my-3">
                    <div class="col-6">
                        <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Postal / ZIP Code" value="<?php if(isset($_SESSION['pincode'])) echo $_SESSION['pincode'];?>" required>
                    </div>

                    <div class="col-6 px-4">
                        <span class="d-block fw-bold">Do you have physical store ?</span>
                        <div class="d-flex" style="gap:7px">
                            <div class="px-2 d-flex" style="gap:8px">
                                <input type="radio" name="answer" id="rd-yes" value="Yes" class="form-check-input" required>
                                <label for="rd-yes" class="form-label">Yes</label>
                            </div>
                            <div class="px-2">
                                <input type="radio" name="answer" id="rd-no" value="No" class="form-check-input" required>
                                <label for="rd-no" class="form-label">No</label>
                            </div>
                        </div>
                    </div>
             </div>

             <div class="row my-2">
                <div class="col-6">
                    <!-- <textarea name="address" id="address" cols="20" rows="10" placeholder="Work Address" class="form-control" style="height:5vh" required></textarea> -->
                    <input type="text" name="address" id="address" class="form-control" placeholder="Work Address" value="<?php if(isset($_SESSION['address'])) echo $_SESSION['address'];?>" required>
                </div>

                <div class="col-6">
                    <input type="text" class="form-control" name="city" placeholder="City Name" value="<?php if(isset($_SESSION['city'])) echo $_SESSION['city'];?>" required>
                </div>
            </div>

             <div class="mt-3 d-flex align-items-center justify-content-between px-2">
                <a href="/connect2local/user/salesman/activities/register/form/basic-detail.php" class=" nav-link px-5 py-2 rounded text-bg-primary bg-gradient" style="border:grey; width:150px;height:45px;">Previous</a>
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