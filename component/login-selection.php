<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect2Local - Login As</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">

    <style>
        img{
            width:95%;
            height:200px;
        }
    </style>
</head>
<body>
        <div class="container d-flex justify-content-center align-items-center" style="height:100vh">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-6 g-2">
                            <div class="card">
                                <div class="card-body">
                                    <img src="/connect2local/asset/image/about/user/customer.png" alt="Customer Image">
                                </div>
                                <div class="card-footer text-center">
                                     <a href="/connect2local/user/customer/activities/login/form/login.php" class="nav-link">Customer</a>
                                </div>
                            </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-6 g-2">
                        <div class="card">
                            <div class="card-body">
                                <img src="/connect2local/asset/image/about/user/salesman.png" alt="Salesman Image">
                            </div>
                            <div class="card-footer text-center">
                                 <a href="/connect2local/user/salesman/activities/login/form/login.php" class="nav-link">Salesman</a>
                            </div>
                        </div>
                </div>

                <div class="col-lg-4 offset-lg-0 offset-3 col-md-6 col-6 g-2">
                    <div class="card">
                        <div class="card-body">
                            <img src="/connect2local/asset/image/about/user/admin.png" alt="Admin Image">
                        </div>
                        <div class="card-footer text-center">
                             <a href="/connect2local/user/admin/activities/login/form/login.php" class="nav-link">Admin</a>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>

        <?php
            include "../component/form-footer.php";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>