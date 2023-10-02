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

@extends('layouts.header')

@section('content')

<div class="rts-breadcrumb-area breadcrumb-bg bg_image pb--100 pt--100" style=" background-image: url({{url('/assets/images/breadcrumb/danismanlar.jpeg')}}); ">
    <div class="container">
        <div class="col-12 text-center">
            <h4 class="title sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" style="color: white;">Kayıt Ol</h4>
        </div>
    </div>
</div>

<div class="rts-contact-form-area mt--30">
    <div class="container">
        <div class="rts-contact-fluid rts-section-gap" style="margin-bottom: 30px;">
            <div class="row mb--50">
                
            </div>
            <div class="form-wrapper">
                <div id="form-messages"></div>
                <form action="{{ route('registerPost') }}" method="post" class="row">
                    <div class="form-group col-md-12">
                        <label>Adınız Soyadınız</label>
                        <input type="text" class="form-control" name="Name" placeholder="Adınız Soyadınızı Giriniz.." required="">
                    </div>
                    <div class="form-group col-md-12">
                        <label>E-mail Adresiniz</label>
                        <input type="text" class="form-control" name="Mailadress" placeholder="E-mail Adresinizi Giriniz.." required="">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Şifre</label>
                        <input type="password" class="form-control" id="PssFrst" name="Password" placeholder="Şifrenizi Giriniz.." required="">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Şifre (Tekrar)</label>
                        <input type="password" class="form-control" id="PssRply" placeholder="Şifrenizi Tekrar Giriniz.." required="">
                        <asp:comparevalidator id="CompareValidator1" runat="server" controltocompare="PssFrst" controltovalidate="PssRply" errormessage="Girdiğiniz değerler eşleşmiyor." forecolor="Red"></asp:comparevalidator> </div>

                    <div class="form-group col-md-12">
                        <label>Telefon Numaranız</label>
                        <input type="text" class="form-control" name="telefon" placeholder="Telefon Numaranızı Giriniz.." required="">
                    </div>
                    
                    <div class="form-group col-md-12">
                        <button type="submit" class="rts-btn btn-primary btn-block btn-lg mb-4">Kayıt Ol</button>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection