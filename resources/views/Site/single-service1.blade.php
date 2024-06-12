@extends('master')
@section('style')
@endsection
@section('main')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>نشست خانواده و تربیت</h1>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <!-- ویدئو 1 -->
                <div class="mb-5">
                    <div class="embed-responsive embed-responsive-16by9 mb-3">
                        <iframe  class="embed-responsive-item " src="{{asset('site/video/1.mp4')}}" allowfullscreen></iframe>
                    </div>
                    <p>متن توضیحی برای ویدئوی اول. این متن می‌تواند توضیحاتی در مورد محتوا ویدیویی باشد که به کاربر ارائه شده است.</p>
                </div>
            </div>
        </div>
        <div style="margin-bottom: 80px"></div>
    </div>


@endsection
@section('script')
@endsection
