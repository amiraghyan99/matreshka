@if($galleries)
    <div class="gallery-area inner-padding reveal" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-12 reveal">
                    <div class="section-title-area">
                        <h2 class="section-title ">@lang('main.section.gallery')</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="gallery-masonry gallery">
                        @foreach($galleries as $gallery)
                            <div class="gallery-item">
                                <img src="{{ $gallery['min'] }}" alt="Gallery">
                                <div class="caption">
                                    <div class="caption-inner">
                                        <div class="caption-content">
                                            <ul>
                                                <li><a href="{{ $gallery['max'] }}"><i
                                                                class="fa-solid fa-magnifying-glass"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
