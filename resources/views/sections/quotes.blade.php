@php
    $class = 'quotes';
@endphp

<section class="section section--gray {{ $class }}">
    <div class="container {{ $class }}__wrapper">
        @set($textSection, get_field('quotes_text'))
        @set($textSection['direction'], 'left')
        @include('elements.text-section', [$textSection])

        @hasfield('quotes_list')
        <ul class="{{ $class }}__list" data-testimonials>
            @fields('quotes_list')
            <li class="{{ $class }}__item" data-testimonials-item>
                @set($quote, get_sub_field('content'))
                @include('elements.quote', ['quote'=>$quote])
            </li>
            @endfields
        </ul>
        @endfield
    </div>
</section>