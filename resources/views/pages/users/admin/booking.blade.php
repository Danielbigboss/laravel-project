@extends('layouts.app')
@section('content')
@include('pages.users.admin.adminheader')


<div class="container">

   <div class="users_container">

    <table class="table table-striped table-inverse table-responsive w-100 mt-5">
        <thead class="thead-inverse">
            <tr>
                <th>S/N</th>
                <th> Name</th>
                <th> Email</th>
                <th> Phone</th>
                <th>Message</th>
                <th> Profile</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Daniel </td>
                    <td> daniel@gmail.com </td>
                    <td> 07018700667</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime incidunt nostrum perferendis illum atque dignissimos voluptatibus expedita, culpa error saepe.</td>
                    <td> <img src="{{ asset('assets/images/ankara-2.png') }}" alt="" class="admin_users_profile"></td>
                </tr>


            </tbody>
    </table>
   </div>
</div>
@include('layouts.logout')
<script src="{{ asset('assets/js/sweetalert.js') }}"></script>
<script src="{{ asset('assets/js/work.js') }}"></script>
@endsection
