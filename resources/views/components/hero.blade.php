<section class="hero">
    <div class="container">
      <div class="hero__content">
        <h1 class="m-0">
          <span class="text text--3 hero__prefix">
            {!! $data['prefix'] !!}
          </span>
          <span class="title hero__header text--white">
            {{ $data['header'] }}
          </span>
        </h1>
        <p class="text hero__text">
          {!! $data['desc'] !!}
        </p>
        <a href="{{ $data['link']['url'] }}" class="button">
          więcej
        </a>
      </div>
    </div>
    {{-- <img class="hero__bg" src="{{ $data['bg']['url'] }}" alt="{{ $data['bg']['alt'] }}"> --}}
    <video class="hero__bg" playsinline="" autoplay="" muted="" loop="" poster="">
      <source src="{{ $data['bg']['url'] }}" type="video/mp4">
    </video>
</section>