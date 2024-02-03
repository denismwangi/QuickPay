 @extends('layouts.landing')
 @section('content')
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <h2 style="color: #FFF;">Tyronpay</h2>
                                <!-- <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a> -->
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="{{url('/')}}">home</a></li>
                                        <li><a href="{{url('/')}}">For Business</a></li>                                     
                                        <li><a href="{{url('/')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a  href="{{url('/get-started')}}">Login</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-md-6">
                        <div class="slider_text ">
                            <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s" >Start Receiving<br>
                                Payments In Minutes.</h3>
                            <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">Transfer Money Across Borders</p>
                            <div class="video_service_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                                <a href="{{url('/get-started')}}" class="boxed-btn3">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="phone_thumb wow fadeInDown" data-wow-duration="1.1s" data-wow-delay=".2s">
                            <img src="{{url('front/img/raf-header-img.png.webp')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                        <h3>Get World Class & Fastest <br>
                                Online Payment Service </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single_service text-center wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
                        <div class="thumb">
                                <img src="{{url('front/img/icon/2.svg')}}" alt="">
                        </div>
                        <h3>Safe & Secure <br>
                               </h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                        <div class="single_service text-center wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">
                                <div class="thumb">
                                        <img src="{{url('front/img/icon/1.svg')}}" alt="">
                                </div>
                                <h3>Low Costing</h3>
                            </div>
                </div>
                <div class="col-lg-4 col-md-4">

                            <div class="single_service text-center wow fadeInUp " data-wow-duration=".8s" data-wow-delay=".6s">
                                <div class="thumb">
                                        <img src="{{url('front/img/icon/3.svg')}}" alt="">
                                </div>
                                <h3>Live Support</h3>
                            </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service_area_2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-duration=".4s" data-wow-delay=".5s">
                    <div class="man_thumb">
                        <img src="{{url('front/img/ilstrator_img/man_walk.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-6 ">
                    <div class="mobile_screen wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".5s">
                        <img src="{{url('front/img/ilstrator_img/mobile_screen.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="service_content_wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single_service  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                            <span>01</span>
                            <h3>Sign Up for free</h3>
                            <p>Sign up for free today and empower your transactions with seamless, secure, and efficient processes.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single_service  wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
                            <span>02</span>
                            <h3>Make your profile</h3>
                            <p>Making your profile is not just a step, but a statement—an assertion of control and customization in your financial journey.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4  wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">
                        <div class="single_service">
                            <span>03</span>
                            <h3>Enjoy the app</h3>
                            <p>Maximize control, streamline payments – Enjoy the app's financial brilliance!
.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="features_area ">
        <div class="container">
            <div class="features_main_wrap">
                    <div class="row  align-items-center">
                            <div class="col-xl-5 col-lg-5 col-md-6">
                                <div class="features_info2">
                                    <h3>Individuals And Businesses Love Our Services</h3>
                                    <p>Tyronpay is the ultimate online payment solution for businesses and individuals. With Tyronpay, you get an online payment link to share with anyone, set up an online store, and gain rich business insights through comprehensive analytics. Tyronpay also enables you to make mobile money payments to anyone, anywhere.</p>
                                    <div class="about_btn">
                                        <a class="boxed-btn4"href="#">Download Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 offset-xl-1 offset-lg-1 col-md-6 ">
                                <div class="about_draw wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">
                                    <img src="{{url('front/img/ilstrator_img/draw.png')}}" alt="">
                                </div>
                            </div>
                    </div>
            </div>
            <div class="features_main_wrap">
                    <div class="row  align-items-center">
                            <div class="col-xl-5 col-lg-5 offset-xl-1 offset-lg-1 col-md-6">
                                <div class="about_image wow fadeInLeft" data-wow-duration=".4s" data-wow-delay=".3s">
                                    <img src="{{url('front/img/ilstrator_img/phone.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="features_info">
                                    <h3 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" >Collect And Track Goal Payments Online <br>
                                            management</h3>
                                    <p class="wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">If you are looking at collecting funds for your chama, harambee, charity support, donation or whatever goal you have. Tyronpay got you. easily create a goal and get a link to share on your social media or website to get paid quickly.</p>
                                    <ul>
                                        <li class="wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s" > Easy to create. </li>
                                        <li class="wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".6s" >Track goal payments made. </li>
                                        <li class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s" > Simple link to get paid.</li>
                                    </ul>
            
                                    <div class="about_btn wow fadeInUp" data-wow-duration=".10s" data-wow-delay=".8s" >
                                        <a class="boxed-btn4" href="#">Download Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
   
   
    <div class="productivity_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-12 col-lg-6">
                    <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">You Can Find All Things You Need In Our App</h3>
                </div>
                <div class="col-xl-5 col-md-12 col-lg-6">
                    <div class="app_download wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
                        <a href="#" >
                                <img src="{{url('front/img/ilstrator/app.svg')}}" alt="">
                        </a>
                        <a href="#">
                                <img src="{{url('front/img/ilstrator/play.svg')}}" alt="">
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <h3 style="color: #FFF !important;">Tyronpay</h3>
                            
                            </div>
                            <p>
                               We make international money transfer fast, simple and secure. Whichever method you choose, it only takes a few steps to send money online with us..
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Services
                            </h3>
                            <ul>
                                <li><a href="#">Online Payment</a></li>
                                <li><a href="#">Online Shopping</a></li>
                                <li><a href="#">Receive Money</a></li>
                               
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">Company & Team</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Downloads
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Download from Apple Store

                                    </a>
                                </li>
                                <li><a href="#">
                                        Download from Play Store
                                    </a>
                                </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved Tyronpay
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  @endsection
