<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/SukuuShare.png') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css', Request::secure()) }}">
    <!-- icon css-->
    <link rel="stylesheet" href="{{ asset('assets/elagent-icon/style.css', Request::secure()) }}">
    <link rel="stylesheet" href="{{ asset('assets/animation/animate.css', Request::secure()) }}">
    <link rel="stylesheet" href="{{ asset('css/style-main.css', Request::secure()) }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css', Request::secure()) }}">
    {{-- icon js --}}
    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
    <title>SukuuShare | Mise à jour d'informations</title>
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
        <section class="signup_area signup_area_height">
            <div class="row ml-0 mr-0">
                <div class="sign_left signup_left">
                    <h2>Un réseau social pour tous les élèves et étudiants du Togo</h2>
                    <img class="position-absolute top" src="{{ asset('img/signup/top_ornamate.png', Request::secure()) }}" alt="top">
                    <img class="position-absolute bottom" src="{{ asset('img/signup/bottom_ornamate.png', Request::secure()) }}" alt="bottom">
                    <img class="position-absolute middle wow fadeInRight" src="{{ asset('img/signup/man_image.png', Request::secure()) }}" alt="bottom">
                    <div class="round wow zoomIn" data-wow-delay="0.2s"></div>
                </div>
                <div class="sign_right signup_right" style="height: 100%; overflow: scroll;">
                    <div class="sign_inner signup_inner">
                        <div class="text-center">
                            <h3>Mettez à jours vos informations</h3>
                        </div>
                        <form action="{{ route('auth.user.store') }}" method="POST" class="row login_form">
                            {{ csrf_field() }}
                            @method('post')
                            {{-- Nom + Prenom --}}
                            <div class="col-sm-6 form-group">
                                <label for="firstname" class="small_text">Prénom(s)</label>
                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Entrez votre prénom" value="{{$user->firstname}}">
                                <p class="error">@error('firstname') {{$message}} @enderror</p>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="lastname" class="small_text">Nom</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Entrez votre nom" value="{{$user->lastname}}">
                                <p class="error">@error('lastname') {{$message}} @enderror</p>
                            </div>
                            {{-- Niveau scolaire --}}
                            <div class="col-sm-4 form-group">
                                <label for="cycle" class="small_text">Cycle Scolaire</label>
                                <select class="form-control" name="cycle" id="cycle">
                                    @foreach ($cycles as $cycleCodeName => $infos)
                                        <option value="{{$cycleCodeName}}" @if ($user->level->cycle == $cycleCodeName) selected @endif >
                                            {{$infos["fullName"]}}
                                        </option>
                                    @endforeach
                                </select>
                                <p class="error">@error('cycle') {{$message}} @enderror</p>
                                <p class="error">@error('level') {{$message}} @enderror</p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="classe" class="small_text">Classe</label>
                                <select class="form-control" name="classe" id="classe">
                                    @foreach ($classes as $classeCodeName => $infos)
                                        <option value="{{$classeCodeName}}" @if ($user->level->classe == $classeCodeName) selected @endif >
                                            {{$infos["fullName"]}}
                                        </option>
                                    @endforeach
                                </select>
                                <p class="error">@error('level') {{$message}} @enderror</p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="serie" class="small_text">Série</label>
                                <select class="form-control" name="serie" id="serie">
                                    <option value=""></option>
                                    @foreach ($series as $serieCodeName => $infos)
                                        <option value="{{$serieCodeName}}" @if ($user->level->serie == $serieCodeName) selected @endif >
                                            {{$infos["fullName"]}}
                                        </option>
                                    @endforeach
                                </select>
                                <p class="error">@error('level') {{$message}} @enderror</p>
                            </div>
                            {{-- Credentials --}}
                            <div class="col-lg-12 form-group">
                                <label for="email" class="small_text">Votre adresse mail</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre adresse mail" value="{{$user->email}}">
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
                                    <label class="l_text" for="confid-accept">J'accepte la <span>politique de confidentialité de SukuuShare</span></label>
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
    <script src="{{ asset('js/jquery-3.5.1.min.js', Request::secure()) }}"></script>
    <script src="{{ asset('js/pre-loader.js', Request::secure()) }}"> </script>
    <script src="{{ asset('assets/bootstrap/js/popper.min.js', Request::secure()) }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js', Request::secure()) }}"></script>
    <script src="{{ asset('js/parallaxie.js', Request::secure()) }}"></script>
    <script src="{{ asset('js/TweenMax.min.js', Request::secure()) }}"></script>
    <script src="{{ asset('assets/wow/wow.min.js', Request::secure()) }}"></script>
    {{-- <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script> --}}
    <script src="{{ asset('js/main.js', Request::secure()) }}"></script>

</body>

</html>
