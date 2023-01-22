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
                            <li class="breadcrumb-item active"><a href="#">Contributions</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-sm-5">
                    <a href="{{ route('contributions.create') }}" class="date btn btn-success text-light"><i class="lni lni-plus"></i>Ajouter une
                        contribution</a>
                </div>
            </div>
        </div>
    </section>

    <!--================End Forum Breadcrumb Area =================-->

    <section class="doc_blog_grid_area">
        <div class="blog_grid_inner bg_color">
        </div>
        <div class="container">
            <div class="row blog_grid_tab">
                @forelse ($contributions as $contribution)
                    <div class="col-lg-4 col-sm-6">
                        <div class="blog_grid_post shadow-sm wow fadeInUp" data-wow-delay="{{ ($loop->index % 3) * 0.5 }}s">
                            <div class="grid_post_content">
                                <a
                                    href="{{ route('contribution.{contributions}.show', ['contributions' => $contribution->routingKey()]) }}">
                                    <h4 class="b_title">{{ $contribution->title }}</h4>
                                </a>
                                <p>{{ $contribution->contentTruncate() }}</p>
                                <div class="rows col-md-12">
                                    <div></div>
                                    <div class="ml-auto"><a
                                            href="{{ route('contribution.{contributions}.show', ['contributions' => $contribution->routingKey()]) }}">Continuer...</a>
                                    </div>
                                </div>
                                <div class="media row">
                                    @foreach ($contribution->contributionsFiles->take(5) as $contributionFile)
                                        <a href="{{ route('download.{contributionsFiles}.show', ['contributionsFiles' => $contributionFile->routingKey()]) }} "
                                            target="_blank">
                                            <span class="btn btn-warning m-1">
                                                <i class="lni lni-download"></i>
                                                <span>.{{ $contributionFile->file_extension() }}</span>
                                            </span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <h2>Il n'y a aucune contribution actuellement.
                    <a href="{{ route('contributions.create') }}" class="date btn btn-success text-light"><i class="lni lni-plus"></i>Ajouter une
                        ?</a></h2>
                @endforelse
            </div>
        </div>
    </section>
@endsection
