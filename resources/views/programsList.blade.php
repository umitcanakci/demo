@extends('layouts.app')

@section('title')

Arama Sonuçları

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
    .box {
        width: 20%;
        margin: 0 auto;
        background: rgba(255, 255, 255, 0.2);
        padding: 35px;
        border: 2px solid #fff;
        border-radius: 20px/50px;
        background-clip: padding-box;
        text-align: center;
    }

    .button {
        font-size: 1em;
        padding: 10px;
        color: #fff;
        border: 2px solid orange;
        border-radius: 20px/50px;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.3s ease-out;
    }

    .form-group {
        display: flow-root !important;
    }

        .form-group label:before {
            content: '';
            -webkit-appearance: none;
            background-color: transparent;
            border: 1px solid #e4b517;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
            padding: 10px;
            display: inline-block;
            position: relative;
            vertical-align: middle;
            cursor: pointer;
            margin-right: 5px;
        }

    .button:hover {
        background: orange;
    }

    .overlay {
    position: fixed;
    top: 20px;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: visible;
    opacity: 1;
}

    .popup {
        position: relative;
        margin: 70px auto;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        max-width: 500px;
        transition: all 5s ease-in-out;
    }

    input[type=checkbox] ~ label::after, input[type=radio] ~ label::after {
        content: " ";
        position: absolute;
        top: 12%;
        left: 3%;
        width: 14px;
        height: 9px;
        background-color: #17171700;
        border-bottom: 4px solid #f6c50e;
        border-left: 4px solid #f6c50e;
        border-radius: 1px;
        transform: rotate(-45deg);
        opacity: 0;
        transition: all 0.3s;
    }

    input[type=checkbox] ~ label::before, input[type=radio] ~ label::before {
        background-color: #5d5d7e00;
    }


    .popup .close {
        position: absolute;
        top: 20px;
        right: 30px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }

        .popup .close:hover {
            color: orange;
        }

    .popup .content {
        max-height: 30%;
        overflow: auto;
    }

    /*.popup h2 { margin-top: 0; color: #333; font-family: Tahoma, Arial, sans-serif; }*/
</style>
@endsection

@extends('layouts.header')

@section('content')

<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style=" background-image: url({{url('assets/images/breadcrumb/stafford.jpeg')}});">
    <div class="container">
        <h4 class="text-white" style="display:none"><span class="typed-words"></span></h4>
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                <h4 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" style="color: honeydew;">Arama Sonuçları
            </div>
        </div>
    </div>
</div>


