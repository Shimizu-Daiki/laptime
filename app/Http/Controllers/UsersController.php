<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加

use App\Laptime; // 追加

class UsersController extends Controller
{
    public function index()
    {   
        
        if (\Auth::check()) { 
            
            $user = \Auth::user();
            $laptimes = $user->laptimes()->latest()->take(3)->get();
            
        }
       
        return view('users.index', [
            'laptimes' => $laptimes,
        ]);
        
    }
    
    
    
    public function create()
    {
        $laptime = new Laptime;

        return view('users.create', [
            'laptime' => $laptime,
        ]);
    
    }
    public function store(Request $request)
    {
        $laptime = new Laptime;
        $user = \Auth::user();
        $user_id = $user->id;
        $laptime_content = $request->content;
        
        $laptime->user_id = $user_id;
        $laptime->content = $laptime_content;
        $laptime->save();
        
        if (\Auth::check()) { 
            
            $laptimes = $user->laptimes()->latest()->take(3)->get();
        }
        
        
        
        
        return view('users.index', [
            'laptimes' => $laptimes,
        ]);
        
    }
    
    public function today()
    {
        $today = date("Y/m/d");
        
        $user_id = \Auth::id();
        // $user_id = \Auth::user()->id;
        $laptimes = Laptime::where('user_id', '=', $user_id)->whereDate('created_at', '=', $today)->get();
        
        $number = count($laptimes);
        
       
    
        return view('users.today', [
            'today_laptimes' => $laptimes,
            'date' => $today,
            'number' =>$number,
            
        ]);
        
    }
    
    public function show($date)
    {
        
        $user_id = \Auth::id();
        
        $laptimes = Laptime::where('user_id', '=', $user_id)->whereDate('created_at', '=', $date)->get();
        
        return view('users.show', [
            
            'laptimes' => $laptimes,
            'date' => $date,
        ]);
        
    }
    
    
    public function edit($id)
    {
        $user_id = \Auth::id();
        
        $laptime = Laptime::findOrFail($id);

        // メッセージ編集ビューでそれを表示
        return view('users.edit', [
            'laptime' => $laptime,
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|max:255',
        ]);
        
        $laptime = Laptime::findOrFail($id);
       
        $laptime->content = $request->content;
        $laptime->save();

        // トップページへリダイレクトさせる
        return redirect('/');
    }
    
}

