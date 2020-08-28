@php
    $class = 'for';
@endphp

<section class="section {{ $class }}">
    <div class="container {{ $class }}__wrapper">
        @set($textSection, get_field('for_text'))
        @include('elements.text-section', [$textSection])
        @hasfield('for_list')
        <ul class="{{ $class }}__list">
            @fields('for_list')
            <li class="{{ $class }}__item">
                @set($step, get_sub_field('content'))
                @set($step['direction'], 'center')

                @set($icon, $step['icon']['ID'])
                @image($icon, 'full' ,['class' => 'for__icon'])
                @include('elements.step', ['step'=>$step])
            </li>
            @endfields
            <li class="{{ $class }}__item {{ $class }}__item--special">
                @set($step, get_field('for_offert'))
                @set($step['direction'], 'center')
                @set($step['type'], 'special')
                @include('elements.step', ['step'=>$step])
            </li>
        </ul>
        @endfield
    </div>
</section>