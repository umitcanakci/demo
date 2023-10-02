@extends('layouts.app')

@section('title')

İletişim

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

<div class="rts-breadcrumb-area breadcrumb-bg bg_image" style="background-image: url( {{ url('xx/assets/images/breadcrumb/iletisim.jpeg')}} );">
    <div class="container">
        <div class="row align-items-center" style="    margin-bottom: 132px;">
            <div class="col-12 text-center">
                <h4 class="title animated fadeIn sal-animate" style="color: white;" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">İletişim</h4>
                <p class="text-white">Edu Global Yurtdışı Programları ile sizleri #DünyayaBağlar</p>
            </div>
        </div>
    </div>
</div>

<div class="rts-contact-area-page ptb--50">
    <div class="container">
        <div class="row g-5" style="margin-bottom: 40px;">
            <!-- single contact area -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-contact-one-inner sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="thumbnail">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20Amerika%20Birle%C5%9Fik%20Devletleri!5e0!3m2!1str!2str!4v1672399733625!5m2!1str!2str" width="800" height="249" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="content1" style="padding: 20px">
                        <div class="info">
                            <h5>New York </h5>
                            <strong>1 Meadowlands Plaza, Suite 200, East Rutherford, NJ 07073 / USA</strong><br>
                            <strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M5.96875 7C5.96875 6.46875 5.5 6 4.96875 6H4.5C3.375 6 2.5 6.90625 2.5 8.03125V9.5C2.5 10.625 3.375 11.5 4.5 11.5H5C5.53125 11.5 6 11.0625 6 10.5L5.96875 7ZM8 0C3.5 0 0.125 3.75 0 8V9.25C0 9.6875 0.3125 10 0.71875 10C1.09375 10 1.5 9.6875 1.5 9.25V8C1.5 4.4375 4.40625 1.53125 8 1.53125C11.5625 1.53125 14.5 4.4375 14.5 8V12.5C14.5 13.2188 13.9375 13.75 13.25 13.75H9.78125C9.53125 13.3125 9.03125 13 8.5 13H7.53125C6.8125 13 6.15625 13.5 6 14.2188C5.84375 15.1875 6.5625 16 7.46875 16H8.5C9.03125 16 9.53125 15.7188 9.78125 15.25H13.25C14.75 15.25 16 14.0312 16 12.5V8C15.8438 3.75 12.4688 0 8 0ZM11.5 11.5C12.5938 11.5 13.5 10.625 13.5 9.5V8.03125C13.5 6.90625 12.5938 6 11.5 6H11C10.4375 6 10 6.46875 10 7.03125V10.5C10 11.0625 10.4375 11.5 11 11.5H11.5Z" fill="#e4b517"></path>
                                </svg> 0850 241 10 11<br>
                            </strong> 
                            <strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M5.96875 7C5.96875 6.46875 5.5 6 4.96875 6H4.5C3.375 6 2.5 6.90625 2.5 8.03125V9.5C2.5 10.625 3.375 11.5 4.5 11.5H5C5.53125 11.5 6 11.0625 6 10.5L5.96875 7ZM8 0C3.5 0 0.125 3.75 0 8V9.25C0 9.6875 0.3125 10 0.71875 10C1.09375 10 1.5 9.6875 1.5 9.25V8C1.5 4.4375 4.40625 1.53125 8 1.53125C11.5625 1.53125 14.5 4.4375 14.5 8V12.5C14.5 13.2188 13.9375 13.75 13.25 13.75H9.78125C9.53125 13.3125 9.03125 13 8.5 13H7.53125C6.8125 13 6.15625 13.5 6 14.2188C5.84375 15.1875 6.5625 16 7.46875 16H8.5C9.03125 16 9.53125 15.7188 9.78125 15.25H13.25C14.75 15.25 16 14.0312 16 12.5V8C15.8438 3.75 12.4688 0 8 0ZM11.5 11.5C12.5938 11.5 13.5 10.625 13.5 9.5V8.03125C13.5 6.90625 12.5938 6 11.5 6H11C10.4375 6 10 6.46875 10 7.03125V10.5C10 11.0625 10.4375 11.5 11 11.5H11.5Z" fill="#e4b517"></path>
                                </svg> info@eduglobal.com.tr
                            </strong>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-contact-one-inner sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="thumbnail">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.506196251398!2d29.005983315834726!3d41.07978542296948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab66774177699%3A0x936fefd8e611f9de!2sKolektif%20House!5e0!3m2!1str!2str!4v1672399991487!5m2!1str!2str" width="800" height="249" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="content1" style="padding: 20px">
                        <div class="info">
                            <h5>İstanbul </h5>
                            <strong>Esentepe, Kolektif House, Talatpaşa Cd. No: 5/1, 34394 Şişli/İstanbul</strong><br>
                            <strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M5.96875 7C5.96875 6.46875 5.5 6 4.96875 6H4.5C3.375 6 2.5 6.90625 2.5 8.03125V9.5C2.5 10.625 3.375 11.5 4.5 11.5H5C5.53125 11.5 6 11.0625 6 10.5L5.96875 7ZM8 0C3.5 0 0.125 3.75 0 8V9.25C0 9.6875 0.3125 10 0.71875 10C1.09375 10 1.5 9.6875 1.5 9.25V8C1.5 4.4375 4.40625 1.53125 8 1.53125C11.5625 1.53125 14.5 4.4375 14.5 8V12.5C14.5 13.2188 13.9375 13.75 13.25 13.75H9.78125C9.53125 13.3125 9.03125 13 8.5 13H7.53125C6.8125 13 6.15625 13.5 6 14.2188C5.84375 15.1875 6.5625 16 7.46875 16H8.5C9.03125 16 9.53125 15.7188 9.78125 15.25H13.25C14.75 15.25 16 14.0312 16 12.5V8C15.8438 3.75 12.4688 0 8 0ZM11.5 11.5C12.5938 11.5 13.5 10.625 13.5 9.5V8.03125C13.5 6.90625 12.5938 6 11.5 6H11C10.4375 6 10 6.46875 10 7.03125V10.5C10 11.0625 10.4375 11.5 11 11.5H11.5Z" fill="#e4b517"></path>
                                </svg> 0850 241 10 11<br>
                            </strong> 
                            <strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M5.96875 7C5.96875 6.46875 5.5 6 4.96875 6H4.5C3.375 6 2.5 6.90625 2.5 8.03125V9.5C2.5 10.625 3.375 11.5 4.5 11.5H5C5.53125 11.5 6 11.0625 6 10.5L5.96875 7ZM8 0C3.5 0 0.125 3.75 0 8V9.25C0 9.6875 0.3125 10 0.71875 10C1.09375 10 1.5 9.6875 1.5 9.25V8C1.5 4.4375 4.40625 1.53125 8 1.53125C11.5625 1.53125 14.5 4.4375 14.5 8V12.5C14.5 13.2188 13.9375 13.75 13.25 13.75H9.78125C9.53125 13.3125 9.03125 13 8.5 13H7.53125C6.8125 13 6.15625 13.5 6 14.2188C5.84375 15.1875 6.5625 16 7.46875 16H8.5C9.03125 16 9.53125 15.7188 9.78125 15.25H13.25C14.75 15.25 16 14.0312 16 12.5V8C15.8438 3.75 12.4688 0 8 0ZM11.5 11.5C12.5938 11.5 13.5 10.625 13.5 9.5V8.03125C13.5 6.90625 12.5938 6 11.5 6H11C10.4375 6 10 6.46875 10 7.03125V10.5C10 11.0625 10.4375 11.5 11 11.5H11.5Z" fill="#e4b517"></path>
                                </svg> info@eduglobal.com.tr
                            </strong>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-contact-one-inner sal-animate" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="thumbnail">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3046.330553933673!2d28.913085715817893!3d40.223952075264464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca113a816231dd%3A0x98c4efc0c059126f!2zRWR1IEdsb2JhbCBUw7xya2l5ZSBZdXJ0ZMSxxZ_EsSBFxJ9pdGlt!5e0!3m2!1str!2str!4v1672400063231!5m2!1str!2str" width="800" height="249" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="content1" style="padding: 20px">
                        <div class="info">
                            <h5>Bursa </h5>
                            <strong>Altınşehir Mah. 163. (280.) Sok. Öndül Elite Offices A Blok No:11/A Nilüfer/BURSA</strong><br>
                            <strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M5.96875 7C5.96875 6.46875 5.5 6 4.96875 6H4.5C3.375 6 2.5 6.90625 2.5 8.03125V9.5C2.5 10.625 3.375 11.5 4.5 11.5H5C5.53125 11.5 6 11.0625 6 10.5L5.96875 7ZM8 0C3.5 0 0.125 3.75 0 8V9.25C0 9.6875 0.3125 10 0.71875 10C1.09375 10 1.5 9.6875 1.5 9.25V8C1.5 4.4375 4.40625 1.53125 8 1.53125C11.5625 1.53125 14.5 4.4375 14.5 8V12.5C14.5 13.2188 13.9375 13.75 13.25 13.75H9.78125C9.53125 13.3125 9.03125 13 8.5 13H7.53125C6.8125 13 6.15625 13.5 6 14.2188C5.84375 15.1875 6.5625 16 7.46875 16H8.5C9.03125 16 9.53125 15.7188 9.78125 15.25H13.25C14.75 15.25 16 14.0312 16 12.5V8C15.8438 3.75 12.4688 0 8 0ZM11.5 11.5C12.5938 11.5 13.5 10.625 13.5 9.5V8.03125C13.5 6.90625 12.5938 6 11.5 6H11C10.4375 6 10 6.46875 10 7.03125V10.5C10 11.0625 10.4375 11.5 11 11.5H11.5Z" fill="#e4b517"></path>
                                </svg> 0850 241 10 11<br>
                            </strong> 
                            <strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M5.96875 7C5.96875 6.46875 5.5 6 4.96875 6H4.5C3.375 6 2.5 6.90625 2.5 8.03125V9.5C2.5 10.625 3.375 11.5 4.5 11.5H5C5.53125 11.5 6 11.0625 6 10.5L5.96875 7ZM8 0C3.5 0 0.125 3.75 0 8V9.25C0 9.6875 0.3125 10 0.71875 10C1.09375 10 1.5 9.6875 1.5 9.25V8C1.5 4.4375 4.40625 1.53125 8 1.53125C11.5625 1.53125 14.5 4.4375 14.5 8V12.5C14.5 13.2188 13.9375 13.75 13.25 13.75H9.78125C9.53125 13.3125 9.03125 13 8.5 13H7.53125C6.8125 13 6.15625 13.5 6 14.2188C5.84375 15.1875 6.5625 16 7.46875 16H8.5C9.03125 16 9.53125 15.7188 9.78125 15.25H13.25C14.75 15.25 16 14.0312 16 12.5V8C15.8438 3.75 12.4688 0 8 0ZM11.5 11.5C12.5938 11.5 13.5 10.625 13.5 9.5V8.03125C13.5 6.90625 12.5938 6 11.5 6H11C10.4375 6 10 6.46875 10 7.03125V10.5C10 11.0625 10.4375 11.5 11 11.5H11.5Z" fill="#e4b517"></path>
                                </svg> info@eduglobal.com.tr
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rts-contact-form-area mt--30">
    <div class="container">

        <div class="rts-contact-fluid rts-section-gap" style="margin-bottom: 30px; border-radius: 10px;">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area text-center mt--30">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"
                              class="sal-animate" style="font-size:30px">ÇOK YAKINDA!</span>
                        <p class="title animated fadeIn sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                           Ankara-İzmir-Gaziantep-Trabzon ve Antalya'da sizlerleyiz. 
                        </p>
                    </div>
                </div>
            </div>
            
    </div>

