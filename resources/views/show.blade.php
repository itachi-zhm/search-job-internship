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
                <a class="navbar-brand" href="welcome.blade.php"><img src="{{ asset('img/logo0.png') }}" class="logo"
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

    <div class="container">
        <div class="caption">
            <br /><br />
            <h4>LES DETAILS DE L'OFFRE</h4>

        </div>
    </div>
    <section class="profile-detail">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="basic-information">
                        <div class="col-md-3 col-sm-3">
                            <img src="{{ asset('storage/' . $offre->entreprise->image) }}" class="img-responsive"
                                alt="Logo entreprise" />
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="profile-content">
                                <h2>{{ $offre->entreprise->nom }}
                                    <span>Titre : {{ $offre->titre_offre }}</span>
                                </h2>
                            </div>
                            <ul class="information">
                                @if ($offre->type_offre === 'emploi')
                                    <li><span> Salaire :</span> {{ $offre->emploi->salaire }} DH</li>
                                    <li><span><i class="fa fa-map-marker"></i>
                                            Lieu : </span>{{ $offre->emploi->lieu_emploi }}</li>
                                    <li><span>Type de contrat : </span>{{ $offre->emploi->type_contrat }}</p>
                                    @else
                                    <li><span>Rémunération : </span> {{ $offre->stage->remuneration_stage }} DH </li>
                                    <li><span><i class="fa fa-map-marker"></i>
                                            Lieu : </span>{{ $offre->stage->lieu_stage }}</li>
                                    <li><span>Durée : </span> {{ $offre->stage->duree_stage }} mois</li>
                                @endif
                            </ul>

                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-briefcase"></span>
                            Description de l'offre
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <p> {{ $offre->description_offre }}</p>
                        </div>
                    </div>
                </div>
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
