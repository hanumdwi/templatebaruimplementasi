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

<div class="card">
                <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (isset($errors) && $errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif

                    @if (session()->has('failures'))

                        <table class="table table-danger">
                            <tr>
                                <th>Row</th>
                                <th>Attribute</th>
                                <th>Errors</th>
                                <th>Value</th>
                            </tr>

                            @foreach (session()->get('failures') as $validation)
                                <tr>
                                    <td>{{ $validation->row() }}</td>
                                    <td>{{ $validation->attribute() }}</td>
                                    <td>
                                        <ul>
                                            @foreach ($validation->errors() as $e)
                                                <li>{{ $e }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        {{ $validation->values()[$validation->attribute()] }}
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    @endif
                   
                    <h6 class="card-title mb-0">Table Customers</h6>
                </div>
                <div class="table-responsive">
                
                <center>
                    <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#import">
                        <i class="ti-upload mr-2"></i>Import Excel
                    </button>
                </center>
                    <table id="myTable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                                    
                                    <th>#</th>
                                    <th>Id Customer</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kode Pos</th>
                                    <!-- <th>Foto</th> -->
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        @foreach($customer as $cus)
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $cus -> ID_CUSTOMER }}</td>
                                    <td>{{ $cus -> NAMA }}</td>
                                    <td>{{ $cus -> ALAMAT }}</td>
                                    <td>{{ $cus -> KODEPOS }}</td>
                                    <!-- <td>{{ $cus -> FOTO }}</td> -->
                                    </td>
                                    </tr>
                                    @endforeach
                                    <!-- </tr> -->
                                    
                                    </tbody>
                                    <tfoot>
                        <tr>
                                    <th>#</th>
                                    <th>Id Customer</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kode Pos</th>
                                    <!-- <th>Foto</th> -->
                        </tr>
                        </tfoot>
                    </table>
                </div>
                    </table>
                </div>
                
        </div>
    </div>

            <!-- modal -->
        <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">IMPORT DATA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="customerimport" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label>PILIH FILE</label>
                                <input type="file" name="file" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                            <button type="submit" class="btn btn-success">IMPORT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>




@endsection

@section('script')
<script>
    $(document).ready(function (){
    $('#myTable').DataTable();
});
</script>
    <!-- Sweet alert -->
    <script src="{{ url('assets/js/examples/sweet-alert.js') }}"></script>

    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>

     <!-- DataTable -->
    <script src="{{ url('vendors/dataTable/datatables.min.js') }}"></script>
    <script src="{{ url('assets/js/examples/datatable.js') }}"></script>

    <!-- Javascript -->
    <script src="{{ url('vendors/dataTable/datatables.min.js') }}"></script>

    <script>  
    toastr.options = {
        timeOut: 3000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };

toastr.success('Successfully completed');
    </script>
@endsection