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
    <section class="digital-agency-banner" data-bg-desktop='../../site/img/marketing-agency/banner-bg.jpg' data-bg-mobile="../../site/img/marketing-agency/banner-bg-mobile2.jpg">
        <div class="container">
            <div class="digital-agency-banner-content">
                <h1 class="wow fadeInUp" style="font-family: 'IranNastaliq',serif;">حوزه برادران علمیه حضرت قائم (عج) </h1>
                <p class="wow fadeInUp text-justify">
                    حوزه علمیه حضرت قائم (عج) چیذر از سال ۱۳۴۶ در دو بخش برادران و خواهران آغاز به کار نمود.
                    از سال ۱۳۹۳ واحد خواهران با نظارت مرکز مدیریت حوزه های علمیه فعالیت خود را در سه رشته کلام
                    با گرایش امامت، تفسیر و علوم قرآنی و مشاوره خانواده در قالب موسسه آموزش عالی حوزوی ادامه داد.
                    این مؤسسه متشکل از سه معاونت آموزش آموزش ،پژوهش و فرهنگی می باشد .
                </p>
            </div>
        </div>
    </section>
    <!-- End Digital Agency Banner -->


    {{--   Start line   --}}
    <div class="container-fluid" style="background-color: #f0f0f9; display: flex; height: 50px;">
        <div class="container col-12 col-md-6" style="margin: 0 auto;display: flex;">
            <div>
                <img src="{{asset('site/img/navaar.png')}}" style="padding-top: 8px;max-height: 100%;" alt="">
            </div>
            <div class="marquee">
                <span style="margin-bottom: 12px;margin-top: 12px;display: inline-block;animation: marquee 40s linear infinite;">
                    مقام معظم رهبری (مدظله العالی) پدیده خواهران طلبه پدیده عظیم و مبارکی است. هزاران عالم ،
                    پژوهشگر ، فقیه و فیلسوف در حوزه‌های علمی خواهران تربیت شوند این حرکت عظیمی خواهد بود.ٍ    |
                    الإمامُ الصّادقُ عليه السلام :مَن تَعَلَّمَ للّهِِ و عَمِلَ للّهِِ و عَلَّمَ للّهِِ دُعِيَ في مَلَكوتِ
                    السَّماواتِ عَظيما، فقيلَ : تَعَلَّمَ للّهِِ ، و عَمِلَ للّهِِ ، و عَلَّمَ للّهِِ !    |
                    امام صادق علیه السلام هر که برای خدا علم بیاموزد و به آن عمل کند و به دیگران آموزش دهد
                    در ملکوت آسمان‌ها به بزرگی یاد شود و گفته آید برای خدا آموخت برای خدا عمل کرد و برای خدا آموزش داد.    |
                    الکافی ۱/۳۵/۶
                </span>
            </div>
            <div>
                <img src="{{asset('site/img/navaar.png')}}" style="padding-top: 8px;max-height: 100%;" alt="">
            </div>
        </div>
    </div>
    {{--   End line   --}}



    <!-- Start section cards -->
    <div class="features-card-section pt-100 pb-70 bg-f8fbfa">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 wow fadeInUp d-flex align-items-stretch" data-wow-delay=".2s">
                    <div class="single-features-card tx-center">
                        <i class='bx bxs-graduation'></i>
                        <h3>
                            <a href="{{url('/education')}}" class="card-title">
                                معاونت آموزش
                            </a>
                        </h3>
                        <p class="card-text text-justify">مؤسسه آموزش عالی حوزوی حضرت قائم (عج)
                            در راستای تحقق رسالت خود مبنی بر ارتقاء سطح علمی بانوان مسلمان متعهد پذ
                            یرای طلاب خواهر در دو مقطع کارشناسی (سطح ۲) و کارشناسی ارشد (سطح ۳) می باشد.
                            <a href="#moreText1" data-toggle="collapse">
                                ادامه مطلب ...
                            </a>
                        </p>
                        <div id="moreText1" class="collapse">
                            <p class="text-justify">
                                فارغ التحصیلان حوزوی پس از تکمیل دوره آموزشی و مهارتی تبلیغی
                                جهت فعالیت های علمی و تبلیغی جذب انجمن ها ارگانها و نهادهای ملی و بین المللی میشوند.
                            </p>
                        </div>
                        <div class="flex-grow-1"></div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 wow fadeInUp d-flex align-items-stretch" data-wow-delay=".3s">
                    <div class="single-features-card tx-center">
                        <i class='bx bx-book-reader'></i>
                        <h3>
                            <a href="{{url('/research')}}" class="card-title">معاونت پژوهش</a>
                        </h3>
                        <p class="card-text text-justify">وادی پژوهش و نویسندگی گسترۀ نقش آفرینی است که با آموزش صحیح
                            و روشمند و بهره گیری از روشهای پژوهش پر بار می گردد. یکی از اهداف حوزه های علمیه
                            تربیت طلاب محقق سخنور و نویسنده است. که در تبلور جامعه اسلامی بسیار مهم است.
                            <br>
                            <a href="#moreText2" data-toggle="collapse">ادامه مطلب ...</a>
                        </p>
                        <div id="moreText2" class="collapse">
                            <p class="text-justify">از این رو در این موسسه در راستای این هدف مطلوب
                                فعالیت های پژوهشی گسترده و متعددی در طی سالها و مقارن با دوره آموزش طلاب
                                برگزار شده است از قبیل: کرسی های علمی ترویجی با هدف ایجاد بستر نظریه
                                پردازی نشست های علمی تخصصی و علمی پژوهشی با هدف ترویج فرهنگ پژوهش و
                                آشنایی طلاب با مسائل روز و کاربردی ،جامعه برگزاری کارگاه های پژوهشی
                                نوین با هدف آشنایی طلاب با شیوه های نوین پژوهش انتشار فصلنامه پژوهشی
                                با هدف چاپ مقالات علمی طلاب و فعالیت های دیگری که در این مجال نمیگنجد.
                            </p>
                        </div>
                        <div class="flex-grow-1">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 wow fadeInUp d-flex align-items-stretch" data-wow-delay=".4s">
                    <div class="single-features-card tx-center">
                        <i class='bx bx-library'></i>
                        <h3>
                            <a href="{{url('/cultural')}}" class="card-title">معاونت فرهنگی</a>
                        </h3>
                        <p class="card-text text-justify">معاونت فرهنگی در کنار رسالت اصلی خود با تشکیل سه کانون
                            فرهنگی به شرح ذیل اقدام به فعالیتهای تخصصی در حوزه های
                            گوناگون نموده است.
                            <a href="#moreText3" data-toggle="collapse">ادامه مطلب ...</a>
                        </p>
                        <div id="moreText3" class="collapse">
                            <p class="text-justify">كانون نور الثقلين
                                <br>
                                کانون نور الثقلین با هدف ایجاد زمینه فعالیت های قرآنی و نوحه خوانی به صورت تخصصی در گرایش های حفظ
                                و قرائت قرآن کریم تفسیر ر، آموزش مداحی و مقتل خوانی و..... ویژه معلمان و قرآن پژوهان تشکیل شده
                                است.
                                <br>
                                کانون زن و خانواده
                                <br>
                                این کانون با زیر مجموعه های تخصصی همیار خانواده و ،مشاوره با هدف پاسخ به نیاز روز جامعه از جمله :
                                روانشناسی پیش از ،ازدواج ارتباط بین
                                فردی زوج درمانی روان درمانی اختلالات و روانشناسی اعتیاد و... تاسیس شده است.
                                <br>
                                کانون دانش آموختگان
                                <br>
                                کانون دانش آموختگان حوزه علمیه حضرت قائم (عج) با هدف بکارگیری استعدادها ،توان تجربه و تخصص
                                فارغ التحصیلان تاسیس گردیده است. این کانون با هدف ایجاد ارتباط علمی و مهارتی و ایجاد زمینه ارتقاء و تکمیل
                                دانش اعضا و تشکیل شبکه ملی با امتیاز دریافت کد تبلیغی و اولویت در اعزام جهت تبلیغ علوم
                                و معارف دینی پایه گذاری شده است تعدادی از سر فصلهای آموزشی علمی و مهارتی مبلغان عبارتند از:
                                ۱_ تربیت مربی و مبلغ معارف اسلامی با گرایش تبلیغ ،خطيب متخصص مشاوره دینی ، کودک و نوجوان نقد عرفانهای نوظهور نقد بهائیت وهابیت و .....
                                ۲_تربیت مربی سواد رسانه ای با گرایش نرم افزار و سخت افزار ، جریان شناسی فضای مجازی علوم ارتباطات مجازی برنامه نویسی نویسندگی و...
                            </p>
                        </div>
                        <div class="flex-grow-1">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 wow fadeInUp d-flex align-items-stretch" data-wow-delay=".5s">
                    <div class="single-features-card tx-center">
                        <i class='bx bxs-user-voice'></i>
                        <h3>
                            <a href="{{url('/mahdia')}}" class="card-title">معاونت مشاوره</a>
                        </h3>
                        <p class="flex-grow-1">
                            لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد
                            صنعت بوده است.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End section cards -->


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
    <section class="case-studies-area pt-5 pb-5">
        <style>
            .owl-prev,
            .owl-next {
                display: none;
            }
        </style>
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
                        <a href="{{'/speech'}}" class="link-btn"><i class='bx bx-left-arrow-alt'></i></a>
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


    <!-- Start Let's Talk Area -->
    <section class="lets-talk-area ptb-100 bg-f8fbfa">
        <div class="container justify-content-center">
            <div class="row align-items-center text-center">
                <div class="col-lg-12 col-md-12 ">
                    <div class="lets-talk-content ">
                        <h2 class="wow fadeInUp pb-3">درباره حوزه علمیه و مدرسه حضرت قائم (عج) چیذر</h2>
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let lazyBackgrounds = [].slice.call(document.querySelectorAll(".digital-agency-banner"));

        if ("IntersectionObserver" in window) {
            let lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        let lazyBackground = entry.target;
                        let bgUrl = window.innerWidth <= 600 ? lazyBackground.getAttribute('data-bg-mobile') : lazyBackground.getAttribute('data-bg-desktop');
                        lazyBackground.style.backgroundImage = 'url(' + bgUrl + ')';
                        lazyBackground.classList.add("lazy-bg");
                        lazyBackgroundObserver.unobserve(lazyBackground);
                    }
                });
            });

            lazyBackgrounds.forEach(function(lazyBackground) {
                lazyBackgroundObserver.observe(lazyBackground);
            });
        }
    });
</script>
