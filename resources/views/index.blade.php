@extends('layouts.app')

@section('title')

Anasayfa

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





<style>
    /* The Modal (background) */
    .ebcf_modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .ebcf_modal-content {
        margin: auto;
        padding: 20px;
        max-width: 610px;
    }

    /* The Close Button */
    .ebcf_close {
        color: #aaaaaa;
        float: right;
        right: 14px;
        font-size: 36px;
        position: relative;
        z-index: 99999999999999999999999999;
        font-weight: bold;
    }

    #popup {
    background-color: rgb(25, 25, 25);
    position: fixed;
    left: 0;
    top: 0;
    z-index: 1000;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: 500ms all;
    -webkit-transition: 500ms all;
    -moz-transition: 500ms all;
    -ms-transition: 500ms all;
    -o-transition: 500ms all;
    }
    #popup:target {
    opacity: 1;
    visibility: visible;
    }

    .popup {
    width: 335px;
    height: 600px;
    overflow: hidden;
    transform: scale(0.6);
    
    -moz-transform: scale(0.6);
    -ms-transform: scale(0.6);
    -o-transform: scale(0.6);
    transition: 500ms all;
    -webkit-transition: 500ms all;
    -moz-transition: 500ms all;
    -ms-transition: 500ms all;
    -o-transition: 500ms all;
    position: relative;
    }
    .popup-video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    }

    #popup:target .popup {
    transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    }

    aa i {
    font-size: 150px;
    transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    }
    aa i:hover {
    color: black;
    }

    .popup-close {
    position: absolute;
    color: #000;
    left: 50%;
    top: 10%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    }
    .popup-close i {
    color: black;
    font-size: 50px;
    transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    }
    .popup-close a i:hover {
    color: white;
    font-size: 70px;
    }

</style>


	
<!-- ########### Edvisor configuration ########### -->
<!-- Load the Edvisor Widget from the CDN -->
<script type='text/javascript' src='https://cdn.edvisor.io/b2c/edvisor-search.js'></script>
<script>
    var widget = Edvisor.widgets.StartQuoteModal.newInstance({"agencyId":5568,"startQuoteSelector":"#Modal","studentLanguage":"en","searchBySchool":false,"apiKey":"public_ec8150bb13679eedf63750617ddyj4l0","redirectUrl":"https://www.eduglobal.com.tr/edvisor","defaultGooglePlaceIds":["ChIJCzYy5IS16lQRQrfeQ5K5Oxw"],"defaultCourseCategoryIds":[],"collectLeadCustomInformationBeforeSearch":false,"requireStudentCurrentCountry":false,"requirePhoneNumber":false,"hideRegistrationButton":false,"registrationUrl":""})
</script>
<!-- ######### End Edvisor configuration ######### -->

<!-- Button triggering the Edvisor Widget -->
<style>.edvisor_app-container div{background-color: '#000000' !important}</style><style>.edvisor_app-container a{color: '##000000' !important}</style><style>.edvisor_app-container button{color: '##000000' !important}</style><style>.edvisor_app-container div{font-family: 'Roboto'  !important}</style>


<!-- Placeholder for edvisor widget -->
<div id='Modal'></div>
	

@endsection
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}" />
@include('layouts.header')
<video autoplay muted loop id="myVideo">
    <source src="{{ asset('assets/video/bg.mp4') }}" type="video/mp4">
