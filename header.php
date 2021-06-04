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

<body>
<?php
	if ( function_exists( 'ot_get_option' ) ) {
	  $logo = ot_get_option( 'logo' );
	}
?>
	<!--Logo area-->
	<div class="logo">
		<a href="#">
			<img src='<?= $logo?>' alt="logo">
		</a>
	</div>
	
	<!--Navbar area-->
	<div class="navbar">
		<ul>
			<a href="index.php"><li>হোম</li></a>
			<a href="blog.html"><li>ব্লগ</li></a>
			<a href="post.html"><li>পোস্ট</li></a>
			<a href="contact.html"><li>যোগাযোগ</li></a>
		</ul>
	</div>