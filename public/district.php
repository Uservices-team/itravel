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
        <!-- <link href="../../../css2?family=Prompt:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> -->
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
        <style>
            /* Add hover black-and-white effect on images */
            .portfolio-area.style-3 .portfolio-wrapper2 .img-fluid img {
                filter: grayscale(0); /* Default: full color */
                transition: all 0.4s ease; /* Smooth transition */
            }
            .portfolio-area.style-3 .portfolio-wrapper2:hover .img-fluid img {
                filter: grayscale(100%); /* Black and white on hover */
            }
            .portfolio-area.style-3 .portfolio-wrapper2 {
            position: relative;
            z-index: 1;
            transition: all 0.4s;
            margin-bottom: 40px;
            margin-right: 15px;
            }
            .portfolio-area.style-3 .portfolio-wrapper2:hover .img-fluid::before {
            height: 100%;
            bottom: 0;
            }
            .portfolio-area.style-3
            .portfolio-wrapper2:hover
            .img-fluid
            .portfolio-content {
            transform: translate(-50%, -50%) scale(1);
            }
            .portfolio-area.style-3 .portfolio-wrapper2::before {
            pointer-events: none;
            }
            .portfolio-area.style-3 .portfolio-wrapper2:hover .portfolio-content a {
            transform: scale(1.5);
            }
            .portfolio-area.style-3 .portfolio-wrapper2:hover .portfolio-text .p-title a {
            text-decoration: underline !important;
            }
            .portfolio-area.style-3 .portfolio-wrapper2::before {
            background: #0000007a;
            }
            .portfolio-area.style-3 .portfolio-wrapper2 .img-fluid {
            position: relative;
            transition: all 0.3s;
            }
            .portfolio-area.style-3 .portfolio-wrapper2 .img-fluid::before {
            content: "";
            position: absolute;
            background-color: var(--color-primary);
            opacity: 0.8;
            width: 100%;
            height: 0;
            top: 0;
            border-radius: 20px;
            transition: all 0.4s;
            }
            .portfolio-area.style-3 .portfolio-wrapper2 .img-fluid img {
            width: 100%;
            }
            .portfolio-area.style-3 .portfolio-wrapper2 .img-fluid .fly-with {
            border-radius: 20px;
            }
            .portfolio-area.style-3 .portfolio-wrapper2 .img-fluid .portfolio-content {
            position: absolute;
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            line-height: 1;
            padding: 15px 30px;
            border: 2px solid rgba(255, 255, 255, 0.1);
            display: inline-block;
            z-index: 2;
            left: 50%;
            top: 50%;
            transition: all 0.4s;
            transform: translate(-50%, -50%) scale(0);
            }
            .portfolio-area.style-3 .portfolio-wrapper2 .img-fluid .portfolio-content a {
            font-size: 10px;
            transition: all 0.4s ease-out 0s;
            }
            .portfolio-area.style-3 .portfolio-wrapper2 .portfolio-text {
            display: flex;
            justify-content: center;
            text-align: center;
            padding: 18px 0 0;
            }
            .portfolio-area.style-3 .portfolio-wrapper2 .portfolio-text .text .p-category {
            margin-bottom: 10px;
            }
            .portfolio-area.style-3
            .portfolio-wrapper2
            .portfolio-text
            .text
            .p-category
            a {
            color: #040404;
            font-size: 14px;
            }
            .portfolio-area.style-3 .portfolio-wrapper2 .portfolio-text .text .p-title {
            color: #040404;
            font-size: 22px;
            font-weight: 700;
            transition: all 0.4s;
            }
            @media (max-width: 767px) {
            .portfolio-area.style-3 .portfolio-wrapper2 .portfolio-text .text .p-title {
                font-size: 20px;
            }
            }
            .portfolio-area.style-3
            .portfolio-wrapper2
            .portfolio-text
            .text
            .p-title:hover {
            color: #ff4969 !important;
            }
            .portfolio-area.style-4 .item {
            position: relative;
            margin: 0 10px 30px 0;
            transition: all 0.4s;
            }
            @media (max-width: 768px) {
            .portfolio-area.style-4 .item {
                margin: 0 0 30px 0;
            }
            }
        </style>
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
        <!-- Filter Section -->
        <section class="filter-section pt--30 pb--30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="filter-form">
                    <div class="row">
                        <!-- Select Category -->
                        <div class="col-md-12 mb-3">
                            <label for="category" class="form-label">Select Category</label>
                            <select id="category" class="form-control" name="category">
                                <option value="">All Categories</option>
                                <option value="adventure">Adventure</option>
                                <option value="cultural">Cultural</option>
                                <option value="wildlife">Wildlife</option>
                                <option value="beach">Beach</option>
                            </select>
                        </div>

                        <!-- Filter Button -->
                        <div class="col-md-12">
                            <button type="button" id="filterButton" class="btn btn-primary">Apply Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="filteredItems">
    <!-- Your filtered items will be displayed here -->
