<?php
get_header();
?>


<?php
$posts_args = [];
while ( have_posts() ) {
	if ( has_post_thumbnail() ) :
		{
			echo '<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">';
			the_post_thumbnail();
			echo '<h2>';
			the_title();
			echo '</h2>';
			echo '</p></a>';
			the_post();
			the_content();
			the_excerpt();
			the_time();
			echo '<p>';
			the_date();
			echo '</p>';
		}
	endif;

	$thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' )
		? get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' )
		: get_template_directory_uri() . '/assets/img/placeholder.jpg';

	array_push(
		$posts_args,
		[
			'id'        => get_the_ID(),
			'title'     => get_the_title(),
			'thumbnail' => $thumbnail_url,
			'excerpt'   => get_the_excerpt(),
			'permalink' => get_permalink(),
		]
	);


}
echo esc_html( get_template_part( 'template-parts/archive', 'content-rows', $posts_args ) );
echo esc_html( get_template_part( 'template-parts/pagination', 'infinite-scroll' ) );
?>

<?php
wp_reset_postdata();
?>
	<div>
		<p>
			<?php
			the_posts_pagination();
			?>
		</p>
	</div>
	<a href="<?php the_permalink(); ?>"><?php the_title( '<h2>', '</h2>' ); ?> </a>
<?php if ( has_post_thumbnail() ) : ?>
	<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail( 'medium' ); ?>
	</a>
<?php endif; ?>

<?
get_footer();
