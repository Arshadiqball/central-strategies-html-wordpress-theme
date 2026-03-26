<?php
/**
 * Theme header — WordPress: header.php
 *
 * @package Central_Strategies
 */

if (!defined('ABSPATH')) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php
/**
 * Tailwind CDN + home/global CSS (matches static prototypes). Split into head-inner-contact.php etc. when you move to compiled CSS.
 */
get_template_part('template-parts/head/head-inner', 'home');
wp_head();
?>
</head>
<body <?php body_class('font-sans text-slate-700 bg-white antialiased'); ?>>
<?php
if (function_exists('wp_body_open')) {
    wp_body_open();
}
if (is_front_page()) {
    get_template_part('template-parts/header/site-header', 'home');
} else {
    get_template_part('template-parts/header/site-header', 'inner');
}
