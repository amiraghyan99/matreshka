<div class="dropdown localization">
    <div class="dropdown-toggle" id="Localization" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
        <img width="20px" src="{{url('assets/images/svg/flags/russian.svg')}}" alt="">
    </div>
    <ul class="dropdown-menu" aria-labelledby="Dropdown">
        @foreach($available_locales as $locale_name => $available_locale)
            @if($available_locale === app()->getLocale())
                <li>
                    <a class="dropdown-item" href="{{route('localization', $available_locale)}}">
                        <img width="20px" src="{{url('assets/images/svg/flags',  strtolower($locale_name). '.svg' )}}"
                             alt="{{$locale_name}}">
                        <i class="fa fa-check text-success"></i>
                    </a>
                </li>
            @else
                <li>
                    <a class="dropdown-item" href="{{route('localization', $available_locale)}}">
                        <img width="20px" src="{{url('assets/images/svg/flags' , strtolower($locale_name). '.svg')}}" alt="$locale_name">
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</div>
