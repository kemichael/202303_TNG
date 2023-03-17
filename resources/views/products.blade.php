@extends('template')
@section('title', '商品紹介')
@section('content')
<div id="products">
    <div class="container">
        <div class="message">
            <p>スタッフおすすめのボードゲームを紹介</p>
        </div>
        <div id="staff-recommend-1" class="staff-recommend">
            <div class="recommend-content">
                <img class="img1" src="{{ asset('img/game_1.jpg') }}" alt="">
                <img class="img2" src="{{ asset('img/game_1_2.jpg') }}" alt="">
                <div class="explanation">
                    <h1>ソクラテスラ</h1>
                    <p>
                        カードを組み合わせてオリジナルの偉人を作り出せ!<br>
                        全てのプレーヤーを倒して殿堂入りできるか？
                    </p>
                </div>
            </div>
        </div>
        <div id="staff-recommend-2" class="staff-recommend">
            <div class="recommend-content">
                <img class="img1" src="{{ asset('img/game_2.jpg') }}" alt="">
                <img class="img2" src="{{ asset('img/game_2_2.jpg') }}" alt="">
                <div class="explanation">
                    <h1>ドミニオン</h1>
                    <p>
                        王国の統治者として、領土を拡大せよ！<br>
                        戦略性が試される。
                    </p>
                </div>
            </div>
        </div>
        <div id="staff-recommend-2" class="staff-recommend">
            <div class="recommend-content">
                <img class="img1" src="{{ asset('img/game_3.jpg') }}" alt="">
                <img class="img2" src="{{ asset('img/game_3_2.jpg') }}" alt="">
                <div class="explanation">
                    <h1>ニムト</h1>
                    <p>
                        最後のカードを出したらペナルティ。<br>
                        他のプレーヤーの裏をかけ！
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
