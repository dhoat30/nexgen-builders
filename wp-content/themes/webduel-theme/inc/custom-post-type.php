<?php 
//custom post register

//custom post register
add_theme_support("post-thumbnails");

add_post_type_support( "our-team", "thumbnail" ); 

function register_custom_type2(){ 

   //our team post type
   register_post_type("our-team", array(
      "supports" => array("page-attributes"), 
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

   //Services
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
}

add_action("init", "register_custom_type2"); 

//custom taxonomy
function wpdocs_register_private_taxonomy() {
   $args = array(
       'label'        => __( 'Service Category', 'textdomain' ),
       'public'       => true,
       'rewrite'      => true,
       'hierarchical' => true
   );
    
   register_taxonomy( 'Service Category', 'services', $args );
}
add_action( 'init', 'wpdocs_register_private_taxonomy', 0 );