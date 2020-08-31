@if ($_COOKIE["cookie-accept"] != 'true' )
    
<section class="cookies section--light" data-cookies>
    <div class="container cookies__wrapper">
        <p class="cookies__text">
            @option('cookies')
        </p>
        @include('elements.button-list', ['cookies'=>'true'])
    </div>
</section>

@endif