</video>
<div class="container home-content" style="z-index:2;  position: relative; display: flex; justify-content: center; align-items: center;">
    <div class="search_container_block home_main_search_part main_search_block">
        <div class="main_inner_search_block">
            <div class="container">
                <div class="row">
                    <h4 class="text-white">Kolay Arama Yap, Sana Uygun Programı Bul;<span class="typed-words" style="color: goldenrod;"></span></h4>
                    <h5 class="text-white">
                        Edu Global ile Hayallerinizi Gerçekleştirin!
                    </h5>
                    <form action="{{ route('programsList') }}" id="programFilterForm" method="post">  
                        @csrf                          
                        <div class="col-md-12">
                            <div class="main_input_search_part">
                                <div class="main_input_search_part_item intro-search-field">
                                    <select required class="form-control" id="DrpProgram" name="DrpProgram">
                                        <option value="">Program Seçin</option>
                                        <option value="5">Lisans</option>
                                        <option value="6">Yüksek Lisans</option>
                                        <option value="7">Sertifika Eğitimi</option>
                                        <option value="8">Work & Study</option>
                                    </select>
                                </div>
                                <div class="main_input_search_part_item intro-search-field">
                                    <select required class="form-control" id="DrpUlke" name="DrpUlke">
                                        <option value="">Ülke Seçin</option>
                                    </select>

                                </div>
                                <div class="main_input_search_part_item intro-search-field">
                                    <select required class="form-control" id="DrpLang" name="DrpLang">
                                        <option value="">Dil Seçin</option>
                                    </select>
                                </div>

                                <div class="main_input_search_part_item intro-search-field">
                                    <select required class="form-control" id="DrpBolum" name="DrpBolum">
                                        <option value="">Bölüm Seçin</option>
                                    </select>
                                </div>
                                <button id="prgList"  type="submit" class="rts-btn btn-secondary call-btn aramabuton">Bul</button>
                            </div>
                        </div>
                    </form>

                    <h5 class="text-white" style="padding-top: 5%; padding-bottom: 5%">
                        Dil Okulu Arama!
                        <button type="submit" onClick='widget.render()'  class="rts-btn btn-secondary call-btn aramabuton">Bul</button>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="row col-12">
            <div class="col-3">
                <div class="single-working-process-one">
                    <div class="inner text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <img class="logo" src="{{ asset('assets/images/logo/step1.svg')}}" alt="process-logo" style="max-width: 100px; padding: 10px;">
                        <h5 class="title" style="color: #002548; font-size: 15px;">
                            Sana Uygun Programı Bul
                        </h5>

                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="single-working-process-one">
                    <div class="inner text-center" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <img class="logo" src="{{ asset('assets/images/logo/step2.svg')}}" alt="process-logo" style="max-width: 100px; padding: 10px;">
                        <h5 class="title" style="color: #002548; font-size: 15px;">
                            Okulunu Seç
                        </h5>

                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="single-working-process-one">
                    <div class="inner text-center" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                        <img class="logo" src="{{ asset('assets/images/logo/step3.svg')}}" alt="process-logo" style="max-width: 100px; padding: 10px;">
                        <h5 class="title" style="color: #002548; font-size: 15px;">
                            Başvurunu Yap
                        </h5>

                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="single-working-process-one">
                    <div class="inner text-center" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                        <img class="logo" src="assets/images/logo/step4.svg" alt="process-logo" style="max-width: 100px; padding: 10px;">
                        <h5 class="title" style="color: #002548; font-size: 15px;">
                            Hepsi Bu kadar
                        </h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-appoinment-area rts-section-gapTop pb--90 rts-appoinment-bg">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 pl--20 mt_md--30 mt_sm--30">
                <div class="appoinment-right">
                    <div class="title-area text-start">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            Yurt Dışı Eğitim Programları ile
                        </span>
                        <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            Seni Dünya'ya Bağlar!
                        </h3>
                    </div>
                    <div class="counter-wrapper-appoinment">
                        <div class="counter-single sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title"><span class="counter plus animated fadeInDownBig">10</span></h2>
                            <p class="disc">Yıl Tecrübe</p>
                        </div>
                        <div class="counter-single sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title"><span class="counter plus animated fadeInDownBig">1200</span></h2>
                            <p class="disc">Öğrenci</p>
                        </div>
                        <div class="counter-single sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <h2 class="title"><span class="counter plus animated fadeInDownBig">500</span></h2>
                            <p class="disc">Eğitim Kurumu</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 pr--40 pr_md--0 pr_sm--10">
                <!-- appoinment wrapper start -->
                <form id="homeForm" method="POST" class="rts-appoinment-form">
                    <div class="inner">
                        <div class="title-area text-start">
                            <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Hızlı Başvuru</span>
                            <h4 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Sizi Arayalım</h4>
                        </div>
                        <input type="text" name="name" id="name2"  placeholder="İsim" required>
                        <input type="email" name="email" id="email2"  placeholder="E-posta" required>
                        <input type="text" name="program"  id="program2"  placeholder="Program" required>
                        <input type="text" name="phone" id="phone2" placeholder="Telefon" required>
                        <button id="gonder2" type="submit" class="rts-btn btn-primary">Gönder</button>
                    </div>
                </form>
                <!-- appoinment wrapper end -->
            </div>

        </div>
    </div>
</div>

