<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body {!! body_class() !!}>
    @php do_action('get_header') @endphp
    <div class="preloader"></div>
    @include('sections.cookies')
    @include('partials.header')
    @include('sections.popup')
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
