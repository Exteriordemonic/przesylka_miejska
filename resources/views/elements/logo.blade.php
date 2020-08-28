@if ($type == 'color')
    <a class="navbar-item" href="{{ home_url() }}">
        <img src="@option('logo_slogan', 'url')" alt="{{ get_bloginfo('name', 'display') }}" />
    </a>
@else 
    <a class="navbar-item" href="{{ home_url() }}">
        <img src="@option('logo', 'url')" alt="{{ get_bloginfo('name', 'display') }}" />
    </a>
@endif