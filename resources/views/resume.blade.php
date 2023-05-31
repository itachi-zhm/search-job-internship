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
    >
    <link rel="stylesheet" href="css/main.css">

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
                <a class="navbar-brand" href="welcome.blade.php"><img src="{{ asset('img/logo0.png') }}" class="logo"
                        alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>

                    <li>
                        <a href="/resume">Profile {{ Auth::guard('web')->user()->prenom }}</a>
                    </li>
                    <li> <a href="{{ route('user.logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf
                        </form>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- Navigation End  -->

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container" style="backend:#242c36 url(https://via.placeholder.com/1920x600)no-repeat;">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                <h2>Welcome in your profile</h2>

            </div>
        </div>
    </div>

    <section class="profile-detail">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="basic-information">
                        <div class="col-md-3 col-sm-3">
                            <img src="{{ asset('storage/' . Auth::guard('web')->user()->image) }}" alt=""
                                class="img-responsive">
                        </div>

                        <div class="col-md-9 col-sm-9">
                            <div class="profile-content">
                                <h2>{{ Auth::guard('web')->user()->prenom }}
                                    {{ Auth::guard('web')->user()->nom }}<span>Informations :</span></h2>

                                <ul class="information">

                                    <li><span>Email:</span>{{ Auth::guard('web')->user()->email }}/li>
                                    <li><span>Tel:</span>{{ Auth::guard('web')->user()->num_tel }}</li>
                                    <li><span>Ville:</span>{{ Auth::guard('web')->user()->ville }} </li>
                                    <li><span>Adresse:</span>{{ Auth::guard('web')->user()->adresse }} </li>
                                    <li><span>Niveau scolaire:</span> {{ Auth::guard('web')->user()->niveau_scolaire }}
                                    </li>
                                    <li><span>Votre CV:</span>
                                        <a href="{{ asset('storage/' . Auth::guard('web')->user()->cv) }}"
                                            target="_blank">cliquez ici</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="company-list">


        <div class="row">
            <a href="/offres" class="btn brows-btn"> Brows All Jobs </a>

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
