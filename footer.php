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
	  $address_line_1 = ot_get_option( 'address_line_1' );
	  $address_line_2 = ot_get_option( 'address_line_2' );
	}
?>
<div class="footer">
		<div class="container">
			<div class="f1">
				<a href="#">
					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					 
					if ( has_custom_logo() ) {
						echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
					} else {
						echo '<h1>' . get_bloginfo('name') . '</h1>';
					}
					?>
				</a>
				
				<h3><?= $footer_tagline ?></h3>
				<p><?= $tagline_description ?></p>
			</div>
			<div class="f2">
				<h1><a href="tell:<?= $phone ?>"><?= $phone ?> </a></h1>
				<p><a href="mailto:<?= $email ?>"><?= $email ?></a></p>
				<p><?= $address_line_1 ?><br><?= $address_line_2 ?></p>
			</div>
		</div>
	</div>
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
</body>     
</html>
