@extends('layouts.app')

@section('title')

Ülkeler

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

@section('content')
@include('layouts.header')

	<!-- ########### Edvisor configuration ########### -->
    <!-- Load the Edvisor Widget from the CDN -->
    <script type='text/javascript' src='https://cdn.edvisor.io/b2c/edvisor-search.js'></script>
   <style>.edvisor_app-container div{background-color: '#000000' !important}</style><style>.edvisor_app-container a{color: '##000000' !important}</style><style>.edvisor_app-container button{color: '##000000' !important}</style><style>.edvisor_app-container div{font-family: 'Roboto'  !important}</style>
    <script type='text/javascript'>
      (function () {
        Edvisor.widgets.CourseSearchApp.newInstance().render({"agencyId":5568,"selector":"#api","startQuoteSelector":"#Modal","termsUrl":"http://goeduglobal.com/api/gizlilik-politikasi/","studentLanguage":"en","searchBySchool":false,"apiKey":"public_ec8150bb13679eedf63750617ddyj4l0","defaultGooglePlaceIds":["ChIJCzYy5IS16lQRQrfeQ5K5Oxw"],"defaultCourseCategoryIds":[],"collectLeadCustomInformationBeforeSearch":false,"leadCustomInformation":[],"requireStudentCurrentCountry":false,"requirePhoneNumber":false,"hideRegistrationButton":false,"registrationUrl":""})
      })()
    </script>
   
    <!-- Button triggering the Edvisor Widget -->


    <!-- Placeholder for edvisor widget -->

	

<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style=" background-image: url({{ url('xx/assets/images/breadcrumb/dilarama.jpeg')}}) ">
    <div class="container">
        <div class="row align-items-center" style="    margin-bottom: 132px;">
            <div class="col-12 text-center">
                <h4 class="title animated fadeIn sal-animate" style="color: white;" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Dil Okulu Arama</h4>
                <p class="text-white">Edu Global Yurtdışı Programları ile sizleri #DünyayaBağlar</p>
            </div>
        </div>
    </div>
</div>

<div class="rts-faq-area-one ptb--50 ">
    <div class="container">
        <div class="row g-6 align-items-center">
            <div class="col-lg-12 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="accordion-wrapper-area wrapper-area-inner">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              

                            <div id='Modal'></div>
    <div id='api'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection