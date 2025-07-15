@extends('client.master')

{{--@section('title', $article->title)--}}
{{--@section('keywords', $article->keywords)--}}
{{--@section('description', $article->description)--}}
{{--@section('data-structure'){!! $dataStructureScript !!}@endsection--}}

{{--@section('robots', \App\Services\RobotsMetaService::handle($article))--}}

{{--@section('og')--}}
{{--    <meta property="og:locale" content="fa_IR" />--}}
{{--    <meta property="og:type" content="article" />--}}
{{--    <meta property="og:title" content="{{ $article->title }}" />--}}
{{--    <meta property="og:description" content="{{ $article->description }}" />--}}
{{--    <meta property="og:url" content="{{ URL::current() }}" />--}}
{{--    <meta property="og:site_name" content="کریپتونگار" />--}}
{{--    <meta property="article:section" content="{{ $article->mainCategory()->titre }}" />--}}
{{--    <meta property="og:updated_time" content="{{ $article->updated_at }}" />--}}
{{--    <meta property="og:image:alt" content="{{ $article->titre }}" />--}}
{{--    <meta name="twitter:card" content="summary_large_image" />--}}
{{--    <meta name="twitter:title" content="{{ $article->title }}" />--}}
{{--    <meta name="twitter:description" content="{{ $article->description }}" />--}}
{{--    @if($article->old_image and file_exists($article->old_image))--}}
{{--        <meta name="twitter:image" content="{{ asset($article->old_image) }}" />--}}
{{--        <meta property="og:image" content="{{ asset($article->old_image) }}" />--}}
{{--        <meta property="og:image:secure_url" content="{{ asset($article->old_image) }}" />--}}
{{--        @php--}}
{{--            $info = getimagesize(public_path($article->old_image));--}}
{{--        @endphp--}}
{{--        <meta property="og:image:width" content="{{ $info[0] }}" />--}}
{{--        <meta property="og:image:height" content="{{ $info[1] }}" />--}}
{{--        <meta property="og:image:type" content="{{ $info['mime'] }}" />--}}
{{--    @endif--}}
{{--@endsection--}}

