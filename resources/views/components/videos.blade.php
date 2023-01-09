@if($videos)
    <div class="container reveal" id="videos">
        <div class="row">
            <div class="col-12 foo">
                <div class="section-title-area">
                    <h2 class="section-title">@lang('main.section.videos')</h2>
                </div>
            </div>
        </div>
        <div id="carouselVideo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner videoSection">
                @foreach($videos as $key => $video)
                    <div class="carousel-item {{$key == 0 ? 'active': ''}}">
                        <video id="video-player-{{$key}}" class="d-block w-100 video"
                               controls loop preload="none" playsinline>
                            <source src="{{$video}}" type="video/mp4">
{{--                            <source src="{{$video}}" type="video/webm">--}}
                            Your browser does not support the video tag.
                        </video>
                    </div>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#carouselVideo" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon sr-only" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#carouselVideo" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon sr-only" aria-hidden="true"></span>
            </a>
        </div>
    </div>
@endif