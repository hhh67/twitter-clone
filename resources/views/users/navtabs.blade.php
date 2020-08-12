<ul class="nav nav-tabs nav-justified mb-3">
    {{-- ユーザ詳細タブ --}}
    <li class="nav-item">
        <a href="{{ route('users.show', ['user' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.show') ? 'active' : '' }}">
            <i class="fas fa-home"></i> TimeLine
            <span class="badge-pill badge-secondary">{{ $user->microposts_count }}</span>
        </a>
    </li>
    {{-- フォロー一覧タブ --}}
    <li class="nav-item">
        <a href="{{ route('users.followings', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.followings') ? 'active' : '' }}">
            <i class="fas fa-user"></i> Followings
            <span class="badge-pill badge-secondary">{{ $user->followings_count }}</span>
        </a>
    </li>
    {{-- フォロワー一覧タブ --}}
    <li class="nav-item">
        <a href="{{ route('users.followers', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.followers') ? 'active' : '' }}">
            <i class="far fa-user"></i> Followers
            <span class="badge-pill badge-secondary">{{ $user->followers_count }}</span>
        </a>
    </li>
    {{-- お気に入りした投稿の一覧タブ --}}
    <li class="nav-item">
        <a href="{{ route('users.favorites', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.favorites') ? 'active' : '' }}">
            <i class="fas fa-star"></i> Favorites
            <span class="badge-pill badge-secondary">{{ $user->favorites_count }}</span>
        </a>
    </li>
</ul>