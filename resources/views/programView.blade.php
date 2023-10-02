@extends('layouts.app')

@section('title')

{{ $program->name }}

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
@php $link = str_replace("\\", '/', $program->school->photo); $title = "storage"."/".$link;   @endphp
<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style="background-image: url({{ url($title) }});padding-top: 100px;">
    <div class="container">
        <h4 class="text-white" style="display:none"><span class="typed-words">Dil Oku</span><span class="typed-cursor">|</span></h4>
        
        <div class="row align-items-center" style="top: 147px; position: relative;">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <div class="col-md-12 school-info">
                    <div class="school-logo">
                        <img class="img-responsive" alt="">
                    </div>
                    <div class="school-head">
                        <h1>{{ $program->name }}</h1>
                        <h2><a href="#"> {{ $program->school->country->name }} </a></h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="col-md-12">
                    <div class="school-history">
                        <table>
                            <tbody><tr>
                                <td>
                                    <i class="ri-compass-line"></i>
                                    <b>Ülke : </b>
                                    <br>
                                    {{ $program->school->country->name }}


                                </td>
                                <td>
                                    <i class="ri-map-pin-user-line"></i>
                                    <b>  Program Türü : </b>
                                    <br> {{$program->programCategory->name }}
                                </td>
                                <td>
                                    <i class="ri-map-pin-add-line"></i>
                                    <b>  Dil : </b>
                                    <br> {{$program->language }}
                                </td>
                                <td>
                                    <i class="ri-user-follow-line"></i>
                                    <b>  Bölüm : </b>
                                    <br>
                                    {{$program->part }}

                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<div class="rts-service-details-area ptb--50 ">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-md-12 col-sm-12 col-12">
                <!-- service details left area start -->
                    <div class="service-detials-step-1">
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
                                            {!! $program->overview !!}							 
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>02.</span> Özellikler
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="school-article">
                                                <div class="col-md-12" id="bilgiler">
                                                    {!! $program->features !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span>03.</span> Ek Ücretler
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="col-md-12" id="programlar">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            @foreach($program->extrapays as $extrapay)
                                                                <div class="col-md-6 search-list-item-content">
                                                                    <div class="row konaklama-list service-details-card">
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-md-12 search-list-item-detail">
                                                                                    <p><b>{{ $extrapay->name }}  : </b> <br><i class="ri-global-line"></i> {{ $extrapay->price }}</p>
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

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <span>04.</span> Ek Hizmetler
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="col-md-12" id="programlar">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                    </div>

                                                    <div class="col-md-12 ">
                                                        <div class="row">
                                                            @foreach($program->extraservices as $extraservice)
                                                                <div class="col-md-6 search-list-item-content">
                                                                    <div class="row konaklama-list service-details-card">
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-md-12 search-list-item-detail">
                                                                                    <p><b>{{ $extraservice->name }}: </b><i class="ri-global-line"></i><br>{{ $extraservice->price }}</p>
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

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <span>05.</span> Konaklama
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="col-md-12" id="programlar">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                                <div class="col-md-12 search-list-item-content">
                                                                    <div class="row">
                                                                        @foreach($program->tostays as $tostay)
                                                                        <div class="col-md-6">
                                                                            <div class="row konaklama-list service-details-card">
                                                                                <div class="col-md-12 search-list-item-detail" >
                                                                                    <p><b>Konaklama Özellikleri : </b><br> {{$tostay->name}} </p>
                                                                                    <p><b>Fiyat : </b><i class="ri-checkbox-circle-line"></i> {{ $tostay->price }}</p>
                                                                                    <p><b>Zaman : </b><i class="ri-calendar-check-line"></i> {{ $tostay->time }}</p>
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

                                

                                

                            </div>
                        </div>
                        <!-- accordion area faq end -->
                    </div>
            </div>
            <!--rts blog wizered area -->
            <div class="col-xl-3 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_md--0 pl-lg-controler pl_sm--0">
                    <div class="rts-single-wized contact service sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="wized-header">
                            <a href="#"><img src="{{ asset('assets/images/logo/eduglobal-logo-white.png')}}" alt="eduglobal"></a>
                        </div>
                        <div class="wized-body">
                            <p class="title">
                                Vakit Kaybetmeden
                                Hemen Başvur
                            </p>



                            <div class="w3ls-bot">
                                @guest
                                    <a class="rts-btn btn-secondary call-btn" href="" type="submit" value="Başvur">Üye Ol</a>
                                @endguest

                                @auth
                                    <form action="{{ route('newApplication') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="program_id" value="{{ $program->id }}">
                                        <button type="submit" class="rts-btn btn-secondary call-btn" href="{{ route('applyProgram') }}" value="Başvur">Başvur</button>
                                    </form>
                                @endauth
                            </div>
                            
                        </div>
                    </div>
                

                <!-- single wizered End -->
            </div>
            <!-- rts- blog wizered end area -->
        </div>
    </div>
</div>
@endsection