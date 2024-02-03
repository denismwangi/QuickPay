<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tyronpay') }}</title>
 
     <link rel="stylesheet" href="{{url('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('front/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('front/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('front/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{url('front/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('front/css/slick.css')}}">
    <link rel="stylesheet" href="{{url('front/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{url('front/css/style.css')}}">

</head>
<body>
 @yield('content')

</body>
 <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('front/js/ajax-form.js')}}"></script>
    <script src="{{asset('front/js/waypoints.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('front/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('front/js/scrollIt.js')}}"></script>
    <script src="{{asset('front/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('front/js/wow.min.js')}}"></script>
    <script src="{{asset('front/js/nice-select.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/js/plugins.js')}}"></script>
    <script src="{{asset('front/js/gijgo.min.js')}}"></script>
    <script src="{{asset('front/js/contact.js')}}"></script>
    <script src="{{asset('front/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.form.js')}}"></script>
    <script src="{{asset('front/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('front/js/mail-script.js')}}"></script>

    <script src="{{asset('front/js/main.js')}}"></script>

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
