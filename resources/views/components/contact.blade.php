<section class="section section--color">
  <div class="container">
    <h2 class="title text--center primary">
      {{ $data['title'] }}
    </h2>
    <p class="headline contact__desc">
      {!! $data['desc'] !!}
    </p>
    <div class="contact">
      <div class="contact__content">
        <h2 class="title title--small contact__title">
          Dane kontaktowe
        </h2>
        <div class="contact__data">
          <p class="text text--2 footer__block">
            <span>
              Telefon:
            </span>
            <a class="link" href="tel:{{ str_replace(' ','', get_option_field('phone')) }}">
              {{ get_option_field("phone") }}
            </a>
            <br>
            <span>
              e-mail:
            </span>
            <a class="link" href="mailto:{{ str_replace(' ','', get_option_field('email')) }}">
              {{ get_option_field("email") }}
            </a>
          </p>
          <p class="text text--2 footer__block">
            {!! get_option_field("address") !!}
          </p>
        </div>
      </div>
      <div class="contact__form">
        <h2 class="title title--small contact__title">
          Formularz
        </h2>
        @include('components.form', ['contact' => true])
      </div>
    </div>
  </div>
</section>