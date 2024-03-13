<main>
    <div class="position-button">
        <a role="button" href="#">CURRENT SERIES</a>
    </div>
        <div class="content-container">
            @foreach ($comics as $comic)
            <div class="series-card">
                <a href="{{route('comics.show', $comic)}}">  
                    <img src="{{$comic->thumb}}" alt="{{$comic->series}}">
                    <h3>{{$comic->series}}</h3>
                </a>    
            </div>
            @endforeach
        </div>
    <div class="button-container">
        <a role="button" href="#">LOAD MORE</a>
    </div>
</main>