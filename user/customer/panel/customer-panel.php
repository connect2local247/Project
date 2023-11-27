<?php
    session_start();

    require "../../../includes/security_function.php";
    require "../../../includes/db_connection.php";
    require "../../../includes/time_elapse.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">
</head>
<body style="background-color:powderblue">
        
        <div class="modal fade" id="notificationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content text-bg-white">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="notificationModalLabel">Notification</h1>
                        <i class="fa-solid fa-xmark fs-5" data-bs-dismiss="modal"></i>
                    </div>
                    <div class="modal-body">
                        <?php
                            $currentTime = "2023-11-27 9:30:00";
                            echo "<div class='d-flex text-bg-white shadow bg-body-tertiary border p-2 rounded position-relative'>
                                <div class='ms-2 d-flex flex-column' style='gap:4px'> 
                                    <i id='userId' style='font-size:14px; font-weight:bold'><img src='/connect2local/asset/image/about/user/admin.png' height='45' width='45' class='rounded-circle'> bhavesh_1724</i>
                                    <p id='notification-content' style='text-align:justify'>congratulation you have succesfully registerd on our site free for to use our platform i hope our platform is useful for you and you get what you want. </p>
                                </div>     
                                <div id='notification-time' class='position-absolute bottom-0 end-0 p-2'>
                                    ".time_elapsed_string($currentTime)."
                                </div>                      
                            </div>";
                        ?>
                    </div>
                </div>
            </div>
        </div>

    <header class="position-relative">
        <nav class="navbar text-bg-dark" style="height:70px">
            <div class="container">
                    <div class="menu-icon d-flex fs-4" style="gap:10px;" >
                        <i class="fa-solid fa-bars d-lg-none d-md-inline d-inline" id="sidebarToggle"></i>
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <div class="logo">
                        <h1 class="h3"><b style="color:yellow">Connect</b><b style="color:rgb(255, 157, 157);font-size:2.2rem">2</b><b style="color:paleturquoise">Local</b></h1>
                    </div>
                    <div class="menu-icon d-flex fs-4" style="gap:10px;">
                        <i class="fa-solid fa-user"></i>
                        <i class="fa-solid fa-bell" data-bs-target="#notificationModal" data-bs-toggle="modal"></i>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
            </div>
        </nav>
        <div class="vertical-bar text-bg-primary bg-gradient col-lg-3 col-md-5 col-8 p-3 border rounded d-lg-block d-md-none d-none position-absolute" style="height: calc(100vh - 70px); overflow-x:hidden; z-index:10" id="sidebar">
            <div class="profile-container d-flex flex-column justify-content-center align-items-center">
                <img src="/connect2local/asset/image/about/user/admin-img.png" alt="" style="height:150px;width:150px">
                <span class="fs-4 fw-bold">Bhavesh Parmar</span>
                <span style="font-size:13px;font-style:italic;letter-spacing: 2px;">17240001</span>
                <a href="#" class="nav-link text-warning">View Profile</a>
            </div>
            <div class="menu-container d-flex justify-content-center mt-4">
                <ul class="list-unstyled text-center flex-column d-flex" style="gap:15px">
                    <li><a href="#" class="nav-link">Dashboard</a></li>
                    <li><a href="#" class="nav-link">Account</a></li>
                    <li><a href="#" class="nav-link">Order</a></li>
                    <li><a href="#" class="nav-link">Payment</a></li>
                    <li><a href="#" class="nav-link">Bill</a></li>
                    <li><a href="#" class="nav-link">Setting</a></li>
                    <li><a href="#" class="nav-link">Report</a></li>
                    <li><a href="#" class="nav-link">Feedback</a></li>
                    <li><a href="#" class="nav-link">Policy</a></li>
                    <li><a href="#" class="nav-link">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>
        <!-- <div class="container-fluid" style="z-index:0">
            
        </div> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-0">

                </div>
                <div class="col-lg-8 col-md-12 col-12  bg-warning">
                <form action="" class="m-5 col-lg-12 col-md-12 d-flex justify-content-lg-center justify-content-md-start justify-content-center">
                <div class="mt-4 col-10 d-flex align-items-center position-relative" style="z-index:0">
                    <input type="search" name="searchbar" id="searchbar" class="form-control rounded ps-3 rounded-pill" style="height:50px;width:98%;" placeholder="Search here...">
                    <i class="fa-solid fa-magnifying-glass position-absolute end-0 me-1 text-bg-dark p-3 rounded-end-pill"></i>
                </div>
            </form>
                </div>
            </div>
        </div>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('d-none');
            document.getElementById('sidebar').classList.toggle('d-md-none');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>