<div class="rts-project-area mt--50 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="mt--50 mt_sm--30 rts-blog-post-area-one sal-animate w-100" data-toggle="card-collapse" data-open="false">
                    <h6>Arama Filtreleri</h6>
                    <div>
        

                        <form action="{{ route('filterProgram') }}" method="POST">
                            @csrf
                            <div class="form-group input-group margin-none" style="margin-top: 20px;">
                                <div class="title-area w-100" style="color: #e4b517;font-weight: 600;margin-bottom: 10px;">
                                    ŞEHİRLER
                                </div>
                                @foreach($cities as $city)
                                    <p>
                                            <input type="checkbox" @if(isset($citySelect)) @if((in_array($city->city, $citySelect))) checked @endif @endif  id="{{ $city->city }}" name="city[]" value="{{ $city->city }}">
                                            <label style="font-size: 13px; font-weight: 500;" for="{{ $city->city }}"> {{ $city->city }}</label>
                                    </p>
                                @endforeach
                                
                            </div>

                            <div class="form-group input-group margin-none" style="margin-top: 20px;">
                                <div class="title-area w-100" style="color: #e4b517;font-weight: 600;margin-bottom: 10px;">
                                    FİYAT ARALIĞI
                                </div>
                                <p> <input type="checkbox" id="Price1" name="price" value="1">
                                <label  style="font-size: 13px; font-weight: 500;"  for="Price1"> 0-200 </label></p>
                                <p>  <input type="checkbox" id="Price2" name="price" value="2">
                                <label  style="font-size: 13px; font-weight: 500;"  for="Price2"> 200-500</label></p>
                                 <p> <input type="checkbox" id="Price3" name="price" value="3">
                                <label  style="font-size: 13px; font-weight: 500;"  for="Price3"> 500-1000</label></p>
                                <p>  <input type="checkbox" id="Price4" name="price" value="4">
                                <label  style="font-size: 13px; font-weight: 500;"  for="Price4"> 1000-2000 </label></p>
                            </div>

                            <div class="form-group input-group margin-none" style="margin-top: 20px;">
                                <div class="title-area w-100" style="color: #e4b517;font-weight: 600;margin-bottom: 10px;">
                                    SÜRE
                                </div>
                               <p> <input type="checkbox" id="vehicle1" name="hafta" value="1">
                                <label  style="font-size: 13px; font-weight: 500;"  for="vehicle1"> 1-5 Hafta</label></p>
                               <p> <input type="checkbox" id="vehicle2" name="hafta" value="2">
                                <label  style="font-size: 13px; font-weight: 500;"  for="vehicle2"> 5-12 Hafta</label></p>
                               <p> <input type="checkbox" id="vehicle3" name="hafta" value="3">
                                <label  style="font-size: 13px; font-weight: 500;"  for="vehicle3"> 12-23 Hafta</label></p>
                               <p> <input type="checkbox" id="vehicle3" name="hafta" value="4">
                                <label  style="font-size: 13px; font-weight: 500;"  for="vehicle3"> 23-52 Hafta</label></p>
                            </div>

                            <input type="hidden" name="program" value="{{ $program }}">
                            <input type="hidden" name="dil" value="{{ $dil }}">
                            <input type="hidden" name="part" value="{{ $part }}">
                            <input type="hidden" name="ulke" value="{{ $ulke }}">
                            
                            <div class="form-group input-group margin-none" style="margin-top: 20px;">
                                <button type="submit" class="rts-btn btn-secondary call-btn w-100"><i class="fa fa-search"></i> Filtre</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content-area mt--50 mt_sm--30">
                    <div class="tab-content" id="myTabContent">
                        <div class="col-md-12" id="programlar">
                            <div class="row">
                                @if(isset($sponsored)) 
                                
                                    @foreach($sponsored as $sponsored)

                                        <div class="col-md-12 pt-3 pb-3 search-list-item">
                                            <div class="row">
                                                <div class="col-md-4 search-list-item-gallery">
                                                    <img src="<?=url('storage')?>/{{ $sponsored->school->photo }}" class="img-responsive" alt="Genel İngilizce">
                                                </div>
                                                <div class="col-md-8 search-list-item-content">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h5 class="animated fadeIn">{{ $sponsored->name }}</h5>
                                                            <h4>{{ $sponsored->school->name }} </h4>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-8 search-list-item-detail">
                                                                    <p><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;{{ $sponsored->school->country->language }}</p>
                                                                    <p><i class="fa fa-compass" aria-hidden="true"></i>&nbsp;{{ $sponsored->school->country->name }}</p>
                                                                    <p><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;{{ $sponsored->programCategory->name }}</p>
                                                                    <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;{{ $sponsored->program_time }}</p>
                                                                </div>
                                                                <div class="col-md-4 search-list-item-price">
                                                                    <h5>{{ $sponsored->price }}</h5>
                                                                    <p>Fiyat</p>
                                                                    <a href="{{ route('programView', ['slug' => $sponsored->slug]) }}" target="_blank">Detaylı Bilgi</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                @if(isset($sponsored)) 
                                    @foreach($notsponsored as $notsponsored)

                                        <div class="col-md-12 pt-3 pb-3 search-list-item">
                                            <div class="row">
                                                <div class="col-md-4 search-list-item-gallery">
                                                    <img src="<?=url('storage')?>/{{ $notsponsored->school->photo }}" class="img-responsive" alt="Genel İngilizce">
                                                </div>
                                                <div class="col-md-8 search-list-item-content">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h5 class="animated fadeIn">{{ $notsponsored->name }}</h5>
                                                            <h4>{{ $notsponsored->school->name }} </h4>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-8 search-list-item-detail">
                                                                    <p><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;{{ $notsponsored->school->country->language }}</p>
                                                                    <p><i class="fa fa-compass" aria-hidden="true"></i>&nbsp;{{ $notsponsored->school->country->name }}</p>
                                                                    <p><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;{{ $notsponsored->programCategory->name }}</p>
                                                                    <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;{{ $notsponsored->program_time }}</p>
                                                                </div>
                                                                <div class="col-md-4 search-list-item-price">
                                                                    <h5>{{ $notsponsored->price }}</h5>
                                                                    <p>Fiyat</p>
                                                                    <a href="{{ route('programView', ['slug' => $notsponsored->slug]) }}" target="_blank">Detaylı Bilgi</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif 

                                @if(isset($programs)) 
                                
                                    @foreach($programs as $program)

                                        <div class="col-md-12 pt-3 pb-3 search-list-item">
                                            <div class="row">
                                                <div class="col-md-4 search-list-item-gallery">
                                                    <img src="<?=url('storage')?>/{{ $program->school->photo }}" class="img-responsive" alt="Genel İngilizce">
                                                </div>
                                                <div class="col-md-8 search-list-item-content">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h5 class="animated fadeIn">{{ $program->name }}</h5>
                                                            <h4>{{ $program->school->name }} </h4>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-8 search-list-item-detail">
                                                                    <p><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;{{ $program->school->country->language }}</p>
                                                                    <p><i class="fa fa-compass" aria-hidden="true"></i>&nbsp;{{ $program->school->country->name }}</p>
                                                                    <p><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;{{ $program->programCategory->name }}</p>
                                                                    <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;{{ $program->program_time }}</p>
                                                                </div>
                                                                <div class="col-md-4 search-list-item-price">
                                                                    <h5>{{ $program->price }}</h5>
                                                                    <p>Fiyat</p>
                                                                    <a href="{{ route('programView', ['slug' => $program->slug]) }}" target="_blank">Detaylı Bilgi</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@guest
