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

                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- Navigation End  -->

    <!-- login section start -->


    <section class="main-banner" style="background:#6fa1df url(img/register.jpg) no-repeat">
        <div class="container">
            <div class="caption">
                <h2>CHOISIR VOTRE ESPACE</h2>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <a href="/entreprise/register" class="btn btn-primary">ENTREPRISE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <a href="/user/register" class="btn btn-primary">EMPLOYE</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </fieldset>
            </div>
        </div>
    </section>
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
