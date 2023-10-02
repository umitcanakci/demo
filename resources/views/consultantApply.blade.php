@extends('layouts.app')

@section('title')

Danışmanlar

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

<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style=" background-image: url({{url('/assets/images/breadcrumb/danismanlar.jpeg')}}); ">
    <div class="container">
        <div class="col-12 text-center">
            <h4 class="title sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" style="color: white;">Danışmanlar</h4>
        </div>
    </div>
</div>

<div class="rts-contact-form-area mt--30">
    <div class="container">

        <div class="rts-contact-fluid rts-section-gap" style="margin-bottom: 30px;">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area text-center mt--30">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate">Danışman Başvuru Formu!</span>
                        <p class="title animated fadeIn sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            Edu Global ekibine katılmak istemenize çok sevindik...
                        </p>
                    </div>
                </div>
            </div>
            <div class="form-wrapper">
                <div id="form-messages"></div>
                    <form id="ConsultantForm" class="row">
                        <div class="form-group col-md-12">
                            <label>Adınız Soyadınız</label>
                            <input type="text" class="form-control" id="name" name="Name" placeholder="Adınız Soyadınızı Giriniz.." required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>E-mail Adresiniz</label>
                            <input type="text" class="form-control" id="email" name="Mailadress" placeholder="E-mail Adresinizi Giriniz.." required="">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Şifre</label>
                            <input type="password" class="form-control" id="password" id="PssFrst" name="Password" placeholder="Şifrenizi Giriniz.." required="">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Şifre (Tekrar)</label>
                            <input type="password" class="form-control" id="confirm_password" placeholder="Şifrenizi Tekrar Giriniz.." required="">
                            <asp:comparevalidator id="CompareValidator1" runat="server" controltocompare="PssFrst" controltovalidate="PssRply" errormessage="Girdiğiniz değerler eşleşmiyor." forecolor="Red"></asp:comparevalidator> </div>
                        
                        <div class="form-group col-md-12">
                            <label>Adres</label>
                            <input type="text" class="form-control" id="adress" name="Address" placeholder="Adres Bilginizi Giriniz.." required="">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Ülke</label>
                            <select style="padding: 21px;" required name="AdmCountry" id="country" class="form-control">
                                <option value="">Doğum Yerinizi Seçiniz</option>
                                <option value="TR">Türkiye</option>
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

                        <div class="form-group col-md-6">
                            <label>Telefon Numaranız</label>
                            <input type="text" class="form-control" id="phone" name="telefon" placeholder="Telefon Numaranızı Giriniz.." required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tc Kimlik yada Pasaport Numaranız</label>
                            <input type="text" class="form-control" id="identity_number" name="tc" placeholder="Tc Kimlik yada Pasaport Numaranızı Giriniz.." required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Doğum Tarihiniz</label>
                            <input type="date" class="form-control" id="birthday" name="dtarih" placeholder="Tc Kimkik yada Pasaport Numaranızı Giriniz.." required="">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Kendini Bize Kısaca Tanıt</label>
                            <textarea class="form-control" id="content" name="tanim" maxlength="255" placeholder="Kendini bize kısaca tanıt.." rows="3"></textarea>
                            <span><small>* Max 255 Karekter Kullanınız..</small></span>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="button" id="gonder5" class="rts-btn btn-primary btn-block btn-lg mb-4">Başvuru Yap!</button>
                            <br>
                        </div>
                    </form>
            </div>
        </div>
    </div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>


$("#gonder5").click(function(e){
       e.preventDefault();
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        let name = $('#name').val();
        let email = $('#email').val();
        let password = $('#password').val();
        let confirm_password = $('#password').val();
        let adress = $('#adress').val();
        let country = $('#country').val();
        let phone = $('#phone').val();
        let birthday = $('#birthday').val();
        let content = $('#content').val();
        let identity_number = $('#identity_number').val();

        $.ajax({
            type:'POST',
            url: '{{ route('consultantApplyPost') }}',
            data:{
                name:name,
                email:email,
                password:password,
                adress:adress,
                country:country,
                phone:phone,
                birthday:birthday,
                content:content,
                identity_number:identity_number
            },
            success:function(data){
                $.ajax({
                    type:'POST',
                    url: '{{ route('register.post') }}',
                    data:{
                        name:name,
                        email:email,
                        phone:phone,
                        password:password,
                        confirm_password:confirm_password
                    },
                    success:function(data){
                        $('#ConsultantForm').trigger("reset");
                        swal("Başarılı!", "Başvurunuz gönderildi. Üyeliğiniz oluşturuldu. Size en yakın sürede ulaşacağız.", "success");
                    }
                });
            }


        });
    });

</script>



@endsection