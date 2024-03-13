 <div class="spam">
        <div class="spam-content">
            <ul>
                @foreach (config('main_spam') as $spam)  
                    <li>
                        <img src="{{ Vite::asset('resources/img/' . $spam['url']) }}" alt="{{ $spam['text'] }}">
                        <a href="#">{{$spam['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>