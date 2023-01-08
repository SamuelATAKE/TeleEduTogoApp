@extends('layouts.default')

@section('styles')
{{--
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script> --}}
<script src="https://cdn.tiny.cloud/1/xqabqz33jp8ly38i2o9pf8zc8hvr2bbm0oswzn6b2kn2e0a6/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
</script>
@endsection

@section('content')


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
                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                        <li class="breadcrumb-item active"><a href="#">Créer article</a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-sm-5">
                {{-- <a href="#" class="date"><i class="icon_clock_alt"></i>Mis à jour le 03 Mars 2020</a> --}}
            </div>
        </div>
    </div>
</section>

<section class="blog_top_post_area sec_pad bg_color">
    <div class="container">
        <div class="blog_comment_box topic_comment">
            <h2 class="c_head">Créer un article</h2>
            <p>Rédiger proprement votre article en renseignant toutes les informations *</p>
            <form class="get_quote_form row" action="{{ route('article.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="title" name="titre" required>
                    <label class="floating-label">Titre de l'article *</label>
                </div>
                <div class="col-md-12 form-group">
                    <select class="form-control" id="category" name="categorie" required>
                        <option value="" selected>Catégorie de l'article *</option>
                        <option value="ministere">Ministère de l'Enseignement</option>
                        <option value="sciences">Sciences</option>
                        <option value="litterature">Littérature</option>
                        <option value="info">Informatique et Technologie</option>
                        <option value="app">TeleEduTogoApp</option>
                        <option value="ent">ENT-Togo</option>
                    </select>
                    {{-- <label class="floating-label">Catégorie de l'article *</label> --}}
                </div>
                <div class="col-md-12 mb-4">
                    <label class="floating-label">Une image de l'article *</label>
                    <input type="file" class="form-control" id="illustration" name="illustration" required>
                </div>
                <div class="col-md-12 form-group">
                    <textarea class="form-control message" name="contenu"></textarea>
                    {{-- <label class="floating-label">Commentaire...</label> --}}
                    {{-- <input id="x" type="hidden" name="contenu">
                    <trix-editor input="x"></trix-editor> --}}
                </div>
                {{-- <div class="col-md-12 form-group check_input">
                    <input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
                    <label for="fruit1">Sauvegarder mon nom, mon email dans le navigateur pour mon projet
                        commentaire</label>
                </div> --}}
                <div class="col-md-12 form-group">
                    <button class="btn action_btn thm_btn" type="submit">Poster l'article</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection