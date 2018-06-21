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
    
    <?php
    $life = 86400;
    if(isset($_COOKIE["count"])) {
        $count = $_COOKIE["count"] + 1;
    }
    else {
        $count = 1;
    }
    setcookie("count", $count, time() + $life);
?>

<html>
<head>
<title>訪問回数（クッキー）</title>
</head>
<body>

<h1><?php
    echo $points,"    ", "訪問ポイントです。\n";
?></h1>

</body>
</html>
    
    
    
    
@endsection