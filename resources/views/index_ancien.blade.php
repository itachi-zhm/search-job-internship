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

    <style>
        .btn-primary {
            background-color: rgba(0, 162, 255, 0.986);
            border-color: rgba(0, 162, 255, 0.986);
        }

        .btn-primary:hover {
            background-color: rgba(0, 162, 255, 0.986);
            border-color: rgba(0, 162, 255, 0.986);
        }
    </style>
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
                <a class="navbar-brand" href="index.blade.php"><img src="img/logo0.png" class="logo"
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
                </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- Navigation End  -->

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <section class="main-banner" style="background:#242c36 url(img/banner10.jpg) no-repeat">
        <div class="container">
            <div class="caption">

                <br />
                <br />
                <div class="container mt-5">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: white">Espace Entreprise</h5>
                                    <p class="card-text" style="font-size: 18px">Accédez à notre espace dédié aux
                                        entreprises pour publier des
                                        offres
                                        d'emploi, trouver des talents et gérer le processus de recrutement.</p>
                                    <a href="/entreprise" class="btn btn-primary">Accéder</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: white">Espace Employe</h5>
                                    <p class="card-text" style="font-size: 18px">Découvrez notre espace pour les
                                        employés où vous pouvez
                                        rechercher des
                                        emplois, postuler à des offres, et développer votre carrière.</p>
                                    <a href="welcome.blade.php" class="btn btn-primary">Accéder</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            </div>
        </div>
    </section>
    </div>
    <div class="copy-right">
        <p>&copy;Copyright 2018 Job Dream | Design By <a href="https://themezhub.com/">ThemezHub</a></p>
    </div>
    </footer>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/bootsnav.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
