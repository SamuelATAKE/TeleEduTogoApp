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
    <title>SukuuShare | Page d'Erreur</title>
    <link rel="stylesheet" href="scss/_button.scss">
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
        <section class="error_area bg_color">
            <div class="error_dot one"></div>
            <div class="error_dot two"></div>
            <div class="error_dot three"></div>
            <div class="error_dot four"></div>
            <div class="container">
                <div class="error_content_two text-center">
                    <div class="error_img">
                        <img class="p_absolute error_shap" src="img/404_bg.png" alt="">
                        <div class="one wow clipInDown" data-wow-delay="1s"><img class="img_one" src="img/404_two.png" alt=""></div>
                        <div class="two wow clipInDown" data-wow-delay="1.5s"><img class="img_two" src="img/404_three.png" alt=""></div>
                        <div class="three wow clipInDown" data-wow-delay="1.8s"><img class="img_three" src="img/404_one.png" alt=""></div>
                    </div>
                    <h2>Erreur lors du chargement de la page demandée.</h2>
                    <p>Il se pourrait que cette page soit en cours de développement..</p>
                    <form action="#" class="error_search">
                        <input type="text" class="form-control" placeholder="Recherche">
                    </form>
                    <a href="{{ route('welcome') }}" class="action_btn box_shadow_none"><i class="arrow_left"></i>Retour à la page d'accueil</a>
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