@extends('master')
@section('style')
@endsection
@section('main')

        <!-- Start Preloader Area -->
        <div class="preloader-area">
            <div class="spinner">
                <div class="inner">
                    <div class="disc"></div>
                    <div class="disc"></div>
                    <div class="disc"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Signup Area -->
        <section class="signup-area">
            <div class="row m-0">

                <div class="col-lg-6 order-2 col-md-12 p-0 order-md-1">
                    <div class="signup-content">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="signup-form">
                                    <div class="logo">
                                        <a href={{url('/')}}><img src="{{asset('site/img/logo.png')}}" alt="image"></a>
                                    </div>

                                    <h3>ایجاد حساب کاربری در سایت</h3>
                                    <p> در صورتی که قبلا حساب کاربری داشته اید <a href="{{url('login')}}"> وارد شود </a></p>

                                    <form>
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" placeholder="نام و نام خانوادگی" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone" placeholder="شماره مموبایل" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" placeholder="آدرس ایمیل" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password" id="password" placeholder="کلمه عبور" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" placeholder="تکرار کلمه عبور" class="form-control">
                                        </div>

                                        <button type="submit" class="default-btn"><i class="bx bx-log-in"></i>ثبت نام<span></span></button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-0 order-md-2">
                    <div class="signup-image">
                        <img src="{{asset('site/img/signup-bg.jpg')}}" alt="image">
                    </div>
                </div>


            </div>
        </section>
        <!-- End Login Area -->
@endsection
@section('script')
@endsection
