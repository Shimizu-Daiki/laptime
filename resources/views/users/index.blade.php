<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>lap-time</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <style type="text/css">
            .clock{
                font-size : 150px;
                border : 15px solid black;
                border-radius :50px;
                padding:25px 20px;
                background-color:#99CCCC	;
                color:white;
                
            }    
            .record{
                margin-left: 100px;
            }
            .contents{
                display:flex;
                flex-wrap: wrap;
                margin: 100px 0 0 100px;
            }
            
        </style>

    </head>

    <body style="text-align: center; margin:auto;">

        {{-- ナビゲーションバー --}}
        @include('commons.navbar')

        <div class="contents">
            
            <div>
                
                <div class="text-center clock" >
                    <p id="RealtimeClockArea2">NOW LOADINNG...</p>
                </div>
                
            </div>
            <div class="record">
                <h1 style="font-size: 55px;">New Record</h1>
                <div>
                    
                    
                    @foreach ($laptimes as $laptime)
                        <p style="font-size: 50px;"><?php print htmlspecialchars( $laptime ->created_at ?? '', ENT_QUOTES, "UTF-8"); ?></p>
                    @endforeach
                
                </div>
                
            </div>
            
        </div>
        <div style="margin-top: 0px; margin-left: 1300px; width: 300px; font-size:36px;">
            @include('user_add.add_button')  
        </div>
       
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        
        <script type="text/javascript" src="techAcademy.js"></script>
    </body>
</html>