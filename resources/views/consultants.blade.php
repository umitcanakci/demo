@extends('layouts.app')

@section('title')

Danışmanlar

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



<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style=" background-image: url({{url('/assets/images/breadcrumb/danismanlar.jpeg')}}); ">
    <div class="container">
        <div class="col-12 text-center">
            <h4 class="title sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" style="color: white;">Danışmanlar</h4>
        </div>
    </div>
</div>

<div class="rts-faq-area-one ptb--50 ">
    <div class="container">
        <div class="row g-6 align-items-center">
            <div class="col-lg-12 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="title-area text-start mb--50">
                    <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate">
                        Danışmanlar
                    </span>
                    <h4 class="title sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        Edu Global Türkiye
                    </h4>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="rts-single-wized contact service sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="wized-header">
                                <a href="#"><img src="{{ asset('assets/images/logo/eduglobal-logo-white.png')}}" alt="Business_logo"></a>
                            </div>
                            <div class="wized-body">
                                <p class="title">
                                    Danışman olup ekibimize katılmak ister misiniz? :)
                                </p>

                                <div class="single-wized">
                                    <div class="w3ls-bot">
                                        <a href="{{ route('consultantApply') }}"><input type="submit" value="Başvur"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row g-5">
                            @foreach($consultants as $consultant)
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="team-single-one-start">
                                        <div class="team-image-area">
                                            <a href="{{ route('consultantView', ['slug' => $consultant->slug]) }}">
                                                <img style="width:100%" src="<?=url('/storage')?>/{{ $consultant->avatar }}" alt="Eduglobal">
                                            </a>
                                        </div>
                                        <div class="single-details row">
                                            <div class="col-11">
                                                <a href="{{ route('consultantView', ['slug' => $consultant->slug]) }}">
                                                    <h5 class="title">{{ $consultant->name }}</h5>
                                                </a>
                                                <p>Danışman</p>
                                            </div>
                                            <div class="col-1">
                                                <div class="team-social team-social-one">
                                                    <i class="fab fa-linkedin" style="font-size:18px;color: #1c2539;"></i>
                                                    <i class="fab fa-instagram" style="font-size:18px;color: #1c2539;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@section('js')

@endsection

@endsection