<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand font-weight-bold" href="/" style="font-size : 44px">lap-time</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"  style="font-size : 24px">Select Page</a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        {{-- ユーザ詳細ページへのリンク --}}
                        <li class="dropdown-item">{!! link_to_route('users.index', 'Top', ['user' => Auth::id()]) !!}</li>
                        <div class="dropdown-divider"></div>
                        <li class="dropdown-item">{!! link_to_route('users.today', 'Today', ['user' => Auth::id()]) !!}</li>
                        <div class="dropdown-divider"></div>
                        <li class="dropdown-item">{!! link_to_route('users.show', 'Show', ['user' => Auth::user()->name ]) !!}</li>
                        <li class="dropdown-divider"></li>
                        {{-- ログアウトへのリンク --}}
                        <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                    </ul>
                </li>
                
            </ul>
        </div>
       
    </nav>
</header>