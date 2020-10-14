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
                <h4 class="card-title">Tabel TnJ Barcode</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
                                    <th>#</th>
                                    <th>Id Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Cetak Barcode</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                    @foreach($barang as $brg)
                                    <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $brg -> ID_BARANG }}</td>
                                    <td>{{ $brg -> NAMA_BARANG }}</td>
                                    <td>
                                    <a href="pdf-barcode/{{$brg->ID_BARANG}}">
                                    <button type="button" class="btn btn-warning">Cetak Barcode</button></a>
                                    </td>
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

@section('script')
    <!-- Sweet alert -->
    <script src="{{ url('assets/js/examples/sweet-alert.js') }}"></script>

    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>
@endsection
