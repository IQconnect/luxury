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
            Cennik
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
      <a href="{{ get_field('apartment-video') }}" data-fancybox="video">
        <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 108 108"><g transform="translate(-1182 -1302)"><g transform="translate(1182 1302)" fill="none" stroke="#f6f6f6" stroke-width="2"><circle cx="54" cy="54" r="54" stroke="none"/><circle cx="54" cy="54" r="53" fill="none"/></g><g transform="translate(1244 1348) rotate(90)" fill="#f6f6f6"><path d="M 14.13429927825928 12.5 L 0.8657020330429077 12.5 L 7.500000476837158 1.00054931640625 L 14.13429927825928 12.5 Z" stroke="none"/><path d="M 7.500000476837158 2.001115798950195 L 1.731413841247559 12 L 13.26858711242676 12 L 7.500000476837158 2.001115798950195 M 7.500000476837158 0 L 15 13 L 9.5367431640625e-07 13 L 7.500000476837158 0 Z" stroke="none" fill="#f6f6f6"/></g></g></svg>
        <img class="apartment__cover" src="{{ get_field('apartment-img')['url'] }}" alt="{{ get_field('apartment-img')['title'] }}">
      </a>
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
@include('components.form')
@endsection