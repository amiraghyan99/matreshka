@section('language_switcher')
    <div class="dropdown localization">
        <div class="dropdown-toggle" id="Localization" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            <img width="20px" src="{{url('assets/img/svg/flags', app()->currentLocale().'.svg')}}"
                 alt="">
        </div>
        <ul class="dropdown-menu" aria-labelledby="Dropdown">
            @foreach($available_locales as  $available_locale => $locale_name)
                <li>
                    <a class="dropdown-item" href="{{route('localization', $available_locale)}}">
                        <img width="20px" src="{{url('assets/img/svg/flags' , $available_locale. '.svg')}}"
                             alt="{{$locale_name}}">
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection