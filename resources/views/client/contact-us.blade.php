@extends('client.master')

@section('title', 'راه ارتباط با ما | کریپتونگار')
@section('keywords', 'تماس با کریپتونگار')
@section('description', 'فراموش نکنید که پیشنهادات شما، کمکی به ماست در جهت بهبود عملکردمان.')

@section('main-content')
    <main class="main">

        <div class="site-breadcrumb" style="background: url({{asset('assets/img/breadcrumb/breadcrumb.jpg')}})">
            <div class="container">
                <h2 class="breadcrumb-title">تماس با ما</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{route('home')}}">خانه</a></li>
                    <li class="active">تماس با ما</li>
                </ul>
            </div>
        </div>


        <div class="contact-area py-120">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="row">
                        <div class="col-md-8 align-self-center">
                            <div class="contact-form">
                                <div class="contact-form-header">
                                    <h2>در تماس باشید</h2>
                                    <p>این یک واقعیت ثابت شده است که خواننده از خواندنی ها حواسش پرت می شود
                                        محتوای یک صفحه هنگام مشاهده طرح بندی آن. </p>
                                </div>
                                <form method="post" action="{{route('contact.store')}}" id="contact-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="نام شما" required="" value="{{old('name')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="phone" placeholder="شماره تلفن شما" required="" value="{{old('phone')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="عنوان شما" required="" value="{{old('subject')}}">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" cols="30" rows="5" class="form-control" placeholder="پیام خود را بنویسید">{{old('message')}}</textarea>
                                    </div>
                                    <button type="submit" class="theme-btn"> <i class="far fa-paper-plane"></i> ارسال پیام</button>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-messege text-success"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-content">
{{--                                <div class="contact-info">--}}
{{--                                    <div class="contact-info-icon">--}}
{{--                                        <i class="fal fa-map-marker-alt"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="contact-info-content">--}}
{{--                                        <h5>آدرس دفتر</h5>--}}
{{--                                        <p>25/B میلفورد، نیویورک، ایالات متحده آمریکا</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>ما را دنبال کنید</h5>
                                        <a href="{{$config->instagram}}" class="btn btn-primary">کلیک کنید</a>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>به ما ایمیل بزنید</h5>
                                        <a href="mailto:{{$config->email}}" class="btn btn-primary">کلیک کنید</a>
                                    </div>
                                </div>
{{--                                <div class="contact-info">--}}
{{--                                    <div class="contact-info-icon">--}}
{{--                                        <i class="fal fa-clock"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="contact-info-content">--}}
{{--                                        <h5>ساعت کاری</h5>--}}
{{--                                        <p>یکشنبه - جمعه (08 صبح تا 10 شب)</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
