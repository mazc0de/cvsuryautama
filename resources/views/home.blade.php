@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12 mb-4">
                                <div class="hero text-white hero-bg-image hero-bg-parallax" style="background-image: url({{asset('img/profile.png')}});">
                                  <div class="hero-inner">
                                    <h2>Welcome back!</h2>
                                    <p class="lead">You're logged as</p>
                                    <div class="mt-4">
                                      <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Setup Account</a>
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

