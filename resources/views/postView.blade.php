@extends('layouts.app')

@section('title')

{{ $post->title }}

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
@php $link = str_replace("\\", '/', $post->image); $title = "storage"."/".$link;   @endphp
<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style="background-image: url('{{ url($title) }}');">
    <div class="container">
        <div class="row align-items-center" style="    margin-bottom: 132px;">
            <div class="col-12 text-center">
                <h4 class="title animated fadeIn sal-animate" style="color: white;" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">{{ $post->title }}</h4>
                <p class="text-white">@if(isset($post->category->name )) {{ $post->category->name }} @endif</p>
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
                        <img src="<?=url('storage')?>/{{$post->image}}" alt="Business-Blog">
                    </div>
                    <div class="blog-listing-content">
                        <div class="user-info">
                            <div class="single">
                                <i class="far fa-user-circle"></i>
                                <span>Manager</span>
                            </div>
                            <div class="single">
                                <i class="far fa-clock"></i>
                                <span>{{ $post->created_at }} </span>
                            </div>
                        </div>
                        <h3 class="title">{{ $post->title}}</h3>
                        <p> {!! $post->body !!}</p>
                        <div class="row g-5">
                            <div class="col-lg-6 col-md-6">
                                <div class="thumbnail details">
                                    <img src="<?=url('storage')?>/{{ $post->image }}" alt="finbiz_buseness">
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
                        @foreach($last5post as $posts5)
                            @if($posts5->id != $post->id )
                                <div class="recent-post-single">
                                    <div class="thumbnail">
                                        <a href="{{ route('blogView', ['slug' => $posts5->slug ]) }}"><img style="max-width: 50px ;" src="<?=url('storage')?>/{{ $posts5->image }}" alt="Blog_post"></a>
                                    </div>
                                    <div class="content-area">
                                        <a class="post-title" href="{{ route('blogView', ['slug' => $posts5->slug ]) }}">
                                            <h5 class="title">{{ $posts5->title }}</h5>
                                        </a>
                                        <div class="user">
                                            <i class="fal fa-clock"></i>
                                            <span>{{ $posts5->created_at }}</span>
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