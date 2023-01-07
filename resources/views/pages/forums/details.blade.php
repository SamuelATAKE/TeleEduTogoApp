@extends('layouts.default')

@section('content')

<!--================Forum Breadcrumb Area =================-->
<section class="doc_banner_area search-banner-light">
    <div class="container">
        <div class="doc_banner_content">
            <form action="#" class="header_search_form">
                <div class="header_search_form_info">
                    <div class="form-group">
                        <div class="input-wrapper">
                            <i class="icon_search"></i>
                            <input type='search' id="searchbox" autocomplete="off" name="search"
                                placeholder="Rechercher...." />
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
                        </div>
                    </div>
                </div>
                <div class="header_search_keyword">
                    <span class="header-search-form__keywords-label">Recherches populaires:</span>
                    <ul class="list-unstyled">
                        <li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#">Mathématiques</a>,</li>
                        <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#">Sciences physiques</a>,</li>
                        <li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#">SVT</a></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</section>
<section class="page_breadcrumb">
    <div class="container custom_container">
        <div class="row">
            <div class="col-sm-7">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="#">Forum</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Titre du forum</li>
                    </ol>
                </nav>
            </div>
            <div class="col-sm-5">
                <a href="#" class="date"><i class="icon_clock_alt"></i>Mis à jour le 30 Mars 2020</a>
            </div>
        </div>
    </div>
</section>
<!--================End Forum Breadcrumb Area =================-->

