<?php
get_header();
?>

<?php the_content(); ?>

<?php
echo esc_html( get_template_part( 'template-parts/pagination', 'infinite-scroll' ) );
?>

<?php
if (have_posts()) {
	echo("Hello, hello");
} else {
	the_content();
}
?>

<?php
get_footer();
