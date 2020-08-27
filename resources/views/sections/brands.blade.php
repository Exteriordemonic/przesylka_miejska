@php
    $class = 'brands';
@endphp

<section class="section {{ $class }}">
    <div class="container {{ $class }}__wrapper">
        @hasfield('brands')
        <ul class="{{ $class }}__list">
            @fields('brands')
            <li class="{{ $class }}__item">
                <a href="@sub('link')">
                    @set($image, get_sub_field('image')['ID'])
                    @image($image)
                </a>
            </li>
            @endfields
        </ul>
        @endfield
    </div>
</section>