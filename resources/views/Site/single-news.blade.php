@extends('master')
@section('style')
@endsection
@section('main')

    <style>
        .video-container {
            position: relative;
            width: 100%;
            max-width: 640px;
            margin: 0 auto;
        }
        .video-cover {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset('site/img/blog-image/1.jpg') }}') no-repeat center center;
            background-size: cover;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .video-cover::before {
            background:url('{{ asset('site/img/blog-image/1.jpg') }}') no-repeat center center;
            content: "▶";
            font-size: 48px;
            color: black;
        }
        video {
            display: none;
            width: 100%;
        }
        video.playing {
            display: block;
        }
    </style>

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>خبر</h2>
                <p>جزئیات خبر</p>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Service details -->
    <div class="service-details ptb-100">
        <div class="container">
            <div class="container mt-5">
                <div class="row " style="justify-content: center">
                    <div class="col-md-8" >
                        <img src="{{asset('site/img/media/mahdia3.jpg')}}" class="mx-auto d-block" alt="image">
                    </div>
                </div>
                <div class="service-details-content">
                    <h3 class="pb-4" style="margin-top: 80px">حجاب و عفاف و تاثیر آن بر جامعه</h3>
                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                    <div class="service-details-info" style="margin-bottom: 100px">
                        <div class="single-info-box">
                            <h4>سخنران</h4>
                            <span>آیت الله هاشمی اولیا</span>
                        </div>

                        <div class="single-info-box">
                            <h4>دسته بندی</h4>
                            <span>خانواده</span>
                        </div>

                        <div class="single-info-box">
                            <h4>تاریخ</h4>
                            <span>28 دی 1398</span>
                        </div>

                        <div class="single-info-box">
                            <h4>اشتراک گذاری</h4>
                            <ul class="social">
                                <li>
                                    <a target="_blank" href="#">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="#">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="#">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="#">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Service details -->
@endsection
