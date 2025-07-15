@extends('client.master')

{{--@if($child)--}}
{{--    @section('title', $child->title)--}}
{{--    @section('keywords', $child->keywords)--}}
{{--    @section('description', $child->description)--}}
{{--    @section('robots', \App\Services\RobotsMetaService::handle($child))--}}
{{--@else--}}
{{--    @section('title', $parent->title)--}}
{{--    @section('keywords', $parent->keywords)--}}
{{--    @section('description', $parent->description)--}}
{{--    @section('robots', \App\Services\RobotsMetaService::handle($parent))--}}
{{--@endif--}}



{{--@section('data-structure'){!! $dataStructureScript !!}@endsection--}}

@section('main-content')
    <main class="main">

        <div class="site-breadcrumb" style="background: url({{asset('assets/img/breadcrumb/breadcrumb.jpg')}})">
            <div class="container">
                <h2 class="breadcrumb-title">وبلاگ ها</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{route('home')}}">خانه</a></li>
                    <li class="active">وبلاگ ها</li>
                </ul>
            </div>
        </div>


        <div class="blog-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        @foreach($articles as $article)
                            <div class="blog-item">
                                <div class="blog-item-img">
                                    <img src="{{asset('assets/img/blog/01.jpg')}}" alt="شست">
                                </div>
                                <div class="blog-item-info">
                                    <h4 class="blog-title">
                                        <a href="{{ route('article.show', $article->alias) }}">{{$article->title}}</a>
                                    </h4>
                                    <div class="blog-item-meta">
                                        <ul>
                                            <li><a href="#"><i class="far fa-user-circle"></i> نوشته {{$article->author->name}}</a></li>
                                            <li><a href="#"><i class="far fa-calendar-alt"></i>{{ verta($article->created_at)->format('%d %B %Y') }}</a></li>
                                        </ul>
                                    </div>
                                    <p>{{$article->titre}}</p>
                                    <a class="blog-btn" href="{{ route('article.show', $article->alias) }}">ادامه مطلب <i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="pagination-area text-center mt-4">
                    {{ $articles->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>

    </main>
@endsection
