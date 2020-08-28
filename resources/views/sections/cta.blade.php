@php
    $class = 'cta';
@endphp

<section class="section {{ $class }}">
    @set($image, get_field('cta_image')['ID'])
    @image($image, 'full', ['class'=>'cta__image'])
    <div class="container {{ $class }}__wrapper">
        <h2 class="{{ $class }}__text">
            @field('cta_text')
        </h2>

        @hasfield('cta_link')
        <a href="@field('cta_link', 'url')" class="button button--special">
            @field('cta_link', 'title')
        </a>
        @endfield
    </div>
</section>