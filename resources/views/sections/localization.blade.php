@php
    $class = 'localization';
@endphp

<section class="section section--special {{ $class }}" id="lokalizacja">
    <div class="container {{ $class }}__wrapper">
        @php $textSection = get_field('localization_text'); @endphp
        @include('elements.text-section', [$textSection])
        <form class="{{ $class }}__form form" action="" data-form>
            <select class="select" name="city" id="city" required>
                <option value="" disabled selected hidden>Wybierz miejscowość z listy</option>
                @hasfield('localization_cities')
                @fields('localization_cities')
                <option value="@sub('city')">
                    @sub('city')
                </option>
                @endfields
                @endfield
            </select>

            <button class="button button--light">
                Ruszajmy
            </button>
        </form>
    </div>
</section>