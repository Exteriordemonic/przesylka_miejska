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
            Bydgoszcz
        </a>
    </li>     
</ul>
@endif