<?php
   /*
   Plugin Name: Virtual Force Language Translation Multinetwork
   Plugin URI: https://www.virtualforce.io/
   Description: This plugins enables you to asdf.
   Version: 1.0
   Author: Naqash
   Author URI: http://virtualforce.io/
   License: GPL2
   */

//settings page
add_action('network_admin_menu', 'add_my_netw_settings_page');
function add_my_netw_settings_page() {
  add_submenu_page(
       'settings.php',
       'Virtual Force Settings',
       'Virtual Force Settings',
       'manage_network_options',
       'translation',
       'settings_page'
  );    
}

function settings_page(){
  include('virtual-force-options_settings_page.php');
}
?>