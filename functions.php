<?php
require_once 'inc/classes/class-theme.php';
require_once 'inc/helpers/svg.php';
new Theme();
?>

<?php if (!function_exists( 'ksthemestarter_setup' )) : ?>
	<?php


	function ksthemestarter_setup()
	{
		register_main_menu(
			[
				'Home' => __( 'home', 'dp' ),
				'Blog' => __( 'blog', 'dp' ),
				'Blog' => __( 'about-us', 'dp' ),
			]
		);
	}

	?>
<?php endif; ?>


Ram pam pam
