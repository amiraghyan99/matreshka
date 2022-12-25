<header class="header-area">
    <!-- Nav Section -->
    <nav class="navbar navbar-default navbar-fixed-top nav-area" id="scroll-menu">
        <!-- Header Top Section -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="d-none d-lg-block col-12">
                        <ul class="online">
                            <li>
                                <a href="{{'tel:' . str_replace(' ', '', __('main.phone.number'))}}">@lang('main.phone.title')
                                    :<span>@lang('main.phone.number')</span></a>
                            </li>

                            <li><a href="#">@lang('main.opening.title'):<span><small>@lang('main.opening.days')</small>@lang('main.opening.times')</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12">
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
                    <a href="#">
                        <img src="{{asset('assets/img/logos/logo-night-club.webp')}}"
                             alt="Matreshka Show Club"
                             class="logo-image"
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

            <div class="mobile-menu">
                <div class="menu js-menu neonMenu">
                    <span class="menu__line neonLine"></span>
                    <span class="menu__line neonLine"></span>
                    <span class="menu__line neonLine"></span>
                </div>
                <nav class="nav js-nav">
                    <ul class="nav__list js-nav__list">
                        @foreach($navigations as $navigation)
                            <li class="nav__item">
                                <a href="{{$navigation['href']}}">{{$navigation['text']}}</a>
                            </li>
                        @endforeach

                    </ul>
                    <div class="nav__list js-nav_social">
                        <ul>
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

                </nav>
            </div>


        </div>
    </nav>
</header>
