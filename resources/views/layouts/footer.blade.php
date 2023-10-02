<div class="rts-cta-section-start ptb--50 cta-bg-h4">
    <div class="container">
        <div class="row">
            <div class="title-area text-center">
                <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate">
                    Vakit Kaybetmeden
                </span>
                <h3 class="title animated fadeIn sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">  Size En Uygun Programı Seçin</h3>
                <div class="button-area sal-animate" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                     <a href="#" id="mySizeChart1" class="btn-secondary call-btn" style="padding: 8px 19px;">Hemen Başvur<i class="far fa-chevron-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-brand-area rts-section ptb--30">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="brand-one-wrapper">
                    <!-- Swiper -->
                    <div class="swiper brand-1 swiper-initialized swiper-horizontal swiper-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-f82e46a5ed56e796" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-2208px, 0px, 0px);">
                                @foreach(brandimages() as $image)
                                    <div class="swiper-slide" data-swiper-slide-index="17" role="group" aria-label="18 / 18" style="width: 576px; margin-right: 100px;">
                                        <a href="#"><img class="mt-dec-brand" src="<?=url('storage')?>/{{ $image->photo }}" alt="Brand_area_images"></a>
                                    </div>
                                @endforeach
                                @foreach(schoolPhotos() as $photo)
                                    <div class="swiper-slide" data-swiper-slide-index="17" role="group" aria-label="18 / 18" style="width: 576px; margin-right: 100px;">
                                        <a href="{{ route('schoolView', ['slug' => $photo->slug ] ) }}"><img class="mt-dec-brand" src="<?=url('storage')?>/{{ $photo->logo }}" alt="Brand_area_images"></a>
                                    </div>
                                @endforeach
                            </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-footer-area-one ptb--50 footer-one-bg">
    <div class="container">
        <div class="row">
            <div class="bg-footer-one-shape">

            </div>
            <div class="col-lg-4">
                <div class="footer-one-left">
                    <a class="logo" href="{{ route('index') }}">
                        <img src="{{ asset('assets/images/logo/eduglobal-logo-white.png') }}" alt="Logo_image" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" style="max-width: 250px;" class="sal-animate">
                    </a>
                    <p class="disc sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        Edu Global ailesi olarak sizlere Yurtdışı Dil Eğitimi Danışmanlığı konusunda  Türkiye'nin ilk ve tek Yurtdışı dil eğitim platformunu sunuyoruz.
                    </p>
                   <ul class="social-area">
                    <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://www.facebook.com/eduglobaltr/"><i class="fab fa-facebook-f"></i></a></li>
                    <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://twitter.com/eduglobaltr"><i class="fab fa-twitter"></i></a></li>
                    <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://www.instagram.com/eduglobaltr"><i class="fab fa-instagram"></i></a></li>
                    <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://www.youtube.com/channel/UCoX-X9I0Erpd5nie1YKZISQ"><i class="fab fa-youtube"></i></a></li>
                </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="footer-right-one">
                    <div class="single-wized-footer">
                        <h5 class="title-heading sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            Okullar
                        </h5>
                        <ul class="list">
                            @foreach(randomSchools() as $schools)
                             <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{ route('schoolView', ['slug' => $schools->slug ]) }}">{{ $schools->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="single-wized-footer">
                        <h5 class="title-heading sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            Programlar
                        </h5>
                        <ul class="list">
                            @foreach(programCategories() as $programCategories)
                                <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{ route('programCategoryView', ['slug' => $programCategories->slug]) }}">{{ $programCategories->name  }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="single-wized-footer">
                        <h5 class="title-heading sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            Kurumsal
                        </h5>
                        <ul class="list">
                            <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{ route('aboutUs') }}">Hakkımızda</a></li>
                            @foreach(legals() as $legal)
                                <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{ route('legalView', ['slug' => $legal->slug] ) }}">{{ $legal->name }}</a></li>
                            @endforeach
                            <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{ route('bankAccount') }}">Banka Hesap Bilgileri</a></li>
                            <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="{{ route('contact') }}">İletişim</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        <img src="{{ asset('assets/images/logo/banka.png') }}" style="max-width: 100%;">
            <div class="row">
                <div class="col-lg-12 justify-content-center text-center">
                 Tüm hakları saklıdır. 2023 &#169; <a target="_blank" href="https://lim10medya.com.tr"><img src="{{ asset('img/lim10logo.png') }}" style="max-width: 7%;" class="img-fluid"></a>
                </div>
            </div>
        
    </div>
    
</div>




<script>
    $('.ebcf_close').click(function () {
        $('#mySizeChart1Modal').hide();
    });


    var ebModal = document.getElementById('mySizeChart1Modal');

    // Get the button that opens the modal
    var ebBtn = document.getElementById("mySizeChart1");

    // Get the <span> element that closes the modal
    var ebSpan = document.getElementsByClassName("ebcf_close")[0];

    // When the user clicks the button, open the modal
    ebBtn.onclick = function () {
        ebModal.style.display = "block";
    }


    document.getElementsByClassName('hemenbasvur')[0].onclick = function () {
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

