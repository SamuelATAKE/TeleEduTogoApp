@extends('layouts.default')

@section('content')

<section class="breadcrumb_area_three">
    <div class="container">
        <div class="breadcrumb_content">
            <h1>{{ $article->titre }}</h1>
            <div class="single_post_author">
                <img class="author_img" src="{{ asset($article->illustration) }}" alt="">
                <div class="text">
                    <a href="#">
                        <h4>{{ $article->user->firstname }} {{ $article->user->lastname }}</h4>
                    </a>
                    <div class="post_tag">
                        <a href="#">{{ $article->created_at }}</a>
                        <a href="#">18 Min Read</a>
                        <a class="c_blue" href="#">{{ $article->categorie }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_single_info">
                    <div class="blog_single_item">
                        <a href="#" class="blog_single_img"><img
                                src="{{ asset('img/blog-single/single_post_img.jpg') }}" alt=""></a>
                        {!! $article->contenu !!}
                        <div class="blog_social text-center">
                            <h5>Partager cet article</h5>
                            <ul class="list-unstyled f_social_icon">
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_vimeo"></i></a></li>
                                <li><a href="#"><i class="social_linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog_post_author media">
                        <div class="author_img">
                            <img src="{{ asset('img/blog-single/author.jpg') }}" alt="">
                        </div>
                        <div class="media-body">
                            <h5>{{ $article->user->firstname }} {{ $article->user->lastname }}</h5>
                            <p>Etudiant</p>
                        </div>
                    </div>
                    <div class="blog_related_post">
                        <h2 class="c_head">Article relatifs</h2>
                        {{-- <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="blog_grid_post wow fadeInUp" data-wow-delay="0.2s">
                                    <img src="img/blog-grid/blog_grid_post2.jpg" alt="">
                                    <div class="grid_post_content">
                                        <div class="post_tag">
                                            <a href="#">18 Min Read</a>
                                            <a class="cat-Docy" href="#">Docy</a>
                                        </div>
                                        <a href="#">
                                            <h4 class="b_title">70 Best Startups You Need to Watch Out for</h4>
                                        </a>
                                        <p>Cup of char brilliant horse play bro bread sloshed lavatory only...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="blog_grid_post wow fadeInUp" data-wow-delay="0.2s">
                                    <img src="img/blog-grid/blog_grid_post3.jpg" alt="">
                                    <div class="grid_post_content">
                                        <div class="post_tag">
                                            <a href="#">10 Min Read</a>
                                            <a class="cat-woocommerce" href="#">WooCommerce</a>
                                        </div>
                                        <a href="#">
                                            <h4 class="b_title">How to Connect Google With WordPress</h4>
                                        </a>
                                        <p>Cup of char brilliant horse play bro bread sloshed lavatory only...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="blog_grid_post wow fadeInUp" data-wow-delay="0.2s">
                                    <img src="img/blog-grid/blog_grid_post6.jpg" alt="">
                                    <div class="grid_post_content">
                                        <div class="post_tag">
                                            <a href="#">9 Min Read</a>
                                            <a class="cat-megento" href="#">Megento</a>
                                        </div>
                                        <a href="#">
                                            <h4 class="b_title">10 WordPress Security Issues And How to Fix</h4>
                                        </a>
                                        <p>Cup of char brilliant horse play bro bread sloshed lavatory only...</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div class="comment_inner">
                        <h2 class="c_head">{{ $numArticle }} Commentaire(s)</h2>
                        <ul class="comment_box list-unstyled">
                            @forelse ($article->commentaires as $commentaire)
                            <li class="post_comment">
                                <div class="media comment_author">
                                    <img class="img_rounded" src="{{ asset('img/blog-single/comment_01.jpg') }}" alt="">
                                    <div class="media-body">
                                        <div class="comment_info">
                                            <h3>{{ $commentaire->commentateur}}
                                            </h3>
                                            <div class="comment_date">{{ $commentaire->created_at }}</div>
                                        </div>
                                        <p>{!! $commentaire->contenu !!}</p>
                                        <a href="#" class="comment_reply">Répondre<i class="arrow_right"></i></a>
                                    </div>
                                </div>
                            </li>
                            @empty
                            <li class="post_comment">
                                Aucun commentaire pour l'instant
                            </li>
                            @endforelse
                        </ul>
                    </div>
                    <div class="blog_comment_box topic_comment">
                        <h2 class="c_head">Laisser un commentaire</h2>
                        <p>Votre adresse mail ne sera pa publiée. Les champs réquis sont marqués *</p>
                        <form class="get_quote_form row" action="{{ route('article.commentaire.store') }}" method="post">
                            @csrf
                            @method('post')
                            {{-- <div class="col-md-6 form-group"> --}}
                                <input type="hidden" class="form-control" name="article_id" id="article_id" value="{{ $article->id }}">
                            {{-- </div> --}}
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="commentateur" id="name" required>
                                <label class="floating-label">Nom complet *</label>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" required>
                                <label class="floating-label">Email *</label>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control message" name="contenu" required></textarea>
                                <label class="floating-label">Commentaire...</label>
                            </div>
                            <div class="col-md-12 form-group check_input">
                                <input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
                                <label for="fruit1">Sauvegarder mon nom, mon email dans le navigateur pour mon projet
                                    commentaire</label>
                            </div>
                            <div class="col-md-12 form-group">
                                <button class="btn action_btn thm_btn" type="submit">Poster le Commentaire</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_sidebar pl-40">
                    <div class="widget about_widget">
                        <div class="img"><img src="img/blog-single/about_img.jpg" alt=""></div>
                        <div class="text">
                            <a href="#">
                                <h3>{{ $article->user->firstname }} {{ $article->user->lastname }}</h3>
                            </a>
                            <p>Etudiant </p>
                        </div>
                    </div>
                    <div class="widget categorie_widget">
                        <h4 class="c_head">Post Categories</h4>
                        {{-- <ul class="list-unstyled categorie_list">
                            <li><a href="#">Creative <span>(12)</span></a></li>
                            <li><a href="#">Inspiration <span>(8)</span></a></li>
                            <li><a href="#">Lifestyle <span>(3)</span></a></li>
                            <li><a href="#">News <span>(4)</span></a></li>
                            <li><a href="#">Photography <span>(12)</span></a></li>
                            <li><a href="#">Skill <span>(15)</span></a></li>
                            <li><a href="#">Tourist Tours <span>(10)</span></a></li>
                            <li><a href="#">Inspire <span>(5)</span></a></li>
                        </ul> --}}
                    </div>
                    <div class="widget recent_news_widget">
                        <h4 class="c_head">Articles récents</h4>
                        {{-- <div class="media recent_post_item">
                            <img src="img/blog-single/news_01.jpg" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h5>Is It Worth Buying A Premium Form Builder.</h5>
                                </a>
                                <div class="entry_post_date">January 14, 2020</div>
                            </div>
                        </div>
                        <div class="media recent_post_item">
                            <img src="img/blog-single/news_02.jpg" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h5>10 Classic Summer Vacations</h5>
                                </a>
                                <div class="entry_post_date">April 16, 2020</div>
                            </div>
                        </div>
                        <div class="media recent_post_item">
                            <img src="img/blog-single/news_03.jpg" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h5>How To Easily Add weForms Widget Using Elementor</h5>
                                </a>
                                <div class="entry_post_date">March 10, 2020</div>
                            </div>
                        </div>
                        <div class="media recent_post_item">
                            <img src="img/blog-single/news_04.jpg" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h5>How to Create GDPR Consent Form In WordPress</h5>
                                </a>
                                <div class="entry_post_date">January 19, 2020</div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="widget comments_widget">
                        <h4 class="c_head">Commentaires récents</h4>
                        {{-- <ul class="list-unstyled recent_comments">
                            <li>
                                <h6><i class="icon_chat_alt"></i>Douglas Lyphe:</h6>
                                <a href="#" class="text">
                                    French squiffy pukka gosh nancy boy buggered, bog-standard.!
                                </a>
                            </li>
                            <li>
                                <h6><i class="icon_chat_alt"></i>Hilary Ouse:</h6>
                                <a href="#" class="text">
                                    Charles give us a bell butty blatant baking cakes cheesed off.
                                </a>
                            </li>
                            <li>
                                <h6><i class="icon_chat_alt"></i>Penny Tool:</h6>
                                <a href="#" class="text">
                                    Starkers happy days bobby pardon me.
                                </a>
                            </li>
                            <li>
                                <h6><i class="icon_chat_alt"></i>Jackson Pot:</h6>
                                <a href="#" class="text">
                                    Charles give us a bell butty blatant baking cakes cheesed off.
                                </a>
                            </li>
                        </ul> --}}
                    </div>
                    <div class="widget tag_widget">
                        <h4 class="c_head">Tags</h4>
                        {{-- <ul class="list-unstyled w_tag_list">
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Apps</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Docy</a></li>
                            <li><a href="#">WordPress</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">DocAll</a></li>
                            <li><a href="#">Magento</a></li>
                            <li><a href="#">Doc Design</a></li>
                            <li><a href="#">ui/ux</a></li>
                            <li><a href="#">Docs</a></li>
                        </ul> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection