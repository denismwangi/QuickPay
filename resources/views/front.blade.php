 @extends('layouts.landing')
 @section('content')
<header class="main-header-area">



<div class="navbar-area">
<div class="main-responsive-nav">
<div class="container">
<div class="main-responsive-menu">
<div class="logo">
<a href="{{url('/')}}">
    <h4>Trustywalletexpress</h4>
</a>
</div>
</div>
</div>
</div>
<div class="main-navbar">
<div class="container-fluid">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="">
    <h3>Trustywalletexpress</h3>
</a>
<div class="navbar-list">
<ul>
<li><a href="{{url('/')}}">Personal</a></li>
<li><a href="{{url('/')}}">Business</a></li>
</ul>
</div>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a href="{{url('/')}}" class="nav-link">Money Transfer</a>
</li>
<li class="nav-item">
<a href="{{url('/')}}" class="nav-link">About Us</a>
</li>


<li class="nav-item">
<a href="{{url('/')}}" class="nav-link">Contact</a>
</li>
</ul>
<div class="others-options d-flex align-items-center">
<div class="option-item">
<a href="{{url('get-started')}}" class="optional-btn">Log In</a>
</div>
<div class="option-item">
<a href="{{url('get-started')}}" class="default-btn">Register Now</a>
</div>
</div>
</div>
</nav>
</div>
</div>
<div class="others-option-for-responsive">
<div class="container">
<div class="dot-menu">
<div class="inner">
<div class="circle circle-one"></div>
<div class="circle circle-two"></div>
<div class="circle circle-three"></div>
</div>
</div>
<div class="container">
<div class="option-inner">
<div class="others-options d-flex align-items-center">
<div class="option-item">
<a href="{{url('get-started')}}" class="optional-btn">Log In</a>
</div>
<div class="option-item">
<a href="{{url('get-started')}}" class="default-btn">Register Now</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</header>


<div class="main-banner-area">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-4 col-md-12" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<div class="main-banner-content">
<span>Simple. Quick. Secure.</span>
<h1>Transfer Money Across World In Real Time</h1>
<p>An international account to send money to over 60 countries around the world, up to 7x cheaper.</p>
<div class="banner-btn">
<a href="{{url('get-started')}}" class="default-btn">Send Now</a>
<a href="{{url('get-started')}}" class="default-btn">Receive  Now</a>

