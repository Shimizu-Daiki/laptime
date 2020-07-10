<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>lap-time</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>

    <body style="background-color : #444444">

        <h1 style="color : white; font-weight:bold; padding-top:50px; text-align:center; font-size:80px; margin: 80px 0 50px 0">Log in</h1>
         
        <div class="row" style="margin-left: 200px">
            <div class="col-sm-4 offset-sm-3">
    
                {!! Form::open(['route' => 'login.post']) !!}
                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                    </div>
    
                    <div class="form-group  mt-4">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
    
                    {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block mt-5']) !!}
                    
                {!! Form::close() !!}
    
                {{-- ユーザ登録ページへのリンク --}}
                <p class="mt-2">New user? {!! link_to_route('signup.get', 'Sign up') !!}</p>
            </div>
        </div>

        
        
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>
