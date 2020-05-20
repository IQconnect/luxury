<div class="block-info block-info--center">
  <h2>
    <span class="title">
      {{ $title }}
    </span>
  </h2>
  <p class="text text--3 block-info__desc">
    Potrzebujesz więcej informacji lub masz jakieś pytania?
    <br>
    Wypełnij formularz lub zadzwoń pod numer: <a href="tel:{{ str_replace(' ','', get_option_field('phone')) }}">{{ get_option_field('phone') }}</a>
  </p>
</div>
