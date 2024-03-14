 <div class="spam">
        <div class="spam-content">
            <ul class="mb-0 p-0">
                @foreach (config('main_spam') as $spam)  
                    <li>
                        <img src="{{ Vite::asset('resources/img/' . $spam['url']) }}" alt="{{ $spam['text'] }}">
                        <a href="#">{{$spam['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>