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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js"></script>
    <style>
    #error-message {
        opacity: 1;
        height: auto;
        transition: opacity 0.5s ease, height 0.5s ease;
    }

    #error-message.hidden {
        opacity: 0;
        height: 0;
    }
</style>

</head>
<body class="d-flex flex-column" style="height:100vh;width:100%" id="form-body">
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background:linear-gradient(#040014,#0B1419)">
            <div class="modal-body rounded" >
            <div id="animation container" class="m-auto" style="height:50px;width:50px">
                <script>
                    var animation = bodymovin.loadAnimation({
                        container : document.getElementById('animation container'),
                        loop:false,
                        autoplay:true,
                        rendor:'svg',
                        path:"/connect2local/asset/animation/success.json",
                        name:"demo animation",
                        background:"transparent"
                    })
                </script>
            </div>
            <div id="greet-message" class="d-none text-center text-white"><?php if(isset($_SESSION['greet-message'])) echo $_SESSION['greet-message'];?></div>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="helpModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content" id="help-modal-bg">
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
            <h5 class="fw-bold ps-2 guideline-color">Field Validation Guidelines</h5>
            <ul>
                <li>
                    <strong class="field-color">First Name</strong>
                    <ul>
                        <li><b class="data-color">Data:</b> Your Name</li>
                        <li><b class="format-color">Format:</b> Name first letter must be capital and only within 15 letters allowed.</li>
                    </ul>
                </li>
                <li>
                    <strong class="field-color">Last Name</strong>
                    <ul>
                        <li><b class="data-color">Data:</b> Surname</li>
                        <li><b class="format-color">Format:</b> Surname first letter must be capital and only within 15 letters allowed.</li>
                    </ul>
                </li>
                <li>
                    <strong class="field-color">Birth Date</strong>
                    <ul>
                        <li><b class="data-color">Data:</b> Date of Birth</li>
                        <li><b class="format-color">Format:</b> Birth Date must be entered in mm/dd/yyyy format, and your age must be 18 or above.</li>
                    </ul>
                </li>
                <li>
                    <strong class="field-color">Gender</strong>
                    <ul>
                        <li><b class="data-color">Data:</b> Your Gender</li>
                        <li><b class="format-color">Format:</b> Select your gender from the options according to your type.</li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
    <div>
    <h5 class="ps-2 fw-bold guideline-color">Valid Example</h5>
    <ul>
        <li>
            <strong class="field-color">First Name</strong>
            <ul>
                <li><b class="data-color">Data:</b> John</li>
                <li><b class="format-color">Format:</b> Name first letter must be capital and only within 15 letters allowed.</li>
            </ul>
        </li>
        <li>
            <strong class="field-color">Last Name</strong>
            <ul>
                <li><b class="data-color">Data:</b> Doe</li>
                <li><b class="format-color">Format:</b> Surname first letter must be capital and only within 15 letters allowed.</li>
            </ul>
        </li>
        <li>
            <strong class="field-color">Birth Date</strong>
            <ul>
                <li><b class="data-color">Data:</b> 01/15/1990</li>
                <li><b class="format-color">Format:</b> Birth Date must be entered in mm/dd/yyyy format, and your age must be 18 or above.</li>
            </ul>
        </li>
        <li>
            <strong class="field-color">Gender</strong>
            <ul>
                <li><b class="data-color">Data:</b> Male</li>
                <li><b class="format-color">Format:</b> Select your gender from the options according to your type.</li>
            </ul>
        </li>
    </ul>
</div>

            <div>
              <h5 class="ps-2 fw-bold guideline-color">Invalid Example</h5>
                <ul>
                    <li>
                        <strong class="field-color">First Name</strong>
                        <ul>
                            <li><b class="data-color">Data:</b> john</li>
                            <li><b class="format-color">Format:</b> Name first letter must be capital and only within 15 letters allowed.</li>
                        </ul>
                    </li>
                    <li>
                        <strong class="field-color">Last Name</strong>
                        <ul>
                            <li><b class="data-color">Data:</b> Doe123</li>
                            <li><b class="format-color">Format:</b> Surname first letter must be capital and only within 15 letters allowed.</li>
                        </ul>
                    </li>
                    <li>
                        <strong class="field-color">Birth Date</strong>
                        <ul>
                            <li><b class="data-color">Data:</b> 2022-01-15</li>
                            <li><b class="format-color">Format:</b> Birth Date must be entered in mm/dd/yyyy format, and your age must be 18 or above.</li>
                        </ul>
                    </li>
                    <li>
                        <strong class="field-color">Gender</strong>
                        <ul>
                            <li><b class="data-color">Data:</b> Unknown</li>
                            <li><b class="format-color">Format:</b> Select your gender from the options according to your type.</li>
                        </ul>
                    </li>
                </ul>
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
        ?>
        <div class="errorMessage col-lg-3 border rounded fs-5 position-absolute end-0 top-0 m-2 text-center d-flex flex-column align-items-center text-white" id="error-message" style="height:180px;background-color:rgb(96, 92, 92)">
            <div class="w-100 h-100 text-center position-relative" style="background:linear-gradient(#2F2462,#001520);">
                <div class="text-bg-dark bg-gradient p-2 rounded" id="submit-btn">
                <i class="fa-solid fa-xmark position-absolute end-0 mt-2 me-3" id="close-mark"></i>
                <span>Error Message</span>
                </div>
                <div style="height:70%;display:flex;align-items:center;justify-content:center">
                    <p> <i class="fa-solid fa-xmark text-bg-danger p-2 rounded-circle"></i> <?php echo "$error"; ?></p>
                </div>
                <div class="position-absolute bottom-0 rounded" id="loading" style="background:linear-gradient(skyblue,royalblue,skyblue); width:100%; height:10px"></div>
            </div>
            <script>
    const loading = document.getElementById('loading');
    const errorMessage = document.getElementById('error-message');
    const closeErrorPrompt = document.getElementById('close-mark');
    
    closeErrorPrompt.addEventListener('click',function(){
           errorMessage.classList.add('hidden');             
    })
    const decreaseWidth = () => {
        loading.style.width = (parseFloat(loading.style.width) - 1) + "%";
        
        if (parseFloat(loading.style.width) <= 0) {
            clearInterval(intervalId);

            
            // Unset the session variable directly in the same file
            <?php unset($_SESSION['error']); ?>

            // Apply smooth transition to hide the error message
            errorMessage.classList.add('hidden');
        }
    };

    const intervalId = setInterval(decreaseWidth, 35);
</script>

        </div>
        <?php
} else if (isset($_SESSION['greet-message'])) {
?>
    <?php
                    
                        echo "
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                var successModal = new bootstrap.Modal(document.getElementById('exampleModalToggle'));
                                var animation = document.getElementById('animation container');
                                var greetMessage = document.querySelector('#greet-message');
                                let modalBody = document.querySelector('.modal-body');
                                successModal.show();
                                
                                setTimeout(function () {
                                    // spinner.style.display = 'none';
                                    modalBody.removeChild(animation);
                                    greetMessage.classList.remove('d-none');
                                }, 2500); // Close the modal after 3 seconds (3000 milliseconds)
                                
                                setTimeout(function(){
                                    window.location.href='/connect2local/user/customer/activities/register/form/contact-info.php';
                                },3000);
                            });
                            </script>";
                            
                            unset($_SESSION['greet-message']);
                            unset($_SESSION['error']);
                        }
                            
            ?>




        </div>
    </div>
        <fieldset class="border p-4 rounded position-relative shadow" id="form-fieldset" style="background:linear-gradient(rgba(40, 1, 1, 0.413),rgba(6, 9, 20, 0.71));">
            <legend class="h2 fw-bold text-center mb-4 text-white">Basic Information</legend>
            <div class="position-absolute end-0 top-0 me-4 mt-3">
                <i class="fa-solid fa-circle-info fs-4 text-warning" data-bs-target="#helpModal" data-bs-toggle="modal"></i>
            </div>
            <div class="row my-2">
                <div class="col-6">
                    <input type="text" class="form-control border-4 border-dark"  name="fname" placeholder="First Name" value="<?php if (isset($_SESSION['fname'])) echo $_SESSION['fname']; ?>" required>
                </div>

                <div class="col-6">
                    <input type="text" class="form-control border-4 border-dark"  name="lname" placeholder="Last Name" value="<?php if (isset($_SESSION['lname'])) echo $_SESSION['lname']; ?>" required>
                </div>
            </div>

            <div class="row my-2">
                <div class="col-6">
                    <input type="date" class="form-control border-4 border-dark"  name="birth-date" id="birth-date" value="<?php if (isset($_SESSION['birth-date'])) echo $_SESSION['birth-date']; ?>" required>
                </div>

                <div class="col-6">
                    <select class="form-select border-4 border-dark" name="gender" required>
                        <option value="" disabled selected>Select gender</option>
                        <option value="Male" <?php if (isset($_SESSION['gender']) && $_SESSION['gender'] === 'Male') echo 'selected'; ?>>Male</option>
                        <option value="Female" <?php if (isset($_SESSION['gender']) && $_SESSION['gender'] === 'Female') echo 'selected'; ?>>Female</option>
                        <option value="Other" <?php if (isset($_SESSION['gender']) && $_SESSION['gender'] === 'Other') echo 'selected'; ?>>Other</option>
                    </select>
                </div>
            </div>

            <div class="mt-3 d-flex align-items-center justify-content-between px-2">
                <a href="/local business/LOGIN/FORM/login.html" class="nav-link text-white" style="font-size:15px">Have an Account ?</a>
                <input type="submit" name="submit" value="Next" id="submit-btn" class="px-5 py-2 rounded text-white" style="border: grey; width: 150px; height: 45px;">
            </div>
        </fieldset>  
    </form>
    <?php
    include "../../../../../component/form-footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
