@extends('layouts.backend')

@section('main-container')
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
            <h2 class="content-heading">Users</h2>

            <!-- Dynamic Table Full -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Dynamic Table <small>Full</small>
                    </h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center"></th>
                                <th>Name</th>
                                <th class="d-none d-sm-table-cell">Email</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Role</th>
                                <th class="text-center" style="width: 15%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="fw-semibold">{{ $user->name }}</td>
                                    <td class="d-none d-sm-table-cell">{{ $user->email }}</td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge bg-info">{{ $user->getRoleNames()[0] }}</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip"
                                            title="View Customer">
                                            <i class="fa fa-user"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table Full -->
        </div>
        <!-- END Page Content -->

    </main>
@endsection


@section('header-inc')
    <link rel="stylesheet" href="{{ asset('backend/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
@endsection


@section('footer-inc')
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('backend/assets/js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('backend/assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}">
    </script>
    <script src="{{ asset('backend/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('backend/assets/js/pages/be_tables_datatables.min.js') }}"></script>
@endsection
