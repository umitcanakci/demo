@extends('layouts.app')

@section('title')

Başvuru

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

input[type=checkbox] ~ label::after, input[type=radio] ~ label::after {

    left: 1% !important;
}

td {
   
    padding: 7px 10px;
    font-size: 13px;
    font-weight: 500;
    font-family: 'DM Sans';
}

#text{
    color:black;
}

.card {
    box-shadow: 0 0.46875rem 2.1875rem rgba(4,9,20,0.03), 0 0.9375rem 1.40625rem rgba(4,9,20,0.03), 0 0.25rem 0.53125rem rgba(4,9,20,0.05), 0 0.125rem 0.1875rem rgba(4,9,20,0.03);
    border-width: 0;
    transition: all .2s;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(26,54,126,0.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}
.vertical-timeline {
    width: 100%;
    position: relative;
    padding: 1.5rem 0 1rem;
}

.vertical-timeline::before {
    content: '';
    position: absolute;
    top: 0;
    left: 67px;
    height: 100%;
    width: 4px;
    background: #e9ecef;
    border-radius: .25rem;
}

.vertical-timeline-element {
    position: relative;
    margin: 0 0 1rem;
}

.vertical-timeline--animate .vertical-timeline-element-icon.bounce-in {
    visibility: visible;
    animation: cd-bounce-1 .8s;
}
.vertical-timeline-element-icon {
    position: absolute;
    top: 0;
    left: 60px;
}

.vertical-timeline-element-icon .badge-dot-xl {
    box-shadow: 0 0 0 5px #fff;
}

.badge-dot-xl {
    width: 18px;
    height: 18px;
    position: relative;
}
.badge:empty {
    display: none;
}


.badge-dot-xl::before {
    content: '';
    width: 10px;
    height: 10px;
    border-radius: .25rem;
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -5px 0 0 -5px;
    background: #fff;
}

.vertical-timeline-element-content {
    position: relative;
    margin-left: 90px;
    font-size: .8rem;
}

.vertical-timeline-element-content .timeline-title {
    font-size: .8rem;
    text-transform: uppercase;
    margin: 0 0 .5rem;
    padding: 2px 0 0;
    font-weight: bold;
}

.vertical-timeline-element-content .vertical-timeline-element-date {
    display: block;
    position: absolute;
    left: -90px;
    top: 0;
    padding-right: 10px;
    text-align: right;
    color: #adb5bd;
    font-size: .7619rem;
    white-space: nowrap;
}

.vertical-timeline-element-content:after {
    content: "";
    display: table;
    clear: both;
}

    

.card:hover {
    transform: scale(1,1)
}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #e4b518;
}

@media screen and (max-width: 500px){
    .card {
    max-width: calc(200vw - 4rem);
}}
</style>
<style>
table {

  border-collapse: collapse;
  width: 100%;
}

td, th {
 
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #f3f3f3;
}
</style>

@endsection


@section('content')
@include('layouts.header')

