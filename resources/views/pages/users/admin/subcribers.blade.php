@extends('layouts.app')

@section('content')
@include('pages.users.admin.adminheader')


<div class="container mt-3">
    <div class="h4 py-1 text-end"> {{ $count->count() }} {{ Str::plural('Subscriber', $count->count()) }} </div>
   @if ($count->count() > 0)
   <table class="table">
    <thead class="subthead">
        <tr>
            <th>S/N</th>
            <th>Email</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($subscribers as $item)
       <tr>
        <th>{{ $item->id }}</th>
       <td>{{ $item->email }}</td>
       <td>{{ $item->created_at->diffForHumans() }}</td>
       </tr>
       @endforeach

    </tbody>

</table>
   @else
    <div class="no_subcriber shadow">
        <h5> <i class="far fa-bell-slash fa-lg fa-fw"></i> No subcribers, Your subcribers will show here</h5>
    </div>
   @endif
   <div class="d-flex justify-content-between">
    <div></div>
    <div class=""> {{ $subscribers->links() }}</div>
   </div>
</div>

@include('layouts.logout')
<script src="{{ asset('assets/js/work.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert.js') }}"></script>
@endsection
