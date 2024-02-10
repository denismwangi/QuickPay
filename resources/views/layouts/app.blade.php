<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'trustywalletexpress') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="{{url('static/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('static/assets/vendors/iconly/bold.css')}}">
    <link rel="stylesheet" href="{{url('static/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{url('static/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{url('static/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{url('static/assets/images/favicon.svg')}}" type="image/x-icon">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{url('assets/static/css/fontawesome.css')}}">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body>
@include('includes.sidebar')
@yield('content')
@include('includes.footer')
</body>
<script src="{{url('static/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{url('static/assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{url('static/assets/vendors/apexcharts/apexcharts.js')}}"></script>
<script src="{{url('static/assets/js/pages/dashboard.js')}}"></script>

<script src="{{url('static/assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/jquery.js')}}"></script>

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
    setInterval(Logout, 25000);

    function Logout() {
        checkUserRoleAndRedirect();
    }


</script>
</body>
</html>
