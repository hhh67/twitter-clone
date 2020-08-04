<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href='/'>Microposts</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li class="navbar-item">
                    {!! link_to_route('signup.get', 'Sign up', [], ['class' => 'nav-link']) !!}
                </li>
                <li class="navbar-item"><a href="#" class="nav-link">Login</a></li>
            </ul>
        </div>
    </nav>
</header>