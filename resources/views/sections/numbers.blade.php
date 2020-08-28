@php
    $class = 'numbers';
@endphp

<section class="section {{ $class }}">
    <div class="container {{ $class }}__wrapper">
        @hasfield('numbers_list')
        <ul class="{{ $class }}__list">
            @fields('numbers_list')
            <li class="{{ $class }}__item">
                @set($number, get_sub_field('content'))
                <span class="{{ $class }}__number">
                    + <span class="{{ $class }}__counter" data-counter={{ $number['number'] }}>{{ $number['number'] }}</span>
                </span>
                <div class="{{ $class }}__text">
                    {!! $number['text'] !!}
                </div>
            </li>
            @endfields
        </ul>
        @endfield
    </div>
</section>