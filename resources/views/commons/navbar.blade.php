<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        @if (Auth::check())
            <a class="navbar-brand" href='{{ route('users.show', ['user' => Auth::user()->id]) }}'>Microposts</a>
        @else
            <a class="navbar-brand" href='/'>Microposts</a>
        @endif
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    
                    {{-- ユーザ一覧ページ --}}
                    <li>{!! link_to_route('users.index', 'Users', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            {{-- ユーザ詳細ページ --}}
                            <li class="dropdown-item">{!! link_to_route('users.show', 'My profile', ['user' => Auth::id()]) !!}</li>
                            <li class="dropdown-divider"></li>
                            {{-- ログアウトへのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                        </ul>
                    </li>
                @else
                    {{-- ユーザ登録ページ --}}
                    <li class="navbar-item">
                        {!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}
                    </li>
                    {{-- ログインページ --}}
                    <li class="navbar-item">
                        {!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}
                    </li>
                    
                @endif
            </ul>
        </div>
    </nav>
</header>