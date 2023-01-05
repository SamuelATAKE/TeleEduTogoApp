<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- icon css-->
    <link rel="stylesheet" href="assets/elagent-icon/style.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="css/style-main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>TeleEduTogoApp | Authentification</title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="img/spinner_logo.png" alt="">
                    <h4><span>TeleEduTogo</span>App</h4>
                </div>
            </div>
            <h2 class="head">Pour rester toujours Smart...</h2>
            {{-- <p></p> --}}
        </div>
    </div>
    <div class="body_wrapper">
        <section class="signup_area signup_area_height">
            <div class="row ml-0 mr-0">
                <div class="sign_left signup_left">
                    <h2>Un réseau social pour tous les élèves et étudiants du Togo</h2>
                    <img class="position-absolute top" src="img/signup/top_ornamate.png" alt="top">
                    <img class="position-absolute bottom" src="img/signup/bottom_ornamate.png" alt="bottom">
                    <img class="position-absolute middle wow fadeInRight" src="img/signup/man_image.png" alt="bottom">
                    <div class="round wow zoomIn" data-wow-delay="0.2s"></div>
                </div>
                <div class="sign_right signup_right">
                    <div class="sign_inner signup_inner">
                        <div class="text-center">
                            <h3>Créer votre compte TeleEduTogo</h3>
                            <p>Avez-vous déjà un compte? <a href="{{ route('auth.user.login_page') }}">Se connecter</a></p>
                            <a href="#" class="btn-google"><img src="img/signup/gmail.png" alt=""><span class="btn-text">S'inscrire avec Google</span></a>
                        </div>
                        <div class="divider">
                            <span class="or-text">ou</span>
                        </div>
                        <form action="{{ route('auth.user.store') }}" method="POST" class="row login_form">
                            {{ csrf_field() }}
                            @method('post')
                            {{-- Nom + Prenom --}}
                            <div class="col-sm-6 form-group">
                                <label for="firstname" class="small_text">Prénom(s)</label>
                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Entrez votre prénom" value="{{old('firstname')}}">
                                <p class="error">@error('firstname') {{$message}} @enderror</p>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="lastname" class="small_text">Nom</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Entrez votre nom" value="{{old('lastname')}}">
                                <p class="error">@error('lastname') {{$message}} @enderror</p>
                            </div>
                            {{-- Niveau scolaire --}}
                            <div class="col-sm-4 form-group">
                                <label for="cycle" class="small_text">Cycle Scolaire</label>
                                <select class="form-control" name="cycle" id="cycle">
                                    @foreach ($cycles as $cycleCodeName => $infos)
                                    <option value="{{$cycleCodeName}}">{{$infos["fullName"]}}</option>
                                    @endforeach
                                </select>
                                <p class="error">@error('cycle') {{$message}} @enderror</p>
                                <p class="error">@error('level') {{$message}} @enderror</p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="classe" class="small_text">Classe</label>
                                <select class="form-control" name="classe" id="classe">
                                    @foreach ($classes as $classeCodeName => $infos)
                                        <option value="{{$classeCodeName}}">{{$infos["fullName"]}}</option>
                                    @endforeach
                                </select>
                                <p class="error">@error('level') {{$message}} @enderror</p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="serie" class="small_text">Série</label>
                                <select class="form-control" name="serie" id="serie">
                                    <option value=""></option>
                                    @foreach ($series as $serieCodeName => $infos)
                                        <option value="{{$serieCodeName}}">{{$infos["fullName"]}}</option>
                                    @endforeach
                                </select>
                                <p class="error">@error('level') {{$message}} @enderror</p>
                            </div>
                            {{-- Credentials --}}
                            <div class="col-lg-12 form-group">
                                <label for="email" class="small_text">Votre adresse mail</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre adresse mail" value="{{old('email')}}">
                                <p class="error">@error('email') {{$message}} @enderror</p>
                            </div>
                            <div class="col-lg-12 form-group">
                                <label for="password" class="small_text">Mot de passe</label>
                                <input id="password" name="password" type="password" class="form-control" placeholder="Entrez votre mot de passe" autocomplete="off" value="{{old('password')}}">
                                <p class="error">@error('password') {{$message}} @enderror</p>
                            </div>
                            <div class="col-lg-12 form-group">
                                <label for="password_confirmation" class="small_text">Confirmation de mot de passe</label>
                                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" placeholder="Confirmez votre mot de passe" autocomplete="off">
                                <p class="error">@error('password_confirmation') {{$message}} @enderror</p>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="check_box">
                                    <input type="checkbox" id="confid-accept" name="confid-accept">
                                    <label class="l_text" for="confid-accept">J'accepte la <span>politique de confidentialité de TeleEduTogo</span></label>
                                    <p class="error">@error('confid-accept') {{$message}} @enderror</p>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn action_btn thm_btn">Créer un compte</button>
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
