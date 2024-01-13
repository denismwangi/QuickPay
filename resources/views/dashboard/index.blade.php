@extends('layouts.app')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        @if(Auth::user()->role == 2)
        @php
        
        $tr = App\Models\Transaction::where('user_id', Auth::user()->id)->get();
       
        
        @endphp
        
        <p></p>
            <div class="page-heading">
                <h3></h3>
            </div>
            @if ($tr->isEmpty()) 

         <div class="alert alert-light-warning color-warning"><i
                                            class="bi bi-exclamation-triangle"></i>
                                      Your account is inactive. For activation you need to top up your balance.

Attention: Not activated accounts for more than 30 days will be deleted automatically..</div>
@endif
             @if(session('success'))
                                <div class="alert alert-success"><i class="bi bi-check-circle"></i> {{ session('success') }}</div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-danger"><i class="bi bi-check-circle"></i>
                                    {{ session('error') }}
                                </div>
                            @endif
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                           
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="fa fa-btc" aria-hidden="true"></i>

                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Btc</h6>
                                                <h6 class="font-extrabold mb-0">{{$btc}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="212" viewBox="0 0 320 512"><path fill="currentColor" d="M311.9 260.8L160 353.6L8 260.8L160 0l151.9 260.8zM160 383.4L8 290.6L160 512l152-221.4l-152 92.8z"/></svg>


                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Eth</h6>
                                                <h6 class="font-extrabold mb-0">{{$eth}} </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Usdt</h6>
                                                <h6 class="font-extrabold mb-0">{{$usdt}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-currency-litecoin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M18 19h-8.194a2 2 0 0 1 -1.98 -2.283l1.674 -11.717" /> <path d="M14 9l-9 4" /> </svg>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Litecoin</h6>
                                                <h6 class="font-extrabold mb-0">{{$lt}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="buttons">
                            <button type="button" class="btn btn-outline-success block rounded-pill"
                                    data-bs-toggle="modal" data-bs-target="#depositModal">
                                Deposit
                            </button>
                            <button type="button" class="btn btn-outline-primary block rounded-pill"
                                    data-bs-toggle="modal" data-bs-target="#withdrawModal">
                                Withdraw
                            </button>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="modal fade" id="depositModal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                         role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Deposit Crypto

                                                </h5>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <form class="form form-vertical" method="post" action="{{url('/deposit/validate')}}">
                                                            @csrf
                                                            <div class="form-body">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label for="first-name-vertical">Wallet</label>
                                                                            <select class="form-select" id="basicSelect" name="type" required>
                                                                                <option value="bitcoin">Bitcoin</option>
                                                                                <option value="ethereum">Ethereum</option>
                                                                                <option value="usdt">Usdt</option>
                                                                                <option value="litecoin">Litecoin</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label for="email-id-vertical">Amount</label>
                                                                            <input type="number" id="email-id-vertical"
                                                                                   class="form-control" name="amount"
                                                                                   placeholder="Amount" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 d-flex justify-content-end">
                                                                        <button type="submit"
                                                                                class="btn btn-primary me-1 mb-1">Validate Deposit</button>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="withdrawModal" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                     role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Withdraw Crypto

                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-content">
                                                <div class="card-body">
                                                   <form class="form form-vertical" method="post" action="{{url('/withdraw/validate')}}">
                                                       @csrf
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="first-name-vertical">Wallet</label>
                                                                        <select class="form-select" id="basicSelect" name="currency">
                                                                            <option value="bitcoin">Bitcoin</option>
                                                                            <option value="ethereum">Ethereum</option>
                                                                            <option value="litecoin">Litecoin</option>
                                                                            <option value="usdt">Usdt</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="email-id-vertical">Amount</label>
                                                                        <input type="number" id="email-id-vertical"
                                                                               class="form-control" name="amount" required
                                                                               placeholder="Amount">
                                                                    </div>
                                                                </div>
                                                                 <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="email-id-vertical">Wallet Address</label>
                                                                        <input type="text" id="email-id-vertical"
                                                                               class="form-control" required name="address"
                                                                               placeholder="Wallet Address">
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 d-flex justify-content-end">
                                                                    <button type="submit"
                                                                            class="btn btn-primary me-1 mb-1">Validate Withdraw</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        @php
                        $transactions = App\Models\Transaction::where('user_id',Auth::user()->id)->orderBy('created_at','DESC')->get();
                        @endphp

                        <div class="page-heading">
                            <div class="page-title">
                                <div class="row">
                                    <div class="col-12 col-md-6 order-md-1 order-last">
                                        <h3>Transactions</h3>
                                        <p class="text-subtitle text-muted"></p>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">My Transactions</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                           
                            <section class="section">
                                <div class="card">
                                    <div class="card-header">
                                        Recent Transactions

                                    </div>

                                    <div class="card-body">
                                        <table class="table table-striped" id="table1">
                                            <thead>
                                            <tr>
                                                <th>Currency</th>
                                                <th>Amount</th>
                                        <th>Type</th>
                                                <th>Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($transactions as $trans)
                                                @php
                                                    $inputDateTime = $trans->created_at;
                                                   $datep = Illuminate\Support\Carbon::parse($inputDateTime);
                                                   $days_ = $datep->longAbsoluteDiffForHumans(Illuminate\Support\Carbon::now());
                                                   $daysAgo = $days_;
                                                @endphp
                                            <tr>
                                                <td>{{$trans->currency}}</td>
                                                <td>{{$trans->amount}}</td>
                                                <td>{{$trans->type}}</td>
                                                <td>{{$daysAgo}}</td>

                                            </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </section>
                        </div>


        @endif

        @if(Auth::user()->role == 1)
        <div class="page-heading">
            <h3>Statistics</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon purple">
                                                <i class="fa fa-users" aria-hidden="true"></i>

                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">All Users</h6>
                                            <h6 class="font-extrabold mb-0">{{$users}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon blue">
                                                <i class="fa fa-users" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Site Users</h6>
                                            <h6 class="font-extrabold mb-0">{{$site}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <i class="fa fa-users" aria-hidden="true"></i>

                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Paxful Users</h6>
                                            <h6 class="font-extrabold mb-0">{{$pax}} </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon red">
                                                <i class="fa fa-users" aria-hidden="true"></i>

                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Noones Users</h6>
                                            <h6 class="font-extrabold mb-0">{{$noones}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                     <div class="row">
                           
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="fa fa-btc" aria-hidden="true"></i>

                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Btc</h6>
                                                <h6 class="font-extrabold mb-0">{{$btc}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="212" viewBox="0 0 320 512"><path fill="currentColor" d="M311.9 260.8L160 353.6L8 260.8L160 0l151.9 260.8zM160 383.4L8 290.6L160 512l152-221.4l-152 92.8z"/></svg>


                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Eth</h6>
                                                <h6 class="font-extrabold mb-0">{{$eth}} </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Usdt</h6>
                                                <h6 class="font-extrabold mb-0">{{$usdt}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-currency-litecoin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M18 19h-8.194a2 2 0 0 1 -1.98 -2.283l1.674 -11.717" /> <path d="M14 9l-9 4" /> </svg>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Litecoin</h6>
                                                <h6 class="font-extrabold mb-0">{{$lt}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                  <!--   <div class="row">
                        <div class="col-12 col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Profile Visit</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <svg class="bi text-primary" width="32" height="32" fill="blue"
                                                     style="width:10px">
                                                    <use
                                                        xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                </svg>
                                                <h5 class="mb-0 ms-3">Europe</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="mb-0">862</h5>
                                        </div>
                                        <div class="col-12">
                                            <div id="chart-europe"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <svg class="bi text-success" width="32" height="32" fill="blue"
                                                     style="width:10px">
                                                    <use
                                                        xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                </svg>
                                                <h5 class="mb-0 ms-3">America</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="mb-0">375</h5>
                                        </div>
                                        <div class="col-12">
                                            <div id="chart-america"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <svg class="bi text-danger" width="32" height="32" fill="blue"
                                                     style="width:10px">
                                                    <use
                                                        xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                </svg>
                                                <h5 class="mb-0 ms-3">Indonesia</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="mb-0">1025</h5>
                                        </div>
                                        <div class="col-12">
                                            <div id="chart-indonesia"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Latest Comments</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-lg">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Comment</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="assets/images/faces/5.jpg">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Congratulations on your graduation!</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="assets/images/faces/2.jpg">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Wow amazing design! Can you make another
                                                        tutorial for
                                                        this design?</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div> -->

    @endif

@endsection
