<article id="post-<?php the_ID(); ?>" <?php post_class('entrada'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('full', array( 'class'	=> "img-responsive"));
		} else { ?>
		<img class="img-responsive" src="http://placehold.it/1140x450" alt="<?php the_title(); ?>" >
		<?php } ?>


	<header class="article-header">
		<h1 class="entry-title single-title" itemprop="headline"> <?php the_title(); ?></h1>
		<p class="byline vcard">
			<?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
		</p>
	</header> <?php // end article header ?>

	<section class="entry-content" itemprop="articleBody">
		<?php
			// the content (pretty self explanatory huh)
		the_content();
		?>
	</section> <?php // end article section ?>

	<footer class="article-footer">
		<?php printf( __( 'Filed under: %1$s', 'bonestheme' ), get_the_category_list(', ') ); ?>

		<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
	</footer> <?php // end article footer ?>

	<?php comments_template(); ?>

</article> <?php // end article ?>