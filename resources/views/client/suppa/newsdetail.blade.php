@extends('client.layouts.app')
@section('meta_tag_keyword', $news->meta_keyword)
@section('meta_tag_description', $news->meta_description)
@section('meta_og')
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $news->title }}" />
    <meta property="og:description" content="{{ $news->short_detail }}" />
    <meta property="og:image"
        content="@if (!empty($news->getFirstMediaUrl('news'))) {{ $news->getFirstMediaUrl('news') }} @else {{ asset('images/noimage.jpg') }} @endif" />
@endsection
@section('content')
    <section id="page-title" class="text-light"
        style="background-image:linear-gradient(0deg, rgba(0, 0, 0, 0.56),rgba(0, 0, 0, 0.6)), url({{ asset(setting('news')) }}); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('home.index') }}">HOME</a></li>
                    <li><a href="{{ route('client.news.index') }}"> NEWS</a></li>
                    <li></li>
                </ul>
            </div>
            <div class="page-title">
                <h1>{{ $news->title }}</h1>
            </div>
        </div>
    </section>
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <div class="content col-lg-9">
                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <a href="javascript:void(0)" data-lightbox="gallery-image">
                                    <img alt="image"
                                        src="@if (!empty($news->getFirstMediaUrl('news'))) {{ $news->getFirstMediaUrl('news') }} @else {{ asset('images/noimage.jpg') }} @endif">
                                </a>
                                <div class="post-item-description">
                                    <h2>{{ $news->title }}</h2>
                                    <div class="post-meta">
                                        <span class="post-meta-date">
                                            <i class="fas fa-calendar"></i>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $news->created_at)->format('d F Y H:i') }}
                                            <div class="float-right fb-share-button" data-href="{{ url()->current() }}"
                                                data-layout="button_count">
                                            </div>
                                        </span>
                                    </div>
                                    <p>{{ $news->short_detail }}</p>
                                    {!! $news->detail !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar-->
                <div class="sidebar sticky-sidebar col-lg-3">
                    <div class="widget">
                        <div class="tabs">
                            <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" role="tab"
                                        aria-controls="featured" aria-selected="false">latest news</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tabs-posts-content">
                                <div class="tab-pane fade show active" id="popular" role="tabpanel"
                                    aria-labelledby="popular-tab">
                                    <div class="post-thumbnail-list">
                                        @foreach ($rec as $article)
                                            <div class="post-thumbnail-entry">
                                                <img alt=""
                                                    src="@if (empty($article->getFirstMediaUrl('news'))) {{ asset('images/noimage.jpg') }} @else {{ $article->getFirstMediaUrl('news') }} @endif">
                                                <div class="post-thumbnail-content">
                                                    <a href="{{ route('client.news.show', ['news' => $article->slug]) }}">
                                                        {{ \Illuminate\Support\Str::limit($article->title, 48) }}</a>
                                                    <a href="{{ route('client.news.show', ['news' => $article->slug]) }}">
                                                        <span class="post-category">
                                                            <i class="fas fa-angle-right"></i> readmore...
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Sidebar-->
            </div>
        </div>
    </section>
@endsection
