@extends('layouts.index')
@section('content')


<!--====== PRELOADER PART START ======-->

<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PRELOADER PART ENDS ======-->

<!--====== HEADER PART START ======-->
@include('client.navbar')


<!--====== HEADER PART ENDS ======-->

<!--====== HERO PART START ======-->
<section id="home" class="hero-area bg_cover">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-lg-9 col-xl-9 col-md-10">
                <div class="text-center hero-content">
            

                </div>
            </div>
        </div>
    </div>
</section>
<!--====== HERO PART END ======-->

<!--====== SEARCH PART START ======-->
<div class="search-area">
    <div class="container">
        <div class="search-wrapper">
            <form action="#">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-5 col-10">
                        <div class="search-input">
                            <label for="keyword"><i class="lni lni-search-alt theme-color"></i></label>
                            <input type="text" name="keyword" id="keyword" placeholder="Product keyword">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5 col-10">
                        <div class="search-input">
                            <label for="category"><i class="lni lni-grid-alt theme-color"></i></label>
                            <select name="category" id="category">
                                <option value="none" selected disabled>Categories</option>
                                <option value="none">Vehicle</option>
                            </select>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5 col-10">
                        <div class="search-input">
                            <label for="location"><i class="lni lni-map-marker theme-color"></i></label>
                            <select name="location" id="location">
                                <option value="none" selected disabled>Locations</option>
                                <option value="none">New York</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-5 col-10">
                        <div class="search-btn">
                            <button class="main-btn btn-hover">Search <i class="lni lni-search-alt"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--====== SEARCH PART END ======-->

<!--====== CATEGORY LIST PART START ======-->
<section class="category-list-area pt-130">
    <div class="container">
        <div class="category-list-wrapper">
            <div class="category-list-item">
                <a href="category.html">
                    <div class="icon">
                        <i class="lni lni-car"></i>
                    </div>
                    <h3>Vehicles</h3>
                </a>
            </div>
        </div>
    </div>
</section>
<!--====== CATEGORY LIST PART END ======-->

<!--====== LATEST PRODUCT PART START ======-->
<section class="latest-product-area pt-130 pb-110">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-xl-6 col-lg-7 col-md-10">
                <div class="text-center section-title mb-60">
                    <h1>Nouveaux produits</h1>
                    <p>.</p>
                </div>
            </div>
        </div>

        <div class="row">
            
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="single-product">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="assets/images/product/l-product-1.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a href="javascript:void(0)"><i class="lni lni-heart"></i></a>
                            <a href="javascript:void(0)" class="share"><i class="lni lni-share"></i></a>
                        </div>
                    </div>

                    <div class="product-content">
                        <h3 class="name"><a href="product-details.html">Apple iPhone x</a></h3>
                        <span class="update">Last Update: 5 hours ago</span>
                        <ul class="address">
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-calendar"></i> 20 June, 2023</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-map-marker"></i> Canada</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-user"></i> Stifen Jon</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-package"></i> Used</a>
                            </li>
                        </ul>
                        <div class="product-bottom">
                            <h3 class="price">$120.99</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--====== LATEST PRODUCT PART ENDS ======-->

<!--====== VIDEO PART START ======-->
<section class="video-area">
    <div class="video-wrapper img-bg">
        <div class="container">
            <div class="text-center video-content">
                <h1 class="text-white mb-60">Learn More About ClassiList</h1>
                <a href="#" class="glightbox video-btn"><i class="lni lni-play"></i></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="count-up-wrapper">
            <div class="row">

                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="icon">
                            <i class="lni lni-layers"></i>
                        </div>
                        <span class="count">34864</span>
                        <span>Regular Ads</span>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="icon">
                            <i class="lni lni-map-marker"></i>
                        </div>
                        <span class="count">867</span>
                        <span>Locations</span>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="icon">
                            <i class="lni lni-users"></i>
                        </div>
                        <span class="count">56743</span>
                        <span>Regular Members</span>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="icon">
                            <i class="lni lni-briefcase"></i>
                        </div>
                        <span class="count">4583</span>
                        <span>Premium Ads</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--====== VIDEO PART ENDS ======-->

<!--====== SERVICE PART START ======-->

<!--====== SERVICE PART ENDS ======-->

<!--====== FEATURE PRODUCT PART START ======-->
<section class="feature-product-area bg_cover">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-lg-6 col-md-10">
                <div class="text-center section-title mb-60">
                    <h1>Featured Products</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>

        <div class="product-carousel-wrapper">
            <div class="row feature-product-carousel">
            
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img src="assets/images/product/l-product-1.jpg" alt="">
                        </div>
            
                        <div class="product-content">
                            <div class="rating-wrapper">
                                <h5 class="price theme-color">$120.99</h5>
                                <div class="rating">
                                    <span>2 Review</span>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star"></i>
                                </div>
                            </div>
                            <h3 class="name"><a href="product-details.html">Apple iPhone x</a></h3>
                            <p class="sort-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam.</p>
                            <div class="product-bottom">
                                <a href="javascript:void(0)" class="address-link"><i class="lni lni-map-marker"></i> United State of America</a>
                                <span class="theme-color"><i class="lni lni-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</section>
