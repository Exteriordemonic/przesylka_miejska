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
        @if ($contact)
            <button data-toggle-popup data-one-url="@option('contact-troj')"  data-two-url="@option('contact-byd')" class="step__button button button--light">
                {{ $link['title'] }}
            </button> 
        @else
            <a href="{{ $link['url'] }}" class="step__button button button--light">
                {{ $link['title'] }}
            </a> 
        @endif
    @endif
</article>