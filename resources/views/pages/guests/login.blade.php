@extends('layouts.app')

@section('content')
    <section class="mt-5 py-5">
        <div class="register-box shadow py-2">
            <div class=" text-center">
                <h3 class="tinos py-2">Create Account</h3>
            </div>
            <div class="p-2">
                <div class="text-center">
                    <img src="{{ asset('assets/images/login-icon.png') }}" alt="" class="login-icon">
                </div>
                <form class="loginusers">


                    <div class="d-flex align-items-center form-twin mb-2">
                        <div class="py-1 px-2"><i class="fas fa-envelope fa-sm fa-fw"></i></div>
                        <input type="email" class="p-1 w-100" placeholder="Enter user email Address" name="email">
                    </div>

                    <div class="d-flex align-items-center form-twin mb-2">
                        <div class="py-1 px-2"><i class="fas fa-lock fa-sm fa-fw"></i></div>
                        <input type="password" class="p-1 w-100" placeholder="Enter password" name="password">
                    </div>

                    <div class="text-end text-success sucmsg my-2"></div>
                    <button class="btn btn-success w-100 mb-2">Login Account</button>
                </form>
                <div class="">Not a member <a href="{{ route('register') }}">Sign Up</a></div>

            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    <script src="{{ asset('assets/js/work.js') }}"></script>
@endsection
