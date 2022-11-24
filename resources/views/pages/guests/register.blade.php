@extends('layouts.app')

@section('content')
    <section class="mt-5 py-5">
        <div class="register-box shadow py-2">
            <div class=" text-center">
                <h3 class="tinos py-2">Create Account</h3>
            </div>
            <div class="p-2">
                <form class="register-user">
                    <div class="text-center  mb-1">
                        <label>
                            <div class="second-img">
                                <i class="fas fa-user-circle fa-5x fa-fw"></i>
                                <div>Upload profile</div>
                            </div>
                            <div class="resgister-img">
                                <img src="" alt="" class="profile">
                            </div>
                            <input type="file" class="upload-profile" name="profile" hidden>
                        </label>
                    </div>
                    <div class="d-flex align-items-center form-twin mb-2">
                        <div class="py-1 px-2"><i class="fas fa-user fa-sm fa-fw"></i></div>
                        <input type="text" class="p-1 w-100" placeholder="Enter user name" name="username">
                    </div>
                    <div class="d-flex align-items-center form-twin mb-2">
                        <div class="py-1 px-2"><i class="fas fa-user fa-sm fa-fw"></i></div>
                        <select name="role" class="p-1 w-100">
                            <option value="">Select role</option>
                            <option value="tailor">Tailor</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="d-flex align-items-center form-twin mb-2">
                        <div class="py-1 px-2"><i class="fas fa-envelope fa-sm fa-fw"></i></div>
                        <input type="email" class="p-1 w-100" placeholder="Enter user email Address" name="email">
                    </div>
                    <div class="d-flex align-items-center form-twin mb-2">
                        <div class="py-1 px-2"><i class="fas fa-phone-alt fa-sm fa-fw"></i></div>
                        <input type="number" class="p-1 w-100" placeholder="Enter contact" name="phone">
                    </div>
                    <div class="d-flex align-items-center form-twin mb-2">
                        <div class="py-1 px-2"><i class="fas fa-lock fa-sm fa-fw"></i></div>
                        <input type="password" class="p-1 w-100" placeholder="Enter password" name="password">
                    </div>
                    <div class="d-flex align-items-center form-twin mb-2">
                        <div class="py-1 px-2"><i class="fas fa-lock fa-sm fa-fw"></i></div>
                        <input type="password" class="p-1 w-100" placeholder="confirm passworld" name="password_confirmation">
                    </div>
                    <div class="my-2 text-success sucmsg"></div>
                    <button class="btn btn-success w-100 mb-2 accbtn">Create Account</button>
                </form>
                <div class="">Already have an account <a href="{{ route('login') }}">Log in</a></div>
                <div class="mb-3">Go to <a href="/" class="text-main">Home</a></div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    <script src="{{ asset('assets/js/work.js') }}"></script>
@endsection
