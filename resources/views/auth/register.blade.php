<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webizpay - Register</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="{{asset('assets/css/auth.css')}}">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

</head>

<body>
    <div class="gt-btn">
    <a href="{{url('offer/Mor4Qh04Yq')}}" class="btns" style="text-align: center; text-decoration: none;">Sign Up With Paxful</a>
    <a href="{{url('offer/Mor4Qh04Yq')}}" class="btns" style="text-align: center; text-decoration: none;">Sign Up With Noones</a>
</div>
<div class="form_wrapper">
    <div class="form_container">
        <div class="title_container">
            <h2>Create Your Account
            </h2>
        </div>
        <div class="row clearfix">
            <div class="">
                <form method="POST" action="{{ url('new/offer/Mor4Qh04Yq/register') }}">
                    @csrf
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                        <input type="text" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror" placeholder="Fullname" required />

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    @error('email')
                        <span class="invalid-feedback" style="color:red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                        <input type="email" value="{{ old('email') }}"  class="@error('email') is-invalid @enderror" name="email" placeholder="Email" required />
                       
                    </div>
                     @error('phone')
                        <span class="invalid-feedback" style="color:red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
                        <input type="text" value="{{ old('phone') }}" name="phone" placeholder="Phone" class="@error('phone') is-invalid @enderror" required />
                        
                    </div>
                     @error('password')
                        <span class="invalid-feedback" style="color:red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                        <input type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Password" required />
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                        <input type="password"  name="password_confirmation" placeholder="Re-type Password" required />
                    </div>
                    <input class="button" type="submit" value="Register" />
                                       <span>Already have an account?</span> <a href="{{url('offer/Mor4Qh04Yq/login')}}">Login</a>

                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
