<!-- Araştırmalarıma göre avukat danışmanlık siteleri sliderlarında bu tarz görseller barındırıyor. Bu yüzden görsel seçimim budur.-->
<div class="home-slider owl-carousel">
        @foreach($sliderdata as $rs)
            <a href="#" >
                <img class="slider-item" src="{{Storage::url($rs->image)}}" alt="">
            </a>
        @endforeach
</div>

