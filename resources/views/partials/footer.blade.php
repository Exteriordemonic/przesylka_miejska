<footer class="footer">
    <div class="container">
        <div class="footer__contact">
            @option('contact')
        </div>
    </div>
    <div class="container footer__wrapper">
        @include('elements.logo', ['type'=>'color'])
        @include('elements.menu', ['text'=>'show'])
    </div>
</footer>