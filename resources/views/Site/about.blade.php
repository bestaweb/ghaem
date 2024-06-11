@extends('master')
@section('style')
@endsection
@section('main')
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2> درباره حوزه علمیه حضرت قائم (عج)  </h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start About Area -->
        <section class="about-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-content">
                            <h3> درباره حوزه علمیه حضرت قائم (عج) </h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.  لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. </p>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. </p>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. </p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="{{asset('site/img/about-img.jpg')}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Area -->

        <!-- Start Partner Area -->
        <section class="partner-area pt-70 pb-70 bg-f8fbfa">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12">
                        <div class="partner-title">
                            <h3>همراان ما:</h3>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-12">
                        <div class="partner-slides owl-carousel owl-theme">
                            <div class="single-partner-item">
                                <a href="#">
                                    <img src="{{asset('site/img/partner-image/1.png')}}" alt="image">
                                </a>
                            </div>

                            <div class="single-partner-item">
                                <a href="#">
                                    <img src="{{asset('site/img/partner-image/2.png')}}" alt="image">
                                </a>
                            </div>

                            <div class="single-partner-item">
                                <a href="#">
                                    <img src="{{asset('site/img/partner-image/3.png')}}" alt="image">
                                </a>
                            </div>

                            <div class="single-partner-item">
                                <a href="#">
                                    <img src="{{asset('site/img/partner-image/4.png')}}" alt="image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Partner Area -->

        <!-- Start Team Area -->
        <section class="team-area pb-70 pt-70">
            <div class="container">
                <div class="section-title">
                    <h3>مسئولین و هیئت امنا حوزه علمیه حضرت قائم (عج)</h3>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="{{asset('site/img/case-studies/case-studies-img1.jpg')}}" alt="image">
                            </div>

                            <div class="content">
                                <h3>حجت الاسلام هاشمی</h3>
                                <span>مسئول</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="{{asset('site/img/case-studies/case-studies-img1.jpg')}}" alt="image">
                            </div>

                            <div class="content">
                                <h3>حجت الاسلام هاشمی</h3>
                                <span>مسئول</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="{{asset('site/img/case-studies/case-studies-img1.jpg')}}" alt="image">
                            </div>

                            <div class="content">
                                <h3>حجت الاسلام هاشمی</h3>
                                <span>مسئول</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="{{asset('site/img/case-studies/case-studies-img1.jpg')}}" alt="image">
                            </div>

                            <div class="content">
                                <h3>حجت الاسلام هاشمی</h3>
                                <span>مسئول</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Area -->
@endsection
@section('script')
@endsection
