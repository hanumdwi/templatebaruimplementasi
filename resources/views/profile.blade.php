@extends('layouts.app')

@section('head')
    <!-- Slick -->
    <link rel="stylesheet" href="{{ url('/vendors/slick/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('/vendors/slick/slick-theme.css') }}" type="text/css">

    <!-- Daterangepicker -->
    <link rel="stylesheet" href="{{ url('vendors/datepicker/daterangepicker.css') }}" type="text/css">

    <!-- DataTable -->
    <link rel="stylesheet" href="{{ url('vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection

@section('content')
<div class="page-header">
        <div class="page-title">
            <h3>E-commerce Dashboard</h3>
            <div>
                <div id="ecommerce-dashboard-daterangepicker" class="btn btn-outline-light">
                    <i class="ti-calendar mr-2 text-muted"></i>
                    <span></span>
                </div>
                <a href="#" class="btn btn-primary ml-2" data-toggle="dropdown">
                    <i class="ti-download"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Download</a>
                    <a href="#" class="dropdown-item">Print</a>
                </div>
            </div>
        </div>
    </div>

    

    <div class="row">
        <div class="col-lg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between">
                        <h6 class="card-title">Profile</h6>
                        <div>
                            <a href="#" class="btn btn-outline-light btn-sm btn-floating mr-2">
                                <i class="fa fa-refresh"></i>
                                
                            </a>
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown"
                                   class="btn btn-outline-light btn-sm btn-floating"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </a>
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-0">Profile User</h6>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                                    <th>Id User</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Photo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        
                    
                    
                    
                                    
                                    <td>{{Session::get('id')}}</td>
                                    <td>{{Session::get('nama')}}</td>
                                    <td>{{Session::get('email')}}</td>
                                    <td><img src="{{Session::get('avatar')}}" alt=""></td>
                                    </td>
                                    </tr>
                                    <!-- </tr> -->
                                    
                                    </tbody>
                                    <tfoot>
                        <tr>
                        <th>Id User</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Photo</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                    </table>
                </div>
                
        </div>
    </div>

                   
                </div>
            </div>
        </div>
    </div>
                    
@endsection

@section('script')
<!-- Apex chart -->
<script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
<script src="{{ url('/vendors/charts/apex/apexcharts.min.js') }}"></script>

<!-- Daterangepicker -->
<script src="{{ url('vendors/datepicker/daterangepicker.js') }}"></script>

<!-- DataTable -->
<script src="{{ url('vendors/dataTable/datatables.min.js') }}"></script>

<!-- Dashboard scripts -->
<script src="{{ url('assets/js/examples/pages/ecommerce-dashboard.js') }}"></script>
@endsection