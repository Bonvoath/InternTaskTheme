@extends('layout.app')
@section('content')
<div class="container">
    <h3>Image Management</h3>
    <hr>
    <div class="row" style="background: #fff;">
        <div class="col-md-4">
            <div class="row" style="margin-top: 15px;margin-bottom: 15px;">
                <div class="col-md-4">
                    <button class="btn btn-primary btn-block">Upload</button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary btn-block">Delete</button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary btn-block">View</button>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="row" style="margin-top: 15px;margin-bottom: 15px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="dropdown">
                        <button class="btn btn-primary btn-block dropdown-toggle" data-toggle="dropdown">Mode</button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Detail</a></li>
                            <li><a href="#">Grid</a></li>
                            <li><a href="#">Big</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3" style="background-color: white; height: 500px;">
            <ul id="tree2">
                <li>TECH
                    <ul>
                        <li>Company Maintenance</li>
                         <li>Employees
                             <ul>
                                <li>Reports
                                    <ul>
                                        <li>Report1</li>
                                        <li>Report2</li>
                                        <li>Report3</li>
                                    </ul>
                                </li>
                                <li>Employee Maint.</li>
                            </ul>
                        </li>
                        <li>Human Resources</li>
                    </ul>
                </li>
                <li>XRP
                    <ul>
                        <li>Company Maintenance</li>
                        <li>Employees
                            <ul>
                                <li>Reports
                                    <ul>
                                        <li>Report1</li>
                                        <li>Report2</li>
                                        <li>Report3</li>
                                    </ul>
                                </li>
                                <li>Employee Maint.</li>
                            </ul>
                        </li>
                        <li>Human Resources</li>
                    </ul>
                </li>
            </ul>
        </div>
        {{-- <div class="col-md-1"></div> --}}
        <div class="col-md-9" style=" background-color: #fff; height: 500px;">
            
        </div>
    </div>
</div>

@endsection