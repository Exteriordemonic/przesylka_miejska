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