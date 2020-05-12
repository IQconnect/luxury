<section class="section section--color">
  <div class="container">
    @include('blocks.section-info', ['title' => 'Formularz'])
    <form class="form">
      <div class="form__row">
        <div class="form__field">
          <label class="form__label">
            Imię i nazwisko:
          </label>
          <input class="form__input" type="text">
        </div>
        <div class="form__field">
          <label class="form__label">
            Adres email:
          </label>
          <input class="form__input" type="text">
        </div>
      </div>
      <div class="form__field">
        <label class="form__label">
          Wiadomość:
        </label>
        <textarea class="form__input form__textarea" rows="1"></textarea>
      </div>
      <label class="form__field form__field--checkbox">
        <span class="small form__checkbox-desc">
          Zapoznałem się z Polityką prywatności serwisu domena.pl oraz wyrażam zgodę na przetwarzanie udostępnionych przeze mnie danych osobowych na zasadach opisanych w Polityce prywatności dostępnej w Serwisie. Oświadczam, że są mi znane cele przetwarzania danych oraz moje uprawnienia.
        </span>
        <input class="form__checkbox" type="checkbox" checked="checked">
        <span class="form__check"></span>
      </label>
      <div class="form__button">
        <a href="{{ $data['link']['url'] }}" class="button">
          Wyślij
        </a>
      </div>
    </form>
  </div>
</section>