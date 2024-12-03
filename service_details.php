<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Famhak.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>
        .footer {
            background-color: pink;
            
        }
        .logo{
            font-family: cursive;
        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php
    include("include/navbar.php");
    ?>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_area2  bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Ocean Freight</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- service_details_start  -->
    <div class="service_details_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="service_details_left">
                        <h3>Services</h3>
                        <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class=" active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                                aria-controls="v-pills-home" aria-selected="true">Ocean Freight</a>
                            <a class="" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Land Transport</a>
                            <a class="" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                                aria-controls="v-pills-messages" aria-selected="false">Air Freight</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="service_details_info">
                                <h3>Service details</h3>
                                <p>Famhak Logistics offers efficient and cost-effective ocean freight solutions for
                                    businesses and individuals looking to ship large volumes of goods internationally.
                                </p><br>
                                <p>At Famhak Logistics, we provide fast and reliable land transport solutions for both
                                    local and long-distance deliveries.</p><br>
                                <p>Famhak Logistics offers swift and dependable air freight solutions for time-sensitive
                                    shipments.</p>
                            </div>
                            <div class="service_thumb">
                                <img class="img-fluid" src="img/service/service_details.png" alt="">
                            </div>
                            <div class="contact_location">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="location_left">
                                                <div class="logo">
                                                    <a href="index.html">
                                                        Famhak Logistics
                                                    </a>
                                                </div>
                                                <ul>
                                                    <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                                    <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                                    <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                                    <li><a href="#"> <i class="fa fa-youtube"></i> </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-3">
                                            <div class="single_location">
                                                <h3> <img src="img/icon/address.svg" alt=""> Location</h3>
                                                <p>Suite A6 amori shopping complex, orelope bus stop egbeda</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-3">
                                            <div class="single_location">
                                                <h3> <img src="img/icon/support.svg" alt=""> Contact</h3>
                                                <p>09124463272<br>
                                                    famhaklawal2020@gmail.com </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--/ contact_location  -->


                            <!-- footer start -->
                            <?php
include("include/footer.php");
?>
                            <!--/ footer end  -->

                            <!-- Modal -->
                            <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="serch_form">
                                            <input type="text" placeholder="search">
                                            <button type="submit">search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- JS here -->
                            <script src="js/vendor/modernizr-3.5.0.min.js"></script>
                            <script src="js/vendor/jquery-1.12.4.min.js"></script>
                            <script src="js/popper.min.js"></script>
                            <script src="js/bootstrap.min.js"></script>
                            <script src="js/owl.carousel.min.js"></script>
                            <script src="js/isotope.pkgd.min.js"></script>
                            <script src="js/ajax-form.js"></script>
                            <script src="js/waypoints.min.js"></script>
                            <script src="js/jquery.counterup.min.js"></script>
                            <script src="js/imagesloaded.pkgd.min.js"></script>
                            <script src="js/scrollIt.js"></script>
                            <script src="js/jquery.scrollUp.min.js"></script>
                            <script src="js/wow.min.js"></script>
                            <script src="js/nice-select.min.js"></script>
                            <script src="js/jquery.slicknav.min.js"></script>
                            <script src="js/jquery.magnific-popup.min.js"></script>
                            <script src="js/plugins.js"></script>
                            <!-- <script src="js/gijgo.min.js"></script> -->
                            <script src="js/slick.min.js"></script>



                            <!--contact js-->
                            <script src="js/contact.js"></script>
                            <script src="js/jquery.ajaxchimp.min.js"></script>
                            <script src="js/jquery.form.js"></script>
                            <script src="js/jquery.validate.min.js"></script>
                            <script src="js/mail-script.js"></script>


                            <script src="js/main.js"></script>


</body>

</html>