@extends('master')
@section('style')
@endsection
@section('main')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>اخبار و رویدادها</h1>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <div class="container my-4">


        <div class="row">
            <div class="col-12">
                <div class="mb-5">
                    <img src="{{asset('/site/img/speech/speech1.jpg')}}" alt="سخنرانی">
                </div>
                <div class="mb-5">
                    <img src="{{asset('/site/img/speech/speech2.jpg')}}" alt="سخنرانی" >                </div>
                <div class="mb-5">
                    <img src="{{asset('/site/img/speech/speech3.jpg')}}" alt="سخنرانی" class="mt-lg-5">
                </div>


            </div>
        </div>
        <div style="margin-bottom: 80px"></div>
    </div>


@endsection
@section('script')
@endsection
