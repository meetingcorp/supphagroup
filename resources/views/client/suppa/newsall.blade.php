@extends('client.layouts.app')

@section('content')
    <!-- page title -->
    <section id="page-title" class="text-light"
             style="background-image:linear-gradient(0deg, rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url({{asset(setting('news'))}}); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ url('/') }}">HOME</a></li>
                    <li><a href="#">NEWS</a></li>
                </ul>
            </div>
            <div class="page-title">
                <h1>NEWS</h1>
                <!--                    <span>Simple page title with background parallax image</span>-->
            </div>

            {{-- @if(request('search'))
                <h6 class="mb-20">ค้นหา: {{request('search')}}</h6>
            @endif --}}
        </div>
    </section>
    <!-- page title -->

    <!--=================================
    page-title -->

    <section class="content">
        <div class="container">
            <div id="blog" class="grid-layout post-4-columns post-xs-2-columns m-b-30" data-item="post-item">
            @foreach($news as $article)
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="{{ route('client.news.show', ['news' => $article->slug]) }}">
                                    <img alt=""
                                         src="@if(empty($article->getFirstMediaUrl('news'))) {{asset('images/noimage.jpg')}} @else {{$article->getFirstMediaUrl('news')}} @endif">
                                </a>

                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$article->created_at)->format('d F Y H:i')}}</span>
                                <h2>
                                    <a href="{{ route('client.news.show', ['news' => $article->slug]) }}">{{\Illuminate\Support\Str::limit($article->title,100)}}
                                    </a></h2>
                                {{\Illuminate\Support\Str::limit($article->short_detail,100)}}
                                <a href="{{ route('client.news.show', ['news' => $article->slug]) }}" class="item-link">READMORE
                                    <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- {!! $articles->links() !!} --}}
        </div>
    </section>
@endsection
