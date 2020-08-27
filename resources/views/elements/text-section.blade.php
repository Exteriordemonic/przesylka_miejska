@if($textSection)
@php
    $label = $textSection['label'];
    $title = $textSection['title'];
    $text = $textSection['text'];
    $url = $textSection['url'];
    $button = $textSection['button'];
    $direction = $textSection['direction'];
@endphp
<div class="text-section text-section--{{ $direction }}">
    @if ($label)
    <p class="text-section__label">
        {{ $label }}
    </p>
    @endif
    @if ($title)
    <h2 class="text-section__title">
        {{ $title }}
    </h2>
    @endif
    @if ($text)
    <div class="text-section__text">
        {!! $text !!}
    </div>
    @endif
    @if ($url)
    <a href="{{ $url['url'] }}" class="text-section__button button button--{{ $button }}" target="_blank">
        {{ $url['title'] }}
    </a>
    @endif
</div>
@endif