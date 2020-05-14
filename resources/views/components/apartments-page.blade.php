<section class="section section--color apartments-page">
  <div class="container">
    <h2 class="title text--center primary">
      {{ $data['title'] }}
    </h2>
    <p class="headline">
      {!! $data['desc'] !!}
    </p>
    <div class="apartments-page__boxes">
      @foreach($data['apartments'] as $item)
        <a href="{{ $item['link']['url'] }}" class="apartments-page__box">
          <div class="apartments-page__image">
            <img style="transition: .4s;" class="apartments-page__img" src="{{ $item['img']['url'] }}">
          </div>
          <p class="apartments-page__content">
            {{ $item['title'] }}
          </p>
        </a>
      @endforeach
    </div>
  </div>
</section>