</div>
<ul class="trust-content">
<li>
<img src="{{asset('front/images/main-banner/line-graph.png')}}" alt="image">
<span>Over 10 Million Customers</span>
</li>
<li>
<img src="{{asset('front/images/main-banner/diamond.png')}}" alt="image">
<span>Fast And Hassle-Free</span>
</li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="main-banner-image" data-speed="0.05" data-revert="true">
<img src="{{asset('front/images/main-banner/banner-women.png')}}" alt="image" data-aos="fade-down" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
</div>
</div>
<div class="col-lg-4 col-md-12" data-aos="fade-left" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<form class="money-transfer-form">
<div class="amount-currency-total-content">
<span>First Five Transfer Is Fee-Free</span>
<h3>1 GBP = 5.014920 PLN</h3>
</div>
<div class="money-transfer-content">
<div class="form-group">
<label>You Send</label>
<input type="text" class="form-control" autocomplete="off" value="25,040">
<div class="dropdown amount-currency-select">
<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
<img src="{{asset('front/images/currency-flag/GBP.png')}}" alt="flag">
<span class="currency-name"></span>
</button>
<div class="dropdown-menu currency-dropdown-menu">
<a class="dropdown-item" href="#">
<img src="{{asset('front/images/currency-flag/GBP.png')}}" alt="flag">
GBP
</a>
<a class="dropdown-item" href="#">
<img src="{{asset('front/images/currency-flag/EUR.png')}}" alt="flag">
EUR
</a>
<a class="dropdown-item" href="#">
<img src="asse{{asset('frontts/images/currency-flag/AED.png')}}" alt="flag">
AED
</a>
<a class="dropdown-item" href="#">
<img src="{{asset('front/images/currency-flag/AUD.png')}}" alt="flag">
AUD
</a>
<a class="dropdown-item" href="#">
<img src="{{asset('front/images/currency-flag/CAD.png')}}" alt="flag">
CAD
</a>
<a class="dropdown-item" href="#">
<img src="assets/images/currency-flag/JPY.png')}}" alt="flag">
JPY
</a>
<a class="dropdown-item" href="#">
<img src="{{asset('front/images/currency-flag/MYR.png')}}" alt="flag">
MYR
</a>
<a class="dropdown-item" href="#">
<img src="{{asset('front/images/currency-flag/NZD.png')}}" alt="flag">
NZD
</a>
<a class="dropdown-item" href="#">
<img src="{{asset('front/images/currency-flag/TRY.png')}}" alt="flag">
TRY
</a>
<a class="dropdown-item" href="#">
<img src="{{asset('front/images/currency-flag/USD.png')}}" alt="flag">
USD
</a>
</div>
</div>
</div>
<ul class="amount-currency-info">
<li class="d-flex justify-content-between align-items-center">
<div class="info-icon">
<i class="ri-subtract-line"></i>
</div>
<div class="info-left">
<b>22.07 GBP</b>
</div>
<div class="info-right">
<div class="dropdown amount-currency-select">
<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
<span class="currency-name"></span>
</button>
<div class="dropdown-menu currency-dropdown-menu">
<a class="dropdown-item" href="#">Low Cost Transfer</a>
<a class="dropdown-item" href="#">Easy Transfer</a>
<a class="dropdown-item" href="#">Advanced Transfer</a>
</div>
</div>
<span class="fee-text">fee</span>
</div>
</li>
<li class="d-flex justify-content-between align-items-center">
<div class="info-icon">
<i class="ri-pause-line"></i>
</div>
<div class="info-left">
<span>63,1547 GBP</span>
</div>
<div class="info-right">
<span>Ammount Will Convert</span>
</div>
</li>
<li class="d-flex justify-content-between align-items-center">
<div class="info-icon">
<i class="ri-close-fill"></i>
</div>
<div class="info-left">
<strong>1.0539874 <i class="flaticon-graph"></i></strong>
</div>
<div class="info-right">
<span>Guaranted Rate (4 hrs)</span>
</div>
</li>
</ul>
<div class="form-group">
<label>Recipient Gets</label>
<input type="text" class="form-control" autocomplete="off" value="14,02433.25">
<div class="dropdown amount-currency-select">
<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
<img src="assets/images/currency-flag/EUR.png" alt="flag">
<span class="currency-name"></span>
</button>
<div class="dropdown-menu currency-dropdown-menu">
<a class="dropdown-item" href="#">
<img src="assets/images/currency-flag/EUR.png" alt="flag">
EUR
</a>
<a class="dropdown-item" href="#">
<img src="assets/images/currency-flag/GBP.png" alt="flag">
GBP
</a>
<a class="dropdown-item" href="#">
<img src="assets/images/currency-flag/AED.png" alt="flag">
AED
</a>
<a class="dropdown-item" href="#">
<img src="assets/images/currency-flag/AUD.png" alt="flag">
AUD
</a>
<a class="dropdown-item" href="#">
<img src="assets/images/currency-flag/CAD.png" alt="flag">
CAD
</a>
<a class="dropdown-item" href="#">
<img src="assets/images/currency-flag/JPY.png" alt="flag">
JPY
</a>
<a class="dropdown-item" href="#">
<img src="assets/images/currency-flag/MYR.png" alt="flag">
MYR
</a>
<a class="dropdown-item" href="#">
<img src="assets/images/currency-flag/NZD.png" alt="flag">
NZD
</a>
<a class="dropdown-item" href="#">
<img src="assets/images/currency-flag/TRY.png" alt="flag">
TRY
</a>
<a class="dropdown-item" href="#">
<img src="assets/images/currency-flag/USD.png" alt="flag">
USD
</a>
</div>
</div>
<div class="lock-icon">
<i class="ri-lock-line"></i>
</div>
</div>
<div class="amount-delivery-time">
<span>Delivery Time: <b>Instant</b></span>
</div>
<ul class="amount-btn-group">
<li>
<a href="{{url('/')}}" class="default-btn">Compare Price</a>
</li>
<li>
    <a  class="optional-btn" href="{{url('get-started')}}">Get Started</a>
