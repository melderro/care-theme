<?php
/**
 * Loads vendor files from Composer
 */
require( get_stylesheet_directory( ) .  '/vendor/autoload.php' );

/**
 * Helper functions
 */
require 'helpers/fwd-nav-menu.php';
require 'helpers/fwd-sub-nav.php';
require 'helpers/get-nowrap-field.php';
require 'helpers/get-partial.php';
require 'helpers/get-svg.php';
require 'helpers/image-helpers.php';
require 'helpers/picsum-img-url.php';
require 'helpers/placeholder-img-url.php';
require 'helpers/get-events.php';



/**
 * Theme setup and supports
 */
require 'setup/acf-save-location.php';
require 'setup/admin-menu-remover.php';
require 'setup/asset-loader.php';
require 'setup/image-sizes.php';
require 'setup/theme-settings-page.php';
require 'setup/theme-supports.php';
require 'setup/cpt.php';


/**
 * Theme menus
 */
require 'menus/navigation-menus.php';

/**
 * Theme sidebars
 */
require 'sidebars/sidebars.php';

/**
 * Theme widgets
 */
