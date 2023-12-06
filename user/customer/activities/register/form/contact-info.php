<?php
       session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer - Contact Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js"></script>

    <!-- <style>
        #error-message {
    opacity: 1;
    height: auto;
    transition: opacity 0.5s ease, height 0.5s ease;
}

#error-message.hidden {
    opacity: 0;
    height: 0;
}
    </style> -->
</head>
<body class="d-flex flex-column" id="form-body" style="height:100vh;width:100%">
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
<div class="modal fade" id="contactInfoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="contactInfoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content" id="help-modal-bg">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="contactInfoModalLabel">Help</h1>
                <i class="fa-solid fa-xmark fs-5" data-bs-dismiss="modal" aria-label="Close"></i>
            </div>
            <div class="modal-body">
                <iframe class="rounded-3" style="width:100%;height:200px" src="https://www.youtube.com/embed/NEW_VIDEO_ID?si=s_tXODBoCTNNv2XC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <p style='text-align:justify;padding:3px 5px'>
                    In Connect2Local, accurate contact information is crucial for creating a comprehensive customer profile and ensuring you receive relevant services. Please follow detailed guidelines for each field:

                        <h5 class="ps-2 fw-bold guideline-color">Field Validation Guidelines</h5>
                    <ul>
                        <li>
                            <strong class="field-color">Phone Number:</strong>
                            <ul>
                                <li><b class="data-color">Data:</b> Your 10-digit Phone Number</li>
                                <li><b class="format-color">Format:</b> Only numeric digits are allowed.</li>
                            </ul>
                        </li>
                        <li>
                            <strong class="field-color">Email:</strong>
                            <ul>
                                <li><b class="data-color">Data:</b> Your Email Address</li>
                                <li><b class="format-color">Format:</b> Follows standard email address structure (e.g., example@email.com).</li>
                            </ul>
                        </li>
                        <li>
                            <strong class="field-color">Address:</strong>
                            <ul>
                                <li><b class="data-color">Data:</b> Your Physical Address</li>
                                <li><b class="format-color">Format:</b> Only letters and spaces are allowed.</li>
                            </ul>
                        </li>
                        <li>
                            <strong class="field-color">City:</strong>
                            <ul>
                                <li><b class="data-color">Data:</b> Your City Name</li>
                                <li><b class="format-color">Format:</b> Only letters and spaces are allowed.</li>
                            </ul>
                        </li>
                        <li>
                            <strong class="field-color">Pincode:</strong>
                            <ul>
                                <li><b class="data-color">Data:</b> Your 6-digit Pincode</li>
                                <li><b class="format-color">Format:</b> Only numeric digits are allowed.</li>
                            </ul>
                        </li>
                        <li>
                            <strong class="field-color">State:</strong>
                            <ul>
                                <li><b class="data-color">Data:</b> Your Selected State</li>
                                <li><b class="format-color">Format:</b> Selection from a predefined list of states.</li>
                            </ul>
                        </li>
                    </ul>

                    Below are examples illustrating valid and invalid data:

                    <div>
                        <h5 class="ps-2 fw-bold guideline-color">Valid Example</h5>
                        <ul>
                            <li>
                                <strong class="field-color">Phone Number:</strong> 1234567890
                            </li>
                            <li>
                                <strong class="field-color">Email:</strong> example@email.com
                            </li>
                            <li>
                                <strong class="field-color">Address:</strong> 123 Main Street
                            </li>
                            <li>
                                <strong class="field-color">City:</strong> Metropolis
                            </li>
                            <li>
                                <strong class="field-color">Pincode:</strong> 123456
                            </li>
                            <li>
                                <strong class="field-color">State:</strong> Example State
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h5 class="ps-2 fw-bold guideline-color">Invalid Example</h5>
                        <ul>
                            <li>
                                <strong class="field-color">Phone Number:</strong> 12345
                            </li>
                            <li>
                                <strong class="field-color">Email:</strong> invalid.email
                            </li>
                            <li>
                                <strong class="field-color">Address:</strong> 123 $%^ Street
                            </li>
                            <li>
                                <strong class="field-color">City:</strong> 4567
                            </li>
                            <li>
                                <strong class="field-color">Pincode:</strong> ABC123
                            </li>
                            <li>
                                <strong class="field-color">State:</strong> Invalid State
                            </li>
                        </ul>
                    </div>

                    The above video provides step-by-step guidance on how to accurately provide this contact information during the registration process.
                </p>
                <!-- The rest of your content remains the same -->
            </div>
        </div>
    </div>
