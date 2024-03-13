<section id="details">
    <div class="details-container">
        <div class="talent">
            <h3>Talent</h3>
            <div class="detail b-top">
                <div class="left-detail">
                    <h4>Art by:</h4>
                </div>
                <div class="right-detail">
                    <p class="cl-blue">{{ $comic->artists }}</p>
                </div>
            </div>
            <div class="detail b-top b-bottom">
                <div class="left-detail">
                    <h4>Written by:</h4>
                </div>
                <div class="right-detail">
                    <p class="cl-blue">{{ $comic->writers }}</p>
                </div>
            </div>
        </div>
        <div class="specs">
            <h3>Specs</h3>
            <div class="detail b-top">
                <div class="left-detail">
                    <h4>Series:</h4>
                </div>
                <div class="right-detail">
                <p class="cl-blue">{{ $comic->series }}</p>
                </div>
            </div>
            <div class="detail b-top">
                <div class="left-detail">
                    <h4>U.S Price:</h4>
                </div>
                <div class="right-detail">
                    <p>{{ $comic->price }}</p>
                </div>
            </div>
            <div class="detail b-top b-bottom">
                <div class="left-detail">
                    <h4>On Sale Date:</h4>
                </div>
                <div class="right-detail">
                    <p>{{ $comic->sale_date }}</p>
                </div>
            </div>
        </div>
    </div>
</section>