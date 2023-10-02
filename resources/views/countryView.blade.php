@extends('layouts.app')

@section('title')

{{ $country->name }}

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style=" background-image: url('https://eduglobal.com.tr/assets/images/breadcrumb/kurumsal.webp');padding-top: 100px;">
    <div class="container">
        
        <div class="row align-items-center" style=" top: 138px;position: relative;">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <div class="col-md-12 school-info">
                    <div class="school-logo">
                        <img class="img-responsive" alt="">
                    </div>
                    <div class="school-head">
                        <h1 style="color:white">{{ $country->name }}</h1>
                        <h2><a href="16.html"><i class="ri-map-pin-2-line"></i> </a></h2>
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
                                        <i class="ri-map-pin-user-line"></i>
                                        <b>  Başkent: </b>
                                        <br> {{ $country->capital }}
                                    </td>
                                    <td>
                                        <i class="ri-map-pin-add-line"></i>
                                        <b>  Dil: </b>
                                        <br> {{ $country->language }}
                                    </td>
                                    <td>
                                        <i class="ri-compass-line"></i>
                                        <b>Nüfus: </b>
                                        <br>{{ $country->population }}
                                    </td>
                                    <td>
                                        <i class="ri-user-follow-line"></i>
                                        <b>  Para birimi:  </b>
                                        <br>{{ $country->currency }}
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

<div class="rts-service-details-area pt-5 bt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                <!-- service details left area start -->
                <div class="service-detials-step-1">
                    <div class="thumbnail mb--30 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <img src="<?=url('storage')?>/{{ $country->photo }}" alt="business-area">
                    </div>
                    <div class="row  mb--40 g-5  mb_sm--20">
                    </div>
                    <!-- accordion area faq -->
                    <div class="accordion-wrapper-area wrapper-area-inner">
                        <div class="accordion" id="accordionExample">                       
                            <div class="accordion-item">
                                <div id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="col-md-12" id="genel">
                                                {!! $country->content !!}
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
            <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 pl--50 pl_md--0 pl-lg-controler pl_sm--0">
                <!-- single wizered start -->
                <div class="rts-single-wized Categories service sal-animate" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                    <div class="wized-header">
                        <h5 class="title">
                            Başlıklar
                        </h5>
                    </div>
                    <div class="wized-body">
                            <!-- single categoris -->
                        <div class="col-md-12">
                            <ul id="sss">
                                {!! $country->titles !!}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="rts-single-wized Categories service sal-animate" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                    <div class="wized-header">
                        <h5 class="title">
                            Okullar
                        </h5>
                    </div>
                    <div class="wized-body">
                        <ul class="single-categories">
                            @foreach($country->schools as $school)
                                <li><a href="{{ route('schoolView', ['slug' => $school->slug ]) }}"> {{ $school->name }}  <i class="far fa-long-arrow-right"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="rts-single-wized contact service sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="wized-header">
                        <a href="#"><img src="{{ asset('assets/images/logo/eduglobal-logo-white.png') }}" alt="Business_logo"></a>
                    </div>
                    <div class="wized-body">
                        <p class="title">
                            Vakit Kaybetmeden
                            Hemen Başvur
                        </p>
                        <form action="/Default/Congr/" method="post" class="single-wized">

                            <div class="w3ls-bot">
                                <input type="submit" value="Başvur">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection