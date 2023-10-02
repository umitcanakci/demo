@extends('layouts.app')

@section('title')

{{ $page->title }}

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
                <h4 class="title animated fadeIn sal-animate" style="color: white;" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">{{ $page->title }}</h4>
                <p class="text-white">Edu Global Yurtdışı Programları ile sizleri #DünyayaBağlar</p>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5 pb-5 mt-5 pt-5 ">


{!! $page->body  !!}
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
                        </div>
                        <input type="hidden" name="special" id="special" value="{{ $page->title }}">
                        <input type="hidden" name="status" id="status" value="Devam Ediyor">
                        <button type="button" id="kanadaCoopSubmit" class="rts-btn btn-primary btn-block btn-lg mb-4">Başvuru Yap!</button>
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
            var special = $('#special').val();
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
                    marital_status:marital_status,
                    special:special,
                    status:status
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