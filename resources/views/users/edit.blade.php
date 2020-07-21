@extends('layouts.app')

@section('content')
   
    
    <div class="row">
        
        <div class="col-6">
            
            <h1 style="border-bottom: 2px solid black;">Record: {{ $laptime ->created_at }} </h1> 
            
        </div> 
        
        <div class="col-6">
            
            
            {!! Form::model($laptime, ['route' => ['users.update', $laptime->id], 'method' => 'put']) !!}

                <div class="form-group" style="font-size: 44px; margin-left: 200px;">
                    {!! Form::label('content', 'Memo') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control', 'style' => 'width: 700px; height: 300px; fontt-size: 80%;']) !!}
                </div>

                {!! Form::submit('Add memo!', ['class' => 'btn btn-info', 'style' => 'width: 300px; height: 100px; border-radius: 60px; font-size: 44px; margin-left: 800px;']) !!}

            {!! Form::close() !!}
        </div>
        
    </div>
@endsection

