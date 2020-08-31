@extends('layouts.app')

@section('content')
@php
    $class = 'hero';
@endphp
<section class="section section--dark {{ $class }}">
  <figure class="section__bg">
      {!! image(option('404_image')['id'], 'full', 'section__image') !!}
  </figure>
  <div class="container {{ $class }}__wrapper {{ $class }}__wrapper--center">
      <h1 class="{{ $class }}__title">@option('404_title')</h1>
      @include('elements.button-list', ['error'=>'true'])
  </div>
</section>
@endsection
