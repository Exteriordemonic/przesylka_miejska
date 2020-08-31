<nav class="menu">
    <ul class="menu__list">
        @if ($text == 'show')
        <li class="menu__item">
            <span class="menu__text">
                Nasze social media
            </span>
        </li>
        @endif
        <li class="menu__item">
            <a href="@option('facebook')">
                @svg('facebook')
            </a>
        </li>
        <li class="menu__item">
            <a href="@option('instagram')">
            @svg('instagram')
            </a>
        </li>
        <li class="menu__item menu__item--space">
            <button data-toggle-popup data-one-url="@option('myacc-troj')"  data-two-url="@option('myacc-byd')" class="button button--special button--icon">
                @svg('user') Moje konto
            </button>
        </li>
    </ul>
</nav>