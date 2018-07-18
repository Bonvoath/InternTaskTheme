@extends('layout.app')
@section('css')
<link rel="stylesheet" href="{{asset('css/dropzone.css')}}">
@endsection
@section('content')
<div class="container">
    <h3>Image Management</h3>
    <hr>
    <div class="row" style="background: #fff;">
        <div class="col-md-4">
            <div class="row" style="margin-top: 15px;margin-bottom: 15px;">
                <div class="col-md-4">
                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#upload"><i class="fa fa-upload"></i> Upload</button>
                    <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Upload image</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/file-upload" class="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-"></i> Upload image
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#newfol"><i class="fa fa-plus"></i>New</button>
                    <div class="modal fade" id="newfol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">New folder</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" name="newFol" id="newFolder" class="form-control" placeholder="Enter folder name...">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
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
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary"><i class="fa fa-th"></i></button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-list"></i></button>
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
                        {{-- <li>Company Maintenance</li> --}}
                         <li>Employees
                             <ul>
                                {{-- <li>Reports --}}
                                    <ul>
                                        {{-- <li>Report1</li> --}}
                                        {{-- <li>Report2</li> --}}
                                        {{-- <li>Report3</li> --}}
                                    </ul>
                                </li>
                                {{-- <li>Employee Maint.</li> --}}
                            </ul>
                        </li>
                        {{-- <li>Human Resources</li> --}}
                    </ul>
                </li>
                <li>XRP
                    <ul>
                        {{-- <li>Company Maintenance</li> --}}
                        {{-- <li>Employees --}}
                            <ul>
                                <li>
                                    <a href="C:/xampp/htdocs/LavLTE">Reports
                                    <ul>
                                        {{-- <li>Report1</li> --}}
                                        {{-- <li>Report2</li> --}}
                                        {{-- <li>Report3</li> --}}
                                    </ul>
                                </a>
                                </li>
                                {{-- <li>Employee Maint.</li> --}}
                            </ul>
                        </li>
                        {{-- <li>Human Resources</li> --}}
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