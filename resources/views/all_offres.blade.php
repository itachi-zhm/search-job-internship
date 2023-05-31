<!-- offres/index.blade.php -->
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

    <section class="jobs">
        <div class="container">
            <div class="row heading">
                <h2>VOICI LES OFFRES DISPONIBLES</h2>
            </div>
            <div>
                <h6>Les offres des emplois </h6>
                @foreach ($offresEmploi as $offre)
                    <div class="company-list">

                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="company-logo">

                                    <img src="{{ asset('storage/' . $offre->entreprise->image) }}"
                                        class="img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="company-content">
                                    <h3 class="company-name">{{ $offre->titre_offre }}</h3>
                                    <p><span class="fa fa-money">{{ $offre->emploi->salaire }} dh </span>
                                        <span class="company-location"><i class="fa fa-map-marker"></i>
                                            {{ $offre->emploi->lieu_emploi }}</span>
                                        Contrat : {{ $offre->emploi->type_contrat }}
                                    </p>

                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <a onclick="window.location.href='{{ route('offre.show', $offre->id_offre) }}'"
                                    class="btn view-job"> View Job </a>
                            </div>

                        </div>
                    </div>
                @endforeach

                <h6>Les offres de stages </h6>
                @foreach ($offresStage as $offre)
                    <div class="company-list">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="company-logo">

                                    <img src="{{ asset('storage/' . $offre->entreprise->image) }}"
                                        class="img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="company-content">
                                    <h3 class="company-name">{{ $offre->titre_offre }}</h3>
                                    <p><span class="fa fa-money"> {{ $offre->stage->remuneration_stage }} dh</span>
                                        <span class="company-location"><i class="fa fa-map-marker"></i>
                                            {{ $offre->stage->lieu_stage }}</span>
                                        Durée : {{ $offre->stage->duree_stage }} mois
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-2 col-sm-2">
                                <a onclick="window.location.href='{{ route('offre.show', $offre->id_offre) }}'"
                                    class="btn view-job">View Job </a>
                            </div>

                        </div>
                    </div>
                @endforeach
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
