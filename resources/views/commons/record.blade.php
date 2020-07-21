@extends('layouts.app')

@section('content')
    <h1 style="border-bottom :2px solid #000000">今日の記録</h1>
    <div class="overflow-auto" style="width:500px; height:300px; border: 2px solid #000000; font-size:32px;">
        <table class="table" >
          <thead class="text-center">
            <tr>
              <th scope="col">Lap time</th>
              
            </tr>
          </thead>
          <tbody>
            <tr style="display: flex; flex-direction: column;">
                @foreach ($today_laptimes as $today_laptime)
                    
                    <td style="font-size :24px; font-weight :bold;"> {{ $loop->iteration }}回目</td>
                    <td class="text-center" style="font-size: 32px;">{!! link_to_route('users.edit', '', ['laptime' => $laptime->id]) !!}<?php print htmlspecialchars($today_laptime ->created_at ?? '', ENT_QUOTES, "UTF-8"); ?></td>
                @endforeach
            </tr>
          </tbody>
        </table>
    </div>
@endsection