<article id="post-<?php the_ID(); ?>" <?php post_class('archivos'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">

		<a class="img-head" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('pep-thumb', array( 'class'	=> "img-responsive"));
			} else { ?>
			<img class="img-responsive" src="http://placehold.it/300x200" alt="<?php the_title(); ?>" >
			<?php } ?>
		</a>


		<h3 class="entry-title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>

		<p class="byline vcard sr-only">
			<?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
		</p>

	</header> <?php // end article header ?>

	<section class="entry-content" itemprop="articleBody">
		<?php echo texto_intro(70); ?>
	</section> <?php // end article section ?>

	<footer class="article-footer">
		<a class="social-footer" href="#">
			<i class="fa fa-thumbs-up"></i>
		</a>
		<a class="social-footer" href="#">
			<i class="fa fa-twitter"></i> 
		</a>
		 <div class="sr-only">
			<?php printf( __( 'Filed under: %1$s', 'bonestheme' ), get_the_category_list(', ') ); ?>
			<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?> 	
		 </div>
	</footer> <?php // end article footer ?>

	<?php comments_template(); ?>

</article> <?php // end article ?>