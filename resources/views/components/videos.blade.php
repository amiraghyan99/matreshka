@if($videos)
    <div class="container" id="videos">
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
                               controls loop playsinline preload="{{$key == 0 ? 'auto': 'none'}}">
                            <source src="{{$video}}" type="video/mp4">
                            {{--                        <source src="{{$video}}" type="video/webm">--}}
                            Your browser does not support the video tag.
                        </video>
                    </div>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#carouselVideo" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselVideo" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endif