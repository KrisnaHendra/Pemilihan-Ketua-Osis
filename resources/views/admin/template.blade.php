<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>E - Pilketos</title>
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
        <!-- third party css -->
        <link href="{{ URL::asset('template/admin') }}\assets\libs\datatables\dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('template/admin') }}\assets\libs\datatables\buttons.bootstrap4.css" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('template/admin') }}\assets\libs\datatables\responsive.bootstrap4.css" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('template/admin') }}\assets\libs\datatables\select.bootstrap4.css" rel="stylesheet" type="text/css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>

    <body data-layout="horizontal" style="background:#f5f5f5;">
      <!-- oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;" -->

        <!-- Begin page -->
        <div id="wrapper" style="background:#f5f5f5;">

            <!-- Navigation Bar-->
            <header id="topnav">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <div class="container-fluid">
                        <ul class="list-unstyled topnav-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                            <!-- <li class="dropdown d-none d-lg-block">
                                <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ URL::asset('template/admin') }}\assets\images\flags\us.jpg" alt="user-image" height="12"> <span class="align-middle d-none d-xl-inline-block ml-2">English <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{ URL::asset('template/admin') }}\assets\images\flags\spain.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Spanish</span>
                                    </a>

                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{ URL::asset('template/admin') }}\assets\images\flags\italy.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Italian</span>
                                    </a>

                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{ URL::asset('template/admin') }}\assets\images\flags\french.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">French</span>
                                    </a>

                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{ URL::asset('template/admin') }}\assets\images\flags\russia.jpg" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Russian</span>
                                    </a>
                                </div>
                            </li> -->

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa fa-exclamation-circle"></i>
                                    <span class="badge badge-danger rounded-circle noti-icon-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="font-16 m-0">
                                                        <span class="float-right">
                                                        </span>Notification
                                                    </h5>
                                    </div>

                                    <div class="">
                                      <!-- slimscroll noti-scroll -->

                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="fa fa-exclamation"></i></div>
                                            <p class="notify-details">Sebelum memilih pastikan nama <br>di pojok kanan halaman sesuai <br>dengan nama anda.<small class="text-muted">Info 1</small></p>
                                        </a>

                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="fa fa-check-circle"></i></div>
                                            <p class="notify-details">Anda hanya bisa memilih 1 kali.<small class="text-muted">Info 2</small></p>
                                        </a>

                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="fa fa-times"></i></div>
                                            <p class="notify-details">Pemilihan tidak boleh diwakilkan.<small class="text-muted">Info 3</small></p>
                                        </a>

                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="fa fa-sign-out-alt"></i></div>
                                            <p class="notify-details">Setelah selesai, silahkan logout <br>akun anda.<small class="text-muted">Info 4</small></p>
                                        </a>


                                    </div>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="photo/user.png" alt="user-image" class="rounded-circle">
                                    <span class="pro-user-name d-none d-xl-inline-block ml-2">
                                        <b>{{ Auth::user()->name }}  <i class="mdi mdi-chevron-down"></i></b>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-outline"></i>
                                        <span>Profile</span>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="{{url('logout')}}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout-variant"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>



                        </ul>

                        <!-- LOGO -->
                        <div class="logo-box">
                            <a href="javascript:void(0)" class="logo text-center">
                                <span class="logo-lg">
                                  <b class="text-dark btn btn-sm btn-light"><i class="fa fa-school"></i> <b>E-Pilketos</b></b>
                                  <!-- <img src="https://lh3.googleusercontent.com/proxy/8F_GMm883RBv114sedhZ61KpWyA5IJrJxEDTHLqSoNm57kT05gBqRiFZT0ZK2_z8zX9PGk1RHAcJF4jtXKfXIU1tSHMRgrLyp7SDAYZANynD5TLXinU" alt="" height="26"> -->
                                        <!-- <img src="{{ URL::asset('template/admin') }}\assets\images\logo-light.png" alt="" height="26"> -->
                                        <!-- <span class="logo-lg-text-light">Simple</span> -->
                                </span>
                                <span class="logo-sm">
                                        <!-- <span class="logo-sm-text-dark">S</span> -->
                                <img src="{{ URL::asset('template/admin') }}\assets\images\logo-sm.png" alt="" height="22">
                                </span>
                            </a>
                        </div>

                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">

                                <li class="has-submenu acive">
                                    <a href="{{ url('home') }}" class="font-weight-bold text-white">
                                        <i class="ti-home"></i>Dashboard
                                    </a>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"> <i class="ti-files"></i>Data</a>
                                    <ul class="submenu">
                                        <li><a href="{{ url('user') }}">Data User</a></li>
                                        <li><a href="{{ url('calon') }}">Data Calon</a></li>
                                        <li><a href="{{ url('pemilih') }}">Tampilan Pemilih</a></li>

                                    </ul>
                                </li>

                                <!-- <li class="has-submenu">
                                    <a href="#"> <i class="ti-spray"></i>Other </a>
                                    <ul class="submenu">
                                        <li><a href="ui-elements.html">UI Elements</a></li>
                                        <li class="has-submenu">
                                            <a href="#">Components <div class="arrow-down"></div></a>
                                            <ul class="submenu">
                                                <li><a href="components-range-slider.html">Range Slider</a></li>
                                                <li><a href="components-alerts.html">Alerts</a></li>
                                                <li><a href="components-icons.html">Icons</a></li>
                                                <li><a href="components-widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="typography.html">Typography </a></li>

                                        <li class="has-submenu">
                                            <a href="#">Forms <div class="arrow-down"></div></a>
                                            <ul class="submenu">
                                                <li><a href="forms-general.html">General Elements</a></li>
                                                <li><a href="forms-advanced.html">Advanced Form</a></li>
                                            </ul>
                                        </li>

                                        <li class="has-submenu">
                                            <a href="#">Tables <div class="arrow-down"></div></a>
                                            <ul class="submenu">
                                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                                <li><a href="tables-advanced.html">Advanced Tables</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="charts.html">Charts </a></li>
                                        <li><a href="maps.html"> Maps </a></li>

                                    </ul>
                                </li> -->

                                <!-- <li class="has-submenu">
                                    <a href="#"> <i class="ti-widget"></i>Extra Pages </a>
                                    <ul class="submenu">
                                        <li><a href="extras-timeline.html">Timeline</a></li>
                                        <li><a href="extras-invoice.html">Invoice</a></li>
                                        <li><a href="extras-profile.html">Profile</a></li>
                                        <li><a href="extras-calendar.html">Calendar</a></li>
                                        <li><a href="extras-faqs.html">FAQs</a></li>
                                        <li><a href="extras-pricing.html">Pricing</a></li>
                                        <li><a href="extras-contacts.html">Contacts</a></li>

                                    </ul>
                                </li> -->

                                <li class="has-submenu">
                                    <a href="#"> <i class="mdi mdi-flip-horizontal"></i>History</a>
                                    <ul class="submenu">
                                        <li><a href="{{ url('history') }}">History Pemilihan</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- End navigation menu -->

                            <div class="clearfix"></div>
                        </div>
                        <!-- end #navigation -->

                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- end Topbar -->
            </header>
            <!-- End Navigation Bar-->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page" >
                <div class="content p-0 pt-3" style="min-height:0px !important;">

                    <!-- Start container-fluid -->
                    <div class="container-fluid">

                        @yield('content')

                    </div>
                    <!-- end container-fluid -->



                    <!-- Footer Start -->
                    <!-- <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    2020 &copy; Website E-Pilketos by <a href="">Krisna Hendra</a>
                                </div>
                            </div>
                        </div>
                    </footer> -->
                    <!-- end Footer -->

                </div>
                <!-- end content -->

            </div>
            <!-- END content-page -->

        </div>
        <!-- END wrapper -->


        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="font-16 m-0 text-white">Theme Customizer</h5>
            </div>
            <div class="slimscroll-menu">

                <div class="p-4">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, layout, etc.
                    </div>
                    <div class="mb-2">
                        <img src="assets\images\layouts\light.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked="">
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets\images\layouts\dark.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsstyle="assets/css/bootstrap-dark.min.css" data-appstyle="assets/css/app-dark.min.css">
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets\images\layouts\rtl.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appstyle="assets/css/app-rtl.min.css">
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <a href="https://1.envato.market/EK71X" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a>
                </div>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ URL::asset('template/admin') }}\assets\js\vendor.min.js"></script>

        <script src="{{ URL::asset('template/admin') }}\assets\libs\morris-js\morris.min.js"></script>
        <script src="{{ URL::asset('template/admin') }}\assets\libs\raphael\raphael.min.js"></script>

        <script src="{{ URL::asset('template/admin') }}\assets\js\pages\dashboard.init.js"></script>
        <!-- Required datatable js -->
        <script src="{{ URL::asset('template/admin') }}\assets\libs\datatables\jquery.dataTables.min.js"></script>
        <script src="{{ URL::asset('template/admin') }}\assets\libs\datatables\dataTables.bootstrap4.min.js"></script>

        <!-- Buttons examples -->
        <script src="{{ URL::asset('template/admin') }}\assets\libs\datatables\dataTables.buttons.min.js"></script>
        <script src="{{ URL::asset('template/admin') }}\assets\libs\datatables\buttons.bootstrap4.min.js"></script>
        <script src="{{ URL::asset('template/admin') }}\assets\libs\datatables\dataTables.keyTable.min.js"></script>
        <script src="{{ URL::asset('template/admin') }}\assets\libs\datatables\dataTables.select.min.js"></script>
        <script src="{{ URL::asset('template/admin') }}\assets\libs\jszip\jszip.min.js"></script>
        <script src="{{ URL::asset('template/admin') }}\assets\libs\pdfmake\pdfmake.min.js"></script>
        <script src="{{ URL::asset('template/admin') }}\assets\libs\pdfmake\vfs_fonts.js"></script>
        <script src="{{ URL::asset('template/admin') }}\assets\libs\datatables\buttons.html5.min.js"></script>
        <script src="{{ URL::asset('template/admin') }}\assets\libs\datatables\buttons.print.min.js"></script>

        <!-- Responsive examples -->
        <script src="{{ URL::asset('template/admin') }}\assets\libs\datatables\dataTables.responsive.min.js"></script>
        <script src="{{ URL::asset('template/admin') }}\assets\libs\datatables\responsive.bootstrap4.min.js"></script>

        <!-- Datatables init -->
        <script src="{{ URL::asset('template/admin') }}\assets\js\pages\datatables.init.js"></script>

        <!-- App js -->
        <script src="{{ URL::asset('template/admin') }}\assets\js\app.min.js"></script>
        <script>
        window.setTimeout("waktu()", 1000);

        function waktu() {
          var waktu = new Date();
          setTimeout("waktu()", 1000);
          var jam = waktu.getHours() + "";
          var menit = waktu.getMinutes() + "";
          var detik = waktu.getSeconds() + "";

          document.getElementById("jam").innerHTML = (jam.length==1?"0"+jam:jam)+" :";
          document.getElementById("menit").innerHTML = (menit.length==1?"0"+menit:menit)+" :";
          document.getElementById("detik").innerHTML = detik.length==1?"0"+detik:detik;
        }
        </script>

    </body>

</html>
