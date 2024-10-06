<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.8.2' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.8.2' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define( 'ASTRA_PRO_UPGRADE_URL', astra_get_pro_url( 'https://wpastra.com/pricing/', 'dashboard', 'free-theme', 'dashboard' ) );
define( 'ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', astra_get_pro_url( 'https://wpastra.com/pricing/', 'customizer', 'free-theme', 'upgrade' ) );

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/surecart/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';

function enqueue_bootstrap() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');
function register_menu_rest_route() {
    register_rest_route('custom/v1', '/menus/(?P<slug>[a-zA-Z0-9-]+)', array(
        'methods' => 'GET',
        'callback' => 'get_menu_by_slug',
    ));
}
add_action('rest_api_init', 'register_menu_rest_route');

function get_menu_by_slug($data) {
    $menu_slug = $data['slug'];
    $menu = wp_get_nav_menu_items($menu_slug);

    if (empty($menu)) {
        return new WP_Error('no_menu', 'Menu not found', array('status' => 404));
    }

    return $menu;
}

// In der functions.php deines Themes oder in einem benutzerdefinierten Plugin
add_action('admin_init', 'register_custom_setting');

function register_custom_setting() {
    register_setting('general', 'custom_variable', 'sanitize_text_field');
    add_settings_field('custom_variable', '<label for="custom_variable">Custom Variable</label>', 'custom_variable_callback', 'general');
}

function custom_variable_callback() {
    $value = get_option('custom_variable', '');
    echo '<input type="text" id="custom_variable" name="custom_variable" value="' . esc_attr($value) . '" />';
}

// In der functions.php deines Themes oder in einem benutzerdefinierten Plugin
add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/variable', array(
        'methods' => 'GET',
        'callback' => 'get_custom_variable',
        'permission_callback' => '__return_true', // Berechtigung anpassen
    ));
    register_rest_route('custom/v1', '/option', array(
        'methods' => 'GET',
        'callback' => 'get_custom_option',
        'permission_callback' => '__return_true',
    ));
});

function get_custom_variable() {
    $value = get_option('custom_variable', 'default_value'); // Standardwert angeben
    return new WP_REST_Response(array('custom_variable' => $value), 200);
}
function get_custom_option() {
    // Hier definierst du den Wert, den du zurückgeben möchtest
    // Zum Beispiel, wenn die Option 'my_custom_option' gesetzt ist
    $value = get_option('my_custom_option');

    // Prüfe, ob der Wert existiert, andernfalls false zurückgeben
    return $value ? $value : false;
}
// // Beispiel für das Setzen einer benutzerdefinierten Option
// add_action('init', function () {
//     if (get_option('my_custom_option') === false) {
//         add_option('my_custom_option', 'Mein Wert'); // Setze den gewünschten Wert
//     }
// });
// functions.php oder ein Plugin
add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/stufe', array(
        'methods' => 'GET',
        'callback' => 'get_custom_field_stufe',
        'permission_callback' => '__return_true', // Berechtigungen für alle
    ));
});

// Hook für eine spezifische Aktion (zum Beispiel 'rest_api_init')
add_action('rest_api_init', 'register_my_custom_api_endpoint');

// Registriere einen benutzerdefinierten REST API Endpunkt
add_action('rest_api_init', 'register_my_custom_api_endpoint');

function register_my_custom_api_endpoint() {
    register_rest_route('custom/v1', '/option', array(
        'methods' => 'GET',
        'callback' => 'get_custom_field_stufe',
        'permission_callback' => '__return_true' // Ermöglicht den Zugriff ohne Authentifizierung
    ));
}

add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/custom-fields/(?P<post_id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_all_custom_fields',
        'permission_callback' => '__return_true', // Stelle sicher, dass die Berechtigungen hier festgelegt sind
    ));
});

function get_all_custom_fields($data) {
    $post_id = $data['post_id'];

    // Hole alle benutzerdefinierten Felder für den angegebenen Beitrag
    $custom_fields = get_post_meta($post_id);

    // Überprüfe, ob benutzerdefinierte Felder existieren
    if (empty($custom_fields)) {
        return new WP_Error('no_custom_fields', 'Keine benutzerdefinierten Felder gefunden', array('status' => 404));
    }

    // Rückgabe der benutzerdefinierten Felder
    return $custom_fields;
}


