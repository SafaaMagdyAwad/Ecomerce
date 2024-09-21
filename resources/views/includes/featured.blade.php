 <!------Featured Categories----->
 <section class="featured-categories">
    <div class="container">
        <div class="row">
            @foreach ($featured as $item)    
            <div class="col-md-3">
                <img src="{{ asset('assets/images/'.$item->image) }}">
            </div>
            @endforeach
        </div>

    </div>
</section>