@extends('layouts.admin')
@section('content')


    <div class="container-fluid mt-5">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

                <h4 class="mb-2 mb-sm-0 pt-1">
                    <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page</a>
                    <span>  Edit Users</span>

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
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif


                <form action="{{ url('role-update/'.$user_role->id) }}" method="POST">
                 Status    @if($user_role->ban == '0')
                        <label class="py-2 px-3 btn-primary">Not Banned</label>
                    @elseif($user_role->ban == '1')
                        <label class="py-2 px-3 btn-danger">Banned</label>
                    @endif
                    {{csrf_field()}}
                    @method('PUT')
                    <div class="form-group">
                      ID  <input type="number" name="id" readonly class="form-control" value="{{$user_role->id}}">
                    </div>
                <div class="form-group">
                   Name <input type="text" name="name"  class="form-control" value="{{$user_role->name}}">
                </div>
                <div class="form-group">
                   Email  <input type="text" name="email"  readonly class="form-control" value="{{$user_role->email}}">
                </div>
                <div class="form-group">
                    Current Role<input type="text" name="role" class="form-control" value="{{$user_role->role}}">
                    <select name="role" class="form-control">
                        <option value="">Select to change the Role</option>
                        <option value="admin">Admin</option>
                        <option value="vendor">Vendor</option>
                    </select>
                </div>
                    <div class="form-group">
                        Current status<input name="ban" class="form-control" value="{{$user_role->ban}}">
                        <select name="ban" class="form-control">
                            <option value="">Select to change the status</option>
                            <option value="0">UnBan Now</option>
                            <option value="1">Ban Now</option>
                        </select>
                    </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
