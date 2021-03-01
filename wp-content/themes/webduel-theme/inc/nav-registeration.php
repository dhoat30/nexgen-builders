<?php 
 //add nav menu
 function nexgen_config(){ 
    register_nav_menus( 
       array(
          "nexgen_main_menu" => "Nexgen Main Menu"
       )
       );  

       add_theme_support( "title-tag");

   
         
  }
 
  add_action("after_setup_theme", "nexgen_config", 0);
?>