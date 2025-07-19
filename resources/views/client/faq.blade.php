@extends('client.master')

@section('main-content')
    <main class="main">
        <div class="site-breadcrumb" style="background: url({{asset('assets/img/breadcrumb/breadcrumb.jpg')}})">
            <div class="container">
                <h2 class="breadcrumb-title">سوالات متداول</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ route('home') }}">خانه</a></li>
                    <li class="active">سوالات متداول</li>
                </ul>
            </div>
        </div>

        <div class="faq-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        @foreach($categories as $category)
                            <div class="faq-left mb-5">
                                <div class="site-heading mb-3">
                                    <h2 class="site-title my-3">
                                        سوالات : <span>{{ $category->title }}</span>
                                    </h2>
                                </div>
                                @if($category->faqs->count())
                                    <div class="accordion" id="accordion-{{ $category->id }}">
                                        @foreach($category->faqs as $faq)
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse{{ $faq->id }}"
                                                            aria-expanded="false"
                                                            aria-controls="collapse{{ $faq->id }}">
                                                        <span><i class="far fa-question"></i></span>
                                                        {{ $faq->question }}
                                                    </button>
                                                </h2>
                                                <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                                     aria-labelledby="heading{{ $faq->id }}"
                                                     data-bs-parent="#accordion-{{ $category->id }}">
                                                    <div class="accordion-body">
                                                        {{ $faq->answer }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <p class="text-muted">سوالی در این دسته وجود ندارد.</p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
