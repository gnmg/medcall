@extends('layouts.web')

@section('content')



<section class="main">
    <div class="main__visual">
        <div class="main__inner inner">
            <div class="main__contents">
                <div class="main__left"><img src="img/header-left.png" alt="メイン画像左"></div>
                <div class="main__right"><img src="img/header-right.png" alt="メイン画像右"></div>
            </div>
        </div>
    </div>
    <div id="function" class="main__titles">
        <h2 class="main__title">「くすりコール」はご本人と周りの方々の服薬忘れの不安を解決するサービスです。</h2>
        <p class="main__text">別居しているご両親が定時にお薬を飲むように、1日3回まで確認のお電話をいたします。電話に出なければ飲み忘れメールが管理者に届くので安心です。</p>
    </div>
</section>

<div id="function" class="try-button">
    <a href="{{ url('/register') }}">
        <img src="img/try-button.png" alt="">
    </a>
</div>

<section class="functions">
        <div class="functions__inner inner">
            <h3 class="functions__title title">便利な3つの機能</h3>
            <h3 class="functions__title2 title">「くすりコール」便利な3つの機能</h3>
            <div class="functions__items">
                <div class="functions__item">
                    <div class="functions__left">
                        <h4 class="functions__left-text">1日3回までの時間を設定できます。</h4>
                        <p class="functions__left-excerpt">ご自宅の固定電話に1日3回まで、決められた時間にお電話をします。</p>
                    </div>
                    <div class="functions__image"><img src="img/use-1.png" alt=""></div>
                    <div class="functions__number"><img src="img/1.png" alt=""></div>
                </div>
                <div class="functions__item">
                    <div class="functions__left">
                        <h4 class="functions__left-text">お知らせメッセージの内容は個別に設定可能。</h4>
                        <p class="functions__left-excerpt">メッセージの内容はパーソナイズされているので薬の種類と量をメッセージで伝えることができます。</p>
                    </div>
                    <div class="functions__image"><img src="img/use-2.png" alt=""></div>
                    <div class="functions__number"><img src="img/2.png" alt=""></div>
                </div>
                <div class="functions__item">
                    <div class="functions__left">
                        <h4 class="functions__left-text">3回電話に出ない場合、<br>SOSメールを管理者に送信。</h4>
                        <p class="functions__left-excerpt">3回お電話しても電話に出られない場合、事前に登録されている管理者の方にお薬の飲み忘れがあることをメールでお知らせします。</p>
                    </div>
                    <div class="functions__image"><img src="img/use-3.png" alt=""></div>
                    <div class="functions__number"><img src="img/3.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>

<section class="merit">
    <div class="merit__inner inner">
        <h3 class="merit__title title">うれしいメリット</h3>
        <div class="merit__items">
            <div class="merit__item">
                <div class="merit__item-left"><img src="img/honnin-image.png" alt=""></div>
                <div class="merit__item-right">
                    <div class="merit__item-image"><img src="img/honnin-bar.png" alt=""></div>
                    <div class="merit__item-excerpts">
                        <div class="merit__item-checkbox"><img src="img/checkbox.png" alt=""></div>
                        <div class="merit__item-excerpt">人から言われるストレスから開放。</div>
                    </div>
                    <div class="merit__item-excerpts">
                        <div class="merit__item-checkbox"><img src="img/checkbox.png" alt=""></div>
                        <div class="merit__item-excerpt">きちんと薬の服用をすることにより、<br>より良い健康状態を維持。</div>
                    </div>
                    <div class="merit__item-excerpts">
                        <div class="merit__item-checkbox"><img src="img/checkbox.png" alt=""></div>
                        <div class="merit__item-excerpt">難しい手順は不要！ただ電話に出ればOK！</div>
                    </div>
                </div>
            </div>
            <div class="merit__item">
                <div class="merit__item-left"><img src="img/family-image.png" alt=""></div>
                <div class="merit__item-right">
                    <div class="merit__item-image"><img src="img/family-bar.png" alt=""></div>
                    <div class="merit__item-excerpts">
                        <div class="merit__item-checkbox"><img src="img/checkbox.png" alt=""></div>
                        <div class="merit__item-excerpt">ご両親に対して口うるさく言う必要がなくなる。</div>
                    </div>
                    <div class="merit__item-excerpts">
                        <div class="merit__item-checkbox"><img src="img/checkbox.png" alt=""></div>
                        <div class="merit__item-excerpt">毎日、服薬確認の電話をしなくても安心。</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="price" class="price">
    <div class="price__inner inner">
        <h3 class="price__title">料金プラン</h3>
        <div class="price__contents">
            <div class="price__left">
                <div class="price__left-left">月額</div>
                <div class="price__left-prices">
                    <div class="price__left-inner">
                        <div class="price__left-price">2,650</div>
                        <div class="price__left-pricetax">
                            <div class="price__left-tax">(税込)</div>
                            <div class="price__left-en">円</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price__right">
                <div class="price__right-tags">
                    <div class="price__tag-left">クレジット支払い</div>
                    <div class="price__tag-right">自動更新</div>
                </div>
                <p class="price__right-excerpt">お試し期間内ならいつでも無料でキャンセル可能。無料お試し期間終了後は、自動的に更新となります。</p>
            </div>
        </div>
        <div class="price__service">
            <div class="price__underbar"><img src="img/under.png" alt=""></div>
            <h4 class="price__underbar-title">まずは無料お試しサービスからご登録</h4>
        </div>
        <div class="price-button">
            <a href="{{ url('/register') }}">
                <img src="img/try-button.png" alt="">
            </a>
        </div>
    </div>
