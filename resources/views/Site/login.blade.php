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

        <!-- Start Login Area -->
        <section class="login-area">
            <div class="row m-0">
                <div class="col-lg-6  p-0 order-1 col-md-12 order-md-2">
                    <div class="login-image">
                        <img src="{{asset('site/img/login-bg.jpg')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6  p-0 order-2 col-md-12 order-md-1">
                    <div class="login-content">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="login-form">
                                    <div class="logo">
                                        <a href={{url('/')}}><img src="{{asset('site/img/logo.png')}}" alt="image"></a>
                                    </div>

                                    <h3>خوش آمدید</h3>
                                    <p>اگر ثبت نام نکرده اید جهت ثبت نام : <a href={{url('/login')}}>اینجا کلیک کنید</a></p>

                                    <form>
                                        <div class="form-group">
                                            <input type="email" placeholder="آدرس ایمیل شما" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" placeholder="کلمه عبور" class="form-control">
                                        </div>

                                        <button type="submit" class="default-btn"><i class="bx bxs-hot"></i>ورود<span></span></button>

                                        <div class="forgot-password text-right">
                                            <a href="#">فراموشی رمز عبور؟</a>
                                        </div>

                                        <div class="connect-with-social">
                                            <button type="submit" class="google"><i class='bx bxl-google'></i> ورود توسط حساب گوگل</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('script')
@endsection
