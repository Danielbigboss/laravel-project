@extends('layouts.app')
@section('content')
    @include('pages.users.admin.adminheader')


    <div class="container">
        <h4 class="my-2 text-end">{{ $alluserscount->count() }} {{ Str::plural('User', $allusers->count()) }}</h4>


     <div class="users_container">
        <table class="table table-striped table-inverse table-responsive w-100">
            <thead class="thead-inverse">
                <tr>
                    <th>S/N</th>
                    <th> Name</th>
                    <th> Email</th>
                    <th> Phone</th>
                    <th>Role</th>
                    <th> Profile</th>
                    <th> Date</th>
                </tr>
            </thead>
            <tbody>
                @if ($alluserscount->count() > 0)
                    @foreach ($allusers as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->name }} </td>
                            <td> {{ $item->email }} </td>
                            <td> {{ $item->phone }}</td>
                            <td>
                                @if ($item->role == 'admin')
                                    <button class="btn btn-warning py-0 text-white">Admin</button>
                                @elseif ($item->role == 'user')
                                    <button class="btn btn-primary py-0 text-white">User</button>
                                @else
                                <button class="btn btn-success py-0 text-white">Tailor</button>
                                @endif
                            </td>
                            <td> <img src="{{ asset('assets/users_profiles/' . $item->profile) }}" alt=""
                                    class="admin_users_profile"></td>
                                    <td> {{ $item->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach

                @else
                    <div class="alert alert-warning"> No User yet!!</div>
                @endif


            </tbody>
        </table>
     </div>
        <div class="text-end">
            <div>{{ $allusers->links() }}</div>
        </div>
    </div>
    @include('layouts.logout')
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    <script src="{{ asset('assets/js/work.js') }}"></script>
@endsection
