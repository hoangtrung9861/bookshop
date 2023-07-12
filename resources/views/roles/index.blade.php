<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('product/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('product/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('product/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('product/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('product/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('product/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('product/styles/responsive.css') }}">

</head>
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- sidebar -->
    @include('admin.layout.partials.sidebar')
    <!-- end of sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <!-- header -->
            @include('admin.layout.partials.header')
            <!-- endofheader -->

            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Role Management</h2>
                    </div>
                    <div class="pull-right">
                    @can('role-create')
                        <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
                        @endcan
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif            
            <table class="table table-bordered">
              <tr>
                 <th>No</th>
                 <th>Name</th>
                 <th width="280px">Action</th>
              </tr>
                @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                        @can('role-edit')
                            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                        @endcan
                        @can('role-delete')
                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        @endcan
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $roles->render() !!}
            <!-- Footer -->
            @include('admin.layout.partials.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

<script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Custom scripts for all pages-->
<script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
<!-- Page level plugins -->
<script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
<!-- Page level custom scripts -->
<script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('admin/js/demo/chart-pie-demo.js') }}"></script>
<script src="{{ asset('product/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('product/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('product/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('product/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('product/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('product/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('product/js/custom.js') }}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>