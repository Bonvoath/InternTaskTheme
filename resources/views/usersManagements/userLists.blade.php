@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>List Users</h1>
            <br>
            <button class="btn btn-primary"><a href="/createUser">Add User</a></button>
            <br>
            <table id="ltable" class="table table-bordered">
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
