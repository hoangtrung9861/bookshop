<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Register</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block ">
                        <img src="{{ asset('/images/img0001.jpg') }}" alt="" style="width: 470px;height: 561px;">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

                            <form class="user" action="{{ route('register.post') }}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email"
                                            class="form-control form-control-user @error('email') is-invalid @enderror"
                                            id="exampleInputEmail" placeholder="Email Address" name="email"
                                            value="{{ old('email') }}" autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="text"
                                            class="form-control form-control-user @error('name') is-invalid @enderror"
                                            id="exampleInputName" placeholder="User Name" name="name"
                                            value="{{ old('name') }}" autofocus>
                                        @if ($errors->has('name'))
                                            <span class="text-danger"
                                                style=" font-size: 14px">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password"
                                            class="form-control form-control-user @error('password') is-invalid @enderror"
                                            id="exampleInputPassword" placeholder="Password" name="password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger"
                                                style=" font-size: 14px">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password"
                                            class="form-control form-control-user @error('Confirm-Password') is-invalid @enderror"
                                            id="exampleRepeatPassword" placeholder="Repeat Password"
                                            name="Confirm-Password">
                                        @if ($errors->has('Confirm-Password'))
                                            <span class="text-danger"
                                                style=" font-size: 14px">{{ $errors->first('Confirm-Password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            @if (Route::has('password.request'))
                                    <div class="text-center">
                                        <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                                    </div>
                                    @endif
                            <div class="text-center">
                                <a class="small" href="{{ Route('login')}}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
</body>

</html>
