<div class="hero-area" id="home">
    <div id="hero-slider-screen" class="owl-carousel owl-theme hero-slider-inner">
        @foreach($intros as $key => $intro)
            <div class="item">
                <img
                        {{--                        src="{{$intro['image']}}"--}}
                        data-src="{{$intro['image']}}"
                        alt="{{$intro['title']}}"
                        class="owl-lazy"
                >
                <div class="hero-caption">
                    <div class="hero-caption-inner">
                        <h1 class="hero-caption-title neonHeroText">{{$intro['title']}}</h1>
                        <p>{{$intro['description']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>