<div class="home-slider owl-carousel">
        @foreach($sliderdata as $rs)
            <a>
                <img class="slider-item" src="{{Storage::url($rs->image)}}" alt="">
            </a>
        @endforeach
</div>


