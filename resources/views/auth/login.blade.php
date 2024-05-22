<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Heart of the North Tours') }}</title>

    <!-- Custom fonts for this template-->

    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    {{-- <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

</head>

<body class="login-main-bg">

    <!-- login page start -->
    <div class="container">
        <div class="login-page mt-5 mb-4">
            <div class="row px-3 px-md-0">
                <div class="col-12 col-sm-12 col-md-6 col-lg-7 px-0">
                    <div class="left-box d-flex align-items-center justify-content-center h-100">
                        <div class="text-center p-2 p-lg-4">
                            <img class="img-fluid" src="{{asset('img/login_img/HotNT-Logo-A-TB1 3.png')}}" alt="">
                            <div class="tittles d-flex align-items-baseline justify-content-center gap-2 mt-5 mb-4 mb-md-0">
                                <img src="{{asset('img/login_img/line-icon-left.png')}}" alt="Image 1">
                                <h5 style="color: #2A425A; text-align: center;"><span class="fw-bold tittle-heading">WELCOME TO HEART
                                        OF THE NORTH TOURS </span></h5>
                                <img src="{{asset('img/login_img/Line-icon-right.png')}}" alt="Image 2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 px-0">
                    <form action="{{ route('login') }}" method="POST" class="right-box bg-white text-dark h-100 p-4">
                        <h1 class="login-heading mb-2 text-white text-center">Login</h1>
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li><strong>{{ $error }}</strong></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <label for="exampleFormControlInput1" class="form-label text-white">Email</label>
                        <input id="email" type="email" class="form-control @error('message') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Enter Email Address..." required>
                        <label for="exampleFormControlInput1" class="form-label text-white mt-3">Password</label>
                        <input id="password" type="password" class="form-control @error('message') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Password" required>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-white" for="flexCheckDefault">
                                Remember Me
                            </label>
                        </div>

                        <div class="btn-border pb-3">
                            <button type="submit" class="login-btn center-button text-white py-2 w-100 rounded fw-bold">{{ __('Login') }}</button>
                        </div>
                        <!-- <div class="mt-3">
                            <div class="forgot">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password ?') }}
                                    </a>
                                @endif
                            </div>
                        </div> -->
                        <div class="mt-3">
                            {{-- <a class="text-white" href="#">Create Account</a> --}}
                        </div>
                        <div class="text-white mt-3 text-center">
                            <p style="font-size: 12px;">2014 © All rights reserved by Heartofthenorthtours Designed and Developed by LEADconcept</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- login page end -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

</body>

</html>
