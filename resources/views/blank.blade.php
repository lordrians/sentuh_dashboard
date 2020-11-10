@extends('backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection

@section('content')

        <main id="main-container">

            <!-- Hero -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill h3 my-2">
                            DataTables <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Tables transformed with dynamic features.</small>
                        </h1>
                        <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-alt">
                                <li class="breadcrumb-item">Tables</li>
                                <li class="breadcrumb-item" aria-current="page">
                                    <a class="link-fx" href="">DataTables</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- END Hero -->

            <!-- Page Content -->
            <div class="content">
                <!-- Dynamic Table Full -->
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Dynamic Table <small>Full</small></h3>
                    </div>
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 80px;">ID</th>
                                    <th class="text-center" style="width: 150px;">
                                        <i class="far fa-user"></i>
                                    </th>
                                    <th class="text-center style="width: 50%;">Username</th>
                                    <th class="text-center style="width: 20%;">Email</th>
                                    <th class="text-center style="width: 20%;">No. Invoice</th>
                                    <th class="text-center style="width: 10%;">Role</th>
                                    <th class="text-center" style="width: 100px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center font-size-sm">1</td>
                                    <td class="font-w600 font-size-sm text-center">
                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        ferrianrp
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        client2<em class="text-muted">@example.com</em>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        KR99233493II
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge badge-success">Admin</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center font-size-sm">1</td>
                                    <td class="font-w600 font-size-sm text-center">
                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        ferrianrp
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        client2<em class="text-muted">@example.com</em>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        KR99233493II
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge badge-primary">User</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center font-size-sm">1</td>
                                    <td class="font-w600 font-size-sm text-center">
                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        ferrianrp
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        client2<em class="text-muted">@example.com</em>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        KR99233493II
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge badge-primary">User</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center font-size-sm">1</td>
                                    <td class="font-w600 font-size-sm text-center">
                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        ferrianrp
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        client2<em class="text-muted">@example.com</em>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        KR99233493II
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge badge-primary">User</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center font-size-sm">1</td>
                                    <td class="font-w600 font-size-sm text-center">
                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        ferrianrp
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        client2<em class="text-muted">@example.com</em>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        KR99233493II
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge badge-primary">User</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center font-size-sm">1</td>
                                    <td class="font-w600 font-size-sm text-center">
                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        ferrianrp
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        client2<em class="text-muted">@example.com</em>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        KR99233493II
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge badge-primary">User</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center font-size-sm">1</td>
                                    <td class="font-w600 font-size-sm text-center">
                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        ferrianrp
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        client2<em class="text-muted">@example.com</em>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        KR99233493II
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge badge-primary">User</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center font-size-sm">1</td>
                                    <td class="font-w600 font-size-sm text-center">
                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        ferrianrp
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        client2<em class="text-muted">@example.com</em>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        KR99233493II
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge badge-primary">User</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center font-size-sm">1</td>
                                    <td class="font-w600 font-size-sm text-center">
                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        ferrianrp
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        client2<em class="text-muted">@example.com</em>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        KR99233493II
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge badge-primary">User</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Dynamic Table Full -->

                
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->

@endsection
