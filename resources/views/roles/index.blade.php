@extends('layout.app');
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Roles</div>
    <div class="panel-body">
        <div>
            <button id="btnNew" class="btn btn-default btn-sm">New Role</button>
        </div>
        <div>
            <table id="ltable" class="table table-condensed">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Role name</th>
                </tr>
            </thead>
            <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="modalRole">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create new role</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Role name</label>
            <div>
                <input type="text" class="form-control input-sm" id="name">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnSave" class="btn btn-default btn-sm">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
    <script src="{{asset('js/models/role.js')}}"></script>
    <script src="{{asset('js/roles/index.js')}}"></script>
@endsection