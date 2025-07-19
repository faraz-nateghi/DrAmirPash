@extends('client.master')

@section('main-content')
    <main class="main">
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/breadcrumb.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">سوالات متداول</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{route('home')}}">خانه</a></li>
                    <li class="active">سوالات متداول</li>
                </ul>
            </div>
        </div>
        <div class="faq-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-left">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">سوالات متداول</span>
                                <h2 class="site-title my-3"> اغلب <span></span></h2>
                            </div>
                            <p class="about-text">انواع مختلفی از معابر متن ساختگی موجود است،
                                اما اکثریت دچار تغییراتی به شکلی شده اند، با شوخ طبعی تزریقی، یا
                                کلمات تصادفی که یکنواخت به نظر نمی رسند.</p>
                            <p>این یک واقعیت ثابت شده است که خواننده هنگام تماشای طرح بندی آن، با محتوای قابل خواندن یک
                                صفحه، حواسش پرت می شود. </p>
                            <a href="#" class="theme-btn mt-5">سوالت را بپرس <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample">
                            @foreach($faqs as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{$faq->id}}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{$faq->id}}" aria-expanded="true"
                                                aria-controls="collapseOne">
                                            <span><i class="far fa-question"></i></span>{{$faq->question}}
                                        </button>
                                    </h2>
                                    <div id="collapse{{$faq->id}}" class="accordion-collapse collapse"
                                         aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{$faq->answer}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
