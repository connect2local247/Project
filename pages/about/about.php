<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect2Local - About Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/connect2local/asset/css/style.css">

    <style>
        section.intro-content{
            background:url('/connect2local/asset/image/about/background/about-bg-intro.jpeg') no-repeat;
            background-size:100% 100%;
        }
    </style>
</head>
<body>
    
    <header>
            <?php
                include "../../component/nav.php";
            ?> 
    </header>
    <section class="intro-content" >
        <div class="container d-flex justify-content-center align-items-center text-white" style="width:100%;height:calc(100vh - 80px);s">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-10">
                    <h1>About Us</h1>
                    <p style="text-align:justify;font-size:17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni exercitationem libero praesentium minima aspernatur nulla veritatis atque illo veniam repellendus.</p>
                </div>
            </div>
        </div>
    </section>
    </section class="about-story">
                <div class="container d-flex justify-content-center w-100 p-3" >
                    <fieldset class="border p-3">
                        <legend class="h2 text-center fw-bold mb-4">Project Story</legend>
                        <p style="text-align:justify;padding:10px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut iste blanditiis ipsam laboriosam architecto inventore, doloremque, nam repellat voluptatem recusandae minus aperiam laudantium expedita tempore quae mollitia voluptatibus provident natus aliquam est! Nihil, cum sed quaerat autem nisi iste magni quidem quia, unde, voluptates dolor vitae earum impedit ipsam! Magnam eveniet earum molestias, vero ut dolores facere maxime. Odio iure sapiente optio ad adipisci ipsam quod aut doloremque. Delectus maxime distinctio tenetur sed natus odio. Sunt nemo quia veniam voluptatum sed quas accusantium inventore error iste ab dolore nobis quam porro facere rem ut maxime quos, blanditiis in. Fugiat quaerat cupiditate architecto quos, ullam similique nihil quod, animi esse aliquid labore. Dolorum veniam culpa ex nulla? Nobis optio quos architecto vel itaque voluptate placeat natus officiis asperiores dolor sequi inventore omnis reiciendis unde incidunt ea obcaecati minus iusto, dignissimos eum praesentium. Numquam quidem sint eius consequatur, quam velit at reprehenderit?</p>
                    </fieldset>
                </div>
    <section>
    
    <section class="team-member">
            <div class="container">
                <fieldset class="border text-center p-3">
                    <h1 class="h2 fw-bold text-center my-4">Team Member</h1>
                    <p class="w-75 m-auto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia est suscipit quis corporis repudiandae officiis, commodi sint aut? Facilis explicabo neque optio tenetur. Id voluptates iusto voluptatum, autem labore ducimus!</p>
                    <div class="row">
                        <div class="offset-lg-1 col-lg-4 col-md-5 offset-md-1 offset-1 col-10 g-3">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-center p-3">
                                        <img src="/connect2local/asset/image/about/team member/Bhavesh.png" alt="" style="width:90%;height:250px;">
                                    </div>
                                    <div class="card-body d-flex flex-column text-center" style="gap:5px;">
                                        <div class="content d-flex flex-column">
                                            <h1 class="h5 fw-bold text-center">Bhavesh Parmar</h1>
                                        </div>
                                        <div class="content">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusantium similique veniam praesentium beatae. Voluptatibus!</p>
                                        </div>
                                        <ul class="list-unstyled">
                                            <li class="nav-item"></li>
                                        </ul>
                                    </div>
                                </div>
                        </div>
    
                        <div class="offset-lg-2 col-lg-4  col-md-5 offset-1 col-10 g-3">
                            <div class="card">
                                <div class="card-header d-flex justify-content-center p-3">
                                    <img src="/connect2local/asset/image/about/team member/Bhavesh.png" alt="" style="width:90%;height:250px;">
                                </div>
                                <div class="card-body d-flex flex-column text-center" style="gap:5px;">
                                    <div class="content d-flex flex-column">
                                        <h1 class="h5 fw-bold text-center">Het Nayak</h1>
                                    </div>
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusantium similique veniam praesentium beatae. Voluptatibus!</p>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li class="nav-item"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                
            </div>
    </section>

    <section class="about-user mt-3">
        <div class="container">
            <fieldset class="border p-3">
                <legend class="text-center py-3 h2 fw-bold">Our User</legend>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-6 g-3">
                        <div class="card">
                            <div class="card-body d-flex justify-content-center p-2">
                                <img src="/connect2local/asset/image/about/user/customer-img.png" alt="" style="width:90%;height:250px">
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                    Customer
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 g-3">
                        <div class="card">
                            <div class="card-body d-flex justify-content-center p-2">
                                <img src="/connect2local/asset/image/about/user/salesman-img.png" alt="" style="width:90%;height:250px">
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                    Salesman
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-10 offset-lg-0 offset-md-0 offset-1 g-3">
                        <div class="card">
                            <div class="card-body d-flex justify-content-center p-2">
                                <img src="/connect2local/asset/image/about/user/admin-img.png" alt="" style="width:90%;height:250px">
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                    Admin
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <p style="text-align:justify;padding:10px;width:90%;margin:auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, deserunt. Nihil beatae quos aut consequuntur hic reiciendis ex, sit harum blanditiis expedita nam debitis tenetur, necessitatibus animi. Ad, sapiente! Obcaecati sapiente officia aliquid placeat exercitationem iusto ipsum rem est iure. Quisquam aperiam deserunt dignissimos numquam doloremque commodi voluptatibus corporis natus? Repellat deserunt quae maiores id distinctio qui blanditiis amet porro provident facere itaque error numquam ducimus eum delectus minima eos sed, odit magnam praesentium, voluptas sit cum hic! Vel maxime, cum dolorem animi repellendus dolores assumenda reprehenderit amet dolore minima impedit rem eaque, necessitatibus harum aliquam! Amet inventore nemo neque.</p>
                </div>

                <div class="row">
                        <div class="col-11 m-auto">
                            <span class="fw-bold fs-5">
                                Customer
                            </span>
                            <p style="text-align:justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, error. Natus facilis unde ullam eos quidem cumque aperiam deserunt non impedit inventore, omnis consectetur molestiae, eveniet quod libero, aut voluptate.</p>
                        </div>

                        <div class="col-11 m-auto">
                            <span class="fw-bold fs-5">
                                Salesman
                            </span>
                            <p style="text-align:justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, error. Natus facilis unde ullam eos quidem cumque aperiam deserunt non impedit inventore, omnis consectetur molestiae, eveniet quod libero, aut voluptate.</p>
                        </div>

                        <div class="col-11 m-auto">
                            <span class="fw-bold fs-5">
                                Admin
                            </span>
                            <p style="text-align:justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, error. Natus facilis unde ullam eos quidem cumque aperiam deserunt non impedit inventore, omnis consectetur molestiae, eveniet quod libero, aut voluptate.</p>
                        </div>

                </div>
            </fieldset>
        </div>
    </section>

        <div class="container mt-3">
            <fieldset class="border p-3">
                <legend class="fs-2 fw-bold text-center">Customer's Benefit</legend>
                <p class="m-auto p-3 col-lg-8 col-md-9 col-12" style="text-align:justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, beatae? Adipisci facere excepturi cupiditate ratione facilis repellendus ipsum id fugiat!</p>

                <div class="card p-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 g-2">
                            <img src="https://d3nn873nee648n.cloudfront.net/900x600/17816/15-SM789686.jpg" style="width:100%; height:300px;border-radius:10px">
                        </div>
                        <div class="col-lg-6 col-md-6 g-2 fs-4 d-flex align-items-center px-3">
                           <ul class="list-unstyled">
                                <li class="nav-item"><i class="fa-solid fa-check px-2 fw-bold"></i> Online Transaction</li>
                                <li class="nav-item"><i class="fa-solid fa-check px-2 fw-bold"></i> Faster Delivery</li>
                                <li class="nav-item"><i class="fa-solid fa-check px-2 fw-bold"></i> Nearby Search</li>
                                <li class="nav-item"><i class="fa-solid fa-check px-2 fw-bold"></i> Reduced Time</li>
                                <li class="nav-item"><i class="fa-solid fa-check px-2 fw-bold"></i> Cost Effective Product</li>
                                <li class="nav-item"><i class="fa-solid fa-check px-2 fw-bold"></i> Faster Delivery</li>
                                <li class="nav-item"><i class="fa-solid fa-check px-2 fw-bold"></i> Reduced Time</li>
                           </ul>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="container mt-3">
            <fieldset class="border p-3">
                <legend class="fs-2 fw-bold text-center">Salesman's Benefit</legend>
                <p class="m-auto p-3 col-lg-8 col-md-9 col-12" style="text-align:justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, beatae? Adipisci facere excepturi cupiditate ratione facilis repellendus ipsum id fugiat!</p>

                <div class="card p-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 g-2">
                            <img src="https://d3nn873nee648n.cloudfront.net/1200x1800-new/16332/SM690720.jpg" style="width:100%; height:300px;border-radius:10px">
                        </div>
                        <div class="col-lg-6 col-md-6 g-2 fs-4 d-flex align-items-center px-3">
                           <ul class="list-unstyled">
                                <li class="nav-item"><i class="fa-solid fa-check px-2 fw-bold"></i> Online Transaction</li>
                                <li class="nav-item"><i class="fa-solid fa-check px-2 fw-bold"></i> Faster Delivery</li>
                                <li class="nav-item"><i class="fa-solid fa-check px-2 fw-bold"></i> Nearby Search</li>
                                <li class="nav-item"><i class="fa-solid fa-check px-2 fw-bold"></i> Reduced Time</li>
                                <li class="nav-item"><i class="fa-solid fa-check px-2 fw-bold"></i> Cost Effective Product</li>
                                <li class="nav-item"><i class="fa-solid fa-check px-2 fw-bold"></i> Faster Delivery</li>
                                <li class="nav-item"><i class="fa-solid fa-check px-2 fw-bold"></i> Reduced Time</li>
                           </ul>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    
        <div class="container mt-3">
            <fieldset class="border rounded-2">
                <h1 class="h2 fw-bold text-center mt-3">Admin's Role</h1>
                <div class="row d-flex flex-lg-row flex-md-row flex-column-reverse">
                    <div class="col-lg-6 col-md-6 d-flex align-items-center">
                        <p class="m-auto p-3" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos iusto repellat inventore est impedit pariatur, vero error quae veniam possimus ipsum explicabo. Quas voluptatibus libero, veniam tenetur accusamus atque ullam dolores itaque optio odit unde esse mollitia labore similique eveniet autem nihil reprehenderit veritatis magni aut aliquam in corporis voluptatum!</p>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex justify-content-center">
                        <img src="/connect2local/asset/image/about/user/admin-img2.png" alt=""  style="width:60%;height:250px;">
                    </div>
                </div>
                <div class="mt-4">
                    <p style="text-align: justify;" class="col-10 m-auto p-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo ad, aliquid quidem quae vitae sunt deserunt exercitationem quos labore mollitia nihil esse perspiciatis itaque error eum expedita eveniet fuga rerum consequatur est ipsam nostrum hic sit. Excepturi ex temporibus commodi.</p>

                    <div class="row p-3">
                        <div class="col-lg-4 col-md-6 col-12 g-2 d-flex justify-content-center align-items-center">
                            <div class="card">
                                <div class="card-body">
                                    <img src="/connect2local/asset/image/about/user/admin-role1.png" alt="" style="width:90%;height:250px;border-radius:10px">
                                </div>
                                <div class="card-footer text-center">
                                    Monitoring System
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 g-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="/connect2local/asset/image/about/user/admin-role2.png" alt="" style="width:90%;height:250px;border-radius:10px">
                                </div>
                                <div class="card-footer text-center">
                                    Provide Resource
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 g-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="/connect2local/asset/image/about/user/admin-role3.png" alt="" style="width:90%;height:250px;border-radius:10px">
                                </div>
                                <div class="card-footer text-center">
                                    Generating Report
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 g-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="/connect2local/asset/image/about/user/admin-role4.png" alt="" style="width:90%;height:250px;border-radius:10px">
                                </div>
                                <div class="card-footer text-center">
                                    Managing Area
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 g-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="/connect2local/asset/image/about/user/admin-role5.png" alt="" style="width:90%;height:250px;border-radius:10px">
                                </div>
                                <div class="card-footer text-center">
                                    Security & Authentication
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 g-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="/connect2local/asset/image/about/user/admin-role6.png" alt="" style="width:90%;height:250px;border-radius:10px">
                                </div>
                                <div class="card-footer text-center">
                                    Customer Support
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </fieldset>

        </div>
        <section class="subscription-plan mt-3">
                <div class="container">
                    <fieldset class="border p-3">
                        <legend class="text-center my-4 h2 fw-bold">Subscription Plan</legend>
                        <div class="mb-3">
                                <?php
                                    include "../../component/subscription.php";
                                ?>
                        </div>
                        <div class="row mt-5">
                            <div class="col-11 m-auto">
                                <span class="fw-bold fs-5">
                                   Monthly
                                </span>
                                <p style="text-align:justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, error. Natus facilis unde ullam eos quidem cumque aperiam deserunt non impedit inventore, omnis consectetur molestiae, eveniet quod libero, aut voluptate.</p>
                                <ul class="list-unstyled fs-5 px-4">
                                    <li><i class="fa-solid fa-check"></i> Personal Domain</li>
                                <li><i class="fa-solid fa-check"></i> Online Payment Facility</li>
                                <li><i class="fa-solid fa-check"></i> Inventory</li>
                                <li><i class="fa-solid fa-check"></i> 2 month free on first subscription</li>
                                </ul>
                            </div>
    
                            <div class="col-11 m-auto">
                                <span class="fw-bold fs-5">
                                    Yearly
                                </span>
                                <p style="text-align:justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, error. Natus facilis unde ullam eos quidem cumque aperiam deserunt non impedit inventore, omnis consectetur molestiae, eveniet quod libero, aut voluptate.</p>
    
    
                                <ul class="list-unstyled fs-5 px-4">
                                    <li><i class="fa-solid fa-check"></i> Personal Domain</li>
                                    <li><i class="fa-solid fa-check"></i> Online Payment Facility</li>
                                    <li><i class="fa-solid fa-check"></i> Inventory</li>
                                    <li><i class="fa-solid fa-check"></i> 1 month free on every subscription</li>
                                </ul>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </section>

            <section class="youtube-channel mt-3">
                <div class="container">
                    <fieldset class="border p-3">
                        <legend class="text-center h2 fw-bold">Youtube Channel</legend>
                        <div class="row p-3">
                            <div class="col-lg-6 col-12 g-2">
                                 <iframe class="rounded-3" style="width:100%;height:300px" src="https://www.youtube.com/embed/CO7voe1wmhA?si=s_tXODBoCTNNv2XC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-6 col-12 g-2">
                                <p style="text-align: justify;" class="m-auto col-lg-8 col-11">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero provident molestias autem at rerum, quis magnam beatae nobis ad vel delectus aspernatur? Eligendi, veritatis ab! Id laboriosam laborum blanditiis quidem eos dolorum illum nostrum libero, soluta optio iure facere voluptas cum error earum? Quis laboriosam vitae aspernatur? Esse, repudiandae inventore?
                                </p>
                                <div class="mt-3 d-flex justify-content-center">
                                    <button class="btn border text-bg-danger bg-gradient p-2 d-flex align-items-center" style="gap:7px"><i class="fa-brands fa-youtube fs-4"></i> Subscribe on Youtube</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </section>

            <section class="contact-form mt-4">
                <div class="container">
                    <form action="#" class="p-2">
                        <fieldset class="border rounded-2 p-3">
                            <legend class="text-center fw-bold fs-2">Contact Us</legend>
                                <div class="col-lg-8 col-11 m-auto">
                                    <p style="text-align:justify;">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima odit ipsa facere eligendi maxime exercitationem recusandae rerum aut inventore iusto?
                                    </p>
                                    <div class="col-lg-12">
                                            <ul class="list-unstyled">
                                                <li class="nav-item text-secondary px-2" style="font-size:15px"><i class="fa-solid fa-phone"></i> +91 9723884857</li>
                                                <li class="nav-item text-secondary px-2" style="font-size:15px"><i class="fa-solid fa-envelope"></i> localbusiness@gmail.com</li>
                                            </ul>
                                    </div>
                                </div>
                            <div class="mt-2">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" name="fname" id="fname" placeholder="First Name" class="form-control" required>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="lname" id="lname" placeholder="Last Name" class="form-control" required>
                                    </div>
                                </div>
                            </div>
            
                            <div class="mt-2">
                                <div class="row">
                                        <div class="col-6">
                                            <input type="number" name="age" id="age" placeholder="Age" class="form-control" required>
                                        </div>
                                        <div class="col-6">
                                            <input type="email" name="email" id="email" placeholder="Email Address" class="form-control" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="mt-2">
                                <textarea name="message" id="" cols="30" rows="10" placeholder="Give us your feedback.." class="form-control" style="height:20vh" required></textarea>
                            </div>
                            <div class="mt-4 d-flex justify-content-center">
                                <input type="submit" value="Submit" class="btn px-5 py-2 text-bg-primary">
                            </div>
            
                            <div class="py-4">
                                <ul class="d-flex list-unstyled justify-content-center" style="gap:15px">
                                    <li class="nav-item fs-3 text-secondary"><a href="#" class="nav-link"><i class="fa-solid fa-envelope"></i></a></li>
                                    <li class="nav-item fs-3 text-secondary"><a href="#" class="nav-link"><i class="fa-solid fa-phone"></i></a></li>
                                    <li class="nav-item fs-3 text-secondary"><a href="#" class="nav-link"><i class="fa-brands fa-telegram"></i></a></li>
                                    <li class="nav-item fs-3 text-secondary"><a href="#" class="nav-link"><i class="fa-brands fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </fieldset>
                    </form>
                </div>
    
            </section>
           
            <?php
                    include "../../component/footer.php";
            ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>