<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">



    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset(' images/favicon.ico') }}" type="image/ico" />

    <title>Entreprise</title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet" />
    <!-- iCheck -->
    <link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet" />

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}"
        rel="stylesheet" />
    <!-- JQVMap -->
    <link href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet" />
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="" class="site_title"><i class="company-icon fa fa-paw"></i>
                            <span>Dream Job</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{ asset('storage/' . Auth::guard('entreprise')->user()->image) }}"
                                alt="Photo de profil" class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{ Auth::guard('entreprise')->user()->nom }}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-plus"></i> OFFRES <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="index.html">Voir offres d'emploi</a></li>
                                        <li><a href="index2.html">gestion offres d'emploi</a></li>
                                        <li><a href="index3.html">Voir offres d'emploi</a></li>
                                        <li><a href="index2.html">gestion offres de stage</a></li>

                                    </ul>
                                </li>

                                <li><a><i class="fa fa-globe"></i> CANDIDATURES<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="index2.html">Voir les candidatures</a></li>
                                        <li><a href="index.html">Traiter les candidatures</a></li>


                                    </ul>
                                </li>
                                <li><a><i class="fa fa-user"></i> PROFILE<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="index.html">Voir profile</a></li>
                                        <li><a href="index2.html">Modifier profile</a></li>

                                    </ul>
                                </li>

                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>


            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('storage/' . Auth::guard('entreprise')->user()->image) }}"
                                        alt="">{{ Auth::guard('entreprise')->user()->nom }}
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/"> Home</a>
                                    <a class="dropdown-item" href="/about">About</a>

                                    <a class="dropdown-item" href="/profile">Profile</a>
                                    <a class="dropdown-item" href="{{ route('entreprise.logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                    <form action="{{ route('entreprise.logout') }}" method="post" class="d-none"
                                        id="logout-form">@csrf</form>

                                </div>
                            </li>


                        </ul>
                        </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="row" style="display: inline-block;">
                    <div class="tile_count">
                        <div class="col-md-2 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                            <div class="count">2500</div>
                            <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                        </div>
                        <div class="col-md-2 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
                            <div class="count">123.50</div>
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i>
                                From last Week</span>
                        </div>
                        <div class="col-md-2 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
                            <div class="count green">2,500</div>
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i>
                                From last Week</span>
                        </div>
                        <div class="col-md-2 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
                            <div class="count">4,567</div>
                            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i>
                                From last Week</span>
                        </div>
                        <div class="col-md-2 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
                            <div class="count">2,315</div>
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i>
                                From last Week</span>
                        </div>
                        <div class="col-md-2 col-sm-4  tile_stats_count">
                            <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                            <div class="count">7,325</div>
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i>
                                From last Week</span>

                        </div>
                    </div>
                </div>




                <div class="container">
                    <div class="row">
                        <div class="col-md-12 offset-md-12" style="margin-top: 300px">
                            <h4>Entreprise Dashboard</h4>
                            <hr>
                            <table class="table table-striped table-inverse table-responsive">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>image</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ Auth::guard('entreprise')->user()->nom }}</td>
                                        <td>{{ Auth::guard('entreprise')->user()->email }}</td>
                                        <td><img src="{{ asset('storage/' . Auth::guard('entreprise')->user()->image) }}"
                                                alt="Photo de profil" width="100" height="100">

                                        </td>
                                        <td>
                                            <a href="{{ route('entreprise.logout') }}"
                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                            <form action="{{ route('entreprise.logout') }}" method="post"
                                                class="d-none" id="logout-form">@csrf</form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ route('offre.create') }}">Ajouter une offre</a>
                    </div>
                </div>


            </div>
        </div>


        <!-- jQuery -->
        <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <!-- FastClick -->
        <script src=".{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>
        <!-- NProgress -->
        <script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>
        <!-- Chart.js -->
        <script src="{{ asset('vendors/Chart.js/dist/Chart.min.js') }}"></script>
        <!-- gauge.js -->
        <script src="{{ asset('vendors/gauge.js/dist/gauge.min.js') }}"></script>
        <!-- bootstrap-progressbar -->
        <script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
        <!-- iCheck -->
        <script src="{{ asset('vendors/iCheck/icheck.min.js') }}"></script>
        <!-- Skycons -->
        <script src="{{ asset('vendors/skycons/skycons.js') }}"></script>
        <!-- Flot -->
        <script src="{{ asset('vendors/Flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('vendors/Flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('vendors/Flot/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('vendors/Flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('vendors/Flot/jquery.flot.resize.js') }}"></script>
        <!-- Flot plugins -->
        <script src="{{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
        <script src="{{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
        <script src="{{ asset('vendors/flot.curvedlines/curvedLines.js') }}"></script>
        <!-- DateJS -->
        <script src="{{ asset('vendors/DateJS/build/date.js') }}"></script>
        <!-- JQVMap -->
        <script src="{{ asset('vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
        <script src="{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
        <script src="{{ asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="{{ asset('vendors/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

        <!-- Custom Theme Scripts -->
        <script src="{{ asset('js/custom.min.js') }}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{ asset('js/custom.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src=" {{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/bootsnav.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <!-- JavaScript (optionnel, si vous utilisez des fonctionnalités JavaScript de Bootstrap) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
