<section class="section section--color content">
  <div class="container container--small">
    <h2 class="title text--center primary content__title">
      {{ the_title() }}
    </h2>
    <div class="text content">
      @while(have_posts()) @php the_post() @endphp
          @php the_content() @endphp
      @endwhile
    </div>
  </div>
</section>