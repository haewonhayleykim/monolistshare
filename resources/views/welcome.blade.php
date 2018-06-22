@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>Rakuten Pay </h1>
                @if (!Auth::check())
                    <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">Rakuten Payを始める</a>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Bootstrap Template</title>

        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <center><h1>
            <p>ご訪問ありがとうございます。</p>
            <p>ログインポイントは{{ $points }}Pointです。</p>
        </h1></center>
        <div class="cover2">
            <div id ="creditcard""clearfix"><img src="images/creditcard.PNG" alt="電子マネー"  height="300px"></div>
            <div id ="denshimoney""clearfix"><img src="images/denshimoney.PNG" alt="電子マネー" height="300px"></div>
            <div id ="application""clearfix"><img src="images/application.PNG" alt="電子マネー" height="300px"></div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="zero-yen">
                    <a href='#zero-yen2'button class="btn btn-block btn-default" type="submit">
                    <span class="glyphicon glyphicon-piggy-bank"></span>
                        実質０円で導入
                    <span class="glyphicon glyphicon-chevron-down"></span>    
                    </button></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="yokujitu">
                    <a href='#yokujitu2'button class="btn btn-block btn-default" type="submit">
                    <span class="glyphicon glyphicon-calendar"></span>
                        最短翌日入金
                    <span class="glyphicon glyphicon-chevron-down"></span>    
                    </button></a>
                </div>
            </div>
         </div>
         <div class="appsetumei"> 
             <div class="row">
                 <div class='title'"col-md-6 col-md-offset-3"><h1>多彩な<span>決済方法</span>と、<span>集客</span>ツール</h1></div>
                 <div class="block">
                 <div class='appsnt'"col-md-6 col-md-offset-3"><h3>コード決済に対応、アプリ決済</h3></div>
                 <div class='appsnt'"col-md-6 col-md-offset-3"><p>楽天ペイ アプリ決済は、お客様が現金やクレジットカードを出さずにスマホだけで決済ができる、楽天が提案する新しい決済方法です。</p></div>
                 <div id ="smartphone"><img src="images/top_img_serviceList_app.png" alt="電子マネー" ></div>
                 <div class ="applist"><img src="images/top_img_serviceList_appLogo.png" alt="電子マネー" ></div></div>
                 <a href="#" class="square_btn">詳しくはこちら</a>
                 
                 <div class="block">
                 <div class='appsnt'"col-md-6 col-md-offset-3"><h3>主要6ブランドに対応、クレジットカード決済</h3></div>
                 <div class='appsnt'"col-md-6 col-md-offset-3"><p>主要クレジットカード6ブランドに対応します。ビジネスの業種や規模を問わず、決済手数料は3.24%または3.74％です。</p></div>
                 <div id ="smartphone"><img src="images/top_img_serviceList_card.png" alt="電子マネー" ></div>
                 <div class ="applist"><img src="images/top_img_serviceList_cardLogo.png" alt="電子マネー" ></div></div>
                 <a href="#" class="square_btn">詳しくはこちら</a>
                 
                 <div class="block">
                 <div class='appsnt'"col-md-6 col-md-offset-3"><h3>主要ブランドに対応、電子マネー決済</h3></div>
                 <div class='appsnt'"col-md-6 col-md-offset-3"><p>主要電子マネーおよび「Google Pay」「Apple Pay」に対応します。なかでも、累計発行枚数1億枚を超える「楽天Edy」に対応するのは、楽天ペイ（実店舗決済）が業界初※1 となります。</p></div>
                 <div id ="smartphone"><img src="images/top_img_serviceList_emoney.png" alt="電子マネー" ></div>
                 <div class ="applist"><img src="images/top_img_serviceList_emoneyLogo.png" alt="電子マネー" ></div></div>
                 <a href="#" class="square_btn">詳しくはこちら</a>
                 
            </div> 
        </div>
        <div id="zero-yen2"> 
             <div class="row">
                <div id= "zeroyenwindow"><img src="images/zeroyenwindow.png" width="100%" ></div>
            </div> 
        </div>
        <div id="yokujitu2"> 
             <div class="row">
                  <div class="block">
                 <div class='title'"col-md-6 col-md-offset-3"><h1>最短<span>翌日</span>入金</h1></div>
                 <div class='appsnt'"col-md-6 col-md-offset-3"><p>楽天ペイ（実店舗決済）の指定口座を楽天銀行にすると、365日いつでも決済の翌日に自動で入金いたします。<br>※楽天銀行以外の金融機関でも、翌営業日に入金可能です。</p></div>
                 <div id ="smartphone"><img src="images/top_img_rbank.png" alt="電子マネー" ></div>
                
                 </div>
                  <a href="#" class="square_btn">詳しくはこちら</a>
            </div> 
        </div>
        <div id="benriservice"> 
             <div class="row">
                <div class="merit">
                 <div class='title'"col-md-6 col-md-offset-3"><h1><span>便利なサービス</span>も登場</h1></div>
                 <div class='appsnt'"col-md-6 col-md-offset-3"><h3>ビジネスローン</h3></div>
                 <div class='appsnt'"col-md-6 col-md-offset-3"><p>商品仕入れなど運転資金としてご活用いただけるローンサービスを楽天ペイ（実店舗決済）加盟店様向けに提供しています。<br>
                （※すべての加盟店様に融資をお約束するものではありません）<br> 提供元：楽天カード株式会社</p></div>
                 <div class ="applist"><img src="images/merit.PNG" alt="電子マネー" ></div></div>
                 <a href="#" class="square_btn">詳しくはこちら</a>
            </div> 
        </div>
        <div id="mousikomi"> 
             <div class="row">
                 <div class='title'"col-md-6 col-md-offset-3"><h1>お申込みは<span>カンタン</span></h1></div>
                 <div id= "mousikomi"><img src="images/mousikomi.png" width="100%" ></div>
                <div id="mousikomibutton"> <a href="#" class="square_btn2">申し込む</a></div>
            </div> 
        </div>
    </body>
</html>   
@endsection