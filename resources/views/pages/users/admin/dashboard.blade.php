@extends('layouts.app')
@section('content')
    @include('pages.users.admin.adminheader')
    <div class="container py-2">
        <h4>Hello Admin {{ auth()->user()->name }}</h4>
        <div class="row mt-5">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                <a href=" {{ route('allpeople') }}" class="text-dark">
                    <div class="shadow text-center p-3">
                        <i class="fas fa-users fa-4x fa-fw text-success"></i>
                        <h4> {{ $users->count() }} {{ Str::plural('user', $users->count()) }}</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                <a href=" {{ route('subcribers') }}" class="text-dark">
                    <div class="shadow text-center p-3">
                        <i class="fas fa-envelope fa-4x fa-fw text-warning"></i>
                        <h4>{{ $subs->count()  }} {{ Str::plural('Subcriber', $subs->count()) }}</h4>
                    </div>

                </a>

            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                <a href="" class="text-dark">
                    <div class="shadow text-center p-3">
                        <i class="fas fa-stamp fa-4x fa-fw text-info"></i>
                        <h4>56 Products</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
               <a href="" class="text-dark">
                <div class="shadow text-center p-3">
                    <i class="fas fa-book fa-4x fa-fw text-primary"></i>
                    <h4>56 Booking</h4>
                </div>
               </a>
            </div>

        </div>
    </div>
    <script src="{{ asset('assets/js/work.js') }}"></script>
    @include('layouts.logout')
@endsection
