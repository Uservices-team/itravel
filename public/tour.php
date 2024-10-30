<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Adventure, Tours, Travel">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>Gowilds - Tours and Travel HTML Template</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">
        <!--====== Google Fonts ======-->
        <link href="../../../css2?family=Prompt:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon_gowilds.css">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <!--====== magnific-popup css ======-->
        <link rel="stylesheet" href="assets/vendor/magnific-popup/dist/magnific-popup.css">
        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="assets/vendor/slick/slick.css">
        <!--====== Jquery UI css ======-->
        <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.min.css">
        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="assets/vendor/nice-select/css/nice-select.css">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="assets/vendor/animate.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="assets/css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div><!--====== End Preloader ======-->
        <!--====== Search From ======-->
		<div class="modal fade search-modal" id="search-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form>
                        <div class="form_group">
                        	<input type="search" class="form_control" placeholder="Search here" name="search">
                        	<label><i class="fa fa-search"></i></label>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--====== Search From ======-->
        <?php include("includes/header.php"); ?>        
        <!--====== Start Breadcrumb Section ======-->
        <section class="page-banner overlay pt-170 pb-220 bg_cover" style="background-image: url(assets/images/bg/page-bg.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="page-banner-content text-center text-white">
                            <h1 class="page-title">Explore Tour Place</h1>
                            <ul class="breadcrumb-link text-white">
                                <li><a href="index">Home</a></li>
                                <li class="active">Explore Tour Place</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Breadcrumb Section ======-->
        <!--====== Start Booking Section ======-->
        <section class="booking-form-section pb-100">
            <div class="container-fluid">
                <div class="booking-form-wrapper p-r z-2">
                    <form action="index-2.html" class="booking-form-two">
                        <div class="form_group">
                            <span>Check In</span>
                            <label><i class="far fa-calendar-alt"></i></label>
                            <input type="text" class="form_control datepicker" placeholder="Check In">
                        </div>
                        <div class="form_group">
                            <span>Check Out</span>
                            <label><i class="far fa-calendar-alt"></i></label>
                            <input type="text" class="form_control datepicker" placeholder="Check Out">
                        </div>
                        <div class="form_group">
                            <span>Guest</span>
                            <label><i class="far fa-user-alt"></i></label>
                            <input type="text" class="form_control" placeholder="Guest" name="text">
                        </div>
                        <div class="form_group">
                            <span>Accommodations</span>
                            <select class="wide">
                                <option data-display="Accommodations">Accommodations</option>
                                <option value="01">Classic Tent</option>
                                <option value="01">Forest Camping</option>
                                <option value="01">Small Trailer</option>
                                <option value="01">Tree House Tent</option>
                                <option value="01">Tent Camping</option>
                                <option value="01">Couple Tent</option>
                            </select>
                        </div>
                        <div class="form_group">
                            <button class="booking-btn">Check Availability <i class="far fa-angle-double-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </section><!--====== End Booking Section ======-->
        <!--====== Start Places Section ======-->
        <section class="places-section pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-6 col-sm-12 places-column">
                        <!--=== Single Place Item ===-->
                        <div class="single-place-item mb-60 wow fadeInUp">
                            <div class="place-img">
                                <img src="assets/images/place/IMG_2139.jpg" alt="Place Image">
                            </div>
                            <div class="place-content">
                                <div class="info">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><a href="#">(4.9)</a></li>
                                    </ul>
                                    <h4 class="title"><a href="tour-details.html">Travel to Hanthana</a></h4>
                                    <p class="location"><i class="far fa-map-marker-alt"></i>Hanthana, Sri Lanka</p>
                                    <p class="price"><i class="fas fa-usd-circle"></i>Price<span class="currency">$</span>93.65</p>
                                    <div class="meta">
                                        <span><i class="far fa-clock"></i>05 Days</span>
                                        <span><i class="far fa-user"></i>25</span>
                                        <span><a href="tour-details.html">Details<i class="far fa-long-arrow-right"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12 places-column">
                        <!--=== Single Place Item ===-->
                        <div class="single-place-item mb-60 wow fadeInUp">
                            <div class="place-img">
                                <img src="assets/images/place/IMG_2138.jpg" alt="Place Image">
                            </div>
                            <div class="place-content">
                                <div class="info">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><a href="#">(4.9)</a></li>
                                    </ul>
                                    <h4 class="title"><a href="tour-details.html">Travel to Kitulgala</a></h4>
                                    <p class="location"><i class="far fa-map-marker-alt"></i>Kitulgala, Sri Lanka</p>
                                    <p class="price"><i class="fas fa-usd-circle"></i>Price<span class="currency">$</span>93.65</p>
                                    <div class="meta">
                                        <span><i class="far fa-clock"></i>05 Days</span>
                                        <span><i class="far fa-user"></i>25</span>
                                        <span><a href="tour-details.html">Details<i class="far fa-long-arrow-right"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--=== Gowilds Pagination ===-->
                        <ul class="gowilds-pagination wow fadeInUp text-center">
                            <li><a href="#"><i class="far fa-arrow-left"></i></a></li>
                            <li><a href="#" class="active">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">04</a></li>
                            <li><a href="#"><i class="far fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!--====== End Places Section ======-->
        <!--====== Start Gallery Section ======-->
        <section class="gallery-section mbm-150">
            <div class="container-fluid">
                <div class="slider-active-5-item wow fadeInUp">
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gl-1.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="assets/images/gallery/gl-1.jpg" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gl-2.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="assets/images/gallery/gl-2.jpg" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gl-3.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="assets/images/gallery/gl-3.jpg" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gl-4.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="assets/images/gallery/gl-4.jpg" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gl-5.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="assets/images/gallery/gl-5.jpg" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--=== Single Gallery Item ===-->
                    <div class="single-gallery-item">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gl-3.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <a href="assets/images/gallery/gl-3.jpg" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Gallery Section ======-->
        <!--====== Start Footer ======-->
        <?php include("includes/footer.php"); ?>
        <!--====== Back To Top  ======-->
        <a href="#" class="back-to-top"><i class="far fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="assets/vendor/jquery-3.6.0.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="assets/vendor/popper/popper.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--====== Slick js ======-->
        <script src="assets/vendor/slick/slick.min.js"></script>
        <!--====== Magnific js ======-->
        <script src="assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <!--====== Counterup js ======-->
        <script src="assets/vendor/jquery.counterup.min.js"></script>
        <!--====== Waypoints js ======-->
        <script src="assets/vendor/jquery.waypoints.js"></script>
        <!--====== Nice-select js ======-->
        <script src="assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
        <!--====== jquery UI js ======-->
        <script src="assets/vendor/jquery-ui/jquery-ui.min.js"></script>
        <!--====== WOW js ======-->
        <script src="assets/vendor/wow.min.js"></script>
        <!--====== Main js ======-->
        <script src="assets/js/theme.js"></script>
    </body>
</html>