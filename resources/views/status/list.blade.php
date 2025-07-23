@extends('admin.layout')
@section('customCss')
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Status List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Status List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <div class="card-header">
                                <h3 class="card-title">Status List</h3>
                            </div>

                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>No Of Clients</th>
                                            <th>Clients Title</th>
                                            <th>Clients Description</th>
                                            <th>No Of Projects</th>
                                            <th>Projects Title</th>
                                            <th>Projects Description</th>
                                            <th>No Of Hours</th>
                                            <th>Hours Title</th>
                                            <th>Hours Description</th>
                                            <th>No Of Workers</th>
                                            <th>Workers Title</th>
                                            <th>Workers Description</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>{{ $status->id }}</td>
                                                <td><img src="{{ asset('images/status/' . $status->image) }}" alt="Image Not Found"
                                                        style="width: 80px;"></td>
                                                <td>{{ $status->title }}</td>
                                                <td>{{ $status->description }}</td>
                                                <td>{{ $status->no_of_client }}</td>
                                                <td>{{ $status->client_title }}</td>
                                                <td>{{ $status->client_desc }}</td>
                                                <td>{{ $status->no_of_project }}</td>
                                                <td>{{ $status->project_title }}</td>
                                                <td>{{ $status->project_desc }}</td>
                                                <td>{{ $status->no_of_hours }}</td>
                                                <td>{{ $status->hours_title }}</td>
                                                <td>{{ $status->hours_desc }}</td>
                                                <td>{{ $status->no_of_workers }}</td>
                                                <td>{{ $status->worker_title }}</td>
                                                <td>{{ $status->worker_desc }}</td>
                                                <td><a href="{{ route('status.edit', $status->id) }}"
                                                        class="btn btn-primary">Edit</a></td>
                                                <td><a href="{{ route('status.delete', $status->id) }}"
                                                        onclick="return confirm('Are You sure want to delete?');"
                                                        class="btn btn-danger">Delete</a></td>
                                            </tr>
                                    </tbody>
                                    <tfoot>
                                        {{-- <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr> --}}
                                    </tfoot>
                                </table>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>
@endsection
@section('customJs')
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script src="dist/js/adminlte.min2167.js?v=3.2.0"></script>

    <script src="dist/js/demo.js"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
