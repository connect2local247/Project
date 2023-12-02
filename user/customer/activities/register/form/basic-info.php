<?php
    session_start();

    require "../../../../../includes/delete_info.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer - Basic Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">
</head>
<body class="d-flex flex-column" style="height:100vh;width:100%">

    <div class="modal fade" id="helpModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="helpModalLabel">Help</h1>
                <i class="fa-solid fa-xmark fs-5" data-bs-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body">
            <iframe class="rounded-3" style="width:100%;height:200px" src="https://www.youtube.com/embed/CO7voe1wmhA?si=s_tXODBoCTNNv2XC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <p style='text-align:justify;padding:3px 5px'>
                In Connect2Local, we collect your basic information like your name,surname,birth date and gender for the purpose of to create your customer profile and check your eligibility to use our platform. above video is on how to register as customer in connect2local if you have any trouble with filling up the information in form then you can checkout and solve and also understand the register process via video.
            </p>
            <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Index</th>
                        <th>Field</th>
                        <th>Data</th>
                        <th>Format</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even-row">
                        <td>1</td>
                        <td>First Name</td>
                        <td>Your Name</td>
                        <td>Name first letter must be capital and only within 15 letters allowed.</td>
                    </tr>
                    <tr class="odd-row">
                        <td>2</td>
                        <td>Last Name</td>
                        <td>Surname</td>
                        <td>Surname first letter must be capital and only within 15 letters allowed.</td>
                    </tr>
                    <tr class="even-row">
                        <td>3</td>
                        <td>Birth Date</td>
                        <td>Date of Birth</td>
                        <td>Birth Date must enter in mm/dd/yyyy format, and your age must be 18 or above.</td>
                    </tr>
                    <tr class="odd-row">
                        <td>4</td>
                        <td>Gender</td>
                        <td>Your Gender</td>
                        <td>Select your gender from the option according to your type.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

            </div>
            </div>
        </div>
    </div>

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
            <legend class="h2 fw-bold text-center mb-4">Basic Information</legend>
            <div class="position-absolute end-0 top-0 me-4 mt-3">
                <i class="fa-solid fa-circle-info fs-4 text-primary" data-bs-target="#helpModal" data-bs-toggle="modal"></i>
            </div>
            <div class="row my-2">
                <div class="col-6">
                    <input type="text" class="form-control" name="fname" placeholder="First Name" value="<?php if (isset($_SESSION['fname'])) echo $_SESSION['fname']; ?>" required>
                </div>

                <div class="col-6">
                    <input type="text" class="form-control" name="lname" placeholder="Last Name" value="<?php if (isset($_SESSION['lname'])) echo $_SESSION['lname']; ?>" required>
                </div>
            </div>

            <div class="row my-2">
                <div class="col-6">
                    <input type="date" class="form-control" name="birth-date" id="birth-date" value="<?php if (isset($_SESSION['birth-date'])) echo $_SESSION['birth-date']; ?>" required>
                </div>

                <div class="col-6">
                    <select class="form-select" name="gender" required>
                        <option value="" disabled selected>Select gender</option>
                        <option value="Male" <?php if (isset($_SESSION['gender']) && $_SESSION['gender'] === 'Male') echo 'selected'; ?>>Male</option>
                        <option value="Female" <?php if (isset($_SESSION['gender']) && $_SESSION['gender'] === 'Female') echo 'selected'; ?>>Female</option>
                        <option value="Other" <?php if (isset($_SESSION['gender']) && $_SESSION['gender'] === 'Other') echo 'selected'; ?>>Other</option>
                    </select>
                </div>
            </div>

            <div class="mt-3 d-flex align-items-center justify-content-between px-2">
                <a href="/local business/LOGIN/FORM/login.html" class="nav-link" style="font-size:15px">Have an Account ?</a>
                <input type="submit" name="submit" value="Next" class="px-5 py-2 rounded text-bg-danger bg-gradient" style="border: grey; width: 150px; height: 45px;">
            </div>
        </fieldset>  
    </form>
    <?php
    include "../../../../../component/form-footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
