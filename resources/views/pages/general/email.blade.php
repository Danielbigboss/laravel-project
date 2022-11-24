@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="fs-4">Email Sender</div>
    <form id="email">

        <div class="mb-2">
            <div class="fs-5">Enter Username</div>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-2">
            <div class="fs-5">Enter Phone</div>
            <input type="number" class="form-control" name="phone">
        </div>
        <div class="mb-2">
            <div class="fs-5">Enter Email</div>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-2">
            <div class="fs-5">Enter Password</div>
            <input type="password" class="form-control" name="password">
        </div>
        <button class="btn btn-success w-100">Send Code</button>
    </form>




<script src="{{ asset('assets/js/sweetalert.js') }}"></script>
<script src="{{ asset('assets/js/work.js') }}"></script>
@endsection
