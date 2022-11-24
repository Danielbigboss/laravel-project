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
            <div><a href=" {{ route('usersdashboard') }}" class="text-bolder register2  text-white">Dashboard</a></div>
            @endauth
            <div class="mobile-trigger"> <i class="fas fa-bars fa-sm fa-fw bars"></i></div>
        </div>
    </div>
</header>



