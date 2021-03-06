@php
    $class = 'extras';
@endphp

<section class="section {{ $class }}" id="poznaj-korzysci">
    <div class="container {{ $class }}__wrapper">
        @set($textSection, get_field('extras_text'))
        @include('elements.text-section', [$textSection])
        @hasfield('extras_list')
        <ul class="{{ $class }}__list">
            @fields('extras_list')
            <li class="{{ $class }}__item">
                @set($step, get_sub_field('content'))
                @set($step['direction'], 'center')

                @set($icon, $step['icon']['ID'])
                @image($icon, 'full' ,['class' => 'extras__icon'])
                @include('elements.step', ['step'=>$step])
            </li>
            @endfields
        </ul>
        @endfield
    </div>
    <figure class="extras__image-wrapper">
        @image('extras_image','full', ['class'=>'extras__image'])
    </figure>
</section>