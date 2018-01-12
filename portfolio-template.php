<!-- PORTFOLIO.PHP -->
<section  id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Portfolio</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">

      {{#each this}}
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#{{this.id}}">
          <div class="portfolio-hover {{this.hoverColor}}"></div>
          <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/{{this.img}}" alt="{{this.name}} {{this.subtitle}} by Daydream Farm Design Studio">
        </a>
        <div class="portfolio-caption">
          <h4>{{this.name}}</h4>
        </div>
      </div>
      {{/each}}

    </div>
  </div>
</section>
