@extends('layouts.app')
@section('content')
    @include('pages.users.others.usersheader');

    <div class="container mt-2">
        <h2>hello {{ auth()->user()->name }}</h2>
    </div>
    @include('layouts.logout')
    <script src="{{ asset('assets/js/work.js') }}"></script>
   <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
@endsection
