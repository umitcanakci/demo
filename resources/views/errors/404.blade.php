@extends('layouts.app')

@section('title')

404

@endsection

@section('style')

<link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome-5.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/unicons.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/fancybox.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/metismenu.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/hover-revel.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/app.css')}}">

@endsection

@section('content')
@include('layouts.header')
<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style=" background-image: url({{url('/assets/images/breadcrumb/kurumsal.webp')}}); ">
    <div class="container">
        <div class="col-12 text-center">
            <h4 class="title sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" style="color: white;">404</h4>
        </div>
        <h4 class="text-white" style="display:none"><span class="typed-words">Lisans</span><span class="typed-cursor typed-cursor--blink">|</span></h4>
    </div>
</div>

<!-- rts- 404 area start -->
<div class="rts-404-area rts-section-gap mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="404wrapper text-center">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/contact/shape/404.png')}}" alt="">
                        </div>
                        <h2 class="title ">
                            Sayfa bulunamadı
                        </h2>
                        <p class="disc">Üzgünüz, aradığınız sayfa bulunamadı.</p>
                        <a class="rts-btn btn-primary" href="{{ route('index') }}">Anasayfaya Dön</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts- 404 area end -->


@section('js')

@endsection

@endsection