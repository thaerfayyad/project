<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- =====  BASIC PAGE NEEDS  ===== -->
    <meta charset="utf-8">
    <title>{{$title = 'clothing fashion trends'}}</title>
    <!-- =====  SEO MATE  ===== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="2 Days">
    <meta name="robots" content="ALL">
    <meta name="rating" content="8 YEARS">
    <meta name="Language" content="en-us">
    <meta name="GOOGLEBOT" content="NOARCHIVE">
    <!-- =====  MOBILE SPECIFICATION  ===== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width">
    <!-- =====  CSS  ===== -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontEnd/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('fontEnd/css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('fontEnd/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fontEnd/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fontEnd/css/owl.carousel.css')}}">
    <link rel="shortcut icon" href="{{asset('fontEnd/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('fontEnd/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('fontEnd/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('fontEnd/images/apple-touch-icon-114x114.png')}}">
</head>
<body>
<header id="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="header-top-left">
                        <div class="contact"><a href="#">Call now !</a> <span class="hidden-xs hidden-sm hidden-md">+9725958444447</span></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8">
                    <ul class="header-top-right text-right">
                        <li class="account"><a href="login.html">My Account</a></li>
                        <li class="language dropdown"> <span class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Language <span class="caret"></span> </span>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                            </ul>
                        </li>
                        <li class="currency dropdown"> <span class="dropdown-toggle" id="dropdownMenu12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Currency <span class="caret"></span> </span>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu12">
                                <li><a href="#">€ Euro</a></li>
                                <li><a href="#">£ Pound Sterling</a></li>
                                <li><a href="#">$ US Dollar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="main-search mt_40">
                        <input id="search-input" name="search" value="" placeholder="Search" class="form-control input-lg" autocomplete="off" type="text">
                        <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
              </span> </div>
                </div>
                <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="{{route('mainsite')}}"> <img alt="OYEENok" src="images/logo.png"> </a> </div>
                <div class="col-xs-6 col-sm-4 shopcart">
                    <div id="cart" class="btn-group btn-block mtb_40">
                        <button type="button" class="btn" data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true"><span id="shippingcart">Shopping cart</span><span id="cart-total">items (0)</span> </button>
                    </div>
                    <div id="cart-dropdown" class="cart-menu collapse">
                        <ul>

                            <li>
                                <form action="{{route('cart')}}">
                                    <input class="btn pull-left mt_10" value="View cart" type="submit">
                                </form>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="navbar">
                <p>Menu</p>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="i-bar"><i class="fa fa-bars"></i></span></button>
                <div class="collapse navbar-collapse js-navbar-collapse">
                    <ul id="menu" class="nav navbar-nav">
                        <li> <a href="{{route('mainsite')}}">Home</a></li>
                        <li> <a href="category_page.html">women</a></li>
                        <li> <a href="category_page.html">men</a></li>
                        <li class="dropdown mega-dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Collection </a>
                            <ul class="dropdown-menu mega-dropdown-menu row">
                                <li class="col-md-3">
                                    <ul>
                                        <li class="dropdown-header">Women's</li>


                                    </ul>
                                </li>
                                <li class="col-md-3">
                                    <ul>
                                        <li class="dropdown-header">Man's</li>

                                    </ul>
                                </li>

                                <li class="col-md-3">
                                    <ul>
                                        <li id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active"> <a href="#"><img src="images/menu-banner1.jpg" class="img-responsive" alt="Banner1"></a></div>

                                                <!-- End Item -->
                                                <div class="item"> <a href="#"><img src="images/menu-banner2.jpg" class="img-responsive" alt="Banner1"></a></div>
                                                <!-- End Item -->
                                                <div class="item"> <a href="#"><img src="images/menu-banner3.jpg" class="img-responsive" alt="Banner1"></a></div>
                                                <!-- End Item -->
                                            </div>
                                            <!-- End Carousel Inner -->
                                        </li>
                                        <!-- /.carousel -->
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li> <a href="{{route('about')}}">About us</a></li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages </a>
                            <ul class="dropdown-menu">
                                <li> <a href="{{route('contact')}}">Contact us</a></li>
                                <li> <a href="{{route('cart')}}">Cart</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </nav>
        </div>
    </div>
</header>
<!-- =====  HEADER END  ===== -->


@yield('content')


<!-- =====  FOOTER START  ===== -->
<div class="footer pt_60">
    <div class="container">
        <div class="row">
            <div class="footer-top pb_60 mb_30">
                <div class="col-xs-12 col-sm-6">
                    <div class="footer-logo"> <a href="index.html"> <img src="images/footer-logo.png" alt="OYEENok"> </a> </div>
                    <div class="footer-desc">Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicagna.</div>
                </div>
                <!-- =====  testimonial  ===== -->
                <div class="col-xs-12 col-sm-6">
                    <div class="Testimonial">
                        <div class="client owl-carousel">
                            <div class="item client-detail">
                                <div class="client-avatar"> <img alt="" src="images/user1.jpg"> </div>
                                <div class="client-title"><strong>joseph Lui</strong></div>
                                <div class="client-designation mb_10"> - php Developer</div>
                                <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
                            </div>
                            <div class="item client-detail">
                                <div class="client-avatar"> <img alt="" src="images/user2.jpg"> </div>
                                <div class="client-title"><strong>joseph Lui</strong></div>
                                <div class="client-designation mb_10"> - php Developer</div>
                                <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
                            </div>
                            <div class="item client-detail">
                                <div class="client-avatar"> <img alt="" src="images/user3.jpg"> </div>
                                <div class="client-title"><strong>joseph Lui</strong></div>
                                <div class="client-designation mb_10"> - php Developer</div>
                                <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =====  testimonial end ===== -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 footer-block">
                <h6 class="footer-title ptb_20">Information</h6>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-block">
                <h6 class="footer-title ptb_20">Services</h6>
                <ul>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Wish List</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Order History</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-block">
                <h6 class="footer-title ptb_20">Extras</h6>
                <ul>
                    <li><a href="#">Brands</a></li>
                    <li><a href="#">Gift Certificates</a></li>
                    <li><a href="#">Affiliates</a></li>
                    <li><a href="#">Specials</a></li>
                    <li><a href="#">Newsletter</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-block">
                <h6 class="footer-title ptb_20">Contacts</h6>
                <ul>
                    <li>Warehouse & Offices, 12345 Street name, California USA</li>
                    <li>(+123) 456 789
                        <br> (+024) 666 888</li>
                    <li>Contact@yourcompany.com</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom mt_60 ptb_20">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="social_icon">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="copyright-part text-center">@ 2017 All Rights Reserved OYEENok</div>
                </div>
                <div class="col-sm-4">
                    <div class="payment-icon text-right">
                        <ul>
                            <li><i class="fa fa-cc-paypal "></i></li>
                            <li><i class="fa fa-cc-visa"></i></li>
                            <li><i class="fa fa-cc-discover"></i></li>
                            <li><i class="fa fa-cc-mastercard"></i></li>
                            <li><i class="fa fa-cc-amex"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =====  FOOTER END  ===== -->
</div>
<a id="scrollup"></a>
<script src="{{asset('fontEnd/js/jQuery_v3.1.1.min.js')}}"></script>
<script src="{{asset('fontEnd/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('fontEnd/js/bootstrap.min.js')}}"></script>
<script src="{{asset('fontEnd/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('fontEnd/js/jquery.firstVisitPopup.js')}}"></script>
<script src="{{asset('fontEnd/js/custom.js')}}"></script>
</body>

</html>
