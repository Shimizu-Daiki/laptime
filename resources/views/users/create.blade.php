@extends('layouts.app')

@section('content')

    <h1>メモ</h1>
    <div class="row">
        <div class="col-6">
            {!! Form::model($laptime, ['route' => 'users.store']) !!}

                <div class="form-group">
                   
                    {!! Form::text('$laptme ->content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ADD', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
    
@endsection