</section>

<section id="flow" class="flow">
    <div class="flow__inner inner">
        <div class="flow__title title">ご利用のながれ</div>
        <div class="flow__contents">
            <div class="flow__item">
                <div class="flow__item-title">管理画面にて各種設定の登録</div>
                <div class="flow__item-flow">
                    <div class="flow__item-image">
                        <img src="img/kaniri-1.png" alt="">
                        <p class="flow__item-text">※固定電話のみ</p>
                    </div>
                    <div class="flow__item-image"><img src="img/kanri-2.png" alt=""></div>
                    <div class="flow__item-image"><img src="img/kanri-3.png" alt=""></div>
                    <div class="flow__item-image"><img src="img/kanri-4.png" alt=""></div>
                </div>
            </div>
            <div class="flow__item">
                <div class="flow__item-title second">実際のながれ</div>
                <div class="flow__item-flow">
                    <div class="flow__item-image"><img src="img/flow-1.png" alt=""></div>
                    <div class="flow__item-image"><img src="img/flow-2.png" alt=""></div>
                    <div class="flow__item-image"><img src="img/flow-3.png" alt=""></div>
                    <div class="flow__item-image"><img src="img/flow-4.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="remind">
    <div class="remind__inner inner">
        <h3 class="remind__title">固定電話でのお知らせで<br>ストレスなく確実にリマインド。</h3>
        <div class="remind__contents">
            <div class="remind__images">
                <div class="remind__image-left"><img src="img/grandma.png" alt=""></div>
                <div class="remind__image-right"><img src="img/ok.png" alt=""></div>
            </div>
            <div class="remind__excerpts">
                <p class="remind__excerpt">
                    「薬コール」をはじめようと思ったのは、私自身がその必要性を体感していたからです。はじめはスマートフォンのアプリを使用していましたが、私の場合、常に身に付けているわけではなく、アプリのアラームが聞こえない事がよくありました。一方で家の固定電話ならいつでも聞こえることから、このサービスの必要性を実感しました。
                </p>
                <p class="remind__excerpt">
                    同じ状況のお年寄りの方々も多くいらっしゃいます。最新のスマートフォンを使いこなすのはなかなか難しく、使い慣れている家の固定電話がストレスにならずに薬の飲み忘れを防ぐお手伝いになります。</p>
                <p class="remind__excerpt">
                    世界保健機関（WHO）によると、患者さんの約半数の人が処方された薬を指示通りに服用していないそうです。<br>年配の患者さんやアルツハイマーの患者さんにおいては更に飲み忘れの割合が高いと言うことです。
                </p>
                <p class="remind__excerpt">
                    アルツハイマーを患っている方や、年配の方々においては薬の飲み忘れは単にご本人のみの問題ではありません。<br>家族やケアテイカーの方々が毎日確認したり、リマインドしなければならないため、負担も大きくなります。
                </p>
                <p class="remind__excerpt">きちんと処方通りに薬を服用することが、より良い健康維持に繋がります。</p>
                <p class="remind__excerpt">
                    「薬コール」はお父様、お母様、またはご家族の方がきちんと薬を服用できるようにお手伝いします。そして、あなたがご家族の毎日の薬の時間を心配するストレスを軽減します。</p>
            </div>
        </div>
    </div>
    <div class="try-button">
        <a href="{{ url('/register') }}">
            <img src="img/try-button.png" alt="">
        </a>
    </div>
