<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/local business/css/style.css">
</head>
<body>

    <header>
        <?php
                include "../../component/navbar.php";
        ?>
    </header>
    <div class="container p-3">
        <form action="#" class="d-flex justify-content-center align-items-center" style="height:90vh;width:100%">
            <fieldset class="border rounded-2 p-3" id="form-fieldset">
                <legend class="text-center fw-bold fs-2">Contact Us</legend>

                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" name="fname" id="fname" placeholder="First Name" class="form-control">
                        </div>
                        <div class="col-6">
                            <input type="text" name="lname" id="lname" placeholder="Last Name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <input type="email" name="email" id="email" placeholder="Your Email Address" class="form-control" required>
                </div>

                <div class="mt-2">
                    <textarea name="message" id="" cols="30" rows="10" placeholder="write your message here..." class="form-control" style="height:20vh" required></textarea>
                </div>
                <div class="mt-4 d-flex justify-content-center">
                    <input type="submit" value="Submit" class="btn px-5 py-2 text-bg-primary">
                </div>

                <div class="mt-5">
                    <ul class="d-flex list-unstyled justify-content-center" style="gap:10px">
                        <li class="nav-item"><a href="#" class="nav-link"><img src="/local business/IMAGE/Contact Image/gmail.png" height = "40" alt=""></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><img src="/local business/IMAGE/Contact Image/telegram.png" height = "40" alt=""></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><img src="/local business/IMAGE/Contact Image/call.png" height = "40" alt=""></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><img src="/local business/IMAGE/Contact Image/whatsapp.png" height = "40" alt=""></a></li>
                    </ul>
                </div>
            </fieldset>
        </form>
    </div>
    <?php

            include "../../component/footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>