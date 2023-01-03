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
                        <li class="breadcrumb-item"><a href="#">Forums</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mes forums</li>
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

<section class="doc_blog_grid_area sec_pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog_grid_post shadow-sm wow fadeInUp">
                            <img src="img/blog-grid/blog_grid_post1.jpg" alt="">
                            <div class="grid_post_content">
                                <div class="post_tag">
                                    <a href="#">18 réactions</a>
                                    <a class="cat-woocommerce" href="#">Mathématiques</a>
                                </div>
                                <a href="#">
                                    <h4 class="b_title">Is Your Store Safe From Magento Killer?</h4>
                                </a>
                                <p>Cup of char brilliant horse play bro bread sloshed lavatory only...</p>
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
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.2s">
                            <img src="img/blog-grid/blog_grid_post2.jpg" alt="">
                            <div class="grid_post_content">
                                <div class="post_tag">
                                    <a href="#">18 réactions</a>
                                    <a class="cat-Docy" href="#">Biologie</a>
                                </div>
                                <a href="#">
                                    <h4 class="b_title">70 Best Startups You Need to Watch Out for</h4>
                                </a>
                                <p>Cup of char brilliant horse play bro bread sloshed lavatory only...</p>
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
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.4s">
                            <img src="img/blog-grid/blog_grid_post3.jpg" alt="">
                            <div class="grid_post_content">
                                <div class="post_tag">
                                    <a href="#">10 réactions</a>
                                    <a class="cat-laravel" href="#">Sciences Physiques</a>
                                </div>
                                <a href="#">
                                    <h4 class="b_title">Create Conditional Logic Forms & Publish</h4>
                                </a>
                                <p>Cup of char brilliant horse play bro bread sloshed lavatory only...</p>
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
                    <div class="col-lg-6 col-sm-6" data-wow-delay="0.6s">
                        <div class="blog_grid_post shadow-sm wow fadeInUp">
                            <img src="img/blog-grid/blog_grid_post4.jpg" alt="">
                            <div class="grid_post_content">
                                <div class="post_tag">
                                    <a href="#">18 réactions</a>
                                    <a class="cat-laravel" href="#">Chimie</a>
                                </div>
                                <a href="#">
                                    <h4 class="b_title">How to Use Forms for Enhancing UX In WordPress</h4>
                                </a>
                                <p>Cup of char brilliant horse play bro bread sloshed lavatory only...</p>
                                <div class="media post_author">
                                    <div class="round_img">
                                        <img src="img/blog-grid/author_4.jpg" alt="">
                                    </div>
                                    <div class="media-body author_text">
                                        <h4>Indigo Violet</h4>
                                        <div class="date">March 23, 2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.2s">
                            <img src="img/blog-grid/blog_grid_post5.jpg" alt="">
                            <div class="grid_post_content">
                                <div class="post_tag">
                                    <a href="#">10 réactions</a>
                                    <a class="cat-megento" href="#">Chimie</a>
                                </div>
                                <a href="#">
                                    <h4 class="b_title">Create A WordPress Multi Step Form With weForms</h4>
                                </a>
                                <p>Cup of char brilliant horse play bro bread sloshed lavatory only...</p>
                                <div class="media post_author">
                                    <div class="round_img">
                                        <img src="img/blog-grid/author_5.jpg" alt="">
                                    </div>
                                    <div class="media-body author_text">
                                        <h4>Niles Peppertrout</h4>
                                        <div class="date">Oct 12, 2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.4s">
                            <img src="img/blog-grid/blog_grid_post6.jpg" alt="">
                            <div class="grid_post_content">
                                <div class="post_tag">
                                    <a href="#">14 réactions</a>
                                    <a class="cat-laravel" href="#">Mathématiques</a>
                                </div>
                                <a href="#">
                                    <h4 class="b_title">The Grand Ecommerce Giveaway Worth</h4>
                                </a>
                                <p>Cup of char brilliant horse play bro bread sloshed lavatory only...</p>
                                <div class="media post_author">
                                    <div class="round_img">
                                        <img src="img/blog-grid/author_6.jpg" alt="">
                                    </div>
                                    <div class="media-body author_text">
                                        <h4>Hanson Deck</h4>
                                        <div class="date">Sep 17, 2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.2s">
                            <img src="img/blog-grid/blog_grid_post4.jpg" alt="">
                            <div class="grid_post_content">
                                <div class="post_tag">
                                    <a href="#">18 réactions</a>
                                    <a class="c_blue" href="#">Biologie</a>
                                </div>
                                <a href="#">
                                    <h4 class="b_title">How to Connect Google Calendar With WordPress</h4>
                                </a>
                                <p>Cup of char brilliant horse play bro bread sloshed lavatory only...</p>
                                <div class="media post_author">
                                    <div class="round_img">
                                        <img src="img/blog-grid/author_4.jpg" alt="">
                                    </div>
                                    <div class="media-body author_text">
                                        <h4>Indigo Violet</h4>
                                        <div class="date">March 23, 2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="0.4s">
                            <img src="img/blog-grid/blog_grid_post5.jpg" alt="">
                            <div class="grid_post_content">
                                <div class="post_tag">
                                    <a href="#">10 réactions</a>
                                    <a class="orange" href="#">Physiques</a>
                                </div>
                                <a href="#">
                                    <h4 class="b_title">How to Create Online Survey Forms in WordPress</h4>
                                </a>
                                <p>Cup of char brilliant horse play bro bread sloshed lavatory only...</p>
                                <div class="media post_author">
                                    <div class="round_img">
                                        <img src="img/blog-grid/author_5.jpg" alt="">
                                    </div>
                                    <div class="media-body author_text">
                                        <h4>Niles Peppertrout</h4>
                                        <div class="date">Oct 12, 2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <nav class="navigation pagination" role="navigation">
                            <div class="nav-links">
                                <span aria-current="page" class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="next page-numbers" href="#"><i class="arrow_carrot-right"></i></a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_sidebar pl-40">
                    <div class="widget about_widget">
                        <div class="img"><img src="img/blog-single/about_img.jpg" alt=""></div>
                        <div class="text">
                            <a href="#">
                                <h3>Rodney Artichoke</h3>
                            </a>
                            <p>James Bond jolly good happy days smashing barney bonnet bits and bobs loo.!</p>
                        </div>
                    </div>
                    <div class="widget categorie_widget">
                        <h4 class="c_head">Post Categories</h4>
                        <ul class="list-unstyled categorie_list">
                            <li><a href="#">Creative <span>(12)</span></a></li>
                            <li><a href="#">Inspiration <span>(8)</span></a></li>
                            <li><a href="#">Lifestyle <span>(3)</span></a></li>
                            <li><a href="#">News <span>(4)</span></a></li>
                            <li><a href="#">Photography <span>(12)</span></a></li>
                            <li><a href="#">Skill <span>(15)</span></a></li>
                            <li><a href="#">Tourist Tours <span>(10)</span></a></li>
                            <li><a href="#">Inspire <span>(5)</span></a></li>
                        </ul>
                    </div>
                    <div class="widget recent_news_widget">
                        <h4 class="c_head">Reacent News</h4>
                        <div class="media recent_post_item">
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
                        </div>
                    </div>
                    <div class="widget tag_widget">
                        <h4 class="c_head">Tags</h4>
                        <ul class="list-unstyled w_tag_list">
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
                        </ul>
                    </div>
                    <div class="widget instragram_widget">
                        <h4 class="c_head">Instragram</h4>
                        <div class="instragram_info">
                            <a href="#" class="instragram_item">
                                <img src="img/blog-single/image_01.jpg" alt="">
                            </a>
                            <a href="#" class="instragram_item">
                                <img src="img/blog-single/image_02.jpg" alt="">
                            </a>
                            <a href="#" class="instragram_item">
                                <img src="img/blog-single/image_03.jpg" alt="">
                            </a>
                            <a href="#" class="instragram_item">
                                <img src="img/blog-single/image_04.jpg" alt="">
                            </a>
                            <a href="#" class="instragram_item">
                                <img src="img/blog-single/image_05.jpg" alt="">
                            </a>
                            <a href="#" class="instragram_item">
                                <img src="img/blog-single/image_06.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection