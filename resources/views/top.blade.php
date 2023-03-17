@extends('template')
@section('title', '企業紹介')
@section('content')
<div style="text-align:center; font-size:60px">
    <p>遊びで世界を創る</p>
</div>
<div style="text-align:center; font-size:20px">
    <p>
        デジタル社会の現代。<br>
        そんな今だからこそ、アナログでしか得られない体験を。
    </p>
</div>
<div id="bordgame-images">
    <img src="{{asset('storage/bordgame_image01.jpeg')}}" alt="" width="23%" class="bordgame-image">
    <img src="{{asset('storage/bordgame_image05.jpeg')}}" alt="" width="23%" class="bordgame-image">
    <img src="{{asset('storage/bordgame_image03.jpeg')}}" alt="" width="23%" class="bordgame-image">
    <img src="{{asset('storage/bordgame_image04.jpeg')}}" alt="" width="23%" class="bordgame-image">
</div>
<div style="text-align:center; font-size:60px">
    <p>会社概要</p>
</div>
<div id="company-info">
    <table>
        <tr>
            <td width=40%>会社名</td>
            <td align="left">TNGgames</td>
        </tr>
        <tr>
            <td>資本金</td>
            <td align="left">国家予算レベル</td>
        </tr>
        <tr>
            <td>従業員数</td>
            <td align="left">１億６千万人</td>
        </tr>
        <tr>
            <td>業務内容</td>
            <td align="left">ボードゲームの製造・販売</td>
        </tr>
    </table>
</div>
    
@endsection
