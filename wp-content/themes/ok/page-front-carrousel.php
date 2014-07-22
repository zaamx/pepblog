<?php
/*
 Template Name: Carousel Front
*/
?>
<!-- Slide de CTA's -->
<div id="cta-slide">
		<div id="carousel-pep-home" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<?php $numID = 0; ?>

				<?php $args = array(
				'post_type' => 'front', 
				'posts_per_page' => 5,
				'post_status' => 'publish',
				'seccionesfront' => 'carrousel-es'
				);
				$indCar = new WP_Query( $args ); ?>
				<?php if ($indCar -> have_posts()) : while ($indCar -> have_posts()) : $indCar -> the_post(); ?>

				<li data-target="#carousel-pep-home" data-slide-to="<?php echo $numID; ?>"></li>
				<?php  $numID++ ?>

				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; wp_reset_query();?>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<?php $args = array(
				'post_type' => 'front', 
				'posts_per_page' => 5,
				'post_status' => 'publish',
				'seccionesfront' => 'carrousel-es'
				);
				$contCar = new WP_Query( $args ); ?>
				<?php if ($contCar -> have_posts()) : while ($contCar -> have_posts()) : $contCar -> the_post(); ?>

					<div class="item" id="slide-<?php the_ID(); ?>">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail('full', array( 'class'	=> "img-slider"));
						} else { ?>
							<img src="http://placehold.it/1600x600" class="img-slider" alt="<?php the_title_attribute(); ?>" >
						<?php } ?>
						
						<div class="carousel-caption">
							<?php the_title(); ?>
							<?php the_excerpt(); ?>
						</div>
					</div>

				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; wp_reset_query();?>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-pep-home" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-pep-home" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				jQuery('.carousel-indicators').find('.item-carousel:first').addClass('active');
				jQuery('.carousel-inner').find('.item:first').addClass('active');
			});
		</script>
</div>
<!-- FIn Slide de CTA's -->