</div>
<!-- conact single area end -->
<!-- conact us form fluid start -->
<div class="rts-contact-form-area mt--30">
    <div class="container">

        <div class="rts-contact-fluid rts-section-gap" style="margin-bottom: 30px; border-radius: 10px;">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area text-center mt--30">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"
                              class="sal-animate">İletişim Formu!</span>
                        <p class="title animated fadeIn sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            Formumuzu doldurarak sizinle en kısa süre içerisinde iletişime geçeceğiz.
                        </p>
                    </div>
                </div>
            </div>
            <div class="form-wrapper">
                <div id="form-messages"></div>
                <form id="contact-form">
                    <div class="name-email">
                        <input type="text" name="name" id="name" placeholder="İsim" required>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div>
                        <input style="width:100%;" type="text" id="phone" name="subject" placeholder="Konu">
                        <textarea style="width:100%;" id="message" placeholder="Mesajınız" name="message"></textarea>
                    </div>
                    <button id="contactSend" type="button" class="rts-btn btn-primary">Gönder</button>
                    <br>
                </form>
            </div>
        </div>
    </div>

</div>

@section('js')

   <!-- scripts start form hear -->
    <script src="{{ asset('xx/assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{ asset('xx/assets/js/vendor/jqueryui.js')}}"></script>
    <script src="{{ asset('xx/assets/js/vendor/waypoint.js')}}"></script>
    <script src="{{ asset('xx/assets/js/plugins/swiper.js')}}"></script>
    <script src="{{ asset('xx/assets/js/plugins/counterup.js')}}"></script>
    <script src="{{ asset('xx/assets/js/plugins/sal.min.js')}}"></script>
    <script src="{{ asset('xx/assets/js/plugins/fancybox.js')}}"></script>
    <script src="{{ asset('xx/assets/js/plugins/metismenu.js')}}"></script>
    <script src="{{ asset('xx/assets/js/plugins/marquery.js')}}"></script>
    <script src="{{ asset('xx/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('xx/assets/js/vendor/waw.js')}}"></script>


    <script src="{{ asset('xx/assets/js/plugins/hover-revel.js')}}"></script>
    <script src="{{ asset('xx/assets/js/plugins/twinmax.js')}}"></script>


    <script src="{{ asset('xx/assets/js/plugins/contact.form.js')}}"></script>


    <!-- main Js -->
    <script src="{{ asset('xx/assets/js/main.js')}} "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $("#contactSend").click(function(e){
       e.preventDefault();

       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        var name = $('#name').val();
        var email = $('#email').val();
        var program = $('#message').val();
        var phone = $('#phone').val();

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
                $('#contact-form').trigger("reset");
                swal("Başarılı!", "Başvurunuz gönderildi. Size en yakın sürede ulaşacağız.", "success");
            }
        });
    });
    </script>




@endsection
@endsection