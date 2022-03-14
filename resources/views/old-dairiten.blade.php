@extends('layouts.web')

@section('content')


<!-- [HEADER] -->
<section class="agency-header">

<div class="agency-header-bar">
    <h1 class="title-big">薬局・診療所経営者様へ！</h1>
</div>

<div class="agency-header-content">
    <div class="agency-header-img">
        <img src="img/header-pc.png" alt="Header PC" class="agency-header-pc">
        
    </div>
</div>

<div class="main__titles">
    <h2 class="main__title">お薬飲み忘れ防止電話サービス「くすりコール」のチラシを 配布してくださる代理店様を募集しております。</p>
</div>

</section>


<!-- [REGISTER BUTTON] -->
<div class="try-button">
<a href="dairiten-reg"><img src="img/register-btn.png" alt="register here"></a>
</div>

<!-- [THIRD SECTION] ------------ -->
<section class="about-reward">
<h1 class="section-title-big">報酬について</h1>
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
<h1 class="section-title-big">ご登録のながれ</h1>

<div class="register-flow__container">

    <div class="register-flow__box">
        <div class="register-flow__title">
            <img src="img/step-1.png" alt="Steps">
            <h2 class="functions__left-text">登 録</h2>
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
            <h2>配  布</h2>
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
            <h2>出  金</h2>
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





@endsection