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

<style>
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

@endsection


@section('content')
@include('layouts.header')

<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style="background-image: url({{url('/assets/images/breadcrumb/kurumsal.webp')}});background-blend-mode: multiply;background-color: #8c8c8c; padding-top: 20px;">
    <div class="container">
        <h4 class="text-white" style="display:none"><span class="typed-words">Dil Okulu</span><span class="typed-cursor typed-cursor--blink">|</span></h4>
        <div class="row align-items-center" style="top: 140px;position: relative;">
            
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="col-md-12">
                    <div class="school-history">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="rts-service-details-area pt-3 pb-5">
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
                                <button class="nav-link active" style="padding: 1.5rem 2rem;color: #111a2f;font-size: medium;" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Hesap Bilgileri</button>
                                <button class="nav-link" style="padding: 1.5rem 2rem;color: #111a2f;font-size: medium;" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Başvurular</button>
                                <button class="nav-link" style="padding: 1.5rem 2rem;color: #111a2f;font-size: medium;" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Mesajlar</button>
                                <button class="nav-link" style="padding: 1.5rem 2rem;color: #111a2f;font-size: medium;" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Parola Değiştir</button>
                            </div>
                            <div class="text-center">
                                <hr>
                                <i style="color:red;" class="fas fa-arrow-right"></i> <a style="color:red;" href="{{ route('logout.perform') }}">&nbsp;Çıkış Yap</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-md-12 col-sm-12 col-12 pt-5">
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
                                    
                                    <form action="{{ route('profile.update') }}" class="row" method="post" >
                                        <div class="acordion-title mb-3"><h6>Hesap Bilgilerim</h6></div>
                                        <div><p style="color:red;">Bilgilerde değişiklik yapamayacağınız için yıldız işaretli kişisel bilgilerinizi lütfen eksiksiz ve doğru doldurunuz. <br> Hata olması durumunda lütfen bize mesaj gönderiniz.</p></div>

                                            @csrf
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label style="color:black;"for="name">Ad Soyad *</label>
                                                    <input disabled type="text" value="{{ Auth::user()->name }}"name="name" class="form-control" id="name" placeholder="Ad Soyad"style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label style="color:black;"for="gender">Cinsiyet *</label>
                                                    <select required @if(isset(Auth::user()->updated_at)) disabled @endif name="gender" class="form-control" id="gender" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                        <option value="">Cinsiyet Seçiniz</option>
                                                        <option @if(isset(Auth::user()->gender)) @if(Auth::user()->gender == "Erkek") selected @endif @endif value="Erkek">Erkek</option>
                                                        <option @if(isset(Auth::user()->gender)) @if(Auth::user()->gender == "Kadın") selected @endif @endif value="Kadın">Kadın</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label style="color:black;"for="country">Doğum Yeri (Ülke) * </label>
                                                    <select required @if(isset(Auth::user()->updated_at)) disabled @endif class="form-control" id="country" name="country" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                        <option value="">Doğum Yerinizi Seçiniz</option>
                                                        <option @if(isset(Auth::user()->country)) @if(Auth::user()->country == "TR") selected @endif @endif value="TR">Türkiye</option>
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
                                                    <label style="color:black;"for="birthday">Doğum Tarihi * </label>
                                                    <input required @if(isset(Auth::user()->updated_at)) disabled @endif name="birthday" value="{{ Auth::user()->birthday }}" type="date" class="form-control" id="birthday" aria-describedby="birthday" placeholder="" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label style="color:black;"for="nationality">Uyruk * </label>
                                                    <input required @if(isset(Auth::user()->updated_at)) disabled @endif type="text" value="{{ Auth::user()->nationality }}" name="nationality" class="form-control" id="nationality" placeholder="" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label style="color:black;"for="nationality_2">Varsa 2. Uyruk</label>
                                                    <input type="text"  value="{{ Auth::user()->nationality_2 }}" name="nationality_2" class="form-control" id="nationality_2" placeholder="" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label style="color:black;"for="email">E-posta *</label>
                                                    <input disabled required type="text" name="email" class="form-control" value="{{ Auth::user()->email }}" id="email" placeholder="" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label style="color:black;"for="phone">Cep Telefonu *</label>
                                                    <input disabled required value="{{ Auth::user()->phone }}" type="text" name="phone" class="form-control" id="phone" placeholder="" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label style="color:black;"for="foreign_language">Yabancı Dil</label>
                                                    <select  name="foreign_language" class="form-control" id="foreign_language" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                        <option value="">Yabancı Dil Seçiniz</option>
                                                        <option @if(Auth::user()->foreign_language == "İngilizce") selected @endif value="İngilizce">İngilizce</option>
                                                        <option @if(Auth::user()->foreign_language == "Almanca") selected @endif value="Almanca">Almanca</option>
                                                        <option @if(Auth::user()->foreign_language == "Fransızca") selected @endif value="Fransızca">Fransızca</option>
                                                        <option @if(Auth::user()->foreign_language == "İspanyolca") selected @endif value="İspanyolca">İspanyolca</option>
                                                        <option @if(Auth::user()->foreign_language == "Çekçe") selected @endif value="Çekçe">Çekçe</option>
                                                        <option @if(Auth::user()->foreign_language == "İtalya") selected @endif value="İtalya">İtalya</option>
                                                        <option @if(Auth::user()->foreign_language == "Rusça") selected @endif value="Rusça">Rusça</option>
                                                        <option @if(Auth::user()->foreign_language == "Portekizce") selected @endif value="Portekizce">Portekizce</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label style="color:black;"for="language_level">Dil Seviyesi</label>
                                                    <select  name="language_level" class="form-control" id="language_level" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                        <option value="">Dil Seviyesi Seçiniz</option>
                                                        <option @if(isset(Auth::user()->language_level)) @if(Auth::user()->language_level == "A1") selected @endif @endif value="A1">A1</option>
                                                        <option @if(isset(Auth::user()->language_level)) @if(Auth::user()->language_level == "A2") selected @endif @endif value="A2">A2</option>
                                                        <option @if(isset(Auth::user()->language_level)) @if(Auth::user()->language_level == "B1") selected @endif @endif value="B1">B1</option>
                                                        <option @if(isset(Auth::user()->language_level)) @if(Auth::user()->language_level == "B2") selected @endif @endif value="B2">B2</option>
                                                        <option @if(isset(Auth::user()->language_level)) @if(Auth::user()->language_level == "C1") selected @endif @endif value="C1">C1</option>
                                                        <option @if(isset(Auth::user()->language_level)) @if(Auth::user()->language_level == "C2") selected @endif @endif value="C2">C2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label style="color:black;"for="language_test" >Dil Sınavı</label>
                                                    <select  class="form-control" name="language_test" id="language_test" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                    <option value="">Dil Sınavı Seçiniz</option>
                                                    <option @if(Auth::user()->language_test == "TOEFL") selected @endif value="TOEFL">TOEFL</option>
                                                    <option @if(Auth::user()->language_test == "IELTS") selected @endif  value="IELTS" >IELTS</option>
                                                    <option @if(Auth::user()->language_test == "YÖKDİL") selected @endif  value="YÖKDİL">YÖKDİL</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label style="color:black;"for="exam_score">Sınav Puanı</label>
                                                    <input  type="text" @if(isset(Auth::user()->exam_score)) value="{{ Auth::user()->exam_score }}" @else value="" @endif name="exam_score" class="form-control" id="exam_score" placeholder="Sınav Puanı" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                </div>
                                            </div>
                                            <button type="submit" style="padding: 1.375rem 1.75rem;font-size: 1.5rem;" type="button" class="btn btn-success btn-xl">Kaydet</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="accordion-body card" style="    align-items: flex-start; height:100%; width:100%; padding: 25px 25px 25px; box-shadow: 0 0 0 0;">
                                        <div class="col-lg-12">
                                            <div class="acordion-title mb-3">
                                                <h6>Başvurularım</h6>
                                            </div>
                                            @if(empty(Auth::user()->applications))
                                            <h4>Başvurunuz bulunamadı!</h4>
                                            @else
                                                <table style="font-size: 1.5rem !important;" class="table text-center">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">Program Adı</th>
                                                        <th scope="col">Dil</th>
                                                        <th scope="col">Okul</th>
                                                        <th scope="col">Durum</th>
                                                        <th scope="col">İşlem</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach(Auth::user()->applications->sortBy('id') as $application)
                                                            @if(isset($application->stages->last()->name))
                                                                <tr>
                                                                    <td>{{ $application->program->name }}</td>
                                                                    <td>{{ $application->program->language }}</td>
                                                                    <td>{{ $application->program->school->name }}</td>
                                                                    <td>@if(isset($application->stages[0])) {{ $application->stages->last()->name }} @endif</td>
                                                                    <td><a href="{{ route('applicationContinue', ['id' => $application->id])  }}" class="btn btn-success"><i class="fas fa-eye"></i> </a></td>
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                        
                                                    </tbody>
                                                </table>
                                            @endif
                                        </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="accordion-body card" style="height:100%; width:100%; padding: 25px 25px 25px; box-shadow: 0 0 0 0;">
                                    <div class="col-md-12" id="programlar">
                                        <div class="row">
                                        <div class="acordion-title"><h6>Mesaj Gönder</h6></div>

                                            <form >
                                                @csrf
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label style="color:black;"for="receive_id">Danışman Seçimi *</label>
                                                        <select required name="receive_id" class="form-control" id="receive_id" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;">
                                                            <option >Danışman Seçiniz</option>
                                                            @foreach($consultants as $consultant)
                                                                <option value="{{ $consultant->id }}">{{ $consultant->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label style="color:black;"for="subject">Konu</label>
                                                        <input required type="text" style="background: #f1f1f1;border-bottom: 1px solid #ffc107;" name="subject" class="form-control" id="subject" placeholder="Konu">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label style="color:black;"for="name">Mesaj</label>
                                                        <textarea required style="min-height: 80px;background: #f1f1f1;border-bottom: 1px solid #ffc107;" rows="1" cols="1" name="message" class="form-control" id="message" placeholder="Mesaj"></textarea>
                                                    </div>
                                                </div>
                                                <div class="single-input-item btn-hover">
                                                    <button style="padding: 1.375rem 1.75rem;font-size: 1.5rem;" id="sendmessage" type="button" class="btn btn-success sendmessage btn-xl">Gönder</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-body card" style="height:100%; width:100%; padding: 25px 25px 25px; box-shadow: 0 0 0 0;">
                                    <div class="col-md-12" id="programlar">
                                        <div class="row">
                                            <div class="acordion-title"><h6>Mesajlarım</h6></div>
                                            <table style="font-size: 1.5rem !important;" class="table text-center">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Konu</th>
                                                    <th scope="col">Danışman</th>
                                                    <th scope="col">Durum</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($messages as $message)
                                                        <tr>
                                                            <td>{{ $message->subject }}</td>
                                                            <td>{{ $message->receive->name }}</td>
                                                            <td>@if(empty($message->answer))<span style="color:red;">Cevaplanmadı! @else <a href="{{ route('student.message.detail', ['id' => $message->id ]) }}"> <span style="color:green;">Cevaplandı! <i class="far fa-arrow-right"></i>  @endif</td>
                                                        </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                            
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="accordion-body card" style="height:100%; width:100%; padding: 25px 25px 25px; box-shadow: 0 0 0 0;">
                                    <div class="col-md-12" id="programlar">
                                        <div class="acordion-title mb-3"><h6>Parola Değiştir</h6></div>
                                        
                                        <div class="row">
                                            <form action="{{ route('change.password') }}" method="post">
                                                @csrf
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label style="color:black;"for="current_password">Eski Parola</label>
                                                        <input style="background: #f1f1f1;border-bottom: 1px solid #ffc107;" type="password" name="current_password" class="form-control" id="current_password" placeholder="Eski Parola">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label style="color:black;"for="new_password">Yeni Parola</label>
                                                        <input style="background: #f1f1f1;border-bottom: 1px solid #ffc107;" type="password" name="new_password" class="form-control" id="new_password" placeholder="Yeni Parola">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label style="color:black;"for="confirm_password">Yeni Parola Onay</label>
                                                        <input style="background: #f1f1f1;border-bottom: 1px solid #ffc107;" type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Yeni Parola Onay">
                                                    </div>
                                                </div>
                                                <div class="single-input-item btn-hover">
                                                    <button style="padding: 1.375rem 1.75rem;font-size: 1.5rem;" type="button" class="btn btn-success btn-xl">Kaydet</button>
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
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        $('body').on("click",".sendmessage",function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var receive_id = $('#receive_id').val();
            var message = $('#message').val();
            var subject = $('#subject').val();
            $.ajax({
                type:'POST',
                url:"{{ route('studentSendMessage') }}",
                data:{
                    receive_id:receive_id,
                    message:message,
                    subject:subject
                },
                success:function(data){
                    swal("Başarılı!", "Mesaj Gönderildi", "success");
                    location.reload();
                }
            });
        });

    })
  

</script>

@endsection
