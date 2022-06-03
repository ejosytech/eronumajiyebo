<?php

/**
 * Plugin Name:       site-content-plugin
 * Description:       A plugin that haandles site content.
 * Version:           1.0.0
 * Author:            Eronu E.M
 * License: 
 * 
 */
class site_content_manager
{

    function __construct() 
    {   //add_shortcode   
        
        add_shortcode('contact_page', array($this, 'render_contact_form'));
        add_shortcode('profile_page', array($this, 'render_profile_form'));
        add_shortcode('about_me_page', array($this, 'render_about_me_form'));
        add_shortcode('cv_page', array($this, 'render_cv_form'));
        add_shortcode('project_page', array($this, 'render_project_form'));
        add_shortcode('publicatn_page', array($this, 'render_publicatn_form'));
        add_shortcode('accomplish_page', array($this, 'render_accomplish_form'));
        add_shortcode('training_page', array($this, 'render_training_form'));
        add_shortcode('consult_page', array($this, 'render_consult_form'));
        add_shortcode('academia_page', array($this, 'render_academia_form'));
      
    }
    
    
   /**
	 * Plugin activation hook.
	 *
	 * Creates all WordPress pages needed by the plugin.
	 */
	public static function plugin_activated() {
		// Information needed for creating the plugin's pages
		$page_definitions = array(
                        'contact_page' => array(
				'title' => __( 'site Contact page', 'site_content_plugin' ),
				'content' => '[contact_page]'
			),
                        'profile_page' => array(
				'title' => __( 'site profile page', 'site_content_plugin' ),
				'content' => '[profile_page]'
			),
                        'cv_page' => array(
				'title' => __( 'site cv page', 'site_content_plugin' ),
				'content' => '[cv_page]'
			),
                       'about_me_page' => array(
				'title' => __( 'site about me page', 'site_content_plugin' ),
				'content' => '[about_me_page]'
			),
                        'project_page' => array(
				'title' => __( 'site project page', 'site_content_plugin' ),
				'content' => '[project_page]'
			),
                        'publicatn_page' => array(
				'title' => __( 'site publication page', 'site_content_plugin' ),
				'content' => '[publicatn_page]'
			),
                       'accomplish_page' => array(
				'title' => __( 'site accomplishment page', 'site_content_plugin' ),
				'content' => '[accomplish_page]'
			),
                       'training_page' => array(
				'title' => __( 'site training page', 'site_content_plugin' ),
				'content' => '[training_page]'
			),
                       'consult_page' => array(
				'title' => __( 'site consult page', 'site_content_plugin' ),
				'content' => '[consult_page]'
			),
                        'academia_page' => array(
				'title' => __( 'site academia page', 'site_content_plugin' ),
				'content' => '[academia_page]'
			)
                    
		);

		foreach ( $page_definitions as $slug => $page ) {
			// Check that the page doesn't exist already
			$query = new WP_Query( 'pagename=' . $slug );
			if ( ! $query->have_posts() ) {
				// Add the page using the data from the array above
				wp_insert_post(
					array(
						'post_content'   => $page['content'],
						'post_name'      => $slug,
						'post_title'     => $page['title'],
						'post_status'    => 'publish',
						'post_type'      => 'page',
						'ping_status'    => 'closed',
						'comment_status' => 'closed',
					)
				);
			}
		}
	}
 
    
    public function render_contact_form($attributes, $content = null)
      {
        // Parse shortcode attributes
		$default_attributes = array( 'show_title' => false );
		$attributes = shortcode_atts( $default_attributes, $attributes );
                
        return $this->get_template_html('contact', $attributes);
    }
    
    public function render_profile_form($attributes, $content = null)
      {
        // Parse shortcode attributes
		$default_attributes = array( 'show_title' => false );
		$attributes = shortcode_atts( $default_attributes, $attributes );
                
        return $this->get_template_html('profile', $attributes);
    }
     public function render_about_me_form($attributes, $content = null)
      {
        // Parse shortcode attributes
		$default_attributes = array( 'show_title' => false );
		$attributes = shortcode_atts( $default_attributes, $attributes );
                
        return $this->get_template_html('about_me', $attributes);
    }
    public function render_cv_form($attributes, $content = null)
      {
        // Parse shortcode attributes
		$default_attributes = array( 'show_title' => false );
		$attributes = shortcode_atts( $default_attributes, $attributes );
                
        return $this->get_template_html('cv', $attributes);
    }
    public function render_project_form($attributes, $content = null)
      {
        // Parse shortcode attributes
		$default_attributes = array( 'show_title' => false );
		$attributes = shortcode_atts( $default_attributes, $attributes );
                
        return $this->get_template_html('project', $attributes);
    }
    public function render_publicatn_form($attributes, $content = null)
      {
        // Parse shortcode attributes
		$default_attributes = array( 'show_title' => false );
		$attributes = shortcode_atts( $default_attributes, $attributes );
                
        return $this->get_template_html('publicatn', $attributes);
    }
    public function render_training_form($attributes, $content = null)
      {
        // Parse shortcode attributes
		$default_attributes = array( 'show_title' => false );
		$attributes = shortcode_atts( $default_attributes, $attributes );
                
        return $this->get_template_html('training', $attributes);
    }
    public function render_academia_form($attributes, $content = null)
      {
        // Parse shortcode attributes
		$default_attributes = array( 'show_title' => false );
		$attributes = shortcode_atts( $default_attributes, $attributes );
                
        return $this->get_template_html('academia', $attributes);
    }
    public function render_accomplish_form($attributes, $content = null)
      {
        // Parse shortcode attributes
		$default_attributes = array( 'accomplish' => false );
		$attributes = shortcode_atts( $default_attributes, $attributes );
                
        return $this->get_template_html('consult', $attributes);
    }
    public function render_consult_form($attributes, $content = null)
      {
        // Parse shortcode attributes
		$default_attributes = array( 'show_title' => false );
		$attributes = shortcode_atts( $default_attributes, $attributes );
                
        return $this->get_template_html('consult', $attributes);
    }
   
    
        
  
    
    /**
     * Renders the contents of the given template to a string and returns it.
     *
     * @param string $template_name The name of the template to render (without .php)
     * @param array  $attributes    The PHP variables for the template
     *
     * @return string               The contents of the template.
     */
    private function get_template_html($template_name, $attributes = null)
    {
        if (!$attributes) 
        {
            $attributes = array();
        }

        ob_start();

       // do_action('crud_before_' . $template_name);

        require( 'templates/' . $template_name . '.php');

        //do_action('crud_after_' . $template_name);

        $html = ob_get_contents();
        
        ob_end_clean();
        
        ob_flush(); //output the data in the buffer

        return $html;
    }

   

  } 



// Initialize the plugin
$site_content_plugin = new site_content_manager();

// Create the custom pages at plugin activation
register_activation_hook(__FILE__, array('site_content_manager', 'plugin_activated'));



