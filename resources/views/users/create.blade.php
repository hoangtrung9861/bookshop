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
    <link href="{{ asset('product/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('product/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('product/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
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
                        <h2>Create New User</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Confirm Password:</strong>
                        {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role:</strong>
                        {!! Form::select('roles[]', $roles, [], ['class' => 'form-control', 'multiple']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            {!! Form::close() !!}

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('admin.layout.partials.footer')
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->



<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
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
