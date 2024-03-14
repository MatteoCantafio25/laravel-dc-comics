<header>
        <div class="header-container">
            <a href="{{route('home')}}" class="figure-container">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo">
            </a>
            <div class="categories">
                <ul class="mb-0 p-0">
                @foreach (config('main_menu') as $link )
                    <li><a href="{{route($link['route_name'])}}">{{$link['text']}}</a></li>
                @endforeach
                </ul>
            </div>
        </div>
    </header>