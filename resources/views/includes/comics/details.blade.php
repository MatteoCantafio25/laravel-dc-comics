<!-- Buttons -->
<div class="buttons-container d-flex align-items-center justify-content-end gap-2 py-3">
    <a class="btn btn-primary" href="{{route('comics.index')}}">Go Back</a>
    <a class="btn btn-warning" href="{{route('comics.edit', $comic->id)}}">Edit</a>
    <form action="{{route('comics.destroy', $comic->id)}}" method="POST" id="delete-form">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>
</div>

<!-- Details Section -->
<section id="details">
    <div class="details-container">
        <div class="talent">
            <h3 class="mb-0">Talent</h3>
            <div class="detail b-top">
                <div class="left-detail">
                    <h4 class="mb-0">Art by:</h4>
                </div>
                <div class="right-detail">
                    <p class="mb-0" class="cl-blue">{{ $comic->artists }}</p>
                </div>
            </div>
            <div class="detail b-top b-bottom">
                <div class="left-detail">
                    <h4 class="mb-0">Written by:</h4>
                </div>
                <div class="right-detail">
                    <p class="cl-blue mb-0">{{ $comic->writers }}</p>
                </div>
            </div>
        </div>
        <div class="specs">
            <h3 class="mb-0">Specs</h3>
            <div class="detail b-top">
                <div class="left-detail">
                    <h4 class="mb-0">Series:</h4>
                </div>
                <div class="right-detail">
                <p class="cl-blue mb-0">{{ $comic->series }}</p>
                </div>
            </div>
            <div class="detail b-top">
                <div class="left-detail">
                    <h4 class="mb-0">U.S Price:</h4>
                </div>
                <div class="right-detail">
                    <p class="mb-0">{{ $comic->price }}</p>
                </div>
            </div>
            <div class="detail b-top b-bottom">
                <div class="left-detail">
                    <h4 class="mb-0">On Sale Date:</h4>
                </div>
                <div class="right-detail">
                    <p class="mb-0">{{ $comic->sale_date }}</p>
                </div>
            </div>
        </div>
    </div>
    
</section>