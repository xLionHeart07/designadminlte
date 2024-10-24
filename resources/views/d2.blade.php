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
            width: 160px; /* Fixed width for the second column */
        }
        .table-fixed th:nth-child(3), .table-fixed td:nth-child(3) {
            width: 130px; /* Fixed width for the second column */
        }
        .table-fixed th:nth-child(4), .table-fixed td:nth-child(4) {
            width: 110px; /* Fixed width for the second column */
        }
/* modal leave creadits table-fixed2*/
        .table-fixed2 {
            table-layout: fixed;
            width: 100%;
        }
        .table-fixed2 th, .table-fixed td {
            overflow-wrap: break-word;
            word-wrap: break-word;
            word-break: break-all;
        }
        .table-fixed2 th:nth-child(1), .table-fixed2 td:nth-child(1) {
            width: 80px; /* Fixed width for the first column */
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

       


    <h5 class="">Leave</h5>
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
        <div class="col-12 mb-3">
            <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">
                <i class="fas fa-compass mr-1"></i> Create Leave
            </button>
            <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#myModal2">
                <i class="fas fa-coins mr-1"></i> Leave Credits
            </button>
        </div>
       
    </div>
    <div class="">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Leave Requests</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-fixed">
                    <thead>
                        <tr>
                            <th>Ticket #</th>
                            <th>Range & Day/s</th>
                            <th>Employee</th>
                            <th>Leave Type</th>
                            <th>Details of Leave</th>
                            <th>Leave Credits</th>
                            <th>Date of Filing</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>000001</td>
                            <td>
                                <span class="badge bg-primary">10/24/24</span> -
                                <span class="badge bg-primary">10/24/24</span>
                                <span class="badge bg-secondary">1 Day/s</span>
                            </td>
                            <td>
                                <span class="badge bg-primary">Dy, John Mark E.</span>
                                <span class="badge bg-secondary">Casual</span>
                                <span class="badge bg-warning">P 11,700</span>
                            </td>
                            <td>
                                <span class="badge bg-primary">Sick Leave</span>
                                

                            </td>
                            <td>
                                <span class="badge bg-secondary">Out Patient</span>
                                <span>Going to Hospital for Checkup</span>
                            </td>
                            <td>
                                <span class="badge bg-primary">Vacation Leave Credits: 13</span>
                                <span class="badge bg-secondary">Sick Leave Credits: 30</span>
                            </td>
                            <td>
                                <span class="badge bg-primary">10/22/2024</span>
                                <span class="badge bg-secondary">08:32 A.M.</span>
                            </td>
                            <td>
                                <span class="badge bg-success">Approved</span>
                                <span class="badge bg-primary">10/24/2024</span>
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
                            <td>000001</td>
                            <td>
                                <span class="badge bg-primary">10/24/24</span> -
                                <span class="badge bg-primary">10/24/24</span>
                                <span class="badge bg-secondary">1 Day/s</span>
                            </td>
                            <td>
                                <span class="badge bg-primary">Dy, John Mark E.</span>
                                <span class="badge bg-secondary">Casual</span>
                                <span class="badge bg-warning">P 11,700</span>
                            </td>
                            <td>
                                <span class="badge bg-primary">Sick Leave</span>
                                

                            </td>
                            <td>
                                <span class="badge bg-secondary">Out Patient</span>
                                <span>Going to Hospital for Checkup</span>
                            </td>
                            <td>
                                <span class="badge bg-primary">Vacation Leave Credits: 13</span>
                                <span class="badge bg-secondary">Sick Leave Credits: 30</span>
                            </td>
                            <td>
                                <span class="badge bg-primary">10/22/2024</span>
                                <span class="badge bg-secondary">08:32 A.M.</span>
                            </td>
                            <td>
                                <span class="badge bg-danger">Disapproved</span>
                                <span class="badge bg-primary">10/24/2024</span>
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

    <!-- Create Leave Modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width : 800px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">CREATE Leave</h5>
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
    <!-- The Leave Credits Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width : 800px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Leave Credits</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="inputField">Search Employee :</label>
                        <div class="container text-center mb-2" >
                              <div class="row">
                              <div class="col-9"><input type="text" class="form-control" id="inputField" placeholder="2507-0000"></div>
                              <div class=""><button type="button" class="btn btn-primary">Search</button></div>
                            </div>
                          </div>
                    </div>
                </form>
                <div>
                    <label for="inputField">Employee Details :</label>
                    <span class="badge bg-info">2507-0000</span>
                    <span class="badge bg-primary">Dy, John Mark E.</span>
                    <span class="badge bg-secondary">HRMO</span>
                    
                </div>
                <div>
                    <label for="inputField">Current Leave Credits:</label>
                    <span class="badge bg-primary">V.L. Credits : 12</span>
                    <span class="badge bg-secondary">S.L. Credits : 2</span>
                   
                </div>
                {{-- --------------------------------------------------------------------------------------------- --}}
                
                {{-- --------------------------------------------------------------------------------------------- --}}
                <div >
                    <div class="col-12 row ml-3">
                        <input class="form-check-input " type="checkbox" value="" id="editCheckbox">
                        <label for="editCheckbox">Edit Credits</label>
                    </div>
                    <form action="">
                        <textarea class="form-control mb-2" placeholder="Details of why edit..." id="floatingTextarea2" style="height: 100px" disabled></textarea>
                        <div class="col-12 row">
                            <div class="input-group btn-group col-2 mb-3">
                                <input type="text" class="form-control " disabled>
                                <button class="btn btn-primary btn-outline-black" type="button" disabled>-</button>
                                <button class="btn btn-primary" type="button" disabled>+</button>
                            </div>
                            <div class="input-group btn-group col-2 mb-3">
                                <input type="text" class="form-control " disabled>
                                <button class="btn btn-secondary btn-outline-black" type="button" disabled>-</button>
                                <button class="btn btn-secondary" type="button" disabled>+</button>
                                
                            </div>
                            <button class="btn btn-primary btn-outline-black mb-3 col-2 ml-4" type="button" disabled>Change</button>
                    </form>
                    
                    </div>
                    
                </div>
                
                <div>
                </div>
                
                  
                <table class="table table-bordered table-fixed2">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Changes</th>
                            <th>Balance After Change</th>
                            <th>Details</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10/24/24</td>
                            <td>
                                <span class="badge bg-primary">1st Input</span>
                            </td>
                            <td>
                                <span class="badge bg-primary">V.L Credits = 13</span>
                                <span class="badge bg-secondary">S.L Credits = 3</span>
                            </td>
                            <td>
                                <span class="badge bg-primary">V.L. Credits Created</span>
                                <span class="badge bg-secondary">S.L. Credits Created</span>
                            </td> 
                        </tr>
                        <tr>
                            <td>10/25/24</td>
                            <td>
                                <span class="badge bg-warning">- 1 S.L. Credits</span>
                            </td>
                            <td>
                                <span class="badge bg-primary">V.L Credits = 13</span>
                                <span class="badge bg-secondary">S.L Credits = 2</span>
                            </td>
                            <td>
                                <span class="badge bg-warning">Leave Ticket # 000001</span>
                            </td> 
                        </tr>
                        
                    </tbody>
                </table>
                <div class="card-footer">
                    <ul class="pagination pagination-sm m-0 float-end">
                        <li class="page-item"> <a class="page-link" href="#">«</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">»</a> </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    
   

      
@stop