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
    <!-- Navigation End  -->

    <!-- login section start -->
    <section class="login-wrapper">
        <div class="container">
            <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">

                <img class="img-responsive" alt="logo" src="{{ asset('img/logo0.png') }}">

                <form method="POST" action="{{ route('user.check') }}">
                    @csrf
                    <div>
                        <label for="email"></label>

                        <div>
                            <input id="email" type="email" class="form-control input-lg" placeholder="User Name"
                                class="@error('email') is-invalid @enderror" name="email" required
                                autocomplete="email" autofocus>

                        </div>
                    </div>

                    <div>
                        <label for="password"></label>

                        <div>
                            <input id="password" class="form-control input-lg" placeholder="password" type="password"
                                class="@error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">


                        </div>
                    </div>


                    <div>
                        <label><a href="">Forget Password?</a></label>
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                        <p>Have't Any Account <a href="register.blade.php">Create An Account</a></p>


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
</body>

</html>
