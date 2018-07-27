@extends('layout.app')
@section('content')
<div class="box">
    <div class="box-header with-border"><span class="box-title">Users</span></div>
    <div class="box-body">
        <div>
            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#exampleModalCenter">New User</button>
        </div>
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

@endsection
@section('js')
<script src="{{asset('js/models/state.js')}}"></script>
<script src="{{asset('js/states/index.js')}}"></script>
@endsection
