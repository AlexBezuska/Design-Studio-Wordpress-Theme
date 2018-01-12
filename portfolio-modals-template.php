{{#each this}}

<div class="portfolio-modal modal fade" id="{{this.id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">

          <div class="col-sm-6">
            <div class="modal-body">
              <h2 class="text-uppercase">{{this.name}}</h2>
              <p>{{this.description}}</p>
            </div>
          </div>

          <div class="col-sm-6">
            <img class="img-fluid d-block mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/{{this.img}}"  alt="{{this.name}} {{this.subtitle}} by Daydream Farm Design Studio">
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

{{/each}}
