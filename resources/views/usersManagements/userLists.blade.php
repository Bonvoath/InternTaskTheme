@extends('layout.app')
@section('content')
<div class="container">
        <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Add User</h1>
                </div>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Add Post
            </button>
              <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form id="form" method="POST">
                    <div class="modal-body">
                        
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
                    </div>
                    <div class="modal-footer"> 
                        <input type="button" class="btn btn-primary" id="insert" value="Add User">
                        <input type="button" class="btn btn-danger" id="edite" value="Update">
                        <button type="button" name="button_action" class="btn btn-secondary" id="" data-dismiss="modal">Close</button>
                    </div>
                    </form>	
                  </div>
                </div>
              </div>
              <br><br>
    <div class="row">
        <div class="col-md-12">
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
<script src="{{asset('js/users/index.js')}}"></script>
<script src="{{asset('js/models/user.js')}}"></script>
@endsection
