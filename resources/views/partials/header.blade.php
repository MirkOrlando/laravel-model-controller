<header class="bg-light">
    <div class="container">
        <nav class="navbar navbar-expand navbar-light">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link text-uppercase {{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                    href="{{ route('home') }}">Home</a>
                <a class="nav-item nav-link text-uppercase {{ Route::currentRouteName() === 'movies.index' ? 'active' : '' }}"
                    href="{{ route('movies.index') }}">Movies</a>
            </div>
        </nav>
    </div>
</header>
