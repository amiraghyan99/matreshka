<div class="service-area inner-padding2">
    <div class="container">
        <div class="row">
            <div class="col-12 foo">
                <div class="section-title-area">
                    <h2 class="section-title">@lang('main.section.welcome.title')</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($services as $service)
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <img src="{{$service['image']}}" alt="{{$service['title']}}" loading="lazy">
                    <div class="caption">
                        <div class="caption-inner">
                            <div class="caption-content">
                                {{ $svgIcon($service['id']) }}
                                <h3 class="service-title">{{$service['title']}}</h3>
                                <p>{{$service['desc']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
