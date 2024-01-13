<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Quicksecurepay') }}</title>
 
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

  
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/dark-theme.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">

</head>
<body>
 @yield('content')

</body>
  <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/js/form-validator.min.js')}}"></script>
    <script src="{{asset('front/js/contact-form-script.js')}}"></script>
    <script src="{{asset('front/js/aos.js')}}"></script>
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/js/odometer.min.js')}}"></script>
    <script src="{{asset('front/js/fancybox.js')}}"></script>
    <script src="{{asset('front/js/jquery.appear.js')}}"></script>
    <script src="{{asset('front/js/tweenmax.min.js')}}"></script>
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