</section>
         <!--portfolio-area start-->
    <section class="portfolio-area style-3 pt--110 pb--90 pt--md--60 pb--md-30 pt_xs--60 pb_xs--30">
        <div class="container">
            <div class="grid row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item adventure">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/ampara.jpg" alt="business-i img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.facebook.com/businessilk/">Ampara</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item cultural">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/anuradhapura.jpg" alt="I care img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://web.facebook.com/theicarelk/">Anuradhapura</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item adventure">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/badulla.jpg" alt="I travel img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://web.facebook.com/theitravellk/">Badulla</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item adventure">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/batticaloa.jpeg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Batticaloa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item beach">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/colombo.jpg" alt="business-i img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.facebook.com/businessilk/">Colombo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item beach">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/galle.jpg" alt="I care img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://web.facebook.com/theicarelk/">Galle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item adventure">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/gampaha.jpg" alt="I travel img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://web.facebook.com/theitravellk/">Gampaha</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item beach">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/place-8.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Hambantota</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item beach">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/jaffna.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Jaffna</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item adventure">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/kalutara.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Kalutara</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item cultural">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/kandy.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Kandy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item adventure">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/kilinochchi.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Kilinochchi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item adventure">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/kurunegala.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Kurunegala</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item beach">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/mannar.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Mannar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item cultural">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/matale.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours </a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Matale</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item adventure">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/matara.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Matara</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item adventure">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/monaragala.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Moneragala</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item adventure">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/nuwara-eliya.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Nuwara Eliya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item cultural">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/polonnaruwa.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Polonnaruwa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item beach">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/puththalam.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Puttalam</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item cultural">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/rathnapura.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Rathnapura</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item Beach">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/trinco.png" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Trincomalee</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item Beach">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/vavuniya.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Vavuniya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item beach">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/kalmunai.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Kalmunai</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 grid-item adventure">
                    <div class="portfolio-wrapper2 mb-30">
                        <div class="img-fluid">
                            <img src="assets/images/place/mullaitivu.jpg" alt="I studio img">
                            <div class="portfolio-content">
                                <a class="fw-bold text-white" href="destination-details">Explore Tours</a>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <div class="text">
                                <div class="p-title">
                                    <a href="https://www.youtube.com/@THEITUBE">Mullaithivu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    // JavaScript to handle the filter action
    document.getElementById('filterButton').addEventListener('click', function() {
        // Get the selected category value
        var selectedCategory = document.getElementById('category').value;
        
        console.log("Selected category:", selectedCategory); // Check what category is selected

        // Filter the items based on the selected category
        filterItems(selectedCategory);
    });

    // Function to filter items
    // Function to filter items
function filterItems(category) {
    var items = document.querySelectorAll('.grid-item'); // Select all the items to filter

    // Loop through the items and filter them based on the selected category
    items.forEach(function(item) {
        // Check if the item's class includes the selected category class
        if (category === "" || item.classList.contains(category)) {
            // If no category is selected or if the item's category matches, show the item
            item.style.display = 'block'; // Make sure the item is visible
        } else {
            // If the category does not match, hide the item
            item.style.display = 'none';
        }
    });
}
</script>


    
    <!--portfolio-area end-->
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