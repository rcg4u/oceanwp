<?php
/**
 * Search Form for The Medium Header Style
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Post type.
$post_type = get_theme_mod( 'ocean_menu_search_source', 'any' );

?>

<div id="medium-searchform" class="header-searchform-wrap clr">
	<form  id="medh-search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-searchform" aria-label="<?php esc_attr( oceanwp_theme_strings( 'owp-string-website-search-form' ) ); ?>">
		<label for="medh-input"><?php esc_html( oceanwp_theme_strings( 'owp-string-medium-header-search-text' ) ); ?></label>
		<input aria-labelledby="medh-search medh-input" id="medh-input" type="search" name="s" autocomplete="off" value="" />
		<button class="search-submit"><?php oceanwp_icon( 'search' ); ?><span class="screen-reader-text"><?php esc_html( oceanwp_theme_strings( 'owp-string-mobile-submit-search' ) ); ?></span></button>
		<div class="search-bg"></div>
		<?php if ( 'any' !== $post_type ) { ?>
			<input type="hidden" name="post_type" value="<?php echo esc_attr( $post_type ); ?>">
		<?php } ?>
		<?php do_action( 'wpml_add_language_form_field' ); ?>
	</form>
</div><!-- #medium-searchform -->
