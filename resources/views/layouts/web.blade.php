<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>KusuriKall</title>
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


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet"> -->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/60d89d8d7f4b000ac039cc8c/1f972esvh';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
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

<body>
    
    <header class="header">
        <div class="header__inner">
            <div class="header__contents">
                <h1 class="header__logo" id="header__logo"><a href="/"><img src="img/logo.png" alt="ヘッダーロゴ"></a></h1>
                <ul class="header__nav">
                    <li class="header__list"><a href="/#function">機能</a></li>
                    <li class="header__list"><a href="/#price">料金プラン</a></li>
                    <li class="header__list"><a href="/#flow">ご利用のながれ</a></li>
                    <li class="header__list"><a href="/#faq">よくある質問</a></li>
                    <li class="header__list"><a
                            href="https://tawk.to/chat/60d89d8d7f4b000ac039cc8c/1f972esvh">お問い合わせ</a></li>


                </ul>
                @if (Auth::guest())
                <div class="header__btn"><a href="{{ url('/register') }}" class="btn">無料お試しサービス</a></div>
                @else

                @endif
                @if (Auth::guest())
                <div class="header__list sp-hide no-decoration"><a href="{{ url('/login') }}">{{ __('lang.login')}}</a></li>
                @else
                <div class="header__list sp-hide"><a id="myreminder__link"
                        href="{{ url('/dashboard') }}">{{ __('lang.myreminders')}}</a></li>
                @endif
            </div>
        </div>
    </header>

    <div id="bars" class="bars-items">
        <div class="bars">
            <div id="bar1" class="bar-1"></div>
            <div id="bar2" class="bar-2"></div>
            <div id="bar3" class="bar-3"></div>
        </div>
    </div>

    <div class="drawer" id="drawer">
        <div class="drawer__logo"><a href="/"><img src="img/logo.png" alt=""></a></div>
        <div class="drawer__contents">
            <div class="drawer__inner">
                <div class="drawer__nav">
                    <ul class="drawer__lists">
                        <li class="drawer__list"><a href="/"><i class="fas fa-caret-right"></i>トップページ</a></li>
                        <!-- <li class="drawer__list"><a href="#faq"><i class="fas fa-caret-right"></i>よくある質問</a></li>
                        <li class="drawer__list"><a href="http://127.0.0.1:8000/#function"><i class="fas fa-caret-right"></i>機能</a></li> -->
                        @if (Auth::guest())
                        <li class="drawer__list"><a href="{{ url('/login') }}"><i
                                    class="fas fa-caret-right"></i>{{ __('lang.login')}}</a></li>
                        @else
                        <li class="drawer__list"><a href="{{ url('/dashboard') }}"><i
                                    class="fas fa-caret-right"></i>{{ __('lang.myreminders')}}</a></li>
                        @endif
                        <!-- <li class="drawer__list"><a href="#price"><i class="fas fa-caret-right"></i>料金プラン</a></li> -->
                        <li class="drawer__list"><a href="https://tawk.to/chat/60d89d8d7f4b000ac039cc8c/1f972esvh"><i
                                    class="fas fa-caret-right"></i>お問い合わせ</a></li>
                        <!-- <li class="drawer__list"><a href="#flow"><i class="fas fa-caret-right"></i>ご利用のながれ</a></li> -->
                    </ul>
                </div>
                <div class="drawer__right">
                    <ul class="drawer__terms">
                        <li class="drawer__term"><a href="">利用規約</a></li>
                        <li class="drawer__term"><a href="">個人情報保護方針</a></li>
                        <li class="drawer__term"><a href="">特定商取引に関する法律</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    @yield('content')


    <footer class="footer">
        <div class="footer__inner inner">
            <div class="footer__contents">
                <div class="footer__logo"><img src="img/logo-white.png" alt=""></div>
                <div class="footer__nav">
                    <ul class="footer__lists">
                        <li class="footer__list"><a href="/"><i class="fas fa-caret-right"></i>トップページ</a></li>
                        <li class="footer__list"><a href="#faq"><i class="fas fa-caret-right"></i>よくある質問</a></li>
                        <li class="footer__list"><a href="#function"><i class="fas fa-caret-right"></i>機能</a></li>
                        <!-- <li class="footer__list"><a href="dairiten"><i class="fas fa-caret-right"></i>代理店</a></li> -->
                        @if (Auth::guest())
                        <li class="footer__list"><a href="{{ url('/login') }}"><i class="fas fa-caret-right"></i>{{ __('lang.login')}}</a></li>
                        @else
                        <li class="footer__list"><a
                                href="{{ url('/dashboard') }}"><i class="fas fa-caret-right"></i>{{ __('lang.myreminders')}}</a></li>
                        @endif
                        <li class="footer__list"><a href="#price"><i class="fas fa-caret-right"></i>料金プラン</a></li>
                        <li class="footer__list"><a href="https://tawk.to/chat/60d89d8d7f4b000ac039cc8c/1f972esvh"><i
                                    class="fas fa-caret-right"></i>お問い合わせ</a></li>
                        <li class="footer__list"><a href="#flow"><i class="fas fa-caret-right"></i>ご利用のながれ</a></li>
                    </ul>
                </div>
                <div class="footer__right">
                    <ul class="footer__terms">
                        <li class="footer__term"><a href="/terms">利用規約</a></li>
                        <li class="footer__term"><a href="/privacy">個人情報保護方針</a></li>
                        <li class="footer__term"><a href="/trade">特定商取引に関する法律</a></li>
                    </ul>
                </div>
                <div class="footer__logo none"><img src="img/logo-white.png" alt=""></div>
            </div>
            <div class="copy-right">©<?php echo date("Y"); ?> くすりコール</div>
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

</body>

</html>