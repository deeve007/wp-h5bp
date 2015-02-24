<?php

// Define Functions Path
define('FUNCTIONS_PATH', STYLESHEETPATH . '/functions/');

// Theme Setup
require_once(FUNCTIONS_PATH . 'theme-setup.php');

// Hooks
require_once(FUNCTIONS_PATH . 'posted-on.php');
require_once(FUNCTIONS_PATH . 'read-more.php');
require_once(FUNCTIONS_PATH . 'content-nav.php');

// Custom Functions
// require_once(FUNCTIONS_PATH . 'custom-fields.php');
// require_once(FUNCTIONS_PATH . 'dashboard-hacks.php');

// Custom Post Types
// require_once(FUNCTIONS_PATH . 'cpt-name.php');
// require_once(FUNCTIONS_PATH . 'cpt-recent-posts-widget.php');