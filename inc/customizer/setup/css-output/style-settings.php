
<?php
/**
 * OceanWP Customizer CSS Output
 *
 * @package OceanWP WordPress theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * The OceanWP Customizer class
 */
class OceanWP_Style_Settings_CSS {

    /**
     * fonts
     *
     * @var $fonts
     * @access private
     * @since 3.5.1
     */
    private $fonts = array();

    /**
     * Constructor
     */
    public function __construct() {
        add_filter('ocean_head_css', array($this, 'generate_css'));
    }

    public function generate_Css($output) {
        $main_container_width          = get_theme_mod( 'ocean_main_container_width', 1200 );
        $main_container_width_unit     = get_theme_mod( 'ocean_main_container_width_unit', 'px' );
        $separate_content_padding      = get_theme_mod( 'ocean_separate_content_padding', 30 );
        $separate_content_padding_unit = get_theme_mod( 'ocean_separate_content_padding_unit', 'px' );
		$separate_widgets_padding      = get_theme_mod( 'ocean_separate_widgets_padding', 30 );
        $separate_widgets_padding_unit = get_theme_mod( 'ocean_separate_widgets_padding_unit', 'px' );

        $background_image              = get_theme_mod( 'ocean_background_image' );
        $background_image_position     = get_theme_mod( 'ocean_background_image_position' );
        $background_image_attachment   = get_theme_mod( 'ocean_background_image_attachment' );
        $background_image_repeat       = get_theme_mod( 'ocean_background_image_repeat' );
        $background_image_size         = get_theme_mod( 'ocean_background_image_size' );

        $theme_button_top_padding      = get_theme_mod( 'ocean_theme_button_top_padding', 14 );
        $theme_button_right_padding    = get_theme_mod( 'ocean_theme_button_right_padding', 20 );
        $theme_button_bottom_padding   = get_theme_mod( 'ocean_theme_button_bottom_padding', 14 );
        $theme_button_left_padding     = get_theme_mod( 'ocean_theme_button_left_padding', 20 );
        $tablet_tb_top_padding         = get_theme_mod( 'ocean_theme_button_tablet_top_padding' );
        $tablet_tb_right_padding       = get_theme_mod( 'ocean_theme_button_tablet_right_padding' );
        $tablet_tb_bottom_padding      = get_theme_mod( 'ocean_theme_button_tablet_bottom_padding' );
        $tablet_tb_left_padding        = get_theme_mod( 'ocean_theme_button_tablet_left_padding' );
        $mobile_tb_top_padding         = get_theme_mod( 'ocean_theme_button_mobile_top_padding' );
        $mobile_tb_right_padding       = get_theme_mod( 'ocean_theme_button_mobile_right_padding' );
        $mobile_tb_bottom_padding      = get_theme_mod( 'ocean_theme_button_mobile_bottom_padding' );
        $mobile_tb_left_padding        = get_theme_mod( 'ocean_theme_button_mobile_left_padding' );

        $theme_button_top_radius      = get_theme_mod( 'ocean_theme_button_top_radius', 0 );
        $theme_button_right_radius    = get_theme_mod( 'ocean_theme_button_right_radius', 0 );
        $theme_button_bottom_radius   = get_theme_mod( 'ocean_theme_button_bottom_radius', 0 );
        $theme_button_left_radius     = get_theme_mod( 'ocean_theme_button_left_radius', 0 );
        $tablet_tb_top_radius         = get_theme_mod( 'ocean_theme_button_tablet_top_radius' );
        $tablet_tb_right_radius       = get_theme_mod( 'ocean_theme_button_tablet_right_radius' );
        $tablet_tb_bottom_radius      = get_theme_mod( 'ocean_theme_button_tablet_bottom_radius' );
        $tablet_tb_left_radius        = get_theme_mod( 'ocean_theme_button_tablet_left_radius' );
        $mobile_tb_top_radius         = get_theme_mod( 'ocean_theme_button_mobile_top_radius' );
        $mobile_tb_right_radius       = get_theme_mod( 'ocean_theme_button_mobile_right_radius' );
        $mobile_tb_bottom_radius      = get_theme_mod( 'ocean_theme_button_mobile_bottom_radius' );
        $mobile_tb_left_radius        = get_theme_mod( 'ocean_theme_button_mobile_left_radius' );
        $theme_button_border_type     = get_theme_mod( 'ocean_theme_button_border_type', 'solid' );
        $theme_button_border_width        = get_theme_mod( 'ocean_theme_button_border_width', 1 );
        $theme_button_border_width_tablet = get_theme_mod( 'ocean_theme_button_border_width_tablet' );
        $theme_button_border_width_mobile = get_theme_mod( 'ocean_theme_button_border_width_mobile' );
        $theme_button_border_width_unit   = get_theme_mod( 'ocean_theme_button_border_width_unit', 'px' );

        $input_top_padding             = get_theme_mod( 'ocean_input_top_padding', 6 );
        $input_right_padding           = get_theme_mod( 'ocean_input_right_padding', 12 );
        $input_bottom_padding          = get_theme_mod( 'ocean_input_bottom_padding', 6 );
        $input_left_padding            = get_theme_mod( 'ocean_input_left_padding', 12 );
        $tablet_input_top_padding      = get_theme_mod( 'ocean_input_tablet_top_padding' );
        $tablet_input_right_padding    = get_theme_mod( 'ocean_input_tablet_right_padding' );
        $tablet_input_bottom_padding   = get_theme_mod( 'ocean_input_tablet_bottom_padding' );
        $tablet_input_left_padding     = get_theme_mod( 'ocean_input_tablet_left_padding' );
        $mobile_input_top_padding      = get_theme_mod( 'ocean_input_mobile_top_padding' );
        $mobile_input_right_padding    = get_theme_mod( 'ocean_input_mobile_right_padding' );
        $mobile_input_bottom_padding   = get_theme_mod( 'ocean_input_mobile_bottom_padding' );
        $mobile_input_left_padding     = get_theme_mod( 'ocean_input_mobile_left_padding' );

        $input_top_radius               = get_theme_mod( 'ocean_input_border_top_radius', 3 );
        $input_right_radius             = get_theme_mod( 'ocean_input_border_right_radius', 3 );
        $input_bottom_radius            = get_theme_mod( 'ocean_input_border_bottom_radius', 3 );
        $input_left_radius              = get_theme_mod( 'ocean_input_border_left_radius', 3 );
        $tablet_input_top_radius        = get_theme_mod( 'ocean_input_border_tablet_top_radius' );
        $tablet_input_right_radius      = get_theme_mod( 'ocean_input_border_tablet_right_radius' );
        $tablet_input_bottom_radius     = get_theme_mod( 'ocean_input_border_tablet_bottom_radius' );
        $tablet_input_left_radius       = get_theme_mod( 'ocean_input_border_tablet_left_radius' );
        $mobile_input_top_radius        = get_theme_mod( 'ocean_input_border_mobile_top_radius' );
        $mobile_input_right_radius      = get_theme_mod( 'ocean_input_border_mobile_right_radius' );
        $mobile_input_bottom_radius     = get_theme_mod( 'ocean_input_border_mobile_bottom_radius' );
        $mobile_input_left_radius       = get_theme_mod( 'ocean_input_border_mobile_left_radius' );
        $input_border_type             = get_theme_mod( 'ocean_site_forms_border_type', 'solid' );
        $input_top_border_width        = get_theme_mod( 'ocean_input_top_border_width', 1 );
        $input_right_border_width      = get_theme_mod( 'ocean_input_right_border_width', 1 );
        $input_bottom_border_width     = get_theme_mod( 'ocean_input_bottom_border_width', 1 );
        $input_left_border_width       = get_theme_mod( 'ocean_input_left_border_width', 1 );
        $tablet_input_top_bw           = get_theme_mod( 'ocean_input_tablet_top_border_width' );
        $tablet_input_right_bw         = get_theme_mod( 'ocean_input_tablet_right_border_width' );
        $tablet_input_bottom_bw        = get_theme_mod( 'ocean_input_tablet_bottom_border_width' );
        $tablet_input_left_bw          = get_theme_mod( 'ocean_input_tablet_left_border_width' );
        $mobile_input_top_bw           = get_theme_mod( 'ocean_input_mobile_top_border_width' );
        $mobile_input_right_bw         = get_theme_mod( 'ocean_input_mobile_right_border_width' );
        $mobile_input_bottom_bw        = get_theme_mod( 'ocean_input_mobile_bottom_border_width' );
        $mobile_input_left_bw          = get_theme_mod( 'ocean_input_mobile_left_border_width' );

        $css = '';

        // Texts.
        if ( ! empty( $main_container_width ) && 1200 != $main_container_width ) {
            $css .= '.container{width:' . $main_container_width . $main_container_width_unit . ';}';
        }

        if ( ! empty( $separate_content_padding ) && 30 != $separate_content_padding ) {
            $css .= '.separate-layout .content-area, .separate-layout.content-left-sidebar .content-area, .content-both-sidebars.scs-style .content-area, .separate-layout.content-both-sidebars.ssc-style .content-area, body.separate-blog.separate-layout #blog-entries > *, body.separate-blog.separate-layout .oceanwp-pagination, body.separate-blog.separate-layout .blog-entry.grid-entry .blog-entry-inner{padding:' . $separate_content_padding . $separate_content_padding_unit . ';}.separate-layout.content-full-width .content-area{padding:' . $separate_content_padding . $separate_content_padding_unit . ' !important;}';
        }

        // Separate widgets padding.
        if ( ! empty( $separate_widgets_padding ) && 30 != $separate_widgets_padding ) {
            $css .= '.separate-layout .widget-area .sidebar-box{padding:' . $separate_widgets_padding . $separate_widgets_padding_unit . ';}';
        }

        // Get site background image.
        if ( ! empty( $background_image ) ) {
            $css .= 'body{background-image:url(' . wp_get_attachment_image_url( $background_image ) . ');}';
        }

        // Get site background position.
        if ( ! empty( $background_image_position ) && 'initial' != $background_image_position ) {
            $css .= 'body{background-position:' . $background_image_position . ';}';
        }

        // Get site background attachment.
        if ( ! empty( $background_image_attachment ) && 'initial' != $background_image_attachment ) {
            $css .= 'body{background-attachment:' . $background_image_attachment . ';}';
        }

        // Get site background repeat.
        if ( ! empty( $background_image_repeat ) && 'initial' != $background_image_repeat ) {
            $css .= 'body{background-repeat:' . $background_image_repeat . ';}';
        }

        // Get site background size.
        if ( ! empty( $background_image_size ) && 'initial' != $background_image_size ) {
            $css .= 'body{background-size:' . $background_image_size . ';}';
        }

        // Theme buttons padding.
		if ( isset( $theme_button_top_padding ) && '14' != $theme_button_top_padding && '' != $theme_button_top_padding
            || isset( $theme_button_right_padding ) && '20' != $theme_button_right_padding && '' != $theme_button_right_padding
            || isset( $theme_button_bottom_padding ) && '14' != $theme_button_bottom_padding && '' != $theme_button_bottom_padding
            || isset( $theme_button_left_padding ) && '20' != $theme_button_left_padding && '' != $theme_button_left_padding ) {
            $css .= '.theme-button,input[type="submit"],button[type="submit"],button, body div.wpforms-container-full .wpforms-form input[type=submit], body div.wpforms-container-full .wpforms-form button[type=submit], body div.wpforms-container-full .wpforms-form .wpforms-page-button{padding:' . oceanwp_spacing_css( $theme_button_top_padding, $theme_button_right_padding, $theme_button_bottom_padding, $theme_button_left_padding ) . '}';
        }

        // Tablet theme buttons padding.
        if ( isset( $tablet_tb_top_padding ) && '' != $tablet_tb_top_padding
            || isset( $tablet_tb_right_padding ) && '' != $tablet_tb_right_padding
            || isset( $tablet_tb_bottom_padding ) && '' != $tablet_tb_bottom_padding
            || isset( $tablet_tb_left_padding ) && '' != $tablet_tb_left_padding ) {
            $css .= '@media (max-width: 768px){.theme-button,input[type="submit"],button[type="submit"],button, body div.wpforms-container-full .wpforms-form input[type=submit], body div.wpforms-container-full .wpforms-form button[type=submit], body div.wpforms-container-full .wpforms-form .wpforms-page-button{padding:' . oceanwp_spacing_css( $tablet_tb_top_padding, $tablet_tb_right_padding, $tablet_tb_bottom_padding, $tablet_tb_left_padding ) . '}}';
        }

        // Mobile theme buttons padding.
        if ( isset( $mobile_tb_top_padding ) && '' != $mobile_tb_top_padding
            || isset( $mobile_tb_right_padding ) && '' != $mobile_tb_right_padding
            || isset( $mobile_tb_bottom_padding ) && '' != $mobile_tb_bottom_padding
            || isset( $mobile_tb_left_padding ) && '' != $mobile_tb_left_padding ) {
            $css .= '@media (max-width: 480px){.theme-button,input[type="submit"],button[type="submit"],button, body div.wpforms-container-full .wpforms-form input[type=submit], body div.wpforms-container-full .wpforms-form button[type=submit], body div.wpforms-container-full .wpforms-form .wpforms-page-button{padding:' . oceanwp_spacing_css( $mobile_tb_top_padding, $mobile_tb_right_padding, $mobile_tb_bottom_padding, $mobile_tb_left_padding ) . '}}';
        }

        // Theme buttons radius.
        if ( isset( $theme_button_top_radius ) && 0 != $theme_button_top_radius && '' != $theme_button_top_radius
            || isset( $theme_button_right_radius ) && 0 != $theme_button_right_radius && '' != $theme_button_right_radius
            || isset( $theme_button_bottom_radius ) && 0 != $theme_button_bottom_radius && '' != $theme_button_bottom_radius
            || isset( $theme_button_left_radius ) && 0 != $theme_button_left_radius && '' != $theme_button_left_radius ) {
            $css .= '.theme-button,input[type="submit"],button[type="submit"],button,.button, body div.wpforms-container-full .wpforms-form input[type=submit], body div.wpforms-container-full .wpforms-form button[type=submit], body div.wpforms-container-full .wpforms-form .wpforms-page-button{border-radius:' . oceanwp_spacing_css( $theme_button_top_radius, $theme_button_right_radius, $theme_button_bottom_radius, $theme_button_left_radius ) . '}';
        }

        // Tablet theme buttons radius.
        if ( isset( $tablet_tb_top_radius ) && '' != $tablet_tb_top_radius
            || isset( $tablet_tb_right_radius ) && '' != $tablet_tb_right_radius
            || isset( $tablet_tb_bottom_radius ) && '' != $tablet_tb_bottom_radius
            || isset( $tablet_tb_left_radius ) && '' != $tablet_tb_left_radius ) {
            $css .= '@media (max-width: 768px){.theme-button,input[type="submit"],button[type="submit"],button,.button, body div.wpforms-container-full .wpforms-form input[type=submit], body div.wpforms-container-full .wpforms-form button[type=submit], body div.wpforms-container-full .wpforms-form .wpforms-page-button{border-radius:' . oceanwp_spacing_css( $tablet_tb_top_radius, $tablet_tb_right_radius, $tablet_tb_bottom_radius, $tablet_tb_left_radius ) . '}}';
        }

        // Mobile theme buttons radius.
        if ( isset( $mobile_tb_top_radius ) && '' != $mobile_tb_top_radius
            || isset( $mobile_tb_right_radius ) && '' != $mobile_tb_right_radius
            || isset( $mobile_tb_bottom_radius ) && '' != $mobile_tb_bottom_radius
            || isset( $mobile_tb_left_radius ) && '' != $mobile_tb_left_radius ) {
            $css .= '@media (max-width: 480px){.theme-button,input[type="submit"],button[type="submit"],button,.button, body div.wpforms-container-full .wpforms-form input[type=submit], body div.wpforms-container-full .wpforms-form button[type=submit], body div.wpforms-container-full .wpforms-form .wpforms-page-button{border-radius:' . oceanwp_spacing_css( $mobile_tb_top_radius, $mobile_tb_right_radius, $mobile_tb_bottom_radius, $mobile_tb_left_radius ) . '}}';
        }

        // Theme buttons border type.
        if ( $theme_button_border_type ) {
            $css .= '.theme-button,input[type="submit"],button[type="submit"],button,.button, body div.wpforms-container-full .wpforms-form input[type=submit], body div.wpforms-container-full .wpforms-form button[type=submit], body div.wpforms-container-full .wpforms-form .wpforms-page-button{border-style:' . $theme_button_border_type . ';}';
        }

        // Theme buttons border width.
        if ( $theme_button_border_width ) {
            $css .= '.theme-button,input[type="submit"],button[type="submit"],button,.button, body div.wpforms-container-full .wpforms-form input[type=submit], body div.wpforms-container-full .wpforms-form button[type=submit], body div.wpforms-container-full .wpforms-form .wpforms-page-button{border-width:' . $theme_button_border_width . $theme_button_border_width_unit . ';}';
        }
        if ( $theme_button_border_width_tablet ) {
            $css .= '@media (max-width: 768px){.theme-button,input[type="submit"],button[type="submit"],button,.button, body div.wpforms-container-full .wpforms-form input[type=submit], body div.wpforms-container-full .wpforms-form button[type=submit], body div.wpforms-container-full .wpforms-form .wpforms-page-button{border-width:' . $theme_button_border_width_tablet . $theme_button_border_width_unit . ';}}';
        }
        if ( $theme_button_border_width_mobile ) {
            $css .= '@media (max-width: 768px){.theme-button,input[type="submit"],button[type="submit"],button,.button, body div.wpforms-container-full .wpforms-form input[type=submit], body div.wpforms-container-full .wpforms-form button[type=submit], body div.wpforms-container-full .wpforms-form .wpforms-page-button{border-width:' . $theme_button_border_width_mobile . $theme_button_border_width_unit . ';}}';
        }

        // Input padding.
			if ( isset( $input_top_padding ) && 6 != $input_top_padding && '' != $input_top_padding
            || isset( $input_right_padding ) && 12 != $input_right_padding && '' != $input_right_padding
            || isset( $input_bottom_padding ) && 6 != $input_bottom_padding && '' != $input_bottom_padding
            || isset( $input_left_padding ) && 12 != $input_left_padding && '' != $input_left_padding ) {
            $css .= 'form input[type="text"], form input[type="password"], form input[type="email"], form input[type="url"], form input[type="date"], form input[type="month"], form input[type="time"], form input[type="datetime"], form input[type="datetime-local"], form input[type="week"], form input[type="number"], form input[type="search"], form input[type="tel"], form input[type="color"], form select, form textarea{padding:' . oceanwp_spacing_css( $input_top_padding, $input_right_padding, $input_bottom_padding, $input_left_padding ) . '}';
            $css .= 'body div.wpforms-container-full .wpforms-form input[type=date], body div.wpforms-container-full .wpforms-form input[type=datetime], body div.wpforms-container-full .wpforms-form input[type=datetime-local], body div.wpforms-container-full .wpforms-form input[type=email], body div.wpforms-container-full .wpforms-form input[type=month], body div.wpforms-container-full .wpforms-form input[type=number], body div.wpforms-container-full .wpforms-form input[type=password], body div.wpforms-container-full .wpforms-form input[type=range], body div.wpforms-container-full .wpforms-form input[type=search], body div.wpforms-container-full .wpforms-form input[type=tel], body div.wpforms-container-full .wpforms-form input[type=text], body div.wpforms-container-full .wpforms-form input[type=time], body div.wpforms-container-full .wpforms-form input[type=url], body div.wpforms-container-full .wpforms-form input[type=week], body div.wpforms-container-full .wpforms-form select, body div.wpforms-container-full .wpforms-form textarea{padding:' . oceanwp_spacing_css( $input_top_padding, $input_right_padding, $input_bottom_padding, $input_left_padding ) . '; height: auto;}';
        }

        // Tablet input padding.
        if ( isset( $tablet_input_top_padding ) && '' != $tablet_input_top_padding
            || isset( $tablet_input_right_padding ) && '' != $tablet_input_right_padding
            || isset( $tablet_input_bottom_padding ) && '' != $tablet_input_bottom_padding
            || isset( $tablet_input_left_padding ) && '' != $tablet_input_left_padding ) {
            $css .= '@media (max-width: 768px){form input[type="text"], form input[type="password"], form input[type="email"], form input[type="url"], form input[type="date"], form input[type="month"], form input[type="time"], form input[type="datetime"], form input[type="datetime-local"], form input[type="week"], form input[type="number"], form input[type="search"], form input[type="tel"], form input[type="color"], form select, form textarea{padding:' . oceanwp_spacing_css( $tablet_input_top_padding, $tablet_input_right_padding, $tablet_input_bottom_padding, $tablet_input_left_padding ) . '}}';
            $css .= '@media (max-width: 768px){body div.wpforms-container-full .wpforms-form input[type=date], body div.wpforms-container-full .wpforms-form input[type=datetime], body div.wpforms-container-full .wpforms-form input[type=datetime-local], body div.wpforms-container-full .wpforms-form input[type=email], body div.wpforms-container-full .wpforms-form input[type=month], body div.wpforms-container-full .wpforms-form input[type=number], body div.wpforms-container-full .wpforms-form input[type=password], body div.wpforms-container-full .wpforms-form input[type=range], body div.wpforms-container-full .wpforms-form input[type=search], body div.wpforms-container-full .wpforms-form input[type=tel], body div.wpforms-container-full .wpforms-form input[type=text], body div.wpforms-container-full .wpforms-form input[type=time], body div.wpforms-container-full .wpforms-form input[type=url], body div.wpforms-container-full .wpforms-form input[type=week], body div.wpforms-container-full .wpforms-form select, body div.wpforms-container-full .wpforms-form textarea{padding:' . oceanwp_spacing_css( $tablet_input_top_padding, $tablet_input_right_padding, $tablet_input_bottom_padding, $tablet_input_left_padding ) . '}}';
        }

        // Mobile input padding.
        if ( isset( $mobile_input_top_padding ) && '' != $mobile_input_top_padding
            || isset( $mobile_input_right_padding ) && '' != $mobile_input_right_padding
            || isset( $mobile_input_bottom_padding ) && '' != $mobile_input_bottom_padding
            || isset( $mobile_input_left_padding ) && '' != $mobile_input_left_padding ) {
            $css .= '@media (max-width: 480px){form input[type="text"], form input[type="password"], form input[type="email"], form input[type="url"], form input[type="date"], form input[type="month"], form input[type="time"], form input[type="datetime"], form input[type="datetime-local"], form input[type="week"], form input[type="number"], form input[type="search"], form input[type="tel"], form input[type="color"], form select, form textarea{padding:' . oceanwp_spacing_css( $mobile_input_top_padding, $mobile_input_right_padding, $mobile_input_bottom_padding, $mobile_input_left_padding ) . '}}';
            $css .= '@media (max-width: 480px){body div.wpforms-container-full .wpforms-form input[type=date], body div.wpforms-container-full .wpforms-form input[type=datetime], body div.wpforms-container-full .wpforms-form input[type=datetime-local], body div.wpforms-container-full .wpforms-form input[type=email], body div.wpforms-container-full .wpforms-form input[type=month], body div.wpforms-container-full .wpforms-form input[type=number], body div.wpforms-container-full .wpforms-form input[type=password], body div.wpforms-container-full .wpforms-form input[type=range], body div.wpforms-container-full .wpforms-form input[type=search], body div.wpforms-container-full .wpforms-form input[type=tel], body div.wpforms-container-full .wpforms-form input[type=text], body div.wpforms-container-full .wpforms-form input[type=time], body div.wpforms-container-full .wpforms-form input[type=url], body div.wpforms-container-full .wpforms-form input[type=week], body div.wpforms-container-full .wpforms-form select, body div.wpforms-container-full .wpforms-form textarea{padding:' . oceanwp_spacing_css( $mobile_input_top_padding, $mobile_input_right_padding, $mobile_input_bottom_padding, $mobile_input_left_padding ) . '}}';
        }

        // Input border width border width.
			if ( isset( $input_top_border_width ) && 1 != $input_top_border_width && '' != $input_top_border_width
            || isset( $input_right_border_width ) && 1 != $input_right_border_width && '' != $input_right_border_width
            || isset( $input_bottom_border_width ) && 1 != $input_bottom_border_width && '' != $input_bottom_border_width
            || isset( $input_left_border_width ) && 1 != $input_left_border_width && '' != $input_left_border_width ) {
            $css .= 'form input[type="text"], form input[type="password"], form input[type="email"], form input[type="url"], form input[type="date"], form input[type="month"], form input[type="time"], form input[type="datetime"], form input[type="datetime-local"], form input[type="week"], form input[type="number"], form input[type="search"], form input[type="tel"], form input[type="color"], form select, form textarea{border-width:' . oceanwp_spacing_css( $input_top_border_width, $input_right_border_width, $input_bottom_border_width, $input_left_border_width ) . '}';
            $css .= 'body div.wpforms-container-full .wpforms-form input[type=date], body div.wpforms-container-full .wpforms-form input[type=datetime], body div.wpforms-container-full .wpforms-form input[type=datetime-local], body div.wpforms-container-full .wpforms-form input[type=email], body div.wpforms-container-full .wpforms-form input[type=month], body div.wpforms-container-full .wpforms-form input[type=number], body div.wpforms-container-full .wpforms-form input[type=password], body div.wpforms-container-full .wpforms-form input[type=range], body div.wpforms-container-full .wpforms-form input[type=search], body div.wpforms-container-full .wpforms-form input[type=tel], body div.wpforms-container-full .wpforms-form input[type=text], body div.wpforms-container-full .wpforms-form input[type=time], body div.wpforms-container-full .wpforms-form input[type=url], body div.wpforms-container-full .wpforms-form input[type=week], body div.wpforms-container-full .wpforms-form select, body div.wpforms-container-full .wpforms-form textarea{border-width:' . oceanwp_spacing_css( $input_top_border_width, $input_right_border_width, $input_bottom_border_width, $input_left_border_width ) . '}';
        }

        // Tablet input border width border width.
        if ( isset( $tablet_input_top_bw ) && '' != $tablet_input_top_bw
            || isset( $tablet_input_right_bw ) && '' != $tablet_input_right_bw
            || isset( $tablet_input_bottom_bw ) && '' != $tablet_input_bottom_bw
            || isset( $tablet_input_left_bw ) && '' != $tablet_input_left_bw ) {
            $css .= '@media (max-width: 768px){form input[type="text"], form input[type="password"], form input[type="email"], form input[type="url"], form input[type="date"], form input[type="month"], form input[type="time"], form input[type="datetime"], form input[type="datetime-local"], form input[type="week"], form input[type="number"], form input[type="search"], form input[type="tel"], form input[type="color"], form select, form textarea{border-width:' . oceanwp_spacing_css( $tablet_input_top_bw, $tablet_input_right_bw, $tablet_input_bottom_bw, $tablet_input_left_bw ) . '}}';
            $css .= '@media (max-width: 768px){body div.wpforms-container-full .wpforms-form input[type=date], body div.wpforms-container-full .wpforms-form input[type=datetime], body div.wpforms-container-full .wpforms-form input[type=datetime-local], body div.wpforms-container-full .wpforms-form input[type=email], body div.wpforms-container-full .wpforms-form input[type=month], body div.wpforms-container-full .wpforms-form input[type=number], body div.wpforms-container-full .wpforms-form input[type=password], body div.wpforms-container-full .wpforms-form input[type=range], body div.wpforms-container-full .wpforms-form input[type=search], body div.wpforms-container-full .wpforms-form input[type=tel], body div.wpforms-container-full .wpforms-form input[type=text], body div.wpforms-container-full .wpforms-form input[type=time], body div.wpforms-container-full .wpforms-form input[type=url], body div.wpforms-container-full .wpforms-form input[type=week], body div.wpforms-container-full .wpforms-form select, body div.wpforms-container-full .wpforms-form textarea{border-width:' . oceanwp_spacing_css( $tablet_input_top_bw, $tablet_input_right_bw, $tablet_input_bottom_bw, $tablet_input_left_bw ) . '}}';
        }

        // Mobile input border width border width.
        if ( isset( $mobile_input_top_bw ) && '' != $mobile_input_top_bw
            || isset( $mobile_input_right_bw ) && '' != $mobile_input_right_bw
            || isset( $mobile_input_bottom_bw ) && '' != $mobile_input_bottom_bw
            || isset( $mobile_input_left_bw ) && '' != $mobile_input_left_bw ) {
            $css .= '@media (max-width: 480px){form input[type="text"], form input[type="password"], form input[type="email"], form input[type="url"], form input[type="date"], form input[type="month"], form input[type="time"], form input[type="datetime"], form input[type="datetime-local"], form input[type="week"], form input[type="number"], form input[type="search"], form input[type="tel"], form input[type="color"], form select, form textarea{border-width:' . oceanwp_spacing_css( $mobile_input_top_bw, $mobile_input_right_bw, $mobile_input_bottom_bw, $mobile_input_left_bw ) . '}}';
            $css .= '@media (max-width: 480px){body div.wpforms-container-full .wpforms-form input[type=date], body div.wpforms-container-full .wpforms-form input[type=datetime], body div.wpforms-container-full .wpforms-form input[type=datetime-local], body div.wpforms-container-full .wpforms-form input[type=email], body div.wpforms-container-full .wpforms-form input[type=month], body div.wpforms-container-full .wpforms-form input[type=number], body div.wpforms-container-full .wpforms-form input[type=password], body div.wpforms-container-full .wpforms-form input[type=range], body div.wpforms-container-full .wpforms-form input[type=search], body div.wpforms-container-full .wpforms-form input[type=tel], body div.wpforms-container-full .wpforms-form input[type=text], body div.wpforms-container-full .wpforms-form input[type=time], body div.wpforms-container-full .wpforms-form input[type=url], body div.wpforms-container-full .wpforms-form input[type=week], body div.wpforms-container-full .wpforms-form select, body div.wpforms-container-full .wpforms-form textarea{border-width:' . oceanwp_spacing_css( $mobile_input_top_bw, $mobile_input_right_bw, $mobile_input_bottom_bw, $mobile_input_left_bw ) . '}}';
        }

        // Site forms border type.
        if ( $input_border_type ) {
            $css .= 'form input[type="text"], form input[type="password"], form input[type="email"], form input[type="url"], form input[type="date"], form input[type="month"], form input[type="time"], form input[type="datetime"], form input[type="datetime-local"], form input[type="week"], form input[type="number"], form input[type="search"], form input[type="tel"], form input[type="color"], form select, form textarea, .woocommerce .woocommerce-checkout .select2-container--default .select2-selection--single{border-style:' . $input_border_type . ';}';
			$css .= 'body div.wpforms-container-full .wpforms-form input[type=date], body div.wpforms-container-full .wpforms-form input[type=datetime], body div.wpforms-container-full .wpforms-form input[type=datetime-local], body div.wpforms-container-full .wpforms-form input[type=email], body div.wpforms-container-full .wpforms-form input[type=month], body div.wpforms-container-full .wpforms-form input[type=number], body div.wpforms-container-full .wpforms-form input[type=password], body div.wpforms-container-full .wpforms-form input[type=range], body div.wpforms-container-full .wpforms-form input[type=search], body div.wpforms-container-full .wpforms-form input[type=tel], body div.wpforms-container-full .wpforms-form input[type=text], body div.wpforms-container-full .wpforms-form input[type=time], body div.wpforms-container-full .wpforms-form input[type=url], body div.wpforms-container-full .wpforms-form input[type=week], body div.wpforms-container-full .wpforms-form select, body div.wpforms-container-full .wpforms-form textarea{border-style:' . $input_border_type . ';}';
        }

        // Input border width border radius.
        if ( isset( $input_top_radius ) && 1 != $input_top_radius && '' != $input_top_radius
            || isset( $input_right_radius ) && 1 != $input_right_radius && '' != $input_right_radius
            || isset( $input_bottom_radius ) && 1 != $input_bottom_radius && '' != $input_bottom_radius
            || isset( $input_left_radius ) && 1 != $input_left_radius && '' != $input_left_radius ) {
            $css .= 'form input[type="text"], form input[type="password"], form input[type="email"], form input[type="url"], form input[type="date"], form input[type="month"], form input[type="time"], form input[type="datetime"], form input[type="datetime-local"], form input[type="week"], form input[type="number"], form input[type="search"], form input[type="tel"], form input[type="color"], form select, form textarea{border-radius:' . oceanwp_spacing_css( $input_top_radius, $input_right_radius, $input_bottom_radius, $input_left_radius ) . '}';
            $css .= 'body div.wpforms-container-full .wpforms-form input[type=date], body div.wpforms-container-full .wpforms-form input[type=datetime], body div.wpforms-container-full .wpforms-form input[type=datetime-local], body div.wpforms-container-full .wpforms-form input[type=email], body div.wpforms-container-full .wpforms-form input[type=month], body div.wpforms-container-full .wpforms-form input[type=number], body div.wpforms-container-full .wpforms-form input[type=password], body div.wpforms-container-full .wpforms-form input[type=range], body div.wpforms-container-full .wpforms-form input[type=search], body div.wpforms-container-full .wpforms-form input[type=tel], body div.wpforms-container-full .wpforms-form input[type=text], body div.wpforms-container-full .wpforms-form input[type=time], body div.wpforms-container-full .wpforms-form input[type=url], body div.wpforms-container-full .wpforms-form input[type=week], body div.wpforms-container-full .wpforms-form select, body div.wpforms-container-full .wpforms-form textarea{border-radius:' . oceanwp_spacing_css( $input_top_radius, $input_right_radius, $input_bottom_radius, $input_left_radius ) . '}';
        }

        // Tablet input border width border radius.
        if ( isset( $tablet_input_top_radius ) && '' != $tablet_input_top_radius
            || isset( $tablet_input_right_radius ) && '' != $tablet_input_right_radius
            || isset( $tablet_input_bottom_radius ) && '' != $tablet_input_bottom_radius
            || isset( $tablet_input_left_radius ) && '' != $tablet_input_left_radius ) {
            $css .= '@media (max-width: 768px){form input[type="text"], form input[type="password"], form input[type="email"], form input[type="url"], form input[type="date"], form input[type="month"], form input[type="time"], form input[type="datetime"], form input[type="datetime-local"], form input[type="week"], form input[type="number"], form input[type="search"], form input[type="tel"], form input[type="color"], form select, form textarea{border-radius:' . oceanwp_spacing_css( $tablet_input_top_radius, $tablet_input_right_radius, $tablet_input_bottom_radius, $tablet_input_left_radius ) . '}}';
            $css .= '@media (max-width: 768px){body div.wpforms-container-full .wpforms-form input[type=date], body div.wpforms-container-full .wpforms-form input[type=datetime], body div.wpforms-container-full .wpforms-form input[type=datetime-local], body div.wpforms-container-full .wpforms-form input[type=email], body div.wpforms-container-full .wpforms-form input[type=month], body div.wpforms-container-full .wpforms-form input[type=number], body div.wpforms-container-full .wpforms-form input[type=password], body div.wpforms-container-full .wpforms-form input[type=range], body div.wpforms-container-full .wpforms-form input[type=search], body div.wpforms-container-full .wpforms-form input[type=tel], body div.wpforms-container-full .wpforms-form input[type=text], body div.wpforms-container-full .wpforms-form input[type=time], body div.wpforms-container-full .wpforms-form input[type=url], body div.wpforms-container-full .wpforms-form input[type=week], body div.wpforms-container-full .wpforms-form select, body div.wpforms-container-full .wpforms-form textarea{border-radius:' . oceanwp_spacing_css( $tablet_input_top_radius, $tablet_input_right_radius, $tablet_input_bottom_radius, $tablet_input_left_radius ) . '}}';
        }

        // Mobile input border width border radius.
        if ( isset( $mobile_input_top_radius ) && '' != $mobile_input_top_radius
            || isset( $mobile_input_right_radius ) && '' != $mobile_input_right_radius
            || isset( $mobile_input_bottom_radius ) && '' != $mobile_input_bottom_radius
            || isset( $mobile_input_left_radius ) && '' != $mobile_input_left_radius ) {
            $css .= '@media (max-width: 480px){form input[type="text"], form input[type="password"], form input[type="email"], form input[type="url"], form input[type="date"], form input[type="month"], form input[type="time"], form input[type="datetime"], form input[type="datetime-local"], form input[type="week"], form input[type="number"], form input[type="search"], form input[type="tel"], form input[type="color"], form select, form textarea{border-radius:' . oceanwp_spacing_css( $mobile_input_top_radius, $mobile_input_right_radius, $mobile_input_bottom_radius, $mobile_input_left_radius ) . '}}';
            $css .= '@media (max-width: 480px){body div.wpforms-container-full .wpforms-form input[type=date], body div.wpforms-container-full .wpforms-form input[type=datetime], body div.wpforms-container-full .wpforms-form input[type=datetime-local], body div.wpforms-container-full .wpforms-form input[type=email], body div.wpforms-container-full .wpforms-form input[type=month], body div.wpforms-container-full .wpforms-form input[type=number], body div.wpforms-container-full .wpforms-form input[type=password], body div.wpforms-container-full .wpforms-form input[type=range], body div.wpforms-container-full .wpforms-form input[type=search], body div.wpforms-container-full .wpforms-form input[type=tel], body div.wpforms-container-full .wpforms-form input[type=text], body div.wpforms-container-full .wpforms-form input[type=time], body div.wpforms-container-full .wpforms-form input[type=url], body div.wpforms-container-full .wpforms-form input[type=week], body div.wpforms-container-full .wpforms-form select, body div.wpforms-container-full .wpforms-form textarea{border-radius:' . oceanwp_spacing_css( $mobile_input_top_radius, $mobile_input_right_radius, $mobile_input_bottom_radius, $mobile_input_left_radius ) . '}}';
        }

        // Return CSS.
        if ( ! empty( $css ) ) {
            $output .= '/* OceanWP Style Settings CSS */' . $css;
        }

        // Return output css.
        return $output;

    }
}

return new OceanWP_Style_Settings_CSS();
