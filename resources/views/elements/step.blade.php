@php
    $title  = $step['title'];
    $text  = $step['text'];
    $direction  = $step['direction'];
    $link  = $step['link'];
    $type  = $step['type'];
@endphp

<article class="step step--{{ $direction }} step--{{ $type }}">
    <h3 class="step__title">
        {{ $title  }}
    </h3>
    <p class="step__text">
        {{ $text }}
    </p>
    @if ($link)
    <a href="{{ $link['url'] }}" class="step__button button button--light" target="_blank">
        {{ $link['title'] }}
    </a> 
    @endif
</article>