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

                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

    <!-- register section End -->
    <section class="register-wrapper">
        <div class="container">
            <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                <form method="POST" action="{{ route('entreprise.create') }}" enctype="multipart/form-data">
                    <img class="img-responsive" alt="logo" src="{{ asset('img/logo0.png') }}">

                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif

                    @csrf

                    <div>
                        <label for="nom"></label>

                        <div>
                            <input id="nom" class="form-control input-lg" type="text" name="nom"
                                placeholder="Nom" required autofocus />
                        </div>
                    </div>

                    <div>
                        <label for="email"></label>

                        <div>
                            <input id="email" class="form-control input-lg" placeholder="Email" type="email"
                                name="email" required />
                        </div>
                    </div>

                    <div>
                        <label for="description"></label>

                        <div>
                            <textarea class="form-control input-lg" placeholder="Description" id="description" name="description" rows="5"></textarea>
                        </div>
                    </div>
                    <div>
                        <label for="ville"></label><br>
                        <input type="text" class="form-control input-lg" placeholder="Ville" name="ville">
                    </div>

                    <div>
                        <label for="adresse"></label>

                        <div>
                            <input id="adresse" class="form-control input-lg" placeholder="Adresse" type="text"
                                name="adresse" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="domaine">Domaine</label>
                        <select class="form-control input-lg" name="domaine" id="domaine" class="form-control">
                            <option value="technologie">Technologie</option>
                            <option value="santé">Santé</option>
                            <option value="industrie">Industrie</option>
                            <option value="agriculture">Agriculture</option>
                            <option value="restauration">Restauration</option>
                        </select>
                    </div>


                    <div>
                        <label for="password"></label>

                        <div>
                            <input id="password" class="form-control input-lg" placeholder="Password" type="password"
                                name="password" required autocomplete="new-password" />
                        </div>
                    </div>

                    <div>
                        <label for="password-confirm"></label>

                        <div>
                            <input id="password-confirm" class="form-control input-lg" placeholder="Confirm password"
                                type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
                    </div>

                    <div>
                        <label for="num_tel"></label>

                        <div>
                            <input id="num_tel" type="text" name="num_tel" class="form-control input-lg"
                                placeholder="Tel" required />
                        </div>
                    </div>

                    <div>
                        <label for="image">Votre image</label>

                        <div>
                            <input id="image" class="form-control input-lg" type="file" name="image" />
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
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
