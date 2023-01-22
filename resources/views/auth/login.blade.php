<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/SukuuShare.png') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- icon css-->
    <link rel="stylesheet" href="assets/elagent-icon/style.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="css/style-main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>SukuuShare | Authentification</title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src={{ asset('img/SukuuShare.png') }} alt="logo">

                    <h4><span>SukuuShare</span></h4>
                </div>
            </div>
            <h2 class="head">Pour rester toujours Smart...</h2>
            {{-- <p></p> --}}
        </div>
    </div>
    <div class="body_wrapper">
        <section class="signup_area">
            <div class="row ml-0 mr-0">
                <div class="sign_left signin_left">
                    <h2>Un réseau social pour tous les élèves et étudiants du Togo.</h2>
                    <img class="position-absolute top" src="img/signup/top_ornamate.png" alt="top">
                    <img class="position-absolute bottom" src="img/signup/bottom_ornamate.png" alt="bottom">
                    <img class="position-absolute middle" src="img/signup/door.png" alt="bottom">
                    <div class="round"></div>
                </div>
                <div class="sign_right signup_right">
                    <div class="sign_inner signup_inner">
                        <div class="text-center">
                            <h3>Se connecter à SukuuShare</h3>
                            <p>Vous n'avez pas encore de compte? <a href="{{ route('auth.user.register') }}">Inscrivez-vous ici</a></p>
                            <a href="#" class="btn-google"><img src="img/signup/gmail.png" alt=""><span class="btn-text">Connectez-vous avec Gmail</span></a>
                        </div>
                        <div class="divider">
                            <span class="or-text">ou</span>
                        </div>
                        <form action="{{ route('auth.user.login') }}" method="POST" class="row login_form">
                            {{ csrf_field() }}
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Votre adresse mail</div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre adresse mail" value="{{old('email')}}">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Mot de passe</div>
                                <div class="confirm_password">
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Entrez votre mot de passe" autocomplete="off">
                                    <a href="{{ route('auth.recovery') }}" class="forget_btn">Mot de passe oublié?</a>
                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                <p class="error">@error('credentials') {{$message}} @enderror</p>
                                <button type="submit" class="btn action_btn thm_btn">Connexion</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/pre-loader.js"> </script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
