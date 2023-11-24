<?php
        session_start();

        require "./includes/delete_info.php";

        if(isset($_SESSION['greet-message'])){
            unset($_SESSION['greet-message']);
        }

        if(isset($_SESSION['registered'])){
        echo <<<EOD
                <script>
                    btn = document.getElementById('btn-signup');
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
                    btn = document.getElementById('btn-signup');
                    btn.innerHTML = "Register";
                    btn.setAttribute("data-bs-toggle","modal");
                    btn.setAttribute("data-bs-target","#register-option");
                </script>
            EOD;
        }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect2Local - Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">
</head>
<body>
    
    <header>
        <nav>
        <?php
            include "./component/navbar.php";
        ?>
        </nav>
        <section class="image-slider bg-primary bg-gradient" style="height:70vh;width:100%">
            <?php
                include "./component/slider.php";
            ?>
        </section>
    </header>

    <section class="intro-content mt-3">
        <div class="container">
            <div class="card p-3 m-2">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="/connect2local/asset/image/home/content/intro-image1.jpeg" height="300" class="w-100 rounded-2"  alt="">
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <p style="text-align:justify" class="p-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam voluptatem facere deleniti architecto fuga veniam omnis quaerat ullam veritatis numquam recusandae, ea quibusdam dicta. Saepe aperiam est ducimus soluta totam, ipsum ea. Debitis incidunt, sit eius quisquam facere qui sapiente iusto cumque vel mollitia modi nemo provident praesentium veritatis quas saepe similique distinctio voluptatibus labore iste inventore veniam. Quod, recusandae? Quo nisi ipsum incidunt modi quae animi voluptatem, eius tenetur? Sunt, sapiente! Rem, ut velit culpa, temporibus repellat nam enim inventore nisi aliquid sed saepe in laboriosam quia tenetur non explicabo corporis eius quis veritatis omnis aspernatur, excepturi eaque dolores!</p>
                    </div>
                </div>
            </div>

            <div class="card p-3 m-2">
                <div class="row d-flex-md d-flex flex-lg-row flex-sm-column flex-md-column-reverse flex-column-reverse">
                    <div class="col-lg-6 d-flex align-items-center">
                        <p style="text-align:justify" class="p-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam voluptatem facere deleniti architecto fuga veniam omnis quaerat ullam veritatis numquam recusandae, ea quibusdam dicta. Saepe aperiam est ducimus soluta totam, ipsum ea. Debitis incidunt, sit eius quisquam facere qui sapiente iusto cumque vel mollitia modi nemo provident praesentium veritatis quas saepe similique distinctio voluptatibus labore iste inventore veniam. Quod, recusandae? Quo nisi ipsum incidunt modi quae animi voluptatem, eius tenetur? Sunt, sapiente! Rem, ut velit culpa, temporibus repellat nam enim inventore nisi aliquid sed saepe in laboriosam quia tenetur non explicabo corporis eius quis veritatis omnis aspernatur, excepturi eaque dolores!</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="/connect2local/asset/image/home/content/intro-image2.jpeg" height="300" class="w-100 rounded-2"  alt="">
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

    <section class="intro-video-content mt-5">
        <div class="container d-flex border p-4">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <iframe class="rounded-3" style="width:100%;height:100%" src="https://www.youtube.com/embed/CO7voe1wmhA?si=s_tXODBoCTNNv2XC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 col-12">
                    <h3>Introduction of Our System</h3>
                    <p style="text-align:justify" class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi sunt facilis id, ipsa perferendis fugiat asperiores. Porro accusamus consequuntur quaerat vitae blanditiis accusantium provident molestiae tempore dolores fugiat, quis tenetur quam atque sapiente aperiam similique iusto harum nisi perferendis voluptatem magnam? Modi dolore nemo placeat deserunt accusantium optio dolorum, deleniti excepturi omnis molestias alias, quod ut laborum ex consequatur sint, sit quae magnam debitis! Sit odit est sed esse sint ipsa libero, voluptate officiis voluptatibus maxime quia. Praesentium nemo ducimus, quas corrupti culpa hic. Tenetur excepturi ex aliquid, voluptas praesentium laborum? Non, ducimus mollitia laudantium facilis sunt accusantium esse repellendus!</p>
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

                            <p class="w-75" style="text-align:justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus eius, consectetur harum omnis aliquam quod laborum delectus molestiae repudiandae nostrum temporibus, tempora, numquam dolorum facere?</p>
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