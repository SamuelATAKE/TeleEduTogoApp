@extends('layouts.default')

@section('content')
    <section class="doc_blog_grid_area sec_pad forum-single-content mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- Forum post top area -->
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="forum-post-top">
                                {{-- <a class="author-avatar" href="#">
                                <img src="img/forum/author-avatar.png" alt="">
                            </a> --}}
                                <div class="forum-post-author">
                                    <a class="author-name" href="#"></a>
                                    <div class="forum-author-meta">
                                        {{-- <div class="author-badge">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="15px">
                                            <path fill-rule="evenodd"  fill="rgb(131, 135, 147)"
                                                  d="M11.729,12.136 L11.582,12.167 C11.362,12.415 11.125,12.645 10.869,12.857 L14.999,12.857 C15.134,12.857 15.255,12.944 15.307,13.077 C15.359,13.211 15.331,13.365 15.235,13.467 L14.488,14.268 C14.053,14.733 13.452,15.000 12.838,15.000 L2.495,15.000 C1.872,15.000 1.286,14.740 0.845,14.268 L0.098,13.467 C0.002,13.365 -0.026,13.211 0.026,13.077 C0.077,12.944 0.199,12.857 0.334,12.857 L4.463,12.857 C2.928,11.585 2.000,9.630 2.000,7.499 L2.000,6.785 C2.000,6.194 2.449,5.713 3.000,5.713 L12.333,5.713 C12.885,5.713 13.333,6.194 13.333,6.785 L13.333,7.343 C13.869,7.160 14.736,6.973 15.355,7.400 C15.783,7.696 16.000,8.209 16.000,8.928 C16.000,11.239 11.903,12.100 11.729,12.136 ZM14.994,8.002 C14.557,7.698 13.715,7.941 13.294,8.113 C13.197,9.261 12.837,10.339 12.255,11.269 C13.480,10.911 15.333,10.116 15.333,8.928 C15.333,8.462 15.223,8.158 14.994,8.002 ZM10.261,4.419 C10.376,4.573 10.353,4.798 10.209,4.921 C10.148,4.974 10.074,4.999 10.001,4.999 C9.903,4.999 9.807,4.954 9.740,4.865 C9.198,4.139 9.198,3.002 9.741,2.277 C10.086,1.816 10.086,1.040 9.742,0.580 C9.627,0.426 9.650,0.201 9.794,0.078 C9.937,-0.044 10.146,-0.020 10.263,0.134 C10.805,0.860 10.805,1.996 10.263,2.722 C9.917,3.183 9.917,3.959 10.261,4.419 ZM8.259,4.419 C8.373,4.573 8.350,4.798 8.207,4.921 C8.145,4.974 8.071,4.999 7.999,4.999 C7.901,4.999 7.804,4.954 7.738,4.865 C7.195,4.139 7.195,3.002 7.738,2.277 C8.082,1.816 8.082,1.040 7.739,0.580 C7.624,0.426 7.647,0.201 7.791,0.078 C7.935,-0.045 8.145,-0.020 8.259,0.134 C8.802,0.860 8.802,1.996 8.259,2.722 C7.915,3.183 7.915,3.959 8.259,4.419 ZM6.261,4.418 C6.376,4.572 6.353,4.797 6.210,4.920 C6.148,4.973 6.074,4.999 6.001,4.999 C5.903,4.999 5.807,4.953 5.741,4.865 C5.198,4.139 5.198,3.002 5.741,2.276 C6.085,1.815 6.085,1.039 5.742,0.580 C5.627,0.426 5.650,0.201 5.794,0.078 C5.937,-0.046 6.147,-0.020 6.262,0.133 C6.804,0.859 6.804,1.996 6.262,2.721 C5.918,3.182 5.918,3.959 6.261,4.418 Z"/>
                                        </svg>
                                        <span></span>
                                    </div> --}}
                                        <div class="author-badge">
                                            <i class="icon_calendar"></i>
                                            <a href="">{{ $contributions->created_at }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="action-button-container">
                                <a href="{{ route('forums') }}" class="action_btn btn-ans ask-btn">Question?</a>
                            </div>
                        </div>
                    </div>

                    <!-- Forum post content -->
                    <div class="q-title">
                        <span class="question-icon" title="Question">Titre </span>
                        <h1>{{ $contributions->title }}</h1>
                    </div>
                    <div class="forum-post-content">
                        <div class="content">
                            <p>{{ $contributions->content }}</p>
                            <p>Fichier associé : </p>
                            @foreach ($contributions->ContributionsFiles as $contributionFile)
                                <a href="{{ route('download.{contributionsFiles}.show', ['contributionsFiles' => $contributionFile->routingKey()]) }} "
                                    target="_blank">
                                    {{-- <img src="{{ asset('files/' . $contributionFile->file_name) }}" alt="prevew"> --}}
                                    <span class="btn btn-warning m-1">
                                        <i class="lni lni-download"></i>
                                        <span>{{ $contributionFile->file_extension() }}</span>
                                    </span>
                                </a>
                                <small>click to download</small>
                            @endforeach
                        </div>
                        <div class="forum-post-btm">
                            <div class="taxonomy forum-post-tags">
                                <i class="icon_tags_alt"></i><a href="#">{{ $contributions->Category->name }}</a>
                            </div>
                            <div class="taxonomy forum-post-cat">
                                <img src="img/forum/logo-favicon.png" alt=""><a
                                    href="#">{{ $contributions->Author->firstname }}</a>
                            </div>
                        </div>
                        <div class="action-button-container action-btns">
                            <a href="#" class="action_btn btn-ans ask-btn reply-btn">Like</a>
                            <a href="#" class="action_btn btn-ans ask-btn too-btn">Dislike</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="forum_sidebar">
                        {{-- <div class="widget status_widget">
                        <h4 class="c_head">Information</h4>
                        <p class="status">Support is <span class="offline">Offline</span></p>
                        <div class="open-hours">
                            <h4 class="title-sm">Our office hours</h4>
                            <p>
                                Monday - Friday / 10am - 6pm (UTC +4) NewYork
                            </p>
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
                    </div> --}}
                        <div class="widget ticket_widget">
                            <h4 class="c_head">Même Categorie</h4>
                            <ul class="list-unstyled ticket_categories">
                                @foreach ($relateds as $related)
                                    <li>
                                        <a
                                            href="{{ route('contribution.{contributions}.show', ['contributions' => $contributions->routingKey()]) }}">
                                            <h6>{{ $related->title }}</h6>
                                        </a>
                                    </li>
                                    <hr>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget tag_widget">
                            <h4 class="c_head">Tags</h4>
                            <ul class="list-unstyled w_tag_list style-light">
                                <li><a href="#">{{ $contributions->Category->name }}</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
        </div>
    </section>
@endsection
