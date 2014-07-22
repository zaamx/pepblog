<?php
/*
 Template Name: Bases Front
*/
 ?>
<!-- Bases -->
<div id="bases">
	<div class="container">
		<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="introSeccion text-center">
						<h2 class="bg-black txt-bg">
								Premios
						</h2>
						<span>
							Por el planeta otorgará una BOlsa de $300 mil dólares en premios, equipo fotográfico, reconocimientos y difusión a las mejores imágenes del concurso:
						</span>	
					</div>
				</div>
			</div>
	</div>

	<div class="panel-group" id="accordion">
		<?php $numID = 1; ?>

		<?php $args = array(
			'post_type' => 'front', 
			'posts_per_page' => 13,
			'post_status' => 'publish',
			'seccionesfront' => 'bases-es',
			'order' => 'ASC'

		);
		$basePost = new WP_Query( $args ); ?>
		<?php if ($basePost -> have_posts()) : while ($basePost -> have_posts()) : $basePost -> the_post(); ?>

		<div class="panel panel-<?php echo $numID; ?> panel-default">
			<div class="panel-heading">
				<div class="container">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#pan<?php echo $numID; ?>">
							<?php the_title(); ?>
						</a>
					</h4>
				</div>
			</div>
			<div id="pan<?php echo $numID; ?>" class="panel-collapse collapse">
				<div class="panel-body">
					<div class="container">
						<p>
							<?php the_content(); ?>
						</p>
					</div>
				</div>
			</div>
		</div>

		<?php  $numID++ ?>

		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; wp_reset_query();?>

	</div>
	<div class="bg-acordeon">

	</div>

</div>
<!-- Fin de Bases -->