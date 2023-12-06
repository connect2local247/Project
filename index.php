<?php
        session_start();

        // require "./includes/delete_info.php";

        // if(isset($_SESSION['greet-message'])){
        //     unset($_SESSION['greet-message']);
        // }

        // if(isset($_SESSION['registered'])){
        // echo <<<EOD
        //         <script>
        //             btn = document.getElementById('btn-signup');
        //             btn.innerHTML = "Logout";
        //             btn.removeAttribute("data-bs-toggle");
        //             btn.removeAttribute("data-bs-target");
        //             btn.addEventListener('click', function() {
        //                 window.location.href = "/connect2local/user/customer/activities/logout/logout.php";
        //             });
        //         </script>
        // EOD;
        //     reset_session();
        // } else{
        //     echo <<<EOD
        //         <script>
        //             btn = document.getElementById('btn-signup');
        //             btn.innerHTML = "Register";
        //             btn.setAttribute("data-bs-toggle","modal");
        //             btn.setAttribute("data-bs-target","#register-option");
        //         </script>
        //     EOD;
        // }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect2Local - Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <!-- <style>
        #body{
            background-image:linear-gradient(royalblue,powderblue) !important;
            background-size:100% 100%;
        } 
    </style> -->
</head>
<body id="body">
    
    <header>
        <nav>
            <?php
                include "./component/navbar.php";
            ?>
        </nav>
    </header>
    <section class="image-slider bg-primary bg-gradient" style="height:70vh;width:100%">
        <?php
            include "./component/slider.php";
        ?>
    </section>

    <section class="intro-content mt-3">
        <div class="container">
            <div class="card p-3 m-2 border border-dark">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="/connect2local/asset/image/home/content/connect2local.png" height="300" class="w-100 rounded-2 border border-dark"  alt="">
                    </div>
                    <div class="col-lg-6 d-flex align-items-start flex-column">
                        <h3 class="ps-3 fw-bold">Introduction to Connect2Local</h3>
                        <p style="text-align:justify" class="p-3">Welcome to Connect2Local, an innovative Business Directory System designed to seamlessly connect local businesses with customers in specific regions. Aptly named, this practical solution serves as a comprehensive directory and payment tool. With Connect2Local, users can effortlessly discover and engage with nearby businesses, fostering a stronger local economy. The platform simplifies the search for services and products, enhancing the connection between businesses and their community. Through its user-friendly interface and integrated payment features, Connect2Local streamlines the entire process, making it a go-to solution for both businesses and customers seeking a convenient and efficient way to connect and transact locally.</p>
                    </div>
                </div>
            </div>

            <div class="card p-3 m-2 border border-dark">
                <div class="row d-flex-md d-flex flex-lg-row flex-sm-column flex-md-column-reverse flex-column-reverse">
                    <div class="col-lg-6 d-flex align-items-start flex-column">
                        <h3 class="ps-3 fw-bold">Feature of Connect2Local</h3>
                        <p style="text-align:justify" class="p-3">In this segment, we highlight the user-friendly features that make Connect2Local an indispensable tool for both businesses and customers. From intuitive search functionalities to seamless payment options, Connect2Local ensures a smooth and efficient experience. The accompanying images illustrate the platform in action, offering a visual guide to the features discussed. Join us as we navigate through the elements that make Connect2Local the go-to solution for connecting businesses and customers in local communities.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="/connect2local/asset/image/home/content/intro-image2.jpeg" height="300" class="w-100 rounded-2 border border-dark"  alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-service my-3 p-2">
        <div class="container border rounded-2 p-3">
            <h1 class="text-center">Our Services</h1>
             <?php
                include "./component/home-service-content.php";
             ?>
        </div>
    </section>

    <section class="intro-video-content mt-5 p-1">
        <div class="container d-flex border p-3 bg-white rounded border border-secondary">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <iframe class="rounded-3" style="width:100%;height:100%" src="https://www.youtube.com/embed/CO7voe1wmhA?si=s_tXODBoCTNNv2XC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 col-12">
                    <h3>Introduction of Our Youtube Channel</h3>
                    <p style="text-align:justify" class="p-2">Welcome to the Connect2Local YouTube Channel! Explore our innovative Business Directory System connecting local businesses with customers in specific regions. Whether you're a business owner or customer, we've got you covered! Join us for step-by-step tutorials, starting with how to register and log in. Discover the powerful features that make Connect2Local a game-changer for local economies. Subscribe now for expert guidance, project insights, and practical tips to make the most of Connect2Local. Let's build stronger local connections together.</p>

                    <div class="mt-3 d-flex justify-content-center">
                        <button class="btn border text-bg-danger bg-gradient p-2 d-flex align-items-center" style="gap:7px"><i class="fa-brands fa-youtube fs-4"></i> Subscribe on Youtube</button>
                     </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="subscription-plan">
            <?php
                include "./component/subscription.php";
            ?>
    </section>

    <section class="contact-container mt-5">
            <div class="container">
                <form action="">
                    <fieldset class="border rounded-1 p-3">
                        <div class="d-flex flex-column align-items-center">
                            <legend class="text-center fw-bold fs-2">
                                Contact Us
                            </legend>

                            <p class="w-75" style="text-align:justify">Have a question or feedback? Use our quick and easy contact form to reach us! Just provide your name, email, and message, and we'll respond promptly. Your thoughts matter to us</p>
                        </div>

                        <div class="mt-2">
                            <input type="email" class="form-control" placeholder="Your Email Address" required>
                        </div>
                        <div class="mt-2">
                            <textarea name="message" id="txt-message" cols="30" rows="10" class="form-control rounded" placeholder="Write your message here .."></textarea>
                        </div>
                        <div class="mt-2 d-flex justify-content-center">
                            <input type="submit" value="Send" class="bg-warning btn px-5 py-2">
                        </div>
                    </fieldset>
                </form>
            </div>
    </section>
        <?php
                include "./component/footer.php";
        ?>

                
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>