</li>
</ul>
</div>
</form>
</div>
</div>
</div>
<div class="main-banner-shape" data-speed="0.08" data-revert="true">
<img src="{{asset('front/images/main-banner/shape-1.png')}}" alt="image">
</div>
<div class="main-banner-shape-2" data-speed="0.08" data-revert="true">
<img src="{{asset('front/images/main-banner/shape-2.png')}}" alt="image">
</div>
</div>



</div>


<div class="why-choose-us-area ptb-100">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-12">
<div class="why-choose-us-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<span>Why Choose Us</span>
<h3>Moving And Living Abroad Just Got Simpler Get Paid Like A Local</h3>
<p>With Trustywalletexpress, you get an online payment link to share with anyone, set up an online store, and gain rich business insights through comprehensive analytics. Trustywalletexpress also enables you to make mobile money payments to anyone, anywhere.</p>
<ul class="choose-us-list">
<li>
<i class="ri-checkbox-circle-line"></i>
Send money cheaper and easier than old-school banks.
</li>
<li>
<i class="ri-checkbox-circle-line"></i>
Spend abroad without the hidden fees.
</li>
<li>
<i class="ri-checkbox-circle-line"></i>
Move money between countries for salary & more.
</li>
</ul>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="why-choose-us-image">
<div class="row align-items-center">
<div class="col-lg-6 col-sm-6">
<div class="choose-image" data-aos="fade-down" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<img src="{{asset('front/images/why-choose-us/choose-1.jpg')}}" alt="image">
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="choose-image mb-25" data-aos="fade-left" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<img src="{{asset('front/images/why-choose-us/choose-2.jpg')}}" alt="image">
</div>
<div class="choose-image" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<img src="{{asset('front/images/why-choose-us/choose-3.jpg')}}" alt="image">
</div>
</div>
</div>
<div class="choose-shape" data-speed="0.08" data-revert="true">
<img src="{{asset('front/images/why-choose-us/shape-1.png')}}" alt="image">
</div>
<div class="choose-shape-2" data-speed="0.08" data-revert="true">
<img src="{{asset('front/images/why-choose-us/shape-2.png')}}" alt="image">
</div>
</div>
</div>
</div>
</div>
</div>


<div class="compare-pricing-area pb-100">
<div class="container">
<div class="section-title">
<span>Compare Our Pricing</span>
<h2>We Charge As Little As Possible. No Subscription Fee</h2>
</div>
<div class="compare-pricing-table table-responsive">
<table class="table table-bordered">
<thead>
<tr>
<th scope="col">Sending 1,000.00 GBP With</th>
<th scope="col" class="bg-2A3F65"><img src="{{asset('front/images/compare-pricing/compare-1.png')}}" alt="image"></th>
<th scope="col"><img src="{{asset('front/images/compare-pricing/compare-2.png')}}" alt="image"></th>
<th scope="col"><img src="{{asset('front/images/compare-pricing/compare-3.png')}}" alt="image"></th>
<th scope="col"><img src="{{asset('front/images/compare-pricing/compare-4.png')}}" alt="image"></th>
<th scope="col"><img src="{{asset('front/images/compare-pricing/compare-5.png')}}" alt="image"></th>
</tr>
</thead>
<tbody>
<tr class="bg-F7F7F7">
<td>
Recipient Gets
<span>(Total after fees)</span>
</td>
<td class="bg-2A3F65 text-center">
<b>1,163.98 EUR</b>
<span class="color-0FC9BB">Save up to 37.14 EUR</span>
</td>
<td class="text-center">
<b>1,163.98 EUR</b>
<span class="color-FD6E5C">-81.024 EUR</span>
</td>
<td class="text-center">
<b>1,163.98 EUR</b>
<span class="color-FD6E5C">-81.024 EUR</span>
</td>
<td class="text-center">
<b>1,163.98 EUR</b>
<span class="color-FD6E5C">-81.024 EUR</span>
</td>
<td class="text-center">
<b>1,163.98 EUR</b>
<span class="color-FD6E5C">-81.024 EUR</span>
</td>
</tr>
<tr>
<td>Transfer Fee</td>
<td class="bg-2A3F65 text-center">
1.0539874
<span class="color-fff">(First 5 fee-free)</span>
</td>
<td class="text-center color-009286">1.0539874</td>
<td class="text-center color-009286">1.0539874</td>
<td class="text-center color-009286">1.0539874</td>
<td class="text-center color-009286">1.0539874</td>
</tr>
<tr class="bg-F7F7F7">
<td>
Exchange Rate
<span>(1 GBP → EUR)</span>
</td>
<td class="bg-2A3F65 text-center">
5.026
<span class="color-fff">Mid-market rate</span>
</td>
<td class="text-center color-5D7079">5.026</td>
<td class="text-center color-5D7079">5.026</td>
<td class="text-center color-5D7079">5.026</td>
<td class="text-center color-5D7079">5.026</td>
</tr>
<tr>
<td>Total Cost</td>
<td class="bg-2A3F65 text-center">
5.026
</td>
<td class="text-center color-90006F">5.026</td>
<td class="text-center color-90006F">5.026</td>
<td class="text-center color-90006F">5.026</td>
<td class="text-center color-90006F">5.026</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>


