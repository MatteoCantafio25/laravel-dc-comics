
<section id="product">
        <div class="product-section">
            <div class="info">
                <h1 class="mb-0">{{strtoupper($comic->title)}}</h1>
                <div class="box">
                    <div class="price-box">
                        <p class="mb-0"><span class="cl-green">U.S Price:</span> {{$comic->price}}</p>
                        <p class="cl-green mb-0">AVAILABLE</p>
                    </div>
                    <div class="avail-box">
                        <p class="mb-0">Check Availability</p>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                <p class="desc mb-0">{{$comic->description}}</p>
            </div>
            <div class="adv">
                <h4 class="mb-0">ADVERTISMENT</h4>
                <img src="{{Vite::asset('resources/img/ADV.JPG')}}" alt="ADV">
            </div>
        </div>
</section>