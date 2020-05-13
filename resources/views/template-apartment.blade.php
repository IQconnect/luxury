{{--
  Template Name: Apartament
--}}

@extends('layouts.app')

  @section('content')

<div class="apartment">
  <section class="apartment__hero">
    <div class="apartment__content">
      <h2 class="title primary">
        {{ get_field('apartment-title') }}
      </h2>
      <div class="apartment__table">
        <div>
          <span class="small apartment__label">
            Typ
          </span>
          {{ get_field('apartment-type') }}
        </div>
        <div>
          <span class="small apartment__label">
            Lokalizacja
          </span>
          {{ get_field('apartment-location') }}
        </div>
        <div>
          <span class="small apartment__label">
            Powierzchnia
          </span>
          {{ get_field('apartment-size') }}
        </div>
      </div>
      <div class="text">
        {!! get_field('apartment-desc') !!}
      </div>
    </div>
    <div class="apartment__video">
      <video playsinline="" autoplay="" muted="" loop="" poster="">
        <source src="{{ get_field('apartment-video')['url'] }}" type="video/mp4">
      </video>
    </div>
  </section>
  <section class="container section--color">
    <div class="apartment__photos">
      <p class="apartment__header">
        {!! get_field('apartment-header') !!}
      </p>
      <div class="apartment__image">
        <a data-fancybox="gallery" href="{{ get_field('apartment-img')['url'] }}">
          <img src="{{ get_field('apartment-img')['url'] }}" alt="{{ get_field('apartment-img')['title'] }}">
        </a>
      </div>
      <div class="apartment__gallery">
        @foreach (get_field('apartment-gallery') as $item)
          <div class="apartment__gallery-item">
            <a data-fancybox="gallery" href="{{ $item['url'] }}">
              <img class="apartment__gallery-img" src="{{ $item['url'] }}">
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>
</div>
@endsection