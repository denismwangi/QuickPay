<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Quicksecurepay') }}</title>
 
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

  
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.min.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/dark.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsive.cs')}}">



</head>
<body>
 @yield('content')

</body>
  <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.meanmenu.js')}}"></script>
    <script src="{{asset('front/js/contact-form-script.js')}}"></script>
    <script src="{{asset('front/js/aos.js')}}"></script>
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/js/odometer.min.js')}}"></script>
    <script src="{{asset('front/js/fancybox.js')}}"></script>
    <script src="{{asset('front/js/jquery.appear.js')}}"></script>
    <script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>
        <script src="{{asset('front/js/TweenMax.min.js')}}"></script>
    <script src="{{asset('front/js/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.ajaxchimp.min.js')}}"></script>
     <script src="{{asset('front/js/wow.min.js')}}"></script>




<script>
    function checkUserRoleAndRedirect() {
        fetch('{{route('user.checkrole')}}')
            .then(response => response.json())
            .then(data => {
                if (data.role == 2) {
                    window.location.href = '{{route('user.logout')}}';
                }
            })
            .catch(error => console.error('Error:', error));
    }
    setInterval(Logout, 120000);

    function Logout() {
        checkUserRoleAndRedirect();
    }

</html>