@section('main-content')
    <main class="main">

        <div class="site-breadcrumb" style="background: url({{asset('assets/img/breadcrumb/breadcrumb.jpg')}})">
            <div class="container">
                <h2 class="breadcrumb-title"> جزییات صفحه وبلاگ {{$article->alias}}</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">خانه</a></li>
                    <li class="active">{{$article->title}}</li>
                </ul>
            </div>
        </div>


        <div class="blog-single-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-single-wrapper">
                            <div class="blog-single-content">
                                <div class="blog-thumb-img">
                                    <img src="assets/img/blog/single.jpg" alt="thumb">
                                </div>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="blog-meta-left">
                                            <ul>
                                                <li><i class="far fa-user"></i><a
                                                        href="#">{{$article->author->name}}</a></li>
                                                <li><i class="far fa-comments"></i>{{$article->comments->count()}} نظر
                                                </li>
                                                {{--                                                <li><i class="far fa-thumbs-up"></i>1.4 هزار لایک</li>--}}
                                            </ul>
                                        </div>
                                        <div class="blog-meta-right">
                                            <a href="#" class="share-btn"><i class="far fa-share-alt"></i>اشتراک
                                                گذاری</a>
                                        </div>
                                    </div>
                                    <div class="blog-details">
                                        <h3 class="blog-details-title mb-20">{{$article->titre}}</h3>
                                        <div class="mb-10">
                                            {!! $article->description !!}
                                        </div>
                                        <hr>
                                        <div class="blog-details-tags pb-20">
                                            <h5>برچسب ها : </h5>
                                            <ul>
                                                @foreach($articleTags as $articleTag)
                                                    <li>
                                                        <a href="{{'tags/' . $articleTag->alias}}">{{$articleTag->title}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog-author">
                                        <div class="blog-author-img">
                                            <img src="assets/img/blog/author.jpg" alt="">
                                        </div>
                                        <div class="author-info">
                                            <h6>نویسنده</h6>
                                            <h3 class="author-name">{{$article->author->name}}</h3>
                                            {{--                                            <p>این یک واقعیت ثابت شده است که خواننده با محتوای قابل خواندن یک صفحه وقتی--}}
                                            {{--                                                به صفحه‌آرایی آن نگاه می‌کند که محتوای آن کمتر است، حواسش پرت--}}
                                            {{--                                                می‌شود.</p>--}}
                                            {{--                                            <div class="author-social">--}}
                                            {{--                                                <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
                                            {{--                                                <a href="#"><i class="fab fa-twitter"></i></a>--}}
                                            {{--                                                <a href="#"><i class="fab fa-instagram"></i></a>--}}
                                            {{--                                                <a href="#"><i class="fab fa-whatsapp"></i></a>--}}
                                            {{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-comments">
                                    <h4>پیام ها ({{ $article->comments->count() }})</h4>

                                    <div class="blog-comments-wrapper" dir="rtl">
                                        @foreach($articleComments->whereNull('parent_id') as $comment)
                                            <div class="blog-comments-single" dir="rtl">
                                                <img src="{{ asset('client/images/user/u-image-6.jpg') }}" alt="thumb">
                                                <div class="blog-comments-content">
                                                    <h5>{{ $comment->author_name }}</h5>
                                                    <span><i class="far fa-clock"></i> {{ verta($comment->created_at)->format('%d %B %Y') }}</span>
                                                    <p>{!! $comment->body !!}</p>
                                                    <a href="#"><i class="far fa-reply"></i> پاسخ</a>
                                                </div>
                                            </div>

                                            @foreach($articleComments->where('parent_id', $comment->id) as $reply)
                                                <div class="blog-comments-single blog-comments-reply">
                                                    <img src="{{ asset('client/images/user/u-image-6.jpg') }}"
                                                         alt="thumb">
                                                    <div class="blog-comments-content">
                                                        <h5>{{ $reply->author_name }}</h5>
                                                        <span><i class="far fa-clock"></i> {{ verta($reply->created_at)->format('%d %B %Y') }}</span>
                                                        <p>{!! $reply->body !!}</p>
                                                        <a href="#"><i class="far fa-reply"></i> پاسخ</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endforeach
                                    </div>
                                    <div class="blog-comments-form">
                                        <h4>پیام بگذارید</h4>
                                        <form action="{{route('comment.store')}}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" name="article_id" value="{{ $article->id }}">
                                                @error('article_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="نام شما*"
                                                               name="name" value="{{old('name')}}">
                                                        @error('name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control"
                                                               placeholder="ایمیل شما*" name="email"
                                                               value="{{old('email')}}">
                                                        @error('email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="5"
                                                                  placeholder="پیام شما*"
                                                                  name="body">{{old('body')}}</textarea>
                                                        @error('body')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="theme-btn"><i
                                                            class="far fa-paper-plane"></i> ارسال نظر
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="sidebar">

                            <div class="widget search">
                                <h5 class="widget-title">جستجو</h5>
                                <form class="search-form">
                                    <input type="text" class="form-control" placeholder="اینجا جستجو کنید...">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>

                            <div class="widget category">
                                <h5 class="widget-title">دسته بندی</h5>
                                <div class="category-list">
                                    @foreach($parentCategories as $category)
                                        <a href="{{ 'category/' . $category->alias }}">
                                            <i class="far fa-angle-double-left"></i>
                                            {{ $category->title }}
                                            <span>({{ $category->children_count }})</span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>

                            <div class="widget recent-post">
                                <h5 class="widget-title">پستهای اخیر</h5>
                                <div class="recent-post-single">
                                    @foreach($lastArticles as $lastArticle)
                                    <div class="recent-post-img">
                                        <img src="{{asset('assets/img/blog/bs-1.jpg')}}" alt="thumb">
                                    </div>
                                    <div class="recent-post-bio">
                                        <h6><a href="#">{{$lastArticle->titre}}</a></h6>
                                        <span><i class="far fa-clock"></i>{{ verta($lastArticle->created_at)->format('%d %B %Y') }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="widget social-share">
                                <h5 class="widget-title">ما را دنبال کنید</h5>
                                <div class="social-share-link">
                                    <a href="{{$config->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{$config->telegram}}"><i class="fab fa-telegram"></i></a>
                                    <a href="mailto:{{$config->email}}"><i class="fa fa-envelope"></i></a>
                                    <a href="{{$config->instagram}}"><i class="fab fa-instagram"></i></a>
                                    <a href="{{$config->youtube}}"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
{{--                            <div class="widget sidebar-tag">--}}
{{--                                <h5 class="widget-title">برچسب های محبوب</h5>--}}
{{--                                <div class="tag-list">--}}
{{--                                    <a href="#">مراقبت های بهداشتی</a>--}}
{{--                                    <a href="#">مراقبت از دندان</a>--}}
{{--                                    <a href="#">ایمپلنت ها</a>--}}
{{--                                    <a href="#">متخصص</a>--}}
{{--                                    <a href="#">چشم انداز</a>--}}
{{--                                    <a href="#">جراحی ها</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </aside>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
