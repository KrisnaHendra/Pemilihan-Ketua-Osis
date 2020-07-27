<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>404 Error</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('template/admin') }}\assets\images\favicon.ico">
        <!-- App css -->
        <link href="{{ URL::asset('template/admin') }}\assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
        <link href="{{ URL::asset('template/admin') }}\assets\css\icons.min.css" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('template/admin') }}\assets\css\app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet">

    </head>

    <body>

        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-4 mt-3">
                                    <a href="index.html">
                                        <span><img src="assets\images\logo-dark.png" alt="" height="30"></span>
                                    </a>
                                </div>
                                <div class="mt-4 pt-3 text-center">
                                    <img src="{{ URL::asset('template/admin') }}\assets\images\cancel.svg" title="invite.svg" class="avatar-lg">
                                    <h3 class="expired-title mb-4 mt-3 font-weight-normal">Page Not Found</h3>
                                    <p class="text-muted mt-3">Looks like you made a wrong turn. Don't worry ... it happens to us the best. You may not have access to enter this page</p>
                                </div>

                                <div class="mb-3 mt-4 text-center">
                                    @if(auth()->user()->role_id == 1)
                                    <a href="{{ url('home') }}" class="btn btn-primary btn-block">Back to Home</a>
                                    @elseif(auth()->user()->role_id == 2)
                                    <a href="{{ url('pemilih') }}" class="btn btn-primary btn-block">Back to Home</a>
                                    @else
                                    <a href="{{ url('monitoring') }}" class="btn btn-primary btn-block">Back to Home</a>
                                    @endif
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="{{ URL::asset('template/admin') }}\assets\js\vendor.min.js"></script>

        <!-- App js -->
        <script src="{{ URL::asset('template/admin') }}\assets\js\app.min.js"></script>

    </body>

</html>
