@extends('layouts.app')

@section('title')

Profilim

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

<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style=" background-image: url({{url('assets/images/breadcrumb/stafford.jpeg')}});">
    <div class="container">
        <h4 class="text-white" style="display:none"><span class="typed-words"></span></h4>
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h4 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" style="color: honeydew;">Mesajlaşma - {{ $message->receive->name }}
            </div>
        </div>
    </div>
</div>

<div class="rts-service-details-area pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        @if (is_array(session('success')))
                            @foreach (session('success') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @else
                            {{ session('success') }}
                        @endif
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-warning">
                        @if (is_array(session('error')))
                            @foreach (session('error') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                            </ul>
                        @else
                            {{ session('error') }}
                        @endif
                    </div>
                @endif
                <!-- service details left area start -->
                <div class="service-detials-step-1">
                    <div class="accordion-wrapper-area wrapper-area-inner">
                        <div class="accordion" id="accordionExample">
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button disabled>
                                       Mesajlaşma
                                    </button>
                                </h2>
                                
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label style="color:black" for="name">Danışman Ad Soyadı</label>
                                                    <p>{{ $message->receive->name }}</p>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label style="color:black" for="email">Konu</label>
                                                    <p>{{ $message->subject }}</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label style="color:black" for="name">Mesajınız</label>
                                                    <p>{!! $message->message !!}</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label style="color:black" for="name">Yanıt</label>
                                                    <p>{!! $message->answer !!}</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <a class="btn btn-xl btn-success" href="{{ route('profile') }}">Yeni Bir Talep Oluştur</a>

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

@endsection