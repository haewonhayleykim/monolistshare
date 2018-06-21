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
        <div class="cover2">
            <img src="images/cover2-bg.jpg" alt="電子マネー" width="100%">
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="zero-yen">
                    <button class="btn btn-block btn-default" type="submit">
                    <span class="glyphicon glyphicon-piggy-bank"></span>
                        実質０円で導入
                    <span class="glyphicon glyphicon-chevron-down"></span>    
                    </button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="yokujitu">
                    <button class="btn btn-block btn-default" type="submit">
                    <span class="glyphicon glyphicon-calendar"></span>
                        最短翌日入金
                    <span class="glyphicon glyphicon-chevron-down"></span>    
                    </button>
                </div>
            </div>
         </div>
        <div class="zero-yen2"> 
             <div class="row">
                 <div class="col-md-10 col-md-offset-1"><h1>実質０円で導入</h1></div>
                 <div class="col-md-10 col-md-offset-1"><p>新規でお申込みいただく加盟店様向けに、クレジットカード・電子マネー決済対応のカードリーダー代を全額キャッシュバックするキャンペーンを実施中です。（キャッシュバック適用には条件があります）</p></div>
            </div> 
        </div>
        <div class="yokujitu2"> 
             <div class="row">
                 <div class="col-md-10 col-md-offset-1"><h1>最短翌日入金</h1></div>
                 <div class="col-md-10 col-md-offset-1"><p>楽天ペイ（実店舗決済）の指定口座を楽天銀行にすると、365日いつでも決済の翌日に自動で入金いたします。※楽天銀行以外の金融機関でも、翌営業日に入金可能です。</p></div>
            </div> 
        </div>
    </body>
</html>   
@endsection   
   
   
    
    