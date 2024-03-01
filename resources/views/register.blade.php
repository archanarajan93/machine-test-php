

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <div class="container">
   
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registration</h1>
                            </div>
                            <form class="user" action="/registerForm" method="POST">
                                <div class="form-group">
                                    <input type="text"  class="form-control form-control-user" name="user_name"
                                        id="user_name" 
                                        placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="email"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Enter Email Address...">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="user_place"
                                        id="user_place" 
                                        placeholder="Enter Place">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="password"
                                        id="exampleInputPassword" placeholder="Password">
                                </div>
                                
                                <input type="submit" name="submitForm" value="Register"
                                    class="btn btn-primary btn-user btn-block" />
                                <hr>
                                @csrf

                                {{-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> --}}
                            </form>
                            {{-- <hr> --}}
                            {{-- <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div> --}}
                            
                            <ul class="nav flex-column">
                                @foreach ($errors->all() as $item)
                                    <li class="nav-item text-danger">{{ $item }}</li>
                                @endforeach
                            </ul>
                            <!-- @if (session()->has('response'))
                                @if (session('response')['status'] === 200)
                                    <p class="text-success"> {{ session('response')['message'] }}</p>
                                @else
                                    <p class="text-danger"> {{ session('response')['message'] }}</p> 
                                @endif
                            @endif -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; KirandeepAdmin 2023</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ url('/js/jquery.min.js')}}"></script>
<script src="{{ url('/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ url('/js/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ url('/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{ url('/js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{ url('/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ url('/js/demo/chart-pie-demo.js') }}"></script>
<script src="{{ url('/js/demo/chart-bar-demo.js')}}"></script>

</body>

</html>