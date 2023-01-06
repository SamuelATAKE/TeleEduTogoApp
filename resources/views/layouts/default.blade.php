<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick/slick-theme.css') }}">
    <!-- icon css-->
    <link rel="stylesheet" href="{{ asset('assets/elagent-icon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/niceselectpicker/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/animation/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <title>TeleEduTogoApp</title>
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
        <nav class="navbar navbar-expand-lg menu_one menu_purple sticky-nav">
            <div class="container">
                <a class="navbar-brand header_logo" href="/">
                    <img class="first_logo sticky_logo" style="width: 25%; height:25%" src="img/logo.png"
                        srcset="img/logo.png 2x" alt="logo">
                    <img class="white_logo main_logo" style="width: 25%; height:25%" src="img/logo.png"
                        srcset="img/logo.png 2x" alt="logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="hamburger-cross">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu ml-auto">
                        <li class="nav-item dropdown submenu active">
                            <a href="/" class="nav-link ">Accueil</a>
                            {{-- <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item active"><a href="index.html" class="nav-link">Creative Helpdesk</a>
                                </li>
                                <li class="nav-item"><a href="index-multi.html" class="nav-link">Multi Helpdesk</a></li>
                                <li class="nav-item"><a href="index-classic.html" class="nav-link">Classic Helpdesk</a>
                                </li>
                            </ul> --}}
                        </li>
                        <li class="nav-item dropdown submenu mega_menu tab-demo">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Cours</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-lg-5 tabHeader">
                                            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                                aria-orientation="vertical">
                                                <li class="nav-item active">
                                                    <a class="nav-link" id="v-pills-doc-tab" data-toggle="pill"
                                                        href="#v-pills-doc" role="tab" aria-controls="v-pills-doc"
                                                        aria-selected="true">Primaire</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-code-tab" data-toggle="pill"
                                                        href="#v-pills-code" role="tab" aria-controls="v-pills-code"
                                                        aria-selected="false">Collège</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-layout-tab" data-toggle="pill"
                                                        href="#v-pills-layout" role="tab"
                                                        aria-controls="v-pills-layout" aria-selected="false">Lycée</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-tour-tab" data-toggle="pill"
                                                        href="#v-pills-tour" role="tab"
                                                        aria-controls="v-pills-tour"
                                                        aria-selected="false">Université</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-content-tab" data-toggle="pill"
                                                        href="#v-pills-content" role="tab"
                                                        aria-controls="v-pills-content"
                                                        aria-selected="false">Autres</a>
                                                </li>
                                                {{-- <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-pages-tab" data-toggle="pill"
                                                        href="#v-pills-pages" role="tab" aria-controls="v-pills-pages"
                                                        aria-selected="false">Other Pages</a>
                                                </li> --}}
                                            </ul>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="tab-content tabContent" id="v-pills-tabContent">
                                                <div class="tab-pane fade active show" id="v-pills-doc"
                                                    role="tabpanel" aria-labelledby="v-pills-doc-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li> <a href="doc-main.html"> CP</a> </li>
                                                            <li> <a href="archive-doc-single.html"> CE </a> </li>
                                                            <li> <a href="archive-doc-multi.html"> CM </a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="doc-main.html">
                                                            <p>Devoirs</p>
                                                        </a>
                                                        <a href="doc-main.html">
                                                            <p>BEPC</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-code" role="tabpanel"
                                                    aria-labelledby="v-pills-code-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li><a href="doc-element-tab.html">6ème</a></li>
                                                            <li><a href="doc-element-accordion.html">5ème</a></li>
                                                            <li><a href="doc-element-notice.html">4ème</a></li>
                                                            <li><a href="doc-content-tables.html">3ème</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>Devoirs</p>
                                                        </a>
                                                        <a href="doc-main.html">
                                                            <p>BEPC</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-layout" role="tabpanel"
                                                    aria-labelledby="v-pills-layout-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li><a href="doc-element-hotspots.html">2nde L</a></li>
                                                            <li><a href="doc-content-video.html">2nde S</a></li>
                                                            <li><a href="doc-layout-banner-gradient.html">2nde G1, G2,
                                                                    G3</a></li>
                                                            <li><a href="doc-layout-banner-empty.html">2nde F1, F2, F3,
                                                                    F4, Ti</a></li>
                                                            <li><a href="doc-layout-banner-empty.html">1ère L</a></li>
                                                            <li><a href="doc-layout-banner-empty.html">1ère C</a></li>
                                                            <li><a href="doc-layout-banner-empty.html">1ère D</a></li>
                                                        </ul>
                                                        <ul class="list-unstyled tab_list">
                                                            <li><a href="doc-layout-banner-gradient.html">1ère G1, G2,
                                                                    G3</a></li>
                                                            <li><a href="doc-layout-banner-empty.html">1ère F1, F2, F3,
                                                                    F4, Ti</a></li>
                                                            <li><a href="doc-element-hotspots.html">Tle L</a></li>
                                                            <li><a href="doc-content-video.html">Tle C</a></li>
                                                            <li><a href="doc-content-video.html">Tle D</a></li>
                                                            <li><a href="doc-layout-banner-gradient.html">Tle G1, G2,
                                                                    G3</a></li>
                                                            <li><a href="doc-layout-banner-empty.html">Tle F1, F2, F3,
                                                                    F4, Ti</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>Devoirs</p>
                                                        </a>
                                                        <a href="#">
                                                            <p>Examens</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-tour" role="tabpanel"
                                                    aria-labelledby="v-pills-tour-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list w_100">
                                                            <li><a href="doc-ref-cheatsheet.html">Licence</a></li>
                                                            <li><a href="doc-ref-footnote.html">Master</a></li>
                                                            <li><a href="doc-tour.html">Doctorat</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>Devoirs</p>
                                                        </a>
                                                        <a href="#">
                                                            <p>Examens</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-content" role="tabpanel"
                                                    aria-labelledby="v-pills-content-tab">
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>Concours nationaux</p>
                                                        </a>
                                                        <a href="#">
                                                            <p>Concours internationaux</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Examens
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="onepage.html" class="nav-link">CEPD</a></li>
                                <li class="nav-item"><a href="contact.html" class="nav-link">BEPC</a></li>
                                <li class="nav-item"><a href="typography.html" class="nav-link">BAC I</a></li>
                                <li class="nav-item"><a href="404-error.html" class="nav-link">BAC II</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="{{ route('forums') }}" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Forum
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="{{ route('forums') }}" class="nav-link">Tous les
                                        forums</a>
                                </li>
                                <li class="nav-item"><a href="{{ route('forums.level') }}" class="nav-link">Forum de
                                        mon
                                        niveau</a></li>
                                <li class="nav-item"><a href="{{ route('forums.self') }}" class="nav-link">Mes
                                        forums</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="{{ route('contributions') }}" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Contributions
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="{{ route('contributions.create') }}"
                                        class="nav-link">Ajouter un contribution</a>
                                </li>
                                <li class="nav-item"><a href="{{ route('contributions') }}" class="nav-link">Liste
                                        des contibuions</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="{{ route('blog') }}" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Blog
                            </a>
                            {{-- <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                                <li class="nav-item"><a href="blog-grid-two.html" class="nav-link">Blog Grid Two</a>
                                </li>
                                <li class="nav-item"><a href="blog-list.html" class="nav-link">Blog List</a></li>
                                <li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Details</a></li>
                            </ul> --}}
                        </li>
                        @auth('web')
                            <li class="nav-item">
                                <a href="{{ route('auth.user.logout') }}" class="nav-link ">Déconnexion</a>
                            </li>
                            <div class="right-nav">
                                <a class="nav_btn" href="#">{{ Auth::guard('web')->user()->lastname }}
                                    {{ Auth::guard('web')->user()->level }}</a>
                                    {{-- ->fullName --}}
                            </div>
                        @endauth
                    </ul>
                    @guest('web')
                        <div class="right-nav">
                            <a class="nav_btn" href="{{ route('auth.user.login_page') }}">Connexion</a>
                        </div>
                    @endguest
                </div>
            </div>
        </nav>
        <div class="click_capture"></div>

        @yield('content')

        <footer class="doc_footer_area">
            <div class="doc_footer_top bg-transparent">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="f_widget doc_about_widget wow fadeInUp" data-wow-delay="0.2s">
                                <a href="#">
                                    <img style="width: 50%; height: 50%" src="img/logo.png" srcset="img/logo.png 2x"
                                        alt="">
                                </a>
                                <p>TeleEduTogoApp, une puissante application pour l'éducation au Togo</p>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_vimeo"></i></a></li>
                                    <li><a href="#"><i class="social_linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="f_widget doc_service_list_widget pl-30 wow fadeInUp" data-wow-delay="0.3s">
                                <h3 class="f_title_two">Solutions</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#"><img src="img/new/smile2.png" alt="">Forum</a></li>
                                    <li><a href="#"><img src="img/new/doc2.png" alt="">Examens</a></li>
                                    <li><a href="#"><img src="img/new/house2.png" alt="">Cours</a></li>
                                    <li><a href="#"><img src="img/new/bag2.png" alt="">Documents</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget doc_service_list_widget pl-100 wow fadeInUp" data-wow-delay="0.4s">
                                <h3 class="f_title_two">Support</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">Help Desk</a></li>
                                    <li><a href="#">Knowledge Base</a></li>
                                    <li><a href="#">Live Chat</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget doc_service_list_widget pl-70 wow fadeInUp" data-wow-delay="0.5s">
                                <h3 class="f_title_two">Compagnie</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">A propos de nous</a></li>
                                    <li><a href="#">Témoignages</a></li>
                                    {{-- <li><a href="#">Affiliates</a></li> --}}
                                    <li><a href="#">Partenaires</a></li>
                                    {{-- <li><a href="#">Careers</a></li> --}}

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="doc_footer_bottom">
                <div class="container d-flex justify-content-between">
                    <ul class="doc_footer_menu list-unstyled wow fadeInUp" data-wow-delay="0.2s">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Forum</a></li>

                    </ul>
                    <p class="wow fadeInUp" data-wow-delay="0.3s">© 2023 Tous droits réservés </p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/pre-loader.js') }}"></script>
    <script src="{{ asset('assets/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/niceselectpicker/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/magnify-pop/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
