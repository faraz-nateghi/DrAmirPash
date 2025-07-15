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
        <div class="feature-area py-120">
            <div class="container">
                <div class="feature-area-wrapper">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item active">
                                <div class="feature-icon">
                                    <svg class="icon icon-tooth">
                                        <use xlink:href="#tooth"></use>
                                    </svg>
                                </div>
                                <div class="feature-content">
                                    <h5>دندانپزشک واجد شرایط</h5>
                                    <p>این یک واقعیت ثابت شده است که خواننده از خواندنی ها حواسش پرت می شود
                                        محتوا.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg class="icon icon-amalgam">
                                        <use xlink:href="#amalgam"></use>
                                    </svg>
                                </div>
                                <div class="feature-content">
                                    <h5>خدمات عالی</h5>
                                    <p>این یک واقعیت ثابت شده است که خواننده از خواندنی ها حواسش پرت می شود
                                        محتوا.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item active">
                                <div class="feature-icon">
                                    <svg class="icon icon-bite-block">
                                        <use xlink:href="#bite-block"></use>
                                    </svg>
                                </div>
                                <div class="feature-content">
                                    <h5>قیمت مقرون به صرفه</h5>
                                    <p>این یک واقعیت ثابت شده است که خواننده از خواندنی ها حواسش پرت می شود
                                        محتوا.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg class="icon icon-cutting-rounger">
                                        <use xlink:href="#cutting-rounger"></use>
                                    </svg>
                                </div>
                                <div class="feature-content">
                                    <h5>آخرین فن آوری</h5>
                                    <p>این یک واقعیت ثابت شده است که خواننده از خواندنی ها حواسش پرت می شود
                                        محتوا.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-area pb-120">
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
        <div class="service-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">خدمات</span>
                            <h2 class="site-title">خدمات <span>ما چیه</span></h2>
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
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="assets/img/service/04.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <div class="service-content-info">
                                    <div class="service-icon">
                                        <svg class="icon icon-shiny-tooth">
                                            <use xlink:href="#shiny-tooth"></use>
                                        </svg>
                                    </div>
                                    <h3 class="service-title">
                                        <a href="#">تمیز کردن دندان</a>
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
                                <img src="assets/img/service/05.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <div class="service-content-info">
                                    <div class="service-icon">
                                        <svg class="icon icon-decayed-tooth">
                                            <use xlink:href="#decayed-tooth"></use>
                                        </svg>
                                    </div>
                                    <h3 class="service-title">
                                        <a href="#">ارتودنسی</a>
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
                                <img src="assets/img/service/06.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <div class="service-content-info">
                                    <div class="service-icon">
                                        <svg class="icon icon-teeth-protection">
                                            <use xlink:href="#teeth-protection"></use>
                                        </svg>
                                    </div>
                                    <h3 class="service-title">
                                        <a href="#">کانال ریشه دندان</a>
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
        <div class="team-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">دندانپزشک</span>
                            <h2 class="site-title">ملاقات با <span>کارشناسان</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item">
                            <img src="assets/img/team/01.jpg" alt="شست">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">دکتر مالیسا فیرو</a></h5>
                                    <span>دندانپزشک</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item">
                            <img src="assets/img/team/02.jpg" alt="شست">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">دکتر آرون رودری</a></h5>
                                    <span>دندانپزشک</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item active">
                            <img src="assets/img/team/03.jpg" alt="شست">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">دکتر چاد اسمیت</a></h5>
                                    <span>دندانپزشک</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item">
                            <img src="assets/img/team/04.jpg" alt="شست">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">دکتر تونی پینتو</a></h5>
                                    <span>دندانپزشک</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="appointment-area">
            <div class="container-fuild">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="appointment-img"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="appointment-content">
                            <h1 class="mb-10">
                                یک قرار ملاقات بگیرید
                            </h1>
                            <p>این یک واقعیت ثابت شده است که حواس خواننده از این موضوع پرت می شود
                                محتوای قابل خواندن یک صفحه هنگام مشاهده طرح بندی آن.</p>
                            <div class="appointment-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="اسم شما">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="ایمیل شما">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="تلفن شما">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="تاریخ تولد: روز/ماه/سال">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea class="form-control" cols="30" rows="4" placeholder="پیام شما"></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="theme-btn">قرار ملاقات بگیرید <i class="far fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="case-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">گالری</span>
                            <h2 class="site-title">کارهای <span>اخیر</span></h2>
                        </div>
                    </div>
                </div>
                <div class="filter-controls">
                    <ul class="filter-btns">
                        <li class="active" data-filter="*">همه</li>
                        <li data-filter=".cat1">چکاپ</li>
                        <li data-filter=".cat2">سفید کردن</li>
                        <li data-filter=".cat3">عمل جراحي</li>
                        <li data-filter=".cat4">تمیز کردن</li>
                        <li data-filter=".cat5">ایمپلنت ها</li>
                    </ul>
                </div>
                <div class="row filter-box popup-gallery">
                    <div class="col-md-6 col-lg-4 filter-item cat1 cat2">
                        <div class="case-item">
                            <div class="case-img">
                                <img class="img-fluid" src="assets/img/gallery/01.jpg" alt="">
                                <a class="popup-img case-link" href="assets/img/gallery/01.jpg"> <i class="far fa-plus"></i></a>
                                <div class="case-content">
                                    <h4><a href="#">کانال ریشه دندان</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 filter-item cat2 cat3" >
                        <div class="case-item">
                            <div class="case-img">
                                <img class="img-fluid" src="assets/img/gallery/02.jpg" alt="">
                                <a class="popup-img case-link" href="assets/img/gallery/02.jpg"> <i class="far fa-plus"></i></a>
                                <div class="case-content">
                                    <h4><a href="#">کانال ریشه دندان</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 filter-item cat3 cat4 cat5">
                        <div class="case-item">
                            <div class="case-img">
                                <img class="img-fluid" src="assets/img/gallery/03.jpg" alt="">
                                <a class="popup-img case-link" href="assets/img/gallery/03.jpg"> <i class="far fa-plus"></i></a>
                                <div class="case-content">
                                    <h4><a href="#">کانال ریشه دندان</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 filter-item cat2 cat4" >
                        <div class="case-item">
                            <div class="case-img">
                                <img class="img-fluid" src="assets/img/gallery/04.jpg" alt="">
                                <a class="popup-img case-link" href="assets/img/gallery/04.jpg"> <i class="far fa-plus"></i></a>
                                <div class="case-content">
                                    <h4><a href="#">کانال ریشه دندان</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 filter-item cat1 cat4 cat5">
                        <div class="case-item">
                            <div class="case-img">
                                <img class="img-fluid" src="assets/img/gallery/05.jpg" alt="">
                                <a class="popup-img case-link" href="assets/img/gallery/05.jpg"> <i class="far fa-plus"></i></a>
                                <div class="case-content">
                                    <h4><a href="#">کانال ریشه دندان</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 filter-item cat4 cat3">
                        <div class="case-item">
                            <div class="case-img">
                                <img class="img-fluid" src="assets/img/gallery/06.jpg" alt="">
                                <a class="popup-img case-link" href="assets/img/gallery/06.jpg"> <i class="far fa-plus"></i></a>
                                <div class="case-content">
                                    <h4><a href="#">کانال ریشه دندان</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="counter-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <svg class="icon icon-tooth">
                                    <use xlink:href="#tooth"></use>
                                </svg>
                            </div>
                            <span class="counter" data-count="+" data-to="500" data-speed="3000">500</span>
                            <h6 class="title">+ پروژه انجام شده</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <svg class="icon icon-toothbrush">
                                    <use xlink:href="#toothbrush"></use>
                                </svg>
                            </div>
                            <span class="counter" data-count="+" data-to="250" data-speed="3000">250</span>
                            <h6 class="title">+ مشتریان راضی</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <svg class="icon icon-user-friends">
                                    <use xlink:href="#user-friends"></use>
                                </svg>
                            </div>
                            <span class="counter" data-count="+" data-to="120" data-speed="3000">120</span>
                            <h6 class="title">+ کارشناسان فعال</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <svg class="icon icon-award">
                                    <use xlink:href="#award"></use>
                                </svg>
                            </div>
                            <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                            <h6 class="title">+ سال تجربه</h6>
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
                            <span class="site-title-tagline">گواهینامه ها</span>
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
        <div class="pricing-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">قیمت گذاری</span>
                            <h2 class="site-title"> پلن <span>قیمت گذاری ما</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h5>پلن پایه</h5>
                            </div>
                            <div class="pricing-icon">
                                <svg class="icon icon-shiny-tooth">
                                    <use xlink:href="#shiny-tooth"></use>
                                </svg>
                            </div>
                            <div class="pricing-amount">
                                <strong>59<span>تومان</span></strong>
                            </div>
                            <div class="pricing-amount-type">
                                <span>/ماهانه</span>
                            </div>
                            <div class="pricing-feature">
                                <ul>
                                    <li><i class="far fa-check"></i> تمام خدمات اولیه</li>
                                    <li><i class="far fa-check"></i> استفاده از تجهیزات رایگان</li>
                                    <li><i class="far fa-check"></i> قرار ملاقات 5 روزه</li>
                                    <li><i class="far fa-check"></i> گزینه های پیشرفته</li>
                                    <li><i class="far fa-check"></i> پشتیبانی 24/7</li>
                                </ul>
                            </div>
                            <div class="pricing-footer">
                                <a href="#" class="theme-btn">هم اکنون خریداری کنید <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h5>پلن استاندارد</h5>
                            </div>
                            <div class="pricing-icon">
                                <svg class="icon icon-shiny-tooth">
                                    <use xlink:href="#shiny-tooth"></use>
                                </svg>
                            </div>
                            <div class="pricing-amount">
                                <strong>99<span>تومان</span></strong>
                            </div>
                            <div class="pricing-amount-type">
                                <span>/ماهانه</span>
                            </div>
                            <div class="pricing-feature">
                                <ul>
                                    <li><i class="far fa-check"></i> تمام خدمات اولیه</li>
                                    <li><i class="far fa-check"></i> استفاده از تجهیزات رایگان</li>
                                    <li><i class="far fa-check"></i> قرار ملاقات 5 روزه</li>
                                    <li><i class="far fa-check"></i> گزینه های پیشرفته</li>
                                    <li><i class="far fa-check"></i> پشتیبانی 24/7</li>
                                </ul>
                            </div>
                            <div class="pricing-footer">
                                <a href="#" class="theme-btn">هم اکنون خریداری کنید <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h5>طرح حق بیمه</h5>
                            </div>
                            <div class="pricing-icon">
                                <svg class="icon icon-shiny-tooth">
                                    <use xlink:href="#shiny-tooth"></use>
                                </svg>
                            </div>
                            <div class="pricing-amount">
                                <strong>  156<span>تومان</span></strong>
                            </div>
                            <div class="pricing-amount-type">
                                <span>/ماهانه</span>
                            </div>
                            <div class="pricing-feature">
                                <ul>
                                    <li><i class="far fa-check"></i> تمام خدمات اولیه</li>
                                    <li><i class="far fa-check"></i> استفاده از تجهیزات رایگان</li>
                                    <li><i class="far fa-check"></i> قرار ملاقات 5 روزه</li>
                                    <li><i class="far fa-check"></i> گزینه های پیشرفته</li>
                                    <li><i class="far fa-check"></i> پشتیبانی 24/7</li>
                                </ul>
                            </div>
                            <div class="pricing-footer">
                                <a href="#" class="theme-btn">هم اکنون خریداری کنید <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="video-area mt-20" style="background-image: url(assets/img/video/video.jpg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="video-wrapper">
                            <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=ckHzmP1evNU">
                                <i class="fas fa-play"></i>
                            </a>
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
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span><i class="far fa-question"></i></span> آیا به یک طرح تجاری نیاز دارم؟
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        ما با خشم عادلانه آنها را محکوم می کنیم و از مردان بیزاریم
                                        از جذابیت های لذت لحظه ای چنان فریفته و تضعیف شده اند، بنابراین
                                        کور شده از میل
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span><i class="far fa-question"></i></span> یک طرح کسب و کار چقدر باید باشد
                                        ?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        ما با خشم عادلانه آنها را محکوم می کنیم و از مردان بیزاریم
                                        از جذابیت های لذت لحظه ای چنان فریفته و تضعیف شده اند، بنابراین
                                        کور شده از میل
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span><i class="far fa-question"></i></span> از کدام درگاه پرداخت پشتیبانی می کنید؟
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        ما با خشم عادلانه آنها را محکوم می کنیم و از مردان بیزاریم
                                        از جذابیت های لذت لحظه ای چنان فریفته و تضعیف شده اند، بنابراین
                                        کور شده از میل
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="cta-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="cta-wrapper text-center">
                            <h1>آیا به دنبال مشاوره مراقبت از دندان هستید؟</h1>
                            <p>این یک واقعیت ثابت شده است که خواننده هنگام تماشای طرح بندی آن، با محتوای قابل خواندن یک صفحه، حواسش پرت می شود.</p>
                            <a href="#" class="theme-btn">قرار رزرو</a>
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
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="assets/img/blog/01.jpg" alt="شست">
                            </div>
                            <div class="blog-item-info">
                                <h4 class="blog-title">
                                    <a href="#">تغییرات زیادی در تغییر معابر وجود دارد</a>
                                </h4>
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> نوشته آلیشیا دیویس</a></li>
                                        <li><a href="#"><i class="far fa-calendar-alt"></i> 21 آگوست 2022</a></li>
                                    </ul>
                                </div>
                                <p>این یک واقعیت ثابت شده است که خواننده هنگام تماشای طرح بندی آن، با محتوای قابل خواندن یک صفحه، حواسش پرت می شود. </p>
                                <a class="blog-btn" href="#">ادامه مطلب <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="assets/img/blog/02.jpg" alt="شست">
                            </div>
                            <div class="blog-item-info">
                                <h4 class="blog-title">
                                    <a href="#">تغییرات زیادی در تغییر معابر وجود دارد</a>
                                </h4>
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> نوشته آلیشیا دیویس</a></li>
                                        <li><a href="#"><i class="far fa-calendar-alt"></i> 21 آگوست 2022</a></li>
                                    </ul>
                                </div>
                                <p>در این یک واقعیت ثابت شده است که خواننده هنگام تماشای طرح بندی آن، با محتوای قابل خواندن یک صفحه، حواسش پرت می شود.</p>
                                <a class="blog-btn" href="#">ادامه مطلب <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="assets/img/blog/03.jpg" alt="شست">
                            </div>
                            <div class="blog-item-info">
                                <h4 class="blog-title">
                                    <a href="#">تغییرات زیادی در تغییر معابر وجود دارد</a>
                                </h4>
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> نوشته آلیشیا دیویس</a></li>
                                        <li><a href="#"><i class="far fa-calendar-alt"></i> 21 آگوست 2022</a></li>
                                    </ul>
                                </div>
                                <p>این یک واقعیت ثابت شده است که خواننده هنگام تماشای طرح بندی آن، با محتوای قابل خواندن یک صفحه، حواسش پرت می شود. </p>
                                <a class="blog-btn" href="#">ادامه مطلب <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="partner-area pt-70 pb-70">
            <div class="container">
                <div class="partner-wrapper partner-slider owl-carousel owl-theme">
                    <img src="assets/img/partner/01.jpg" alt="شست">
                    <img src="assets/img/partner/02.jpg" alt="شست">
                    <img src="assets/img/partner/03.jpg" alt="شست">
                    <img src="assets/img/partner/04.jpg" alt="شست">
                    <img src="assets/img/partner/01.jpg" alt="شست">
                    <img src="assets/img/partner/02.jpg" alt="شست">
                    <img src="assets/img/partner/03.jpg" alt="شست">
                </div>
            </div>
        </div>

    </main>
@endsection
