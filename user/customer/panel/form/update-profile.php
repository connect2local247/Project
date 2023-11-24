<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">
</head>
<body>
    <div class="container">
        <form action="" class="d-flex justify-content-center align-items-center" style="height:90vh">
            <fieldset class="border p-3 rounded" id="form-fieldset">
                <legend class="text-center fw-bold fs-3 mb-3">Edit Profile</legend>
                <div class="mt-5 d-flex flex-column justify-content-center align-items-center">
                    <div class="position-relative">
                        <img src="/connect2local/asset/image/about/user/admin-img.png" alt="" height="200" width="200" class="border p-3 rounded-3">
                        <i class="fas fa-edit position-absolute bottom-0 end-0 fs-5 p-1 text-secondary"></i>
                    </div>
                    <span style="font-size: 14px;" class="mt-1"><i>17240001</i></span>
                </div>

                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name " value="" required>
                        </div>

                        <div class="col-6">
                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" value="" required>
                        </div>
                    </div>
                </div>

                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="date" name="birth-date" class="form-control" id="birth-date" value="" required>
                        </div>
    
                        <div class="col-6">
                            <select name="gender" id="gender" class="form-select" style="color:grey">
                                <option value=""  disabled selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mt-4 d-flex justify-content-center">
                    <input type="submit" value="Update" class="btn border p-3 px-5 text-bg-primary bg-gradient">
                </div>
            </fieldset>
        </form>
    </div>

    <?php
        include "../../../../component/form-footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>