<div class="security-area ptb-100">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-12">
<div class="security-image">
<div class="row align-items-center">
<div class="col-lg-6 col-sm-6">
<div class="security-wrap" data-aos="fade-down" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<img src="{{asset('front/images/security/security-1.jpg')}}" alt="image">
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="security-wrap mb-25" data-aos="fade-left" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<img src="{{asset('front/images/security/security-2.jpg')}}" alt="image">
</div>
<div class="security-wrap" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<img src="{{asset('front/images/security/security-3.jpg')}}" alt="image">
</div>
</div>
</div>
<div class="security-shape" data-speed="0.08" data-revert="true">
<img src="{{asset('front/images/security/shape-1.png')}}" alt="image">
</div>
<div class="security-shape-2" data-speed="0.08" data-revert="true">
<img src="{{asset('front/images/security/shape-2.png')}}" alt="image">
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="security-content" data-aos="fade-left" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<span>Security</span>
<h3>Take The Stress Out Of Managing Property And Money</h3>
<p>Discover peace of mind with our expert property and financial management services. Say goodbye to stress as we handle your property and money matters with precision.</p>
<div class="security-inner-box">
<div class="icon">
<i class="flaticon-shield"></i>
</div>
<h4>Pay Online Securely With Instant Notifications</h4>
<p>Experience peace of mind as you pay online securely, receiving instant notifications for every transaction, ensuring seamless financial control.</p>
</div>
<div class="security-inner-box">
<div class="icon">
<i class="flaticon-secure-shield"></i>
</div>
<h4>Convert Your Money In Seconds</h4>
<p>
Experience swift currency conversion with our user-friendly platform, ensuring seamless transactions and accurate rates in mere seconds.</p>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="features-area ptb-100">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-8 col-md-12">
<div class="features-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<span>Our Features</span>
<h3>The Reliable, Cheap & Fastest Way To Send Money Abroad</h3>
</div>
<div class="row justify-content-center">
<div class="col-lg-6 col-md-6">
<div class="single-features-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<div class="icon-image">
<img src="{{asset('front/images/features/icon-1.png')}}" alt="image">
</div>
<div class="content">
<h3>Faster And Cheaper</h3>
<ul class="list">
<li><i class="ri-checkbox-circle-line"></i>  Our cutting-edge technology ensures faster currency conversion, providing instant results for your financial transactions.</li>
<li><i class="ri-checkbox-circle-line"></i> : Enjoy the benefits of cheaper currency exchange rates, saving you money on each transaction compared to traditional methods or platforms.</li>
<li><i class="ri-checkbox-circle-line"></i> Our platform prioritizes a seamless and user-friendly interface, making the process swift, efficient, and cost-effective for all your currency conversion needs.</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="single-features-card" data-aos="fade-down" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<div class="icon-image">
<img src="{{asset('front/images/features/icon-2.png')}}" alt="image">
</div>
<div class="content">
<h3>Trusted & Secure</h3>
<ul class="list">
<li><i class="ri-checkbox-circle-line"></i>Our platform employs state-of-the-art encryption to safeguard your data, ensuring secure and confidential transactions.</li>
<li><i class="ri-checkbox-circle-line"></i>We have established trusted partnerships with reputable financial institutions, adding an extra layer of security to your money conversion process.</li>
<li><i class="ri-checkbox-circle-line"></i> Our commitment to transparency includes clear communication about security measures, giving you confidence in the trustworthiness of our platform.</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="features-vector-image" data-aos="fade-left" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<img src="{{asset('front/images/features/features-1.png')}}" alt="image">
</div>
</div>
</div>
</div>
</div>






