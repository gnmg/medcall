<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MedCall</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-204286431-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-204286431-1');
    </script>


    <!-- Google Tag Manager -->
    <!-- <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K79J7JD');
    </script> -->
    <!-- End Google Tag Manager -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/saas-c/phone.svg" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/theme.css"> -->
    <link rel="stylesheet" href="assets/css/english-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/623d6bfc2abe5b455fc18f6f/1fuvurkvm';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <!-- Global site tag (gtag.js) - Google Ads: 768058142 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-768058142"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-768058142');
    </script>

<script type="text/javascript" src="https://static.leaddyno.com/js"></script>
    <script>
    LeadDyno.key = "a7d557dba0387e907b3f5359b186b2d26eb294cd";
    LeadDyno.recordVisit();
    LeadDyno.autoWatch();
    </script>
</head>

<body class="saas-classic">
    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K79J7JD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->
    <!-- preloader - start -->
    <div id="preloader" class="saas-classic-preloader"></div>
    <!-- Start of nav section
        ============================================= -->
    <header id="header_main" class="saas_two_main_header">
        <div class="container">
            <div class="s_main_menu">
                <div class="row">
                    <div class="col-md-2">
                        <div class="brand_logo">
                            <a href="{{ url('/') }}"><img src="assets/img-english/saas-c/logo/medcall-logo.png" alt=""></a>
                            <!-- <a href="{{ url('/') }}"><img src="assets/img-english/saas-c/logo/medcall-logo.png"
                                    alt=""></a> -->
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="clearfix float-right main_menu_list">
                            <nav class="clearfix s2-main-navigation ul-li">
                                <ul id="main-nav" class="clearfix navbar-nav text-capitalize">
                                    <li><a href="#features">{{ __('lang.features')}}</a></li>
                                    <li><a href="#s2-pricing">{{ __('lang.pricing')}}</a></li>
                                    <li><a href="#faq">{{ __('lang.faq')}}</a></li>
                                    @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">{{ __('lang.login')}}</a></li>
                                    @else
                                    <li><a href="{{ url('/dashboard') }}">{{ __('lang.myreminders')}}</a></li>
                                    @endif
                                </ul>
                            </nav>
                            @if (Auth::guest())
                            <div class="text-center saas_sign_up_btn">
                                <a href="{{ url('/register') }}">FREE TRIAL</a>
                            </div>
                            @else

                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- //desktop menu -->
            <div class="s2-mobile_menu relative-position">
                <div class="s2-mobile_menu_button s2-open_mobile_menu">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="s2-mobile_menu_wrap">
                    <div class="mobile_menu_overlay s2-open_mobile_menu"></div>
                    <div class="s2-mobile_menu_content">
                        <div class="s2-mobile_menu_close s2-open_mobile_menu">
                            <i class="far fa-times-circle"></i>
                        </div>
                        <div class="text-center m-brand-logo">
                            <a href="!#"><img src="assets/img/saas-c/logo/kusuricall-logo-ja8.png" alt=""></a>
                        </div>
                        <nav class="clearfix s2-mobile-main-navigation ul-li">
                            <ul id="m-main-nav" class="clearfix navbar-nav text-capitalize">
                                <li><a href="#features">{{ __('lang.features')}}</a></li>
                                <li><a href="#s2-pricing">{{ __('lang.pricing')}}</a></li>
                                <li><a href="#faq">{{ __('lang.faq')}}</a></li>
                                @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">{{ __('lang.login')}}</a></li>
                                @else
                                <li><a href="{{ url('/dashboard') }}">{{ __('lang.myreminders')}}</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>


    @yield('content')


    <footer class="footer">
        <div class="footer__inner inner">
            <div class="footer__contents">
                <div class="footer__logo"><img src="assets/img-english/saas-c/logo/medcall-white.png" alt=""></div>
                <div class="footer__nav">
                    <ul class="footer__lists">
                        <!-- <li class="footer__list"><a href="/"><i class="fas fa-caret-right"></i>トップページ</a></li> -->
                        <li class="footer__list"><a href="#faq"><i class="fas fa-caret-right"></i>FAQ</a></li>
                        <li class="footer__list"><a href="#features"><i class="fas fa-caret-right"></i>Features</a></li>
                        <!-- <li class="footer__list"><a href="dairiten"><i class="fas fa-caret-right"></i>代理店</a></li> -->
                        @if (Auth::guest())
                        <li class="footer__list"><a href="{{ url('/login') }}"><i class="fas fa-caret-right"></i>{{ __('lang.login')}}</a></li>
                        @else
                        <li class="footer__list"><a
                                href="{{ url('/dashboard') }}"><i class="fas fa-caret-right"></i>{{ __('lang.myreminders')}}</a></li>
                        @endif
                        <li class="footer__list"><a href="#pricing"><i class="fas fa-caret-right"></i>Pricing</a></li>
                        <li class="footer__list"><a href="https://tawk.to/chat/623d6bfc2abe5b455fc18f6f/1fuvurkvm"><i
                                    class="fas fa-caret-right"></i>Contact Us</a></li>
                        <!-- <li class="footer__list"><a href="#flow"><i class="fas fa-caret-right"></i>ご利用のながれ</a></li> -->
                    </ul>
                </div>
                <div class="footer__right">
                    <ul class="footer__terms">
                        <li class="footer__term"><a href="/terms">Terms</a></li>
                        <li class="footer__term"><a href="/privacy">Privacy Policy</a></li>
                        <!-- <li class="footer__term"><a href="/trade">特定商取引に関する法律</a></li> -->
                    </ul>
                </div>
                <div class="footer__logo none"><img src="img/logo-white.png" alt=""></div>
            </div>
            <div class="copy-right">©<?php echo date("Y"); ?> Medcall</div>
        </div>
        <!-- <div class="page__up" id="page-up">
            <div class="page__up-btn"></div>
        </div> -->
        <div class="try-button">
            <a href="{{ url('/register') }}">
                <img src="img/try-button.png" alt="">
            </a>
        </div>
    </footer>
    <script src="js/script.js"></script>
    <!-- End of footer section
        ============================================= -->
    <!-- JS library -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/pagenav.js"></script>
    <script src="assets/js/jquery.barfiller.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>