<?php
  function wpb_customize_register($wp_customize){

    // Showcase Section
    $wp_customize->add_section('showcase', array(
      'title'   => __('Top Image', 'wpbootstrap'),
      'description' => sprintf(__('Options for showcase','mmbtheme')),
      'priority'    => 130
    ));

    $wp_customize->add_setting('top_img', array(
      'default'   => get_bloginfo('template_directory').'/assets/images/topimg.png',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'top_img', array(
      'label'   => __('Top Image', 'wpbootstrap'),
      'section' => 'showcase',
      'settings' => 'top_img',
      'priority'  => 1
    )));


 
  }

  add_action('customize_register', 'wpb_customize_register');