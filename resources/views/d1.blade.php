@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop
@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        .table-fixed {
            table-layout: fixed;
            width: 100%;
        }
        .table-fixed th, .table-fixed td {
            overflow-wrap: break-word;
            word-wrap: break-word;
            word-break: break-all;
        }
        .table-fixed th:nth-child(1), .table-fixed td:nth-child(1) {
            width: 80px; /* Fixed width for the first column */
        }
        .table-fixed th:nth-child(2), .table-fixed td:nth-child(2) {
            width: 80px; /* Fixed width for the second column */
        }
        
        .action-buttons {
            display: flex;
            gap: 5px; /* Space between buttons */
        }
        .tooltip-inner {
            background-color: #333; /* Tooltip background color */
            color: #fff; /* Tooltip text color */
        }

        .table-fixed th, .table-fixed td {
            min-width: 100px; /* Minimum width for other columns */
            max-width: 150px; /* Maximum width for other columns */
        }
       
    </style>


@stop
@section('content')

       


    <h5 class="">TRAVEL ORDERS</h5>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-2">
            <div class="info-box"> <span class="info-box-icon bg-primary"> <i class="fa-solid fa-ticket"></i> </span>
                <div class="info-box-content"> <span class="info-box-text">Requests</span> 
                    <span class="info-box-number">10</span> </div> <!-- /.info-box-content -->
            </div> <!-- /.info-box -->
        </div> <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-2">
            <div class="info-box"> <span class="info-box-icon bg-secondary"> <i class="fa-solid fa-ban"></i> </span>
                <div class="info-box-content"> <span class="info-box-text">Cancel Request</span> 
                    <span class="info-box-number">760</span> </div> <!-- /.info-box-content -->
            </div> <!-- /.info-box -->
        </div> <!-- /.col --> <!-- fix for small devices only --> <!-- <div class="clearfix hidden-md-up"></div> -->
        <div class="col-12 col-sm-6 col-md-2">
            <div class="info-box"> <span class="info-box-icon bg-success"> <i class="fa-solid fa-check"></i> </span>
                <div class="info-box-content"> <span class="info-box-text">COMPLETED</span> <span class="info-box-number">2,000</span> </div> <!-- /.info-box-content -->
            </div> <!-- /.info-box -->
        </div> <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-2">
            <div class="info-box"> <span class="info-box-icon bg-danger"> <i class="fa-solid fa-xmark"></i> </span>
                <div class="info-box-content"> <span class="info-box-text">DENCLINED</span> <span class="info-box-number">41,410</span> </div> <!-- /.info-box-content -->
            </div> <!-- /.info-box -->
        </div> <!-- /.col -->
        
    </div>
    <div class="row">
        <div class="col-md-2 mb-3">
            <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">
                <i class="fas fa-compass mr-1"></i> Create Travel Order
            </button>
        </div> <!-- /.col -->
    </div>
    <div class="">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Travel Order Requests</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-fixed">
                    <thead>
                        <tr>
                            <th>Ticket #</th>
                            <th>Days(#)</th>
                            <th>Dates</th>
                            <th>Purpose</th>
                            <th>Destination</th>
                            <th>Travelers</th>
                            <th>Office</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>000001</td>
                            <td>6</td>
                            <td>
                                <span class="badge bg-primary">10/23/24</span>
                                <span class="badge bg-primary">10/23/24</span>
                                <span class="badge bg-primary">10/23/24</span>
                                <span class="badge bg-primary">10/23/24</span>
                                <span class="badge bg-primary">10/23/24</span>
                                <span class="badge bg-primary">10/23/24</span>
                            </td>
                            <td>To Go to Mati City to get package. To Go to Mati City to get package.</td>
                            <td>Mati City</td>
                            <td>
                                <span class="badge bg-primary">DY,JOHN MARK E.</span>
                                <span class="badge bg-primary">DY,JOHN MARK E.</span>
                                <span class="badge bg-primary">DY,JOHN MARK E.</span>
                                <span class="badge bg-primary">DY,JOHN MARK E.</span>
                                <span class="badge bg-primary">DY,JOHN MARK E.</span>
                            </td>
                            <td>
                                <span class="badge bg-warning">HRMO</span>
                                <span class="badge bg-primary">RAMOS, MARY JANE A.</span>
                                <span class="badge bg-secondary">IAS-MGDH / HRMO Designate</span>
                                <span class="badge bg-primary">created by: Dy,John Mark E.</span>
                            </td>
                            <td>
                                <span class="badge bg-success">Approved</span>
                                <span class="badge bg-warning">Date : 10/24/2024</span>
                            </td>
                            <td>
                                <button class="btn btn-success" data-toggle="tooltip" title="Approve">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="btn btn-danger" data-toggle="tooltip" title="Disapprove">
                                    <i class="fas fa-times"></i>
                                </button>
                                <button class="btn btn-info" data-toggle="tooltip" title="Comment">
                                    <i class="fas fa-comment"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>000002</td>
                            <td>1</td>
                            <td>
                                <span class="badge bg-primary">10/23/24</span>
                            </td>
                            <td>To go</td>
                            <td>idunnow</td>
                            <td><span class="badge bg-primary">DY,JOHN MARK E.</span></td>
                            <td>
                                <span class="badge bg-warning">HRMO</span>
                                <span class="badge bg-primary">RAMOS, MARY JANE A.</span>
                                <span class="badge bg-secondary">IAS-MGDH / HRMO Designate</span>
                                <span class="badge bg-primary">created by: Dy,John Mark E.</span>
                            </td>
                            <td>
                                <span class="badge bg-danger">Declined</span>
                                <span class="badge bg-warning">10/22/2024</span>
                            </td>
                            <td>
                                <button class="btn btn-success" data-toggle="tooltip" title="Approve">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="btn btn-danger" data-toggle="tooltip" title="Disapprove">
                                    <i class="fas fa-times"></i>
                                </button>
                                <button class="btn btn-info" data-toggle="tooltip" title="Comment">
                                    <i class="fas fa-comment"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-end">
                    <li class="page-item"> <a class="page-link" href="#">«</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">»</a> </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- The Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width : 800px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">CREATE TRAVEL ORDER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- Your form fields here -->
                    <div class="form-group">
                        <label for="inputField">Select Date :</label>
                        <input type="date" class="form-control" id="inputField" placeholder="Enter something">
                        <label for="inputField" class="mt-2">Selected Dates : (CLICK TO DELETE) </label>
                        <div class="flex">
                            <button type="button" class="btn btn-primary position-relative mb-1">04/08/13</button>
                            <button type="button" class="btn btn-primary position-relative mb-1">04/08/13</button>
                            <button type="button" class="btn btn-primary position-relative mb-1">04/08/13</button>
                            <button type="button" class="btn btn-primary position-relative mb-1">04/08/13</button>
                            <button type="button" class="btn btn-primary position-relative mb-1">04/08/13</button>
                            <button type="button" class="btn btn-primary position-relative mb-1">04/08/13</button>
                            <button type="button" class="btn btn-primary position-relative mb-1">04/08/13</button>
                            <button type="button" class="btn btn-primary position-relative mb-1">04/08/13</button>
                        </div>
                        <label for="inputField" class="mt-2">Purpose </label>
                        <textarea class="form-control" placeholder="To..." id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="inputField" class="mt-2">Destination </label>
                        <input type="text" class="form-control" id="inputField" placeholder="Limbahan, Lupon">
                        <label for="inputField" class="mt-2">Travelers </label>
                        <input type="text" class="form-control" id="inputField" placeholder="Enter something">
                        <label for="inputField" class="mt-2">Selected Employees : (CLICK TO DELETE) </label>
                        <div class="flex">
                            <button type="button" class="btn btn-primary position-relative mb-1">Dy,John Mark E.</button>
                            <button type="button" class="btn btn-primary position-relative mb-1">Dy,John Mark E.</button>
                            <button type="button" class="btn btn-primary position-relative mb-1">Dy,John Mark E.</button>
                            <button type="button" class="btn btn-primary position-relative mb-1">Dy,John Mark E.</button>
                            <button type="button" class="btn btn-primary position-relative mb-1">Dy,John Mark E.</button>
                            <button type="button" class="btn btn-primary position-relative mb-1">Dy,John Mark E.</button>
                            <button type="button" class="btn btn-primary position-relative mb-1">Dy,John Mark E.</button>
                        </div>
                        <label for="inputField" class="mt-2">Office: </label>
                        <select class="form-control me-2" id="fruitDropdown1">
                            <option value="" disabled selected>[ Select Office ]</option>
                            <option value="apple">Apple</option>
                            <option value="banana">Banana</option>
                            <option value="cherry">Cherry</option>
                            <option value="date">Date</option>
                            <option value="fig">Fig</option>
                        </select>       
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Create</button>
            </div>
        </div>
    </div>
</div>

    
   

      
@stop