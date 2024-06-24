@extends('master')
@section('style')
@endsection
@section('main')

    <style>
        .card-title {
            font-size: 20px;
        }
        .marquee {

            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            box-sizing: border-box;
            font-size: large;
            margin: 0 auto;
        }

        .marquee span {

        }

        @keyframes marquee {
            0% {
                transform: translateX(-100%);
            }
            50% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(100%);
            }
        }
    </style>

    <!-- Start Digital Agency Banner -->
    <section class="digital-agency-banner">
        <div class="container">
            <div class="digital-agency-banner-content">
                <h1 class="wow fadeInUp" style="font-family: 'IranNastaliq',serif;font-size: 60px !important;">حوزه علمیه حضرت قائم (عج) </h1>
                <p class="wow fadeInUp">لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40
                    سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به
                    مدت 40 سال استاندارد صنعت بوده است.
                </p>
            </div>
        </div>
    </section>

    {{--   Start line   --}}
    <div style="background-color: #f0f0f9;width: 100%;display: flex; height: 50px;">
        <div style="width: 55%;margin: 0 auto;display: flex;">
            <div><img src="{{asset('site/img/navaar.png')}}" style="padding-top: 8px;max-height: 100%;" alt=""></div>
            <div class="marquee"><span style="margin-bottom: 12px;margin-top: 12px;display: inline-block;animation: marquee 20s linear infinite;">يَرْفَعِ اللَّهُ الَّذِينَ آمَنُوا مِنْكُمْ وَالَّذِينَ أُوتُوا الْعِلْمَ دَرَجَاتٍ | شهادت رئیس جمهور سیزدهم حضرت آیت الله رئیسی را تسلیت عرض می کنیم | ملت ما باید به عنوان یک تکلیف و یک حق در این انتخابات شرکت کنند </span></div>
            <div><img src="{{asset('site/img/navaar.png')}}" style="padding-top: 8px;max-height: 100%;" alt=""></div>
        </div>
    </div>
    {{--   End line   --}}


    <!-- End Digital Agency Banner -->

    {{--  Start brothers and sisters section  --}}
    <div class="container">
        <div class="row pt-3" style="justify-content: center">
            <div class="col-md-3 p-2">
                <a href="{{url('/brothers')}}">
                    <img src="{{ asset('/site/img/برادران.png') }}" alt="Image 1">
                </a>            </div>
            <div class="col-md-3 p-2">
                <a href="{{url('/sisters')}}">
                    <img src="{{ asset('/site/img/خواهران.png') }}" alt="Image 2">
                </a>
            </div>
        </div>
    </div>
    {{--  End brothers and sisters section  --}}


    {{--    Start sections Card    --}}
    <div class="features-card-section pt-100 pb-70 bg-f8fbfa">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-features-card tx-center">
                        <i class='bx bx-male'></i>
                        <h3>
                            <a href="{{url('/brothers')}}" class="card-title">حوزه علمیه برادران</a>
                        </h3>
                        <p>حوزه علمیه ویژه طلاب بخش برادران</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-features-card tx-center">
                        <i class='bx bx-female'></i>
                        <h3>
                            <a href="{{url('/sisters')}}" class="card-title">حوزه علمیه خواهران</a>
                        </h3>
                        <p>حوزه علمیه ویژه طلاب بخش خواهران</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-features-card tx-center">
                        <i class='bx bxs-book'></i>
                        <h3>
                            <a href="{{url('publishing-center')}}" class="card-title">مرکز نشر</a>
                        </h3>
                        <p>مرکز نشر کتب و مقالات اساتید و طلاب برجسته حوزه</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-features-card tx-center">
                        <i class='bx bxs-donate-blood'></i>
                        <h3>
                            <a href="{{url('/charity')}}" class="card-title">موسسه خیریه</a>
                        </h3>
                        <p>موسسه خیریه وابسته به حوزه جهت کمک به طلاب</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-features-card tx-center">
                        <i class='bx bxs-user-voice'></i>
                        <h3>
                            <a href="{{url('/mahdia')}}" class="card-title">مرکز مشاوره</a>
                        </h3>
                        <p>مرکز مشاوره با بهره گیری از متخصصین حوزه و دانشگاه</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-features-card tx-center">
                        <i class='bx bx-child'></i>
                        <h3>
                            <a href="{{url('/kindergarten')}}" class="card-title">مهد کودک</a>
                        </h3>
                        <p>مهدکودک در زمینه آموزش مفاهیم قرآنی برای خردسالان</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{--    End sections Card    --}}

    <!-- Start Services Area -->
    <section class="services-area mt-3 mb-3">
        <div class="container">
            <div class="section-title text-left">
                <h2>سلسله نشست های دوره ای حوزه</h2>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-services-box">
                        <div class="row m-0">
                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="content">
                                    <h3><a href="{{url('/single-meeting')}}">نشست خانواده و تربیت</a></h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است.</p>
                                    <a href="{{url('/single-meeting')}}" class="read-more-btn">ادامه مطلب <i
                                            class='bx bx-left-arrow-alt'></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="image bg-1">
                                    <img src="{{asset('site/img/marketing-agency/services-img1.jpg')}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-services-box">
                        <div class="row m-0">
                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="content">
                                    <h3><a href="{{url('/single-meeting')}}">نشست مهدویت و رسانه</a></h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است.</p>
                                    <a href="{{url('/single-meeting')}}" class="read-more-btn">ادامه مطلب <i
                                            class='bx bx-left-arrow-alt'></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="image bg-2">
                                    <img src="{{asset('site/img/marketing-agency/services-img2.jpg')}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-services-box">
                        <div class="row m-0">
                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="content">
                                    <h3><a href="{{url('/single-meeting')}}">نشست حجاب و عفاف</a></h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است.</p>
                                    <a href="{{url('/single-meeting')}}" class="read-more-btn">ادامه مطلب <i
                                            class='bx bx-left-arrow-alt'></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="image bg-3">
                                    <img src="{{asset('site/img/marketing-agency/services-img3.jpg')}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-services-box">
                        <div class="row m-0">
                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="content">
                                    <h3><a href="{{url('/single-meeting')}}">نشست امام شناسی</a></h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است.</p>
                                    <a href="{{url('/single-meeting')}}" class="read-more-btn">ادامه مطلب <i
                                            class='bx bx-left-arrow-alt'></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="image bg-4">
                                    <img src="{{asset('site/img/marketing-agency/services-img4.jpg')}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="services-btn-box">
                        <a href="{{url('/meeting')}}" class="default-btn">
                            مشاهده همه
                            <i class="bx bx-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Area -->

    <!-- Start Case Studies Area -->
    <section class="case-studies-area pt-70 pb-20">
        <div class="container">
            <div class="case-studies-slides owl-carousel">
                <div class="single-case-studies-item">
                    <a href="{{url('/speech')}}" class="image d-block">
                        <img src="{{asset('site/img/case-studies/case-studies-img1.jpg')}}" alt="image">
                    </a>

                    <div class="content">
                        <h3><a href="{{url('/speech')}}">سخنرانی و درس اخلاق آیت الله هاشمی اولیا</a></h3>
                        <a href="{{url('/speech')}}" class="link-btn"><i class='bx bx-left-arrow-alt'></i></a>
                    </div>
                </div>

                <div class="single-case-studies-item">
                    <a href="{{url('/speech')}}" class="image d-block">
                        <img src="{{asset('site/img/case-studies/case-studies-img2.jpg')}}" alt="image">
                    </a>

                    <div class="content">
                        <h3><a href="{{url('/speech')}}">سخنرانی و درس اخلاق آیت الله هاشمی اولیا</a></h3>
                        <a href="{{url('/speech')}}" class="link-btn"><i class='bx bx-left-arrow-alt'></i></a>
                    </div>
                </div>

                <div class="single-case-studies-item">
                    <a href="{{url('/speech')}}" class="image d-block">
                        <img src="{{asset('site/img/case-studies/case-studies-img3.jpg')}}" alt="image">
                    </a>

                    <div class="content">
                        <h3><a href="{{url('/speech')}}">سخنرانی و درس اخلاق آیت الله هاشمی اولیا</a></h3>
                        <a href="{{url('/speech')}}" class="link-btn"><i class='bx bx-left-arrow-alt'></i></a>
                    </div>
                </div>

                <div class="single-case-studies-item">
                    <a href="{{url('/speech')}}" class="image d-block">
                        <img src="{{asset('site/img/case-studies/case-studies-img4.jpg')}}" alt="image">
                    </a>

                    <div class="content">
                        <h3><a href="{{url('/speech')}}">سخنرانی و درس اخلاق آیت الله هاشمی اولیا</a></h3>
                        <a href="{{url('/speech')}}" class="link-btn"><i class='bx bx-left-arrow-alt'></i></a>
                    </div>
                </div>

                <div class="single-case-studies-item">
                    <a href="{{url('/speech')}}" class="image d-block">
                        <img src="{{asset('site/img/case-studies/case-studies-img5.jpg')}}" alt="image">
                    </a>

                    <div class="content">
                        <h3><a href="{{url('/speech')}}">سخنرانی و درس اخلاق آیت الله هاشمی اولیا</a></h3>
                        <a href="{{url('/speech')}}" class="link-btn"><i class='bx bx-left-arrow-alt'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Case Studies Area -->

    <section class="services-area bg-right-shape mt-4 mb-4">
        <div class="container pt-3">
            <div class="row align-items-center">
                <div class="services-content it-service-content">
                    <div class="content left-content">
                        <h2> امکانات آموزشی </h2>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40
                            سال استاندارد صنعت بوده است.</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-box">
                                    <i class='bx bxs-badge-check'></i>
                                    حسینیه
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-box">
                                    <i class='bx bxs-badge-check'></i>
                                    کلاس آموزشی
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-box">
                                    <i class='bx bxs-badge-check'></i>
                                    خوابگاه طلاب
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-box">
                                    <i class='bx bxs-badge-check'></i>
                                    دوره های پژوهش محور
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-box">
                                    <i class='bx bxs-badge-check'></i>
                                    اردوهای جهادی
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-box">
                                    <i class='bx bxs-badge-check'></i>
                                    سالن کنفرانس
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-image wow fadeInRight" data-wow-delay=".3s">
                    <div class="image">
                        <img src="{{asset('site/img/hozeslide2.jpg')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Partner Area -->
    <section class="partner-area-two ptb-70 bg-f9f9f9">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6 col-sm-3 col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-partner-box">
                        <img src="{{asset('site/img/partner-image/1.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-2 col-6 col-sm-3 col-md-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-partner-box">
                        <img src="{{asset('site/img/partner-image/2.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-2 col-6 col-sm-3 col-md-4 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-partner-box">
                        <img src="{{asset('site/img/partner-image/3.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-2 col-6 col-sm-3 col-md-4 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-partner-box">
                        <img src="{{asset('site/img/partner-image/4.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-2 col-6 col-sm-3 col-md-4 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-partner-box">
                        <img src="{{asset('site/img/partner-image/1.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-2 col-6 col-sm-3 col-md-4 wow fadeInUp" data-wow-delay=".7s">
                    <div class="single-partner-box">
                        <img src="{{asset('site/img/partner-image/2.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Partner Area -->

    <!-- Start Blog Area -->
    <section class="blog-area pt-70">
        <div class="container pb-5">

            <div class="blog-slides owl-carousel">
                <div class="single-blog-post-item">
                    <div class="post-image">
                        <a href="{{url('/single-news')}}" class="d-block">
                            <img src="{{asset('site/img/blog-image/1.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="post-content">
                        <a href="{{url('/single-news')}}" class="category">کلاس اخلاق</a>
                        <h3><a href="{{url('/single-news')}}">دوره اخلاق و تربیت</a></h3>
                        <ul class="post-content-footer d-flex justify-content-between align-items-center">
                            <li>
                                <div class="post-author d-flex align-items-center">

                                </div>
                            </li>
                            <li>
                                <i class='bx bx-calendar'></i> 30 دی 1403
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="single-blog-post-item">
                    <div class="post-image">
                        <a href="{{url('/single-news')}}" class="d-block">
                            <img src="{{asset('site/img/blog-image/2.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="post-content">
                        <a href="{{url('/single-news')}}" class="category">ادب اجتماعی</a>
                        <h3><a href="{{url('/single-news')}}">دوره اداب اجتماعی فردی</a></h3>
                        <ul class="post-content-footer d-flex justify-content-between align-items-center">
                            <li>
                                <div class="post-author d-flex align-items-center">

                                </div>
                            </li>
                            <li>
                                <i class='bx bx-calendar'></i> 30 دی 1403
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="single-blog-post-item">
                    <div class="post-image">
                        <a href="{{url('/single-news')}}" class="d-block">
                            <img src="{{asset('site/img/blog-image/3.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="post-content">
                        <a href="{{url('/single-news')}}" class="category">اقتصاد اسلامی</a>
                        <h3><a href="{{url('/single-news')}}">دوره اقتصاد با محوریت اسلام</a></h3>
                        <ul class="post-content-footer d-flex justify-content-between align-items-center">
                            <li>
                                <div class="post-author d-flex align-items-center">

                                </div>
                            </li>
                            <li>
                                <i class='bx bx-calendar'></i> 30 دی 1403
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="single-blog-post-item">
                    <div class="post-image">
                        <a href="{{url('/news')}}" class="d-block">
                            <img src="{{asset('site/img/blog-image/2.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="post-content">
                        <a href="{{url('/single-news')}}" class="category">تفسیر قرآن</a>
                        <h3><a href="{{url('/single-news')}}">دوره تفسیر قرآن کریم</a></h3>
                        <ul class="post-content-footer d-flex justify-content-between align-items-center">
                            <li>
                                <div class="post-author d-flex align-items-center">

                                </div>
                            </li>
                            <li>
                                <i class='bx bx-calendar'></i> 30 دی 1403
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                <div class="services-btn-box">
                    <a href="{{url('/news')}}" class="default-btn">
                        مشاهده همه
                        <i class="bx bx-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <section class="faq-area ptb-5 bg-f8fbfa">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    سوالات متداول 1؟
                                </a>

                                <p class="accordion-content show">
                                    لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                    استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                    لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.
                                </p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    سوالات متداول 2؟
                                </a>

                                <p class="accordion-content">
                                    لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                    استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                    لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.
                                </p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    سوالات متداول 3؟
                                </a>

                                <p class="accordion-content">
                                    لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                    استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                    لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.
                                </p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    سوالات متداول 4؟
                                </a>

                                <p class="accordion-content">
                                    لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                    استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                    لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.
                                </p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    سوالات متداول 5؟
                                </a>

                                <p class="accordion-content">
                                    لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                    استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                    لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Company Preview Area -->
    {{--    <div>
            <div class="container">
                <div class="company-preview-video">
                    <style>.h_iframe-aparat_embed_frame{position:relative;}.h_iframe-aparat_embed_frame .ratio{display:block;width:100%;height:auto;}.h_iframe-aparat_embed_frame iframe{position:absolute;top:0;left:0;width:100%;height:100%;}</style><div class="h_iframe-aparat_embed_frame"><span style="display: block;padding-top: 57%"></span><iframe src="https://www.aparat.com/video/video/embed/videohash/V7WI3/vt/frame?titleShow=true&recom=self"  allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe></div>            </div>
            </div>
        </div>--}}

    <!-- End Company Preview Area -->

    <!-- Start Let's Talk Area -->
    <section class="lets-talk-area mt-5 mb-5">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-12 col-md-12">
                    <div class="lets-talk-content">
                        <h2 class="wow fadeInUp pb-5">درباره حوزه علمیه و مدرسه حضرت قائم (عج) چیذر</h2>
                        <p class="wow fadeInUp text-justify">
                            حوزه علمیه حضرت قائم (عج) چیذر از سال ۱۳۴۶ در دو بخش برادران و خواهران آغاز به کار نمود.
                            از سال ۱۳۹۳ واحد خواهران با نظارت مرکز مدیریت حوزه های علمیه فعالیت خود را در سه رشته کلام با گرایش امامت، تفسیر و علوم قرآنی و مشاوره خانواده در قالب موسسه آموزش عالی حوزوی ادامه داد. این مؤسسه متشکل از سه معاونت آموزش آموزش ،پژوهش و فرهنگی می باشد .
                            </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                </div>
            </div>
        </div>
    </section>
    <!-- End Let's Talk Area -->

@endsection
@section('script')
@endsection
