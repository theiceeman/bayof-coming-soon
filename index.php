<?php
require_once('./lib/table-traits.php');
require_once('./lib/basic-function.php');
require_once('./lib/user-functions.php');

$users = $basicFunctn->selectAllDlt($basicFunctn->user_tb);
$no_of_users = count($users) * 2;

$days_Remaining = $user->countdown();
// print $days_Remaining;die();

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Imperionix - Lodgings, Properties, Flats, Comfort</title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon-2.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="assets/js/custom/js-snackbar/dist/js-snackbar.css">
    <link rel="stylesheet" href="assets/css/custom-app.css">
    <link rel="stylesheet" href="assets/js/custom/loader/assets/loader.css">

</head>

<body>
    <!--====== Preloader Area Start ======-->
    <div class="preloader-main">
        <div class="preloader-wapper">
            <svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600" height="200">
                <defs>
                    <filter id="goo" x="-40%" y="-40%" height="200%" width="400%">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -8" result="goo" />
                    </filter>
                </defs>
                <g filter="url(#goo)">
                    <circle class="dot" cx="50" cy="50" r="25" fill="rgba(16, 16, 45, 1)" />
                    <circle class="dot" cx="50" cy="50" r="25" fill="rgba(16, 16, 45, 1)" />
                </g>
            </svg>
            <div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>
    </div>

    <!-- ajax loader -->
    <div style="display: none;" id="the_load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!-- ajax loader -->
    <!-- <div id="preloader">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> -->
    <!--====== Preloader Area End ======-->

    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="index-2.html">
                    <img class="navbar-brand-regular" width="123px" height="38px" src="assets/img/logo/v2/2.png" alt="brand-logo">
                    <img class="navbar-brand-sticky" width="123px" height="38px" src="assets/img/logo/v2/3.png" alt="sticky brand-logo">
                </a>
                <!-- <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <div class="navbar-inner">
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <nav>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#home">&nbsp;</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#features">&nbsp;</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#screenshots">&nbsp;</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#pricing">&nbsp;</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#contact">&nbsp;</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- ***** Header End ***** -->

        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area bg-overlay d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-md-7 col-lg-6">
                        <div class="welcome-intro">
                            <!-- Lets own housing the smart way! -->
                            <!-- Ready to find lodgings the smart way? -->
                            <h1 class="text-white text-capitalize">Welcome to the future of housing</h1>
                            <p class="text-white my-4">We believe the current system hasn't advanced much in ages. <br> Lets take this industry into the smart age. </p>
                            <!-- Store Buttons -->
                            <!-- <div class="button-group store-buttons d-flex">
                                <a href="#">
                                    <img src="assets/img/icon/google-play.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="assets/img/icon/app-store.png" alt="">
                                </a>
                            </div> -->
                            <span class="d-inline-block text-white fw-3 font-italic mt-3">* Launching this month, July 2024...</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-sm-12 pt-4 pt-md-0">
                        <!-- Welcome Thumb -->
                        <div class="welcome-thumb mx-auto" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">

                            <div class="contact-box text-center">
                                <h2 class="card-title text-heading fs-30 text-center font-weight-600 lh-173 m-0 be-agent">Join our waitlist</h2>
                                <p class="card-text text-center pad-be-agent">...Lets build the future together</p>
                                <!-- Contact Form -->
                                <form id="contact-form" method="POST" class="register_form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="firstname" placeholder="First Name" required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="phone" placeholder="Phone" required="required">
                                            </div>
                                        </div>
                                        <!-- <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                            </div>
                                        </div> -->
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-lg btn-block mt-3 join"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Join the movement</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-message"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape Bottom -->
            <div class="shape-bottom">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2353.6 1112.5" style="enable-background:new 0 0 2353.6 1112.5;" xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            fill: #FFFFFF;
                        }
                    </style>
                    <path class="st0" d="M2353.6,0v1112.5H0c132.1-171.4,350.7-231.4,655.9-179.9c474,79.9,637.1-23.3,882.7-262.4
                    C1802.7,413,1870,54.1,2353.6,0z" />
                </svg>
            </div>
        </section>
        <!-- ***** Welcome Area End ***** -->

        <!-- ***** Download Area Start ***** -->
        <section class="section download-area overlay-dark ptb_100 mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <!-- Download Text -->
                        <div class="download-text text-center">
                            <h2 class="text-white text-capitalize">Owning property is faster & smarter</h2>
                            <p class="text-white my-3 d-none d-sm-block">Agents have a platform for organizing their properties efficiently, & for being visible to even more potential buyers. </p>
                            <!-- <p class="text-white my-3 d-block d-sm-none">Apolo is available for all devices, consectetur adipisicing elit. Vel neque, cumque. Temporibus eligendi veniam, necessitatibus aut id labore nisi quisquam.</p> -->
                            <!-- Store Buttons -->

                            <!-- Counter List -->
                            <div class="row">


                                <!-- <div class="counter-list"> -->
                                <ul style="width: 100%;">

                                    <div style="float: left;" class="col-sm-12 col-md-6 col-lg-6 m-auto">
                                        <li class="d-inline-block">
                                            <!-- Single Counter -->
                                            <div class="single-counter p-2 px-md-4 py-md-3 text-center">
                                                <span class="counter d-inline-block text-white fw-7"><?php print $no_of_users ?></span><span class="text-white fw-7"></span>
                                                <h4 class="text-white fw-4 mt-2 mt-sm-3">Registered Users</h4>
                                            </div>
                                        </li>
                                    </div>
                                    <div style="float: left;" class="col-sm-12 col-md-6 col-lg-6 m-auto">
                                        <li class="d-inline-block">
                                            <!-- Single Counter -->
                                            <div class="single-counter p-2 px-md-4 py-md-3 text-center">
                                                <span class="counter d-inline-block text-white fw-7"><?php print $days_Remaining; ?></span><span class="text-white fw-7"> Days</span>
                                                <h4 class="text-white fw-4 mt-2 mt-sm-3">Till Launch</h4>
                                            </div>
                                        </li>
                                    </div>
                                </ul>
                                <!-- </div> -->



                            </div>
                            <span class="d-inline-block text-white fw-3 font-italic mt-3">* Join our pioneer client, waiting to experience housing in the smart age!</span>
                        </div>
                    </div>
                </div>
                <!-- Download Thumb -->
                <!-- <div class="download-thumb d-none d-md-block" data-aos="fade-up" data-aos-offset="350" data-aos-duration="700">
                    <img src="assets/img/welcome/download-mockup.png" alt="">
                </div> -->
            </div>
        </section>
        <!-- ***** Download Area End ***** -->


        <!--====== Height Emulator Area Start ======-->
        <div class="height-emulator d-none d-lg-block"></div>
        <!--====== Height Emulator Area End ======-->

        <!--====== Footer Area Start ======-->
        <footer class="footer-area footer-fixed overflow-hidden">
            <!-- Footer Top -->
            <div class="footer-top p-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-lg-12">
                            <!-- Footer Items -->
                            <div class="footer-items m-auto text-center pad-footer">
                                <!-- Social Icons -->
                                <div class="social-icons d-flex text-center p-auto">
                                    <a class="facebook" href="https://web.facebook.com/profile.php?id=61561923992489">
                                        <i class="fab fa-facebook-f"></i>
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="twitter" href="https://x.com/imperionix_co">
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="google-plus" href="https://www.instagram.com/imperionix.co">
                                        <i class="fab fa-instagram"></i>
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="whatsapp" href="https://wa.me/2347070863051">
                                        <i class="fab fa-whatsapp"></i>
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    <!-- <a class="tiktok" href="https://www.tiktok.com/@imperionix.co">
                                        <i class="fab fa-tiktok"></i>
                                        <i class="fab fa-tiktok"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Copyright Area -->
                            <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                <!-- Copyright Left -->
                                <div class="copyright-left"><b>&copy;</b> <a href=""><b>Imperionix,</b></a> <b>2024. </b></div>
                                <!-- Copyright Right -->
                                <div class="copyright-right text-uppercase">&nbsp;<b> all rights reserved</b></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== Footer Area End ======-->
    </div>


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>


    <script src="assets/js/custom/js-snackbar/dist/js-snackbar.js"></script>
    <script src="assets/js/custom/js-snackbar/dist/site.js"></script>
    <script src="assets/js/custom/Basic-function.js"></script>
    <script src="assets/js/custom/loader/assets/loader.js"></script>
</body>

</html>
<script>
    $('.join').click(async function(e) {
        e.preventDefault();
        let data = $('.register_form').serializeArray();
        // console.log(data);
        let form_data = set_form_data(data);
        let returned = await ajaxRequest('ajax.php', form_data);
        // console.log(returned);
        // return;
        validator(returned, './');

    });
</script>