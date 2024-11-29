<?php
defined( 'ABSPATH' ) or die( 'Cheatin&#8217; uh?' );
/**
 * Plugin Name: WP Rocket | Fix non-www to www and non-SSL to SSL redirections.
 * Description: Fixes redirection from non-www to www, and non-SSL to SSL URLs.
 * Author:      your name here
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */
add_filter( 'before_rocket_htaccess_rules', '__fix_wprocket_non_ssl_www_redirection' );
function __fix_wprocket_non_ssl_www_redirection( $marker ) {
    $redirection  = '# forçar / no final da url' . PHP_EOL;
    $redirection .= 'RewriteEngine On' . PHP_EOL;
    $redirection .= 'RewriteCond %{REQUEST_URI} !/wp-json/ [NC]' . PHP_EOL;
    $redirection .= 'RewriteCond %{REQUEST_URI} !/wp-admin/ [NC]' . PHP_EOL . PHP_EOL;
    $redirection .= 'RewriteCond %{REQUEST_URI} !(/$|\.)' . PHP_EOL . PHP_EOL;
    $redirection .= 'RewriteRule (.*[^\/])$ %{REQUEST_URI}/ [R=301,L]' . PHP_EOL . PHP_EOL;

    return $redirection . $marker;
}