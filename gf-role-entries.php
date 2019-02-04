<?php
/*
 * Plugin Name: Gravity Forms Role Entries
 * Description: View entries for non admin role.
 * Author: Landon Otis
 * Author URI: https://scree.it
 * Version: 02042019
 */
 
/** 
 * Add Gravity Forms capabilities to role.
 * Runs during plugin activation.
 *
 * @access public
 * @return void
 */
function activate_gfre() {
  $role = get_role( 'editor' );
  $role->add_cap( 'gravityforms_view_entries' );
}
// Register activation hook
register_activation_hook( __FILE__, 'activate_gfre' );

/**
 * Remove Gravity Forms capabilities from role.
 * Runs during plugin deactivation.
 * 
 * @access public
 * @return void
 */
function deactivate_gfre() {
 $role = get_role( 'editor' );
 $role->remove_cap( 'gravityforms_view_entries' );
}
// Register de-activation hook
register_deactivation_hook( __FILE__, 'deactivate_gfre' );
