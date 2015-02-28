<?php

/**
 * Spiffy SHORTCODES
 *
 */


// Allow Shortcodes in text widget
add_filter('widget_text', 'do_shortcode');

// Email Address
function spiffy_email_link( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'text' => 'true',
		'list' => 'false',
		'ligature' => 'false',
		'icon' => '@',
		), $atts ) );

	$output = '';

	if($list == 'true'){
		$output .= '<li>';
	}
	if($ligature == 'true'){
		$output .= '<span class="lsf">'.$icon.'</span>';
	}

	if($text == 'true'){
		$output .= '<a href="mailto:'.get_theme_mod('contact_email').'" title="Email us">'.get_theme_mod('contact_email').'</a>';
	}

	if($list == 'true'){
		$output .= '</li>';
	}
	return $output;
}
add_shortcode( 'email_link', 'spiffy_email_link' );


// Phone
function spiffy_phone_number( $atts, $content = null )  {
	extract( shortcode_atts( array(
		'text' => 'true',
		'list' => 'false',
		'ligature' => 'false',
		'icon' => 'phone',
		), $atts ) );

	$output = '';

	if($list == 'true'){
		$output .= '<li>';
	}
	if($ligature == 'true'){
		$output .= '<span class="lsf">phone</span>';
	} else {
		echo 'hllo';
	}

	if($text == 'true'){
		$output .= get_theme_mod('contact_phone');
	} 
	
	if($list == 'true'){
		$output .= '</li>';
	}
	return $output;
}
add_shortcode( 'phone_number', 'spiffy_phone_number' );


//Address
function spiffy_address($atts, $content = null )  {
	extract( shortcode_atts( array(
		'text' => 'true',
		'list' => 'false',
		'ligature' => 'false',
		'icon' => 'mail',
		), $atts ) );

	$output = '';

	if($list == 'true'){
		$output .= '<li>';
	}
	if($ligature == 'true'){
		$output .= '<span class="lsf">'.$icon.'</span>';
	}

	if($text == 'true'){
		$output .= ''.get_theme_mod('contact_address').'<br/><span class="lsf blank">mail</span>'.get_theme_mod('contact_city').', '.get_theme_mod('contact_state').' '.get_theme_mod('contact_zip').'';
	}

	if($list == 'true'){
		$output .= '</li>';
	}
	return $output;
}
add_shortcode( 'address', 'spiffy_address' );


// Facebook
function spiffy_facebook( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'text' => 'true',
		'list' => 'false',
		'ligature' => 'false',
		'icon' => 'facebook',
		), $atts ) );

	$output = '';

	if($list == 'true'){
		$output .= '<li>';
	}
	if($ligature == 'true'){
		$output .= '<span class="lsf">'.$icon.'</span>';
	}

	if (get_theme_mod('social_facebook') != "") { 

		if($text == 'true'){
			$output .= '<a href="http://www.'.get_theme_mod('social_facebook').'" title="Like us on facebook" target="blank">'.get_theme_mod('social_facebook').'</a>';
		} elseif ($text == 'false') {
			$output .= '<a href="http://www.'.get_theme_mod('social_facebook').'" title="Like us on facebook" target="blank"><span class="lsf">'.$icon.'</span></a>';
		}
	}
	
	if($list == 'true'){
		$output .= '</li>';
	}
	return $output;
	
}
add_shortcode( 'facebook', 'spiffy_facebook' );


// Twitter
function spiffy_twitter( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'text' => 'true',
		'list' => 'false',
		'ligature' => 'false',
		'icon' => 'twitter',
		), $atts ) );

	$output = '';

	if($list == 'true'){
		$output .= '<li>';
	}
	
	if($ligature == 'true'){
		$output .= '<span class="lsf">'.$icon.'</span>';
	}

	if (get_theme_mod('social_twitter') != "") { 

		if($text == 'true'){
			$output .= '<a href="http://www.twitter.com/'.get_theme_mod('social_twitter').'" title="Follow us on twitter" target="blank">@'.get_theme_mod('social_twitter').'</a>';
		} elseif ($text == 'false') {
			$output .= '<a href="http://www.twitter.com/'.get_theme_mod('social_twitter').'" title="Follow us on twitter" target="blank"><span class="lsf">'.$icon.'</span></a>';
		}

		if($list == 'true'){
			$output .= '</li>';
		}
		return $output;
	}
}
add_shortcode( 'twitter', 'spiffy_twitter' );


?>