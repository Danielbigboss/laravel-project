<footer>
    <div class="container py-3">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-3 text-white">
                <div class="mb-2">
                    <h4 class="text-white mb-3">wells<span class="text-main">yle</span></h4>
                    <div> 26 Olusegun street <br> Lagos, Nigeria</div>
                </div>
                <div> <span class="fw-bolder">Phone:</span> {{ $social->phone }}</div>
                <div> <span class="fw-bolder">Email:</span> {{ $social->email }}</div>
                <div class="d-flex gap-2 text-white my-2">
                    <a href="{{ $social->facebook }}" target="_blank" class="text-white">
                        <div class="footer-soc"><i class="fab fa-facebook-f fa-sm fa-fw"></i></div>
                    </a>
                    <a href="{{ $social->instagram }}"target="_blank"  class="text-white">
                        <div class="footer-soc"><i class="fab fa-instagram fa-sm fa-fw"></i></div>
                    </a>
                    <a href="{{ $social->twitter }}" target="_blank" class="text-white">
                        <div class="footer-soc"><i class="fab fa-twitter fa-sm fa-fw"></i></div>
                    </a>
                    <a href="{{ $social->linkedin }}" target="_blank" class="text-white">
                        <div class="footer-soc"><i class="fab fa-linkedin fa-sm fa-fw"></i></div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-white mb-3">
                <h4 class="mb-3">Our services</h4>
                <div class="mb-1"> <i class="fas fa-angle-right fa-sm fa-fw text-main"></i> Cloths manufacturing</div>
                <div class="mb-1"> <i class="fas fa-angle-right fa-sm fa-fw text-main"></i> Business consulting</div>
                <div class="mb-1"> <i class="fas fa-angle-right fa-sm fa-fw text-main "></i> Job Creation</div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-white mb-3">
                <h4 class="mb-3">Useful Links</h4>
                <div class="mb-1"><a href="/" class="text-white">
                        <i class="fas fa-angle-right fa-sm fa-fw text-main "></i> Home
                    </a></div>
                <div class="mb-1"><a href="{{ route('about') }}" class="text-white">
                        <i class="fas fa-angle-right fa-sm fa-fw text-main "></i> About us
                    </a></div>
                <div class="mb-1"><a href="" class="text-white">
                        <i class="fas fa-angle-right fa-sm fa-fw text-main "></i> Shop
                    </a></div>
                <div class="mb-1"><a href="{{ route('login') }}" class="text-white">
                        <i class="fas fa-angle-right fa-sm fa-fw text-main "></i> Account
                    </a></div>
                <div class="mb-1"><a href="" class="text-white">
                        <i class="fas fa-angle-right fa-sm fa-fw text-main "></i> Privacy Policy
                    </a></div>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-white mb-3">
                <h4>Our Newsletter</h4>
                <p>Subcribe to our newsletter so you can stay in touch with our update</p>
                <form class="subcribers">
                    <div class="d-flex">
                        <input type="email" class="subin" name="email">
                        <button class="subbtn">Subcribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="bg-darker py-4 text-center text-white">
        <div><i class="fas fa-copyright fa-sm fa-fw"></i> copyright wells<span class="text-main">tyle</span>. All Right
            Reserved</div>
        <div>Developed by <span class="text-main">Daniel Olaitan</span></div>
    </div>
</footer>
