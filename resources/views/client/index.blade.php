@extends('client.master')

@section('title', request()->config->index_title)
@section('keywords', request()->config->index_keywords)
@section('description', request()->config->index_description)

@section('main-content')
    <main class="home-3 main">
        <div class="hero-section">
            <div class="hero-single">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-6">
                            <div class="hero-content">
                                <h6 class="hero-sub-title wow animate__ animate__fadeInUp animated" data-wow-duration="1s" data-wow-delay=".25s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.25s; animation-name: fadeInUp;"># بهترین مرکز مراقبت از دندان</h6>
                                <h1 class="hero-title wow animate__ animate__fadeInUp animated" data-wow-duration="1s" data-wow-delay=".50s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    ما پیشرفته ارائه می دهیم <span>مراقبت از دندان</span> خدمات
                                </h1>
                                <p class="wow animate__ animate__fadeInUp animated" data-wow-duration="1s" data-wow-delay=".75s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.75s; animation-name: fadeInUp;">
                                    انواع مختلفی از معابر موجود است، اما اکثریت آن ها آسیب دیده اند
                                    تغییر به نوعی توسط طنز تزریقی یا کلمات تصادفی.
                                </p>
                                <div class="hero-btn wow animate__ animate__fadeInUp animated" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInUp;">
                                    <a href="contact.html" class="theme-btn">تماس با ما<i class="far fa-arrow-right"></i></a>
                                    <a href="about.html" class="theme-btn theme-btn2">درباره ما<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-6">
                            <div class="hero-img">
                                <img src="assets/img/slider/hero.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="feature-area py-120">--}}
{{--            <div class="container">--}}
{{--                <div class="feature-area-wrapper">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6 col-lg-3">--}}
{{--                            <div class="feature-item active">--}}
{{--                                <div class="feature-icon">--}}
{{--                                    <svg class="icon icon-tooth">--}}
{{--                                        <use xlink:href="#tooth"></use>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                                <div class="feature-content">--}}
{{--                                    <h5>دندانپزشک واجد شرایط</h5>--}}
{{--                                    <p>این یک واقعیت ثابت شده است که خواننده از خواندنی ها حواسش پرت می شود--}}
{{--                                        محتوا.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 col-lg-3">--}}
{{--                            <div class="feature-item">--}}
{{--                                <div class="feature-icon">--}}
{{--                                    <svg class="icon icon-amalgam">--}}
{{--                                        <use xlink:href="#amalgam"></use>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                                <div class="feature-content">--}}
{{--                                    <h5>خدمات عالی</h5>--}}
{{--                                    <p>این یک واقعیت ثابت شده است که خواننده از خواندنی ها حواسش پرت می شود--}}
{{--                                        محتوا.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 col-lg-3">--}}
{{--                            <div class="feature-item active">--}}
{{--                                <div class="feature-icon">--}}
{{--                                    <svg class="icon icon-bite-block">--}}
{{--                                        <use xlink:href="#bite-block"></use>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                                <div class="feature-content">--}}
{{--                                    <h5>قیمت مقرون به صرفه</h5>--}}
{{--                                    <p>این یک واقعیت ثابت شده است که خواننده از خواندنی ها حواسش پرت می شود--}}
{{--                                        محتوا.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 col-lg-3">--}}
{{--                            <div class="feature-item">--}}
{{--                                <div class="feature-icon">--}}
{{--                                    <svg class="icon icon-cutting-rounger">--}}
{{--                                        <use xlink:href="#cutting-rounger"></use>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                                <div class="feature-content">--}}
{{--                                    <h5>آخرین فن آوری</h5>--}}
{{--                                    <p>این یک واقعیت ثابت شده است که خواننده از خواندنی ها حواسش پرت می شود--}}
{{--                                        محتوا.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="about-area pb-120 mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left">
                            <div class="about-img">
                                <img class="about-img-1" src="assets/img/about/01.jpg" alt="">
                            </div>
                            <div class="about-left-content">
                                <div class="about-left-icon">
                                    <i class="far fa-headset"></i>
                                </div>
                                <div class="about-left-info">
                                    <h5>به کمک نیاز دارید؟</h5>
                                    <p>الان تماس بگیر : <a href="tel:+2123654789">+2 123 654 789</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">درباره ما</span>
                                <h2 class="site-title">ما بهترین ها را ارائه می دهیم <span>محلول مراقبت از دندان</span> برای شما</h2>
                            </div>
                            <p class="about-text">
                                انواع مختلفی از قسمت‌های متن ساختگی در دسترس است، اما اکثریت آن‌ها به شکلی دچار تغییراتی شده‌اند، با طنز تزریقی، یا کلمات تصادفی که حتی کمی باورپذیر به نظر نمی‌رسند. اگر می‌خواهید از قسمتی از متن ساختگی استفاده کنید، باید مطمئن شوید که هیچ چیز شرم‌آوری در وسط متن پنهان نشده باشد.
                            </p>
                            <div class="about-list-wrapper">
                                <ul class="about-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <svg class="icon icon-broken-tooth">
                                                <use xlink:href="#broken-tooth"></use>
                                            </svg>
                                        </div>
                                        <div class="text">
                                            <h5>چکاپ رایگان</h5>
                                            <p>نگاهی به مجموعه ما از بهترین نمایش ها بیندازید.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <svg class="icon icon-fake-tooth">
                                                <use xlink:href="#fake-tooth"></use>
                                            </svg>
                                        </div>
                                        <div class="text">
                                            <h5>پرسنل بسیار حرفه ای</h5>
                                            <p>نگاهی به مجموعه ما از بهترین نمایش ها بیندازید.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="about.html" class="theme-btn mt-4">بیشتر پیدا کن <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-area bg py-16 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">خدمات</span>
                            <h2 class="site-title">خدمات <span>زیبایی</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="assets/img/service/01.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <div class="service-content-info">
                                    <div class="service-icon">
                                        <svg class="icon icon-holed-tooth">
                                            <use xlink:href="#holed-tooth"></use>
                                        </svg>
                                    </div>
                                    <h3 class="service-title">
                                        <a href="#">ایمپلنت های دندانی</a>
                                    </h3>
                                </div>
                                <p class="service-text">
                                    انواع مختلفی از معابر موجود است، اما اکثریت آن ها آسیب دیده اند
                                    تغییر تزریق شده
                                </p>
                                <div class="service-arrow">
                                    <a href="#" class="theme-btn">ادامه مطلب <span class="far fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="assets/img/service/02.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <div class="service-content-info">
                                    <div class="service-icon">
                                        <svg class="icon icon-mouth-prop">
                                            <use xlink:href="#mouth-prop"></use>
                                        </svg>
                                    </div>
                                    <h3 class="service-title">
                                        <a href="#">دندانپزشکی زیبایی</a>
                                    </h3>
                                </div>
                                <p class="service-text">
                                    انواع مختلفی از معابر موجود است، اما اکثریت آن ها آسیب دیده اند
                                    تغییر تزریق شده
                                </p>
                                <div class="service-arrow">
                                    <a href="#" class="theme-btn">ادامه مطلب <span class="far fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="assets/img/service/03.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <div class="service-content-info">
                                    <div class="service-icon">
                                        <svg class="icon icon-inner-tooth">
                                            <use xlink:href="#inner-tooth"></use>
                                        </svg>
                                    </div>
                                    <h3 class="service-title">
                                        <a href="#">سفید کردن دندان</a>
                                    </h3>
                                </div>
                                <p class="service-text">
                                    انواع مختلفی از معابر موجود است، اما اکثریت آن ها آسیب دیده اند
                                    تغییر تزریق شده
                                </p>
                                <div class="service-arrow">
                                    <a href="#" class="theme-btn">ادامه مطلب <span class="far fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-area bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <h2 class="site-title">خدمات <span>پزشکی</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="assets/img/service/01.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <div class="service-content-info">
                                    <div class="service-icon">
                                        <svg class="icon icon-holed-tooth">
                                            <use xlink:href="#holed-tooth"></use>
                                        </svg>
                                    </div>
                                    <h3 class="service-title">
                                        <a href="#">ایمپلنت های دندانی</a>
                                    </h3>
                                </div>
                                <p class="service-text">
                                    انواع مختلفی از معابر موجود است، اما اکثریت آن ها آسیب دیده اند
                                    تغییر تزریق شده
                                </p>
                                <div class="service-arrow">
                                    <a href="#" class="theme-btn">ادامه مطلب <span class="far fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="assets/img/service/02.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <div class="service-content-info">
                                    <div class="service-icon">
                                        <svg class="icon icon-mouth-prop">
                                            <use xlink:href="#mouth-prop"></use>
                                        </svg>
                                    </div>
                                    <h3 class="service-title">
                                        <a href="#">دندانپزشکی زیبایی</a>
                                    </h3>
                                </div>
                                <p class="service-text">
                                    انواع مختلفی از معابر موجود است، اما اکثریت آن ها آسیب دیده اند
                                    تغییر تزریق شده
                                </p>
                                <div class="service-arrow">
                                    <a href="#" class="theme-btn">ادامه مطلب <span class="far fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="assets/img/service/03.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <div class="service-content-info">
                                    <div class="service-icon">
                                        <svg class="icon icon-inner-tooth">
                                            <use xlink:href="#inner-tooth"></use>
                                        </svg>
                                    </div>
                                    <h3 class="service-title">
                                        <a href="#">سفید کردن دندان</a>
                                    </h3>
                                </div>
                                <p class="service-text">
                                    انواع مختلفی از معابر موجود است، اما اکثریت آن ها آسیب دیده اند
                                    تغییر تزریق شده
                                </p>
                                <div class="service-arrow">
                                    <a href="#" class="theme-btn">ادامه مطلب <span class="far fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
{{--                            <span class="site-title-tagline">گواهینامه ها</span>--}}
                            <h2 class="site-title"> نظرات <span>مشتریان</span></h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-single">
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="fal fa-quote-left"></i></span>
                            <p>
                                انواع مختلفی از معابر موجود است، اما اکثریت آن ها آسیب دیده اند
                                تغییر به نوعی توسط تزریق.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/01.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>سیلویا اچ گرین</h4>
                                <p>موسس و مدیرعامل</p>
                                <div class="testimonial-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="fal fa-quote-left"></i></span>
                            <p>
                                انواع مختلفی از معابر موجود است، اما اکثریت آن ها آسیب دیده اند
                                تغییر به نوعی توسط تزریق.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/02.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>گوردون دی نواک</h4>
                                <p>موسس و مدیرعامل</p>
                                <div class="testimonial-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="fal fa-quote-left"></i></span>
                            <p>
                                انواع مختلفی از معابر موجود است، اما اکثریت آن ها آسیب دیده اند
                                تغییر به نوعی توسط تزریق.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/03.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>سامان کلهر</h4>
                                <p>موسس و مدیرعامل</p>
                                <div class="testimonial-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="fal fa-quote-left"></i></span>
                            <p>
                                انواع مختلفی از معابر موجود است، اما اکثریت آن ها آسیب دیده اند
                                تغییر به نوعی توسط تزریق.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/04.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>پارکر خیمنز</h4>
                                <p>موسس و مدیرعامل</p>
                                <div class="testimonial-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">دندانپزشک</span>
                            <h2 class="site-title">ویدیو های <span>اخیر</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item position-relative video-wrapper">
                            <video src="{{ asset('assets/video/01.mp4') }}" controls playsinline width="100%" preload="none"></video>
                            <div class="video-cover" onclick="playVideo(this)">
                                <img src="{{ asset('assets/img/team/01.jpg') }}" alt="کاور ویدیو">
                                <div class="play-button"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item position-relative video-wrapper">
                            <video src="{{ asset('assets/video/01.mp4') }}" controls playsinline width="100%" preload="none"></video>
                            <div class="video-cover" onclick="playVideo(this)">
                                <img src="{{ asset('assets/img/team/01.jpg') }}" alt="کاور ویدیو">
                                <div class="play-button"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item position-relative video-wrapper">
                            <video src="{{ asset('assets/video/01.mp4') }}" controls playsinline width="100%" preload="none"></video>
                            <div class="video-cover" onclick="playVideo(this)">
                                <img src="{{ asset('assets/img/team/01.jpg') }}" alt="کاور ویدیو">
                                <div class="play-button"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item position-relative video-wrapper">
                            <video src="{{ asset('assets/video/01.mp4') }}" controls playsinline width="100%" preload="none"></video>
                            <div class="video-cover" onclick="playVideo(this)">
                                <img src="{{ asset('assets/img/team/01.jpg') }}" alt="کاور ویدیو">
                                <div class="play-button"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-left">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">سوالات متداول</span>
                                <h2 class="site-title my-3"> اغلب <span>سؤالات پرسیده شده</span></h2>
                            </div>
                            <p class="about-text">انواع مختلفی از معابر متن ساختگی موجود است،
                                اما اکثریت دچار تغییراتی به شکلی شده اند، با شوخ طبعی تزریقی، یا
                                کلمات تصادفی که یکنواخت به نظر نمی رسند.</p>
                            <p>این یک واقعیت ثابت شده است که خواننده هنگام تماشای طرح بندی آن، با محتوای قابل خواندن یک صفحه، حواسش پرت می شود. </p>
                            <a href="#" class="theme-btn mt-5">سوالت را بپرس <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample">
                            @foreach($faqs as $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{$faq->id}}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapseOne">
                                        <span><i class="far fa-question"></i></span>{{$faq->question}}
                                    </button>
                                </h2>
                                <div id="collapse{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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
        <div class="blog-area pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">وبلاگ ما</span>
                            <h2 class="site-title">اخبار و <span>وبلاگ</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        @foreach($lastArticles as $lastArticle)
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="{{asset('assets/img/blog/01.jpg')}}" alt="شست">
                            </div>

                            <div class="blog-item-info">
                                <h4 class="blog-title">
                                    <a href="{{route('article.show',$lastArticle->alias)}}">{{$lastArticle->title}}</a>
                                </h4>
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="{{route('article.show',$lastArticle->alias)}}"><i class="far fa-user-circle"></i>{{$lastArticle->author->name}}</a></li>
                                        <li><a href="{{route('article.show',$lastArticle->alias)}}"><i class="far fa-calendar-alt"></i>{{verta($lastArticle->created_at)->format('%Y M %d')}}</a></li>
                                    </ul>
                                </div>
                                <p>{{ \Illuminate\Support\Str::limit($lastArticle->body, 100) }}</p>
                                <a class="blog-btn" href="{{route('article.show',$lastArticle->alias)}}">ادامه مطلب <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="case-area py-120">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6 mx-auto">--}}
{{--                        <div class="site-heading text-center">--}}
{{--                            <span class="site-title-tagline">گالری</span>--}}
{{--                            <h2 class="site-title">کارهای <span>اخیر</span></h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="filter-controls">--}}
{{--                    <ul class="filter-btns">--}}
{{--                        <li class="active" data-filter="*">همه</li>--}}
{{--                        <li data-filter=".cat1">چکاپ</li>--}}
{{--                        <li data-filter=".cat2">سفید کردن</li>--}}
{{--                        <li data-filter=".cat3">عمل جراحي</li>--}}
{{--                        <li data-filter=".cat4">تمیز کردن</li>--}}
{{--                        <li data-filter=".cat5">ایمپلنت ها</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="row filter-box popup-gallery">--}}
{{--                    <div class="col-md-6 col-lg-4 filter-item cat1 cat2">--}}
{{--                        <div class="case-item">--}}
{{--                            <div class="case-img">--}}
{{--                                <img class="img-fluid" src="assets/img/gallery/01.jpg" alt="">--}}
{{--                                <a class="popup-img case-link" href="assets/img/gallery/01.jpg"> <i class="far fa-plus"></i></a>--}}
{{--                                <div class="case-content">--}}
{{--                                    <h4><a href="#">کانال ریشه دندان</a></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 col-lg-4 filter-item cat2 cat3" >--}}
{{--                        <div class="case-item">--}}
{{--                            <div class="case-img">--}}
{{--                                <img class="img-fluid" src="assets/img/gallery/02.jpg" alt="">--}}
{{--                                <a class="popup-img case-link" href="assets/img/gallery/02.jpg"> <i class="far fa-plus"></i></a>--}}
{{--                                <div class="case-content">--}}
{{--                                    <h4><a href="#">کانال ریشه دندان</a></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 col-lg-4 filter-item cat3 cat4 cat5">--}}
{{--                        <div class="case-item">--}}
{{--                            <div class="case-img">--}}
{{--                                <img class="img-fluid" src="assets/img/gallery/03.jpg" alt="">--}}
{{--                                <a class="popup-img case-link" href="assets/img/gallery/03.jpg"> <i class="far fa-plus"></i></a>--}}
{{--                                <div class="case-content">--}}
{{--                                    <h4><a href="#">کانال ریشه دندان</a></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 col-lg-4 filter-item cat2 cat4" >--}}
{{--                        <div class="case-item">--}}
{{--                            <div class="case-img">--}}
{{--                                <img class="img-fluid" src="assets/img/gallery/04.jpg" alt="">--}}
{{--                                <a class="popup-img case-link" href="assets/img/gallery/04.jpg"> <i class="far fa-plus"></i></a>--}}
{{--                                <div class="case-content">--}}
{{--                                    <h4><a href="#">کانال ریشه دندان</a></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 col-lg-4 filter-item cat1 cat4 cat5">--}}
{{--                        <div class="case-item">--}}
{{--                            <div class="case-img">--}}
{{--                                <img class="img-fluid" src="assets/img/gallery/05.jpg" alt="">--}}
{{--                                <a class="popup-img case-link" href="assets/img/gallery/05.jpg"> <i class="far fa-plus"></i></a>--}}
{{--                                <div class="case-content">--}}
{{--                                    <h4><a href="#">کانال ریشه دندان</a></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 col-lg-4 filter-item cat4 cat3">--}}
{{--                        <div class="case-item">--}}
{{--                            <div class="case-img">--}}
{{--                                <img class="img-fluid" src="assets/img/gallery/06.jpg" alt="">--}}
{{--                                <a class="popup-img case-link" href="assets/img/gallery/06.jpg"> <i class="far fa-plus"></i></a>--}}
{{--                                <div class="case-content">--}}
{{--                                    <h4><a href="#">کانال ریشه دندان</a></h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="partner-area pt-70 pb-70">--}}
{{--            <div class="container">--}}
{{--                <div class="partner-wrapper partner-slider owl-carousel owl-theme">--}}
{{--                    <img src="assets/img/partner/01.jpg" alt="شست">--}}
{{--                    <img src="assets/img/partner/02.jpg" alt="شست">--}}
{{--                    <img src="assets/img/partner/03.jpg" alt="شست">--}}
{{--                    <img src="assets/img/partner/04.jpg" alt="شست">--}}
{{--                    <img src="assets/img/partner/01.jpg" alt="شست">--}}
{{--                    <img src="assets/img/partner/02.jpg" alt="شست">--}}
{{--                    <img src="assets/img/partner/03.jpg" alt="شست">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </main>
@endsection
