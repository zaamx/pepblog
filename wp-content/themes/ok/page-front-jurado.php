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
      <?php $numID = 1; ?>

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
      				<a href="#"  data-toggle="modal" data-target="#per-<?php echo $numID; ?>">
      					<?php the_title(); ?> <br>
      				<small>
      					<?php the_content();?> <i class="fa fa-plus-circle"></i>
      				</small>
      				</a>
      			</h4>
      		</header>

      		<?php // ============================================================= Modal de Jurado - Comite =================================== ?>
      		<div class="modal fade" id="per-<?php echo $numID; ?>" tabindex="-1" role="dialog" aria-labelledby="etiqueta-<?php echo $numID; ?>" aria-hidden="true">
      			<div class="modal-dialog modal-lg ">
      				<div class="modal-content">
      					<div class="modal-header">
      						<!-- <div class="prem prem_mundo"></div> -->
      						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
      						<h4 class="modal-title" id="etiqueta-<?php echo $numID; ?>">
      							<?php the_title(); ?>
      						</h4>
      						<div class="modal-share">
      							<p><?php the_content();?></p>
      						</div>
      					</div>
      					<div class="modal-body">
      						<div class="modal-gal">
      							<!--
                    <div class="row">
      								<div class="col-sm-7">
      									<img src="http://placehold.it/600x300" class="img-responsive" alt="">
      								</div>
      								<div class="col-sm-5">

      								</div>
      							</div>
                    -->
      							<div class="row">
      								<div class="col-md-8" id="slider">
                        <?php // ============================================================= Carrousel de jurado - Comite  =================================== ?>
      									<div id="crrousel" class="carousel slide" data-ride="carousel">
      										<!-- Indicators -->
      										<ol class="carousel-indicators">
      											<li data-target="#crrousel" data-slide-to="0" class="active"></li>
      											<li data-target="#crrousel" data-slide-to="1"></li>
      											<li data-target="#crrousel" data-slide-to="2"></li>
      											<li data-target="#crrousel" data-slide-to="3"></li>
      											<li data-target="#crrousel" data-slide-to="4"></li>
      											<li data-target="#crrousel" data-slide-to="5"></li>
      										</ol>
      										<!-- Wrapper for slides -->
      										<div class="carousel-inner">
      											<div class="item active" data-slide-number="0">
      												<img src="http://lorempixel.com/800/400">
      												<div class="carousel-caption">
      													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, aspernatur!
      												</div>
      											</div>
      											<div class="item" data-slide-number="1">
      												<img src="http://lorempixel.com/800/400/technics/1">
      												<div class="carousel-caption">
      													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, laudantium.
      												</div>
      											</div>
      											<div class="item" data-slide-number="2">
      												<img src="http://lorempixel.com/800/400/business/1">
      												<div class="carousel-caption">
      													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, est!
      												</div>
      											</div>
      											<div class="item" data-slide-number="3">
      												<img src="http://lorempixel.com/800/400/city">
      												<div class="carousel-caption">
      													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quam.
      												</div>
      											</div>
      											<div class="item" data-slide-number="4">
      												<img src="http://lorempixel.com/800/400/city/1">
      												<div class="carousel-caption">
      													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, doloremque.
      												</div>
      											</div>
      											<div class="item" data-slide-number="5">
      												<img src="http://lorempixel.com/800/400">
      												<div class="carousel-caption">
      													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, facilis.
      												</div>
      											</div>
      										</div>
      										<!-- Controls -->
      										<a class="left carousel-control" href="#crrousel" role="button" data-slide="prev">
      											<span class="glyphicon glyphicon-chevron-left"></span>
      										</a>
      										<a class="right carousel-control" href="#crrousel" role="button" data-slide="next">
      											<span class="glyphicon glyphicon-chevron-right"></span>
      										</a>
      									</div>
      								</div>
                      <?php // ============================================================= Miniaturas de Carrousel de jurado - Comite  =================================== ?>
      								<div class="col-md-4 hidden-xs hidden-sm" id="slider-thumbs">
      									<div class="row thumbnails">
      										<div class="col-sm-6 col-xs-2">
      											<a  id="carousel-selector-0">
      												<img src="http://placehold.it/120x90&amp;text=one" class="img-responsive img-thumbnail">
      								  			</a>
      										</div>
      										<div class="col-sm-6 col-xs-2">
      											<a id="carousel-selector-1">
      												<img src="http://placehold.it/120x90&amp;text=two" class="img-responsive img-thumbnail">
      								  			</a>
      										</div>
      										<div class="col-sm-6 col-xs-2">
      											<a  id="carousel-selector-2">
      												<img src="http://placehold.it/120x90&amp;text=three" class="img-responsive img-thumbnail">
      								  			</a>
      										</div>
      										<div class="col-sm-6 col-xs-2">
      											<a id="carousel-selector-3">
      												<img src="http://placehold.it/120x90&amp;text=four" class="img-responsive img-thumbnail">
      								  			</a>
      										</div>
      										<div class="col-sm-6 col-xs-2">
      											<a  id="carousel-selector-4">
      												<img src="http://placehold.it/120x90&amp;text=five" class="img-responsive img-thumbnail">
      								  			</a>
      										</div>
      										<div class="col-sm-6 col-xs-2">
      											<a id="carousel-selector-5">
      												<img src="http://placehold.it/120x90&amp;text=six" class="img-responsive img-thumbnail">
      								  			</a>
      										</div>
      									</div>
      								</div>
      							</div>
      						</div>
                  <?php // ============================================================= Bios de jurado - Comite  =================================== ?>
      						<div class="modal-bio">
      							<div class="row">
      								<div class="col-sm-7">
      									<h5>
      										Biografía
      									</h5>
      									<p>
      										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error dolorum tenetur sapiente dignissimos perferendis delectus possimus repellat nobis laborum culpa quam aspernatur, ipsum minus quaerat modi velit maxime, architecto distinctio eveniet amet optio, sed voluptas repellendus quis. Enim saepe dicta esse, tenetur, soluta nesciunt voluptatem reprehenderit perspiciatis unde accusantium quisquam.
      									</p>
      								</div>
      								<div class="col-sm-5">
      									<h5>Detalle del contacto</h5>
      								</div>
      							</div>
      						</div>
      					</div>
      					<div class="modal-footer">
      						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

      					</div>
      				</div>
      			</div>
      		</div>
          <?php // ============================================================= Fin de Modal de Jurado - Comite =================================== ?>
      	</article>
      </div>

      <?php  $numID++ ?>

			<?php // Fin de Template de loop para archivos ?>


      <?php // ============================================================= Funcion para meter divs de salto cada 2 entradas =================================== ?>

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
