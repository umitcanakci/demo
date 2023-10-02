@extends('layouts.app')

@section('title')

Banka Hesap Bilgileri

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


<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style=" background-image: url({{asset('assets/images/bankaccount.jpeg')}}); ">
    <div class="container">
        <div class="row align-items-center" style="margin-bottom: 132px;">
            <div class="col-12 text-center">
                <h4 class="title animated fadeIn sal-animate" style="color: white;" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Banka Hesap Bilgileri</h4>
                <p class="text-white">Edu Global Yurtdışı Programları ile sizleri #DünyayaBağlar</p>
            </div>
        </div>
    </div>
</div>

<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
    <div class="accordion-body mt-5 m-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 sayfa-bolum" id="page-text">
                <aside>
                                                    <blockquote><p>Edu Global Banka bilgilerimize buradan ulaşabilirsiniz</p></blockquote>
                                                    <p>
                                                    </p><p></p><blockquote>
                                                        BANKA ADI: <b>QNB FINANSBANK</b><br>BANKA ADRESİ: <b>
                                                            Esentepe Mahallesi Büyükdere Caddesi Kristal Kule Binası No:215 Şişli – İstanbul
                                                            BANKA
                                                        </b><br>SWIFT KODU: <b>FNNBTRISXXX</b><br>ŞUBE: <b>NİLÜFER</b><br>HESAP SAHİBİ: <b>EG EDU GLOBAL YURT DISI EGITIM DANS. LTD. STI.</b><br>HESAP SAHIBI ADRES: <b>ALTINSEHIR MAH. 163.(280.) SOK. NO.11/A IC KAPI.33 NILUFER/BURSA</b>
                                                    </blockquote><p><br></p>
                                                    
                                                    <table class="table table-bordered">
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
                                                    <p><br></p><p></p>
                                                    <p></p>
                                                </aside>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection