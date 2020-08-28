@php
    $class = 'steps';
@endphp

<section class="section section--dark {{ $class }}">
    <div class="container {{ $class }}__wrapper">
        @set($textSection, get_field('steps_text'))
        @include('elements.text-section', [$textSection])
        @hasfield('steps_list')
        <ul class="{{ $class }}__list">
            @fields('steps_list')
            <li class="{{ $class }}__item">
                @set($step, get_sub_field('content'))
                @include('elements.step', ['step'=>$step])
                @svg('arrow', 'steps__arrow')
            </li>
            @endfields
        </ul>
        @endfield
    </div>
</section>
