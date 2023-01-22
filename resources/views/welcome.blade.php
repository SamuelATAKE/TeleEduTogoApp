@extends('layouts.default')

@section('content')

<section class="doc_banner_area banner_creative1">
    <ul class="list-unstyled banner_shap_img">
        <li><img src="img/new/banner_shap1.png" alt=""></li>
        <li><img src="img/new/banner_shap4.png" alt=""></li>
        <li><img src="img/new/banner_shap3.png" alt=""></li>
        <li><img src="img/new/banner_shap2.png" alt=""></li>
        <li><img data-parallax='{"x": -180, "y": 80, "rotateY":2000}' src="img/new/plus1.png" alt=""></li>
        <li><img data-parallax='{"x": -50, "y": -160, "rotateZ":200}' src="img/new/plus2.png" alt=""></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="doc_banner_content">
            <h2 class="wow fadeInUp">SukuuShare</h2>
            <p class="wow fadeInUp" data-wow-delay="0.2s">Votre application vous aidant dans vos révisions!</p>
            <form action="#" class="header_search_form">
                <div class="header_search_form_info">
                    <div class="form-group">
                        <div class="input-wrapper">
                            <i class="icon_search"></i>
                            <input type='search' id="searchbox" autocomplete="off" name="search"
                                placeholder="Rechercher..." />
                            <div class="header_search_form_panel">
                                <ul class="list-unstyled">
                                    <li>Help Desk
                                        <ul class="list-unstyled search_item">
                                            <li><span>Configuration</span><a href="#">How to edit host and
                                                    port?</a></li>
                                            <li><span>Configuration</span><a href="#">The dev Property</a></li>
                                        </ul>
                                    </li>
                                    <li>Support
                                        <ul class="list-unstyled search_item">
                                            <li><span>Pages</span><a href="#">The asyncData Method</a></li>
                                        </ul>
                                    </li>
                                    <li>Documentation
                                        <ul class="list-unstyled search_item">
                                            <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                            </li>
                                            <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                            </li>
                                            <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <select class="search-expand-types custom-select" name="post_type" id="search_post_type">
                                <option value="">Tout </option>
                                <option value="manual_kb">Maths</option>
                                <option value="manual_documentation">Physiques</option>
                                <option value="manual_faq">Biologie</option>
                                <option value="forum">Anglais</option>
                                <option value="manual_portfolio">Français</option>
                                <option value="product">Histoire</option>
                                <option value="product">Géographie</option>
                            </select>
                        </div>
                        <button type="submit" class="header_form_submit">Rechercher</button>
                    </div>

                </div>
                <div class="header_search_keyword">
                    <span class="header-search-form__keywords-label">Suggestions:</span>
                    <ul class="list-unstyled">
                        <li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#">Mathématiques</a></li>
                        <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#">Sciences Physiques</a></li>
                        <li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#">SVT</a></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="doc_features_area">
    <img class="doc_features_shap" src="img/new/shap_white.png" alt="">
    <div class="container">
        <div class="doc_features_inner">
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="0.5s">
                <img src="img/new/icon1.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Cours</h4>
                    </a>
                    <p>245 PDFs</p>
                </div>
            </div>
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
                <img src="img/new/icon2.png" alt="">
                <div class="media-body">
                    <a href="{{ route('forums') }}">
                        <h4>Forums</h4>
                    </a>
                    <p>245 Posts</p>
                </div>
            </div>
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.7s">
                <img src="img/new/icon3.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Exercices</h4>
                    </a>
                    <p>245 PDF</p>
                </div>
            </div>
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
                <img src="img/new/icon4.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Filtrage</h4>
                    </a>
                    <p>...</p>
                </div>
            </div>
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.9s">
                <img src="img/new/icon5.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Téléchargements</h4>
                    </a>
                    <p>+245</p>
                </div>
            </div>
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
                <img src="img/new/icon6.png" alt="">
                <div class="media-body">
                    <a href="{{ route('profil.index') }}">
                        <h4>Profil</h4>
                    </a>
                    <p>...</p>
                </div>
            </div>
            {{-- <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.7s">
                <img src="img/new/icon7.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Productivity</h4>
                    </a>
                    <p>245 Posts</p>
                </div>
            </div>
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.8s">
                <img src="img/new/icon8.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Docs in Help Scout</h4>
                    </a>
                    <p>245 Posts</p>
                </div>
            </div>
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.9s">
                <img src="img/new/icon9.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Formatting Content</h4>
                    </a>
                    <p>245 Posts</p>
                </div>
            </div>
            <div class="see_more_item collapse-wrap">
                <div class="media doc_features_item">
                    <img src="img/new/icon7.png" alt="">
                    <div class="media-body">
                        <a href="#">
                            <h4>Productivity</h4>
                        </a>
                        <p>245 Posts</p>
                    </div>
                </div>
                <div class="media doc_features_item">
                    <img src="img/new/icon8.png" alt="">
                    <div class="media-body">
                        <a href="#">
                            <h4>Docs in Help Scout</h4>
                        </a>
                        <p>245 Posts</p>
                    </div>
                </div>
                <div class="media doc_features_item">
                    <img src="img/new/icon9.png" alt="">
                    <div class="media-body">
                        <a href="#">
                            <h4>Formatting Content</h4>
                        </a>
                        <p>245 Posts</p>
                    </div>
                </div>
            </div>
            <a href="#more-features" class="collapse-btn see_btn">
                <i class="arrow_carrot-down_alt2"></i>
                <span class="text">Show More</span>
            </a> --}}
        </div>
    </div>
