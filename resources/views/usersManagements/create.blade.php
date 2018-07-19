@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel">
                <div class="">
                    <div class="panel-heading bg-primary">
                        <label for="">Form Create User</label>
                    </div>
                    <div class="panel-body">
                        <form id="form" method="POST">
                            <div class="form-group">
                                    <label for="exampleInputEmail1">User Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">User Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                                </div>
                            <input type="submit" class="btn btn-default" id="insert" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection
