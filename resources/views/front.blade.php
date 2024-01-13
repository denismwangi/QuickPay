 @extends('layouts.landing')
 @section('content')

    <div class="page-wrapper">

        <header class="header-wrap style1">
           
            <div class="header-bottom">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{url('/')}}">
                            <h3 style="color:;">                            QuickSecurePay
</h3>
                           <!--  <img class="logo-light lazy-image" data-src="" alt="logo" height="65" width="65">
                            <img class="logo-dark lazy-image" data-src="" alt="logo" height="65" width="65"> -->
                        </a>
                        <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                            <div class="menu-close xl-none">
                                <a href="javascript:void(0)"> 
                                   <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                            </div>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="{{url('/')}}" class="nav-link">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#service-wrap" class="nav-link">
                                        For Business
                                    </a>
                                </li>
                            
                                <li class="nav-item">
                                    <a href="{{url('/')}}" class="nav-link">Contact Us</a>
                                </li>
                                
                            
                            </ul>
                            <div class="others-options  lg-none">
                                <div class="header-btn lg-none">
                                    <a href="{{url('get-started')}}" class="btn style1">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="mobile-bar-wrap">
                       
                       
                        <div class="mobile-menu xl-none">
                            <a href="javascript:void(0)"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="search-area">
                    <div class="container">
                        <form action="#">
                            <div class="form-group">
                                <input type="search" placeholder="Search Here" autofocus>
                            </div>
                        </form>
                        <button type="button" class="close-searchbox">
                           <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>


        <section class="hero-wrap style3 bg-squeeze">
           
            <div class="hero-slider-one owl-carousel">
                <div class="hero-slide-item">
                    <div class="container">
                        <div class="row gx-5 align-items-center">
                            <div class="col-md-6">
                                <div class="hero-content" data-speed="0.10" data-revert="true">
                                    <span>TRANSFER MONEY ACROSS BORDERS.</span>
                                    <h1>Start receiving payments in minutes.</h1>
                                    <p>We make international money transfer fast, simple and secure. Whichever method you choose, it only takes a few steps to send money online with us.</p>
                                    <div class="hero-btn" style="display: flex; ">
                                        <a href="{{url('get-started')}}" class="btn style1">Login</a>
                                       
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="hero-img-wrap">
                                    <img src="{{asset('front/images/hero-shape-12.png')}}" alt="Image"
                                        class="hero-shape-five bounce lazy-image">
                                    <img src="{{asset('front/images/hero-shape-12.png')}}" alt="Image"
                                        class="hero-shape-six moveHorizontal lazy-image">
                                    <img src="{{asset('front/images/hero2.png')}}" alt="Image" class="hero-img lazy-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            
            </div>
        </section>


        <section class="why-choose-wrap style1 pb-100 bg-bunting">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="wh-img-wrap">
                            <img class="lazy-image" src="{{asset('front/images/all-devices-black.png')}}" alt="Image">
                            <img class="wh-shape-one bounce lazy-image" src="{{asset('front/images/wh-shape-1.png')}}" alt="Image">
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wh-content">
                            <div class="content-title style1">
                                <span>Why Choose Us</span>
                                <h2>Get World Class &amp; Fastest Online Payment Service</h2>
                                <p>We have the easiest and simplest service in the market to help you get started on receiving mobile payments online.</p>
                            </div>
                            <div class="feature-item-wrap">
                                <div class="feature-item">
                                    <span class="feature-icon">
<i class="fa fa-check" aria-hidden="true"></i>
                                    </span>
                                    <div class="feature-text">
                                        <h3>Low Costing</h3>
                                        <p>Our payment service fee is the most affordable in the market, making it easy for individuals and business entities to get paid quickly.</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">
<i class="fa fa-check" aria-hidden="true"></i>
                                    </span>
                                    <div class="feature-text">
                                        <h3>Safe &amp; Secure</h3>
                                        <p>We use industry best standard security to encrypt and transmit payment details. Security is in our DNA.</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-icon">
