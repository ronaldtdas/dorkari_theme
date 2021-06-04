<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<?php
	if ( function_exists( 'ot_get_option' ) ) {
	  $logo = ot_get_option( 'logo' );
	  $pc = ot_get_option( 'primary_color' );
	  $sc = ot_get_option( 'secondary_color' );
	  $bg = ot_get_option( 'background_color' );
	}
?>

<body style='background-color: <?= $bg?>;'>

	<!--Logo area-->
	<div class="logo">
		<a href="#">
			<img src='<?= $logo?>' alt="logo">
		</a>
	</div>
	
	<!--Menu area-->
<?php
wp_nav_menu( array( 
    'menu'                 => '',
	'container'            => 'div',
	'container_class'      => 'navbar',
	'container_id'         => '',
	'container_aria_label' => '',
	'menu_class'           => '',
	'menu_id'              => '',
	'echo'                 => true,
	'fallback_cb'          => '',
	'before'               => '',
	'after'                => '',
	'link_before'          => '',
	'link_after'           => '',
	'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'item_spacing'         => 'preserve',
	'depth'                => 0,
	'walker'               => '',
	'theme_location'       => 'my-custom-menu' ) );
?>	
<!--Navbar area
	<div class="navbar">
		<ul>
			<li><a href="index.html">হোম</a></li>
			<li><a href="index.html">ব্লগ</a></li>
			<li><a href="index.html">পোস্ট</a></li>
			<li><a href="index.html">যোগাযোগ</a></li>
		</ul>
	</div>
-->