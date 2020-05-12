<section class="section section--gradient">
  <div class="container box-img">
    <div class="box-img__img">
      <img class="box-img__photo" src="{{ $data['image']['url'] }}" alt="{{ $data['image']['alt'] }}">
      <div class="box-img__box">
        <div>
          @if($data['title'])
            <h2 class="title box-img__title">
              {{ $data['title'] }}
            </h2>
          @endif
          <div class="text">
            {!! $data['content'] !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>