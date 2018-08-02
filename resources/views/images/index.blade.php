@extends('layout.app')
@section('css')
<link rel="stylesheet" href="{{asset('css/dropzone.css')}}">
<link rel="stylesheet" href="{{asset('css/image.css')}}">
@endsection
@section('content')
<!-- <div class="container">
    <h3>Image Management</h3>
    <hr>
    <div class="row" style="background: #fff;">
        <div class="col-md-4">
            <div class="row">
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
                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#newfol">
                        <i class="fa fa-plus"></i>New
                    </button>
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
                                <button type="button" class="btn btn-primary" id="btnAddNew">
                                    <i class="fa fa-plus"></i> Add
                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <button class="btn btn-primary btn-block">View</button>
                </div> --}}
            </div>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="row" style="margin-top: 15px;margin-bottom: 15px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="btn-group">
                        <button type="button active" id="btn-th" class="btn btn-primary">
                            <i class="fa fa-th"></i>
                        </button>
                        <button type="button" id="btn-list" class="btn btn-primary">
                            <i class="fa fa-list"></i>
                        </button>
                      </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
            <ul id="tree2">
                <li><a href="javascript://ajax" onclick="mainFol()">Human</a>
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
                <li>Cartoon
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
            
            {{-- <img src="{{ asset('storage/avatar.png') }}" alt=""> --}}
        </div>
        {{-- <div class="col-md-1"></div> --}}
        
        {{-- //list view image --}}
        <div class="col-md-9 col-sm-9 col-xs-12 grid-view" id="grid-view" style=" background-color: #fff;">
            <div class="container" style="margin-top: 10px;">
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-2">
                        <img src="/img/avatar.png" alt="" width="100px;" height="100px;">
                        <?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar.png";
                            echo basename($path);
                        ?>
                    </div>
                    <div class="col-md-2">
                        <img src="/img/avatar2.png" alt="" width="100px;" height="100px;">
                        <?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar2.png";
                            echo basename($path);
                        ?>
                    </div>
                    <div class="col-md-2">
                        <img src="/img/avatar3.png" alt="" width="100px;" height="100px;">
                        <?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar3.png";
                            echo basename($path);
                        ?>
                    </div>
                    <div class="col-md-2">
                        <img src="/img/avatar04.png" alt="" width="100px;" height="100px;">
                        <?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar04.png";
                            echo basename($path);
                        ?>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-2">
                        <img src="/img/avatar5.png" alt="" width="100px;" height="100px;">
                        <?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar5.png";
                            echo basename($path);
                        ?>
                    </div>
                    <div class="col-md-2">
                        <img src="/img/photo1.png" alt="" width="100px;" height="100px;">
                        <?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/photo1.png";
                            echo basename($path);
                        ?>
                    </div>
                    <div class="col-md-2">
                        <img src="/img/photo2.png" alt="" width="100px;" height="100px;">
                        <?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/photo2.png";
                            echo basename($path);
                        ?>
                    </div>
                    <div class="col-md-2">
                        <img src="/img/photo3.jpg" alt="" width="100px;" height="100px;">
                        <?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/photo3.jpg";
                            echo basename($path);
                        ?>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-2">
                        <img src="/img/avatar.png" alt="" width="100px;" height="100px;">
                        <?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar.png";
                            echo basename($path);
                        ?>
                    </div>
                    <div class="col-md-2">
                        <img src="/img/avatar.png" alt="" width="100px;" height="100px;">
                        <?php  
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar.png";
                            echo basename($path);
                        ?>
                    </div>
                    <div class="col-md-2">
                        <img src="/img/avatar.png" alt="" width="100px;" height="100px;">
                        <?php  
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar.png";
                            echo basename($path);
                        ?>
                    </div>
                    <div class="col-md-2">
                        <img src="/img/avatar.png" alt="" width="100px;" height="100px;">
                        <?php  
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar.png";
                            echo basename($path);
                        ?>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-9 col-sm-9 col-xs-12 list-view hide" id="list-view" style="background-color: #fff;">
                <div class="container" style="margin-top: 10px;">
                    <div class="row" style="margin-top: 10px;">
                        
                        <ul>
                            <li style="margin: 5px;">
                                <img src="/img/avatar.png" alt="" width="100px;" height="100px;">
                            </li>
                            <li>
                                <img src="/img/avatar2.png" alt="" width="100px;" height="100px;">
                            </li>
                            <li>
                                <img src="/img/avatar3.png" alt="" width="100px;" height="100px;">
                            </li>
                            <li>
                                <img src="/img/avatar04.png" alt="" width="100px;" height="100px;">
                            </li>
                            <li>
                                <img src="/img/avatar5.png" alt="" width="100px;" height="100px;">
                            </li>
                            <li>
                                <img src="/img/avatar.png" alt="" width="100px;" height="100px;">
                            </li>
                            <li>
                                <img src="/img/avatar.png" alt="" width="100px;" height="100px;">
                            </li>
                            <li>
                                <img src="/img/avatar.png" alt="" width="100px;" height="100px;">
                            </li>
                            <li>
                                <img src="/img/avatar.png" alt="" width="100px;" height="100px;">
                            </li>
                            <li>
                                <img src="/img/avatar.png" alt="" width="100px;" height="100px;">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>-->






<div class="panel panel-default img">
    {{-- menu bar --}}
    <div class="panel-heading">
            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#newfol">New Folder</button>
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#upload">Upload Image</button>
        <div class="pull-right">
            <div class="btn-group">
                <button type="button active" id="btn-th" class="btn btn-default btn-sm">
                    <i class="fa fa-th"></i>
                </button>
                <button type="button" id="btn-list" class="btn btn-default btn-sm">
                    <i class="fa fa-list"></i>
                </button>
            </div>
        </div>
        <div class="clear-fixed"></div>
    </div>
    <div class="panel-body" id="p-body">
        <div class="row" id="row-img">
            <div class="col-lg-3 col-md-3 col-sm-3" id="side-tree">
                <!-- tree view folder -->
                <ul id="tree2">
                    <li>Human
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
                    <li>Cartoon
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
                <!-- end of tree view folder-->
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9" id="blog-img">
                {{-- display images as grid --}}
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <img src="/img/avatar3.png" alt="" width="100px;" height="100px;">
                        <p class="text-center"><?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar3.png";
                            echo basename($path);
                        ?></p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <img src="/img/avatar04.png" alt="" width="100px;" height="100px;">
                        <p class="text-center"><?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar04.png";
                            echo basename($path);
                        ?></p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <img src="/img/avatar3.png" alt="" width="100px;" height="100px;">
                        <p class="text-center"><?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar3.png";
                            echo basename($path);
                        ?></p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <img src="/img/avatar04.png" alt="" width="100px;" height="100px;">
                        <p class="text-center"><?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar04.png";
                            echo basename($path);
                        ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <img src="/img/photo1.png" alt="" width="100px;" height="100px;">
                        <p class="text-center"><?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/photo1.png";
                            echo basename($path);
                        ?></p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <img src="/img/photo2.png" alt="" width="100px;" height="100px;">
                        <p class="text-center"><?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/photo2.png";
                            echo basename($path);
                        ?></p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <img src="/img/avatar04.png" alt="" width="100px;" height="100px;">
                        <p class="text-center"><?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar04.png";
                            echo basename($path);
                        ?></p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <img src="/img/photo3.jpg" alt="" width="100px;" height="100px;">
                        <p class="text-center"><?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/photo3.jpg";
                            echo basename($path);
                        ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <img src="/img/avatar.png" alt="" width="100px;" height="100px;">
                        <p class="text-center"><?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar.png";
                            echo basename($path);
                        ?></p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <img src="/img/avatar.png" alt="" width="100px;" height="100px;">
                        <p class="text-center"><?php  
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar.png";
                            echo basename($path);
                        ?></p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <img src="/img/avatar04.png" alt="" width="100px;" height="100px;">
                        <p class="text-center"><?php
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar04.png";
                            echo basename($path);
                        ?></p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <img src="/img/avatar.png" alt="" width="100px;" height="100px;">
                        <p class="text-center">
                            <?php  
                            $path = "C:/xampp/htdocs/LavLTE/public/img/avatar.png";
                            echo basename($path);
                            ?>
                        </p>
                    </div>
                </div>
                {{-- end of display images as grid --}}
            </div>
        </div>
    </div>
</div>
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
                <button type="button" class="btn btn-success" id="btnAddNew">
                    <i class="fa fa-plus"></i> Add
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
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
@endsection
