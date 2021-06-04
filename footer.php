<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<?php
	if ( function_exists( 'ot_get_option' ) ) {
	  $logo = ot_get_option( 'logo' );
	  $footer_tagline = ot_get_option( 'footer_tagline' );
	  $tagline_description = ot_get_option( 'tagline_description' );
	  $phone = ot_get_option( 'phone' );
	  $email = ot_get_option( 'email' );
	  $address_line1 = ot_get_option( 'address_line1' );
	  $address_line2 = ot_get_option( 'address_line2' );
	}
?>
<div class="footer">
		<div class="container">
			<div class="f1">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo">
				</a>
				
				<h3><?= $footer_tagline ?></h3>
				<p><?= $tagline_description ?></p>
			</div>
			<div class="f2">
				<h1><a href="tell:<?= $phone ?>"><?= $phone ?> </a></h1>
				<p><a href="mailto:<?= $email ?>"><?= $email ?></a></p>
				<p><?= $address_line1 ?><br><?= $address_line2 ?></p>
			</div>
		</div>
	</div>
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
</body>     
</html>
