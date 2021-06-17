<?php 
//custom post register

//custom post register
add_theme_support("post-thumbnails");

add_post_type_support( "our-team", "thumbnail" ); 

function register_custom_type2(){ 
   // slogans
   register_post_type("slogans", array(
      "supports" => array("title"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Slogan", 
         "add_new_item" => "Add New Slogan", 
         "edit_item" => "Edit Slogan", 
         "all_items" => "All Slogans", 
         "singular_name" => "Slogan"
      ), 
      "menu_icon" => "dashicons-edit"
   )
   ); 

   //our team post type
   register_post_type("our-team", array(
      "supports" => array("title","page-attributes"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Team", 
         "add_new_item" => "Add New Team Member", 
         "edit_item" => "Edit Team Member", 
         "all_items" => "All Team Members", 
         "singular_name" => "Team Member"
      ), 
      "menu_icon" => "dashicons-admin-users"
   )
   ); 

   //projects
   register_post_type("projects", array(
      "supports" => array("title"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Projects", 
         "add_new_item" => "Add New Project", 
         "edit_item" => "Edit Project", 
         "all_items" => "All Projects", 
         "singular_name" => "Project"      
      ), 
      "menu_icon" => "dashicons-hammer"
   )
   ); 

   //usp
   register_post_type("usp", array(
      "supports" => array("title", "thumbnail", "editor"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "USP", 
         "add_new_item" => "Add New USP", 
         "edit_item" => "Edit USP", 
         "all_items" => "All USP", 
         "singular_name" => "USP"     
      ), 
      "menu_icon" => "dashicons-editor-ul"
   )
   ); 

   //accomplishments
   register_post_type("accomplishments", array(
      "supports" => array("title", "editor"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Accomplishments", 
         "add_new_item" => "Add New Accomplishment", 
         "edit_item" => "Edit Accomplishment", 
         "all_items" => "All Accomplishments", 
         "singular_name" => "Accomplishment"     
      ), 
      "menu_icon" => "dashicons-awards"
   )
   );

   //accomplishments
   register_post_type("clients", array(
      "supports" => array("title", "thumbnail"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Clients", 
         "add_new_item" => "Add New Client", 
         "edit_item" => "Edit Client", 
         "all_items" => "All Clients", 
         "singular_name" => "Client"     
      ), 
      "menu_icon" => "dashicons-networking"
   )
   );

   //Reviews
   register_post_type("reviews", array(
      "supports" => array("title", "thumbnail"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Reviews", 
         "add_new_item" => "Add New Review", 
         "edit_item" => "Edit Review", 
         "all_items" => "All Reviews", 
         "singular_name" => "Review"     
      ), 
      "menu_icon" => "dashicons-buddicons-buddypress-logo"
   )
   );
   
   //Services
   register_post_type("services", array(
      "supports" => array("title", "thumbnail", "editor"), 
      "public" => true, 
      'show_in_rest' => true,
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Services", 
         "add_new_item" => "Add New Service", 
         "edit_item" => "Edit Service", 
         "all_items" => "All Services", 
         "singular_name" => "Service"     
      ), 
      "menu_icon" => "dashicons-megaphone"
   )
   );

   //business info
   register_post_type("business-info", array(
      "supports" => array("title"), 
      "public" => true, 
      "show_ui" => true,
      "hierarchical" => true,
      "labels" => array(
         "name" => "Business Info", 
         "add_new_item" => "Add New Business Info", 
         "edit_item" => "Edit Business Info", 
         "all_items" => "All Business Info", 
         "singular_name" => "Business Info"     
      ), 
      "menu_icon" => "dashicons-format-aside"
   )
   );

    //certification 
    register_post_type("certification", array(
      "supports" => array("title", 'thumbnail'), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Certifications", 
         "add_new_item" => "Add New Certification", 
         "edit_item" => "Edit Certification", 
         "all_items" => "All Certifications", 
         "singular_name" => "Certification"     
      ), 
      "menu_icon" => "dashicons-welcome-learn-more"
   )
   );

   //slider 
   register_post_type("slider", array(
      "supports" => array("title", 'thumbnail', 'editor'), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Sliders", 
         "add_new_item" => "Add New Slider", 
         "edit_item" => "Edit Slider", 
         "all_items" => "All Sliders", 
         "singular_name" => "Slider"     
      ), 
      "menu_icon" => "dashicons-format-gallery"
   )
   );

   //subtitle 
   register_post_type("subtitle", array(
      "supports" => array("title"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Subtitles", 
         "add_new_item" => "Add New Subtitle", 
         "edit_item" => "Edit Subtitle", 
         "all_items" => "All Subtitles", 
         "singular_name" => "Subtitle"     
      ), 
      "menu_icon" => "dashicons-media-code"
   )
   );

   //hero-image 
   register_post_type("hero-image", array(
      "supports" => array("title"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Hero Images", 
         "add_new_item" => "Add New Hero Image", 
         "edit_item" => "Edit Hero Image", 
         "all_items" => "All Hero Images", 
         "singular_name" => "Hero Image"     
      ), 
      "menu_icon" => "dashicons-format-image
      "
   )
   );
   
}

add_action("init", "register_custom_type2"); 

//custom taxonomy
function wpdocs_register_private_taxonomy() {
   

   $args2 = array(
      'label'        => __( 'Slider Category', 'textdomain' ),
      'public'       => true,
      'rewrite'      => true,
      'hierarchical' => true,
      'show_in_rest'      => true
  );
   
  register_taxonomy( 'slider-category', 'slider', $args2 );

  $argsProjects = array(
   'label'        => __( 'Project Category', 'textdomain' ),
   'public'       => true,
   'rewrite'      => true,
   'hierarchical' => true,
   'show_in_rest'      => true
);

register_taxonomy( 'project-category', array('projects', 'services'), $argsProjects );
}
add_action( 'init', 'wpdocs_register_private_taxonomy', 0 );