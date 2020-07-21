<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Laptime; // 追加

use App\User; // 追加

class LaptimesController extends Controller
{
    public function index()
    {
        // ユーザ一覧をidの降順で取得
        $timeLaps = TimeLap::orderBy('id', 'desc')->limit(3);
        

        // ユーザ一覧ビューでそれを表示
        return view('users.index', [
            'timeLaps' => $timeLaps,
            
        ]);
    }
    
    
    public function show($id)
    {
       // メッセージを作成
        
    
    }
    
    
}
