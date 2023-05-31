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
                <a class="navbar-brand" href="welcome.blade.php"> <img src="{{ asset('img/logo0.png') }}" class="logo"
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

    <div class="container">
        <div class="row">

            <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                <h4 style="color:#227d94">DOMINE : {{ $domaine }}</h4>
                <hr>

            </div>
        </div>
    </div>
    @if (session('fail'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
    <section>
        @foreach ($offres as $offre)
            <div class="company-list">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <div class="company-logo">
                            @if ($offre->entreprise && $offre->entreprise->image)
                                <img src="{{ asset('storage/' . $offre->entreprise->image) }}" class="img-responsive"
                                    alt="" />
                            @endif
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="company-content">
                            <h3 class="company-name">{{ $offre->titre_offre }}</h3>
                            <p>Entreprise : {{ $offre->entreprise->nom }}
                                @if ($offre->type_offre === 'emploi')
                                    <span>Type : Offre d'emploi</span>
                                    <span class="fa fa-money">{{ $offre->emploi->salaire }}</span>
                                    <span class="company-location"><i class="fa fa-map-marker"></i>
                                        {{ $offre->emploi->lieu_emploi }}</span>
                                    Type de contrat : {{ $offre->emploi->type_contrat }}
                            </p>
                        @elseif ($offre->type_offre === 'stage')
                            <span>Type : Offre de stage</span>
                            <span class="fa fa-money"> {{ $offre->stage->remuneration_stage }} dh</span>
                            <span class="company-location"><i class="fa fa-map-marker"></i>
                                {{ $offre->stage->remuneration_stage }}</span>
                            <span class="company-location"><i
                                    class="fa fa-map-marker"></i>{{ $offre->stage->lieu_stage }}</span>
                            Durée : {{ $offre->stage->duree_stage }} mois</p>
        @endif
        </div>
        </div>
        <div class="col-md-2 col-sm-2">
            <a onclick="window.location.href='{{ route('offre.show', $offre->id_offre) }}'" class="btn view-job">View
                Job
            </a>
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