<div class="overview-area ptb-100">
<div class="container">
<div class="overview-content" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<span>Connect Us</span>
<h3>Sending International Business Payments or Sending Money To Family Overseas? Snuff Are Your Fast And Simple Solution.</h3>
<ul class="overview-btn-group">
<li>
<a href="{{url('get-started')}}" class="default-btn">Personal Account</a>
</li>
<li>
<a href="{{url('get-started')}}" class="optional-btn">Business Account</a>
</li>
</ul>
</div>
</div>
<div class="overview-shape">
<img src="{{asset('front/images/overview/shape-1.png')}}" alt="image">
</div>
<div class="overview-shape-2">
<img src="{{asset('front/images/overview/shape-2.png')}}" alt="image">
</div>
</div>


<div class="faq-area ptb-100">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-12">
<div class="faq-image" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<img src="{{asset('front/images/faq.png')}}" alt="image">
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="faq-item" data-aos="fade-left" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<div class="faq-content">
<span>Frequently Ask Questions</span>
<h3>Let’s Answer Some Of Your Questions Or Frequently Asked Questions</h3>
</div>
<div class="faq-accordion">
<div class="accordion" id="FaqAccordion">
<div class="accordion-item">
<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
What Is A Multi-Currency Account And How Does It Work?
</button>
<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#FaqAccordion">
<div class="accordion-body">
<p>A multi-currency account holds various currencies, offering flexibility and cost-effective international transactions with ease.</p>
</div>
</div>
</div>
<div class="accordion-item">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
What Happened To The Borderless Account?
</button>
<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#FaqAccordion">
<div class="accordion-body">
<p>The Borderless Account has been upgraded for enhanced functionality, providing even more seamless cross-border transactions.</p>
</div>
</div>
</div>
<div class="accordion-item">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
Can I Hold Multiple Currencies In A Snuff Account?
</button>
<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#FaqAccordion">
<div class="accordion-body">
<p>Easily manage diverse currencies within our Snuff Account, providing seamless flexibility for your financial needs.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<footer class="footer-area pt-100">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-3 col-md-6">
<div class="single-footer-widget" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
<div class="widget-logo">
    <h3>Trustywalletexpress</h3>
</div>
<p>To get exclusive updates and benefits.</p>
<form class="newsletter-form" data-bs-toggle="validator">
<input type="email" class="input-newsletter" placeholder="Enter email" name="EMAIL" required autocomplete="off">
<button type="submit" class="default-btn">Subscribe</button>
<div id="validator-newsletter" class="form-result"></div>
</form>
<ul class="widget-social">
<li>
<a href="https://www.facebook.com/EnvyTheme" target="_blank">
<i class="ri-facebook-fill"></i>
</a>
</li>
<li>
<a href="https://twitter.com/?lang=en" target="_blank">
<i class="ri-twitter-fill"></i>
</a>
</li>
<li>
<a href="https://www.instagram.com/" target="_blank">
<i class="ri-instagram-line"></i>
</a>
</li>
<li>
<a href="https://www.linkedin.com/signup" target="_blank">
<i class="ri-linkedin-line"></i>
</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
<h3>Company And Team</h3>
<ul class="quick-links">
<li><a href="{{url('/')}}">Company And Team</a></li>
<li><a href="{{url('/')}}">News And Blog</a></li>
<li><a href="{{url('/')}}">About Us</a></li>
<li><a href="{{url('/')}}">Affiliates And Partnerships</a></li>
<li><a href="{{url('/')}}">Careers</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
<h3>Resources</h3>
<ul class="quick-links">
<li><a href="{{url('/')}}">Security</a></li>
<li><a href="{{url('/')}}">FAQ's</a></li>
<li><a href="{{url('/')}}">Community</a></li>
<li><a href="{{url('/')}}">Privacy Policy</a></li>
<li><a href="{{url('/')}}">Contact Us</a></li>
</ul>
</div>
</div>

<div class="copyright-area">
<div class="container">
<div class="copyright-area-content">
<p>
Copyright @<script data-cfasync="false" src=""></script><script>document.write(new Date().getFullYear())</script>  All Rights Reserved by Trustywalletexpress

</p>
</div>
</div>
</div>
</footer>


<div class="go-top">
<i class="ri-arrow-up-s-line"></i>
</div>

  @endsection