<i class="fa fa-check" aria-hidden="true"></i>
                                    </span>
                                    <div class="feature-text">
                                        <h3>Live Support</h3>
                                        <p>We have the best custmer support you will ever find, we are available 24/7 to assist our customers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="service-wrap style3 ptb-100 bg-rock" id="service-wrap">
            <div class="container">
               
                <div class="section-title style1 text-center mb-40">
                    <span>What We Offer</span>
                    <h2 class="text-white">Our Services And Features</h2>
                </div>
                <div class="row gx-5 align-items-center">
                    <div class="col-md-6">
                        <div class="service-card style3">
                            <span class="service-icon">
<i class="fa fa-money" aria-hidden="true"></i>
                            </span>
                            <div class="service-info">
                                <h3><a href="#!">C2B Payments</a></h3>
                                <p>Accept MPESA mobile payments to your Bank from your customers online or offline in a simple and secure manner.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="service-card style3">
                            <span class="service-icon">
<i class="fa fa-money" aria-hidden="true"></i>
                            </span>
                            <div class="service-info">
                                <h3><a href="#!">Payment Notifications</a></h3>
                                <p>Receive an SMS,whatsapp and email notification any time a transaction happens on your account, to keep you updated at all times.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-card style3">
                            <span class="service-icon">
<i class="fa fa-money" aria-hidden="true"></i>
                            </span>
                            <div class="service-info">
                                <h3><a href="#!">Appreciate Your Customers</a></h3>
                                <p>With our platform, you can send a customized message to your customers to appreciate them after making payments.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-card style3">
                            <span class="service-icon">
<i class="fa fa-money" aria-hidden="true"></i>
                            </span>
                            <div class="service-info">
                                <h3><a href="#!">Customers List</a></h3>
                                <p>We create a list of your customer details for you, you can use this details to contact or promote your products to your customers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-card style3">
                            <span class="service-icon">
<i class="fa fa-money" aria-hidden="true"></i>
                            </span>
                            <div class="service-info">
                                <h3><a href="#!">Simple to use API</a></h3>
                                <p>For the developers we have not left you behind, use our simple API to integrate to your amazing projects and websites.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-card style3">
                            <span class="service-icon">
<i class="fa fa-money" aria-hidden="true"></i>
                            </span>
                            <div class="service-info">
                                <h3><a href="#!">Quick Invoicing</a></h3>
                                <p>With SPS you can easily and quickly send invoices to your clients and get paid using MPESA to your Bank, paybill or till.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-card style3">
                            <span class="service-icon">
<i class="fa fa-money" aria-hidden="true"></i>
                            </span>
                            <div class="service-info">
                                <h3><a href="#!">Subscriptions</a></h3>
                                <p>Have clients that pay you on a subscription basis? We got you covered you can easily create plans and bill your clients automatically.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-card style3">
                            <span class="service-icon">