<div class="rts-about-us-area ptb--100" style="background:white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="thumbnail" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <img src="{{ asset('assets/images/about-us/01.jpg') }}" alt="creative_about">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-right-one-area">
                    <div class="title-area">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Eduglobal Hakkında</span>
                        <h3 class="title" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            Bizi Yakından Tanıyın
                        </h3>
                    </div>
                    <p class="disc" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        Edu Global T&#252;rkiye ailesi olarak sizlere Yurtdışı Dil Eğitimi Danışmanlığı konusunda sizlere T&#252;rki&#39;yenin ilk ve tek Yurtdışı dil eğitim platformunu sunuyoruz. Compass International olarak 2012 yılında Varşova’da başlayan yolculuğumuza, Polonya K&#252;lt&#252;r’e İstanbul’da eşlik etmenin ardından yenilenen y&#252;z&#252;m&#252;zle Bursa, İstanbul, İzmir, Gaziantep&#39;te ofislerimize hizmetimizi bir adım &#246;teye taşıyoruz. Bilgi, birikim ve tecr&#252;belerimizi &#246;ğrencilerimizle paylaşarak onlara yol arkadaşı oluyoruz. 17 &#252;lkede Dil Eğitimi, &#220;niversite, Staj ve Work and Travel i&#231;in hizmet vermeye devam ederken, aynı zamanda s&#252;rekli yenilenen websitemiz ve portalımızla beraber sekt&#246;r&#252;n ilk dijital yurtdışı eğitim danışmanlığı hizmetini vermekteyiz.
                    </p>
                    
                    <div class="button-area" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                        <a href="{{ route('aboutUs') }}" class="rts-btn btn-primary">Devamı</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-service-area bg-light ptb--30 service-bg_shape">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="appoinment-area-one ">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="appoinment-left">
                                <div class="title-area">
                                    <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                       Instagramda Biz!
									   <br>
									   <br>
                                    </span>
                                    <div class="communicate-area" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800"><!-- SnapWidget -->
                                    <iframe src="https://snapwidget.com/embed/1026688" class="snapwidget-widget d-none d-lg-block d-xl-block d-md-block " allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:765px; height:410px"></iframe>
                                    <iframe src="https://snapwidget.com/embed/1026688" class="snapwidget-widget d-block d-sm-none" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:765px; height:219px"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="appoinment-right">
                                <div class=" widget-list-wrapper type1">
                                    <h3 class="list-title">ÖNE ÇIKAN HABERLER</h3>
                                    <ul>
                                        @foreach($news as $new)
                                            <li>
                                                <a href="{{ route('newView', ['slug' => $new->slug]) }}" class="gtm-tracker" target="_blank" title=" Etiyopya&#39;da i&#231; savaşın bedelini &#246;deyen &#231;ocuk...">
                                                        {{ $new->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                        
                                    </ul>
                                    
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="button-area sal-animate title-area text-center" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800" style="margin-top: -30px;margin-left: 460px;">
                            <a href="{{ route('news') }}" class="rts-btn btn-primary">Tümünü gör</a>
                        </div>
                    </div>
                </div>
                <div class="appoinment-shape">
                    <img class="shape-1 shape" src="{{ asset('assets/images/appoinment/shape/01.png')}}" alt="appoinmtnt_shape" data-sal-delay="250" data-sal="slide-right" data-sal-duration="600">
                    <img class="shape shape-2" src="{{ asset('assets/images/appoinment/shape/02.png')}}" alt="appoinmtnt_shape" data-sal-delay="150" data-sal="slide-right" data-sal-duration="800">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-team-section ptb--60" style="background:white">
    <div class="container container-2">
        <div class="row mb--30">
            <div class="col-12">
                <div class="title-area text-center">
                    <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Eduglobal</span>
                    <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        Öne Çıkan Okullar
                    </h3>
                </div>
            </div>
        </div>
        <div class="row g-6">
            <div class="col-12">
                <div class="swiper team-one-swiper" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="swiper-wrapper">
                        @foreach($schools as $school)
                            <div class="swiper-slide">
                                <div class="single-team-one">
                                    <img src="<?=url('storage')?>/{{ $school->photo }}" alt="team_image" style="width: 103%; height: 310px;">
                                    <div class="inner-content">
                                        <div class="main-wrapper">
                                            <a href="{{ route('schoolView', ['slug' => $school->slug]) }}">
                                                <h5 class="title">
                                                    {{ $school->name }}
                                                </h5>
                                            </a>
                                            <span>{{ $school->country->name }}</span>
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

<div class="rts-testimonial-area-one">
    <div class="bg-light-testimonial  ptb--60">
        <div class="container container">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area-testi">
                        <div class="title-area text-start">
                            <span data-sal-delay="150" data-sal="slide-up" >Eduglobal'den Bahsedenler</span>
                            <h3 class="title" data-sal-delay="250" data-sal="slide-up" >
                                Öğrenci Yorumları
                            </h3>
                        </div>
                        <div class="swiper-button-wrapper">
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                        </div>
                    </div>
                </div>
            </div>
			
			
            <div class="row">
                <div class="col-12">
                    <div class="slide-div">
                        <div class="swiper testimonial-1">
                            <div class="swiper-wrapper">
                                @foreach($comments as $comment)
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-one">
                                            <div class="header-area">
                                                <img src="<?=url('storage')?>/{{ $comment->photo }}" style="width:40px" alt="testimonials">
                                                <div class="name-desig">
                                                    <a href="#">
                                                        <h6>{{ $comment->name }}</h6>
                                                    </a>
                                                    <p>
                                                        Program <span>
                                                            {{ $comment->program }}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="body" style="height:190px;"id="long-{{$comment->id}}">
                                            <p class="disc"  id="long-{{$comment->id}}">
                                                    {{ $comment->comment }}    
                                                </p>

                                               
                                            </div>

                                                
                                            @if(isset($comment->link))       
                                                <div class="footer">

                                                    <div class="logo">
                                                            <p> 
                                                                <a href="#popup" data-id="{{ $comment->link }}" id="popup-video-link">
                                                                    <img src="https://www.iconpacks.net/icons/1/free-video-icon-818-thumb.png" alt="EduGlobal" style="max-width: 40px;"> 
                                                                    Yorumu İzle
                                                                </a>
                                                            </p>
                                                    </div>
                                                </div>
                                            @endif
                                            
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

<div class="rts-blog-post-area shape-blog-one ptb--30">
    <div class="container">
        <div class="row mb--30">
            <div class="col-12">
                <div class="title-area text-center">
                    <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Sizler için özel hazırladığımız içeriklerimiz..</span>
                    <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        EduGlobal #Blog
                    </h3>
                </div>
            </div>
        </div>

        <section class="cards-wrapper">
            @foreach($blogs as $blog)
                <div class="card-grid-space">
                    @php $link = "storage/" . $blog->image; @endphp
                    <a class="card" href="{{ route('blogView', ['slug' => $blog->slug ]) }}" style="--bg-img: url({{url($link)}})">
                        <div class="card-yazi">
                            <h1>
                                {{$blog->title }}
                            </h1>
                        </div>
                    </a>
                </div>
            @endforeach
       
        </section>

 <div class="button-area sal-animate title-area text-center" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800" style="margin-top: -30px;">
                        <a href="{{ route('blogs') }}" class="rts-btn btn-primary">Tümünü gör</a>
                    </div>
    </div>
</div>



<div id="mySizeChart1Modal" class="ebcf_modal" style="z-index: 9989999999999999999999;">
    <div class="ebcf_modal-content">
        <span class="ebcf_close">&times;</span>
        <form id="modalForm" class="rts-appoinment-form" method="POST">
            <div class="inner mx-auto" style="border-radius:15px!important; margin-left:auto; margin-right:auto;">
                <div class="title-area text-start">
                    <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate">Hızlı Başvuru</span>
                    <h4 class="title sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Sizi Arayalım</h4>
                </div>
                <div>
                    <input type="text" class="w-100" id="name1" name="name" placeholder="İsim" required="">
                    <input type="email" class="w-100" id="email1" name="email" placeholder="E-posta" required="">
                    <input type="text" class="w-100" id="program1" name="program" placeholder="Program" required="">
                    <input type="text" class="w-100" id="phone1" name="phone" placeholder="Telefon" required="">
                    <button type="submit" id="gonder1" class="rts-btn btn-primary w-100">Gönder</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="popup">
    <div class="popup">
    <iframe
        class="popup-video"
        src=""
        height="100%"
        allowfullscreen="allowfullscreen"
    ></iframe>
    </div>

    <div class="popup-close">
    <a id="pauseVideo" href="#top">
        <i style="color:#e4b518" class="fas fa-times-circle"></i>
    </a>
    </div>
</div>

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    $("#gonder2").click(function(e){
       e.preventDefault();

       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        var name = $('#name2').val();
        var email = $('#email2').val();
        var program = $('#program2').val();
        var phone = $('#phone2').val();

        $.ajax({
            type:'POST',
            url:"{{ route('contactPost') }}",
            data:{
                name:name,
                email:email,
                program:program,
                phone:phone
            },
            success:function(data){
                $('#homeForm').trigger("reset");
                swal("Başarılı!", "Başvurunuz gönderildi. Size en yakın sürede ulaşacağız.", "success");
            }
        });
    });

</script>

<script>

    $("#gonder1").click(function(e){
       e.preventDefault();

       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        var name = $('#name1').val();
        var email = $('#email1').val();
        var program = $('#program1').val();
        var phone = $('#phone1').val();

        $.ajax({
            type:'POST',
            url:"{{ route('contactPost') }}",
            data:{
                name:name,
                email:email,
                program:program,
                phone:phone
            },
            success:function(data){
                $('#contactForm').trigger("reset");
                $('#mySizeChartModal').hide();
                swal("Başarılı!", "Başvurunuz gönderildi. Size en yakın sürede ulaşacağız.", "success");
            }
        });
    });

</script>

<script>
    $(document).ready(function () {
      var block = $('#DrpProgram')
      $('#DrpProgram').change(function(){
        var id = $(this).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'get-countries/' + id,
            method: 'get',
            success: function (result) {
              if (result) {
                  $('#DrpUlke').empty()
                  $('#DrpUlke').append('<option value="" disabled selected>Ülke Seçin</option>')
                  $.each(result, function (key, country) {
                      $('#DrpUlke').append('<option value="' + key +
                          '">' + country + '</option>')
                  })
              } else {
                  $('#DrpUlke').empty();
              }
            }
          })
        })
      });
