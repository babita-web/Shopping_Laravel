@extends('layouts.frontend')
@section('title')
    My Profile
@endsection
<br><br><br><br>
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>My Profile Page</h4>
                            <hr>
                            <form action="{{('/my-profile-update')}}" method="POST">
                                {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""> First Name</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->firstname }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""> Last Name</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->lastname }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="">Upload Image</label>
                                    <input type="file" name="image" class="form-control"><br>
                                    <img src="{{ asset('assets/img/'. Auth::user()->image) }}" class="w-75" alt="">
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""> E-mail</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->email }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""> Address</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->address }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""> Phone Number</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->phonenumber }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <button type="submit" class="btn btn-primary"> Update Profile</button>
                                    </div>
                                </div>

                            </div>
                            </form>

                        </div>
                    </div>
                </div>


            </div>
        </div>


    </section>

@endsection
