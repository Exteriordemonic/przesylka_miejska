@php
    $class = 'extras';
@endphp

<section class="section {{ $class }}">
    <div class="container {{ $class }}__wrapper">
        <h1 class="title">
            {{ $class }}
        </h1>
    </div>
    <figure class="extras__image-wrapper">
        @image('extras_image','full', ['class'=>'extras__image'])
    </figure>
</section>