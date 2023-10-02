<header class="header-one header--sticky">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-3 col-4">
                <!-- logo area start -->
                <a href="{{ route('index') }}" class="thumbnail">
                    <img class="active-light" src="{{ asset('assets/images/logo/eduglobal-logo-white.png') }}" alt="eduglobal-logo">
                    <img class="active-dark" src="{{ asset('assets/images/logo/eduglobal-logo-white.png') }}" alt="eduglobal-logo">
                </a>
                <!-- logo area end -->
            </div>
            
            <div class="col-lg-7 d-none d-xl-block">
                <div class="main-header">
                    <nav class="main-nav" style=" border-radius: 50px;padding-right:35px;">
                        <ul class="mainmenu">
                            <li>
							<i class="fa fa-home" aria-hidden="true"></i>
                                <a href="{{ route('index') }}">Ana Sayfa</a>

                            </li>
                            <li class="has-droupdown">
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <a href="#">Programlar</a>
                                <ul class="submenu">
                                    @foreach(programCategories() as $program)
                                        <li><a class="single" href="{{ route('programCategoryView', ['slug' => $program->slug] ) }}">{{ $program->name }}</a></li>
                                    @endforeach
                                    @foreach(pages() as $page)
                                        @if($page->status = "ACTIVE")
                                        <li><a class="single" href="{{ route('specialPage', ['slug' => $page->slug]) }}">{{ $page->title }}</a></li>
                                        @endif
                                    @endforeach

                                </ul>
                            </li>
                            <li>
						<i class="fa fa-globe" aria-hidden="true"></i>
                                <a href="{{ route('countries') }}">Ülkeler</a>
                            </li>

                            <li>
							<i class="fa fa-users" aria-hidden="true"></i>
                                <a href="{{ route('consultants') }}">Danışmanlar</a>
                            </li>

                            <li>
							<i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="{{ route('contact') }}">İletişim</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-3 col-lg-10 col-md-9 col-8">
                <div class="header-right text-center">
                    <a href="#" id="mySizeChart" class="rts-btn btn-secondary call-btn" style="padding: 12px 10px;">
                        Teklif Al
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M5.96875 7C5.96875 6.46875 5.5 6 4.96875 6H4.5C3.375 6 2.5 6.90625 2.5 8.03125V9.5C2.5 10.625 3.375 11.5 4.5 11.5H5C5.53125 11.5 6 11.0625 6 10.5L5.96875 7ZM8 0C3.5 0 0.125 3.75 0 8V9.25C0 9.6875 0.3125 10 0.71875 10C1.09375 10 1.5 9.6875 1.5 9.25V8C1.5 4.4375 4.40625 1.53125 8 1.53125C11.5625 1.53125 14.5 4.4375 14.5 8V12.5C14.5 13.2188 13.9375 13.75 13.25 13.75H9.78125C9.53125 13.3125 9.03125 13 8.5 13H7.53125C6.8125 13 6.15625 13.5 6 14.2188C5.84375 15.1875 6.5625 16 7.46875 16H8.5C9.03125 16 9.53125 15.7188 9.78125 15.25H13.25C14.75 15.25 16 14.0312 16 12.5V8C15.8438 3.75 12.4688 0 8 0ZM11.5 11.5C12.5938 11.5 13.5 10.625 13.5 9.5V8.03125C13.5 6.90625 12.5938 6 11.5 6H11C10.4375 6 10 6.46875 10 7.03125V10.5C10 11.0625 10.4375 11.5 11 11.5H11.5Z" fill="#002548" />
                        </svg>
                    </a>
                    <a href="{{ route('profile') }}" class="rts-btn btn-secondary menu-btn" style="padding: 12px 10px;">
                    @auth
                        
                        Profilim <i class="fa fa-user" aria-hidden="true"></i>
                        @endauth

                        @guest
                        Üye Ol <br> Giriş Yap
                        @endguest
                        
                    </a>
                    <a id="menu-btn" href="#" class="rts-btn btn-secondary menu-btn" onclick="event.preventDefault();">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
                            <rect y="12" width="18" height="2" fill="#002548" />
                            <rect x="5" y="6" width="8" height="2" fill="#002548" />
                            <rect width="18" height="2" fill="#002548" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>


