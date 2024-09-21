<div class="slider">
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @for ($i = 1; $i <= 3; $i++)
                <div class="carousel-item active" data-interval="10000">
                    <img src="{{ asset('assets/images/slider/image' . $i . '.jpg') }}" class="d-block w-100" alt="..."
                        style="width:auto;height:800px;">
                </div>
            @endfor

        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
