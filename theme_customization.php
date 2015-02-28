<?php

/**
 * Spiffy THEME CUSTOMIZATION
 *
 */



add_action('customize_register', 'contact_info_customize');
function contact_info_customize($wp_customize) {
 
    $wp_customize->add_section( 'contact_info', array( // Section tag, needs to be unique
        'title'          => 'Contact Info',
        'priority'       => 35,
    ) );
 
 		// PHONE
	    $wp_customize->add_setting( 'contact_phone', array( //field tag, needs to be unique
	        'default' => '',
	    ) );
	 
	    $wp_customize->add_control( 'contact_phone', array( //field tag, needs to be unique
	        'label'   => 'Phone Number', // Form Label
	        'section' => 'contact_info', // refers to unique section tag
	        'type'    => 'text',
	    ) );
 

 		// EMAIL
	    $wp_customize->add_setting( 'contact_email', array( //field tag, needs to be unique
	        'default' => '',
	    ) );
	 
	    $wp_customize->add_control( 'contact_email', array( //field tag, needs to be unique
	        'label'   => 'Email Address', // Form Label
	        'section' => 'contact_info', // refers to unique section tag
	        'type'    => 'text',
	    ) );
 

 		// STREET ADDRESS
	    $wp_customize->add_setting( 'contact_address', array( //field tag, needs to be unique
	        'default' => '',
	    ) );
	 
	    $wp_customize->add_control( 'contact_address', array( //field tag, needs to be unique
	        'label'   => 'Street Address', // Form Label
	        'section' => 'contact_info', // refers to unique section tag
	        'type'    => 'text',
	    ) );
 

 		// CITY
	    $wp_customize->add_setting( 'contact_city', array( //field tag, needs to be unique
	        'default' => '',
	    ) );
	 
	    $wp_customize->add_control( 'contact_city', array( //field tag, needs to be unique
	        'label'   => 'City', // Form Label
	        'section' => 'contact_info', // refers to unique section tag
	        'type'    => 'text',
	    ) );
 

 		// STATE
	    $wp_customize->add_setting( 'contact_state', array( //field tag, needs to be unique
	        'default' => '',
	    ) );
	 
	    $wp_customize->add_control( 'contact_state', array( //field tag, needs to be unique
	        'label'   => 'State Abbreviation', // Form Label
	        'section' => 'contact_info', // refers to unique section tag
	        'type'    => 'text',
	    ) );
 

 		// ZIP CODE
	    $wp_customize->add_setting( 'contact_zip', array( //field tag, needs to be unique
	        'default' => '',
	    ) );
	 
	    $wp_customize->add_control( 'contact_zip', array( //field tag, needs to be unique
	        'label'   => 'Zip Code (5 digits)', // Form Label
	        'section' => 'contact_info', // refers to unique section tag
	        'type'    => 'text',
	    ) );
 

 		// GOOGLE MAP URL
	    $wp_customize->add_setting( 'contact_google_url', array( //field tag, needs to be unique
	        'default' => '',
	    ) );
	 
	    $wp_customize->add_control( 'contact_google_url', array( //field tag, needs to be unique
	        'label'   => 'Google Map URL', // Form Label
	        'section' => 'contact_info', // refers to unique section tag
	        'type'    => 'text',
	    ) );
 
 
 
}




add_action('customize_register', 'social_info_customize');
function social_info_customize($wp_customize) {
 
    $wp_customize->add_section( 'social_info', array( // Section tag, needs to be unique
        'title'          => 'Social Info',
        'priority'       => 35,
    ) );
 

 		// FACEBOOK
	    $wp_customize->add_setting( 'social_facebook', array( //field tag, needs to be unique
	        'default' => '',
	    ) );
	 
	    $wp_customize->add_control( 'social_facebook', array( //field tag, needs to be unique
	        'label'   => 'Facebook Page Username (not the url)', // Form Label
	        'section' => 'social_info', // refers to unique section tag
	        'type'    => 'text',
	    ) );
 

 		// TWITTER
	    $wp_customize->add_setting( 'social_twitter', array( //field tag, needs to be unique
	        'default' => '',
	    ) );
	 
	    $wp_customize->add_control( 'social_twitter', array( //field tag, needs to be unique
	        'label'   => 'Twitter Handle (without @ sign)', // Form Label
	        'section' => 'social_info', // refers to unique section tag
	        'type'    => 'text',
	    ) );
 

 		// LINKEDIN
	    $wp_customize->add_setting( 'social_linkedin', array( //field tag, needs to be unique
	        'default' => '',
	    ) );
	 
	    $wp_customize->add_control( 'social_linkedin', array( //field tag, needs to be unique
	        'label'   => 'Linkedin URL', // Form Label
	        'section' => 'social_info', // refers to unique section tag
	        'type'    => 'text',
	    ) );
 
}


add_action('customize_register', 'sidebar_navigation_text_customize');
function sidebar_navigation_text_customize($wp_customize) {
   // Add text area option
class Example_Customize_Textarea_Control extends WP_Customize_Control {
    public $type = 'textarea';
 
    public function render_content() {
        ?>
        <label>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
        </label>
        <?php
    }
}
    $wp_customize->add_section( 'sidebar_navigation_text', array( // Section tag, needs to be unique
        'title'          => 'Sidebar Navigation Text',
        'priority'       => 35,
    ) );
 

 		// PARAGRAPH
	    $wp_customize->add_setting( 'sidebar_navigation_text', array( //field tag, needs to be unique
	        'default' => '',
	    ) );
	 
	    $wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'sidebar_navigation_text', array(
	        'label'   => 'This text will show up on non-home pages beneath navigation', // Form Label
	        'section' => 'sidebar_navigation_text', // refers to unique section tag
	        'type'    => 'text',
	     ) ) );
 
 
}


