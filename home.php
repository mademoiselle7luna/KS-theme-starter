<?php
get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'thumbnail' ); ?>
		</a>

		<h1>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>

		<?php
		the_content();
		the_excerpt();
		?>

		<p>
			<?php the_date( 'Y-m-d h:i:sa' ); ?>
		</p>

		<?php
	endwhile;

	the_posts_pagination();

else :
	_e( 'Sorry, we have no posts. :(', 'dp' );
endif;

get_footer();
?>
