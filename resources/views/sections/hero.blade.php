@php
    $class = 'hero';
@endphp

<section class="section section--dark {{ $class }}">
    <figure class="section__bg">
        {!! image(get_field('hero_image')['id'], 'full', 'section__image') !!}
    </figure>
    <div class="container {{ $class }}__wrapper">
        <h1 class="{{ $class }}__title">
            @field('hero_title')
            @hasfield('hero_cities')
            <ul class="{{ $class }}__cities">
                @fields('hero_cities')
                <li class="{{ $class }}__city" data-city-swap>
                    @sub('city')
                </li>   
                @endfields
            </ul>
            @endfield
        </h1>
        @include('elements.button-list', ['buttons'=>get_field('hero_buttons')])
    </div>
</section>