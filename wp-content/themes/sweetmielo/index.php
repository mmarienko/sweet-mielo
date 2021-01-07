<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?php the_field('favicon', 'options'); ?>" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap-grid.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Raleway:ital,wght@0,400;0,700;1,400&family=Signika:wght@700&display=swap" >
  <title>SweetMielo</title>
  
  <?php wp_head(); ?>
  
</head>

  <body>
  
	<?php get_header(); ?>
	
    <main class="main">
      <section class="slider">
        <div class="container-xl">
          <div class="slider__swiper swiper-container">
            <div class="slider__wrapper swiper-wrapper">
				<?php if( have_rows('slider__slide') ): ?>
					<?php while( have_rows('slider__slide') ): the_row(); 
						$title_top = get_sub_field('slider-slide__title-top');
						$title_bottom = get_sub_field('slider-slide__title-bottom');
						$descr = get_sub_field('slider-slide__descr');
						$btn = get_sub_field('slider-slide__btn');
						$img = get_sub_field('slider-slide__img');
					?>
					<div class="slider-slide swiper-slide">
						<div class="row no-gutters">
						  <div class="col-sm-6 align-self-end">
							<h2 class="slider-slide__title">
							  <span class="sub-color" data-aos="zoom-in"
								><?php echo $title_top; ?></span
							  >
							  <span data-aos="zoom-in" data-aos-delay="100">
								<?php echo $title_bottom; ?></span
							  >
							</h2>
							<div
							  class="slider-slide__descr"
							  data-aos="zoom-in"
							  data-aos-delay="200"
							>
							  <?php echo $descr; ?>
							</div>
							<a
							  href="#"
							  class="slider-slide__btn main-btn"
							  data-aos="fade-up"
							  data-aos-delay="300"
							  data-aos-duration="1000"
							  ><?php echo $btn; ?></a
							>
						  </div>
						  <div class="col-sm-6 align-self-end">
							<div class="slider-slide__img">
							  <img src="<?php echo $img; ?>" alt/>
							</div>
						  </div>
						</div>
					  </div>
					<?php endwhile; ?>
				<?php endif; ?>
            </div>
            <div class="slider__pagination swiper-pagination"></div>
          </div>
        </div>
      </section>
      <section class="services">
        <div class="container-xl">
          <div class="row justify-content-center">
            <div class="col-md-6 col-sm-8">
              <h5
                class="services__subtitle main-subtitle"
                data-aos="fade-in"
                data-aos-delay="100"
              >
                <?php the_field('services__subtitle'); ?>
              </h5>
              <h2 class="services__title main-title" data-aos="fade-in">
                <?php the_field('services__title'); ?>
              </h2>
              <div
                class="services__descr"
                data-aos="fade-in"
                data-aos-delay="100"
              >
                <?php the_field('services__descr'); ?>
              </div>
            </div>
          </div>
          <div class="row justify-content-md-between justify-content-center">
			  <?php

				$services_item_1 = get_field('services-item-1');	

				if( $services_item_1 ): ?>
					<div class="col-lg-3 col-sm-6 col-12 services-item">
					  <a href="#">
						<div class="services-item__bg-wrapper">
						  <div class="services-item__bg-inner">
							<span class="icon icon__honeycomb"></span>
						  </div>
						</div>
						<h4 class="services-item__title"><?php echo $services_item_1['services-item__title']; ?></h4>
						<div class="services-item__descr">
						  <?php echo $services_item_1['services-item__descr']; ?>
						</div>
					  </a>
					</div>
				<?php endif; ?>
            
              <?php

				$services_item_2 = get_field('services-item-2');	

				if( $services_item_2 ): ?>
					<div class="col-lg-3 col-sm-6 col-12 services-item">
					  <a href="#">
						<div class="services-item__bg-wrapper">
						  <div class="services-item__bg-inner">
							<span class="icon icon__bee"></span>
						  </div>
						</div>
						<h4 class="services-item__title"><?php echo $services_item_2['services-item__title']; ?></h4>
						<div class="services-item__descr">
						  <?php echo $services_item_2['services-item__descr']; ?>
						</div>
					  </a>
					</div>
				<?php endif; ?>
                <?php

				$services_item_3 = get_field('services-item-3');	

				if( $services_item_3 ): ?>
					<div class="col-lg-3 col-sm-6 col-12 services-item">
					  <a href="#">
						<div class="services-item__bg-wrapper">
						  <div class="services-item__bg-inner">
							<span class="icon icon__honey"></span>
						  </div>
						</div>
						<h4 class="services-item__title"><?php echo $services_item_3['services-item__title']; ?></h4>
						<div class="services-item__descr">
						  <?php echo $services_item_3['services-item__descr']; ?>
						</div>
					  </a>
					</div>
				<?php endif; ?>
			  
             <?php

				$services_item_4 = get_field('services-item-4');	

				if( $services_item_4 ): ?>
					<div class="col-lg-3 col-sm-6 col-12 services-item">
					  <a href="#">
						<div class="services-item__bg-wrapper">
						  <div class="services-item__bg-inner">
							<span class="icon icon__honey-2"></span>
						  </div>
						</div>
						<h4 class="services-item__title"><?php echo $services_item_4['services-item__title']; ?></h4>
						<div class="services-item__descr">
						  <?php echo $services_item_4['services-item__descr']; ?>
						</div>
					  </a>
					</div>
			<?php endif; ?>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-3">
              <a href="#" class="services__btn main-btn"><?php the_field('services__btn'); ?></a>
            </div>
          </div>
        </div>
      </section>
      <section
        class="clients"
        style="background-image: url('<?php the_field('clients__bg'); ?>')"
      >
        <div class="container-xl">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <h5
                class="clients__subtitle main-subtitle"
                data-aos="fade-in"
                data-aos-delay="100"
              >
                <?php the_field('clients__subtitle'); ?>
              </h5>
              <h2 class="clients__title main-title" data-aos="fade-in">
                <?php the_field('clients__title'); ?>
              </h2>
            </div>
          </div>
          <div class="clients__swiper swiper-container">
            <div class="clients__wrapper swiper-wrapper">
			  <?php if( have_rows('clients-slide') ): ?>
					<?php while( have_rows('clients-slide') ): the_row(); 
						$title = get_sub_field('clients-slide__title');
						$suptitle = get_sub_field('clients-slide__suptitle');
						$message = get_sub_field('clients-slide__message');
						$rate = get_sub_field('clients-slide__rate');
						$img = get_sub_field('clients-slide__img');
					?>
					<div class="clients-slide swiper-slide">
						<div class="row">
						  <div class="col-md-12">
							<div class="clients-slide__header">
							  <div class="clients-slide__img">
								<img src="<?php echo $img; ?>" alt />
							  </div>
							  <div class="clients-slide__author">
								<div class="clients-slide__rate">
									<?php 
											for ($i = 0; $i < $rate; $i++) {
											echo '<span class="icon icon__star"></span>';
										}
									?>
								</div>
								<div class="clients-slide__title minor-title">
								  <?php echo $title; ?>
								</div>
								<div class="clients-slide__suptitle minor-subtitle">
								  <?php echo $suptitle; ?>
								</div>
							  </div>
							</div>
							<div class="clients-slide__body">
							  <div class="clients-slide__message">
								<?php echo $message; ?>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					<?php endwhile; ?>
				<?php endif; ?>
            </div>
            <div class="clients__pagination swiper-pagination"></div>
          </div>
        </div>
      </section>
    </main>

	<?php get_footer(); ?>

  </body>
</html>
