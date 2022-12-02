<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Bootstrap Friendly Contact with php mailer</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">

    </script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <script src="contact_frm_validation.js"></script>
    <link rel="stylesheet" href="./css/footer-5.css">
</head>

<body>

    <div class=" container-fluid pt-4">
        <div class="row ">
            <div class="col-md-6 offset-md-3 border p-4">
                <form method="post" id="contact_frm">
                    <div class="show_success_msg">

                    </div>
                    <h3>Contact form with php mailer:</h3>
                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="name">name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="email">Email<span>*</span></label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="contact">Contact Number<span>*</span></label>
                            <input type="text" class="form-control" name="contact" id="contact" placeholder="">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="message">Message</label>
                            <input class="form-control" name="message" id="message" rows="5" cols="5"></input>
                        </div>
                        <div class="col-sm-12 pt-3">
                            <button type="button" name="submit_btn" id="submit_btn" class="btn btn-sm btn-primary"> Send
                                Message</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>

    </div>
    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="footer-about">
                        <h3>About Us</h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Quisque eu lectus a leo tristique dictum nec non quam.
                        </p>
                    </div>
                    <div class="footer-contact">
                        <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope"></i>info@example.com</p>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/renatoalves.soares.56"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-link">
                        <h3>Service Area</h3>
                        <a href="">Lorem ipsum</a>
                        <a href="">tempus posuere </a>
                        <a href="">velit id accumsan</a>
                        <a href="">ut porttitor</a>
                        <a href="">Nam pretium</a>
                        <a href="">accumsan</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-link">
                        <h3>Useful Link</h3>
                        <a href="">Sed pretium</a>
                        <a href="">ultricies turpis at</a>
                        <a href="">Mauris cursus</a>
                        <a href="">consectetur</a>
                        <a href="">condimentum</a>
                        <a href="">accumsan</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-newsletter">
                        <h3>Newsletter</h3>
                        <div class="form">
                            <input class="form-control" placeholder="Your Name">
                            <input class="form-control" placeholder="Your Email">
                            <button class="btn">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="copy-text">
                            <p>&copy; <a href="#">Your Site Name</a>. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copy-menu">
                            <a href="">Terms</a>
                            <a href="">Privacy</a>
                            <a href="https://htmlcodex.com">Designer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
</body>

</html>