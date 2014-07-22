<?php
/*
 Template Name: Premios Front
*/
 ?>
 <!-- Premios  -->
<div id="premios">
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
		<div class="row">
			<div class="col-sm-3 col-xs-6">
				<div class="item-premio item-mundo text-center" data-toggle="modal" data-target="#mod-mundo">
					<div class="prem prem_mundo"></div>
					<h4>Mejor Fotografía <br>por el planeta</h4>
					<span>Premio Especial</span>

				</div>
				
			</div>
			<div class="col-sm-3 col-xs-6">
				<div class="item-premio item-mx text-center" data-toggle="modal" data-target="#mod-mx">
					<div class="prem prem-mx"></div>
					<h4>Mejor Fotografía <br>Mexicana</h4>
					<span>Premio Especial</span>
				</div>
				
			</div>
			<div class="clearfix visible-xs"></div>
			<div class="col-sm-3 col-xs-6">
				<div class="item-premio item-pub text-center" data-toggle="modal" data-target="#mod-pub">
					<div class="prem prem_pub"></div>
					<h4>Mejor Fotografía <br>premio del público</h4>
					<span>Premio Especial</span>
				</div>
				
			</div>
			<div class="col-sm-3 col-xs-6">
				<div class="item-premio item-kids text-center" data-toggle="modal" data-target="#mod-kids">
					<div class="prem prem_kids"></div>
					<h4>Mejor Fotografía <br>jóvenes y niños</h4>
					<span>jóvenes y niños</span>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 col-xs-6">
				<div class="item-premio item-cat text-center" data-toggle="modal" data-target="#mod-cat">
					<div class="prem prem_cat"></div>
					<h4>mejor fotografía <br>por categoría</h4>
					<span>Premio categoría</span>
				</div>
				
			</div>
			<div class="col-sm-3 col-xs-6">
				<div class="item-premio item-fram text-center" data-toggle="modal" data-target="#mod-fram">
					<div class="prem prem_fram"></div>
					<h4>six frames<br>for change</h4>
					<span>Premio categoría</span>
				</div>
				
			</div>
			<div class="clearfix visible-xs"></div>
			<div class="col-sm-3 col-xs-6">
				<div class="item-premio item-biom text-center" data-toggle="modal" data-target="#mod-biom">
					<div class="prem prem_biom"></div>
					<h4>preyecto de foto <br>bioma mexicano</h4>
					<span>Premio categoría</span>
				</div>
				
			</div>
			<div class="col-sm-3 col-xs-6">
				<div class="item-premio item-corto text-center" data-toggle="modal" data-target="#mod-corto">
					<div class="prem prem_corto"></div>
					<h4>video corto <br>de conservación</h4>
					<span>Premio categoría</span>
				</div>
				
			</div>
		</div>
		<div id="modales-all">

			<?php $args = array(
			'post_type' => 'front', 
			'posts_per_page' => 8,
			'post_status' => 'publish',
			'seccionesfront' => 'premios-es'
			);
			$premPost = new WP_Query( $args ); ?>
			<?php if ($premPost -> have_posts()) : while ($premPost -> have_posts()) : $premPost -> the_post(); ?>

			<?php 
				$sbPrem = get_post_meta(get_the_ID(), 'sufijo_premio', true );
			?>

			<!-- Modal -->
			<div class="modal fade" id="mod-<?php echo $sbPrem; ?>" tabindex="-1" role="dialog" aria-labelledby="premio-<?php echo $sbPrem; ?>" aria-hidden="true">
				<div class="modal-dialog modal-lg ">
					<div class="modal-content">
						<div class="modal-header">
							<!-- <div class="prem prem_mundo"></div> -->
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								<i class="fa fa-times-circle"></i>
							</button>
							<h4 class="modal-title" id="premio-<?php echo $sbPrem; ?>">
								<?php the_title(); ?>
							</h4>
							<?php 
								$sbSubtitulo = get_post_meta(get_the_ID(), 'subtitulo_lb', true );
								if( ! empty( $sbSubtitulo ) ) { ?>
								  <p><?php echo $sbSubtitulo; ?></p> 	
							<?php }  ?>
						</div>
						<div class="modal-body">
							<p>
								<?php the_content(); ?>
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>
			

			<?php endwhile; ?>
			<?php else : ?>
			<?php endif; wp_reset_query();?>
			
		</div>
	</div>

</div>
<!-- FIn de Premios  -->