<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/local business/css/style.css">
</head>
<body>
        
    <header>
        <nav class="navbar text-bg-dark" style="height:70px">
            <div class="container">
                    <div class="menu-icon d-flex fs-4" style="gap:10px;" >
                        <i class="fa-solid fa-bars d-lg-none d-md-none d-inline" id="sidebarToggle"></i>
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <div class="logo">
                        <h1 class="h3"><b style="color:yellow">Connect</b><b style="color:rgb(255, 157, 157);font-size:2.2rem">2</b><b style="color:paleturquoise">Local</b></h1>
                    </div>
                    <div class="menu-icon d-flex fs-4" style="gap:10px;">
                        <i class="fa-solid fa-user"></i>
                        <i class="fa-solid fa-bell"></i>
                    </div>
            </div>
        </nav>
        <div class="vertical-bar text-bg-white bg-gradient col-lg-3 col-md-5 p-3 border rounded d-lg-block d-md-block d-none" style="height: calc(100vh - 70px); overflow-x:hidden;" id="sidebar">
            <div class="profile-container d-flex flex-column justify-content-center align-items-center">
                <img src="/local business/IMAGE/USER/admin-img.png" alt="" style="height:150px;width:150px">
                <span class="fs-4 fw-bold">Bhavesh Parmar</span>
                <span style="font-size:13px;font-style:italic;letter-spacing: 2px;">17240001</span>
                <a href="#" class="nav-link text-primary">View Profile</a>
            </div>
            <div class="menu-container d-flex justify-content-center mt-4">
                <ul class="list-unstyled text-center flex-column d-flex" style="gap:15px">
                    <li><a href="#" class="nav-link">Dashboard</a></li>
                    <li><a href="#" class="nav-link">Account</a></li>
                    <li><a href="#" class="nav-link">Order</a></li>
                    <li><a href="#" class="nav-link">Payment</a></li>
                    <li><a href="#" class="nav-link">Inventory</a></li>
                    <li><a href="#" class="nav-link">Subscription</a></li>
                    <li><a href="#" class="nav-link">Setting</a></li>
                    <li><a href="#" class="nav-link">Report</a></li>
                    <li><a href="#" class="nav-link">Feedback</a></li>
                    <li><a href="#" class="nav-link">Policy</a></li>
                    <li><a href="#" class="nav-link">Logout</a></li>
                </ul>
            </div>
        </div>

    </header>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('d-none');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>