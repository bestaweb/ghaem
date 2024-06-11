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
        }

        .marquee span {
            margin-bottom: 12px;
            margin-top: 12px;
            display: inline-block;
            padding-left: 100%;
            animation: marquee 16s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(-15%);
            }
            100% {
                transform: translateX(-60%);
            }
        }
    </style>


    <!-- Start Digital Agency Banner -->
    <section class="digital-agency-banner">
        <div class="container">
            <div class="digital-agency-banner-content">
                <h1 class="wow fadeInUp" style="font-family: 'Mehr Nastaliq Web';font-size: 50px !important;">حوزه علمیه
                    و مدرسه حضرت قائم (عج) چیذر</h1>
                <p class="wow fadeInUp">لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40
                    سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به
                    مدت 40 سال استاندارد صنعت بوده است.</p>
            </div>
        </div>
    </section>


    <div class="marquee">
        <span>يَرْفَعِ اللَّهُ الَّذِينَ آمَنُوا مِنْكُمْ وَالَّذِينَ أُوتُوا الْعِلْمَ دَرَجَاتٍ</span>
    </div>
    <!-- End Digital Agency Banner -->



    <div class="features-card-section pt-100 pb-70 bg-f8fbfa">
        <div class="container">
            <div class="row">
                <div class="col-lg col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-features-card tx-center">
                        <i class='bx bx-conversation'></i>
                        <h3>
                            <a href="#" class="card-title">معاونت آموزش</a>
                        </h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است.</p>
                    </div>
                </div>

                <div class="col-lg col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-features-card tx-center">
                        <i class='bx bx-laptop'></i>
                        <h3>
                            <a href="#" class="card-title">معاونت پژوهش</a>
                        </h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است.</p>
                    </div>
                </div>

                <div class="col-lg col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-features-card tx-center">
                        <i class='bx bxs-badge-check'></i>
                        <h3>
                            <a href="#" class="card-title">معاونت فرهنگ</a>
                        </h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است.</p>
                    </div>
                </div>
                <div class="col-lg col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-features-card tx-center">
                        <i class='bx bxs-megaphone'></i>
                        <h3>
                            <a href="#" class="card-title">معاونت مشاوره</a>
                        </h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Services Area -->
    <section class="services-area ptb-100">
        <div class="container">
            <div class="section-title text-left">
                <h2>نشست های دوره ای</h2>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-services-box">
                        <div class="row m-0">
                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="content">
                                    <h3><a href="single-service.html">نشست خانواده و تربیت</a></h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است.</p>
                                    <a href="single-service.html" class="read-more-btn">ادامه مطلب <i
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
                                    <h3><a href="single-service.html">نشست مهدویت و رسانه</a></h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است.</p>
                                    <a href="single-service.html" class="read-more-btn">ادامه مطلب <i
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
                                    <h3><a href="single-service.html">نشست حجاب و عفاف</a></h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است.</p>
                                    <a href="single-service.html" class="read-more-btn">ادامه مطلب <i
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
                                    <h3><a href="single-service.html">نشست امام شناسی</a></h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است.</p>
                                    <a href="single-service.html" class="read-more-btn">ادامه مطلب <i
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
                        <a href="services-3.html" class="default-btn">
                            <i class='bx bx-bullseye'></i>مشاهده همه<span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Area -->


    <!-- Start Case Studies Area -->
    <section class="case-studies-area pt-70 pb-20">
        <style>
            .owl-prev,
            .owl-next {
                display: none;
            }
        </style>
        <div class="container-fluid">
            <div class="case-studies-slides owl-carousel">
                <div class="single-case-studies-item">
                    <a href="#" class="image d-block">
                        <img src="{{asset('site/img/case-studies/case-studies-img1.jpg')}}" alt="image">
                    </a>

                    <div class="content">
                        <h3><a href="#">سخنرانی و درس اخلاق آیت الله هاشمی اولیا</a></h3>
                        <a href="#" class="link-btn"><i class='bx bx-left-arrow-alt'></i></a>
                    </div>
                </div>

                <div class="single-case-studies-item">
                    <a href="#" class="image d-block">
                        <img src="{{asset('site/img/case-studies/case-studies-img2.jpg')}}" alt="image">
                    </a>

                    <div class="content">
                        <h3><a href="#">سخنرانی و درس اخلاق آیت الله هاشمی اولیا</a></h3>
                        <a href="#" class="link-btn"><i class='bx bx-left-arrow-alt'></i></a>
                    </div>
                </div>

                <div class="single-case-studies-item">
                    <a href="#" class="image d-block">
                        <img src="{{asset('site/img/case-studies/case-studies-img3.jpg')}}" alt="image">
                    </a>

                    <div class="content">
                        <h3><a href="#">سخنرانی و درس اخلاق آیت الله هاشمی اولیا</a></h3>
                        <a href="#" class="link-btn"><i class='bx bx-left-arrow-alt'></i></a>
                    </div>
                </div>

                <div class="single-case-studies-item">
                    <a href="#" class="image d-block">
                        <img src="{{asset('site/img/case-studies/case-studies-img4.jpg')}}" alt="image">
                    </a>

                    <div class="content">
                        <h3><a href="#">سخنرانی و درس اخلاق آیت الله هاشمی اولیا</a></h3>
                        <a href="#" class="link-btn"><i class='bx bx-left-arrow-alt'></i></a>
                    </div>
                </div>

                <div class="single-case-studies-item">
                    <a href="#" class="image d-block">
                        <img src="{{asset('site/img/case-studies/case-studies-img5.jpg')}}" alt="image">
                    </a>

                    <div class="content">
                        <h3><a href="#">سخنرانی و درس اخلاق آیت الله هاشمی اولیا</a></h3>
                        <a href="#" class="link-btn"><i class='bx bx-left-arrow-alt'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Case Studies Area -->


    <section class="services-area bg-right-shape ptb-100">
        <div class="container-fluid">
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

                {{--                <div class="services-image wow fadeInRight" data-wow-delay=".3s">--}}
                {{--                    <div class="image">--}}
                {{--                        <img src="assets/img/services-image/service1.png" alt="image">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
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
        <div class="container-fluid">

            <div class="blog-slides owl-carousel">
                <div class="single-blog-post-item">
                    <div class="post-image">
                        <a href="#" class="d-block">
                            <img src="{{asset('site/img/blog-image/1.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="post-content">
                        <a href="#" class="category">کلاس اخلاق</a>
                        <h3><a href="#">دوره اخلاق و تربیت</a></h3>
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
                        <a href="#" class="d-block">
                            <img src="{{asset('site/img/blog-image/2.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="post-content">
                        <a href="#" class="category">ادب اجتماعی</a>
                        <h3><a href="#">دوره اداب اجتماعی فردی</a></h3>
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
                        <a href="#" class="d-block">
                            <img src="{{asset('site/img/blog-image/3.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="post-content">
                        <a href="#" class="category">اقتصاد اسلامی</a>
                        <h3><a href="#">دوره اقتصاد با محوریت اسلام</a></h3>
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
                        <a href="#" class="d-block">
                            <img src="{{asset('site/img/blog-image/2.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="post-content">
                        <a href="#" class="category">تفسیر قرآن</a>
                        <h3><a href="#">دوره تفسیر قرآن کریم</a></h3>
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
        </div>
    </section>
    <!-- End Blog Area -->


    <!-- Start Let's Talk Area -->
    <section class="lets-talk-area ptb-100 bg-f8fbfa">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-12 col-md-12">
                    <div class="lets-talk-content">
                        <h2 class="wow fadeInUp">درباره حوزه علمیه و مدرسه حضرت قائم (عج) چیذر</h2>
                        <p class="wow fadeInUp text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                            و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                            لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای
                            کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و
                            متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص
                            طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و
                            دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                            دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                            گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                            گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط
                            فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای
                            زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم
                            افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان
                            فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و
                            شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                            پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                </div>
            </div>
        </div>
    </section>
    <!-- End Let's Talk Area -->

@endsection