<i class="fa fa-money" aria-hidden="true"></i>
                            </span>
                            <div class="service-info">
                                <h3><a href="#!">Shopify & WooCommerce Ready</a></h3>
                                <p>Integrate our gateway to your shopify and woocommerce stores easily with our ready plugins.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>


        <section class="shopping-wrap ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12 order-lg-1 order-2">
                        <div class="shopping-content">
                            <img src="{{asset('front/images/shopping-shape-1.png')}}" alt="Image"
                                class="shopping-shape-one moveHorizontal lazy-image">
                            <img src="{{asset('front/images/shopping-shape-2.png')}}" alt="Image"
                                class="shopping-shape-two bounce lazy-image">
                            <div class="content-title style1 ">
                                <span>Simplify Online Payments</span>
                                <h2>Individuals And Businesses Love Our Services</h2>
                                <p>Quicksecurepay is the ultimate online payment solution for businesses and individuals. With Quicksecurepay, you get an online payment link (lipwa link) to share with anyone, set up an online store, and gain rich business insights through comprehensive analytics. Quicksecurepay also enables you to make mobile money payments to anyone, anywhere.</p>
                            </div>
                            <ul class="content-feature-list list-style">
                                <li><i class="ri-check-double-line"></i>Quick Setup.</li>
                                <li><i class="ri-check-double-line"></i>24/7 Customer Support.</li>
                                <li><i class="ri-check-double-line"></i>Get Paid Easily
                                </li>
                            </ul>
                            <a href="" class="btn style1">Signup Today</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-2 order-1">
                        <div class="shopping-img-wrap">
                            <img class="lazy-image" src="{{asset('front/images/app-download-screen.png')}}" alt="Image">
                            <img class="lazy-image shopping-shape-three" src="{{asset('front/images/shopping-shape-3.png')}}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        


        <section class="app-wrap  ptb-100 bg-rock">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="app-content sm-center">
                            <div class="content-title style2">
                                <h2>You Can Find All Things You Need In Our App</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 text-md-end sm-center">
                        <div class="app-btn">
                            <a href="https://play.google.com/store/apps"><img class="lazy-image" src="{{asset('front/images/play-store.png')}}"
                                    alt="Image"></a>
                            <a href="https://www.apple.com/app-store/"><img class="lazy-image" src="{{asset('front/images/apple-store.png')}}"
                                    alt="Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="goal-wrap ptb-100">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="goal-img-wrap">
                            <img src="{{asset('front/images/goal-shape-1.png')}}" alt="Image" class="goal-shape-three bounce lazy-image">
                            <img src="{{asset('front/images/goal-shape-2.png')}}" alt="Image" class="goal-shape-one lazy-image">
                            <img src="{{asset('front/images/goal-shape-3.png')}}" alt="Image" class="goal-shape-two lazy-image">
                            <img class="lazy-image" src="{{asset('front/images/goal1.jpg')}}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="goal-content">
                            <div class="content-title style1">
                                <span>Goal Setting</span>
                                <h2>Collect And Track Goal Payments Online</h2>
                                <p>If you are looking at collecting funds for your chama, harambee, charity support, donation or whatever goal you have. Quicksecurepay got you. easily create a goal and get a link to share on your social media or website to get paid quickly.</p>
                            </div>
                            <ul class="content-feature-list style1 list-style">
                                <li><span><i class="flaticon-tick"></i></span>Easy to create</li>
                                <li><span><i class="flaticon-tick"></i></span>Track goal payments made</li>
                                <li><span><i class="flaticon-tick"></i></span>Appreciate contributors</li>
                                <li><span><i class="flaticon-tick"></i></span>Simple link to get paid</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer class="footer-wrap bg-rock">
            <div class="container">
               
                <div class="row pt-100 pb-75">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <a href="" class="footer-logo">
                                <h3 style="color: #fff;">                                QuickSecurePay
</h3>
                              <!--   <img class="lazy-image" data-src="" alt="Image" height="120" width="120"> -->
                            </a>
                            <p class="comp-desc">
                                We make international money transfer fast, simple and secure. Whichever method you choose, it only takes a few steps to send money online with us.
                            </p>
                            <div class="social-link">
                                <ul class="social-profile list-style style1">
                                    <li>
                                        <a target="_blank" href="{{url('/')}}">
                                           
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{url('/')}}">
                                           
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{url('/')}}">
                                           
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Our Company</h3>
                            <ul class="footer-menu list-style">
                                <li>
                                    <a href="{{url('/')}}">
                                      
                                        Company &amp; Team
                                    </a>
                                </li>
                               
                               
                                <li>
                                    <a href="{{url('/')}}">
                                       
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Products</h3>
                            <ul class="footer-menu list-style">
                                <li>
                                    <a href="#!">
                                        
                                        Online Payment
                                    </a>
                                </li>
                               
                               <li>
                                    <a href="#!">
                                        
                                        Online Shopping
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="#!">
                                    
                                        Receive Money
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Subscribe</h3>
                            <p class="newsletter-text">Get timely updates whenever they happen from our side.</p>
                            <form action="#" class="newsletter-form">
                                <input type="email" placeholder="Your Email">
                                <button type="button">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                <p>&copy
                    <script data-cfasync="false" src=""></script><script>document.write(new Date().getFullYear())</script> Quicksecurepay. All Rights Reserved By <a
                        href="" target="_blank">Quicksecurepay</a>
                </p>
            </div>
        </footer>

    </div>


    <a href="javascript:void(0)" class="back-to-top bounce"><i class="fa fa-arrow-up" aria-hidden="true"></i>
</a>
  @endsection