</div>


    <form action="/connect2local/user/customer/activities/register/code/contact-info-validation.php" method="POST" class="p-2 d-flex flex-column align-items-center justify-content-center" style="height:90vh;width:100%;">
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
                                    window.location.href='/connect2local/user/customer/activities/register/form/customer-verification.php';
                                },3000);
                            });
                            </script>";
                            
                            unset($_SESSION['greet-message']);
                            unset($_SESSION['error']);
                        }
                            
            ?>
        </div>
    <fieldset class="border p-4 rounded shadow position-relative" id="form-fieldset" style="background:linear-gradient(rgba(40, 1, 1, 0.413),rgba(6, 9, 20, 0.71));">
        <legend class="h2 fw-bold text-center mb-4 text-white">Contact Information</legend>
            
            <div class="position-absolute end-0 top-0 me-4 mt-3">
                <i class="fa-solid fa-circle-info fs-4 text-warning" data-bs-target="#contactInfoModal" data-bs-toggle="modal"></i>
            </div>

             <div class="mt-2">
                <label for="contact" class="form-label text-white">Contact</label>
                <input type="tel" name="phone" id="contact" placeholder="Phone Number" class="form-control border-4 border-dark"   value="<?php if(isset($_SESSION['phone'])) echo $_SESSION['phone'] ?>" required>
             </div>
             
             <div class="mt-2">
                <label for="email" class="form-label text-white">Email</label>
                <input type="email" name="email" id="email" placeholder="Email Address" class="form-control border-4 border-dark"  value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'] ?>" required>
             </div>
             <div class="my-2">
             <label for="address" class="form-label px-1 text-white">Address</label>
             </div>
             <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control border-4 border-dark" name="address" placeholder="Street Address" value="<?php if (isset($_SESSION['address'])) echo $_SESSION['address']; ?>" required>
                </div>

                <div class="col-6">
                    <input type="text" class="form-control border-4 border-dark" name="city" placeholder="City Name" value="<?php if (isset($_SESSION['city'])) echo $_SESSION['city']; ?>" required>
                </div>
            </div>
            
            <div class="row my-3">
                <div class="col-6">
                    <input type="text" class="form-control border-4 border-dark" name="pincode" placeholder="Postal Code" value="<?php if (isset($_SESSION['pincode'])) echo $_SESSION['pincode']; ?>" required>
                </div>
                
                <div class="col-6">
                <select class="form-select" name="state" required>
                    <option value="" disabled selected>Select state</option>
                    <?php
                    // Array of Indian states
                    $indianStates = array(
                        'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Goa', 'Gujarat',
                        'Haryana', 'Himachal Pradesh', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra',
                        'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu',
                        'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal', 'Andaman and Nicobar Islands',
                        'Chandigarh', 'Dadra and Nagar Haveli and Daman and Diu', 'Lakshadweep', 'Delhi', 'Puducherry'
                    );

                    // Loop through the array to generate options
                    foreach ($indianStates as $state) {
                        echo '<option value="' . $state . '"';
                        // Check if the state is selected (adjust this part based on your session variable)
                        if (isset($_SESSION['state']) && $_SESSION['state'] === $state) {
                            echo ' selected';
                        }
                        echo '>' . $state . '</option>';
                    }
                    ?>
                </select>

                </div>
            </div>

             <div class="mt-3 d-flex align-items-center justify-content-between px-2" style="gap:7px">
                <a href="/connect2local/user/customer/activities/register/form/basic-info.php"  class="nav-link px-5 py-2 rounded text-white" id="submit-btn"  style="border:grey; width:150px;height:45px;">Previous</a>
                <input type="submit" value="Next" name="submit" class="px-5 py-2 rounded text-white" id="submit-btn" style="border:grey; width:150px;height:45px;">
             </div>
        </fieldset>
    </form>
        <?php
              include "../../../../../component/form-footer.php";
          ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>