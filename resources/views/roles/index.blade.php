@extends('layout.app');
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Roles</div>
    <div class="panel-body">
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
@endsection
@section('js')
    <script src="{{asset('js/models/role.js')}}"></script>
    <script src="{{asset('js/roles/index.js')}}"></script>
@endsection