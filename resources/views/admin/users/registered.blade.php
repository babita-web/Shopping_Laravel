@extends('layouts.admin')
@section('content')


    <div class="container-fluid mt-5">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

                <h4 class="mb-2 mb-sm-0 pt-1">
                    <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page</a>
                    <span>  Users</span>

                </h4>

                <form class="d-flex justify-content-center">
                    <!-- Default input -->
                    <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
                    <button class="btn btn-primary btn-sm my-0 p" type="submit">
                        <i class="fa fa-search"></i>
                    </button>

                </form>

            </div>

        </div>
        <!-- Heading -->

        <!--Grid row-->
        <div class="card">

            <!--Grid column-->
            <div class="card-body">

<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Role</th>

        <th>Address</th>
        <th>Online/Offline</th>
        <th>Ban/Unban</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id}}</td>
        <td>{{ $user->firstname }}</td>
        <td>{{ $user->lastname }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->address }}</td>

        <td>{{ $user->role }}</td>

        <td>
            @if($user->IsUserOnline())
                <label class="py-2 px-3 btn-primary">Online</label>
            @else
                <label class="py-2 px-3 btn-danger">Offline</label>
            @endif
        </td>
        <td>
            @if($user->ban == '0')
                <label class="py-2 px-3 btn-primary">Not Banned</label>
            @elseif($user->ban == '1')
                <label class="py-2 px-3 btn-danger">Banned</label>
            @endif
            </td>
        <td>
            <a href="{{ url('role-edit/'.$user->id) }}" class="badge badge-pill btn-primary px-3 py-2">Edit</a>
            <a href="" class="badge badge-pill btn-danger px-3 py-2">Delete</a>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>

        </div>
        <!--Grid row-->

    </div>
    </div>
    @endsection

