@if($textSection)
@php
    $label = $textSection['label'];
    $title = $textSection['title'];
    $text = $textSection['text'];
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
</div>
@endif