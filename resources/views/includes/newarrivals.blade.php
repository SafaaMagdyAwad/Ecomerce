<section class="new-arrivals">
    <div id="site">
        <div class="container">
            <div class="title-box">
                <h2>New Arrivals</h2>
            </div>
            <div class="row">
                @foreach ($newarrivals as $item)    
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="{{ asset('assets/images/'.$item->image) }}">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>

                            <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                                <i class="fa fa-heart-o"></i>
                            </button>

                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>


                    <div class="product-bottom text-center">
                        @for ($i = 1; $i < $item->star; $i=$i+2)
                            
                        <i class="fa fa-star"></i>
                        @endfor
                        
                        <h3>{{ $item->title }}</h3>
                        <div class="product-description" data-name="{{ $item->category->category }}" data-price="{{ $item->price }}">

                            <p class="product-price">&euro; {{ $item->price }}</p>
                            <form class="add-to-cart" action="{{ route('cart') }}" method="get">
                                @csrf
                                <div>
                                    <label for="qty-2">Quantity</label>
                                    <input type="text" name="qty-2" id="qty-2" class="qty"
                                        value="1" />
                                </div>
                                <p><input type="submit" value="Add to cart" class="btn" /></p>
                            </form>

                        </div>
                    </div>
                </div>
                @endforeach


               

            </div>



            





        </div>
    </div>
</section>