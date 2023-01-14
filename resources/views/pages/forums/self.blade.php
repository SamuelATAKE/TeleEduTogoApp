@extends('layouts.default')

@section('content')
    <!--================Forum Breadcrumb Area =================-->
    <section class="doc_banner_area search-banner-light"
        style="background: linear-gradient(62deg, rgb(14, 6, 6) 0.00%, rgb(255, 0, 191) 100.00%);">
        <div class="container">
            <div class="doc_banner_text">
                <span class="mb-3 mt-2 pt-1 wow fadeInUp d-block" data-wow-delay="0.7s">
                    <!--forum icon-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                        <path fill="white"
                            d="M12 0c-6.617 0-12 5.383-12 12s5.383 12 12 12 12-5.383 12-12-5.383-12-12-12zm0 22.5c-5.799 0-10.5-4.701-10.5-10.5s4.701-10.5 10.5-10.5 10.5 4.701 10.5 10.5-4.701 10.5-10.5 10.5zm0-19.5c-4.687 0-8.5 3.813-8.5 8.5s3.813 8.5 8.5 8.5 8.5-3.813 8.5-8.5-3.813-8.5-8.5-8.5zm0 15.5c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6zm0-10c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6.5c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z" />
                    </svg>
                </span>
                <span>
                    <h5 class="wow fadeInUp text-white d-inline" data-wow-delay="0.9s">Forum | Mes forums</h5>
                </span>
            </div>
            <div class="doc_banner_content">
                <form action="#" class="header_search_form">
                    <div class="header_search_form_info wow fadeInUp" data-wow-delay="1.2s">
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
                        <span class="header-search-form__keywords-label text-white">Recherches populaires:</span>
                        <ul class="list-unstyled text-white">
                            <li class="wow fadeInUp text-white" data-wow-delay="0.2s"><a href="#"
                                    class="text-white">Mathématiques</a>,</li>
                            <li class="wow fadeInUp text-white" data-wow-delay="0.3s"><a href="#"
                                    class="text-white">Sciences physiques</a>,</li>
                            <li class="wow fadeInUp text-white" data-wow-delay="0.3s"><a href="#"
                                    class="text-white">SVT</a></li>
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
                            <li class="breadcrumb-item"><a href="/">Accueil</a></li>"
                            <li class="breadcrumb-item"><a href="{{ route('forums') }}">Tous les forums</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mes forums</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-sm-5">
                    <!-- current date -->
                    <a href="#" class="date text-dark"><i class="icon_clock_alt"></i>Mis à jour le {{ date('d/m/Y') }}
                        à {{ date('H:i') }}</a>
                </div>
            </div>
        </div>
    </section>
    <!--================End Forum Breadcrumb Area =================-->

    <section class="doc_blog_grid_area sec_pad forum-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="answer-action shadow">
                        <div class="action-content">
                            <div class="image-wrap">
                                <img src="{{ asset('img/home_support/answer.png') }}" alt="answer">
                            </div>
                            <div class="content">
                                <h2 class="ans-title">Vous n'avez pas de réponse?</h2>
                                <p> Faites recours à la communauté pour obtenir une réponse</p>
                            </div>
                        </div>
                        <!-- /.action-content -->
                        <div class="action-button-container">
                            <button class="action_btn btn-ans" type="button" data-toggle="modal"
                                data-target="#exampleModalCenter">Poser une question</button>
                            <!--Modal xl : To create modal to Post question in forum-->
                        </div>
                    </div>

                </div>
                <!-- /.action-button-container -->
            </div>
            <!-- /.answer-action -->
            <div class="modal" id="exampleModalCenter" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true" data-backdrop="false" tabindex="-1">
                <div class="modal-dialog modal-lg" role="document">
                    <form action="{{ route('forums.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Poser une question</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body forum-modal">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group forum-form-group">
                                            <label for="example text">Titre de la question</label>
                                            <input type="text" class="form-control" id="example text"
                                                placeholder="Titre de la question" name="title">
                                            <!--validation error-->
                                            @error('title')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group forum-form-group">
                                            <label for="exampleFormControlTextarea1">Description de la
                                                question</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                name="content"></textarea>
                                            <!--validation error-->
                                            @error('content')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group forum-form-group">
                                            <label for="exampleFormControlSelect1">Catégorie</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="category">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group forum-form-group">
                                            <label for="exampleFormControlSelect1">Niveau</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Primaire</option>
                                                <option>Collège</option>
                                                <option>Lycée</option>
                                                <option>Université</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-secondary"
                                    data-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-sm btn-primary">Publier</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @if (count($forums) > 0)
                <div class="post-header forums-header">
                    <div class="col-md-6 col-sm-6 support-info">
                        <span> <i class="fa fa-comments-o"></i> {{ count($forums) }} Sujets</span>
                    </div>
                    <!-- /.support-info -->
                    <div class="col-md-6 col-sm-6 support-category-menus">
                        <ul class="forum-titles">
                            <li class="forum-topic-count">Commentaires</li>
                            <li class="forum-reply-count">J'aime</li>
                            <li class="forum-reply-count">J'aime pas</li>
                            <li class="forum-freshness">Dernier commentaire</li>
                        </ul>
                    </div>
                    <!-- /.support-category-menus -->
                </div>
                <!-- /.post-header -->
                @foreach ($forums as $forum)
                    <div class="community-posts-wrapper bb-radius">
                        <div class="community-post style-two forum-item bug">
                            <div class="col-md-6 post-content">
                                <div class="author-avatar forum-icon">
                                    <img src="{{ asset('img/home_support/rc7.png') }}" alt="community post">
                                </div>
                                <div class="entry-content">
                                    <a href="{{ route('forum', $forum->slug) }}">
                                        <h3 class="post-title"> {{ $forum->title }} </h3>
                                    </a>
                                    <p>{{ $forum->content }}</p>
                                </div>
                            </div>
                            <div class="col-md-6 post-meta-wrapper">
                                <ul class="forum-titles">
                                    <li class="forum-topic-count">{{ count($forum->comments) }}</li>
                                    <li class="forum-reply-count">
                                        <i class="fa fa-thumbs-up"></i> {{ $forum->likes }}
                                    </li>
                                    <li class="forum-reply-count">
                                        <i class="fa fa-thumbs-up"></i> {{ $forum->likes }}
                                    </li>
                                    <li class="forum-freshness">
                                        <div class="freshness-box">
                                            <div class="freshness-top">
                                                <div class="freshness-link">
                                                    <a href="#" title="Reply To: Main Forum Rules &amp; Policies">
                                                        {{ $forum->comments->last() ? $forum->comments->last()->created_at->diffForHumans() : 'Pas de commentaire' }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="freshness-btm">
                                                <a href="#" title="View Eh Jewel's profile"
                                                    class="bbp-author-link">
                                                    <div class="freshness-name">
                                                        <a href="#" title="View Eh Jewel's profile"
                                                            class="bbp-author-link">
                                                            <span
                                                                class="bbp-author-name">{{ $forum->comments->last() ? $forum->comments->last()->user->name : '' }}</span>
                                                        </a>
                                                    </div>
                                                    <span class="bbp-author-avatar">
                                                        <img alt="Eh Jewel" src="{{ asset('img/home_support/cp5.jpg') }}"
                                                            class="avatar photo">
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Pagination  laravel bootstrap -->
                <div class="justify-content-center mt-3">
                    {{ $forums->links() }}
                </div>
            @else
                <div class="alert alert-info">
                    <div class="alert-icon">
                        <i class="fa fa-info fa-2x"></i>
                    </div>
                    <div class="alert-message">
                        <span><strong>Info!</strong> Il n'y a pas encore de forum dans cette catégorie</span>
                    </div>
                </div>
            @endif

        </div>
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
@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            tinymce.init({
                selector: 'textarea', // change this value according to your HTML
                plugins: ['a_tinymce_plugin', 'image', 'link'],
                a_plugin_option: true,
                a_configuration_option: 400,
                images_file_types: 'jpg,svg,webp,png',
                file_picker_types: 'file image media'
            });
        });
    </script>
@endsection