@php $link = str_replace("\\", '/', $application->program->school->photo); $title = "storage"."/".$link;   @endphp
<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style="background-image: url({{ url($title) }});padding-top: 100px;">
    <div class="container">
        <h4 class="text-white" style="display:none"><span class="typed-words">Dil Okulu</span><span class="typed-cursor typed-cursor--blink">|</span></h4>
        <div class="row align-items-center" style="top: 140px;position: relative;">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 breadcrumb-1">
                <div class="col-md-12 school-info">
                    <div class="school-logo">
                        <img src="<?=url('storage')?>/{{ $application->program->school->logo }}" class="img-responsive" alt="">
                    </div>
                    <div class="school-head">
                        <h1>{{ $application->program->name }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="col-md-12">
                    <div class="school-history">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="rts-service-details-area pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 pt-5">
                <div class="blog-single-two-wrapper sal-animate" style="height:auto" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="inner">
                        <div class="admin-area">
                            <img src="<?=url('storage')?>/{{ Auth::user()->avatar }}" class="img-responsive" alt="">
                            <div class="details">
                                <h5>{{ Auth::user()->name }}</h5>
                                
                            </div>
                        </div>
                        <div class="body">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button disabled=""  class="nav-link active" style="padding: 1.5rem 2rem;color: #111a2f;font-size: medium;" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Başvuru Formu</button>
                                <button disabled=""  class="nav-link" style="padding: 1.5rem 2rem;color: #111a2f;font-size: medium;" id="v-pills-account-tab" data-bs-toggle="pill" data-bs-target="#v-pills-account" type="button" role="tab" aria-controls="v-pills-account" aria-selected="false">Evrak Yükleme</button>
                                <button disabled=""  class="nav-link" style="padding: 1.5rem 2rem;color: #111a2f;font-size: medium;" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Hizmetler</button>
                                <button disabled=""  class="nav-link" style="padding: 1.5rem 2rem;color: #111a2f;font-size: medium;" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Özet</button>
                                <button disabled=""  class="nav-link" style="padding: 1.5rem 2rem;color: #111a2f;font-size: medium;" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Ödeme</button>
                            </div>
                            <div class="text-center">
                                <hr>
                                <i style="color:#111a2f;" class="fas fa-arrow-right"></i> <a style="color:#111a2f;" href="{{ route('profile') }}">&nbsp;Profile Geri Dön</a><br><br>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 pt-5">
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

                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="accordion-body card" style="height:100%; width:100%; padding: 25px 25px 25px; box-shadow: 0 0 0 0;">
                                    <div class="col-md-12" id="programlar">
                                        <div class="row">
                                            <form class="row" id="generalInformation">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label style="color:#111a2f" style="color:#111a2f" for="name">Ad Soyad *</label>
                                                        <input required type="text" @if(isset($application->UserInformation->name)) value="{{ $application->UserInformation->name }}" @else value="{{ Auth::user()->name }}" @endif name="name" class="form-control" id="name" placeholder="Ad Soyad"style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label style="color:#111a2f" for="gender">Cinsiyet *</label>
                                                        <select required name="gender" class="form-control" id="gender" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                            <option value="">Cinsiyet Seçiniz</option>
                                                            <option @if(isset($application->userInformation->gender)) @if($application->userInformation->gender == "Erkek") selected @endif @endif @if(isset(Auth::user()->gender)) @if(Auth::user()->gender == "Erkek") selected @endif @endif value="Erkek">Erkek</option>
                                                            <option @if(isset($application->userInformation->gender)) @if($application->userInformation->gender == "Kadın") selected @endif @endif @if(isset(Auth::user()->gender)) @if(Auth::user()->gender == "Kadın") selected @endif @endif value="Kadın">Kadın</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label style="color:#111a2f" for="country">Doğum Yeri (Ülke) * </label>
                                                        <select required class="form-control" id="country" name="country" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                            <option value="">Doğum Yerinizi Seçiniz</option>
                                                            <option @if(isset($application->userInformation->country)) @if($application->userInformation->country == "TR") selected @endif @endif @if(isset(Auth::user()->country)) @if(Auth::user()->country == "TR") selected @endif @endif value="TR">Türkiye</option>
                                                            <option value="VI">ABD Virgin Adaları</option>
                                                            <option value="AF">Afganistan</option>
                                                            <option value="AX">Aland Adaları</option>
                                                            <option value="DE">Almanya</option>
                                                            <option value="US">Amerika Birleşik Devletleri</option>
                                                            <option value="UM">Amerika Birleşik Devletleri Küçük Dış Adaları</option>
                                                            <option value="AS">Amerikan Samoası</option>
                                                            <option value="AD">Andora</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarktika</option>
                                                            <option value="AG">Antigua ve Barbuda</option>
                                                            <option value="AR">Arjantin</option>
                                                            <option value="AL">Arnavutluk</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="QU">Avrupa Birliği</option>
                                                            <option value="AU">Avustralya</option>
                                                            <option value="AT">Avusturya</option>
                                                            <option value="AZ">Azerbaycan</option>
                                                            <option value="BS">Bahamalar</option>
                                                            <option value="BH">Bahreyn</option>
                                                            <option value="BD">Bangladeş</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="EH">Batı Sahara</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BE">Belçika</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BY">Beyaz Rusya</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="ZZ">Bilinmeyen veya Geçersiz Bölge</option>
                                                            <option value="AE">Birleşik Arap Emirlikleri</option>
                                                            <option value="GB">Birleşik Krallık</option>
                                                            <option value="BO">Bolivya</option>
                                                            <option value="BA">Bosna Hersek</option>
                                                            <option value="BW">Botsvana</option>
                                                            <option value="BV">Bouvet Adası</option>
                                                            <option value="BR">Brezilya</option>
                                                            <option value="BN">Brunei</option>
                                                            <option value="BG">Bulgaristan</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="GI">Cebelitarık</option>
                                                            <option value="DZ">Cezayir</option>
                                                            <option value="CX">Christmas Adası</option>
                                                            <option value="DJ">Cibuti</option>
                                                            <option value="CC">Cocos Adaları</option>
                                                            <option value="CK">Cook Adaları</option>
                                                            <option value="TD">Çad</option>
                                                            <option value="CZ">Çek Cumhuriyeti</option>
                                                            <option value="CN">Çin</option>
                                                            <option value="DK">Danimarka</option>
                                                            <option value="DM">Dominik</option>
                                                            <option value="DO">Dominik Cumhuriyeti</option>
                                                            <option value="TL">Doğu Timor</option>
                                                            <option value="EC">Ekvator</option>
                                                            <option value="GQ">Ekvator Ginesi</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="ID">Endonezya</option>
                                                            <option value="ER">Eritre</option>
                                                            <option value="AM">Ermenistan</option>
                                                            <option value="EE">Estonya</option>
                                                            <option value="ET">Etiyopya</option>
                                                            <option value="FK">Falkland Adaları (Malvinalar)</option>
                                                            <option value="FO">Faroe Adaları</option>
                                                            <option value="MA">Fas</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="CI">Fildişi Sahilleri</option>
                                                            <option value="PH">Filipinler</option>
                                                            <option value="PS">Filistin Bölgesi</option>
                                                            <option value="FI">Finlandiya</option>
                                                            <option value="FR">Fransa</option>
                                                            <option value="GF">Fransız Guyanası</option>
                                                            <option value="TF">Fransız Güney Bölgeleri</option>
                                                            <option value="PF">Fransız Polinezyası</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GH">Gana</option>
                                                            <option value="GN">Gine</option>
                                                            <option value="GW">Gine-Bissau</option>
                                                            <option value="GD">Granada</option>
                                                            <option value="GL">Grönland</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="ZA">Güney Afrika</option>
                                                            <option value="GS">Güney Georgia ve Güney Sandwich Adaları</option>
                                                            <option value="KR">Güney Kore</option>
                                                            <option value="CY">Güney Kıbrıs Rum Kesimi</option>
                                                            <option value="GE">Gürcistan</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HM">Heard Adası ve McDonald Adaları</option>
                                                            <option value="IN">Hindistan</option>
                                                            <option value="IO">Hint Okyanusu İngiliz Bölgesi</option>
                                                            <option value="NL">Hollanda</option>
                                                            <option value="AN">Hollanda Antilleri</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong SAR - Çin</option>
                                                            <option value="HR">Hırvatistan</option>
                                                            <option value="IQ">Irak</option>
                                                            <option value="VG">İngiliz Virgin Adaları</option>
                                                            <option value="IR">İran</option>
                                                            <option value="IE">İrlanda</option>
                                                            <option value="ES">İspanya</option>
                                                            <option value="IL">İsrail</option>
                                                            <option value="SE">İsveç</option>
                                                            <option value="CH">İsviçre</option>
                                                            <option value="IT">İtalya</option>
                                                            <option value="IS">İzlanda</option>
                                                            <option value="JM">Jamaika</option>
                                                            <option value="JP">Japonya</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="KH">Kamboçya</option>
                                                            <option value="CM">Kamerun</option>
                                                            <option value="CA">Kanada</option>
                                                            <option value="ME">Karadağ</option>
                                                            <option value="QA">Katar</option>
                                                            <option value="KY">Kayman Adaları</option>
                                                            <option value="KZ">Kazakistan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="CO">Kolombiya</option>
                                                            <option value="KM">Komorlar</option>
                                                            <option value="CG">Kongo</option>
                                                            <option value="CD">Kongo Demokratik Cumhuriyeti</option>
                                                            <option value="CR">Kosta Rika</option>
                                                            <option value="KW">Kuveyt</option>
                                                            <option value="KP">Kuzey Kore</option>
                                                            <option value="MP">Kuzey Mariana Adaları</option>
                                                            <option value="CU">Küba</option>
                                                            <option value="KG">Kırgızistan</option>
                                                            <option value="LA">Laos</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LV">Letonya</option>
                                                            <option value="LR">Liberya</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Litvanya</option>
                                                            <option value="LB">Lübnan</option>
                                                            <option value="LU">Lüksemburg</option>
                                                            <option value="HU">Macaristan</option>
                                                            <option value="MG">Madagaskar</option>
                                                            <option value="MO">Makao S.A.R. Çin</option>
                                                            <option value="MK">Makedonya</option>
                                                            <option value="MW">Malavi</option>
                                                            <option value="MV">Maldivler</option>
                                                            <option value="MY">Malezya</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="IM">Man Adası</option>
                                                            <option value="MH">Marshall Adaları</option>
                                                            <option value="MQ">Martinik</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Meksika</option>
                                                            <option value="FM">Mikronezya Federal Eyaletleri</option>
                                                            <option value="MD">Moldovya Cumhuriyeti</option>
                                                            <option value="MC">Monako</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MR">Moritanya</option>
                                                            <option value="MZ">Mozambik</option>
                                                            <option value="MN">Moğolistan</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="EG">Mısır</option>
                                                            <option value="NA">Namibya</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NE">Nijer</option>
                                                            <option value="NG">Nijerya</option>
                                                            <option value="NI">Nikaragua</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Adası</option>
                                                            <option value="NO">Norveç</option>
                                                            <option value="CF">Orta Afrika Cumhuriyeti</option>
                                                            <option value="UZ">Özbekistan</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua Yeni Gine</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PN">Pitcairn</option>
                                                            <option value="PL">Polonya</option>
                                                            <option value="PT">Portekiz</option>
                                                            <option value="PR">Porto Riko</option>
                                                            <option value="RE">Reunion</option>
                                                            <option value="RO">Romanya</option>
                                                            <option value="RW">Ruanda</option>
                                                            <option value="RU">Rusya Federasyonu</option>
                                                            <option value="SH">Saint Helena</option>
                                                            <option value="KN">Saint Kitts ve Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="PM">Saint Pierre ve Miquelon</option>
                                                            <option value="VC">Saint Vincent ve Grenadinler</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">Sao Tome ve Principe</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="SC">Seyşeller</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapur</option>
                                                            <option value="SK">Slovakya</option>
                                                            <option value="SI">Slovenya</option>
                                                            <option value="SB">Solomon Adaları</option>
                                                            <option value="SO">Somali</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Surinam</option>
                                                            <option value="SY">Suriye</option>
                                                            <option value="SA">Suudi Arabistan</option>
                                                            <option value="SJ">Svalbard ve Jan Mayen</option>
                                                            <option value="SZ">Svaziland</option>
                                                            <option value="RS">Sırbistan</option>
                                                            <option value="CS">Sırbistan-Karadağ</option>
                                                            <option value="CL">Şili</option>
                                                            <option value="TJ">Tacikistan</option>
                                                            <option value="TZ">Tanzanya</option>
                                                            <option value="TH">Tayland</option>
                                                            <option value="TW">Tayvan</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad ve Tobago</option>
                                                            <option value="TN">Tunus</option>
                                                            <option value="TC">Turks ve Caicos Adaları</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="TM">Türkmenistan</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukrayna</option>
                                                            <option value="OM">Umman</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="QO">Uzak Okyanusya</option>
                                                            <option value="JO">Ürdün</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VA">Vatikan</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="WF">Wallis ve Futuna</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="NC">Yeni Kaledonya</option>
                                                            <option value="NZ">Yeni Zelanda</option>
                                                            <option value="GR">Yunanistan</option>
                                                            <option value="ZM">Zambiya</option>
                                                            <option value="ZW">Zimbabve</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label style="color:#111a2f" for="birthday">Doğum Tarihi * </label>
                                                        <input required name="birthday" @if(isset($application->UserInformation->birthday)) value="{{ $application->UserInformation->birthday }}" @else value="{{ Auth::user()->birthday }}" @endif type="date" class="form-control" id="birthday" aria-describedby="birthday" placeholder="" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label style="color:#111a2f" for="nationality">Uyruk * </label>
                                                        <input required type="text" @if(isset($application->UserInformation->nationality)) value="{{ $application->UserInformation->nationality }}" @else value="{{ Auth::user()->nationality }}" @endif name="nationality" class="form-control" id="nationality" placeholder="" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label style="color:#111a2f" for="nationality_2">Varsa 2. Uyruk</label>
                                                        <input type="text" @if(isset($application->UserInformation->nationality_2)) value="{{ $application->UserInformation->nationality_2 }}" @else value="{{ Auth::user()->nationality_2 }}" @endif name="nationality_2" class="form-control" id="nationality_2" placeholder="" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label style="color:#111a2f" for="email">E-posta *</label>
                                                        <input required type="text" name="email" class="form-control" @if(isset($application->UserInformation->email)) value="{{ $application->UserInformation->email }}" @else value="{{ Auth::user()->email }}" @endif id="email" placeholder="" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label style="color:#111a2f" for="phone">Cep Telefonu *</label>
                                                        <input required @if(isset($application->UserInformation->phone)) value="{{ $application->UserInformation->phone }}" @else value="{{ Auth::user()->phone }}" @endif type="text" name="phone" class="form-control" id="phone" placeholder="" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="color:#111a2f" for="foreign_language">Yabancı Dil</label>
                                                        <select  name="foreign_language" class="form-control" id="foreign_language" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                            <option value="">Yabancı Dil Seçiniz</option>
                                                            <option @if(isset($application->userInformation->foreign_language)) @if($application->userInformation->foreign_language == "İngilizce") selected @endif @endif @if(isset(Auth::user()->gender)) @if(Auth::user()->foreign_language == "İngilizce") selected @endif @endif value="İngilizce">İngilizce</option>
                                                            <option @if(isset($application->userInformation->foreign_language)) @if($application->userInformation->foreign_language == "Almanca") selected @endif @endif @if(isset(Auth::user()->gender)) @if(Auth::user()->foreign_language == "Almanca") selected @endif @endif value="Almanca">Almanca</option>
                                                            <option @if(isset($application->userInformation->foreign_language)) @if($application->userInformation->foreign_language == "Fransızca") selected @endif @endif @if(isset(Auth::user()->gender)) @if(Auth::user()->foreign_language == "Fransızca") selected @endif @endif value="Fransızca">Fransızca</option>
                                                            <option @if(isset($application->userInformation->foreign_language)) @if($application->userInformation->foreign_language == "İspanyolca") selected @endif @endif @if(isset(Auth::user()->gender)) @if(Auth::user()->foreign_language == "İspanyolca") selected @endif @endif value="İspanyolca">İspanyolca</option>
                                                            <option @if(isset($application->userInformation->foreign_language)) @if($application->userInformation->foreign_language == "Çekçe") selected @endif @endif @if(isset(Auth::user()->gender)) @if(Auth::user()->foreign_language == "Çekçe") selected @endif @endif value="Çekçe">Çekçe</option>
                                                            <option @if(isset($application->userInformation->foreign_language)) @if($application->userInformation->foreign_language == "İtalya") selected @endif @endif @if(isset(Auth::user()->gender)) @if(Auth::user()->foreign_language == "İtalya") selected @endif @endif value="İtalya">İtalya</option>
                                                            <option @if(isset($application->userInformation->foreign_language)) @if($application->userInformation->foreign_language == "Rusça") selected @endif @endif @if(isset(Auth::user()->gender)) @if(Auth::user()->foreign_language == "Rusça") selected @endif @endif value="Rusça">Rusça</option>
                                                            <option @if(isset($application->userInformation->foreign_language)) @if($application->userInformation->foreign_language == "Portekizce") selected @endif @endif @if(isset(Auth::user()->gender)) @if(Auth::user()->foreign_language == "Portekizce") selected @endif @endif value="Portekizce">Portekizce</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="color:#111a2f" for="language_level">Dil Seviyesi</label>
                                                        <select  name="language_level" class="form-control" id="language_level" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                            <option value="">Dil Seviyesi Seçiniz</option>
                                                            <option @if(isset($application->userInformation->language_level)) @if($application->userInformation->language_level == "A1") selected @endif @endif @if(isset(Auth::user()->language_level)) @if(Auth::user()->language_level == "A1") selected @endif @endif value="A1">A1</option>
                                                            <option @if(isset($application->userInformation->language_level)) @if($application->userInformation->language_level == "A2") selected @endif @endif @if(isset(Auth::user()->language_level)) @if(Auth::user()->language_level == "A2") selected @endif @endif value="A2">A2</option>
                                                            <option @if(isset($application->userInformation->language_level)) @if($application->userInformation->language_level == "B1") selected @endif @endif @if(isset(Auth::user()->language_level)) @if(Auth::user()->language_level == "B1") selected @endif @endif value="B1">B1</option>
                                                            <option @if(isset($application->userInformation->language_level)) @if($application->userInformation->language_level == "B2") selected @endif @endif @if(isset(Auth::user()->language_level)) @if(Auth::user()->language_level == "B2") selected @endif @endif value="B2">B2</option>
                                                            <option @if(isset($application->userInformation->language_level)) @if($application->userInformation->language_level == "C1") selected @endif @endif @if(isset(Auth::user()->language_level)) @if(Auth::user()->language_level == "C1") selected @endif @endif value="C1">C1</option>
                                                            <option @if(isset($application->userInformation->language_level)) @if($application->userInformation->language_level == "C2") selected @endif @endif @if(isset(Auth::user()->language_level)) @if(Auth::user()->language_level == "C2") selected @endif @endif value="C2">C2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="color:#111a2f" for="language_test" >Dil Sınavı</label>
                                                        <select  class="form-control" name="language_test" id="language_test" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                        <option value="">Dil Sınavı Seçiniz</option>
                                                        <option @if(isset($application->userInformation->language_test)) @if($application->userInformation->language_test == "TOEFL") selected @endif @endif @if(isset(Auth::user()->language_test)) @if(Auth::user()->language_test == "TOEFL") selected @endif @endif value="TOEFL">TOEFL</option>
                                                        <option @if(isset($application->userInformation->language_test)) @if($application->userInformation->language_test == "IELTS") selected @endif @endif  @if(isset(Auth::user()->language_test)) @if(Auth::user()->language_test == "IELTS") selected @endif @endif value="IELTS" >IELTS</option>
                                                        <option @if(isset($application->userInformation->language_test)) @if($application->userInformation->language_test == "YÖKDİL") selected @endif @endif  @if(isset(Auth::user()->language_test)) @if(Auth::user()->language_test == "YÖKDİL") selected @endif @endif value="YÖKDİL">YÖKDİL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="color:#111a2f" for="exam_score">Sınav Puanı</label>
                                                        <input  type="text" @if(isset($application->UserInformation->exam_score)) value="{{ $application->UserInformation->exam_score }}" @else value="{{ Auth::user()->exam_score }}" @endif  name="exam_score" class="form-control" id="exam_score" placeholder="Sınav Puanı" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="application_id" id="application_id" value="{{ $application->id }}">
                                                <button style="padding: 1.375rem 1.75rem;font-size: 1.5rem;" id="ilerle1" type="button" class="btn btn-success btn-xl">Kaydet</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">
                                <div class="accordion-body card" style="height:100%; width:100%; padding: 25px 25px 25px; box-shadow: 0 0 0 0;">
                                    <div class="col-md-12" id="programlar">
                                        <div class="row">

                                            <form method="POST" enctype="multipart/form-data" id="nufus-cuzdani-upload" action="javascript:void(0)" >
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <label style="color:#111a2f" for="nufusCuzdani">Nüfus Cüzdanı</label>
                                                            <input type="file" name="file" class="form-control" id="file" style="border-bottom: 3px solid #167347;">
                                                            <input type="hidden" name="type" value="Nüfus Cüzdanı">
                                                            <input type="hidden" name="application_id" value="{{ $application->id }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 justify-content-center">
                                                        <div class="form-group">
                                                            <label style="color:#111a2f" for="for"></label>
                                                            <button class="btn btn-lg btn-success" style="margin-top: 45px;width: 100%;">Yükle</button>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </form>
                                            <form method="POST" enctype="multipart/form-data" id="pasaport-upload" action="javascript:void(0)" >
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <label style="color:#111a2f" for="pasaport">Pasaport</label>
                                                            <input type="file" name="file" class="form-control" id="file" style="border-bottom: 3px solid #167347;">
                                                            <input type="hidden" name="type" value="Pasaport">
                                                            <input type="hidden" name="application_id" value="{{ $application->id }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 justify-content-center">
                                                        <div class="form-group">
                                                            <label style="color:#111a2f" for="for"></label>
                                                            <button class="btn btn-lg btn-success" style="margin-top: 45px;width: 100%;">Yükle</button>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </form>
                                            <form method="POST" enctype="multipart/form-data" id="lise-diplomasi-upload" action="javascript:void(0)" >
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <label style="color:#111a2f" for="liseDiplomasi">Lise Diploması</label>
                                                            <input type="file" name="file" class="form-control" id="file" style="border-bottom: 3px solid #167347;">
                                                            <input type="hidden" name="type" value="Lise Diploması">
                                                            <input type="hidden" name="application_id" value="{{ $application->id }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 justify-content-center">
                                                        <div class="form-group">
                                                            <label style="color:#111a2f" for="for"></label>
                                                            <button class="btn btn-lg btn-success" style="margin-top: 45px;width: 100%;">Yükle</button>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </form>
                                            <form method="POST" enctype="multipart/form-data" id="fotograf-upload" action="javascript:void(0)" >
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <label style="color:#111a2f" for="fotograf">Fotoğraf</label>
                                                            <input type="file" name="file" class="form-control" id="file" style="border-bottom: 3px solid #167347;">
                                                            <input type="hidden" name="type" value="Fotoğraf">
                                                            <input type="hidden" name="application_id" value="{{ $application->id }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 justify-content-center">
                                                        <div class="form-group">
                                                            <label style="color:#111a2f" for="for"></label>
                                                            <button class="btn btn-lg btn-success" style="margin-top: 45px;width: 100%;">Yükle</button>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </form>
                                            <form method="POST" enctype="multipart/form-data" id="dil-sertifikasi-upload" action="javascript:void(0)" >
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <label style="color:#111a2f" for="dilSertifikasi">Dil Sertifikası</label>
                                                            <input type="file" name="file" class="form-control" id="file" style="border-bottom: 3px solid #167347;">
                                                            <input type="hidden" name="type" value="Dil Sertifikası">
                                                            <input type="hidden" name="application_id" value="{{ $application->id }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 justify-content-center">
                                                        <div class="form-group">
                                                            <label style="color:#111a2f" for="for"></label>
                                                            <button class="btn btn-lg btn-success" style="margin-top: 45px;width: 100%;">Yükle</button>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </form>
                                            <form method="POST" enctype="multipart/form-data" id="saglik-raporu-upload" action="javascript:void(0)" >
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <label style="color:#111a2f" for="nufusCuzdani">Sağlık Raporu</label>
                                                            <input type="file" name="file" class="form-control" id="file" style="border-bottom: 3px solid #167347;">
                                                            <input type="hidden" name="type" value="Sağlık Raporu">
                                                            <input type="hidden" name="application_id" value="{{ $application->id }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 justify-content-center">
                                                        <div class="form-group">
                                                            <label style="color:#111a2f" for="for"></label>
                                                            <button class="btn btn-lg btn-success" style="margin-top: 45px;width: 100%;">Yükle</button>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </form>
                                            <form method="POST" enctype="multipart/form-data" id="eligibility-statment-upload" action="javascript:void(0)" >
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <label style="color:#111a2f" for="nufusCuzdani">Eligibility Statment</label>
                                                            <input type="file" name="file" class="form-control" id="file" style="border-bottom: 3px solid #167347;">
                                                            <input type="hidden" name="type" value="Eligibility Statment">
                                                            <input type="hidden" name="application_id" value="{{ $application->id }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 justify-content-center">
                                                        <div class="form-group">
                                                            <label style="color:#111a2f" for="for"></label>
                                                            <button class="btn btn-lg btn-success" style="margin-top: 45px;width: 100%;">Yükle</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="row col-12">
                                                <div class="col-lg-12">
                                                    <button style="width: 100%;padding: 1.375rem 1.75rem;font-size: 1.5rem;" id="ilerle2" type="button" class="btn btn-success btn-xl">İlerle</button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="accordion-body card" style="height:100%; width:100%; padding: 25px 25px 25px; box-shadow: 0 0 0 0;">
                                    <div class="col-md-12" id="programlar">
                                        <div class="row">

                                            <div class="col-md-12" id="programlar">
                                                <div class="row">
                                                    <h6 class="pb-4">Ekstra Hizmet Seçimi</h6>
                                                    <div class="form-group">
                                                        @foreach($application->program->extraservices as $extrapays)
                                                        
                                                            <p>
                                                                <input @if($application->extraservices->contains($extrapays->id) == true) checked @endif class="form-group extrapays" type="checkbox" id="{{ $extrapays->id }}" name="extrapays[]" value="{{ $extrapays->id }}">
                                                                <label style="color:#111a2f" class="extrapays" for="{{ $extrapays->id }}"> {{ $extrapays->name }} - Fiyat: {{ $extrapays->price }}</label><br>
                                                            </p>
                                                        @endforeach
                                                    </div>

                                                    <h6 class="pt-4 pb-4">Konaklama Seçimi (Ekstra Konaklama)</h6>

                                                    <div class="form-group">
                                                        <select name="tostays" class="form-control" id="tostays" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                                <option value="0">Ekstra Konaklama Hizmeti İstemiyorum</option>
                                                                @foreach($application->program->tostays as $tostay)
                                                                <option @if($application->tostays->contains($tostay->id) == true) selected @endif value="{{ $tostay->id }}">{{ $tostay->name }} - (+{{ $tostay->price}}) - {{ $tostay->time }}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-12">
                                                <div class="col-lg-12">
                                                    <button style="width: 100%;padding: 1.375rem 1.75rem;font-size: 1.5rem;" id="ilerle3" type="button" class="btn btn-success btn-xl">İlerle</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div id="ozetPdf" class="accordion-body card"  style="height:100%; width:100%; padding: 25px 25px 25px; box-shadow: 0 0 0 0;">
                                    <div class="col-md-12 text-dark" id="programlar">
                                        <div  class="row">
                                             <span style="color: #e4b517;font-weight: 700; font-family: 'Urbanist';">Öğrenci:</span> <br>
                                                 <hr>
                                          <span>  <h5>{{ Auth::user()->name }}</h5><br></span>
                                             <span style="color: #e4b517;font-weight: 700; font-family: 'Urbanist';">Zorunlu Hizmetler:</span><hr> <br>
                                             
                                                <table style="margin: 0 0 30px;">
                                                   
                                                    <tbody>
                                                        @foreach($application->program->extrapays as $extrapays)
                                                        <tr>
                                                        <td >{{ $extrapays->name }}</td>
                                                        <td style="font-weight: bold;font-size: 15px;text-align: end;">{{ $extrapays->price }}</td>
                                                        </tr> 
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                                                        
                                                <span style="color: #e4b517;font-weight: 700; font-family: 'Urbanist';">Konaklama:</span> <br>
                                                <hr>
                                                <table style="margin: 0 0 30px;">
                                                  
                                                    <tr id="tostaysServices">
                                                    
                                                    </tr> 
                                                </table>
                                                <span style="color: #e4b517;font-weight: 700; font-family: 'Urbanist';">Ekstra Aldığınız Hizmetler:</span><hr> <br>
                                                
                                             
                                                <table style="margin: 0 0 30px;">
                                                    
                                                    
                                                    <tbody id="extraservices">
                                                    </tbody> 
                                                </table>

                                                <span style="color: #e4b517;font-weight: 700; font-family: 'Urbanist';">Danışman Tarafından Eklenen Ek Hizmet ve Servisler</span><hr> <br>
                                                
                                             
                                                <table style="margin: 0 0 30px;">
                                                   
                                                    <tbody>
                                                        @foreach($application->extrapays as $extrapays1)
                                                            @if($extrapays1->user_id != "")
                                                                <tr>
                                                                <td >{{ $extrapays1->name }}</td>
                                                                <td style="font-weight: bold;font-size: 15px;text-align: end;">{{ $extrapays1->price }}</td>
                                                                </tr> 
                                                            @endif
                                                        @endforeach
                                                        @foreach($application->extraservices as $extraservices1)
                                                            @if($extraservices1->user_id != "")
                                                                <tr>
                                                                <td >{{ $extraservices1->name }}</td>
                                                                <td style="font-weight: bold;font-size: 15px;text-align: end;">{{ $extraservices1->price }}</td>
                                                                </tr> 
                                                            @endif
                                                        @endforeach

                                                        
                                                    </tbody>
                                                </table>
                                            
                                                <p class="row" style="font-weight: 800; font-size: 12px; font-style:italic; color:#a43434; background:#f7b9b9;">Yukarıdaki ücret kaydolmak istediğiniz program ücretini ve satın aldığınız tüm ek hizmetlerin toplamıdır. Bu aşamada başvuru sürecinizi başlatmak için yalnızca 250€'luk ön kayıt ödemesini yapmanız gerekmektedir.</p>
                                                <table style="margin: 0 0 30px;">
                                                    <tr>
                                                    <td>Ön Kayıt Ücreti:</td>
                                                    <td style="font-weight: bold;font-size: 20px;text-align: end;">250{{ $application->program->school->currency }} </td>
                                                    </tr> 
                                                 
                                                </table>
                                                
                    
                                                <table style="margin: 0 0 30px;">
                                                    <tr>
                                                    <td>Toplam:</td>
                                                    <td id="totalPrice" style="font-weight: bold;font-size: 20px;text-align: end;">{{ $application->program->price }}</td>
                                                    </tr>  
                                                </table>
                                           
                                                <button style="width: 100%;padding: 1.375rem 1.75rem;font-size: 1.5rem;" onclick="printDiv('ozetPdf')" style="font-size:15px;"><i class="fas fa-file" aria-hidden="true"></i> Özeti İndir</button>
                                            
                                         </div>

                                        <div class="row col-12">
                                            <div class="col-lg-12">
                                                <button style="width: 100%;padding: 1.375rem 1.75rem;font-size: 1.5rem;" id="applyApplication" type="button" class="btn btn-success btn-xl">Başvuruyu Tamamla</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="accordion-body card" style="height:100%; width:100%; padding: 25px 25px 25px; box-shadow: 0 0 0 0;">
                                    <div class="col-md-12" id="programlar">
                                        <div class="row">
                                            <div class="col-12">
                                                <p style="color:black"> Edu Global Banka bilgilerimize buradan ulaşabilirsiniz</p>
                                                <p style="color:black;"> BANKA ADI: <b>QNB FINANSBANK</b><br>
                                                BANKA ADRESİ: <b> Esentepe Mahallesi Büyükdere Caddesi Kristal Kule Binası No:215 Şişli – İstanbul </b>
                                                BANKA
                                                <br>SWIFT KODU: <b>FNNBTRISXXX</b><br>
                                                ŞUBE: <b>NİLÜFER</b><br>
                                                HESAP SAHİBİ: <b>EG EDU GLOBAL YURT DISI EGITIM DANS. LTD. STI.</b><br>
                                                HESAP SAHIBI ADRES: <b>ALTINSEHIR MAH. 163.(280.) SOK. NO.11/A IC KAPI.33 NİLUFER/BURSA</b>
                                                </p>
                                            </div>
                                            <div class="col-12 pt-5 pb-5">
                                                <table class="table  table-responsive table-striped table-sm">
                                                    <tbody>
                                                        <tr>
                                                            <td><b>DOVİZ CİNSİ</b></td>
                                                            <td><b>IBAN</b></td>
                                                            <td><b>HESAP NO</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>TÜRK LİRASI (₺-TRY)<br></td>
                                                            <td>TR30 0011 1000 0000 0091 7511 04&nbsp;<br></td>
                                                            <td>0091751104<br></td>
                                                        </tr>
                                                        <tr>
                                                            <td>AMERİKAN DOLARI ($-USD)<br></td>
                                                            <td>TR63 0011 1000 0000 0091 7512 86&nbsp;<br></td>
                                                            <td>0091751286<br></td>
                                                        </tr>
                                                        <tr>
                                                            <td>EURO (€-EUR)<br></td>
                                                            <td>TR67 0011 1000 0000 0091 7514 08<br></td>
                                                            <td>0091751408<br></td>
                                                        </tr>
                                                        <tr>
                                                            <td>STERLİN (£-GBP)<br></td>
                                                            <td>TR46 0011 1000 0000 0091 7515 92<br></td>
                                                            <td>0091751592<br></td>
                                                        </tr>
                                                        <tr>
                                                            <td>AVUSTRALYA DOLARI (AUD)&nbsp;<br></td>
                                                            <td>TR79 0011 1000 0000 0091 7515 80<br></td>
                                                            <td>0091751580<br></td>
                                                        </tr>
                                                        <tr>
                                                            <td>KANADA DOLARI (CAD)&nbsp;<br></td>
                                                            <td>TR12 0011 1000 0000 0091 7515 25&nbsp;<br></td>
                                                            <td>0091751525<br></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label style="color:#111a2f" style="color:#111a2f" for="for"></label>
                                                <button style="background-color:#e4b518;color: #111a2f; border-color: #e4b518;" class="btn btn-lg btn-success" >Kredi Kartı ile online ödeme yapmak için buraya tıklayın </button>
                                            </div>

                                            <form method="POST" enctype="multipart/form-data" id="dekont-upload" action="javascript:void(0)" >
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <label style="color:#111a2f" style="color:#111a2f" for="dekont">Dekont Yükle</label>
                                                            <input type="file" name="file" class="form-control" id="dekont" style="border-bottom: 3px solid #167347;">
                                                            <input type="hidden" name="type" value="Dekont">
                                                            <input type="hidden" name="application_id" value="{{ $application->id }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 justify-content-center">
                                                        <div class="form-group">
                                                            <label style="color:#111a2f" style="color:#111a2f" for="for"></label>
                                                            <button class="btn btn-lg btn-success" style="margin-top: 45px;width: 100%;">Yükle</button>
                                                        </div>
                                                    </div>
                                                    <a target="_self" href="{{ route('profile') }}" class="btn btn-lg btn-success" style="">Başvuruyu Tamamla</a>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                        
                    </div>
                </div>
            </div>
                <div class="col-lg-3 col-sm-12 pt-5">
                    
                    <div class="main-card mb-3 card" style="height: auto;width: 100%;">
                        <div class="card-body" >
                            <h5 class="card-title text-center">Başvuru Aşamaları</h5>
                            <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                @foreach($application->stages->sortBy('sorting') as $stage)
                                    <div class="vertical-timeline-item vertical-timeline-element">
                                        <div>

                                        
                                            <span class="vertical-timeline-element-icon bounce-in">
                                                <i style="color:{{ $stage->color }};" class="fas fa-circle"></i>
                                            </span>
                                            <div class="vertical-timeline-element-content bounce-in">
                                                <h4 class="timeline-title" style="font-size: 1.3rem;text-transform: uppercase;margin: 0 0 0.5rem;padding: 2px 0 0;font-weight: 900;">{{ $stage->name }}</h4>
                                                <p style="font-size: 1.2em;     color: black;">{{ $stage->content }}</p>
                                                <span style="padding-top: 8px;" class="vertical-timeline-element-date">{{ $stage->created_at->format('d/m/Y') }}</span>
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


<div class="rts-service-details-area pt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <!-- service details left area start -->
                <div class="service-detials-step-1">
                    <div class="accordion-wrapper-area wrapper-area-inner">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form id="calculate">
    <input type="hidden" name="application_id" id="application_id" value="{{ $application->id }}">
    <input type="hidden" name="tostayCalculate" id="tostayCalculate" value="">
    <input type="hidden" name="extrapaysCalculate" id="extrapaysCalculate" value="">
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>


    function calculate(){
        var application_id = $('#application_id').val();
        var tostayCalculate = $('#tostayCalculate').val();
        var extrapaysCalculate = [];

        $(".extrapays:checkbox:checked").each(function(){
            extrapaysCalculate.push(this.value);
        });

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:'POST',
            url: "{{ route('calculate')}}",
            data: {
                application_id:application_id,
                tostayCalculate:tostayCalculate,
                extrapaysCalculate:extrapaysCalculate
            },
            success: function(response) {
                $('#totalPrice').text(response)

            },

            error:function(response) {
                console.log(response)
            },
                
        });
    }

    $('#applyApplication').on('click', function(){

        var application_id = $('#application_id').val();
        var tostayCalculate = $('#tostayCalculate').val();
        var extrapaysCalculate = [];

        $(".extrapays:checkbox:checked").each(function(){
            extrapaysCalculate.push(this.value);
        });

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:'POST',
            url: "{{ route('applyApplication')}}",
            data: {
                application_id:application_id,
                tostayCalculate:tostayCalculate,
                extrapaysCalculate:extrapaysCalculate
            },
            success: function(response) {

                $('#v-pills-messages-tab').removeClass('active');
                $('#v-pills-messages').removeClass('active');
                $('#v-pills-messages').removeClass('show');
                $('#v-pills-messages').attr('aria-selected', 'false');

                $('#v-pills-settings-tab').addClass('active');
                $('#v-pills-settings').addClass('active');
                $('#v-pills-settings').addClass('show');
                $('#v-pills-settings').attr('aria-selected', 'true');

                $('#v-pills-messages-tab').removeAttr("disabled", 'false');
                
                swal("Başarılı!", "Başvurunuz tamamlandı. Ödemeniz eklendi.", "success");

            },

            error:function(response) {
                console.log(response)
            },
                
        });

    });

    

    $("#ilerle1").click(function(e){
       e.preventDefault();

       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        
    
        var name = $('#name').val();
        var gender = $('#gender').val();
        var birthday = $('#birthday').val();
        var country = $('#country').val();
        var nationality = $('#nationality').val();
        var nationality2 = $('#nationality2').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var foreign_language = $('#foreign_language').val();
        var language_level = $('#language_level').val();
        var language_test = $('#language_test').val();
        var exam_score = $('#exam_score').val();
        var application_id = $('#application_id').val();

        if(phone.length < 10){

            swal("Hata!", "Lütfen zorunlu telefonu 10 hane olacak şekilde doldurunuz", "warning");

        }else{

            if(name == "" || gender == "" | birthday == "" | country == "" | nationality  == "" | email == "" | phone == ""){
            swal("Hata!", "Lütfen zorunlu bilgileri doldurunuz.", "warning");
        }else{
            $.ajax({
            type:'POST',
            url:"{{ route('informationPost') }}",
            data:{
                name:name,
                gender:gender,
                birthday:birthday,
                country:country,
                nationality:nationality,
                nationality2:nationality2,
                email:email,
                phone:phone,
                foreign_language:foreign_language,
                language_level:language_level,
                language_test:language_test,
                exam_score:exam_score,
                application_id:application_id
                },
                success:function(data){
                    if(data.success){
                        swal("Başarılı!", "Bilgileriniz dolduruldu. 2. adıma ilerleyebilirsiniz.", "success");
                        $('#v-pills-home-tab').removeClass('active');
                        $('#v-pills-home').removeClass('active');
                        $('#v-pills-home').removeClass('show');
                        $('#v-pills-home').attr('aria-selected', 'false');
                        $('#v-pills-home-tab').removeAttr("disabled", 'false');


                        $('#v-pills-account-tab').addClass('active');
                        $('#v-pills-account').addClass('active');
                        $('#v-pills-account').addClass('show');
                        $('#v-pills-account').attr('aria-selected', 'true');
                    }
                    
                }
             });

        }

        }

        
    });

    $(document).ready(function (e) {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#nufus-cuzdani-upload').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: "{{ url('store-file')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    swal("Başarılı!", "Nüfus Cüzdanınız Eklendi.", "success");
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    });

    $(document).ready(function (e) {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#dekont-upload').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: "{{ url('store-file')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    swal("Başarılı!", "Dekont Eklendi.", "success");
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    });

    $(document).ready(function (e) {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#pasaport-upload').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: "{{ url('store-file')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    swal("Başarılı!", "Pasaportunuz Başarıyla Eklendi.", "success");
                    console.log(data);
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    });

    $(document).ready(function (e) {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#lise-diplomasi-upload').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: "{{ url('store-file')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    swal("Başarılı!", "Lise Diplomanız Başarıyla Eklendi.", "success");
                    console.log(data);
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    });

    $(document).ready(function (e) {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#fotograf-upload').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: "{{ url('store-file')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    swal("Başarılı!", "Fotoğrafınız Başarıyla Eklendi.", "success");
                    console.log(data);
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    });

    $(document).ready(function (e) {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#dil-sertifikasi-upload').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: "{{ url('store-file')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    swal("Başarılı!", "Dil Sertifikanız Başarıyla Eklendi.", "success");
                    console.log(data);
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    });

    $(document).ready(function (e) {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#saglik-raporu-upload').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: "{{ url('store-file')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    swal("Başarılı!", "Sağlık Raporunuz Başarıyla Eklendi.", "success");
                    console.log(data);
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    });

    $(document).ready(function (e) {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#eligibility-statment-upload').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: "{{ url('store-file')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    swal("Başarılı!", "Eligibility Statment Başarıyla Eklendi.", "success");
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    });

    $(document).ready(function () {
        $('.extrapays').change(function(event){
            $('#extraservices').empty();
            event.preventDefault();
            var searchIDs = $(".extrapays:checkbox:checked").map(function(){
                return this.value;
            }).toArray();

            $('#extrapaysCalculate').val(searchIDs);
    
            $(searchIDs).each(function(index, value) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '{{ route('getExtraService')}}',
                    method: 'POST',
                    data:{
                        index:value,
                    },
                    success: function (result) {
                        
                        $('#extraservices').append('<tr><td>' +  result.name + '</td> <td style="font-weight: bold;font-size: 15px;text-align: end;">' + result.price + '</td></tr>'
                        )
                        calculate();
                    }
                });
            });
        });
    });

    $(document).ready(function () {
        $('#tostays').change(function(){
            let id = $(this).val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route('getExtraTostay')}}',
                method: 'POST',
                data:{
                    id:id,
                },
                success: function (result) {
                    $('#tostaysServices').empty();
                    $('#tostayCalculate').val(result.id);
                    $('#tostaysServices').html('<td>' +  result.name + '</td> <td style="font-weight: bold;font-size: 15px;text-align: end;">' + result.price + '</td><td style="font-weight: bold;font-size: 15px;text-align: end;">' + result.time + '</td>'
                    
                    );
                    calculate();
                }
            });
         });
    });

    $('#ilerle2').on('click', function(){
        $('#v-pills-account-tab').removeClass('active');
        $('#v-pills-account').removeClass('active');
        $('#v-pills-account').removeClass('show');
        $('#v-pills-account').attr('aria-selected', 'false');

        $('#v-pills-account-tab').removeAttr("disabled", 'false');


        $('#v-pills-profile-tab').addClass('active');
        $('#v-pills-profile').addClass('active');
        $('#v-pills-profile').addClass('show');
        $('#v-pills-profile').attr('aria-selected', 'true');
    });

    $('#ilerle3').on('click', function(){
        $('#v-pills-profile-tab').removeClass('active');
        $('#v-pills-profile').removeClass('active');
        $('#v-pills-profile').removeClass('show');
        $('#v-pills-profile').attr('aria-selected', 'false');

        $('#v-pills-messages-tab').addClass('active');
        $('#v-pills-messages').addClass('active');
        $('#v-pills-messages').addClass('show');
        $('#v-pills-messages').attr('aria-selected', 'true');

        $('#v-pills-profile-tab').removeAttr("disabled", 'false');

    });

    $('#ilerle4').on('click', function(){
        $('#v-pills-messages-tab').removeClass('active');
        $('#v-pills-messages').removeClass('active');
        $('#v-pills-messages').removeClass('show');
        $('#v-pills-messages').attr('aria-selected', 'false');

        $('#v-pills-settings-tab').addClass('active');
        $('#v-pills-settings').addClass('active');
        $('#v-pills-settings').addClass('show');
        $('#v-pills-settings').attr('aria-selected', 'true');

        $('#v-pills-messages-tab').removeAttr("disabled", 'false');

    });

    function printDiv(divName) {
        console.log(divName);
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
    

</script>

<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
	
<script>

    $('#downloadPDF').on('click', function(){

        window.jsPDF = window.jspdf.jsPDF;
    
        const screenshotTarget = document.querySelector("#ozetPdf");

        let div =
            document.getElementById('ozetPdf');
            html2canvas(div).then(
                function (canvas) {
                    document
                    .getElementById('output')
                    .appendChild(canvas);
                })
        var doc = new jsPDF('l');
        
        var elementHTML = document.querySelector("#ozetPdf");
        doc.html(elementHTML, {
            callback: function(doc) {
                
                doc.setFont('Oblique');
                doc.setFontType('Oblique');
                
                // Save the PDF
                doc.save('ozet.pdf');
            },
            orientation: 'landscape', 
            margin: [0, 0, 0, 0],
            x: 0,
            y: 0,
            width: 284, //target width in the PDF document
            windowWidth: 900,
            height: 100
        });

    })
    
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script type="text/javascript">// <![CDATA[
   $("#phone").mask("(999) 999 9999");
// ]]&gt;</script>

@endsection