<section class="doc_blog_grid_area sec_pad forum-single-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <!-- Forum post top area -->
                <div class="row">
                    <div class="col-lg-9">
                        <div class="forum-post-top">
                            <a class="author-avatar" href="#">
                                <img src="img/forum/author-avatar.png" alt="">
                            </a>
                            <div class="forum-post-author">
                                <a class="author-name" href="#"> Docteur Parfait </a>
                                <div class="forum-author-meta">
                                    <div class="author-badge">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(131, 135, 147)"
                                                d="M11.729,12.136 L11.582,12.167 C11.362,12.415 11.125,12.645 10.869,12.857 L14.999,12.857 C15.134,12.857 15.255,12.944 15.307,13.077 C15.359,13.211 15.331,13.365 15.235,13.467 L14.488,14.268 C14.053,14.733 13.452,15.000 12.838,15.000 L2.495,15.000 C1.872,15.000 1.286,14.740 0.845,14.268 L0.098,13.467 C0.002,13.365 -0.026,13.211 0.026,13.077 C0.077,12.944 0.199,12.857 0.334,12.857 L4.463,12.857 C2.928,11.585 2.000,9.630 2.000,7.499 L2.000,6.785 C2.000,6.194 2.449,5.713 3.000,5.713 L12.333,5.713 C12.885,5.713 13.333,6.194 13.333,6.785 L13.333,7.343 C13.869,7.160 14.736,6.973 15.355,7.400 C15.783,7.696 16.000,8.209 16.000,8.928 C16.000,11.239 11.903,12.100 11.729,12.136 ZM14.994,8.002 C14.557,7.698 13.715,7.941 13.294,8.113 C13.197,9.261 12.837,10.339 12.255,11.269 C13.480,10.911 15.333,10.116 15.333,8.928 C15.333,8.462 15.223,8.158 14.994,8.002 ZM10.261,4.419 C10.376,4.573 10.353,4.798 10.209,4.921 C10.148,4.974 10.074,4.999 10.001,4.999 C9.903,4.999 9.807,4.954 9.740,4.865 C9.198,4.139 9.198,3.002 9.741,2.277 C10.086,1.816 10.086,1.040 9.742,0.580 C9.627,0.426 9.650,0.201 9.794,0.078 C9.937,-0.044 10.146,-0.020 10.263,0.134 C10.805,0.860 10.805,1.996 10.263,2.722 C9.917,3.183 9.917,3.959 10.261,4.419 ZM8.259,4.419 C8.373,4.573 8.350,4.798 8.207,4.921 C8.145,4.974 8.071,4.999 7.999,4.999 C7.901,4.999 7.804,4.954 7.738,4.865 C7.195,4.139 7.195,3.002 7.738,2.277 C8.082,1.816 8.082,1.040 7.739,0.580 C7.624,0.426 7.647,0.201 7.791,0.078 C7.935,-0.045 8.145,-0.020 8.259,0.134 C8.802,0.860 8.802,1.996 8.259,2.722 C7.915,3.183 7.915,3.959 8.259,4.419 ZM6.261,4.418 C6.376,4.572 6.353,4.797 6.210,4.920 C6.148,4.973 6.074,4.999 6.001,4.999 C5.903,4.999 5.807,4.953 5.741,4.865 C5.198,4.139 5.198,3.002 5.741,2.276 C6.085,1.815 6.085,1.039 5.742,0.580 C5.627,0.426 5.650,0.201 5.794,0.078 C5.937,-0.046 6.147,-0.020 6.262,0.133 C6.804,0.859 6.804,1.996 6.262,2.721 C5.918,3.182 5.918,3.959 6.261,4.418 Z" />
                                        </svg>
                                        <span>Auteur du forum</span>
                                    </div>
                                    <div class="author-badge">
                                        <i class="icon_calendar"></i>
                                        <a href="">03 Janvier à 10:32 </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="action-button-container">
                            <a href="#" class="action_btn btn-ans ask-btn">Une question?</a>
                        </div>
                    </div>
                </div>

                <!-- Forum post content -->
                <div class="q-title">
                    <span class="question-icon" title="Question">Q:</span>
                    <h1>Sticky navbar is shown, but state is inactive</h1>
                </div>
                <div class="forum-post-content">
                    <div class="content">
                        <p>Daft blimey cor blimey guvnor jolly good don't get shirty with me what a load of rubbish no
                            biggie ruddy cuppa cheesed off bleeding, arse spiffing it's your round codswallop gormless
                            off his nut bodge I smashing, mufty chancer Oxford my good sir bobby it's all gone to pot
                            bite your arm off wind up Harry. Blatant A bit of how's your father it's your round are you
                            taking the piss gutted mate codswallop golly gosh, James Bond I old chimney pot is bum bag
                            do one, fanny around crikey pukka tomfoolery nancy boy. </p>
                        <p> Spiffing good time burke give us a bell absolutely bladdered gutted mate tosser cuppa happy
                            days Harry young delinquent amongst car boot, baking cakes cheesed off I down the pub what a
                            load of rubbish such a fibber knees up me old mucker wind up smashing. My lady cheeky faff
                            about what a plonker so I said pardon you chimney pot cheesed off haggle quaint, cup of tea
                            gormless excuse my French mush bleeding knackered squiffy mush, such a fibber dropped a
                            clanger jolly good he lost his bottle vagabond no biggie fanny around brilliant. Chip shop
                            absolutely bladdered cockup up the kyver cracking goal is pardon you cuppa easy peasy the
                            full monty the bee's knees blatant, bugger pear shaped a load of old tosh zonked give us a
                            bell up the duff bleeder fantastic James Bond chap. Off his nut the BBC mufty hotpot my lady
                            I super tomfoolery nancy boy, loo fanny around bits and bobs nice one only a quid Eaton blow
                            off barmy, knees up bobby cup of char barney a no biggie gormless.</p>
                    </div>
                    <div class="forum-post-btm">
                        <div class="taxonomy forum-post-tags">
                            <i class="icon_tags_alt"></i><a href="#">Bug</a>, <a href="#">Feature</a>, <a
                                href="#">Error</a>
                        </div>
                        <div class="taxonomy forum-post-cat">
                            <img src="img/forum/logo-favicon.png" alt=""><a href="#">Docy Support</a>
                        </div>
                    </div>
                    <div class="action-button-container action-btns">
                        <a href="#" class="action_btn btn-ans ask-btn reply-btn">Répondre</a>
                        <a href="#" class="action_btn btn-ans ask-btn too-btn">J'ai cette question aussi (20)</a>
                    </div>
                </div>

                <!-- Best answer -->
                <div class="best-answer">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="forum-post-top">
                                <a class="author-avatar" href="#">
                                    <img src="img/forum/author-avatar.png" alt="">
                                </a>
                                <div class="forum-post-author">
                                    <a class="author-name" href="#"> Didi Orlog </a>
                                    <div class="forum-author-meta">
                                        <div class="author-badge">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="15px">
                                                <path fill-rule="evenodd" fill="rgb(131, 135, 147)"
                                                    d="M11.729,12.136 L11.582,12.167 C11.362,12.415 11.125,12.645 10.869,12.857 L14.999,12.857 C15.134,12.857 15.255,12.944 15.307,13.077 C15.359,13.211 15.331,13.365 15.235,13.467 L14.488,14.268 C14.053,14.733 13.452,15.000 12.838,15.000 L2.495,15.000 C1.872,15.000 1.286,14.740 0.845,14.268 L0.098,13.467 C0.002,13.365 -0.026,13.211 0.026,13.077 C0.077,12.944 0.199,12.857 0.334,12.857 L4.463,12.857 C2.928,11.585 2.000,9.630 2.000,7.499 L2.000,6.785 C2.000,6.194 2.449,5.713 3.000,5.713 L12.333,5.713 C12.885,5.713 13.333,6.194 13.333,6.785 L13.333,7.343 C13.869,7.160 14.736,6.973 15.355,7.400 C15.783,7.696 16.000,8.209 16.000,8.928 C16.000,11.239 11.903,12.100 11.729,12.136 ZM14.994,8.002 C14.557,7.698 13.715,7.941 13.294,8.113 C13.197,9.261 12.837,10.339 12.255,11.269 C13.480,10.911 15.333,10.116 15.333,8.928 C15.333,8.462 15.223,8.158 14.994,8.002 ZM10.261,4.419 C10.376,4.573 10.353,4.798 10.209,4.921 C10.148,4.974 10.074,4.999 10.001,4.999 C9.903,4.999 9.807,4.954 9.740,4.865 C9.198,4.139 9.198,3.002 9.741,2.277 C10.086,1.816 10.086,1.040 9.742,0.580 C9.627,0.426 9.650,0.201 9.794,0.078 C9.937,-0.044 10.146,-0.020 10.263,0.134 C10.805,0.860 10.805,1.996 10.263,2.722 C9.917,3.183 9.917,3.959 10.261,4.419 ZM8.259,4.419 C8.373,4.573 8.350,4.798 8.207,4.921 C8.145,4.974 8.071,4.999 7.999,4.999 C7.901,4.999 7.804,4.954 7.738,4.865 C7.195,4.139 7.195,3.002 7.738,2.277 C8.082,1.816 8.082,1.040 7.739,0.580 C7.624,0.426 7.647,0.201 7.791,0.078 C7.935,-0.045 8.145,-0.020 8.259,0.134 C8.802,0.860 8.802,1.996 8.259,2.722 C7.915,3.183 7.915,3.959 8.259,4.419 ZM6.261,4.418 C6.376,4.572 6.353,4.797 6.210,4.920 C6.148,4.973 6.074,4.999 6.001,4.999 C5.903,4.999 5.807,4.953 5.741,4.865 C5.198,4.139 5.198,3.002 5.741,2.276 C6.085,1.815 6.085,1.039 5.742,0.580 C5.627,0.426 5.650,0.201 5.794,0.078 C5.937,-0.046 6.147,-0.020 6.262,0.133 C6.804,0.859 6.804,1.996 6.262,2.721 C5.918,3.182 5.918,3.959 6.261,4.418 Z" />
                                            </svg>
                                            <span>CS Student</span>
                                        </div>
                                        <div class="author-badge">
                                            <i class="icon_calendar"></i>
                                            <a href="">26 Janvier à 16:15</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <p class="accepted-ans-mark">
                                <i class="icon_check"></i> <span>Solution acceptée</span>
                            </p>
                        </div>
                    </div>
                    <div class="best-ans-content d-flex">
                        <span class="question-icon" title="Meilleure réponse">R:</span>
                        <p>
                            Hi,
                            You can edit the service pages with Elementor. To enable Elementor on Service post type,
                            follow the bellow steps<br>
                            Step 1 - Navigate to your website's WordPress Dashbord>Elementor>Settings<br>
                            Step 2 - Tick the post you went to edit with Elementor in the post typs section and click
                            the save<br>
                            changes button<br>
                            Step 3 - Now you can click edit with Elementor button and start working<br><br>
                            Thanks!
                        </p>
                    </div>
                </div>

                <!-- All answer -->
                <div class="all-answers">
                    <h3 class="title">Toutes les réponses</h3>
                    <div class="filter-bar d-flex">
                        <div class="sort">
                            <select class="custom-select" id="sortBy">
                                <option selected>Trié par</option>
                                <option value="1">ASC</option>
                                <option value="2">Desc</option>
                                <option value="3">Vote</option>
                            </select>
                        </div>
                        <p>Page 1 sur 4</p>
                    </div>

                    <div class="forum-comment">
                        <div class="forum-post-top">
                            <a class="author-avatar" href="#">
                                <img src="img/forum/author-avatar.png" alt="author avatar">
                            </a>
                            <div class="forum-post-author">
                                <a class="author-name" href="#">Eh Jewel</a>
                                <div class="forum-author-meta">
                                    <div class="author-badge">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(131, 135, 147)"
                                                d="M11.729,12.136 L11.582,12.167 C11.362,12.415 11.125,12.645 10.869,12.857 L14.999,12.857 C15.134,12.857 15.255,12.944 15.307,13.077 C15.359,13.211 15.331,13.365 15.235,13.467 L14.488,14.268 C14.053,14.733 13.452,15.000 12.838,15.000 L2.495,15.000 C1.872,15.000 1.286,14.740 0.845,14.268 L0.098,13.467 C0.002,13.365 -0.026,13.211 0.026,13.077 C0.077,12.944 0.199,12.857 0.334,12.857 L4.463,12.857 C2.928,11.585 2.000,9.630 2.000,7.499 L2.000,6.785 C2.000,6.194 2.449,5.713 3.000,5.713 L12.333,5.713 C12.885,5.713 13.333,6.194 13.333,6.785 L13.333,7.343 C13.869,7.160 14.736,6.973 15.355,7.400 C15.783,7.696 16.000,8.209 16.000,8.928 C16.000,11.239 11.903,12.100 11.729,12.136 ZM14.994,8.002 C14.557,7.698 13.715,7.941 13.294,8.113 C13.197,9.261 12.837,10.339 12.255,11.269 C13.480,10.911 15.333,10.116 15.333,8.928 C15.333,8.462 15.223,8.158 14.994,8.002 ZM10.261,4.419 C10.376,4.573 10.353,4.798 10.209,4.921 C10.148,4.974 10.074,4.999 10.001,4.999 C9.903,4.999 9.807,4.954 9.740,4.865 C9.198,4.139 9.198,3.002 9.741,2.277 C10.086,1.816 10.086,1.040 9.742,0.580 C9.627,0.426 9.650,0.201 9.794,0.078 C9.937,-0.044 10.146,-0.020 10.263,0.134 C10.805,0.860 10.805,1.996 10.263,2.722 C9.917,3.183 9.917,3.959 10.261,4.419 ZM8.259,4.419 C8.373,4.573 8.350,4.798 8.207,4.921 C8.145,4.974 8.071,4.999 7.999,4.999 C7.901,4.999 7.804,4.954 7.738,4.865 C7.195,4.139 7.195,3.002 7.738,2.277 C8.082,1.816 8.082,1.040 7.739,0.580 C7.624,0.426 7.647,0.201 7.791,0.078 C7.935,-0.045 8.145,-0.020 8.259,0.134 C8.802,0.860 8.802,1.996 8.259,2.722 C7.915,3.183 7.915,3.959 8.259,4.419 ZM6.261,4.418 C6.376,4.572 6.353,4.797 6.210,4.920 C6.148,4.973 6.074,4.999 6.001,4.999 C5.903,4.999 5.807,4.953 5.741,4.865 C5.198,4.139 5.198,3.002 5.741,2.276 C6.085,1.815 6.085,1.039 5.742,0.580 C5.627,0.426 5.650,0.201 5.794,0.078 C5.937,-0.046 6.147,-0.020 6.262,0.133 C6.804,0.859 6.804,1.996 6.262,2.721 C5.918,3.182 5.918,3.959 6.261,4.418 Z" />
                                        </svg>
                                        <span>Conversation Starter</span>
                                    </div>
                                    <div class="author-badge">
                                        <i class="icon_calendar"></i>
                                        <a href="">January 16 at 10:32 PM</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-content">
                            <p>Cheeky chap jolly good mufty a load of old tosh I don't want no agro a chinwag amongst
                                tickety-boo, tosser victoria sponge horse play happy days give us a bell nice one cup of
                                tea young delinquent wellies, cockup absolutely bladdered barmy bleeding.!</p>
                            <div class="action-button-container action-btns">
                                <a href="#" class="action_btn btn-ans ask-btn reply-btn">Répondre</a>
                                <a href="#" class="action_btn btn-ans ask-btn too-btn">Utile</a>
                            </div>
                        </div>
                    </div>

                    <div class="forum-comment">
                        <div class="forum-post-top">
                            <a class="author-avatar" href="#">
                                <img src="img/forum/author-avatar-2.jpg" alt="author avatar">
                            </a>
                            <div class="forum-post-author">
                                <a class="author-name" href="#">Parsley Montana</a>
                                <div class="forum-author-meta">
                                    <div class="author-badge">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="13px">
                                            <path fill-rule="evenodd" fill="rgb(107, 112, 127)"
                                                d="M10.010,3.449 C9.996,3.196 9.996,2.955 9.996,2.714 C9.996,2.519 9.810,2.369 9.567,2.369 C7.783,2.369 6.427,1.956 5.300,1.071 C5.128,0.945 4.871,0.945 4.700,1.071 C3.573,1.956 2.217,2.369 0.433,2.369 C0.190,2.369 0.004,2.519 0.004,2.714 C0.004,2.955 0.004,3.196 -0.010,3.449 C-0.067,5.861 -0.153,11.587 4.857,12.977 L5.000,13.000 L5.143,12.977 C10.138,11.587 10.067,5.873 10.010,3.449 ZM4.726,9.505 C4.640,9.563 4.541,9.597 4.426,9.597 L4.412,9.597 C4.298,9.597 4.184,9.551 4.112,9.482 L1.964,7.195 L3.245,5.996 L4.469,7.325 L7.047,4.678 L8.324,5.937 L4.726,9.505 Z" />
                                        </svg>
                                        <span>Moderator</span>
                                    </div>
                                    <div class="author-badge">
                                        <i class="icon_calendar"></i>
                                        <a href="">February 16 at 5:32 PM</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-content">
                            <p>That cockup bleeding skive off such a fibber cup of char squiffy car boot, lemon squeezy
                                lavatory Richard jolly good tosser excuse my French, mush barney.</p>
                            <div class="action-button-container action-btns">
                                <a href="#" class="action_btn btn-ans ask-btn reply-btn">Répondre</a>
                                <a href="#" class="action_btn btn-ans ask-btn too-btn">Utile</a>
                            </div>
                        </div>
                    </div>

                    <div class="forum-comment">
                        <div class="forum-post-top">
                            <a class="author-avatar" href="#">
                                <img src="img/forum/author-avatar-3.jpg" alt="author avatar">
                            </a>
                            <div class="forum-post-author">
                                <a class="author-name" href="#">Giles Posture</a>
                                <div class="forum-author-meta">
                                    <div class="author-badge">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="11px" height="12px">
                                            <path fill-rule="evenodd" fill="rgb(107, 112, 127)"
                                                d="M8.519,11.369 C6.537,12.296 5.144,12.075 4.064,11.465 C2.984,10.855 0.455,9.433 0.455,9.433 C-0.009,9.164 -0.147,8.606 0.145,8.184 C0.442,7.766 1.054,7.643 1.523,7.911 L3.032,8.666 L0.516,3.256 C0.349,2.897 0.530,2.459 0.919,2.277 C1.309,2.095 1.759,2.238 1.926,2.597 L3.435,5.842 C3.491,5.962 3.641,6.010 3.771,5.949 C3.901,5.888 3.961,5.742 3.905,5.623 L1.993,1.511 C1.827,1.153 2.007,0.714 2.396,0.532 C2.786,0.350 3.236,0.493 3.403,0.852 L5.315,4.964 C5.371,5.083 5.521,5.130 5.651,5.070 C5.780,5.009 5.841,4.863 5.785,4.744 L4.074,1.065 C3.908,0.706 4.088,0.268 4.477,0.086 C4.867,-0.096 5.317,0.047 5.484,0.406 L7.396,4.517 C7.452,4.637 7.603,4.684 7.732,4.624 C7.861,4.563 7.922,4.417 7.866,4.298 L6.558,1.484 C6.391,1.126 6.572,0.688 6.961,0.506 C7.350,0.324 7.801,0.467 7.968,0.825 C7.968,0.825 10.361,5.972 10.685,6.668 C11.008,7.364 11.800,9.835 8.519,11.369 Z" />
                                        </svg>
                                        <span>Explorer</span>
                                    </div>
                                    <div class="author-badge">
                                        <i class="icon_calendar"></i>
                                        <a href="">January 16 at 10:32 PM</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-content">
                            <p>Cheeky chap jolly good mufty a load of old tosh I don't want no agro a chinwag amongst
                                tickety-boo, tosser victoria sponge horse play happy days give us a bell nice one cup.!
                            </p>
                            <div class="action-button-container action-btns">
                                <a href="#" class="action_btn btn-ans ask-btn reply-btn">Répondre</a>
                                <a href="#" class="action_btn btn-ans ask-btn too-btn">Utile</a>
                            </div>
                        </div>
                    </div>

                    <div class="forum-comment">
                        <div class="forum-post-top">
                            <a class="author-avatar" href="#">
                                <img src="img/forum/author-avatar.png" alt="author avatar">
                            </a>
                            <div class="forum-post-author">
                                <a class="author-name" href="#">Norman Gordon</a>
                                <div class="forum-author-meta">
                                    <div class="author-badge">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(131, 135, 147)"
                                                d="M11.729,12.136 L11.582,12.167 C11.362,12.415 11.125,12.645 10.869,12.857 L14.999,12.857 C15.134,12.857 15.255,12.944 15.307,13.077 C15.359,13.211 15.331,13.365 15.235,13.467 L14.488,14.268 C14.053,14.733 13.452,15.000 12.838,15.000 L2.495,15.000 C1.872,15.000 1.286,14.740 0.845,14.268 L0.098,13.467 C0.002,13.365 -0.026,13.211 0.026,13.077 C0.077,12.944 0.199,12.857 0.334,12.857 L4.463,12.857 C2.928,11.585 2.000,9.630 2.000,7.499 L2.000,6.785 C2.000,6.194 2.449,5.713 3.000,5.713 L12.333,5.713 C12.885,5.713 13.333,6.194 13.333,6.785 L13.333,7.343 C13.869,7.160 14.736,6.973 15.355,7.400 C15.783,7.696 16.000,8.209 16.000,8.928 C16.000,11.239 11.903,12.100 11.729,12.136 ZM14.994,8.002 C14.557,7.698 13.715,7.941 13.294,8.113 C13.197,9.261 12.837,10.339 12.255,11.269 C13.480,10.911 15.333,10.116 15.333,8.928 C15.333,8.462 15.223,8.158 14.994,8.002 ZM10.261,4.419 C10.376,4.573 10.353,4.798 10.209,4.921 C10.148,4.974 10.074,4.999 10.001,4.999 C9.903,4.999 9.807,4.954 9.740,4.865 C9.198,4.139 9.198,3.002 9.741,2.277 C10.086,1.816 10.086,1.040 9.742,0.580 C9.627,0.426 9.650,0.201 9.794,0.078 C9.937,-0.044 10.146,-0.020 10.263,0.134 C10.805,0.860 10.805,1.996 10.263,2.722 C9.917,3.183 9.917,3.959 10.261,4.419 ZM8.259,4.419 C8.373,4.573 8.350,4.798 8.207,4.921 C8.145,4.974 8.071,4.999 7.999,4.999 C7.901,4.999 7.804,4.954 7.738,4.865 C7.195,4.139 7.195,3.002 7.738,2.277 C8.082,1.816 8.082,1.040 7.739,0.580 C7.624,0.426 7.647,0.201 7.791,0.078 C7.935,-0.045 8.145,-0.020 8.259,0.134 C8.802,0.860 8.802,1.996 8.259,2.722 C7.915,3.183 7.915,3.959 8.259,4.419 ZM6.261,4.418 C6.376,4.572 6.353,4.797 6.210,4.920 C6.148,4.973 6.074,4.999 6.001,4.999 C5.903,4.999 5.807,4.953 5.741,4.865 C5.198,4.139 5.198,3.002 5.741,2.276 C6.085,1.815 6.085,1.039 5.742,0.580 C5.627,0.426 5.650,0.201 5.794,0.078 C5.937,-0.046 6.147,-0.020 6.262,0.133 C6.804,0.859 6.804,1.996 6.262,2.721 C5.918,3.182 5.918,3.959 6.261,4.418 Z" />
                                        </svg>
                                        <span>Conversation Starter</span>
                                    </div>
                                    <div class="author-badge">
                                        <i class="icon_calendar"></i>
                                        <a href="">January 16 at 10:32 PM</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-content">
                            <p>Cheeky chap jolly good mufty a load of old tosh I don't want no agro a chinwag amongst
                                tickety-boo, tosser victoria sponge horse play happy days give us a bell nice one cup of
                                tea young delinquent wellies, cockup absolutely bladdered barmy bleeding.!</p>
                            <div class="action-button-container action-btns">
                                <a href="#" class="action_btn btn-ans ask-btn reply-btn">Répondre</a>
                                <a href="#" class="action_btn btn-ans ask-btn too-btn">Utile</a>
                            </div>
                        </div>
                    </div>

                    <div class="pagination-wrapper">
                        <div class="view-post-of">
                            <p>Affichage de 4 Commentaires - 1 sur 10 (de 96 au total)</p>
                        </div>
                        <ul class="post-pagination">
                            <li class="prev-post pegi-disable"><a href="#"><i class="arrow_carrot-left"></i></a>
                            </li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">15</a></li>
                            <li class="next-post"><a href="#"><i class="arrow_carrot-right"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- /.col-lg-8 -->

            <div class="col-lg-3">
                <div class="forum_sidebar">
                    <div class="widget usefull_links_widget">
                        <h4 class="c_head">Liens utiles</h4>

                        <ul class="list-unstyled usefull-links">
                            <li><i class="icon_lightbulb_alt"></i><a href="#">FAQs</a></li>
                            <li><i class="icon_clock_alt"></i><a href="#">Popular</a></li>
                            <li><i class="icon_piechart"></i><a href="#">Recent</a></li>
                            <li><i class="icon_info_alt"></i><a href="#">Unanswered</a></li>
                        </ul>
                    </div>
                    <div class="widget ticket_widget">
                        <h4 class="c_head">Ticket Categories</h4>

                        <ul class="list-unstyled ticket_categories">
                            <li><img src="img/home_support/cmm5.png" alt="category">
                                <a href="#">Docs WordPress Theme</a> <span class="count">10</span>
                            </li>
                            <li><img src="img/home_support/cmm4.png" alt="category">
                                <a href="#">Product Landing</a>
                                <span class="count count-fill">13</span>
                                <span class="count">54</span>
                            </li>
                            <li><img src="img/home_support/cmm2.png" alt="category">
                                <a href="#">Knowledge Base</a><span class="count">142</span>
                            </li>
                            <li><img src="img/home_support/cmm8.png" alt="category">
                                <a href="#">Startup and App</a> <span class="count">13</span>
                            </li>
                            <li><img src="img/home_support/cmm9.png" alt="category">
                                <a href="#">Clean Email Template</a> <span class="count">123</span>
                            </li>
                            <li><img src="img/home_support/cmm10.png" alt="category">
                                <a href="#">Apps WordPress Theme</a> <span class="count">18</span>
                            </li>
                        </ul>
                    </div>

                    <div class="widget tag_widget">
                        <h4 class="c_head">Tags</h4>
                        <ul class="list-unstyled w_tag_list style-light">
                            <li><a href="#">Swagger</a></li>
                            <li><a href="#">Docy</a></li>
                            <li><a href="#">weCare</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Download</a></li>
                            <li><a href="#">Doc</a></li>
                            <li><a href="#">WordPress</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">ui/ux</a></li>
                            <li><a href="#">Doc Design</a></li>
                            <li><a href="#">DocAll</a></li>
                            <li><a href="#">Productboard</a></li>
                            <li><a href="#">Magento</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- /.col-lg-4 -->
        </div>
    </div>
</section>

<div class="call-to-action">
    <div class="overlay-bg"></div>
    <div class="container">
        <div class="action-content-wrapper">
            <div class="action-title-wrap title-img">
                <img src="img/home_support/chat-smile.png" alt="">
                <h2 class="action-title">Nouveau dans la communité?</h2>
            </div>
            <a href="#" class="action_btn">Rejoindre la communauté<i class="arrow_right"></i></a>
        </div>
        <!-- /.action-content-wrapper -->
    </div>
    <!-- /.container -->
</div>

@endsection
