<?php
/**
 * Central Strategies theme setup.
 *
 * @package Central_Strategies
 */

if (!defined('ABSPATH')) {
    exit;
}

define('CENTRAL_STRATEGIES_VERSION', '1.0.0');

/* ──────────────────────────────────────────────────────
   Theme setup
   ────────────────────────────────────────────────────── */
function central_strategies_setup() {
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 1080,
        'width'       => 1080,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'primary'          => __('Primary Navigation', 'central-strategies'),
        'mobile'           => __('Mobile Navigation', 'central-strategies'),
        'footer_solutions' => __('Footer — Our Solutions', 'central-strategies'),
        'footer_company'   => __('Footer — Company', 'central-strategies'),
        'footer_legal'     => __('Footer — Legal', 'central-strategies'),
    ));
}
add_action('after_setup_theme', 'central_strategies_setup');

/* ──────────────────────────────────────────────────────
   Enqueue scripts
   ────────────────────────────────────────────────────── */
function central_strategies_scripts() {
    wp_enqueue_script(
        'central-strategies-site',
        get_template_directory_uri() . '/assets/js/site-home.js',
        array(),
        CENTRAL_STRATEGIES_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'central_strategies_scripts');

/* ──────────────────────────────────────────────────────
   Custom Walker — Desktop nav (styled <a> tags)
   ────────────────────────────────────────────────────── */
class CS_Desktop_Nav_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes  = empty($item->classes) ? array() : (array) $item->classes;
        $active   = in_array('current-menu-item', $classes, true) || in_array('current_page_item', $classes, true);
        $color    = $active ? 'text-cs-600' : 'text-slate-500 hover:text-slate-900';
        $output  .= '<a href="' . esc_url($item->url) . '" class="relative px-2.5 xl:px-3 py-2 text-[12px] xl:text-[13px] font-semibold ' . esc_attr($color) . ' uppercase tracking-wider transition-colors">';
        $output  .= esc_html($item->title);
        $output  .= '</a>';
    }
    public function end_el(&$output, $item, $depth = 0, $args = null) {}
    public function start_lvl(&$output, $depth = 0, $args = null) {}
    public function end_lvl(&$output, $depth = 0, $args = null) {}
}

/* ──────────────────────────────────────────────────────
   Custom Walker — Mobile nav (styled <a> tags)
   ────────────────────────────────────────────────────── */
class CS_Mobile_Nav_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $active  = in_array('current-menu-item', $classes, true) || in_array('current_page_item', $classes, true);
        $color   = $active ? 'text-cs-600 bg-cs-50' : 'text-slate-600 hover:text-cs-600 hover:bg-cs-50';
        $output .= '<a href="' . esc_url($item->url) . '" class="mobile-link px-4 py-3 text-sm font-semibold ' . esc_attr($color) . ' rounded transition-colors">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }
    public function end_el(&$output, $item, $depth = 0, $args = null) {}
    public function start_lvl(&$output, $depth = 0, $args = null) {}
    public function end_lvl(&$output, $depth = 0, $args = null) {}
}

/* ──────────────────────────────────────────────────────
   Custom Walker — Footer columns (styled <li><a>)
   ────────────────────────────────────────────────────── */
class CS_Footer_Nav_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<li><a href="' . esc_url($item->url) . '" class="text-sm text-slate-500 hover:text-white transition-colors">';
        $output .= esc_html($item->title);
        $output .= '</a></li>';
    }
    public function end_el(&$output, $item, $depth = 0, $args = null) {}
    public function start_lvl(&$output, $depth = 0, $args = null) {}
    public function end_lvl(&$output, $depth = 0, $args = null) {}
}

/* ──────────────────────────────────────────────────────
   Helper: render the site logo (header or footer)
   ────────────────────────────────────────────────────── */
function cs_logo($variant = 'header') {
    $home = esc_url(home_url('/'));
    if ($variant === 'footer') {
        if (has_custom_logo()) {
            $logo_id  = get_theme_mod('custom_logo');
            $logo_url = wp_get_attachment_image_url($logo_id, 'full');
            echo '<a href="' . $home . '"><div class="overflow-hidden h-14 max-w-[min(100%,280px)] mb-4"><img src="' . esc_url($logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '" class="block h-[8rem] w-auto object-contain object-left brightness-0 invert origin-left -my-7" /></div></a>';
        } else {
            echo '<a href="' . $home . '" class="text-xl font-bold text-white">' . esc_html(get_bloginfo('name')) . '</a>';
        }
    } else {
        if (has_custom_logo()) {
            $logo_id  = get_theme_mod('custom_logo');
            $logo_url = wp_get_attachment_image_url($logo_id, 'full');
            echo '<a href="' . $home . '" class="shrink-0 flex items-center" aria-label="' . esc_attr(get_bloginfo('name')) . ' Home"><span class="inline-flex overflow-hidden h-16 max-w-[min(360px,88vw)] items-center"><img src="' . esc_url($logo_url) . '" alt="" width="1080" height="1080" decoding="async" class="block h-[8.5rem] w-auto object-contain object-left origin-left -my-8" /></span></a>';
        } else {
            echo '<a href="' . $home . '" class="text-xl font-bold text-slate-900">' . esc_html(get_bloginfo('name')) . '</a>';
        }
    }
}

/* ──────────────────────────────────────────────────────
   Helper: "Contact Us" CTA button URL (uses Contact page)
   ────────────────────────────────────────────────────── */
function cs_contact_url() {
    $page = get_page_by_path('contact');
    return $page ? get_permalink($page) : home_url('/contact/');
}
