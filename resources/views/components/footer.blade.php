
<footer>
    <div class="footer-area reveal" data-sr='bottom'>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="company-logo">
                        <a href="{{route('home', app()->currentLocale())}}">
                            <img src="{{asset('assets/img/logos/logo-night-club.webp')}}"
                                 alt="responsive img" loading="lazy">
                        </a>
                    </div>
                    <div class="footer-content">
                        <ul class="social-link">
                            <li>
                                <a href="https://www.google.com/maps/place/Matreshka+Show+Club/@40.1987449,44.5817158,17z/data=!3m1!4b1!4m5!3m4!1s0x406aa37f3f0decb1:0xbf605c39da28501a!8m2!3d40.1987112!4d44.5839217"
                                   target="_blank">
                                    <i class="fa fa-map-marker"></i>
                                    <span class="address">@lang('main.address')</span>
                                </a>
                            </li>
                        </ul>

                        <ul class="social-link">
                            @foreach($socials as $social)
                                <li>
                                    <a href="{{$social['href']}}"
                                       target="{{$social['target']}}">
                                        <i class="{{$social['iconClass']}}"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <h4 class="footer-title">@lang('main.opening.title')</h4>
                    <div class="footer-content">
                        <div class="opening-time">
                            <p>
                                <strong class="me-5">@lang('main.opening.days')</strong><small>@lang('main.opening.times')</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>