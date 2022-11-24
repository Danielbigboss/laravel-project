@extends('layouts.app')
@section('content')
    @include('layouts.header')
    <section class="position-relative">
        <img src="{{ asset('assets/images/aboutus.JPG') }}" alt="" class="w-100 tailor-banner">
        <div class="route-home">
            <h3 class="text-white"><a href="/" class="text-main">Home</a> \ <a href="" class="text-white"> About
                    us</a></h3>
        </div>
    </section>
    <section class="mt-5 container">
        <h6><span class="about-stroke text-muted tinos position-relative px-1">About us</span></h6>

        <div class="row">
            <div class="col-sm-12 col-lg-6 mb-2">
                <div>
                    <img src="{{ asset('assets/images/girl-4.jpg') }}" alt="" class="w-100 about-img">
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="tinos h2">About us</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatem reprehenderit optio sint laborum
                    voluptate deleniti, cupiditate numquam fuga expedita. Lorem ipsum dolor sit amet consectetur.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatem reprehenderit optio sint laborum
                    voluptate deleniti, cupiditate numquam fuga expedita. Lorem ipsum dolor sit amet consectetur.</p>
                <div class="d-flex gap-5">
                    <div class="text-center">
                        <h1 class="fw-bolder text-main">500+</h1>
                        <div>workers</div>
                    </div>
                    <div class="text-center">
                        <h1 class="fw-bolder text-main">500+</h1>
                        <div>Clients</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 container">
        <h6><span class="about-stroke text-muted tinos position-relative px-1">Our Services</span></h6>
        <div class="h2 tinos">Our Services</div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 mb-2">
                <div class="row shadow py-2">
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <img src="{{ asset('assets/images/girl-2.jpg') }}" alt="" class="services-img w-100">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <h4>Wedding Suit</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum sequi mollitia expedita ut incidunt error totam tempore, nulla quidem modi! Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="row shadow py-2">
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <img src="{{ asset('assets/images/ankara-2.png') }}" alt="" class="services-img w-100">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <h4>Stocks Cloths</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum sequi mollitia expedita ut incidunt error totam tempore, nulla quidem modi! Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="mt-5">
        @include('layouts.footer')
    </div>
    <script src="{{ asset('assets/js/work.js') }}"></script>
@endsection
