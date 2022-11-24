@extends('layouts.app')

@section('content')
    <header class="d-flex align-items-center" id="navber">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="fs-4 fw-bolder">Wellst<span class="text-main">yle</span></div>
            <div class="d-flex align-items-center gap-3 tinos mobile-wrap">
                <div class="text-end my-2 pe-3">
                    <i class=" fas fa-times fa-2x fa-fw text-white close-mobile-wrap "></i>
                </div>
                <div><a href="/" class="text-dark fs-5 ">Home</a></div>
                <div><a href="" class="text-dark fs-5">Shop</a></div>
                <div><a href="{{ route('about') }}" class="text-dark fs-5">About us</a></div>

            </div>
            <div class="d-flex align-items-center gap-3">
                @guest()
                    <div><a href="{{ route('register') }}" class="text-bolder register  text-main">Register</a></div>
                @endguest
                @auth
                    <div><a href=" {{ route('usersdashboard') }}" class="text-bolder register  text-main">Dashboard</a></div>
                @endauth
                <div class="mobile-trigger"> <i class="fas fa-bars fa-sm fa-fw bars"></i></div>
            </div>
        </div>
    </header>
    <section class="  position-relative">
        <div class="container   ">
            <div class="row ban">
                <div class="col-md-6 col-lg-6 mb-3">
                    <div class="div1">
                        <div class="banner-text font-m">Find Your Dream Tailor Here And Make Your Clothes Easier Here</div>
                        <p class="">Lorem ipsum dolor sit amet <br> consectetur adipisicing elit. Error eum voluptas
                        </p>
                        <p class="tionos">Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Perspiciatis tenetur
                            ratione fugiat </p>
                        <div class="mt-2">
                            <div class="d-flex">
                                <div class="get-started text-white fw-bolder"> Get started</div>
                                <div class="get-started text-white fw-bolder ban-2"> <i
                                        class="fas fa-chevron-right fa-sm fa-fw"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="text-center position-relative">
                        <img src="{{ asset('assets/images/banner-img.webp') }}" alt="" class="banner-img">
                        <div class="banner_design shadow"></div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <section class="mt-5">
        <div class="container mt-5">
            <div class="row pt-5">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div>
                        <img src="{{ asset('assets/images/measure.jpg') }}" alt="" class="sewimg">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h6 class="text-main mt-3">Tailors Benefit</h6>
                    <h3>What You Get As a Tailor</h3>
                    <div>Features that will get if you register as tailor</div>
                    <div class="mt-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-me d-flex align-items-center justify-content-center"> <i
                                    class="fas fa-dashboard fa-lg fa-fw text-main"></i></div>
                            <div>The price is according to the minimum wage</div>
                        </div>
                        <div class="d-flex align-items-center gap-3 mt-4">
                            <div class="icon-me d-flex align-items-center justify-content-center"> <i
                                    class="fas fa-check-circle fa-lg fa-fw text-main"></i> </div>
                            <div>The transaction are secure</div>
                        </div>
                        <div class="d-flex align-items-center gap-3 mt-4">
                            <div class="icon-me d-flex align-items-center justify-content-center"> <i
                                    class="fas fa-dollar fa-sm fa-fw text-main"></i> </div>
                            <div>Good salary</div>
                        </div>
                        <div class="d-flex mt-3">
                            <div class="get-started text-white fw-bolder"><a href="{{ route('tailorbenefits') }}"
                                    class="text-white">
                                    Get started</div>
                            <div class="get-started text-white fw-bolder ban-2"> <i
                                    class="fas fa-chevron-right fa-sm fa-fw"></i>
                                </a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 mb-3">
                    <h6 class="text-main mt-3">Users Benefit</h6>
                    <h3>What You Get As a User</h3>
                    <div>Features that will get if you register as tailor Lorem ipsum dolor sit amet consectetur
                        adipisicing.</div>
                    <div class="mt-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-me d-flex align-items-center justify-content-center"> <i
                                    class="fas fa-users fa-lg fa-fw text-main"></i></div>
                            <div>Easier to meet tailors of your choice</div>
                        </div>
                        <div class="d-flex align-items-center gap-3 mt-4">
                            <div class="icon-me d-flex align-items-center justify-content-center"> <i
                                    class="fas fa-clock fa-sm fa-fw text-main"></i> </div>
                            <div>Work are done on Time</div>
                        </div>
                        <div class="d-flex align-items-center gap-3 mt-4">
                            <div class="icon-me d-flex align-items-center justify-content-center"> <i
                                    class="fas fa-check-circle fa-lg fa-fw text-main"></i> </div>
                            <div>The transaction are secure</div>
                        </div>
                        <a href="{{ route('usersbenefits') }}">
                            <div class="d-flex mt-3">
                                <div class="get-started text-white fw-bolder"> Get started</div>
                                <div class="get-started text-white fw-bolder ban-2"> <i
                                        class="fas fa-chevron-right fa-sm fa-fw"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div>
                        <img src="{{ asset('assets/images/users.jpg') }}" alt="" class="sewimg">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="mt-5 eventhome">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-sm-12 col-md-5 col-lg-4 mb-3">
                    <div class="glassme rounded">
                        <div class="py-2 px-1 bg-secondary">
                            <h3 class="text-white">Book an Event</h3>
                        </div>
                        <div class="p-1 py-3">
                            <div class="d-flex gap-2 mb-3">
                                <div><i class="fas fa-balance-scale fa-2x fa-fw text-main"></i></div>
                                <h5 class="text-white">Easy and affordable</h5>
                            </div>
                            <div class="d-flex gap-2 mb-3">
                                <div> <i class="fas fa-calendar-alt fa-2x fa-fw text-main"></i> </div>
                                <h5 class="text-white"> Perfect Timing</h5>
                            </div>
                            <div class="d-flex gap-2 mb-3">
                                <div><i class="fas fa-home fa-2x fa-fw text-main"></i></div>
                                <h5 class="text-white">Conducive Environment</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-8">
                    <div class="glassme">
                        <div class="py-2 px-1 bg-primary">
                            <h3 class="text-white">Fill the form for Booking</h3>
                        </div>
                        <div class="p-2">
                            <form class="eventbooking">
                                <div class="">
                                    <div>
                                        <div class="text-white">Enter time</div>
                                        <input type="time" class="form-control mb-2 w-100">
                                    </div>
                                    <div>
                                        <div class="text-white">Enter Date</div>
                                        <input type="date" class="form-control mb-2 w-100">
                                    </div>

                                </div>
                                @guest()
                                    <div>Email Address</div>
                                    <input type="email" name="eventemail" class="form-control mb-2" value="">
                                @endguest
                                @auth
                                    <div class="text-white">Email Address</div>
                                    <input type="email" name="eventemail" class="form-control mb-2"
                                        value="{{ auth()->user()->email }}">
                                    <button class="btn btn-primary w-100 mb-2">Book</button>
                                @endauth

                            </form>
                            @guest()
                                <button class="btn btn-secondary w-100 mb-2">Book</button>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <h6><span class="about-stroke text-muted tinos position-relative px-1">About</span></h6>
                    <div class="tinos h2">About Us</div>
                    <div class="p-1 py-3">
                        <div class="d-flex gap-2 mb-3">
                            <div><i class="fas fa-balance-scale fa-2x fa-fw text-main"></i></div>
                            <div>
                                <h5>Easy and affordable</h5>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores, illo.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 mb-3">
                            <div> <i class="fas fa-calendar-alt fa-2x fa-fw text-main"></i> </div>
                            <div>
                                <h5>Perfect Timing</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 mb-3">
                            <div><i class="fas fa-home fa-2x fa-fw text-main"></i></div>
                            <div>
                                <h5>Conducive Environment</h5>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id, saepe?</p>
                            </div>
                        </div>
                        <a href="{{ route('about') }}">
                            <div class="d-flex mt-3">
                                <div class="get-started text-white fw-bolder">Read more</div>
                                <div class="get-started text-white fw-bolder ban-2"> <i
                                        class="fas fa-chevron-right fa-sm fa-fw"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div>
                        <img src="{{ asset('assets/images/girl-2.jpg') }}" class="w-100 abtimg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')
    <script src="{{ asset('assets/js/work.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
@endsection
