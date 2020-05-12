@if(get_field('show_map'))
  <section>
    <div class="contact">
      <div class="container contact__box">
        <div class="contact__content">
          <h2 class="title">
            Kontakt
          </h2>
          <div class="text contact__text">
            <p>
              {{  get_option_field("name")  }}
              <br>
              {!! get_option_field("address") !!}
            </p>
            <p>
              <a href="tel:{{ str_replace(' ','', get_option_field('phone')) }}" class="link">
                {{ get_option_field("phone") }}
              </a>
              <br>
              <a href="mailto:{{ str_replace(' ','', get_option_field('email')) }}" class="link">
                {{ get_option_field("email") }}
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="contact__map">
        {!! do_shortcode('[google_map_easy id="1"]') !!}
      </div>
    </div>
    <div class="contact__mobile">
      <div class="contact__content">
        <h2 class="title">
          Kontakt
        </h2>
        <div class="text contact__text">
          <p>
            {{  get_option_field("name")  }}
            <br>
            {!! get_option_field("address") !!}
          </p>
          <p>
            <a href="tel:{{ str_replace(' ','', get_option_field('phone')) }}" class="link">
              {{ get_option_field("phone") }}
            </a>
            <br>
            <a href="mailto:{{ str_replace(' ','', get_option_field('email')) }}" class="link">
              {{ get_option_field("email") }}
            </a>
          </p>
        </div>
      </div>
    </div>
  </section>
@endif
@include('components.form')
<footer class="footer">
  <div class="footer__logo">
    <a href="{{ home_url('/') }}">
      <img src="{{  get_option_field("logo")['url'] }}" alt="{{  get_option_field("logo")['alt'] }}">
    </a>
  </div>
  <div class="footer__content">
    <div class="footer__contact">
      <div class="footer__row">
        <div>
          <h3 class="title title--small footer__title">
            Kontakt
          </h3>
          <p class="text text--2 footer__block">
            <a class="footer__link" href="tel:{{ str_replace(' ','', get_option_field('phone')) }}">
              {{ get_option_field("phone") }}
            </a>
            <br>
            <a class="footer__link" href="mailto:{{ str_replace(' ','', get_option_field('email')) }}">
              {{ get_option_field("email") }}
            </a>
          </p>
          <p class="text text--2 footer__block">
            {!! get_option_field("address") !!}
          </p>
        </div>
        <ul class="text text--3 footer__nav">
          <li>
            <a class="footer__link" href="#">
              Apartamenty
            </a>
          </li>
          <li>
            <a class="footer__link" href="#">
              Lokalizacja
            </a>
          </li>
          <li>
            <a class="footer__link" href="#">
              O nas
            </a>
          </li>
          <li>
            <a class="footer__link" href="#">
              Kontakt
            </a>
          </li>
        </ul>
      </div>
      <div class="footer__row footer__row--bottom">
        <div class="footer__copyright text text--white">
          {{ get_option_field("copyright") }}
        </div>
        <div class="footer__iqlogo">
          <a href="http://iqconnect.pl">
            <img src="{{ get_option_field('iqlogo')['url'] }}" alt="{{ get_option_field('iqlogo')['alt'] }}">
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>