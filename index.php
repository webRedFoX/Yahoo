<?php get_header(); ?>

<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

          <!-- SLIDER owl-carousel
          <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item"><img src="img/jquery-logo.png" class="img-responsive" alt="The Last of us"></div>
            <div class="item"><img src="img/100.jpg"  class="img-responsive" alt="GTA V"></div>
            <div class="item"><img src="img/universa.jpg" class="img-responsive" alt="Mirror Edge"></div>
        </div>  -->

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Обгортка для слайдів -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php bloginfo("template_url"); ?>/img/jquery-logo.png" height="720" width="1280" alt="...">
              <div class="carousel-caption">
                jQuery is awesome
              </div>
            </div>
            <div class="item">
              <img src="<?php bloginfo("template_url"); ?>/img/universa.jpg" height="720" width="1280" alt="...">
              <div class="carousel-caption">
                universal pictures
              </div>
            </div>
            <div class="item">
              <img src="<?php bloginfo("template_url"); ?>/img/100.jpg" height="720" width="1280" alt="...">
              <div class="carousel-caption">
                one hundred
              </div>
            </div>
          </div>

          <!-- Управління -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Попередній</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Наступний</span>
          </a>
        </div>

      </div>
    </div>
  </div>


  <figure>
    <div class="container">
      <div class="row">
      <?php if (have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
        <div class="col-sm-6 col-md-4">       	
          <div class="thumbnail">
            <img src="<?php bloginfo("template_url"); ?>/img/circus.png" alt="...">
            <div class="caption">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php the_excerpt(); ?></p>
              <p><a href="<?php the_permalink(); ?>" class="btn btn-success">Читать полностью</a></p>
            </div>
          </div>	
        </div>
      	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
      	<?php else : ?>
      	<?php endif; ?>
      </div>
    </div>
  </figure>
</section>


<?php get_footer(); ?>	