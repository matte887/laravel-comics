<header>
    <div class="header-top">
        <div class="container">
            <ul>
                <li><a href="">DC power visa</a></li>
                <li><a href="">additional DC sites</a></li>
            </ul>
        </div>
    </div>
    <nav>
        <div class="container">
            <img src="{{asset('/images/dc-logo.png')}}" alt="">

            <ul>
                <li>
                    <a href="{{route('comics')}}" class="{{ Request::route()->getName()
                     === 'characters' ? 'active' : '' }}">Characters</a>
                </li>
                <li>
                    <a href="{{route('comics')}}" class="{{ Request::route()->getName()
                     === 'comics' ? 'active' : '' }}">Comics</a></li>
                <li>
                    <a href="{{route('movies')}}" class="{{ Request::route()->getName()
                     === 'movies' ? 'active' : '' }}">Movies</a></li>
                <li>
                    <a href="{{route('comics')}}" class="{{ Request::route()->getName()
                     === 'tv' ? 'active' : '' }}">TV</a>
                </li>
                <li>
                    <a href="{{route('comics')}}" class="{{ Request::route()->getName()
                     === 'games' ? 'active' : '' }}">Games</a>
                </li>
                <li>
                    <a href="{{route('comics')}}" class="{{ Request::route()->getName()
                     === 'collectibles' ? 'active' : '' }}">Collectibles</a>
                </li>
                <li>
                    <a href="{{route('comics')}}" class="{{ Request::route()->getName()
                     === 'videos' ? 'active' : '' }}">Videos</a>
                </li>
                <li>
                    <a href="{{route('comics')}}" class="{{ Request::route()->getName()
                     === 'fans' ? 'active' : '' }}">Fans</a>
                </li>
                <li>
                    <a href="{{route('comics')}}" class="{{ Request::route()->getName()
                     === 'news' ? 'active' : '' }}">News</a>
                </li>
                <li>
                    <a href="{{route('comics')}}" class="{{ Request::route()->getName()
                     === 'shop' ? 'active' : '' }}">Shop</a>
                </li>
            </ul>
            <input type="text" placeholder="Search">
        </div>
    </nav>        
</header>