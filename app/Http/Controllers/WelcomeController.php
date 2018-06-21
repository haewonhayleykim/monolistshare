<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Item;
use App\User;

class WelcomeController extends Controller
{
    public function index()
    {
        $points = "100";
        $data = [];
        $items = Item::orderBy('updated_at', 'desc')->paginate(20);
        if(\Auth::check()){
         $user = new User;
            //$points = incrementPoints("1");
            $data = ['items' => $items,'points'=> $points]; 
            return view('welcome',  ['points' =>$points,]);
        }
        return view('welcome',  ['points' =>$points,]);
    }


    public function incrementPoints($points)
    {
        //１．テーブルからログインユーザのポイントを取得します
        //　ユーザモデルのメソッドにアクセスします
        $user = User::find($id);
        
        //２．上で取得したポイントをインクリメント（＋１）します
        $points = $user->point +1;
        
        //３．２のポイントをテーブルに保存します
        //　ユーザモデルのメソッドにアクセスします
        $user->point = $points;
        print_r($user->point);
        $user->save();
        
        
        //４．２のポイントを戻り値として返します
        return $points;
    }
    
}