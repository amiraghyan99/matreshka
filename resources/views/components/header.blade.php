<header class="header-area">
    <!-- Nav Section -->
    <nav class="navbar navbar-default navbar-fixed-top nav-area" id="scroll-menu">
        <!-- Header Top Section -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="d-none d-md-block col-lg-8 col-md-6">
                        <ul class="online">
                            <li>
                                <a href="{{'tel:' . str_replace(' ', '', __('main.phone.number'))}}">@lang('main.phone.title')
                                    :<span>@lang('main.phone.number')</span></a>
                            </li>

                            <li><a href="#">@lang('main.opening.title'):<span><small>@lang('main.opening.days')</small>@lang('main.opening.times')</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6">
                        <ul class="social-link">
                            @foreach($socials as $social)
                                <li>
                                    <a href="{{$social['href']}}"
                                       target="{{$social['target']}}">
                                        <i class="{{$social['iconClass']}}"></i>
                                    </a>
                                </li>
                            @endforeach
                            @yield('language_switcher')
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Header Top Section -->
        <div class="container">
            <div class="logo-menu-wrap">
                <div class="logo">
                    <a href="{{route('home', app()->currentLocale())}}">
                        <img src="{{asset('assets/img/logos/logo-night-club.webp')}}"
                             alt="responsive img"
                             class="logo-image"
                             loading="lazy"
                        >
                    </a>
                </div>
                <div class="main-menu main-menu-mrg1">
                    <nav>
                        <ul>
                            @foreach($navigations as $navigation)
                                <li>
                                    <a href="{{$navigation['href']}}">{{$navigation['text']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            @foreach($navigations as $navigation)
                                <li>
                                    <a href="{{$navigation['href']}}">{{$navigation['text']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
</header>
