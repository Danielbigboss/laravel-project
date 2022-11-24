@extends('layouts.app')
@section('content')
    @include('layouts.header')
    <section class="position-relative">
        <img src="{{ asset('assets/images/girl-3.jpg') }}" alt="" class="w-100 tailor-banner">
        <div class="route-home">
            <h3 class="text-white"><a href="/" class="text-main">Home</a> \ <a href="" class="text-white">Tailor
                    Benefits</a></h3>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <h6><span class="about-stroke text-muted tinos position-relative px-1">Tailor Benefit</span></h6>
            <div class="tinos h2">What Are The Benefits We Offer to Our Tailors</div>
            <div class="row mt-5">
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="shadow text-center p-2 py-3">
                        <div>
                            <i class="fas fa-dollar-sign fa-3x fa-fw text-main"></i>
                        </div>
                        <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim cum dolor est modi.</div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="shadow text-center p-2 py-3">
                        <div>
                            <i class="fas fa-edit fa-3x fa-fw text-main"></i>
                        </div>
                        <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim cum dolor est modi.</div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="shadow text-center p-2 py-3">
                        <div>
                            <i class="fas fa-eye fa-3x fa-fw text-main"></i>
                        </div>
                        <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim cum dolor est modi.</div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="text-end">
                    <a href=" {{ route('login') }}"> <button class="btn btn-primary">Login to get Started</button></a>
                </div>
            </div>
        </div>

    </section>
    <div class="mt-5">
        @include('layouts.footer')
    </div>
    <script src="{{ asset('assets/js/work.js') }}"></script>
@endsection
