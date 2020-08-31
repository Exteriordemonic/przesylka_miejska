<section data-popup class="popup section--overlay">
    <div class="container popup__wrapper section--special">
        <button class="popup__close" data-toggle-popup data-one-url=""  data-two-url="">
            x
        </button>
        @php $textSection = option('popup_text'); @endphp
        @include('elements.text-section', [$textSection])
        @include('elements.button-list', ['popup'=>'true'])
    </div>
</section>