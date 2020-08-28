@php
    $title  = $step['title'];
    $text  = $step['text'];
@endphp

<article class="step">
    <h3 class="step__title">
        {{ $title  }}
    </h3>
    <p class="step__text">
        {{ $text }}
    </p>
</article>