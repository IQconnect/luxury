<section class="section">
  <div class="container">
      @include('blocks.block-header', ['title' => $data['title'], 'desc' => $data['desc']])
    <div class="apartments">
      <div class="apartments__container">
        <div class="apartments__slider">
          @foreach ($data['apartmentsArray'] as $item)
            <a href="{{ $item['link']['url'] }}" class="apartments__cell">
              <img src="{{ $item['image']['url'] }}" alt="{{ $item['image']['alt'] }}">
              <div class="title apartments__title">
                {{ $item['title'] }}
              </div>
            </a>
          @endforeach
        </div>
      </div>
      <div class="apartments__nav">
        <a href="#" class="apartments__button apartments__button--disabled prev">
          <i class="fas fa-chevron-left"></i>
        </a>
        <a href="#" class="apartments__button next">
          <i class="fas fa-chevron-right"></i>
        </a>
        <div class="apartments__hr">
          <div class="apartments__progress progress"></div>
        </div>
      </div>
    </div>
  </div>
</section>