@php
    $title  = $step['title'];
    $text  = $step['text'];
    $direction  = $step['direction'];
@endphp

<article class="step step--{{ $direction }}">
    <h3 class="step__title">
        {{ $title  }}
    </h3>
    <p class="step__text">
        {{ $text }}
    </p>
</article>