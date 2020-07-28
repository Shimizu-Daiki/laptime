

@extends('layouts.app')

@section('content')
   
    <div class ="row">
        <div class="col-6">
            <h3>{{ $date }}の記録</h3>
            <div class="overflow-auto" style=" height:294px; border: 1px solid #000000; font-size:32px;">
                <table class="table" >
                  <thead class="text-center">
                    <tr>
                      <th scope="col">Lap time</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr style="display: flex; flex-direction: column;">
                        @foreach ($laptimes as $laptime)
                            
                            <td style="font-size :24px; font-weight :bold;"> {{ $loop->iteration }}回目　［{{ $laptime->content }}］</td>
                            <td class="text-center" style="font-size: 32px;">{!! link_to_route('users.edit', $laptime ->created_at, ['user' => $laptime->id]) !!}</td>
                           
                        @endforeach
                    </tr>
                  </tbody>
                </table>
                
            </div>
        </div>
        <div class="col-6">
            <h3>2020年7月</h3>
            
            <table class="table table-bordered">
              <thead>
                <tr>
                  @foreach (['日', '月', '火', '水', '木', '金', '土'] as $dayOfWeek)
                  <th>{{ $dayOfWeek }}</th>
                  @endforeach
                </tr>
              </thead>
              <tbody>
                @foreach ($dates as $date)
                @if ($date->dayOfWeek == 0)
                <tr>
                @endif
                  <td
                    @if ($date->month != $currentMonth)
                    class="bg-secondary"
                    @endif
                  >
                    <!--↓第3引数で日付を渡す-->
                    {!! link_to_route('users.show', $date->day, ['user' => $date]) !!}
                  </td>
                @if ($date->dayOfWeek == 6)
                </tr>
                @endif
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
   
@endsection