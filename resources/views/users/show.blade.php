@extends('layouts.app')

@section('content')
   
    <div class ="row">
        <div class="col-9">
            <h1 style="font-weight: bold;">{{ $date }}の記録</h1>
            <div class="overflow-auto" style="width:800px; height:300px; border: 2px solid #000000; font-size:32px;">
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
        <div class="col-3">
            <h3>2020年7月</h3>
            <table class="table table-bordered" style="width: 800px; height:400px;">
                  <tr>
                      <th>月</th>
                      <th>火</th>
                      <th>水</th>
                      <th>木</th>
                      <th>金</th>
                      <th style="color: blue;">土</th>
                      <th style="color: red;">日</th>
                  </tr>
                  <tr>
                      <td>{!! link_to_route('users.show', '', ['user' => '2020-06-29']) !!}</td>
                      <td>{!! link_to_route('users.show', '', ['user' => '2020-06-30']) !!}</td>
                      <td>{!! link_to_route('users.show', '1', ['user' => '2020-07-01']) !!}</td>
                      <td>{!! link_to_route('users.show', '2', ['user' => '2020-07-02']) !!}</td>
                      <td>{!! link_to_route('users.show', '3', ['user' => '2020-07-03']) !!}</td>
                      <td>{!! link_to_route('users.show', '4', ['user' => '2020-07-04']) !!}</td>
                      <td>{!! link_to_route('users.show', '5', ['user' => '2020-07-05']) !!}</td>
                      
                      
                      
                  </tr>
                  <tr>
                      <td>{!! link_to_route('users.show', '6', ['user' => '2020-07-06']) !!}</td>
                      <td>{!! link_to_route('users.show', '7', ['user' => '2020-07-07']) !!}</td>
                      <td>{!! link_to_route('users.show', '8', ['user' => '2020-07-08']) !!}</td>
                      <td>{!! link_to_route('users.show', '9', ['user' => '2020-07-09']) !!}</td>
                      <td>{!! link_to_route('users.show', '10', ['user' => '2020-07-10']) !!}</td>
                      <td>{!! link_to_route('users.show', '11', ['user' => '2020-07-11']) !!}</td>
                      <td>{!! link_to_route('users.show', '12', ['user' => '2020-07-12']) !!}</td>
                  </tr>
                  <tr>
                      <td>{!! link_to_route('users.show', '13', ['user' => '2020-07-13']) !!}</td>
                      <td>{!! link_to_route('users.show', '14', ['user' => '2020-07-14']) !!}</td>
                      <td>{!! link_to_route('users.show', '15', ['user' => '2020-07-15']) !!}</td>
                      <td>{!! link_to_route('users.show', '16', ['user' => '2020-07-16']) !!}</td>
                      <td>{!! link_to_route('users.show', '17', ['user' => '2020-07-17']) !!}</td>
                      <td>{!! link_to_route('users.show', '18', ['user' => '2020-07-18']) !!}</td>
                      <td>{!! link_to_route('users.show', '19', ['user' => '2020-07-19']) !!}</td>
                  </tr>
                  <tr>
                      <td>{!! link_to_route('users.show', '20', ['user' => '2020-07-20']) !!}</td>
                      <td>{!! link_to_route('users.show', '21', ['user' => '2020-07-21']) !!}</td>
                      <td>{!! link_to_route('users.show', '22', ['user' => '2020-07-22']) !!}</td>
                      <td>{!! link_to_route('users.show', '22', ['user' => '2020-07-23']) !!}</td>
                      <td>{!! link_to_route('users.show', '23', ['user' => '2020-07-24']) !!}</td>
                      <td>{!! link_to_route('users.show', '24', ['user' => '2020-07-25']) !!}</td>
                      <td>{!! link_to_route('users.show', '25', ['user' => '2020-07-26']) !!}</td>
                  </tr>
                  <tr>
                      <td>{!! link_to_route('users.show', '26', ['user' => '2020-07-27']) !!}</td>
                      <td>{!! link_to_route('users.show', '27', ['user' => '2020-07-28']) !!}</td>
                      <td>{!! link_to_route('users.show', '28', ['user' => '2020-07-29']) !!}</td>
                      <td>{!! link_to_route('users.show', '29', ['user' => '2020-07-30']) !!}</td>
                      <td>{!! link_to_route('users.show', '30', ['user' => '2020-07-31']) !!}</td>
                      <td>{!! link_to_route('users.show', '31', ['user' => '2020-08-01']) !!}</td>
                      <td>{!! link_to_route('users.show', '', ['user' => '2020-08-02']) !!}</td>
                  </tr>
              
            </table>
        </div>
    </div>
   
@endsection