<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="{{ route('index') }}"><img class="logo" src="{{ asset('xx/assets/images/logo/eduglobal-logo.png') }}" alt="EduGlobal"></a>
        <div class="body d-none d-xl-block">

            <p class="disc">
                Copright © 2021 EG EDU GLOBAL YURTDIŞI EĞİTİM DANIŞMANLIK LİMİTED ŞİRKETİ Tüm Hakları Saklıdır.
            </p>
            <div class="social-wrapper-two">
                <ul class="social-area">
                    <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://www.facebook.com/eduglobaltr/"><i class="fab fa-facebook-f"></i></a></li>
                    <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://twitter.com/eduglobaltr"><i class="fab fa-twitter"></i></a></li>
                    <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://www.instagram.com/eduglobaltr"><i class="fab fa-instagram"></i></a></li>
                    <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://www.youtube.com/channel/UCoX-X9I0Erpd5nie1YKZISQ"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="get-in-touch mt--50">
                <!-- title -->
                <div class="h6 title">Hızlı İletişim</div>
                <!-- title End -->
                <div class="wrapper">
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="#">+0850 241 10 11</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="#">info@eduglobal.com.tr</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="#">www.eduglobal.com.tr</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">Altınşehir Mah. 163. (280.) Sok. Öndül Elite Offices A Blok No:11/A Nilüfer,Bursa 16120 Türkiye</a>
                    </div>
                    <!-- single ENd -->
                </div>
            </div>
        </div>

        <div class="body-mobile d-block d-xl-none">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li class="has-droupdown">
                        <a href="#">Programlar</a>
                         <ul class="submenu">
                                    @foreach(programCategories() as $program)
                                        <li><a class="single" href="{{ route('programCategoryView', ['slug' => $program->slug] ) }}">{{ $program->name }}</a></li>
                                    @endforeach
                                </ul>
                    </li>
                    <li><a href="{{ route('countries') }}">Ülkeler</a></li>

                    <li> <a href="{{ route('consultants') }}">Danışmanlar</a></li>

                    <li>
                        <a href="{{ route('contact') }}">İletişim</a>
                    </li>
                </ul>
            </nav>
            <div class="social-wrapper-two mt--50">
                <ul class="social-area">
                    <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://www.facebook.com/eduglobaltr/"><i class="fab fa-facebook-f"></i></a></li>
                    <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://twitter.com/eduglobaltr"><i class="fab fa-twitter"></i></a></li>
                    <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://www.instagram.com/eduglobaltr"><i class="fab fa-instagram"></i></a></li>
                    <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://www.youtube.com/channel/UCoX-X9I0Erpd5nie1YKZISQ"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--
    <div class="modal-sidebar-scroll rts-dark-light" style="right: 12px;">
        <ul>
                
            
            <li><span>English</span><img src="https://cdn-icons-png.flaticon.com/512/197/197374.png" alt="English" style="max-width: 30px;"></li>
            <li><span>Türkçe</span><img src="https://cdn-icons-png.flaticon.com/512/5111/5111548.png" alt="Tükçe" style="max-width: 30px;"></li>
        </ul>
    </div>
 -->
<div id="mySizeChartModal" class="ebcf_modal" style="z-index: 9989999999999999999999;">
    <div class="ebcf_modal-content">
        <span class="ebcf_close">&times;</span>
        <form id="modalForm" method="POST" class="rts-appoinment-form">
            <div class="inner mx-auto" style="border-radius:15px!important; margin-left:auto; margin-right:auto;">
                <div class="title-area text-start">
                    <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate">Hızlı Başvuru</span>
                    <h4 class="title sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Sizi Arayalım</h4>
                </div>
                <div>
                    <input type="text" class="w-100" id="name1" name="name" placeholder="İsim" required="">
                    <input type="email" class="w-100" id="email1" name="email" placeholder="E-posta" required="">
                    <input type="text" class="w-100" id="program1" name="program" placeholder="Program" required="">
                    <input type="text" class="w-100" id="phone1" name="phone" placeholder="Telefon" required="">
                    <button type="submit" id="gonder1" class="rts-btn btn-primary w-100">Gönder</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $('.ebcf_close').click(function () {
        $('#mySizeChartModal').hide();
    });


    var ebModal = document.getElementById('mySizeChartModal');

    // Get the button that opens the modal
    var ebBtn = document.getElementById("mySizeChart");

    // Get the <span> element that closes the modal
    var ebSpan = document.getElementsByClassName("ebcf_close")[0];

    // When the user clicks the button, open the modal
    ebBtn.onclick = function () {
        ebModal.style.display = "block";
    }


    document.getElementsByClassName('.hemenbasvur')[0].onclick = function () {
        ebModal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    ebSpan.onclick = function () {
        ebModal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == ebModal) {
            ebModal.style.display = "none";
        }
    }
</script>