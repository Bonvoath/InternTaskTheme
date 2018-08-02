@extends('layout.app')
@section('content')
<div class="box">
    <div class="box-header with-border"><span class="box-title">Users</span></div>
    <div class="box-body">
        <div>
            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#exampleModalCenter">News User</button>
        </div>
        <div>
            <table id="table" class="table table-condensed">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User Name</th>
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
                        <th>Create At</th>
                        <th>Action</th>               
                    </tr> 
                </tfoot>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Create new user</h4>
            </div>
            <form id="form" method="POST">
                <input type="hidden" name="Id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Name</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
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
<script src="{{asset('js/models/state.js')}}"></script>
<script src="{{asset('js/states/index.js')}}"></script>
@endsection
