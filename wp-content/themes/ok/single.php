<?php get_header(); ?>

			<div id="content" class="container">

				<div id="inner-content" class="row">

						<div id="main" class="col-md-12" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php// get_template_part( 'parts/loop', 'standard' ); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('entrada'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<div class="row">
									<div class="col-sm-12">
										<header class="article-header">
											<h1 class="entry-title single-title" itemprop="headline"> <?php the_title(); ?></h1>
											<p class="byline vcard borders-byt">

												<?php get_template_part( 'parts/temp', 'social' ); ?>

												<?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
											</p>
										</header> <?php // end article header ?>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12">
										<div class="color-bar"></div>
										<?php if ( has_post_thumbnail() ) {
											the_post_thumbnail('full', array( 'class'	=> "img-responsive"));
										} else { ?>
											<img class="img-responsive" src="http://placehold.it/1140x450" alt="<?php the_title(); ?>" >
										<?php } ?>
										<div class="color-bar"></div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-9">
										<section class="entry-content" itemprop="articleBody">
											<?php
												// the content (pretty self explanatory huh)
											the_content();
											?>
										</section> <?php // end article section ?>

										<footer class="article-footer borders-byt">
											<?php get_template_part( 'parts/temp', 'social' ); ?>
											<?php printf( __( 'Filed under: %1$s', 'bonestheme' ), get_the_category_list(', ') ); ?>

											<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
										</footer> <?php // end article footer ?>

										<?php comments_template(); ?>

									</div>
									<div class="col-sm-3">
										<?php get_sidebar('singles'); ?>
									</div>
								</div>
							</article> <?php // end article ?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>
					</div>					
				</div>
			</div>

<?php get_footer(); ?>
