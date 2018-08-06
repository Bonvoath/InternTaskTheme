@extends('layout.app')
@section('content')
<div class="box">
    <div class="box-header with-border"><span class="box-title">Users</span></div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label class="control-label col-sm-5" for="email">Search User Name:</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" id="search" name="search" placeholder="search">
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="pull-right">
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#exampleModalCenter">New User</button>
                </div>
            </div>
        </div>
        <br>
        <div>
            <table id="ltable" class="table table-condensed">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Create At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody> 
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Create At</th>
                        <th>Action</th>               
                    </tr> 
                </tfoot>
            </table>
        </div>
    </div>
</div>
<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Create new user</h4>
            </div>
            <form id="form" class="formUser" method="POST">
                <div id="errorUsername" class="">
                    <p>&nbsp;Please correct the following errors and try again:</p>
                    <ul />
                </div>
            <input type="hidden" name="id">
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" name="name" minlength="5" class="form-control" id="name" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">User Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required>
                </div>
                <div class="form-group hidePass">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" minlength="5" class="form-control" id="password" placeholder="Enter Password">
                </div>
            </div>						
            <div class="modal-footer"> 
                <input type="button" class="btn btn-primary btn-sm" id="insert" value="Save">
                <button type="button" name="button_action" class="btn btn-secondary btn-sm" id="" data-dismiss="modal">Close</button>
            </div>
            </form>	
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{asset('js/models/user.js')}}"></script>
<script src="{{asset('js/users/index.js')}}"></script>
@endsection
