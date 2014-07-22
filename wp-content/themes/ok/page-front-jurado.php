<?php
/*
 Template Name: Jurado  Front
*/
 ?>
<!-- Jurado -->
<div id="jurado">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">	
				<div class="introSeccion text-center">
					<h2 class="bg-black txt-bg">
							Jurado
					</h2>
					<span>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, consequuntur doloribus vitae recusandae fugit labore autem impedit dolor obcaecati minus.
					</span>	
				</div>
			</div>
		</div>
		<div class="row">
			<?php $args = array(
				'post_type' => 'front', 
				'posts_per_page' => 6,
				'post_status' => 'publish',
				'seccionesfront' => 'jurado-es'
			);
			$juradoPost = new WP_Query( $args ); ?>
			<?php if ($juradoPost -> have_posts()) : ?>
			<?php $contador = 0;	?>
			<?php while ($juradoPost -> have_posts()) : $juradoPost -> the_post(); ?>

			<?php  $contador++; ?>


			<?php // Template de loop para archivos ?>

			<div class="col-sm-2 col-xs-6 cont-persona">
				<article class="item-persona">
					<?php // Imagen de jurado o comite  ?>
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail('pep-box', array( 'class' => "img-responsive img-1"));
					} else { ?>
						<img src="http://placehold.it/320x320" class="img-responsive img-1" alt="<?php the_title_attribute(); ?>" >
					<?php } ?>
					<?php // Imagen demo de jurado o comite   ?>
					<?php $image = wp_get_attachment_image_src(get_field('imagen_secundaria'), 'pep-box'); ?>
					<img  class="img-responsive img-2" src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute(); ?>" />
					<header>
						<h4>
							<?php the_title(); ?>
							<br>
							<small>
								<?php the_content();?>
							</small>
						</h4>
					</header>
				</article>
			</div>

			<?php // Fin de Template de loop para archivos ?>


			<?php if($contador == 2) { ?>

			<div class="clearfix visible-xs"></div>

			<?php
				$contador = 0;
				}
			?>

			<?php endwhile; ?>


			<?php else : ?>
			<?php endif; wp_reset_query();?>

		</div>
		
	</div>
</div>
<!-- Fin de jurado -->