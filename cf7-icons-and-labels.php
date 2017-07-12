<?php
/*
Plugin Name: CF7 Icons and Labels
Plugin URI:  https://wordpress.org/plugins/cf7-icons-and-labels/
Version:     1.2
Author:      Team Code Aid
Author URI:  https://codeaid.wordpress.com/
Description: This plugin modifies the output of the popular Contact Form 7 plugin to add font awesome icons and labels
License:     GNU General Public License v3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Tags:        contact form 7, cf7, addon, contact form 7 addon, contact form, cf7 font awesome icons, cf7 labels, cf7 icons and labels, dynamic labels, contact form 7 dynamic labels, labels in input field, dynamic icons, contact form 7 dynamic icons, icon in input field, animate icons contact form 7, contact form 7 animate icons, animate labels contact form 7, contact form 7 animate labels
*/

function cf7_icons_and_labels_scripts(){  
  wp_enqueue_script('cf7_script', plugins_url('cf7-icons-and-labels/js/cf7_script.js'), '', '', true);
    
  wp_register_style('cf7_style', plugins_url('cf7-icons-and-labels/css/cf7_style.css'));
  wp_enqueue_style('cf7_style');	
  
  wp_register_script( 'fontawesome', 'https://use.fontawesome.com/2deb5ba708.js', '', '', true); 
  wp_enqueue_script('fontawesome'); 
    
}

add_action('wp_enqueue_scripts', 'cf7_icons_and_labels_scripts');

?>
