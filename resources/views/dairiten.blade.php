<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- [FONTS] -->
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">

    <!-- [STYLESHEET] ------------ -->
    <link rel="stylesheet" href="css/theme.css">

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


    <link rel="stylesheet" href="css/theme.css">

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
                            <div class="header__btn"><a href="dairiten-reg" class="btn">代理店登録こちら</a></div>

                </ul>
                <!-- @if (Auth::guest())
                <div class="header__btn"><a href="{{ url('/register') }}" class="btn">無料お試しサービス</a></div>
                @else

                @endif
                @if (Auth::guest())
                <li class="header__list sp-hide"><a href="{{ url('/login') }}">{{ __('lang.login')}}</a></li>
                @else
                <li class="header__list sp-hide"><a id="myreminder__link"
                        href="{{ url('/dashboard') }}">{{ __('lang.myreminders')}}</a></li>
                @endif -->
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
        <div class="drawer__logo"><a href="#"><img src="img/logo.png" alt=""></a></div>
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
    <!-- [HEADER] -->
    <section class="agency-header">

        <div class="agency-header-bar">
            <h1 class="title-big">薬局・診療所経営者様へ！</h1>
        </div>

        <div class="agency-header-content">
            <div class="agency-header-img">
                <img src="img/header-pc.png" alt="Header PC" class="agency-header-pc">
                <img src="img/header-sp.png" alt="Header PC" class="agency-header-mobile">
            </div>
        </div>

        <div class="agency-header-text">
            <p class="title-text">お薬飲み忘れ防止電話サービス「くすりコール」のチラシを 配布してくださる代理店様を募集しております。</p>
        </div>

    </section>


    <!-- [REGISTER BUTTON] -->
    <div class="register-here">
        <a href="dairiten-reg"><img src="img/register-btn.png" alt="register here"></a>
    </div>

    <!-- [THIRD SECTION] ------------ -->
    <section class="about-reward">
        <h1 class="title-big">報酬について</h1>
        <p class="title-text">代理店様のクーポンコードを入力して「くすりコール」を ご利用開始されたお客様1人につき</p>

        <hr class="line-blue">

        <div class="about-reward-img">
            <img src="img/commission-pc.png" alt="Commision" class="pc">
            <img src="img/commision-ph.png" alt="Commision" class="ph">
        </div>

        <span class="text-genral highlight">
            沢山のお客様にチラシをお渡しするほど報酬が上がる可能性があります！
        </p>

    </section>


    <!-- [FOURTH SECTION] ------------ -->
    <section class="register-flow">
        <h1 class="title-big">ご登録のながれ</h1>

        <div class="register-flow__container">

            <div class="register-flow__box">
                <div class="register-flow__title">
                    <img src="img/step-1.png" alt="Steps">
                    <h2>登 録</h2>
                </div>

                <div class="register-flow__image">
                    <img src="img/step-first.png" alt="First">
                </div>

                <div class="register-flow__text">
                    <p>HPのリンクからご登録ください。口座情報など必要情報を入力します。</p>
                </div>

            </div>

            <div class="register-flow__box">
                <div class="register-flow__title">
                    <img src="img/step-2.png" alt="Steps">
                    <h2>チラシ送付</h2>
                </div>

                <div class="register-flow__image">
                    <img src="img/step-second.png" alt="Second">
                </div>

                <div class="register-flow__text">
                    <p>あなたの薬局・診療所独自のクーポンコードを記載したチラシを200枚送付いたします。</p>
                </div>

            </div>

            <div class="register-flow__box">
                <div class="register-flow__title">
                    <img src="img/step-3.png" alt="Steps">
                    <h2>配 布</h2>
                </div>

                <div class="register-flow__image">
                    <img src="img/step-third.png" alt="Third">
                </div>

                <div class="register-flow__text">
                    <p>お客様にお渡しするだけでOK。</p>
                </div>

            </div>


            <div class="register-flow__box">
                <div class="register-flow__title">
                    <img src="img/step-4.png" alt="Steps">
                    <h2>報酬確定</h2>
                </div>

                <div class="register-flow__image">
                    <img src="img/step-fourth.png" alt="FOURTH">
                </div>

                <div class="register-flow__text">
                    <p>顧客があなたのクーポンコードを入力してサービス利用するとその分の報酬があなたのアカウントに登録されます。</p>
                </div>

            </div>


            <div class="register-flow__box">
                <div class="register-flow__title">
                    <img src="img/step-5.png" alt="Steps">
                    <h2>出 金</h2>
                </div>

                <div class="register-flow__image">
                    <img src="img/step-fifth.png" alt="Fifth">
                </div>

                <div class="register-flow__text">
                    <p>報酬を確認できるあなた専用のページへのリンクをお送りします。
                        報酬を引き出すには、電話またはメッセージでご連絡いただければ、ご登録の銀行口座にお振り込みします。</p>
                </div>

            </div>

        </div>

    </section>


    <!-- [FIFTH SECTION] ------------ -->
    <section class="easyregister">
        <div class="easyregister__wrap">
            <h3>誰でもカンタン登録！あとはくすりコールのチラシを配るだけ！</h3>

            <!-- [REGISTER BUTTON] -->
            <div class="register-here">
                <a href="dairiten-reg"><img src="img/register-btn.png" alt="register here"></a>
            </div>

            <div class="easyregister__image">
                <img src="img/15_-pc.png" alt="PC" class="pc">
                <img src="img/15_-sp.png" alt="Phone" class="ph">
            </div>

        </div>
    </section>

    <footer class="footer">
        <div class="footer__inner inner">
            <div class="footer__contents">
                <div class="footer__logo"><img src="img/logo-white.png" alt=""></div>
                <div class="footer__nav">
                    <ul class="footer__lists">
                        <li class="footer__list"><a href="/"><i class="fas fa-caret-right"></i>トップページ</a></li>
                        <li class="footer__list"><a href="#faq"><i class="fas fa-caret-right"></i>よくある質問</a></li>
                        <li class="footer__list"><a href="#function"><i class="fas fa-caret-right"></i>機能</a></li>
                        <li class="footer__list"><a href="dairiten"><i class="fas fa-caret-right"></i>代理店</a></li>
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
       
    </footer>
    <script src="js/script.js"></script>

</body>

</html>