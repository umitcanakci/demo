@extends('layouts.app')

@section('title')

Haberler

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
            <h4 class="title sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" style="color: white;">Haberler #eduglobal</h4>
        </div>
        <h4 class="text-white" style="display:none"><span class="typed-words">Lisans</span><span class="typed-cursor typed-cursor--blink">|</span></h4>
    </div>
</div>
    <!-- end breadcrumb area -->

    <!-- rts blog grid area -->
    <div class="rts-blog-grid-area ptb--50">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12 pr--40 pr_md--0 pr_sm-controler--0">
                    <div class="row g-5">
                        @foreach($news as $new)
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12" data-sal-delay="150"  data-sal-duration="800">
                            <!-- start blog grid inner -->
                            <div class="blog-grid-inner">
                                <div class="blog-header">
                                    <a class="thumbnail" href="{{ route('newView', ['slug' => $new->slug]) }}">
                                        @php $link = "storage/" . $new->photo; @endphp
                                        <img src="{{url($link)}}" alt="Business_Blog">
                                    </a>
                                    <div class="blog-info">
                                        <div class="user">
                                            
                                        </div>
                                        <div class="user">
                                            <i class="fal fa-tags"></i>
                                            <span>{{ $new->hashtag }}</span>
                                        </div>
                                    </div>
                                    <div class="date">
                                        <span class="title">{{ $new->created_at->format('d/m/Y') }}</span>
                                    </div>
                                </div>
                                <div class="blog-body">
                                    <a href="{{ route('newView', ['slug' => $new->slug]) }}">
                                        <h5 class="title">
                                            {{ $new->title }}
                                        </h5>
                                    </a>
                                </div>
                            </div>
                            <!-- end blog grid inner -->
                        </div>
                        @endforeach
                    </div>
                    
                    <!-- pagination area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts blog grid area end -->

</div>



@section('js')

@endsection

@endsection