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
                <form method="POST" action="{{ route('user.create') }}" enctype="multipart/form-data">
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
                            <input id="nom" placeholder="Nom" class="form-control input-lg" type="text"
                                class="@error('nom') is-invalid @enderror" name="nom" required autocomplete="nom"
                                autofocus>

                            @error('nom')
                                <span role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="prenom"></label>

                        <div>
                            <input id="prenom" placeholder=" Prenom" class="form-control input-lg" type="text"
                                class="@error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}"
                                required autocomplete="prenom">

                            @error('prenom')
                                <span role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="email"></label>

                        <div>
                            <input id="email" placeholder="Email" class="form-control input-lg" type="email"
                                class="@error('email') is-invalid @enderror" name="email" required
                                autocomplete="email">

                            @error('email')
                                <span role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="password"></label>

                        <div>
                            <input id="password" placeholder="Password" class="form-control input-lg" type="password"
                                class="@error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="password-confirm"></label>

                        <div>
                            <input id="password-confirm" placeholder="Confirm password"class="form-control input-lg"
                                type="password" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <!--<div>
            <label for="ville">{{ __('Ville') }}</label>

            <div>
            <input id="ville" type="text" class="@error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville">

            @error('ville')
    <span role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
@enderror
            </div>
            </div>-->
                    <div>
                        <label for="ville"></label><br>
                        <input type="text" class="form-control input-lg" placeholder="Ville" name="ville">
                    </div>

                    <div>
                        <label for="adresse"></label>

                        <div>
                            <input id="adresse" class="form-control input-lg" type="text"
                                class="@error('adresse') is-invalid @enderror" name="adresse" placeholder="Adresse"
                                class="form-control input-lg" required autocomplete="adresse">

                            @error('adresse')
                                <span role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="num_tel"></label>

                        <div>
                            <input id="num_tel" class="form-control input-lg" placeholder="Tel" type="tel"
                                class="@error('num_tel') is-invalid @enderror" name="num_tel" required
                                autocomplete="tel">

                            @error('num_tel')
                                <span role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="niveau_scolaire">Niveau scolaire</label><br>
                        <select name="niveau_scolaire" class="form-control input-lg">
                            <option value="bac">Bac</option>
                            <option value="bac+1">Bac+1</option>
                            <option value="bac+2">Bac+2</option>
                            <option value="bac+3">Bac+3</option>
                            <option value="bac+4">Bac+4</option>
                            <option value="bac+5">Bac+5</option>
                            <option value="doctorant">Doctorant</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cv">Votre CV</label>
                        <input type="file" class="form-control input-lg" id="cv" name="cv"
                            accept=".pdf">
                    </div>
                    <div>

                        <label for="image">Vote photo</label>

                        <div>
                            <input id="image" class="form-control input-lg" type="file"
                                class="@error('image') is-invalid @enderror" name="image" accept="image/*">

                            @error('image')
                                <span role="alert">
                                    <strong>
                                        {{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">
                            S'inscrire
                        </button>
                    </div>
                </form>

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
