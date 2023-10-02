@extends('layouts.app')

@section('title')

Danışman - {{ $consultant->name }}

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


<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style="padding-top: 212px; padding-bottom: 120px; background-image: url({{ url('xx/assets/images/breadcrumb/danismanlar.jpeg')}})">
    <div class="container">
        <div class="row align-items-center" style="    margin-bottom: 132px;">
            <div class="col-12 text-center">
                <h4 class="title animated fadeIn sal-animate" style="color: white;" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Danışmanlar</h4>
                <p class="text-white">Edu Global Yurtdışı Programları ile sizleri #DünyayaBağlar</p>
            </div>

        </div>
    </div>
</div>

<div class="rts-team-details   ptb--100">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-3 col-lg-12 col-md-12 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="details-thumb">
                    <img src="<?=url('/storage')?>/{{ $consultant->avatar }}" alt="">
                    
                </div>
                <p class="team-details-support-wrapper">
                        <a target="_blank" style="margin: 10px;" href="{{ $consultant->linkedin }}"><i class="fab fa-linkedin" style="font-size:25px;color: #1c2539;"></i> </a>
                        <a target="_blank" style="margin: 10px;" href="{{ $consultant->instagram }}"> <i class="fab fa-instagram" style="font-size:25px;color: #1c2539;"></i> </a>
                    </p>
            </div>
            <div class="col-xl-9 col-lg-12 col-md-12 pl--35 pl_sm--15 sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                <div class="details-right-inner">
                    <div class="title-area">
                        <h3 class="title animated fadeIn">{{ $consultant->name}}</h3>
                    </div>
                    <p class="disc">



                    {!! $consultant->content !!}

                    

                        
                    </p>

                    



                    <div class="education-skill-wrapper">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@section('js')

@endsection

@endsection