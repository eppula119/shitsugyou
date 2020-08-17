<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NeaterController extends Controller
{
    //ホーム画面表示
    public function home()
    {
        return view('neater.mypage');
    }
}
