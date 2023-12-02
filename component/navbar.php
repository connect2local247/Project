<div class="modal fade" id="logoImage" aria-hidden="true" aria-labelledby="logoImageLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
                <div class="modal-header border-0 fs-4">
                <i></i>
                <i class="fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close"></i>
                </div>
                <div class="modal-body">
                        <img src="/connect2local/asset/image/home/logo/connect2logo.jpg" style="width:100%;height:100%">
                </div>
          </div>
      </div>
</div>

<div class="modal fade" id="register-option" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
              <div class="modal-body">
                 <div class="row">
                     <div class="col-lg-4 col-6 g-3">
                         <div class="card">
                             <div class="card-body">
                                     <img src="/connect2local/asset/image/about/user/customer.png" style="width:100%" alt="">
                             </div>
                             <div class="card-footer text-center">
                                    <a href="/connect2local/user/customer/activities/register/form/basic-info.php" class="nav-link">Customer</a>
                             </div>
                         </div>
                     </div>

                     <div class="col-lg-4 col-6 g-3">
                        <div class="card">
                            <div class="card-body">
                                    <img src="/connect2local/asset/image/about/user/salesman.png" style="width:100%" alt="">
                            </div>
                            <div class="card-footer text-center">
                                    <a href="/connect2local/user/salesman/activities/register/form/basic-detail.php" class="nav-link">Salesman</a>
                            </div>
                        </div>
                     </div>


                    <div class="col-lg-4 col-6 offset-lg-0 offset-3 g-3">
                        <div class="card">
                            <div class="card-body">
                                    <img src="/connect2local/asset/image/about/user/admin.png" style="width:100%" alt="">
                            </div>
                            <div class="card-footer text-center">
                                    <a href="/connect2local/user/admin/activities/register/form/basic-detail.php" class="nav-link">Admin</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mt-3 d-flex justify-content-center align-items-center modal-footer">
                    <span style="font-size:14px;">Have you already registered ? <a href="/connect2local/component/login-selection.php" class="nav-link text-primary d-inline">Login</a></span>
                </div>
            </div>
          </div>
        </div>
      </div>
       <nav class="navbar text-bg-dark " id="navbar">
        <div class="container" >
            <div class="bg-white rounded-circle" data-bs-target="#logoImage" data-bs-toggle="modal">
                <img src="/connect2local/asset/image/home/logo/connect2local.png" style="height:80px;width:80px;">
            </div>

            <div class="d-lg-inline d-none">
                <ul class="nav">
                    <li class="nav-item"><a href="/connect2local/index.php" class="nav-link text-white">Home</a></li>
                    <li class="nav-item"><a href="/connect2local/pages/about/about.php" class="nav-link text-white">About</a></li>
                    <li class="nav-item"><a href="/connect2local/pages/contact/contact.php" class="nav-link text-white">Contact</a></li>
                    <li class="nav-item"><a href="/connect2local/pages/help/help.php" class="nav-link text-white">Help</a></li>
                    <li class="nav-item"><a href="/connect2local/pages/policy/privacy-policy.php" class="nav-link text-white">Privacy Policy</a></li>
                    <li class="nav-item"><a href="/connect2local/pages/policy/term-condition.php" class="nav-link text-white">Terms & Condition</a></li>
                </ul>
            </div>
            <div class="d-lg-inline d-none">
                <button id="btn-signup" class="btn bg-danger bg-gradient text-white py-2 rounded-pill d-lg-inline d-md-none d-none" data-bs-target ="#register-option" data-bs-toggle="modal" style="width:100px;">Register</button>
            </div>
            <div class="option text-white fs-5 d-flex align-items-center" style="gap:15px;height:inherit;">
                <i class="fa-solid fa-user"></i>
                <i class="fa-solid fa-bell"></i>
                    <i class="fa-solid fa-bars d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasStart" aria-controls="offcanvasStart"></i>
            </div>
        </div>
    </nav>
    <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasStart" aria-labelledby="Navigation">
        <div class="offcanvas-header">
          <i class="fa-solid fa-xmark text-white" data-bs-dismiss="offcanvas" aria-label="Close"></i>
        </div>
        <div class="offcanvas-body">
            <div class="profile-image d-flex justify-content-center align-items-center ps-4" style="width:100%;height:30%">
                <img src="/connect2local/asset/image/home/logo/connect2local.png" alt="" style="height:100%" class="rounded-circle bg-white">
            </div>

            <div class="menu-list mt-4">
                <ul class="d-flex flex-column" style="gap:15px;">
                    <li class="nav-item text-center"><a href="/connect2local/index.php" class="nav-link text-white">Home</a></li>
                    <li class="nav-item text-center"><a href="/connect2local/pages/about/about.php" class="nav-link text-white">About</a></li>
                    <li class="nav-item text-center"><a href="/connect2local/pages/contact/contact.php" class="nav-link text-white">Contact</a></li>
                    <li class="nav-item text-center"><a href="/connect2local/pages/help/help.html" class="nav-link text-white">Help</a></li>
                    <li class="nav-item text-center"><a href="/connect2local/pages/policy/privacy-policy.php" class="nav-link text-white">Privacy Policy</a></li>
                    <li class="nav-item text-center"><a href="/connect2local/pages/policy/term-condition.php" class="nav-link text-white">Terms & Condition</a></li>
                </ul>
            </div>
            <button id="btn-signup" class="text-white text-center bg-primary bg-gradient" style="position:absolute;left:0;bottom:0;border:.1px solid grey; width:100%;padding:8px 5px; margin-bottom:.7px;" data-bs-target ="#register-option" data-bs-toggle="modal">Register</button>
        </div>

        <?php
        session_start();

        require "./includes/delete_info.php";

        if(isset($_SESSION['greet-message'])){
            unset($_SESSION['greet-message']);
        }

        if(isset($_SESSION['registered'])){
        echo <<<EOD
                <script>
                    var btn = document.getElementById('btn-signup');
                    btn.innerHTML = "Logout";
                    btn.removeAttribute("data-bs-toggle");
                    btn.removeAttribute("data-bs-target");
                    btn.addEventListener('click', function() {
                        window.location.href = "/connect2local/user/customer/activities/logout/logout.php";
                    });
                </script>
        EOD;
            reset_session();
        } else{
            echo <<<EOD
                <script>
                    var btn = document.getElementById('btn-signup');
                    btn.innerHTML = "Register";
                    btn.setAttribute("data-bs-toggle","modal");
                    btn.setAttribute("data-bs-target","#register-option");
                </script>
            EOD;
        }


?>