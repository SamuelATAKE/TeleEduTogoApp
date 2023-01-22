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
                        <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#">Sciences Physiques</a>,</li>
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
                        <li class="breadcrumb-item active"><a href="#">Blog</a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-sm-5">
                <a href="#" class="date"><i class="icon_clock_alt"></i>Mis à jour le 03 Mars 2020</a>
            </div>
        </div>
    </div>
</section>
<!--================End Forum Breadcrumb Area =================-->

<section class="blog_top_post_area sec_pad bg_color">
    <div class="container">
        <div class="row mb-3">
            <div class="col-8"></div>
            <div class="col-5">
                <a href="{{ route('article.add') }}"><button class="btn btn-lg btn-primary">Ajouter un
                        article</button></a>
            </div>
        </div>
        <div class="row blog_top_post flex-row-reverse shadow">
            <div class="col-lg-7 p_top_img">
                <img class="p_img" src="{{ asset('storage/' .$lastArticle->illustration) }}" alt="">
            </div>
            <div class="col-lg-5 p-0">
                <div class="b_top_post_content">
                    <div class="post_tag">
                        <a href="#">9 Min de lecture</a>
                        <a class="c_blue" href="#">{{ $lastArticle->categorie }}</a>
                    </div>
                    <a href="{{ route('article', $lastArticle->id) }}">
                        <h3>{{ $lastArticle->titre }}</h3>
                    </a>
                    <p>
                        @php
                        echo substr($lastArticle->contenu, 0, 30);
                        @endphp
                    </p>
                    <a href="{{ route('article', $lastArticle->id) }}" class="learn_btn">Continuer par lire<i
                            class="arrow_right"></i></a>
                    <div class="media post_author">
                        <div class="round_img">
                            <img src="img/blog-grid/ansley.jpg" alt="">
                        </div>
                        <div class="media-body author_text">
                            <h4>{{ $lastArticle->user->firstname}} {{ $lastArticle->user->lastname }}</h4>
                            <div class="date">{{ $lastArticle->created_at }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="doc_blog_grid_area">
    <div class="blog_grid_inner bg_color">
        <div class="container">
            <ul class="nav blog_tab">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Récentes mis à jour</a>
                </li>
                <li class="nav-item cat-woocommerce">
                    <a class="nav-link" href="#">Ministère de l'enseignement</a>
                </li>
                <li class="nav-item cat-startups">
                    <a class="nav-link" href="#">Sciences</a>
                </li>
                <li class="nav-item cat-laravel">
                    <a class="nav-link" href="#">Littérature</a>
                </li>
                <li class="nav-item cat-wordpress">
                    <a class="nav-link" href="#">Art</a>
                </li>
                <li class="nav-item cat-megento">
                    <a class="nav-link" href="#">SukuuShare</a>
                </li>
                <li class="nav-item cat-startups">
                    <a class="nav-link" href="#">ENT-Togo</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row blog_grid_tab">
            @forelse ($articles as $article)
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_post shadow-sm wow fadeInUp">
                    <img style="max-width: 25em; max-height: 25em" src="{{ asset('storage/' .$article->illustration) }}" alt="">
                    <div class="grid_post_content">
                        <div class="post_tag">
                            <a href="#">18 Min de lecture</a>
                            <a class="c_blue" href="#">{{ $article->categorie }}</a>
                        </div>
                        <a href="{{route('article', $article->id)}}">
                            <h4 class="b_title">{{ $article->titre }}</h4>
                        </a>
                        <p>
                            {{-- @php
                            echo substr($article->contenu, 0, 5);
                            @endphp --}}
                            ...
                        </p>
                        <div class="media post_author">
                            <div class="round_img">
                                <img src="img/blog-grid/ansley.jpg" alt="">
                            </div>
                            <div class="media-body author_text">
                                <h4>{{ $article->user->firstname}} {{ $article->user->lastname }}</h4>
                                <div class="date">{{ $article->created_at }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p>Aucun article ajouté pour le moment</p>
            @endforelse
        </div>
    </div>
</section>
<section class="doc_action_area_three">
    <img class="p_absolute shadows" src="img/blog-grid/shadow_action.png" alt="">
    <img class="p_absolute b_man" src="img/blog-grid/man.png" alt="">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="action_content">
                    <h2>Voulez-vous lire plus à propos de votre <span>sujet favoris?</span></h2>
                    <p>Recevez personnellement les mises à jour</p>
                </div>
            </div>
            <div class="col-lg-7">
                <form action="#" class="footer_subscribe_form action_subscribe_form">
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Email Address">
                        <button class="s_btn" type="submit">Abonnez-vous maintenant<i class="arrow_right"></i></button>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            J'accepte les termes et conditions de SukuuShare
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
{{-- <section class="doc_blog_grid_area_two">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_post shadow-sm wow fadeInUp">
                    <img src="img/blog-grid/blog_grid_post7.jpg" alt="">
                    <div class="grid_post_content">
                        <div class="post_tag">
                            <a href="#">18 Min de lecture</a>
                            <a class="c_blue" href="#">WordPress</a>
                        </div>
                        <a href="#">
                            <h4 class="b_title">Create A WordPress Multi Step Form With weForms</h4>
                        </a>
                        <p>The pressure to keep our skills sharp is constant. Mastering new skills may...</p>
                        <div class="media post_author">
                            <div class="round_img">
                                <img src="img/blog-grid/author_1.jpg" alt="">
                            </div>
                            <div class="media-body author_text">
                                <h4>Jason Response</h4>
                                <div class="date">Sep 14, 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.2s">
                    <img src="img/blog-grid/blog_grid_post8.jpg" alt="">
                    <div class="grid_post_content">
                        <div class="post_tag">
                            <a href="#">18 Min de lecture</a>
                            <a class="orange" href="#">Docy</a>
                        </div>
                        <a href="#">
                            <h4 class="b_title">How to Create GDPR Consent Form In WordPress</h4>
                        </a>
                        <p>The pressure to keep our skills sharp is constant. Mastering new skills may...</p>
                        <div class="media post_author">
                            <div class="round_img">
                                <img src="img/blog-grid/author_2.jpg" alt="">
                            </div>
                            <div class="media-body author_text">
                                <h4>Druid Wensleydale</h4>
                                <div class="date">Sep 14, 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.4s">
                    <img src="img/blog-grid/blog_grid_post9.jpg" alt="">
                    <div class="grid_post_content">
                        <div class="post_tag">
                            <a href="#">10 Min de lecture</a>
                            <a class="cat-laravel" href="#">Laravel</a>
                        </div>
                        <a href="#">
                            <h4 class="b_title">Create Conditional Logic Forms & Publish</h4>
                        </a>
                        <p>The pressure to keep our skills sharp is constant. Mastering new skills may...</p>
                        <div class="media post_author">
                            <div class="round_img">
                                <img src="img/blog-grid/author_3.jpg" alt="">
                            </div>
                            <div class="media-body author_text">
                                <h4>Douglas Lyphe</h4>
                                <div class="date">Nov 10, 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center wow fadeInUp" data-wow-delay="0.3s">
                <a href="#" class="doc_border_btn all_doc_btn">Charger plus<i class="arrow_right"></i></a>
            </div>
        </div>
    </div>
</section> --}}

@endsection