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
                                placeholder="Rechercher un sujet spécifique...." />
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
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="#">Forum</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tous les forums</li>
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

<section class="doc_blog_grid_area sec_pad forum-page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="answer-action shadow">
                    <div class="action-content">
                        <div class="image-wrap">
                            <img src="img/home_support/answer.png" alt="answer action">
                        </div>
                        <div class="content">
                            <h2 class="ans-title">Vous n'avez pas de réponse?</h2>
                            <p> Faites recours à la communauté pour obtenir une réponse</p>
                        </div>
                    </div>
                    <!-- /.action-content -->
                    <div class="action-button-container">
                        <a href="#" class="action_btn btn-ans">Poser une question</a>
                    </div>
                    <!-- /.action-button-container -->
                </div>
                <!-- /.answer-action -->

                <div class="post-header forums-header">
                    <div class="col-md-6 col-sm-6 support-info">
                        <span> Forum </span>
                    </div>
                    <!-- /.support-info -->
                    <div class="col-md-6 col-sm-6 support-category-menus">
                        <ul class="forum-titles">
                            <li class="forum-topic-count">Sujets</li>
                            <li class="forum-reply-count">Posts</li>
                            <li class="forum-freshness">Dernier post</li>
                        </ul>
                    </div>
                    <!-- /.support-category-menus -->
                </div>
                <!-- /.post-header -->

                <div class="community-posts-wrapper bb-radius">

                    <!-- Forum Item -->
                    <div class="community-post style-two forum-item bug">
                        <div class="col-md-6 post-content">
                            <div class="author-avatar forum-icon">
                                <img src="img/home_support/rc1.png" alt="community post">
                            </div>
                            <div class="entry-content">
                                <a href="forum-topics.html">
                                    <h3 class="post-title"> Announcements </h3>
                                </a>
                                <p>This forum is a special forum for general announcements.</p>
                            </div>
                        </div>
                        <div class="col-md-6 post-meta-wrapper">
                            <ul class="forum-titles">
                                <li class="forum-topic-count">10</li>
                                <li class="forum-reply-count">105</li>
                                <li class="forum-freshness">
                                    <div class="freshness-box">
                                        <div class="freshness-top">
                                            <div class="freshness-link">
                                                <a href="#" title="Reply To: Main Forum Rules &amp; Policies">2 years, 2
                                                    months ago</a>
                                            </div>
                                        </div>
                                        <div class="freshness-btm">
                                            <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                <div class="freshness-name">
                                                    <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                        <span class="bbp-author-name">Eh Jewel</span>
                                                    </a>
                                                </div>
                                                <span class="bbp-author-avatar">
                                                    <img alt="Eh Jewel" src="img/home_support/cp5.jpg"
                                                        class="avatar photo">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.forum-item  -->

                    <!-- Forum Item -->
                    <div class="community-post style-two forum-item bug">
                        <div class="col-md-6 post-content">
                            <div class="author-avatar forum-icon">
                                <img src="img/home_support/rc2.png" alt="community post">
                            </div>
                            <div class="entry-content">
                                <a href="forum-topics.html">
                                    <h3 class="post-title">Technology</h3>
                                </a>
                                <p>Latest technology news and updates from our community.</p>
                            </div>
                        </div>
                        <div class="col-md-6 post-meta-wrapper">
                            <ul class="forum-titles">
                                <li class="forum-topic-count">20</li>
                                <li class="forum-reply-count">305</li>
                                <li class="forum-freshness">
                                    <div class="freshness-box">
                                        <div class="freshness-top">
                                            <div class="freshness-link">
                                                <a href="#" title="Reply To: Main Forum Rules &amp; Policies">2 years, 2
                                                    months ago</a>
                                            </div>
                                        </div>
                                        <div class="freshness-btm">
                                            <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                <div class="freshness-name">
                                                    <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                        <span class="bbp-author-name">Eh Jewel</span>
                                                    </a>
                                                </div>
                                                <span class="bbp-author-avatar">
                                                    <img alt="Eh Jewel" src="img/home_support/cp6.jpg"
                                                        class="avatar photo">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.forum-item  -->

                    <!-- Forum Item -->
                    <div class="community-post style-two forum-item bug">
                        <div class="col-md-6 post-content">
                            <div class="author-avatar forum-icon">
                                <img src="img/home_support/rc8.png" alt="community post">
                            </div>
                            <div class="entry-content">
                                <a href="forum-topics.html">
                                    <h3 class="post-title"> TV & Movies </h3>
                                </a>
                                <p>Use this forum to share your opinion about films and TV Shows. </p>
                            </div>
                        </div>
                        <div class="col-md-6 post-meta-wrapper">
                            <ul class="forum-titles">
                                <li class="forum-topic-count">30</li>
                                <li class="forum-reply-count">156</li>
                                <li class="forum-freshness">
                                    <div class="freshness-box">
                                        <div class="freshness-top">
                                            <div class="freshness-link">
                                                <a href="#" title="Reply To: Main Forum Rules &amp; Policies">2 years, 2
                                                    months ago</a>
                                            </div>
                                        </div>
                                        <div class="freshness-btm">
                                            <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                <div class="freshness-name">
                                                    <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                        <span class="bbp-author-name">Kyle Jonson</span>
                                                    </a>
                                                </div>
                                                <span class="bbp-author-avatar">
                                                    <img alt="Eh Jewel" src="img/home_support/cp7.png"
                                                        class="avatar photo">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.forum-item  -->

                    <!-- Forum Item -->
                    <div class="community-post style-two forum-item bug">
                        <div class="col-md-6 post-content">
                            <div class="author-avatar forum-icon">
                                <img src="img/home_support/rc3.png" alt="community post">
                            </div>
                            <div class="entry-content">
                                <a href="forum-topics.html">
                                    <h3 class="post-title"> Docy Support </h3>
                                </a>
                                <p>Get support for Docy knowledge-base and documentation template.</p>
                            </div>
                        </div>
                        <div class="col-md-6 post-meta-wrapper">
                            <ul class="forum-titles">
                                <li class="forum-topic-count">99</li>
                                <li class="forum-reply-count">405</li>
                                <li class="forum-freshness">
                                    <div class="freshness-box">
                                        <div class="freshness-top">
                                            <div class="freshness-link">
                                                <a href="#" title="Reply To: Main Forum Rules &amp; Policies">1 years, 2
                                                    months ago</a>
                                            </div>
                                        </div>
                                        <div class="freshness-btm">
                                            <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                <div class="freshness-name">
                                                    <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                        <span class="bbp-author-name">Giles Posture</span>
                                                    </a>
                                                </div>
                                                <span class="bbp-author-avatar">
                                                    <img alt="Eh Jewel" src="img/home_support/cp10.png"
                                                        class="avatar photo">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.forum-item  -->

                    <!-- Forum Item -->
                    <div class="community-post style-two forum-item bug">
                        <div class="col-md-6 post-content">
                            <div class="author-avatar forum-icon">
                                <img src="img/home_support/rc13.png" alt="community post">
                            </div>
                            <div class="entry-content">
                                <a href="forum-topics.html">
                                    <h3 class="post-title"> Marketplaces </h3>
                                </a>
                                <p>This forum is a special forum for marketplace support.</p>
                            </div>
                        </div>
                        <div class="col-md-6 post-meta-wrapper">
                            <ul class="forum-titles">
                                <li class="forum-topic-count">50</li>
                                <li class="forum-reply-count">215</li>
                                <li class="forum-freshness">
                                    <div class="freshness-box">
                                        <div class="freshness-top">
                                            <div class="freshness-link">
                                                <a href="#" title="Reply To: Main Forum Rules &amp; Policies">1 years, 3
                                                    months ago</a>
                                            </div>
                                        </div>
                                        <div class="freshness-btm">
                                            <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                <div class="freshness-name">
                                                    <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                        <span class="bbp-author-name">Eh Jewel</span>
                                                    </a>
                                                </div>
                                                <span class="bbp-author-avatar">
                                                    <img alt="Eh Jewel" src="img/home_support/cp5.jpg"
                                                        class="avatar photo">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.forum-item  -->

                </div>
                <!-- /.community-posts-wrapper -->
            </div>
            <!-- /.col-lg-9 -->

            <div class="col-lg-3">
                <div class="forum_sidebar">
                    <div class="widget status_widget">
                        <h4 class="c_head">Information</h4>
                        <p class="status">Support is <span class="offline">Offline</span></p>

                        <div class="open-hours">
                            <h4 class="title-sm">Our office hours</h4>
                            <p>Monday - Friday / 10am - 6pm (UTC +4) NewYork</p>
                            <ul class="current-time list-unstyled">
                                <li>
                                    <h4 class="title-sm">Your time</h4>
                                    <p>10:30:15 PM</p>
                                </li>
                                <li>
                                    <h4 class="title-sm">Your time</h4>
                                    <p>10:30:15 PM</p>
                                </li>
                            </ul>
                        </div>
                        <!-- /.open-hours -->

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
                            <li><a href="#">Product board</a></li>
                            <li><a href="#">WordPress</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">ui/ux</a></li>
                            <li><a href="#">Doc Design</a></li>
                            <li><a href="#">DocAll</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- /.col-lg-3 -->
        </div>
    </div>
</section>

<div class="call-to-action">
    <div class="overlay-bg"></div>
    <div class="container">
        <div class="action-content-wrapper">
            <div class="action-title-wrap title-img">
                <img src="img/home_support/chat-smile.png" alt="">
                <h2 class="action-title">Nouveau sur la plateforme?</h2>
            </div>
            <a href="#" class="action_btn">Rejoignez la communauté! <i class="arrow_right"></i></a>
        </div>
        <!-- /.action-content-wrapper -->
    </div>
    <!-- /.container -->
</div>

@endsection