<!--====== FEATURE PRODUCT PART ENDS ======-->

<!--====== PRICING PRODUCT PART START ======-
<section class="pricing-area pt-140 pb-140">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-xl-6 col-lg-7 col-md-10">
                <div class="text-center section-title mb-90">
                    <h1>Select a Package</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            
            <div class="col-lg-4 col-md-8 col-sm-10 col-11">
                <div class="single-pricing">
                    <div class="icon">
                        <i class="lni lni-layers"></i>
                    </div>
                    <h3 class="name">Basic Pack</h3>
                    <ul>
                        <li>Free ad posting</li>
                        <li>6 Featured ads availability</li>
                        <li>For 30 days</li>
                        <li>100% Secure!</li>
                    </ul>
                    <h2 class="price"> <sup>$</sup> 20.00</h2>
                    <span class="time">Monthly</span>

                    <a href="javascript:void(0)" class="main-btn btn-hover">Buy Now</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-8 col-sm-10 col-11">
                <div class="single-pricing standard">
                    <div class="icon">
                        <i class="lni lni-leaf"></i>
                    </div>
                    <h3 class="name">Standard Pack</h3>
                    <ul>
                        <li>Free ad posting</li>
                        <li>9 Featured ads availability</li>
                        <li>For 30 days</li>
                        <li>100% Secure!</li>
                    </ul>
                    <h2 class="price"> <sup>$</sup> 29.00</h2>
                    <span class="time">Monthly</span>

                    <a href="javascript:void(0)" class="main-btn btn-hover">Buy Now</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-8 col-sm-10 col-11">
                <div class="single-pricing">
                    <div class="icon">
                        <i class="lni lni-diamond-alt"></i>
                    </div>
                    <h3 class="name">Premium Pack</h3>
                    <ul>
                        <li>Free ad posting</li>
                        <li>20 Featured ads availability</li>
                        <li>For 30 days</li>
                        <li>100% Secure!</li>
                    </ul>
                    <h2 class="price"> <sup>$</sup> 49.00</h2>
                    <span class="time">Monthly</span>

                    <a href="javascript:void(0)" class="main-btn btn-hover">Buy Now</a>
                </div>
            </div>

        </div>
    </div>
</section>
-====== PRICING PRODUCT PART ENDS ======-->

<!--====== SUBSCRIBE PRODUCT PART START ======-->
<section class="subscribe-area">
    <div class="container">
        <div class="subscribe-wrapper bg_cover">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="subscribe-content section-title">
                        <h1 class="text-white">Subscribe Our Newsletter</h1>
                        <p class="text-white">Buy and sell everything from used cars to mobile phones and computer or search for property.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="subscribe-form-wrapper">
                        <form action="#" class="subscribe-form">
                            <input type="email" name="sub-email" placeholder="Enter your Email">
                            <button><i class="lni lni-telegram-original"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== SUBSCRIBE PRODUCT PART ENDS ======-->

            <div class="mx-auto col-lg-9 col-xl-9 col-md-10 pt-60 mb-60">
  

<!--====== FOOTER PART START ======-->
<footer class="footer-area">
    <div class="widget-wrapper">
        <div class="map-img">
            <img src="assets/images/footer/map-img.svg" alt="">
        </div>
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-md-7">
                    <div class="footer-widget about">
                        <a href="index.html" class="d-inline-block mb-30">
                            <img src="assets/images/logo/logo.svg" alt="">
                        </a>
                        <p class="text-white mb-25">Buy And Sell Everything From Used Cars To Mobile Phones And Computers, Search For Property, Jobs And More</p>
                        <ul class="social">
                            <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4 order-md-2 order-xl-1 col-sm-6">
                    <div class="footer-widget">
                        <h4>Quick Link</h4>
                        <ul class="link">
                            <li><a href="javascript:void(0)">Home</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4 order-md-3 order-xl-2 col-sm-6">
                    <div class="footer-widget">
                        <h4>Support</h4>
                        <ul class="link">
                            <li><a href="javascript:void(0)">Live Chat</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4 order-md-4 order-xl-3 col-sm-6">
                    <div class="footer-widget">
                        <h4>Information</h4>
                        <ul class="link">
                            <li><a href="javascript:void(0)">Company</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-md-5 order-md-1 order-xl-4 col-sm-6">
                    <div class="footer-widget">
                        <h4>Contact Us</h4>
                        <ul>
                            <li>
                                <span>Phone:</span>
                                0345983672937
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="copy-right">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <p>Designed & Developed By <a href="https://graygrids.com/" rel="nofollow" target="_blank">GrayGrids</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== FOOTER PART ENDS ======-->

@endsection