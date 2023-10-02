@extends('layouts.app')

@section('title')

@if(isset($schools[0]->programcategory->id))

{{ $schools[0]->programcategory->name }}

@endif


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

@endsection

@extends('layouts.header')

@section('content')

<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style="background-image: url({{ url('assets/images/breadcrumb/stafford.jpeg')}});">
    <div class="container">
        <div class="row">
            <h4 class="text-white">Kolay Arama Yap, Sana Uygun Programı Bul;<span class="typed-words" style="color: goldenrod;">Sertifika Eğitimi</span><span class="typed-cursor typed-cursor--blink">|</span></h4>
            <h5 class="text-white">
                Edu Global ile Hayallerinizi Gerçekleştirin!
            </h5>
            
            <form action="{{ route('programsList') }}" enctype="multipart/form-data" method="post">  
                @csrf                          
                <div class="col-md-12">
                    <div class="main_input_search_part">
                        <div class="main_input_search_part_item intro-search-field">
                            <select class="form-control" id="DrpProgram" name="DrpProgram">
                                <option disabled value="">Program Seçin</option>
                                    @foreach(programCategories() as $programCategory)
                                        @if(isset($schools[0]->programcategory->id))
                                            @if($programCategory->id == $schools[0]->programcategory->id)
                                                <option selected value="{{ $schools[0]->programcategory->id }}">{{ $schools[0]->programcategory->name }}</option>
                                            @endif
                                        @endif
                                    @endforeach
                            </select>
                        </div>
                        <div class="main_input_search_part_item intro-search-field">
                            <select class="form-control" id="DrpUlke" name="DrpUlke">
                                <option value="">Ülke Seçin</option>
                            </select>

                        </div>
                        <div class="main_input_search_part_item intro-search-field">
                            <select Value="ID" class="form-control" id="DrpLang" name="DrpLang">
                                <option value="">Dil Se&#231;in</option>
                            </select>
                        </div>

                        <div class="main_input_search_part_item intro-search-field">
                            <select Value="ID" class="form-control" id="DrpBolum" name="DrpBolum">
                                <option value="">B&#246;l&#252;m Se&#231;in</option>
                            </select>
                        </div>
                        <button id="prgList" type="submit" class="rts-btn btn-secondary call-btn aramabuton">Bul</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="rts-project-area mt--50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-content-area mt--50 mt_sm--30">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab">
                            <!-- tab product area -->
                            <div class="row g-5">
                                @foreach($schools as $school)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="rts-product-one" style="background: #ebebeb;">
                                            <div class="thumbnail-area">
                                                <img src="<?=url('storage')?>/{{ $school->school->photo }}" alt="Eduglobal" style="width: 103%; height: 210px;">
                                            </div>
                                            <div class="product-contact-wrapper"style="background: #ebebeb;border-radius: 0 0 10px 10px;">
                                                <a class="" href="{{ route('schoolView', ['slug' => $school->school->slug]) }}">
                                                    <p style="font-size: 17px;">{{ $school->school->name }} </p>
                                                </a>
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
</div>

@section('js')

<script>

    $("#gonder1").click(function(e){
       e.preventDefault();

       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        var name = $('#name1').val();
        var email = $('#email1').val();
        var program = $('#program1').val();
        var phone = $('#phone1').val();

        $.ajax({
            type:'POST',
            url:"{{ route('contactPost') }}",
            data:{
                name:name,
                email:email,
                program:program,
                phone:phone
            },
            success:function(data){
                $('#contactForm').trigger("reset");
                $('#mySizeChartModal').hide();
                swal("Başarılı!", "Başvurunuz gönderildi. Size en yakın sürede ulaşacağız.", "success");
            }
        });
    });

</script>

<script>
    $(document).ready(function () {
        var id = $('#DrpProgram').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/get-countries/' + id,
            method: 'get',
            success: function (result) {
              if (result) {
                  $('#DrpUlke').empty()
                  $('#DrpUlke').append('<option disabled selected>Ülke Seçin</option>')
                  $.each(result, function (key, country) {
                      $('#DrpUlke').append('<option value="' + key +
                          '">' + country + '</option>')
                  })
              } else {
                  $('#DrpUlke').empty()
              }
            }
          })
      });
</script>

<script>
    $(document).ready(function () {
      var block2 = $('#DrpUlke')
      $('#DrpUlke').change(function(){
        let id = $('#DrpUlke').val();
        let id2 = $('#DrpProgram').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '{{ route('getLanguages')}}',
            method: 'POST',
            data:{
                id:id,
                id2:id2
            },
            success: function (result) {
              if (result) {
                  $('#DrpLang').empty()
                  $('#DrpLang').append('<option disabled selected>Dil Seçin</option>')
                  $.each(result, function (country, key) {
                      $('#DrpLang').append('<option value="' + key.language +
                          '">' + key.language + '</option>')
                  })
              } else {
                  $('#DrpLang').empty()
              }
            }
          })
        })
      });
</script>

<script>
    $(document).ready(function () {
      var block3 = $('#DrpLang')
      $('#DrpLang').change(function(){
        let id = $('#DrpUlke').val();
        let id2 = $('#DrpProgram').val();
        let id3 = $('#DrpLang').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '{{ route('getParts')}}',
            method: 'POST',
            data:{
                id:id,
                id2:id2,
                id3:id3
            },
            success: function (result) {
              if (result) {
                  $('#DrpBolum').empty()
                  $('#DrpBolum').append('<option disabled selected>Bölüm Seçin</option>')
                  $.each(result, function (country, key) {
                      $('#DrpBolum').append('<option value="' + key.part +
                          '">' + key.part + '</option>')
                  })
              } else {
                  $('#DrpBolum').empty();
              }
            }
          })
        })
      });
</script>

@endsection

@endsection