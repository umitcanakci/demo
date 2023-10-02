@extends('layouts.app')

@section('title')

Franchise Başvurusu

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
                <h4 class="title animated fadeIn sal-animate" style="color: white;" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Franchise Başvurusu</h4>
                <p class="text-white">Edu Global Yurtdışı Programları ile sizleri #DünyayaBağlar</p>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5 pb-5 mt-5 ">
    <section id="programara" class="mt-5 ">
        <div class="container mt-5 pt-5">
            <div class="rts-contact-fluid rts-section-gap" style="margin-bottom: 30px;">
                <div class="row mb--30">
                    <div class="col-12">
                        <div class="title-area text-center mt--30">
                            <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate">Francise Başvuru Formu</span>
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
                            <label>Şehir</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="Şehir Giriniz" required="">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Lütfen kısaca kendinizden, eğitim/iş geçmişinizden ve franchise için neden uygun bir aday oldugunuzdan bahsediniz.</label>
                            <textarea type="text" class="form-control" name="content" id="content" placeholder="" required=""></textarea>
                        </div>

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
            var city = $('#city').val();
            var content = $('#content').val();
            $.ajax({
                type:'POST',
                url:"{{ route('FranchiseApplicationPost') }}",
                data:{
                    name:name,
                    email:email,
                    phone:phone,
                    city:city,
                    content:content
                },
                success:function(data){
                    swal("Başarılı!", "Başvurunuz gönderildi. Size en yakın zamanda ulaşacağız.", "success");
                    $('#canadaCoopForm').trigger("reset");
                }
            });
    })
</script>

@endsection

@endsection