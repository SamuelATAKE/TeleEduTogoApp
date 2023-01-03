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
                            <p>Avez-vous déjà un compte? <a href="{{ route('auth.login') }}">Se connecter</a></p>
                            <a href="#" class="btn-google"><img src="img/signup/gmail.png" alt=""><span class="btn-text">S'inscrire avec Google</span></a>
                        </div>
                        <div class="divider">
                            <span class="or-text">ou</span>
                        </div>
                        <form action="#" class="row login_form">
                            <div class="col-sm-6 form-group">
                                <div class="small_text">Prénom(s)</div>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Entrez votre prénom">
                            </div>
                            <div class="col-sm-6 form-group">
                                <div class="small_text">Nom</div>
                                <input type="text" class="form-control" name="lname" id="lname" placeholder="Entrez votre nom">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Votre adresse mail</div>
                                <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse mail">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Mot de passe</div>
                                <input id="signup-password" name="signup-password" type="password" class="form-control" placeholder="Entrez votre mot de passe" autocomplete="off">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Confirmation de mot de passe</div>
                                <input id="confirm-password" name="confirm-password" type="password" class="form-control" placeholder="Confirmez votre mot de passe" autocomplete="off">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="check_box">
                                    <input type="checkbox" value="None" id="squared2" name="check">
                                    <label class="l_text" for="squared2">J'accepte la <span>politique de confidentialité de TeleEduTogo</span></label>
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