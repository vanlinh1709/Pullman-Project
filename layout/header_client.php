<?php
    $notifications = get_notification();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pullman - eCommerce Bootstrap 5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS
	============================================ -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,600,700,800,900%7CPoppins:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <!-- Slick slider css -->
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <!-- Nice Select css -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <!-- jquery UI css -->
    <link rel="stylesheet" href="assets/css/plugins/jqueryui.min.css">
    <!-- main style css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
<!-- Start Header Area -->
<header class="header-area header-style__3 header-box header-box__3">
    <!-- main header start -->
    <div class="main-header d-none d-lg-block">
        <!-- header top start -->
        <div class="header-top p-0 black-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="header-social-link">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-9 d-flex justify-content-end">
                                <div class="top-left-navigation pl-0">
                                    <ul class="nav align-items-center">
                                        <li class="language">
                                            <img src="assets/img/icon/en.png" alt="flag"> English
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-list">
                                                <li><a href="#"><img src="assets/img/icon/en.png" alt="flag"> English</a></li>
                                                <li><a href="#"><img src="assets/img/icon/fr.png" alt="flag"> French</a></li>
                                            </ul>
                                        </li>
                                        <li class="curreny-wrap">
                                            $ Currency
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-list curreny-list">
                                                <li><a href="#">$ USD</a></li>
                                                <li><a href="#">€ EURO</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="user-info-block">
                                    <li><a href="my-account.html"><i class="fa fa-user-circle"></i><?php echo isset($_SESSION['auth']) ? $_SESSION['auth']['fullname'] : 'My accoutnt'?></a></li>

                                    <li <?php echo isset($_SESSION['auth']) ? 'hidden' : ''?>><a href=""><i class="fa fa-credit-card" ></i>Sign up</a></li>

                                    <li><a href="<?php echo isset($_SESSION['auth']) ? '?role=client&mod=logout' : '?role=client&mod=auth'?>"><i class="fa fa-sign-in"></i><?php echo isset($_SESSION['auth']) ? 'Log out' : 'Sign in'?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top end -->

        <!-- header middle area start -->
        <div class="header-middle-area p-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="white-bg">
                            <div class="row">
                                <!-- start logo area -->
                                <div class="col-lg-4">
                                    <div class="logo-2">
                                        <a href="index-5.html">
                                            <img src="assets/img/logo/logo-2.png" alt="Brand Logo">
                                        </a>
                                    </div>
                                </div>
                                <!-- start logo area -->

                                <!-- mini cart area start -->
                                <div class="col-lg-8">
                                    <div class="header-right">
                                        <div class="header-configure-area">
                                            <ul class="nav justify-content-between">
                                                <li class="header-call d-flex align-items-center">
                                                    <div class="call-icon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                    <span>PHONE:<a href="tel:0123456789">0123456789</a></span>
                                                </li>
                                                <li class="search-wrapper-inner">
                                                    <form class="search-box-2">
                                                        <input type="text" class="search-field-2" placeholder="Search Our Catalog">
                                                        <button class="search-btn-2"><i class="fa fa-search"></i></button>
                                                    </form>
                                                </li>
                                                <li class="mini-cart-wrap">
                                                    <a href="#" class="minicart-btn minicart-btn-style_2">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <span class="notification">2</span>
                                                    </a>
                                                    <div class="cart-list-wrapper">
                                                        <ul class="cart-list">
                                                            <li>
                                                                <div class="cart-img">
                                                                    <a href="product-details.html"><img src="assets/img/cart/cart-1.jpg" alt=""></a>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <h6 class="product-name"><a href="product-details.html">7th Generation classic</a></h6>
                                                                    <span class="cart-qty">Qty: 1</span>
                                                                    <span class="item-price">$60.00</span>
                                                                </div>
                                                                <div class="del-icon">
                                                                    <i class="fa fa-times"></i>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="cart-img">
                                                                    <a href="product-details.html"><img src="assets/img/cart/cart-2.jpg" alt=""></a>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <h6 class="product-name"><a href="product-details.html">Digital 8th generation</a></h6>
                                                                    <span class="cart-qty">Qty: 2</span>
                                                                    <span class="item-price">$70.00</span>
                                                                </div>
                                                                <div class="del-icon">
                                                                    <i class="fa fa-times"></i>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="minicart-pricing-box">
                                                            <li>
                                                                <span>Sub-Total</span>
                                                                <span><strong>$300.00</strong></span>
                                                            </li>
                                                            <li>
                                                                <span>Eco Tax (-2.00)</span>
                                                                <span><strong>$10.00</strong></span>
                                                            </li>
                                                            <li>
                                                                <span>VAT (20%)</span>
                                                                <span><strong>$60.00</strong></span>
                                                            </li>
                                                            <li class="total">
                                                                <span>Total</span>
                                                                <span><strong>$370.00</strong></span>
                                                            </li>
                                                        </ul>
                                                        <div class="minicart-button">
                                                            <a href="cart.html"><i class="fa fa-shopping-cart"></i> View Cart</a>
                                                            <a href="cart.html"><i class="fa fa-share"></i> Checkout</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- mini cart area end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header middle area end -->

        <div class="header-main-area sticky">
            <div class="container">
                <div class="row position-relative">
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-lg-12 position-static">
                                <!-- main menu area start -->
                                <div class="main-menu-area">
                                    <div class="main-menu">
                                        <!-- main menu navbar start -->
                                        <nav class="desktop-menu">
                                            <ul>
                                                <li class="active"><a href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="index.html">Home version 01</a></li>
                                                        <li><a href="index-2.html">Home version 02</a></li>
                                                        <li><a href="index-3.html">Home version 03</a></li>
                                                        <li><a href="index-4.html">Home version 04</a></li>
                                                        <li><a href="index-5.html">Home version 05</a></li>
                                                        <li><a href="index-6.html">Home version 06</a></li>
                                                    </ul>
                                                </li>
                                                <li class="position-static"><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                                    <ul class="megamenu dropdown">
                                                        <li class="mega-title"><span>column 01</span>
                                                            <ul>
                                                                <li><a href="shop.html">shop grid left
                                                                        sidebar</a></li>
                                                                <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                                        sidebar</a></li>
                                                                <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                                                <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-title"><span>column 02</span>
                                                            <ul>
                                                                <li><a href="product-details.html">product details</a></li>
                                                                <li><a href="product-details-affiliate.html">product
                                                                        details
                                                                        affiliate</a></li>
                                                                <li><a href="product-details-variable.html">product details
                                                                        variable</a></li>
                                                                <li><a href="product-details-group.html">product details
                                                                        group</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-title"><span>column 03</span>
                                                            <ul>
                                                                <li><a href="cart.html">cart</a></li>
                                                                <li><a href="checkout.html">checkout</a></li>
                                                                <li><a href="compare.html">compare</a></li>
                                                                <li><a href="wishlist.html">wishlist</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-title"><span>column 04</span>
                                                            <ul>
                                                                <li><a href="my-account.html">my-account</a></li>
                                                                <li><a href="login-register.html">login-register</a></li>
                                                                <li><a href="about-us.html">about us</a></li>
                                                                <li><a href="contact-us.html">contact us</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">shop <i class="fa fa-angle-down"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="#">shop grid layout <i class="fa fa-angle-right"></i></a>
                                                            <ul class="dropdown">
                                                                <li><a href="shop.html">shop grid left sidebar</a></li>
                                                                <li><a href="shop-grid-right-sidebar.html">shop grid right sidebar</a></li>
                                                                <li><a href="shop-grid-full-3-col.html">shop grid full 3 col</a></li>
                                                                <li><a href="shop-grid-full-4-col.html">shop grid full 4 col</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">shop list layout <i class="fa fa-angle-right"></i></a>
                                                            <ul class="dropdown">
                                                                <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                                                <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                                                <li><a href="shop-list-full-width.html">shop list full width</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">products details <i class="fa fa-angle-right"></i></a>
                                                            <ul class="dropdown">
                                                                <li><a href="product-details.html">product details</a></li>
                                                                <li><a href="product-details-affiliate.html">product details affiliate</a></li>
                                                                <li><a href="product-details-variable.html">product details variable</a></li>
                                                                <li><a href="product-details-group.html">product details group</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-left-sidebar.html">Blog <i class="fa fa-angle-down"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                                        <li><a href="blog-list-left-sidebar.html">blog list left sidebar</a></li>
                                                        <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                                        <li><a href="blog-list-right-sidebar.html">blog list right sidebar</a></li>
                                                        <li><a href="blog-grid-full-width.html">blog grid full width</a></li>
                                                        <li><a href="blog-details.html">blog details</a></li>
                                                        <li><a href="blog-details-left-sidebar.html">blog details left sidebar</a></li>
                                                        <li><a href="blog-details-audio.html">blog details audio</a></li>
                                                        <li><a href="blog-details-video.html">blog details video</a></li>
                                                        <li><a href="blog-details-image.html">blog details image</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact-us.html">Contact us</a></li>
                                            </ul>
                                        </nav>
                                        <!-- main menu navbar end -->
                                    </div>
                                </div>
                                <!-- main menu area end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header start -->

    <!-- mobile header start -->
    <!-- mobile header start -->
    <div class="mobile-header d-lg-none d-md-block sticky black-soft">
        <!--mobile header top start -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="mobile-main-header">
                        <div class="mobile-logo">
                            <a href="index.html">
                                <img src="assets/img/logo/logo.png" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="mobile-menu-toggler">
                            <div class="mini-cart-wrap">
                                <a href="cart.html">
                                    <i class="fa fa-shopping-cart"></i>
                                    <div class="notification">0</div>
                                </a>
                            </div>
                            <button class="mobile-menu-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="category-toggle-wrap">
                        <div class="category-toggle mobile-dev">
                            <i class="ion-android-menu"></i>
                            ALL CATEGORIES
                            <span><i class="fa fa-angle-down"></i></span>
                        </div>
                        <nav class="category-menu">
                            <ul class="categories-list">
                                <li class="menu-item-has-children"><a href="shop.html">Fruits & Vegetables</a>
                                    <!-- Mega Category Menu Start -->
                                    <ul class="category-mega-menu dropdown">
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">Smartphone</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Samsome</a></li>
                                                <li><a href="shop.html">GL Stylus</a></li>
                                                <li><a href="shop.html">Uawei</a></li>
                                                <li><a href="shop.html">Cherry Berry</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">headphone</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Desktop Headphone</a></li>
                                                <li><a href="shop.html">Mobile Headphone</a></li>
                                                <li><a href="shop.html">Wireless Headphone</a></li>
                                                <li><a href="shop.html">LED Headphone</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">accessories</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Power Bank</a></li>
                                                <li><a href="shop.html">Data Cable</a></li>
                                                <li><a href="shop.html">Power Cable</a></li>
                                                <li><a href="shop.html">Battery</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">headphone</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Desktop Headphone</a></li>
                                                <li><a href="shop.html">Mobile Headphone</a></li>
                                                <li><a href="shop.html">Wireless Headphone</a></li>
                                                <li><a href="shop.html">LED Headphone</a></li>
                                            </ul>
                                        </li>
                                    </ul><!-- Mega Category Menu End -->
                                </li>
                                <li class="menu-item-has-children"><a href="shop.html">Fresh Meat</a>
                                    <!-- Mega Category Menu Start -->
                                    <ul class="category-mega-menu dropdown three-column">
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">Smartphone</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Samsome</a></li>
                                                <li><a href="shop.html">GL Stylus</a></li>
                                                <li><a href="shop.html">Uawei</a></li>
                                                <li><a href="shop.html">Cherry Berry</a></li>
                                                <li><a href="shop.html">uPhone</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">headphone</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Desktop Headphone</a></li>
                                                <li><a href="shop.html">Mobile Headphone</a></li>
                                                <li><a href="shop.html">Wireless Headphone</a></li>
                                                <li><a href="shop.html">LED Headphone</a></li>
                                                <li><a href="shop.html">Over-ear</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">accessories</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Power Bank</a></li>
                                                <li><a href="shop.html">Data Cable</a></li>
                                                <li><a href="shop.html">Power Cable</a></li>
                                                <li><a href="shop.html">Battery</a></li>
                                                <li><a href="shop.html">OTG Cable</a></li>
                                            </ul>
                                        </li>
                                    </ul><!-- Mega Category Menu End -->
                                </li>
                                <li class="menu-item-has-children"><a href="shop.html">dairy & eggs</a>
                                    <!-- Mega Category Menu Start -->
                                    <ul class="category-mega-menu dropdown two-column">
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">Smartphone</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Samsome</a></li>
                                                <li><a href="shop.html">GL Stylus</a></li>
                                                <li><a href="shop.html">Uawei</a></li>
                                                <li><a href="shop.html">Cherry Berry</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">headphone</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Desktop Headphone</a></li>
                                                <li><a href="shop.html">Mobile Headphone</a></li>
                                                <li><a href="shop.html">Wireless Headphone</a></li>
                                                <li><a href="shop.html">LED Headphone</a></li>
                                            </ul>
                                        </li>
                                    </ul><!-- Mega Category Menu End -->
                                </li>
                                <li><a href="shop.html">Frozen</a></li>
                                <li><a href="shop.html">Grocery</a></li>
                                <li><a href="shop.html">Kitchenware</a></li>
                                <li><a href="shop.html">Tools</a></li>
                                <li><a href="shop.html">Electronics</a></li>
                                <li><a href="shop.html">Kitchenware</a></li>
                                <li><a href="shop.html">Fashion</a></li>
                                <li><a href="shop.html">Fashion</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile header top start -->
    </div>
    <!-- mobile header end -->
    <!-- mobile header end -->

    <!-- offcanvas mobile menu start -->
    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="fa fa-close"></i>
            </div>

            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Search Here...">
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- search box end -->

                <!-- mobile menu start -->
                <div class="mobile-navigation">

                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="index.html">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home version 01</a></li>
                                    <li><a href="index-2.html">Home version 02</a></li>
                                    <li><a href="index-3.html">Home version 03</a></li>
                                    <li><a href="index-4.html">Home version 04</a></li>
                                    <li><a href="index-5.html">Home version 05</a></li>
                                    <li><a href="index-6.html">Home version 06</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">pages</a>
                                <ul class="megamenu dropdown">
                                    <li class="mega-title menu-item-has-children"><a href="#">column 01</a>
                                        <ul class="dropdown">
                                            <li><a href="shop.html">shop grid left
                                                    sidebar</a></li>
                                            <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                    sidebar</a></li>
                                            <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title menu-item-has-children"><a href="#">column 02</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="product-details-affiliate.html">product
                                                    details
                                                    affiliate</a></li>
                                            <li><a href="product-details-variable.html">product details
                                                    variable</a></li>
                                            <li><a href="product-details-group.html">product details
                                                    group</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title menu-item-has-children"><a href="#">column 03</a>
                                        <ul class="dropdown">
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="compare.html">compare</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title menu-item-has-children"><a href="#">column 04</a>
                                        <ul class="dropdown">
                                            <li><a href="my-account.html">my-account</a></li>
                                            <li><a href="login-register.html">login-register</a></li>
                                            <li><a href="about-us.html">about us</a></li>
                                            <li><a href="contact-us.html">contact us</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">shop</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><a href="#">shop grid layout</a>
                                        <ul class="dropdown">
                                            <li><a href="shop.html">shop grid left sidebar</a></li>
                                            <li><a href="shop-grid-right-sidebar.html">shop grid right sidebar</a></li>
                                            <li><a href="shop-grid-full-3-col.html">shop grid full 3 col</a></li>
                                            <li><a href="shop-grid-full-4-col.html">shop grid full 4 col</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">shop list layout</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                            <li><a href="shop-list-full-width.html">shop list full width</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">products details</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="product-details-affiliate.html">product details affiliate</a></li>
                                            <li><a href="product-details-variable.html">product details variable</a></li>
                                            <li><a href="product-details-group.html">product details group</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                    <li><a href="blog-list-left-sidebar.html">blog list left sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                    <li><a href="blog-list-right-sidebar.html">blog list right sidebar</a></li>
                                    <li><a href="blog-grid-full-width.html">blog grid full width</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="blog-details-left-sidebar.html">blog details left sidebar</a></li>
                                    <li><a href="blog-details-audio.html">blog details audio</a></li>
                                    <li><a href="blog-details-video.html">blog details video</a></li>
                                    <li><a href="blog-details-image.html">blog details image</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact us</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->

                <div class="mobile-settings">
                    <ul class="nav">
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a href="#" class="dropdown-toggle" id="currency" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Currency
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="currency">
                                    <a class="dropdown-item" href="#">$ USD</a>
                                    <a class="dropdown-item" href="#">$ EURO</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a href="#" class="dropdown-toggle" id="myaccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    My Account
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                    <a class="dropdown-item" href="my-account.html">my account</a>
                                    <a class="dropdown-item" href="login-register.html"> login</a>
                                    <a class="dropdown-item" href="login-register.html">register</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <ul>
                            <li><i class="fa fa-mobile"></i>
                                <a href="#">0123456789</a>
                            </li>
                            <li><i class="fa fa-envelope-o"></i>
                                <a href="#">info@yourdomain.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-social-widget">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
    <!-- offcanvas mobile menu end -->
</header>
<!-- end Header Area -->