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
                        <h3>Transactions</h3>
                        <p class="text-subtitle text-muted"></p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Transactions</li>
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
                        Transactions


                    </div>

                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                            <tr>
                                <th>Currency</th>
                                <th>Amount</th>
                                <th>Type</th>
                                <th>User</th>
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

                                   $u = App\Models\User::where('id', $trans->user_id)->first();
                                @endphp
                                <tr>
                                    <td>{{$trans->currency}}</td>
                                    <td>{{$trans->amount}}</td>
                                    <td>{{$trans->type}}</td>
                                    <td>{{$u->name}}</td>
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
