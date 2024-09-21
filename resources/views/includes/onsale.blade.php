<section class="on-sale">
    <div id="site">
        <div class="container">
            <div class="title-box">
                <h2>On Sale</h2>
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
                        <div class="product-description" data-name="{{ $item->title}}" data-price="{{ $item->price }}">

                            <p class="product-price">&euro; {{ $item->price }}</p>
                         
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>