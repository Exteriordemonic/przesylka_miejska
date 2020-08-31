@if ($buttons)
    <ul class="buttons-list">
        @foreach ($buttons as $button)
        <li class="buttons-list__item">
            @php
                $link = $button['link'];
                $type = $button['type'];
            @endphp
            <a href="{{ $link['url'] }}" class="button button--{{ $type }}">
                {{ $link['title'] }}
            </a>
        </li>     
        @endforeach
    </ul>
@endif

@if($popup) 
<ul class="buttons-list buttons-list--center">
    <li class="buttons-list__item">
        <a href="" class="button button--light" data-one-link>
            Trójmiasto
        </a>
    </li>     
    <li class="buttons-list__item">
        <a href="" class="button button--light" data-two-link>
            Bydgoszcz i Toruń
        </a>
    </li>     
</ul>
@endif

@if($cookies) 
<ul class="buttons-list buttons-list--center">
    <li class="buttons-list__item">
        <button href="" data-cookies-accept class="button button--small button--special">
            Akceptuj
        </button>
    </li>     
    <li class="buttons-list__item">
        <a href="@option('cookies_more', 'url')" class="button button--small button--special">
            @option('cookies_more', 'title')
        </a>
    </li>     
</ul>
@endif

@if($error) 
<ul class="buttons-list buttons-list--center">
    <li class="buttons-list__item">
        <a href="{{ home_url() }}" class="button button--special">
            Strona główna
        </a>
    </li>     
</ul>
@endif