</section>
<section class="recommended_topic_area">
    <div class="container">
        <div class="recommended_topic_inner">
            <img class="doc_shap_one" src="img/new/shap.png" alt="">
            <div class="doc_round one" data-parallax='{"x": -80, "y": -100, "rotateY":0}'></div>
            <div class="doc_round two" data-parallax='{"x": -10, "y": 70, "rotateY":0}'></div>
            <div class="doc_title text-center">
                <h2 class="wow fadeInUp" data-wow-delay="0.2s">Cours et exercices</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Retrouvez très prochainement des résumés de cours et
                    exercices vous aidant dans les révisions<br></p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="recommended_item wow fadeInUp" data-wow-delay="0.2s">
                        <img src="img/new/smile.png" alt="">
                        <a href="#">
                            <h3>Primaire</h3>
                        </a>
                        <ul class="list-unstyled">
                            {{-- <li><a href="#">Welcome to Ghost</a></li>
                            <li><a href="#">Writing posts with Ghost</a></li>
                            <li><a href="#">Publishing options</a></li>
                            <li><a href="#">Managing admin settings</a></li>
                            <li><a href="#">Organising your content</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="recommended_item wow fadeInUp" data-wow-delay="0.3s">
                        <img src="img/new/house.png" alt="">
                        <a href="#">
                            <h3>Collège</h3>
                        </a>
                        <ul class="list-unstyled">
                            {{-- <li><a href="#">Getting started</a></li>
                            <li><a href="#">Become a Pro</a></li>
                            <li><a href="#">Admin & Billing</a></li>
                            <li><a href="#">Mobile App</a></li>
                            <li><a href="#">Guides</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="recommended_item wow fadeInUp" data-wow-delay="0.4s">
                        <img src="img/new/doc.png" alt="">
                        <a href="#">
                            <h3>Lycée</h3>
                        </a>
                        <ul class="list-unstyled">
                            {{-- <li><a href="#">Organising content in Ghost</a></li>
                            <li><a href="#">Using the editor</a></li>
                            <li><a href="#">General publication settings</a></li>
                            <li><a href="#">Publishing Options</a></li>
                            <li><a href="#">Knowledge Base</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="recommended_item wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/new/bag.png" alt="">
                        <a href="#">
                            <h3>Université</h3>
                        </a>
                        <ul class="list-unstyled">
                            {{-- <li><a href="#">How do I reset my password</a></li>
                            <li><a href="#">Managing your team</a></li>
                            <li><a href="#">Can I add my social accounts</a></li>
                            <li><a href="#">Imports and exports</a></li>
                            <li><a href="#">Design Settings</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                <a href="#" class="question_text">Avez-vous une question?<br> Utiliser les forums
                </a>
            </div>
        </div>
    </div>
</section>
<section class="doc_community_area">
    <img class="shap_one" src="img/new/community_bg_shap_one.png" alt="">
    <img class="shap_two" src="img/new/community_bg_shap_two.png" alt="">
    <div class="container">
        <div class="doc_title text-center">
            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Comment marche SukuuShare</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s">SukuuShare te permet de réviser sans disposer de documents
                physiques
            </p>
        </div>
        <div class="doc_community_info">
            <div class="doc_community_item wow fadeInUp" data-wow-delay="0.2s">
                <div class="doc_community_icon">
                    <i class="icon_folder-alt"></i>
                </div>
                <div class="doc_entry_content">
                    <a href="#">
                        <h4>Documents</h4>
                    </a>
                    <p>Des résumés de cours fournis, à fin de vous permettre de garder l'essentiel du cours</p>
                    <div class="doc_entry_info">
                        <div class="text">
                            Plus de 250 PDFs disponibles maintenant
                        </div>
                    </div>
                </div>
            </div>
            <div class="doc_community_item wow fadeInUp" data-wow-delay="0.3s">
                <div class="doc_community_icon">
                    <i class="icon_comment_alt"></i>
                </div>
                <div class="doc_entry_content">
                    <a href="#">
                        <h4>Forum</h4>
                    </a>
                    <p>Trouvez des réponses à vos inquiétudes ou aider les autres.</p>
                    <div class="doc_entry_info">
                        <div class="text">
                            Plus de 76 forums actifs maintenant!
                        </div>
                    </div>
                </div>
            </div>
            <div class="doc_community_item wow fadeInUp" data-wow-delay="0.4s">
                <div class="doc_community_icon">
                    <i class=" icon_lightbulb_alt"></i>
                </div>
                <div class="doc_entry_content">
                    <a href="#">
                        <h4>Epreuves</h4>
                    </a>
                    <p>Une grande variété d'épruves afin de vous préparer à vos différentes évaluations.</p>
                    <div class="doc_entry_info">
                        <div class="text">
                            Plus de 100 épreuves disponibles!
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center wow fadeInUp" data-wow-delay="0.4s">
                <a href="#" class="question_text">Vous pouvez contribuer pour faire avancer le contenu de la plateforme
                </a>
            </div>
        </div>
    </div>
</section>
{{-- <section class="doc_testimonial_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="doc_testimonial_slider">
                    <div class="item">
                        <h3>Tinkety tonk old fruit victoria sponge squiffy bleeder twit the bee's knees loo
                            David, buggered haggle pear shaped bubble and squeak.”</h3>
                        <div class="name">Penny Tool, <span>Director of Sales and Success</span></div>
                        <a href="#" class="sign"><img src="img/new/sign.png" alt=""></a>
                    </div>
                    <div class="item">
                        <h3>Hendrerit laoreet incidunt molestie eum placeat, neque ridiculus? Maecenas
                            incididunt aperiam tempora cumque quos?”</h3>
                        <div class="name">Penny Tool, <span>Director of Sales and Success</span></div>
                        <a href="#" class="sign"><img src="img/new/sign.png" alt=""></a>
                    </div>
                    <div class="item">
                        <h3>Curabitur vitae dignissimos pulvinar eligendi ullamcorper, laoreet, accusantium
                            numquam habitant quaerat minim consequatur”</h3>
                        <div class="name">Penny Tool, <span>Director of Sales and Success</span></div>
                        <a href="#" class="sign"><img src="img/new/sign.png" alt=""></a>
                    </div>
                    <div class="item">
                        <h3>Tinkety tonk old fruit victoria sponge squiffy bleeder twit the bee's knees loo
                            David, buggered haggle pear shaped bubble and squeak.”</h3>
                        <div class="name">Penny Tool, <span>Director of Sales and Success</span></div>
                        <a href="#" class="sign"><img src="img/new/sign.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="doc_img_slider">
                    <div class="item">
                        <img class="dot" src="img/new/dot.png" alt="">
                        <div class="round one"></div>
                        <div class="round two"></div>
                        <img src="img/new/feedback_img.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="dot" src="img/new/dot.png" alt="">
                        <div class="round one"></div>
                        <div class="round two"></div>
                        <img src="img/new/feedback_img_02.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="dot" src="img/new/dot.png" alt="">
                        <div class="round one"></div>
                        <div class="round two"></div>
                        <img src="img/new/feedback_img_03.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="dot" src="img/new/dot.png" alt="">
                        <div class="round one"></div>
                        <div class="round two"></div>
                        <img src="img/new/feedback_img_04.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="doc_subscribe_area">
    <div class="container">
        <div class="doc_subscribe_inner">
            <img class="one" src="img/new/subscribe_shap.png" alt="">
            <img class="two" src="img/new/subscribe_shap_two.png" alt="">
            <div class="text wow fadeInLeft" data-wow-delay="0.2s">
                <h2>Ne manquer <br>aucune annonce!</h2>
            </div>
            <form action="#" class="doc_subscribe_form wow fadeInRight mailchimp" data-wow-delay="0.4s" method="post">
                <div class="form-group">
                    <div class="input-fill">
                        <input type="email" name="EMAIL" id="email" class="memail" placeholder="Votre adresse mail">
                    </div>
                    <button type="submit" class="submit_btn">Commencer</button>
                    <p class="mchimp-errmessage" style="display: none;"></p>
                    <p class="mchimp-sucmessage" style="display: none;"></p>
                </div>
                <ul class="list-unstyled">
                    <li><a href="#">Annonces</a></li>
                    <li><a href="#">Mise à jour</a></li>
                    <li><a href="#">Formations</a></li>
                </ul>

            </form>
        </div>
    </div>
</section>

@endsection