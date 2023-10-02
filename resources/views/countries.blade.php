@extends('layouts.app')

@section('title')

Ülkeler

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
            <h4 class="title sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" style="color: white;">Ülkeler</h4>
        </div>
        <h4 class="text-white" style="display:none"><span class="typed-words">Lisans</span><span class="typed-cursor typed-cursor--blink">|</span></h4>
    </div>
</div>

<div class="rts-project-area mt-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-content-area mt-5 ">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                @foreach($countries as $country)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                        <a href="{{ route('countryView', ['slug' => $country->slug]) }}" class="card" style="height: 12em;">
                                            <img src="<?=url('/storage')?>/{{ $country->photo }}?>" class="card__image" alt="">
                                            <div class="card__overlay">
                                                <div class="card__header">
                                                    <div class="card__header-text">
                                                        <h5 style=" margin: 10px; " href="/Visitor/Country/ValueDetail/14">
                                                            {{ $country->name }}
                                                        </h5>

                                                    </div>
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
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