</section>

<section id="faq" class="question">
    <div class="question__inner inner">
        <h3 class="question__title title">よくある質問</h3>
        <div class="question__items">
                <div class="question__item">
                    <div class="question__item-question">
                        <div class="question__number">01.</div>
                        <div class="question__content">無料でお試しできますか？</div>
                    </div>
                    <div class="question__item-answer">
                        <div class="answer-inner inner">
                            <p class="answer-text">はい。ご登録後14日間、無料でお試しいただけます。15日目にご登録されたクレジットカードから決済、毎月同じ日にお支払いとなります。</p>
                        </div>
                    </div>
                </div>
                <div class="question__item">
                    <div class="question__item-question">
                        <div class="question__number">02.</div>
                        <div class="question__content">登録電話を携帯電話に設定できますか？</div>
                    </div>
                    <div class="question__item-answer">
                        <div class="answer-inner inner">
                            <p class="answer-text">申し訳ございません。固定電話へのお電話のみとなります。</p>
                        </div>
                    </div>
                </div>
                <div class="question__item">
                    <div class="question__item-question">
                        <div class="question__number">03.</div>
                        <div class="question__content">電話に出なかった時のお知らせとはどういうものですか？</div>
                    </div>
                    <div class="question__item-answer">
                        <div class="answer-inner inner">
                            <p class="answer-text">登録された電話番号にお客様が設定したお時間にお電話をします。電話に出られるまで5分間おきに３回かけます。もし電話にでない場合、登録されているご家族またはケアテイカーあてにメールにて電話にでなかったことをお知らせします。</p>
                        </div>
                    </div>
                </div>
                <div class="question__item">
                    <div class="question__item-question">
                        <div class="question__number">04.</div>
                        <div class="question__content">お支払い方法は？</div>
                    </div>
                    <div class="question__item-answer">
                        <div class="answer-inner inner">
                            <p class="answer-text">クレジットカードでのお支払いとなります。</p>
                        </div>
                    </div>
                </div>
                <div class="question__item">
                    <div class="question__item-question">
                        <div class="question__number">05.</div>
                        <div class="question__content">スマートフォンのアプリではだめなの？</div>
                    </div>
                    <div class="question__item-answer">
                        <div class="answer-inner inner">
                            <p class="answer-text">スマートフォンには多くの便利な機能のついたアプリがあります。しかし、常に手元に持ち歩いていなければアプリの意味がありません。特に多くのご高齢者は携帯の不携帯が多いようです。クスリコールは、家の固定電話にお電話でお知らせをするため、聞こえない、ということがなく、毎日、薬の服用を忘れません。</p>
                        </div>
                    </div>
                </div>
                <div class="question__item">
                    <div class="question__item-question">
                        <div class="question__number">06.</div>
                        <div class="question__content">くすりコールを別の用途で使用できますか？</div>
                    </div>
                    <div class="question__item-answer">
                        <div class="answer-inner inner">
                            <p class="answer-text">はい。クスリコールはお薬のリマインドだけではなく、お好きな用途にご利用いただけます。モーニングコールやその日のスケジュールのリマインドにもご利用いただけます。</p>
                        </div>
                    </div>
                </div>
                <div class="question__item">
                    <div class="question__item-question">
                        <div class="question__number">07.</div>
                        <div class="question__content">スマートフォンの時代になぜ固定電話？</div>
                    </div>
                    <div class="question__item-answer">
                        <div class="answer-inner inner">
                            <p class="answer-text">不思議に思われる方も多いことでしょう。とても便利で生活に欠かせないスマートフォンですが、ご高齢者やスマホを使いこなせない方には固定電話でのご連絡がまだまだ必要な時代です。スマホは便利で慣れすぎてしまいアラームをすぐに消してしまう、その場から立ち上がらないから忘れてしまう、などの問題を解決するのがクスリコールです。</p>
                        </div>
                    </div>
                </div>
                <div class="question__item">
                    <div class="question__item-question">
                        <div class="question__number">08.</div>
                        <div class="question__content">キャンセルはいつでもできますか？</div>
                    </div>
                    <div class="question__item-answer">
                        <div class="answer-inner inner">
                            <p class="answer-text">はい。キャンセル後も決まったお支払い日まではサービスを受けることができます。</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

@endsection