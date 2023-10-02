@extends('layouts.app')

@section('title')

Kanada Coop

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

<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style="background-image: url(https://i.ibb.co/9TbC89P/kanada-co-op-2021-11-12-07-39-53.jpg);">
    <div class="container">
        <div class="row align-items-center" style="margin-bottom: 132px;">
            <div class="col-12 text-center">
                <h4 class="title animated fadeIn sal-animate" style="color: white;" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Kanada Co-op</h4>
                <p class="text-white">Edu Global Yurtdışı Programları ile sizleri #DünyayaBağlar</p>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5 pb-5 mt-5 pt-5 ">
    <div class="row items-center align-items-center">
        <div class="col-md-6">
            <h5>Kanada Coop Programları Kimler İçin?</h5>
            <p class="mb-4">Kısa bir sürede bir alanda bilgi donanımı ve yurt dışında iş tecrübesi elde etmek, eğitim alırken çalışmak, çalışırken kültürleri deneyimlemek, İngilizceyi yaşamak isteyenler için!</p>
            <a href="#programara" class="rts-btn btn-primary">Programlara Gözat!</a>
        </div>
        <div class="col-md-6">
            <div class="card ml-5 border-0 shadow p-5" style="border-radius:15px;">
                <div class="card-body py-4 text-center">
                    <h5>Program Maliyetleri</h5>
                    <p>Program ücreti: 9900 CAD’dan başlamaktadır.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 pt-5">
        <h4 class="text-center mt-5">Örnek Program Fiyatları</h4>
        <table class="table table-bordered mt-3">
            <thead>
                <tr style="border-width: 1px 1px;">
                    <th>Okul</th>
                    <th>Bölüm</th>
                    <th>Hafta</th>
                    <th>Fiyat</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border-width: 1px 1px;">
                    <th scope="row">Toronto School of Management</th>
                    <td>Diploma in Cybersecurity Specialist CO-OP</td>
                    <td>51 week</td>
                    <td>14,745 CAD</td>
                </tr>
                <tr style="border-width: 1px 1px;">
                    <th scope="row">ILAC International College</th>
                    <td>Business Administration Diploma CO-OP </td>
                    <td>92 weeks</td>
                    <td>11,150 CAD </td>
                </tr>
                <tr style="border-width: 1px 1px;">
                    <th scope="row">Van West College</th>
                    <td>Hospitality Management Diploma CO-OP</td>
                    <td>15 months</td>
                    <td>13,380 CAD</td>
                </tr>
                <tr style="border-width: 1px 1px;">
                    <th scope="row">Greystone College </th>
                    <td>Diploma in Digital Marketing: Website Management and Design CO-OP </td>
                    <td>88 weeks</td>
                    <td>11,700 - 13,500 CAD</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div class="row mt-5 pt-5">
        <div class="col-md-6">
            <div class="accordion-wrapper-area wrapper-area-inner">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h5 style="text-align: center;padding-top:10px">
                            <span>01.</span> Kanada Co-op Eğitimi Nedir?
                        </h5>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Co-op eğitimi yani "Co-operative education" teriminin Türkçe karşılığı "Müşterek/Ortak Eğitim"'dir. Öğrenciler yetkinleşmek istedikleri bir alanda Co-op eğitimi içeren diploma programlarında kaydolur. Böylelikle okulun sunduğu akademik bilgilerden yararlanırken, okulun anlaşmalı iş yerlerinde ücretli staj yapma imkânı bulur. Özellikle uluslararası ve Türk öğrenciler arasında bu eğitim şekli oldukça popülerdir. Kendini yetiştirme ya da Kanada’da yeni bir hayata başlamak isteyen öğrenciler devlet veya özel kolej bünyesinde bulunan Co-op fırsatı sunan programları tercih etmektedirler.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="accordion-wrapper-area wrapper-area-inner">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h5 style="text-align: center;padding-top:10px">

                            <span>02.</span> Co-op Eğitiminin Avantajları
                            Nelerdir?

                        </h5>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Bu eğitim şeklinin en büyük avantajı, öğrenciye Kanada’da eğitim aldığı alanda iş hayatını deneyimleme şansı vermesidir. Co-op yani stajlı diploma/sertifika programına kaydolan öğrenciler teorik eğitimlerinde yarı zamanlı, Co-op döneminde ise tam zamanlı çalışma fırsatı elde etmiş olurlar. Eğitimlerinden sonra verilen çalışma izinlerinde ise tam zamanlı olarak çalışabilir hatta çalıştığı şirketten çalışma izni oluşturup yeni bir hayata başlayabilirler.
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <!-- accordion area faq end -->
        </div>
    </div>
    <style>
        .work6-item {
            box-shadow: 0px 12px 52px rgb(46 44 165 / 10%);
            border-radius: 15px;
            margin-bottom: 20px;
            background: #002548;
            padding: 30px;
        }

            .work6-item h5 {
                color: #e4b517 !important;
                margin-bottom: 10px;
            }
    </style>
    <div class="mt-5 pt-5">
        <h4 class="text-center mb-5">Kanada CO-OP Program Maliyetleri</h4>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="row col-md-12 work6-item">
                    <h5>Program ücreti: </h5>
                    <p style="font-size:20px;color: white;"><b>10.000 CAD</b>’dan başlamaktadır. </p>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="row col-md-12 work6-item">
                    <h5>Vize Başvuru Ücreti:</h5>
                    <p style="font-size:20px;color: white;">Study Permit: <b>150 CAD</b> Biyometri İşlemi: <b>85 CAD</b> </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row col-md-12 work6-item">
                    <h5>Çeviri Ücreti</h5>
                    <p style="font-size:20px;color: white;">Ortalama <b>150 – 250 TRY </b></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row col-md-12 work6-item">
                    <h5>Uçak Bileti: </h5>
                    <p style="font-size:20px;color: white;"><b>1000 CAD</b>’dan başlamaktadır. </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row col-md-12 work6-item">
                    <h5>Haftalık konaklama</h5>
                    <p style="font-size:20px;color: white;"><b>245 CAD</b>’dan başlamaktadır (Aile Yanı Tam Pansiyon)</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row col-md-12 work6-item">
                    <h5>Aylık Gider:  </h5>
                    <p style="font-size:20px;color: white;"><b>1000 CAD</b> (aylık ortalama)</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 pt-5">
        <div class="col-md-12 text-center mt-5"><h4>SIKÇA SORULAN SORULAR</h4></div>
        <div class="col-md-12 col-md-offset-2 sss">
            <h5>Eduglobal’e danışmanlık ücreti ödeyecek miyim? </h5>
            <p>Bünyemizdeki okulların resmi temsilcileri olduğumuz için bize ekstra bir ücret ödemeniz gerekmiyor.</p>
            <h5>Okul iş garantisi sağlıyor mu?</h5>
            <p>Çoğu okul staj döneminde öğrenciye iş bulma konusunda destek sağlamaktadır. Fakat teorik eğitim döneminde öğrenciler kendi işlerini kendileri bulurlar.</p>
            <h5>Konaklama seçeneklerim nelerdir?</h5>
            <p>Aile yanı, yurt veya apart seçenekleri mevcuttur. Aile yanı konaklamada öğrenci Kanadalı bir aile ile konaklar, sabah – akşam yemeği vardır. Yurt konaklamada ise öğrenci okula bağlı veya bağımsız yurtları tercih edebilir. Yurtlar birden çok ülkeden gelen öğrenciyi bünyesinde barındırır. Yemek seçeneği yoktur. Ortak alanda öğrenci dilerse kendi yemeğini yapabilmektedir. </p>

            <h5>Sağlık sigortam neleri kapsamaktadır?</h5>
            <p>Okulun sağladığı sigorta öğrenciye ayakta veya yatarak tedavileri kapsar nitelikte hazırlanabilmektedir. </p>
            <h5>Program için İngilizce şartı var mı?</h5>
            <p>Evet, programlar için İngilizce şartı mevcuttur. Başvurduğunuz programın seviyesine bağlı olarak aranan İngilizce seviyesi değişecektir. Dil seviyenizi kanıtlamanın en kolay yolu, dünyaca geçerliliği olan dil sınavlarına (IELTS, TOEFL, TOEIC, PTE vb.) girip aldığınız sonucu okula iletmek olacaktır. Eğer başvurmak istediğiniz okulun kendi dil seviye sınavı varsa ve bu sınav sonuçlarından herhangi birine sahip değilseniz okulun sınavlarına girerek dil seviyenizi ispat edebilirsiniz. Dil seviyeniz yetersiz olduğu durumlarda kolejlerin kendi bünyelerinde sundukları İngilizce Hazırlık Dönemi'nde veya anlaşmalı olduğu dil okullarında İngilizce dil seviyenizi ilerletebilirsiniz. </p>
            <h5>Vize reddi ihtimali nedir?&nbsp;<br></h5>
            <p>Her öğrencinin başvurusunu, profilini detaylı inceleyerek oluşturuyoruz. Size en uygun olan başvuruyu gerekli evraklarla birlikte yapıyoruz. Herkes için her zaman vize reddi ihtimali mevcuttur. Buna karar veren merci Kanada Konsolosluğu’dur. Bu risk herkes için her durumda bulunmaktadır.</p>
            <h5>Haftalık kaç saat çalışabilirim? </h5>
            <p>Akademik eğitiminiz başladığı tarihten itibaren, teorik eğitim döneminizde yarı zamanlı yani haftada 20 saat, tatil dönemlerinde ise tam zamanlı yani haftada en fazla 40 saat çalışabilirsiniz. Co-op döneminde sektörde tam zamanlı yani haftada 40 saat çalışma izniniz bulunmaktadır. İngilizce kursu aldığınız sürede çalışma izniniz bulunmamaktadır. </p>
            <h5>Göçmenliğe başvurabilir miyim? </h5>
            <p> Kanada göçmenliğe yeşil ışık yakan ülkelerden biridir. Eğer eğitiminizi bir devlet kolejinde tamamladıysanız; eğitim sürenize bağlı olarak minimum 8 aylık eğitimlerde 1 yıla kadar, 2 yıl ve üzeri süreli eğitimlerde ise maksimum 3 yıl olacak şekilde ülkede kalıp iş arama iznine başvurma hakkınız bulunmaktadır. Buna Post-Graduation Work Permit (PGWP) denmektedir. Programınız bitmeden PGWP başvurunuzu gerçekleştirmiş olmanız gerekiyor. PGWP izniniz çıktıktan sonra göçmenlik-kalıcı oturuma başvurma fırsatınız olacaktır.</p>
        </div>
    </div>

    <section id="programara" class="mt-5 pt-5">
        <div class="container mt-5 pt-5">
            <div class="rts-contact-fluid rts-section-gap" style="margin-bottom: 30px;">
                <div class="row mb--30">
                    <div class="col-12">
                        <div class="title-area text-center mt--30">
                            <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate">Program Uygunluk Formu</span>
                        </div>
                    </div>
                </div>
                <div class="form-wrapper">
                    <div id="form-messages"></div>
                    <form id="canadaCoopForm" class="row">
                        <div class="form-group col-md-12">
                            <label>Adınız Soyadınız</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Adınız Soyadınızı Giriniz.." required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>E-mail Adresiniz</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="E-mail Adresinizi Giriniz.." required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Telefon</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefon Numaranızı Giriniz.." required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>İş Ünvanı</label>
                            <input type="text" class="form-control" name="job_title" id="job_title" placeholder="İş Ünvanı Giriniz.." required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Doğum Tarihi</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Eğitim Durumu</label>
                            <select id="education" class="form-control" style="font-size: 20px;" name="education">
                                <option value="">Seçiniz</option>
                                <option value="Lise Öğrencisi">Lise Öğrencisi</option>
                                <option value="Lise Mezunu">Lise Mezunu</option>
                                <option value="Ön Lisans Öğrencisi">Ön Lisans Öğrencisi</option>
                                <option value="Ön Lisans Mezunu">Ön Lisans Mezunu</option>
                                <option value="Lisans Öğrencisi">Lisans Öğrencisi</option>
                                <option value="Lisans Mezunu">Lisans Mezunu</option>
                                <option value="Yüksek Lisans Öğrencisi">Yüksek Lisans Öğrencisi</option>
                                <option value="Yüksek Lisans Mezunu">Yüksek Lisans Mezunu</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Medeni Hali</label>
                            <select id="marital_status" class="form-control" style="font-size: 20px;" name="marital_status">
                                <option value="">Seçiniz</option>
                                <option value="Lise Öğrencisi">Bekar</option>
                                <option value="Lise Mezunu">Evli</option>
                            </select>
                        </div><button type="button" id="kanadaCoopSubmit" class="rts-btn btn-primary btn-block btn-lg mb-4">Başvuru Yap!</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</div>
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $('#kanadaCoopSubmit').on('click', function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var job_title = $('#job_title').val();
            var birthday = $('#birthday').val();
            var education = $('#education').val();
            var marital_status = $('#marital_status').val();
            $.ajax({
                type:'POST',
                url:"{{ route('CanadaCoopApplication') }}",
                data:{
                    name:name,
                    email:email,
                    phone:phone,
                    job_title:job_title,
                    birthday:birthday,
                    education:education,
                    marital_status:marital_status
                },
                success:function(data){
                    swal("Başarılı!", "Mesaj Gönderildi", "success");
                    $('#canadaCoopForm').trigger("reset");
                }
            });
    })
</script>

@endsection

@endsection