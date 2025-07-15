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

        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/breadcrumb.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">وبلاگ ما</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">خانه</a></li>
                    <li class="active">وبلاگ ما</li>
                </ul>
            </div>
        </div>


        <div class="blog-area py-120">
            <div class="container">
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

                <div class="pagination-area">
                    <div aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="far fa-angle-double-right"></i></span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="far fa-angle-double-left"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
