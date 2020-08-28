@php
    $title  = $quote['title'];
    $text  = $quote['text'];
    $direction  = $quote['direction'];
    $link  = $quote['link'];
@endphp

<article class="quote quote--{{ $direction }} quote--{{ $type }}">
    @svg('metro-quote', 'quote__icon')
    <div class="quote__text">
        {!! $text !!}
    </div>
    <h3 class="quote__title">
        {{ $title  }}
    </h3>
    @if ($link)
    <a href="{{ $link }}" class="quote__link" target="_blank">
        {{ $link }}
    </a> 
    @endif
</article>