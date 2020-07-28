<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加

use App\Laptime; // 追加


use Carbon\Carbon;

class UsersController extends Controller
{
    public function index()
    {   
        
        if (\Auth::check()) { 
            
            $user = \Auth::user();
            $laptimes = $user->laptimes()->latest()->take(3)->get();
            
        }
        
        $default= Carbon::now()->format('Y-m-d');
        
       
        return view('users.index', [
            'laptimes' => $laptimes,
            'default' => $default,
            
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
        
        $default= Carbon::now()->format('Y-m-d');
        
        
        return view('users.index', [
            'laptimes' => $laptimes,
            'default' => $default,
        ]);
        
    }
    
    public function today()
    {
        $today = date("Y/m/d");
        
        $user_id = \Auth::id();
        // $user_id = \Auth::user()->id;
        $laptimes = Laptime::where('user_id', '=', $user_id)->whereDate('created_at', '=', $today)->get();
        
        
        $dates = $this->getCalendarDates();
        $currentMonth = Carbon::now()->month;
        
        $default= Carbon::now()->format('Y-m-d');
    
        return view('users.today', [
            'today_laptimes' => $laptimes,
            'date' => $today,
            'dates' => $dates,
            'currentMonth' => $currentMonth,
            'default' => $default,
            
        ]);
        
    }
    
    public function show($date)
    {
        
        $user_id = \Auth::id();
        
        $laptimes = Laptime::where('user_id', '=', $user_id)->whereDate('created_at', '=', $date)->get();
        
        $dates = $this->getCalendarDates();
        $currentMonth = Carbon::now()->month;
        
        $default= Carbon::now()->format('Y-m-d');
       
        
        return view('users.show', [
            
            'laptimes' => $laptimes,
            'date' => $date,
            'dates' => $dates,
            'currentMonth' => $currentMonth,
            'default' => $default,
            
            
           
        ]);
        
    }
    
    
    public function edit($id)
    {
        $user_id = \Auth::id();
        
        $laptime = Laptime::findOrFail($id);
        
        $default= Carbon::now()->format('Y-m-d');
        
        
        return view('users.edit', [
            'laptime' => $laptime,
            'default' => $default,
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
    
    public function getCalendarDates()
    {
        $yearMonth = Carbon::now()->firstOfMonth()->format('Y-m-d');
        $date = new Carbon($yearMonth);
        // カレンダーを四角形にするため、前月となる左上の隙間用のデータを入れるためずらす
        $date->subDay($date->dayOfWeek);
        // 同上。右下の隙間のための計算。
        $count = 31 + $date->dayOfWeek;
        $count = ceil($count / 7) * 7;
        $dates = [];
        for ($i = 0; $i < $count; $i++, $date->addDay()) {
            // copyしないと全部同じオブジェクトを入れてしまうことになる
            $dates[] = $date->copy();
        }
        return $dates;
    }
    
}

