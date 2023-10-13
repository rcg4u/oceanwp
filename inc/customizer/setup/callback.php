<?php

function ocean_is_google_font_settings() {
	if ( true === get_theme_mod( 'ocean_disable_google_font', false ) ) {
		return true;
	} else {
		return false;
	}
}

function ocean_is_local_google_font() {
	if ( true === get_theme_mod( 'ocean_disable_google_font', false )
        && true === get_theme_mod( 'ocean_local_google_font', false ) ) {
		return true;
	} else {
		return false;
	}
}

function ocean_is_elementor_google_font() {
    if ( true === get_theme_mod( 'ocean_disable_google_font', false )
        && true === get_theme_mod( 'ocean_local_google_font', false )
        && did_action( 'elementor/loaded' ) ) {
        return true;
    } else {
        return false;
    }
}

function ocean_is_oe_active() {
    if ( class_exists( 'Ocean_Extra' )) {
        return true;
    } else {
        return false;
    }
}

function ocean_is_boxed_layout() {
	if ( 'boxed' == get_theme_mod( 'ocean_main_layout_style', 'wide' ) ) {
		return true;
	} else {
		return false;
	}
}

function ocean_is_layout_boxed_separate() {
	if ( 'boxed' === get_theme_mod( 'ocean_main_layout_style', 'wide' )
        || 'separate' === get_theme_mod( 'ocean_main_layout_style', 'wide' ) ) {
		return true;
	} else {
		return false;
	}
}
