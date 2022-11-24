@extends('layouts.app')
@section('content')
@include('pages.users.admin.adminheader')
<div class="container mt-5">
    <div class="alert alert-info">
        <h5>Add your Business Social media So your Customers can follow you</h5>
    </div>
    <form  class="sociallinks">
        <div class="mb-3">
            <div class="fs-5 tino">Enter Phone number</div>
            <input type="number" class="form-control w-100" placeholder="07022525254" name="phone" id="so_phone">
        </div>
        <input type="text" name="id" hidden id="so_id">
        <div class="mb-3">
            <div class="fs-5 tino">Enter Email</div>
            <input type="email" class="form-control w-100" placeholder="example@gmail.com" name="email" id="so_email">
        </div>
        <div class="mb-3">
            <div class="fs-5 tino">Enter Facebook url</div>
            <input type="text" class="form-control w-100" placeholder="https/example.facebook.com" name="facebook" id="so_facebook">
        </div>
        <div class="mb-3">
            <div class="fs-5 tino">Enter Twitter url</div>
            <input type="text" class="form-control w-100" placeholder="https/example.twitter.com" name="twitter" id="so_twitter">
        </div>
        <div class="mb-3">
            <div class="fs-5 tino">Enter Instagram url</div>
            <input type="text" class="form-control w-100" placeholder="https/example.instagram.com" name="instagram" id="so_instagram">
        </div>
        <div class="mb-3">
            <div class="fs-5 tino">Enter Linkedin url</div>
            <input type="text" class="form-control w-100" placeholder="https/example.linkedin.com" name="linkedin" id="so_linkedin">
        </div>
        <div class="text-end">
            <button class="btn btn-primary mb-3 px-5">Save Changes</button>
        </div>
    </form>
</div>
@include('layouts.logout')
<script src="{{ asset('assets/js/social.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert.js') }}"></script>
<script src="{{ asset('assets/js/work.js') }}"></script>
@endsection
