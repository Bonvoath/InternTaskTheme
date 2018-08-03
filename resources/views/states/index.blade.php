@extends('layout.app')
@section('content')
<div class="box">
    <div class="box-header with-border"><span class="box-title">List States</span></div>
    <div class="box-body">
        <div>
            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#exampleModalCenter">News User</button>
        </div>
        <div>
            <table id="table" class="table table-condensed">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>State Name</th>
                        <th>Create At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody> 
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>State Name</th>
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
                <h4 class="modal-title" id="myModalLabel">Create new State</h4>
            </div>
            <form id="form" method="POST" onsubmit="return false">
                <input type="hidden" name="id" >
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">State Name</label>
                        <input type="text" name="name" minlength="5" class="form-control" id="name" placeholder="Enter State Name">

                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-primary btn-sm" id="insert" value="Save">
                    <input type="hidden" class="btn btn-primary btn-sm" id="insert" value="Save">
                    <button type="button" name="button_action" class="btn btn-secondary btn-sm" id="" data-dismiss="modal">Close</button>
                </div>
            </form>
            <script>
                $("#form").validate();
            </script>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{asset('js/models/state.js')}}"></script>
<script src="{{asset('js/states/index.js')}}"></script>

@endsection