</script>

<script>
    $(document).ready(function () {
      var block2 = $('#DrpUlke')
      $('#DrpUlke').change(function(){
        let id = $('#DrpUlke').val();
        let id2 = $('#DrpProgram').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '{{ route('getLanguages')}}',
            method: 'POST',
            data:{
                id:id,
                id2:id2
            },
            success: function (result) {
              if (result) {
                  $('#DrpLang').empty()
                  $('#DrpLang').append('<option value="" disabled selected>Dil Seçin</option>')
                  $.each(result, function (country, key) {
                      $('#DrpLang').append('<option value="' + key.language +
                          '">' + key.language + '</option>')
                  })
              } else {
                  $('#DrpLang').empty()
              }
            }
          })
        })
      });
</script>

<script>
    $(document).ready(function () {
      var block3 = $('#DrpLang')
      $('#DrpLang').change(function(){
        let id = $('#DrpUlke').val();
        let id2 = $('#DrpProgram').val();
        let id3 = $('#DrpLang').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '{{ route('getParts')}}',
            method: 'POST',
            data:{
                id:id,
                id2:id2,
                id3:id3
            },
            success: function (result) {
              if (result != "") {
                  $('#DrpBolum').empty()
                  $('#DrpBolum').append('<option value="" disabled selected>Bölüm Seçin</option>')
                  $.each(result, function (country, key) {
                      $('#DrpBolum').append('<option value="' + key.part +
                          '">' + key.part + '</option>')
                  })
              } else {
                  $('#DrpBolum').empty();
                  $('#DrpBolum').append('<option value="" disabled selected>Bölüm Seçin</option>')
                  $('#DrpBolum').append('<option value="" disabled selected>Bu kriterlerde bölüm bulunamadı</option>')
              }
            }
          })
        })
      });
</script>


<script>
    $('.ebcf_close').click(function () {
        $('#mySizeChartModal').hide();
    });


    var ebModal = document.getElementById('mySizeChartModal');

    // Get the button that opens the modal
    var ebBtn = document.getElementById("mySizeChart");

    // Get the <span> element that closes the modal
    var ebSpan = document.getElementsByClassName("ebcf_close")[0];

    // When the user clicks the button, open the modal
    ebBtn.onclick = function () {
        ebModal.style.display = "block";
    }


    document.getElementsByClassName('.hemenbasvur')[0].onclick = function () {
        ebModal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    ebSpan.onclick = function () {
        ebModal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == ebModal) {
            ebModal.style.display = "none";
        }
    }
</script>

<script>

    $(document).on('click', '#popup-video-link',function(){
        $('.popup-video').removeAttr('src');
        $('.popup-video').attr("src", $(this).data('id'));
    });

    $(document).on('click', '#pauseVideo', function(){
        $('.popup-video').removeAttr('src');
    });
</script>

<script>
    $(document).on('click', '#comment1',function(){
        id = $(this).data("id");
        $("#short-" + id).hide();
        $("#long-" + id).show();
    });
</script>

@endsection

@endsection