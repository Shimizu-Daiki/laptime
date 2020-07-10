<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>lap-time</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>

    <body style="background-color : #444444">

        <h1 style="color : white; font-weight:bold; padding-top:250px; text-align:center; font-size:80px;">Welcome to lap-time!!​</h1>
         
        <div style="margin:100px 0 0 660px;">
            <button class="btn btn-primary" type="submit" style="display:block; padding: 4px 130px; font-weight: bold; font-size: 24px; border:3px solid #5D99FF;">Log in</button>
            
            {!! link_to_route('signup.get', 'Sign up', [], ['class' => 'btn btn-lg btn-primary mt-4 col-sm-4', 'style' => 'display:block;  font-weight: bold; font-size: 24px; border:3px solid #5D99FF;']) !!}
        </div>

        
        
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>

