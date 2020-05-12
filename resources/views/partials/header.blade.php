<header class="header" header>
  <div class="container">
    <div class="row header__row">
      <a class="header__brand--left col-auto" href="{{ home_url('/') }}">
        <img src="{{  get_option_field("logo")['url'] }}" alt="{{  get_option_field("logo")['alt'] }}">
      </a>
      <button class="header__hamburger hamburger" data-toggle-menu>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </button>
      <nav class="header__nav col-auto" data-nav>
        <div class="header__space"></div>
         @if (has_nav_menu('left'))
          {!! wp_nav_menu(
            [
              'theme_location' => 'left',
              'menu_class' => 'header__menu',
            ]) !!}
        @endif
        <a class="header__brand col-auto" href="{{ home_url('/') }}">
          <img src="{{ get_option_field("logo")['url'] }}" alt="{{  get_option_field("logo")['alt'] }}">
        </a>
         @if (has_nav_menu('right'))
          {!! wp_nav_menu(
            [
              'theme_location' => 'right',
              'menu_class' => 'header__menu',
            ]) !!}
        @endif
      </nav>
    </div>
  </div>
</header>