<?php
/*
 Template Name: Video Full Width Front
*/
?>
<!-- Vista de inicio full width -->
		<div class="inicio-block">
				<div class="inicio-head text-center">
						<div id="logo" class="text-center">
								<a id="logo-link" href="">
									<img src="library/images/logo_trans.png" alt="">
								</a>
						</div>
						<div class="cta-inicio text-center">
								<?php $args = array(
								'post_type' => 'front',
								'posts_per_page' => 1,
								'post_status' => 'publish',
								'seccionesfront' => 'video-inicio-es'
								);
								$videoHome = new WP_Query( $args ); ?>
								<?php if ($videoHome -> have_posts()) : while ($videoHome -> have_posts()) : $videoHome -> the_post(); ?>

									<h2 class="bg-white txt-bg">
										<?php the_title(); ?>
									</h2>
									<span>
										<?php the_content(); ?>
									</span>

								<?php endwhile; ?>
								<?php else : ?>
								<?php endif; wp_reset_query();?>
						</div>
				</div>
				<div class="inicio-footer">
						<div class="player text-center">
								<span>REPRODUCIR VIDEO <i class="fa fa-play-circle-o"></i></span>
						</div>

						<div class="mas text-center">
								<a href="#nav">
										<i class="fa fa-angle-double-down"></i>
								</a>
						</div>
				</div>
		</div>
<!-- Fin Vista de inicio full width -->
