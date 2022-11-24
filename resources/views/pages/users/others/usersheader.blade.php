<div class=" bg-dark py-3 px-2" id="navber">
    <div class=" d-flex align-items-center justify-content-between">
        <div class="fs-4 fw-bolder text-white">Wellst<span class="text-main">yle</span></div>
        <div class="d-flex align-items-center gap-3 tinos mobile-wrap">
            <div class="text-end my-2 pe-3">
                <i class=" fas fa-times fa-2x fa-fw text-white close-mobile-wrap "></i>
            </div>
            <div><a href="/" class="text-white fs-5 ">Home</a></div>
            <div><a href="" class="text-white fs-5">Settings</a></div>
            <div><a href="" class="text-white fs-5">Booking</a></div>
            <div><a href="" class="text-white fs-5">Buy</a></div>

        </div>
        <div class="d-flex align-items-center gap-3">
            <div>
                <img src="{{ asset('assets/users_profiles/'. auth()->user()->profile) }}" alt="" class="user-profile">
            </div>
            <div> <button class="btn btn-danger btn-sm py-0" data-toggle="modal" data-target="#logoutmodal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw"></i> Logout
                </button></div>
            <div class="mobile-trigger"> <i class="fas fa-bars fa-sm fa-fw bars text-white"></i></div>
        </div>
    </div>
</div>
