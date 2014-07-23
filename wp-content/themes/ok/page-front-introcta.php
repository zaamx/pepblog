<?php
/*
 Template Name: Intro CTA Front
*/
?>
<!-- CTA Intro  -->
<div id="intro">
	<div class="boxInt">
			<img src="library/images/boxes-sup.png" alt="">
	</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div id="cta-home" class="text-center">
						<?php $args = array(
						'post_type' => 'front',
						'posts_per_page' => 1,
						'post_status' => 'publish',
						'seccionesfront' => 'cta-intro-es'
						);
						$ctaHome = new WP_Query( $args ); ?>
						<?php if ($ctaHome -> have_posts()) : while ($ctaHome -> have_posts()) : $ctaHome -> the_post(); ?>

							<h4>
								<?php the_content(); ?>
							</h4>

						<?php endwhile; ?>
						<?php else : ?>
						<?php endif; wp_reset_query();?>
						<a href="" class="btn btn-success">El festival   <i class="fa fa-plus"></i> </a>
					</div>
				</div>
			</div>
		</div>
		<div class="boxInt">
				<img src="library/images/boxes-inf.png" alt="">
		</div>
</div>
<!-- Fin CTA Intro  -->
