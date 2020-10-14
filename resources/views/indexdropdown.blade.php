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

<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Data Customer</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
                                    <th>#</th>
                                    <th>Id Customer</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Id Kelurahan</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr> 
                                    @foreach($customer as $cus)
                                    <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $cus -> ID_CUSTOMER }}</td>
                                    <td>{{ $cus -> NAMA }}</td>
                                    <td>{{ $cus -> ALAMAT }}</td>
                                    <td>{{ $cus -> ID_KELURAHAN }}</td>
                                    <td>{{ $cus -> FOTO }}</td>
                                    </tr>
                                    @endforeach
                                    
                                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          @endsection