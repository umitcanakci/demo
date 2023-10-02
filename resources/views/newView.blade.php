@extends('layouts.app')

@section('title')


{{ $new->title}} - Haber

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
@php $link = str_replace("\\", '/', $new->photo); $title = "storage"."/".$link;   @endphp
<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style="background-image: url('{{ url($title) }}');">
    <div class="container">
        <div class="row align-items-center" style="    margin-bottom: 132px;">
            <div class="col-12 text-center">
                <h4 class="title animated fadeIn sal-animate" style="color: white;" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">{{ $new->title}}</h4>
                <p class="text-white">{{ $new->hashtag }}</p>
            </div>
        </div>
    </div>
</div>


<div class="rts-blog-list-area  mt--50 " style="background: #f6f9fa;">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                <div class="blog-single-post-listing details mb--30">
                    <div class="thumbnail">
                        <img src="<?=url('storage')?>/{{$new->photo}}" alt="Business-Blog">
                    </div>
                    <div class="blog-listing-content">
                        <div class="user-info">
                            <!-- <div class="single">
                                <i class="far fa-user-circle"></i>
                                <span>Manager</span>
                            </div> -->
                            <div class="single">
                                <i class="far fa-clock"></i>
                                <span>{{ $new->created_at }} </span>
                            </div>
                        </div>
                        <h3 class="title">{{ $new->title}}</h3>
                        <p> {!! $new->content !!}</p>
                        <div class="row g-5">
                            <div class="col-lg-6 col-md-6">
                                <div class="thumbnail details">
                                    <img src="<?=url('storage')?>/{{ $new->photo }}" alt="finbiz_buseness">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12 col-sm-12 col-12">
                <div class="rts-single-wized Recent-post sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="wized-header">
                        <h5 class="title">
                            Bizden Haberler
                        </h5>
                    </div>
                    <div class="wized-body">
                        @foreach($last5new as $news5)
                            @if($news5->id != $new->id )
                                <div class="recent-post-single">
                                    <div class="thumbnail">
                                        <a href="{{ route('newView', ['slug' => $news5->slug ]) }}"><img style="max-width: 50px ;" src="<?=url('storage')?>/{{ $news5->photo }}" alt="Blog_post"></a>
                                    </div>
                                    <div class="content-area">
                                        <a class="post-title" href="{{ route('newView', ['slug' => $news5->slug ]) }}">
                                            <h5 class="title">{{ $news5->title }}</h5>
                                        </a>
                                        <div class="user">
                                            <i class="fal fa-clock"></i>
                                            <span>{{ $news5->created_at }}</span>
                                        </div>

                                    </div>
                                </div>
                            @endif
                        @endforeach
                        
                        
                    </div>
                </div>
            </div>
            <!-- rts- blog wizered end area -->
        </div>
    </div>
</div>
<!-- rts blog mlist area End -->