@extends('layouts.app')

@section('title')

{{ $legal->name }}

@endsection

@section('style')


<link rel="stylesheet" href="{{ asset('xx/assets/css/plugins/swiper.min.css')}}">
<link rel="stylesheet" href="{{ asset('xx/assets/css/plugins/fontawesome-5.css')}}">
<link rel="stylesheet" href="{{ asset('xx/assets/css/plugins/unicons.css')}}">
<link rel="stylesheet" href="{{ asset('xx/assets/css/plugins/fancybox.min.css')}}">
<link rel="stylesheet" href="{{ asset('xx/assets/css/plugins/metismenu.css')}}">
<link rel="stylesheet" href="{{ asset('xx/assets/css/vendor/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('xx/assets/css/plugins/hover-revel.css')}}">
<link rel="stylesheet" href="{{ asset('xx/assets/css/plugins/animate.min.css')}}">
<link rel="stylesheet" href="{{ asset('xx/assets/css/style.css')}}">

@endsection

@extends('layouts.header')

@section('content')

@php $link = str_replace("\\", '/', $legal->photo); $title = "storage"."/".$link;   @endphp

<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style=" background-image: url({{url($title)}}); ">
    <div class="container">
        <div class="row align-items-center" style="margin-bottom: 132px;">
            <div class="col-12 text-center">
                <h4 class="title animated fadeIn sal-animate" style="color: white;" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">{{ $legal->name }}</h4>
                <p class="text-white">Edu Global Yurtdışı Programları ile sizleri #DünyayaBağlar</p>
            </div>
        </div>
    </div>
</div>

<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
    <div class="accordion-body mt-5 m-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 sayfa-bolum" id="page-text">
                    <aside>

                    {!! $legal->content !!}
                    
                    </aside>
                </div>
            </div>
        </div>

    </div>
</div>