@extends('client.master')

@section('title', $main->title)

@section('robots', \App\Services\RobotsMetaService::handle($main))

@section('main-content')

    <div class="container mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9">
                    <h1>{{ "بایگانی‌های " . $main->titre }}</h1>
                    <!-- list posts -->
                    <div class="d-flex flex-wrap">
                        @foreach($articles as $article)
                            <div class="col-12 col-md-4 mb-4">
                                <div class="card carousel-card d-flex justify-content-center align-items-center">
                                    <a href="{{ route('article.show', $article->alias) }}">
                                        @if($article->old_image)
                                            <img src="{{ asset($article->old_image) }}" class="card-img-top "
                                                 alt="{{ $article->titre }}"></a>
                                    @endif
                                    <div class="card-body text-center">
                                        <div class="d-flex mb-3 justify-content-center gap-2 p-1 dital-carosel-card">
                                            <a href="#">آموزش ارز دیجیتال</a>

                                            <span class="d-flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                     fill="currentColor" class="size-6">
                                                    <path fill-rule="evenodd"
                                                          d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z"
                                                          clip-rule="evenodd"/>
                                                </svg> &nbsp;
                                                {{ $article->persian_created_at }}
                                            </span>
                                        </div>
                                        <a href="{{ route('article.show', $article->alias) }}">
                                            <h5 class="card-title">{{ $article->titre }}</h5>
                                        </a>
                                        <p class="card-title">
                                            {{ $article->cleanedContent }}
                                        </p>

                                    </div>
                                    <a href="{{ route('article.show', $article->alias) }}"
                                       class="btn btn-primary w-50 btn-carosel-minimal">ادامه مطلب</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- pagination -->
                    <div class="row">
                        <nav class="d-flex justify-content-center mt-3">
                            {{ $articles->links() }}
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="d-flex flex-column  p-2 sidebar-cat">
                        <ul>
                            <li class="p-2 "><a href="#">
                                    <img class="w-100" src="{{ asset('client/images/sidebar-banner.png') }}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex flex-column p-2 sidebar-cat">
                        <ul>
                            <p class="mb-1 p-2 ">آشنایی با علی اکبر توسل</p>
                            <li class="p-2 ">
                                <a href="#">
                                    <img class="w-100" src="{{ asset('client/images/aliAcbar.png') }}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex flex-column  p-2 sidebar-cat">
                        <p class="mb-1 p-2 ">جدید ترین مقالات</p>
                        <ul>
                            @foreach($lastArticles as $item)
                                <li class="p-2 "><a href="{{ route('article.show', $item->alias) }}">{{ $item->titre }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

@endsection
