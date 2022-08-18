<?php
get_header();
?>

	<h2>Posts</h2>
<?php
while ( have_posts() ) {
	the_post();
	the_title();
	the_content();
	the_footer();
}

get_template_part( 'template-parts/content', 'pagination' );
?>
<?php
get_footer();
