<?php
/**
 * This file can be used to add machine specific configurations. It
 * is ignored by git and should never be committed to the repository.
 * 
 * To use this, simply create a file named 'wp-config-local.php' and add
 * any settings that are different for this machine.
 */

 /**
  * If you want to use the Docker implementation, you will need to use the following:
  */
  define( 'WP_SITEURL', 'http://localhost/wp' );
  define( 'WP_HOME', 'http://localhost' );
  define( 'WP_CONTENT_URL', 'http://localhost/content' );