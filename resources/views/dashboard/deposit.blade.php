@extends('layouts.app')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>{{ strtoupper($type) }} DEPOSIT VALIDATION</h3>
                        <p class="text-subtitle text-muted"></p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Deposit</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            @if(session('success'))
                <div class="alert alert-success"><i class="bi bi-check-circle"></i> {{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger"><i class="bi bi-check-circle"></i>
                    {{ session('error') }}
                </div>
            @endif
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <p>You are about to deposit <b>{{$amount}} {{ strtoupper($type) }}</b> in your Webizpay wallet click the <b>copy( <i class="fa fa-files-o" aria-hidden="true"></i>
 )</b> button and make payment to our <b>{{ strtoupper($type) }}</b> wallet link.</p>

<style>
     .copy-button {
      
        cursor: pointer;
    }
</style>
                    </div>

                    <div class="card-body">
                     <form class="form form-vertical" method="post" action="{{url('/deposit/post')}}">
                         @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">{{ strtoupper($type) }} Username

                                            </label>
                                            <input type="text" id="email-id-vertical" required
                                                   class="form-control" name="username"
                                                   placeholder="Your {{ strtoupper($type) }} Username

">
  <input type="text" value="{{$type}}" name="type" hidden
">
<input type="text" value="{{$amount}}" name="amount" hidden
">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        
                                    <div class="form-group has-icon-left">
                                                              <label for="email-id-vertical">Copy Webizpay {{ strtoupper($type) }} Address

                                            </label>
                                           
                                                            <div class="position-relative">
                                <input type="text" value="0xcdac6748484c07167c98d7841064ca7542396d93"   class="form-control"
                                                                    placeholder=""
                                                                    id="address">
                             <div class="form-control-icon copy-button" onclick="copyToClipboard()">  <i class="fa fa-copy copy-button"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit"
                                                class="btn btn-primary me-1 mb-1">Validate Deposit Wallet</button>

                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                  
                </div>

            </section>
        </div>
  <script>
                       
function copyToClipboard() {
    var copyText = document.getElementById("address");
     copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  alert("Address Copied: " + copyText.value);
}

                    </script>
@endsection
