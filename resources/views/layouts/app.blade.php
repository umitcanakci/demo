<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduglobal - @yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico')}}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome-5.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('style')
    <style>
        /* The Modal (background) */
        .ebcf_modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .ebcf_modal-content {
            margin: auto;
            padding: 20px;
            max-width: 660px!important;
        }

        /* The Close Button */
        .ebcf_close {
            color: #aaaaaa;
            float: right;
            right: 14px;
            font-size: 36px;
            position: relative;
            z-index: 99999999999999999999999999;
            font-weight: bold;
        }

        *,
        *::before,
        *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        border: 0;
        }

        a {
        text-decoration: none;
        }



        #popup {
        background-color: rgb(25, 25, 25);
        position: fixed;
        left: 0;
        top: 0;
        z-index: 1000;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: 500ms all;
        -webkit-transition: 500ms all;
        -moz-transition: 500ms all;
        -ms-transition: 500ms all;
        -o-transition: 500ms all;
        }
        #popup:target {
        opacity: 1;
        visibility: visible;
        }

        .popup {
        width: 335px;
        height: 600px;
        overflow: hidden;
        transform: scale(0.6);
        -webkit-transform: scale(0.6);
        -moz-transform: scale(0.6);
        -ms-transform: scale(0.6);
        -o-transform: scale(0.6);
        transition: 500ms all;
        -webkit-transition: 500ms all;
        -moz-transition: 500ms all;
        -ms-transition: 500ms all;
        -o-transition: 500ms all;
        position: relative;
        }
        .popup-video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        }

        #popup:target .popup {
        transform: scale(1);
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        }

        aa i {
        font-size: 150px;
        transition: all 0.5s ease;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -ms-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        }
        aa i:hover {
        color: black;
        }

        .popup-close {
        position: absolute;
        color: #000;
        left: 50%;
        top: 10%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        }
        .popup-close i {
        color: black;
        font-size: 50px;
        transition: all 0.5s ease;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -ms-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        }
        .popup-close a i:hover {
        color: white;
        font-size: 70px;
        }

        </style>
    


    <meta name="facebook-domain-verification" content="ewnyy9abei340fx9sdgdbrzsap60vk" />
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "g5tx18idd4");
    </script>

</head>
<body>
    <!--
    <div id="preloader" class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    -->

    <div id="anywhere-home"></div>
    @yield('content')

    @include('layouts.footer')




    
    @yield('js')
    <script type="text/javascript">
        jQuery("body").prepend('<div id="preloader">Loading...</div>');
        jQuery(document).ready(function() {
            jQuery("#preloader").remove();
    });
    </script>
    <!-- scripts start form hear -->
    <script src="{{ asset('assets/js/vendor/jqueryui.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/waypoint.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/counterup.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/sal.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/fancybox.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/metismenu.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/marquery.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/waw.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/hover-revel.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/twinmax.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/contact.form.js')}}"></script>
    <!-- main Js -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

    <script>
        $(window).scroll(function (data) {
            if ($(window).scrollTop() >= 152) {
                $('.active-light').hide();
                $('.active-dark').show();
            } else {
                $('.active-light').show();
                $('.active-dark').hide();
            }
        });
    </script>
    <!-- scripts end form hear -->
    <script>
        // Get the video
        var video = document.getElementById("myVideo");

        // Get the button
        var btn = document.getElementById("myBtn");

        // Pause and play the video, and change the button text
        function myFunction() {
            if (video.paused) {
                video.play();
                btn.innerHTML = "Pause";
            } else {
                video.pause();
                btn.innerHTML = "Play";
            }
        }
    </script>

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

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '607940937336056');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=607940937336056&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

    
    
</body>

</html>