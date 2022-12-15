<div class="hero-area" id="home">
    <div id="hero-slider-screen" class="owl-carousel owl-theme hero-slider-inner">
        @foreach($intros as $key => $intro)
            <div class="item">
                <img
                        data-src="{{$intro['image-large']}}"
                        alt="{{$intro['title']}}"
                        class="owl-lazy"
                >
                <div class="hero-caption">
                    <div class="hero-caption-inner">
                        <h1 class="hero-caption-title neonText">{{$intro['title']}}</h1>
                        <p>{{$intro['description']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>