<div id="registerModalFull" class="ebcf_modal show" style="display:block;z-index: 995;">
    <div class="ebcf_modal-content">
        <span id="exitRegisterForm" class="ebcf_close">&times;</span>
        <form method="POST" id="handleAjax" action="{{ route('register.post') }}" class="rts-appoinment-form">
            <div class="inner mx-auto" style="width: 100%; border-radius:15px!important; margin-left:auto; margin-right:auto;">
                <div class="title-area text-start">
                    <h4 class="title sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Kayıt Ol</h4>
                </div>
                <div>
                    <div id="errors-list"></div>
                    @csrf<br>
                        <input style="width: 100%;" type="text" placeholder="Adınız Soyadınız" id="name" name="name" required="">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif <br>
                        <input style="width: 100%;" type="email" placeholder="E-posta Adresiniz" id="email" name="email" required="">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif <br>
                    
                        <input style="width: 100%;" type="tel" placeholder="5XXXXXXXXX" id="phone" name="phone" required="">
                        @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif <br> 
                        <input style="width: 100%;" type="password" placeholder="Şifreniz" id="password" name="password" required="">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif <br> 
                        <input style="width: 100%;" type="password" placeholder="Şifrenizi Tekrar Giriniz" id="confirm_password" name="confirm_password" required="">
                        @if ($errors->has('confirm_password'))
                            <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                        @endif <br>
                    <button type="button" id="registerButton" class="rts-btn btn-primary w-100" value="Kayıt Ol">Kaydol</button><br><br>
                    <p>Zaten üyeliğim var <a href="{{ route('login') }}">Giriş Yap</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
@endguest

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script type="text/javascript">// <![CDATA[
   $("#phone").mask("(999) 999 9999");
// ]]&gt;</script>


<script>

  $(function() {
        
      /*------------------------------------------
      --------------------------------------------
      Submit Event
      --------------------------------------------
      --------------------------------------------*/
      $('body').on("click", "#registerButton", function() {
          var e = $('#handleAjax');
  
          $('#registerButton').html("Kaydınız gerçekleştiriliyor...");

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
  
          $.ajax({
              url: $('#handleAjax').attr('action'),
              data: $('#handleAjax').serialize(),
              type: "POST",
              dataType: 'json',
              success: function (data) {
  
                $('#registerButton').html("Kayıt Ol");
                  
                if (data.status) {
                    
                    $('#registerModalFull').remove().slideUp(400).delay(1000).fadeIn(600);
                    swal("Başarılı!", "Kaydınız oluşturuldu.",  "success");
                }else{
                    $("#errors-list").empty();
                    swal("Hata!", "Bir Hata Oluştu. Lütfen bilgileriniz kontrol ediniz.",  "error");
                    $.each(data.errors, function (key, val) {
                        $("#errors-list").append("<div class='alert alert-danger'>" + val + "</div>");
                    });
                    
                }
             
              }
          });
  
      });

      $('body').on('click', '#exitPopup', function(){
        $('#popup1').addClass('popup');
        $('#popup1').addClass('close');
    });
  
    });


    $(document).ready(function () {

        $('body').on('click', '#exitRegisterForm', function(){
            $('#registerModalFull').remove().slideUp(400).delay(1000).fadeIn(600);
        })
    });


    $(document).on('keyup', function(e) {
        if (e.key == "Escape") 
        $('#registerModalFull').remove().slideUp(400).delay(1000).fadeIn(600);
    });


    
  
</script>


</script>

@endsection
@endsection