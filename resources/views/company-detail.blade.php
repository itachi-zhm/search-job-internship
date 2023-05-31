<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Job Dream | Responsive Job Portal Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- All Plugin Css -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">

    <!-- Style & Common Css -->
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">


</head>

<body>

    <!-- Navigation Start  -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="welcome.blade.php"><img src="img/logo0.png" class="logo"
                        alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                    <li><a href="/resume">Profile</a></li>
                    <li><a href="/offres">Emploi</a></li>
                    <li><a href="/offres">Stage</a></li>
                    <li class="active"><a href="/offres">Browse Jobs</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- Navigation End  -->

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <section style="backend:#242c36 url(https://via.placeholder.com/1920x600)no-repeat;">
        <div class="container">
            <div class="caption">
                <h2>LES DETAILS DE L'OFFRE</h2>

            </div>
        </div>
    </section>


    <section class="profile-detail">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="basic-information">
                        <div class="col-md-3 col-sm-3">
                            <img src="img/microsoft.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="profile-content">
                                <h2>Microsoft<span>Back-End developer</span></h2>
                                <p>offre d'emploi</p>
                                <ul class="information">
                                    <li><span>Lieu:</span>Casablance</li>
                                    <li><span>Type de contrat:</span>CDI</li>
                                    <li><span>salaire:</span>5,000dh - 10,000dh</li>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-user fa-fw"></i>
                            <h5> Description de l'offre</h5>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <p>Nous recherchons un développeur Full Stack talentueux
                                pour rejoindre notre équipe dynamique et contribuer au développement de nos
                                applications web</p>
                        </div>
                    </div>



                    <div class="copy-right">
                        <p> <span style="color:red">DREAM JOB </span> la meilleur application pour trouver
                            l'emploi de votre rêve
                        </p>
                    </div>

                    <script type="text/javascript" src="js/jquery.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>
                    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
                    <script src="js/bootsnav.js"></script>
                    <script src="js/main.js"></script>
</body>

</html>
