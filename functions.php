<?php
define('REQUIRE_PATH', get_stylesheet_directory());
define('INCLUDE_PATH', get_stylesheet_directory_uri());
define('THEME_VERSION', 1.0);

require_once REQUIRE_PATH . '/core/customizer.php'; // Load customizer settgins
require_once REQUIRE_PATH . '/core/enqueue.php'; // Load CSS and JS
require_once REQUIRE_PATH . '/core/support.php'; // Add support for native WordPress features
require_once REQUIRE_PATH . '/core/filters.php'; // Filter hooks used in the theme
require_once REQUIRE_PATH . '/core/actions.php'; // Action hooks used in the theme

// Formats the WhatsApp number entered in the Customizer.
function phone_cta_format($phoneNumber)
{
    $phoneFormat = preg_replace("/[^0-9]/", "", $phoneNumber);
    echo $phoneFormat;
}
