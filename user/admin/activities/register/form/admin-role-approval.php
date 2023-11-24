<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator - Role Approval</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">

</head>
<body>

    <div class="container">
        <form action="/connect2local/user/admin/activities/register/code/upload-image.php" method = "post" class="d-flex justify-content-center align-items-center" style="width:100%;height:90vh;" enctype="multipart/form-data" method="POST">
        <div class="my-4">
                <?php
                if (isset($_SESSION['error'])) {
                    $error = $_SESSION['error'];
                    echo "<p id='error-message' class='text-bg-dark text-center p-2 rounded m-auto' style='line-height:30px'><i class='fa-solid fa-triangle-exclamation text-warning px-1 fs-5'></i> $error</p>";
                } else{  
                    if(isset($_SESSION['greet-message'])){

                ?>
        </div>
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
                                            window.location.href='/connect2local/user/admin/activities/register/code/insert-data.php';
                                        },5000);
                                    });
                                </script>";
                                unset($_SESSION['greet-message']);
                                unset($_SESSION['error']);
                                }
                            }                    
                    ?>
                    
                </div>
            <fieldset class="border rounded-2 p-4" id="form-fieldset">
                <legend class="h3 fw-bold mb-5 text-center">Upload Image</legend>
                <div class="mt-4 form-group">
                    <div id="imagePreview" class="d-flex justify-content-center align-items-center">
                        <img src="/local business/USER/ADMIN/IMAGE/face-image.png" class="img-thumbnail" alt="Selected Image" style="height:150px; width:150px">
                    </div>
                </div>

                <div class="mt-2">
                    <input type="file" class="form-control" name="imageInput" id="imageInput" accept="image/*" required>
                    <p class="form-text"><b>Note:</b> Upload your photo in which your face is visible properly; otherwise, your request will not be accepted.</p>
                </div>

                <div class="mt-2 d-flex justify-content-center">
                    <input type="submit" name="submit" value="Upload" class="border text-bg-primary rounded-2 py-2 px-4">
                </div>
            </fieldset>
        </form>
    </div>

    <script>
        document.getElementById('imageInput').addEventListener('change', function () {
            var file = this.files[0];
            var imagePreview = document.getElementById('imagePreview');

            if (file) {
                // Check file size (in megabytes)
                if (file.size > (5 * 1024 * 1024) && file.size <= (7 * 1024 * 1024)) {
                    alert('File size should be between 5 MB and 7 MB');
                    this.value = ''; // Clear the file input
                    imagePreview.innerHTML = ''; // Clear the preview
                    return;
                }

                var reader = new FileReader();

                reader.onload = function (e) {
                    var image = document.querySelector('.img-thumbnail');
                    image.setAttribute('src', e.target.result);
                };

                reader.readAsDataURL(file);
            } else {
                imagePreview.innerHTML = ''; // Clear the preview if no file is selected
            }
        });
    </script>

    <?php
    include "../../../../../component/form-footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
