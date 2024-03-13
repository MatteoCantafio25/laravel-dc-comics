
<section id="product">
        <div class="product-section">
            <div class="info">
                <h1>{{strtoupper($product['title'])}}</h1>
                <div class="box">
                    <div class="price-box">
                        <p><span class="cl-green">U.S Price:</span> {{$product['price']}}</p>
                        <p class="cl-green">AVAILABLE</p>
                    </div>
                    <div class="avail-box">
                        <p>Check Availability</p>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                <p class="desc">{{$product['description']}}</p>
            </div>
            <div class="adv">
                <h4>ADVERTISMENT</h4>
                <img src="{{Vite::asset('resources/img/ADV.JPG')}}" alt="ADV">
            </div>
        </div>
</section>