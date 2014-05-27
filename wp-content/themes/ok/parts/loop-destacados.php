<article id="post-<?php the_ID(); ?>" <?php post_class('destacado'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<a class="img-head" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('full', array( 'class'	=> "img-responsive"));
		} else { ?>
		<img class="img-responsive" src="http://placehold.it/850x450" alt="<?php the_title(); ?>" >
		<?php } ?>
	</a>
	<header class="article-header">
		<h3 class="entry-title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>
		<?php echo texto_intro(100); ?>

	</header> <?php // end article header ?>
</article> <?php // end article ?>