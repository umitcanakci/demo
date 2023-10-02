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

@extends('layouts.header')

@section('content')

<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style=" background-image: url({{ url('xx/assets/images/breadcrumb/hakkimizda.jpeg')}}) ">
    <div class="container">
        <div class="row align-items-center" style="    margin-bottom: 132px;">
            <div class="col-12 text-center">
                <h4 class="title animated fadeIn sal-animate" style="color: white;" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Kurumsal</h4>
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
                                <h5 style="margin-left: 29px;padding-top: 16px;">
                                    Hakkımızda
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample"><img style="float: right;padding: 10px;" src="{{ url('xx/assets/images/faq/01.jpg') }}" alt="faq_image" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate">
                                    <div class="accordion-body">
                                        Edu Global ailesi olarak sizlere Yurtdışı Dil Eğitimi Danışmanlığı konusunda  Türkiye'nin ilk ve tek Yurtdışı dil eğitim platformunu sunuyoruz.
                                        Compass International olarak 2012 yılında Varşova’da başlayan yolculuğumuza, Polonya Kültür’e İstanbul’da eşlik etmenin ardından yenilenen yüzümüzle Bursa, İstanbul, İzmir, Gaziantep'te ofislerimize hizmetimizi bir adım öteye taşıyoruz. Bilgi, birikim ve tecrübelerimizi öğrencilerimizle paylaşarak onlara yol arkadaşı oluyoruz. 17 ülkede Dil Eğitimi, Üniversite, Staj ve Work and Travel için hizmet vermeye devam ederken, aynı zamanda sürekli yenilenen websitemiz ve portalımızla beraber sektörün ilk dijital yurtdışı eğitim danışmanlığı hizmetini vermekteyiz. 
                                        <br>
                                        Artık öğrencilerimize tamamen online bir şekilde okullara başvuru imkanı sunuyoruz.
                                        Öğrencilerimiz portaldan başlattıkları başvuru süreçleri ofislerimizden devam ettirebiliyor, yurtdışında eğitim almış uzman danışman kadromuzla tüm süreçte yanınızda yer alıyoruz. Yıllardır yurtdışı eğitim danışmanlığı konusunda edindiğimiz deneyimle, başvuru sürecinden eğitiminizi tamamlayacağınız ana kadar EduGlobal olarak yanınızda olmaktan mutluluk duymaya devam edeceğiz.
                                    </div>
                                    <h5 style="padding-left: 25px;">
                                        Misyonumuz
                                    </h5>
                                    <div class="accordion-body">
                                        Alanında uzman ekibimiz ve çözüm ortaklarımız ile beraber, bireyin kariyer planlamasından başlayıp, bu planın devam eden her aşamasında takip ve desteğimizi sürdürmek; bireye özel hizmet anlayışımızı korumak ve sürekli gelişen bir kuruluş olmaktır.
                                    </div>
                                    <h5 style="padding-left: 25px;">
                                        Vizyonumuz
                                    </h5>
                                    <div class="accordion-body">
                                        Beklentilerinizi yerine getirmek, amacımız olmaya devam edecektir. Güven, saygı, sevgi ve iletişimden ödün vermeyeceğimiz, sürekli geliştirmeye devam edeceğimiz altyapımız ve bağlantılarımız ile sizin için en verimli olacak eğitim programlarında yanınızda yer almaya devam edeceğiz.
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