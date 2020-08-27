@php
    $class = 'flex';
@endphp

<section class="section {{ $class }}">
    <div class="container {{ $class }}__wrapper">
        @set($textSection, get_field('flex_text'))
        @set($textSection['direction'], 'left')
        @set($textSection['button'], 'special')
        @include('elements.text-section', [$textSection])
    </div>
    <figure class="flex__image-wrapper">
        @set($image, get_field('flex_image')['ID'])
        @image($image, 'full', ['class'=>'flex__image'])
    </figure>
</section>