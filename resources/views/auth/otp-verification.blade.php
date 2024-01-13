<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webizpay - OTP Verification</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="{{asset('assets/css/auth.css')}}">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>
<style>
    .error-alert {
  padding: 15px;
  background-color: #f44336;
  color: white;
  border-radius: 5px;
  position: relative;
}

.close-btn {
  color: white;
  float: right;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
}

.close-btn:hover {
  color: black;
}
.success-alert {
  padding: 15px;
  background-color: #4CAF50;
  color: white;
  border-radius: 5px;
  position: relative;
}

.close-btn {
  color: white;
  float: right;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
}

.close-btn:hover {
  color: black;
}

</style>
<body>
<div class="form_wrapper">
    <div class="form_container">
        <div class="title_container">
            <h2>Otp Verification
            </h2>
        </div>
          @if(session('success'))
                
  <span class="close-btn">&times;</span>
  <strong>{{ session('success') }}</strong>
</div>
            @endif
            @if(session('error'))
                 <div class="error-alert">
  <span class="close-btn">&times;</span>
  <strong>  {{ session('error') }}</strong>
</div>
            @endif
        <div class="row clearfix">
            <div class="">
                <form method="POST" action="{{ url('/otp/login') }}">
                    @csrf
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                        <input type="text" value="{{$user_id}}" name="user_id" hidden="" />
                    </div>

                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                        <input type="text" class="@error('otp') is-invalid @enderror" name="otp" placeholder="Enter Otp" required />
                        @error('otp')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <input class="button" type="submit" value="Submit" />
                    <span></span><a href="{{url('offer/Mor4Qh04Yq/login')}}">Resend</a>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
