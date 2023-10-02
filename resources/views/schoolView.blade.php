@extends('layouts.app')

@section('title')

{{ $school->name }}

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

@extends('layouts.header')

@section('content')
@php $link = str_replace("\\", '/', $school->photo); $title = "storage"."/".$link;   @endphp
<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style="background-image: url('{{ url($title) }}');background-blend-mode: multiply;background-color: #8c8c8c; padding-top: 100px;">
    <div class="container">
        <h4 class="text-white" style="display:none"><span class="typed-words"></span><span class="typed-cursor typed-cursor--blink">|</span></h4>
        <div class="row align-items-center" style="top: 140px;position: relative;">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <div class="col-md-12 school-info">
                    <div class="school-logo">
                        <img src="<?=url('storage')?>/{{ $school->logo }}" class="img-responsive" alt="">
                    </div>
                    <div class="school-head">
                        <h1>{{ $school->name }}</h1>
                        <h2><a href="{{ route('countryView', ['slug' => $school->country->name ]) }}"><i class="ri-map-pin-2-line"></i> {{ $school->country->name }}</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="col-md-12">
                    <div class="school-history">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <i class="ri-compass-line"></i>
                                        <b>Ülke : </b>
                                        <br>
                                        {{ $school->country->name }}
                                    </td>
                                    <td>
                                        <i class="ri-map-pin-user-line"></i>
                                        <b>  Şehir : </b>
                                        <br> {{ $school->city }}
                                    </td>
                                    <td>
                                        <i class="ri-map-pin-add-line"></i>
                                        <b>  Lokasyon : </b>
                                        <br> {{ $school->location }}
                                    </td>
                                    <td>
                                        <i class="ri-user-follow-line"></i>
                                        <b>  Alt Yaş Sınırı : </b>
                                        <br>
                                        {{ $school->lower_age_limit }}
                                    </td>
                                </tr>
                         </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="rts-service-details-area pt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                <!-- service details left area start -->
                <div class="service-detials-step-1">
                    <div class="thumbnail mb--30 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <img src="<?=url('storage')?>/{{ $school->photo }}" alt="business-area">
                    </div>
                    <div class="row  mb--40 g-5  mb_sm--20">
                    </div>
                    <!-- accordion area faq -->
                    <div class="accordion-wrapper-area wrapper-area-inner">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>01.</span> Genel Bakış
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        
                                        {!! $school->overview !!}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        <span>02.</span> Özellikler
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="school-article">
                                            {!! $school->features !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span>03.</span> Programlar
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="col-md-12" id="programlar">
                                            <div class="row">
                                                @foreach($school->programs as $program)
                                                    <div class="col-md-12 search-list-item">
                                                        <div class="row">
                                                            <div class="col-md-4 search-list-item-gallery">
                                                                <img src="{{ asset('assets/images/default-program.jpg') }}" class="img-responsive" alt="Genel İngilizce">
                                                            </div>
                                                            <div class="col-md-8 search-list-item-content">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h3 class="animated fadeIn">{{ $program->name }}</h3>
                                                                        <h4>Okul : {{ $program->school->name }}</h4>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-8 search-list-item-detail">
                                                                                <p>Dil : <i class="ri-global-line"></i> {{ $program->language }}</p>
                                                                                <p>Ülke : <i class="ri-map-pin-2-line"></i> {{ $program->school->country->name }}</p>
                                                                                <p>Program : <i class="ri-checkbox-circle-line"></i> {{ $program->part }}</p>
                                                                                <p>Süre : <i class="ri-calendar-check-line"></i> {{ $program->program_time }}</p>
                                                                            </div>
                                                                            <div class="col-md-4 search-list-item-price">
                                                                                <h5> {{ $program->price }}  </h5>
                                                                                <p>Fiyat /  Hafta</p>
                                                                                <a href="{{ route('programView', ['slug' => $program->slug ]) }}" target="_blank">Detaylı Bilgi <i class="ri-arrow-right-line"></i></a>
                                                                            </div>
                                                                        </div>
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
                </div>
            </div>
            <!--rts blog wizered area -->
            <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_md--0 pl-lg-controler pl_sm--0">
                <!-- single wizered start -->

                <div class="rts-single-wized Categories service sal-animate" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                    <div class="wized-header">
                        <h5 class="title">
                            Programlar
                        </h5>
                    </div>
                <div class="wized-body">
                    <!-- single categoris -->

                        <ul class="single-categories">
                            @foreach($school->programs as $program)
                                <li><a href="{{ route('programView', ['slug' => $program->slug ]) }}">{{ $program->name }} <i class="far fa-long-arrow-right"></i></a></li>
                            @endforeach
                        </ul>

                </div>
            </div>
            
        </div>
    </div>
</div>


@endsection
