@extends('client.master')

@section('main-content')
    <div class="container-fluid breadcrumb-pagName">
        <div class="container">
            <div class="row">
                @if(isset($q))
                <div class="col pt-5 pb-3">
                    <h4 class="mt-3"><span>{{$articles->count()}}</span> نتایج جستجو برای <span class="text-warning">{{$q}}</span></h4>
                    <span class="mt-3"> ما <span>{{$articles->count()}}</span> نتیجه با لغت جستجو شده شما پیدا کردیم.</span>
                </div>
                @endif
            </div>
            <div class="row">
                <nav class="d-flex justify-content-center mt-3">
                    {{ $articles->links() }}
                </nav>
            </div>
        </div>
    </div>
    <!-- END breadcrumb-pagName -->
    <!-- text info -->
    <div class="container py-5">
        <div class="row">
            @foreach($articles as $article)
            <div class="col-12 d-flex flex-column gap-2">
                <a class="search-titre" href="{{ route('article.show', $article->alias) }}">{{$article->titre}}</a>
                <div>{!! Str::limit(strip_tags($article->body), 500) !!}</div>
                <a href="{{ route('article.show', $article->alias) }}" class="text-warning">بیشتر بخوانید</a>
                <hr>
            </div>
            @endforeach
        </div>
    </div>
    <!-- END text info -->
@endsection
