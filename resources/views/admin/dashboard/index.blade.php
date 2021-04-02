@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">{{$title}}</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Admin</h4>
                    </div>
                    <div class="card-body">
                        {{DB::table("users")->count()}}
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>xxx</h4>
                    </div>
                    <div class="card-body">
                        100
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>Reports</h4>
                    </div>
                    <div class="card-body">
                        {{DB::table("laporan")->count()}}
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>xxxx</h4>
                    </div>
                    <div class="card-body">
                        1000
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12 mb-4">
                                <div class="hero text-white hero-bg-image hero-bg-parallax" style="background-image: url({{asset('img/profile.png')}}); height:300px">
                                  <div class="hero-inner">
                                    <h2>Welcome back, {{auth()->user()->name}} !</h2>
                                    <p class="lead">You're logged as {{auth()->user()->getRoleNames()->implode(', ')}}</p>
                                    <div class="mt-4">
                                      <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Button</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <h3 class="text-center">Dashboard Content</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

