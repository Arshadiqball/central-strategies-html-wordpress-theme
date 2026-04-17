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
    add_theme_support('customize-selective-refresh-widgets');
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
   Favicon: explicit link tags for Google / Bing
   WordPress outputs basic site_icon via wp_head(), but
   search engines need apple-touch-icon and explicit sizes.
   ────────────────────────────────────────────────────── */
function cs_output_favicon_tags() {
    if (!has_site_icon()) {
        return;
    }
    $icon_32  = get_site_icon_url(32);
    $icon_180 = get_site_icon_url(180);
    $icon_192 = get_site_icon_url(192);
    $icon_270 = get_site_icon_url(270);

    echo '<link rel="icon" type="image/png" sizes="32x32" href="' . esc_url($icon_32) . '" />' . "\n";
    echo '<link rel="icon" type="image/png" sizes="192x192" href="' . esc_url($icon_192) . '" />' . "\n";
    echo '<link rel="apple-touch-icon" sizes="180x180" href="' . esc_url($icon_180) . '" />' . "\n";
    echo '<meta name="msapplication-TileImage" content="' . esc_url($icon_270) . '" />' . "\n";
}
add_action('wp_head', 'cs_output_favicon_tags', 4);

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
        $output .= '<li><a href="' . esc_url($item->url) . '" class="text-sm text-slate-400 hover:text-white transition-colors">';
        $output .= esc_html($item->title);
        $output .= '</a></li>';
    }
    public function end_el(&$output, $item, $depth = 0, $args = null) {}
    public function start_lvl(&$output, $depth = 0, $args = null) {}
    public function end_lvl(&$output, $depth = 0, $args = null) {}
}

/* ──────────────────────────────────────────────────────
   Fallback: footer Company column (when no menu is set)
   ────────────────────────────────────────────────────── */
function cs_footer_company_fallback() {
    $links = array(
        ''         => __('Home', 'central-strategies'),
        'about'    => __('About', 'central-strategies'),
        'services' => __('Solutions', 'central-strategies'),
        'careers'  => __('Careers', 'central-strategies'),
    );
    echo '<ul class="space-y-3">';
    foreach ($links as $slug => $label) {
        if ($slug === '') {
            $url = home_url('/');
        } else {
            $page = get_page_by_path($slug);
            $url  = $page ? get_permalink($page) : home_url('/' . $slug . '/');
        }
        echo '<li><a href="' . esc_url($url) . '" class="text-sm text-slate-400 hover:text-white transition-colors">' . esc_html($label) . '</a></li>';
    }
    echo '</ul>';
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

/* ──────────────────────────────────────────────────────
   Helper: Careers page URL (for breadcrumbs / listings)
   ────────────────────────────────────────────────────── */
function cs_careers_page_url() {
    $page = get_page_by_path('careers');
    return $page ? get_permalink($page) : home_url('/careers/');
}

/* ──────────────────────────────────────────────────────
   Flush permalinks once after job CPT becomes public
   ────────────────────────────────────────────────────── */
function cs_maybe_flush_job_public_rewrites() {
    if (get_option('cs_job_public_rewrites_v1') === '1') {
        return;
    }
    flush_rewrite_rules(false);
    update_option('cs_job_public_rewrites_v1', '1');
}
add_action('init', 'cs_maybe_flush_job_public_rewrites', 999);

/* ──────────────────────────────────────────────────────
   Theme activation: auto-create & assign page templates
   ────────────────────────────────────────────────────── */
function cs_setup_default_pages() {
    $pages = array(
        array(
            'title'    => 'Home',
            'slug'     => 'home',
            'template' => '',          // front-page.php handles this
        ),
        array(
            'title'    => 'Contact',
            'slug'     => 'contact',
            'template' => 'page-contact.php',
        ),
        array(
            'title'    => 'Services',
            'slug'     => 'services',
            'template' => 'page-services.php',
        ),
        array(
            'title'    => 'About',
            'slug'     => 'about',
            'template' => 'page-about.php',
        ),
        array(
            'title'    => 'Careers',
            'slug'     => 'careers',
            'template' => 'page-careers.php',
        ),
    );

    foreach ($pages as $page_data) {
        $existing = get_page_by_path($page_data['slug']);

        if ($existing) {
            // Page exists — ensure the correct template is assigned
            if ($page_data['template'] && get_post_meta($existing->ID, '_wp_page_template', true) !== $page_data['template']) {
                update_post_meta($existing->ID, '_wp_page_template', $page_data['template']);
            }
        } else {
            // Create the page
            $new_id = wp_insert_post(array(
                'post_title'   => $page_data['title'],
                'post_name'    => $page_data['slug'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            ));
            if ($new_id && !is_wp_error($new_id) && $page_data['template']) {
                update_post_meta($new_id, '_wp_page_template', $page_data['template']);
            }
        }
    }
}
add_action('after_switch_theme', 'cs_setup_default_pages');

// Also run once via admin_init if templates are not yet set (fixes existing installs)
function cs_maybe_fix_page_templates() {
    if (get_option('cs_templates_assigned') === '2') {
        return;
    }
    $map = array(
        'contact'  => 'page-contact.php',
        'services' => 'page-services.php',
        'about'    => 'page-about.php',
        'careers'  => 'page-careers.php',
    );
    foreach ($map as $slug => $template) {
        $page = get_page_by_path($slug);
        if ($page) {
            update_post_meta($page->ID, '_wp_page_template', $template);
        }
    }
    update_option('cs_templates_assigned', '2');
}
add_action('admin_init', 'cs_maybe_fix_page_templates');

/* ──────────────────────────────────────────────────────
   Helper: home URL (used in footer badges)
   ────────────────────────────────────────────────────── */
function cs_logo_home_url() {
    return esc_url(home_url('/'));
}

/* ──────────────────────────────────────────────────────
   Custom Post Type: Contact Inquiry (form submissions)
   ────────────────────────────────────────────────────── */
function cs_register_contact_inquiry_cpt() {
    register_post_type('cs_inquiry', array(
        'labels' => array(
            'name'               => __('Contact Inquiries', 'central-strategies'),
            'singular_name'      => __('Inquiry', 'central-strategies'),
            'all_items'          => __('All Inquiries', 'central-strategies'),
            'view_item'          => __('View Inquiry', 'central-strategies'),
            'not_found'          => __('No inquiries found.', 'central-strategies'),
            'not_found_in_trash' => __('No inquiries in trash.', 'central-strategies'),
        ),
        'public'        => false,
        'show_ui'       => true,
        'show_in_menu'  => true,
        'supports'      => array('title'),
        'menu_icon'     => 'dashicons-email-alt',
        'menu_position' => 25,
        'rewrite'       => false,
        'capabilities'  => array(
            'create_posts' => 'do_not_allow',
        ),
        'map_meta_cap'  => true,
    ));
}
add_action('init', 'cs_register_contact_inquiry_cpt');

/* ── Admin columns for Contact Inquiries ── */
function cs_inquiry_columns($columns) {
    return array(
        'cb'           => $columns['cb'],
        'title'        => __('Name', 'central-strategies'),
        'cs_email'     => __('Email', 'central-strategies'),
        'cs_phone'     => __('Phone', 'central-strategies'),
        'cs_message'   => __('Message', 'central-strategies'),
        'cs_status'    => __('Status', 'central-strategies'),
        'date'         => __('Date', 'central-strategies'),
    );
}
add_filter('manage_cs_inquiry_posts_columns', 'cs_inquiry_columns');

function cs_inquiry_column_content($column, $post_id) {
    switch ($column) {
        case 'cs_email':
            $email = get_post_meta($post_id, '_cs_email', true);
            echo $email ? '<a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a>' : '—';
            break;
        case 'cs_phone':
            echo esc_html(get_post_meta($post_id, '_cs_phone', true) ?: '—');
            break;
        case 'cs_message':
            $msg = get_post_meta($post_id, '_cs_message', true);
            echo '<span title="' . esc_attr($msg) . '">' . esc_html(wp_trim_words($msg, 12, '…')) . '</span>';
            break;
        case 'cs_status':
            $status = get_post_meta($post_id, '_cs_status', true) ?: 'new';
            $labels = array('new' => '🟢 New', 'read' => '⚪ Read', 'replied' => '🔵 Replied');
            echo isset($labels[$status]) ? $labels[$status] : esc_html($status);
            break;
    }
}
add_action('manage_cs_inquiry_posts_custom_column', 'cs_inquiry_column_content', 10, 2);

/* ── Make columns sortable ── */
function cs_inquiry_sortable_columns($columns) {
    $columns['cs_status'] = 'cs_status';
    return $columns;
}
add_filter('manage_edit-cs_inquiry_sortable_columns', 'cs_inquiry_sortable_columns');

/* ── Meta box: full inquiry detail view + status ── */
function cs_inquiry_detail_meta_box() {
    add_meta_box('cs_inquiry_detail', __('Inquiry Details', 'central-strategies'), 'cs_inquiry_detail_cb', 'cs_inquiry', 'normal', 'high');
    add_meta_box('cs_inquiry_status', __('Status', 'central-strategies'), 'cs_inquiry_status_cb', 'cs_inquiry', 'side', 'high');
}
add_action('add_meta_boxes', 'cs_inquiry_detail_meta_box');

function cs_inquiry_detail_cb($post) {
    $fields = array(
        'Name'    => get_the_title($post->ID),
        'Email'   => get_post_meta($post->ID, '_cs_email', true),
        'Phone'   => get_post_meta($post->ID, '_cs_phone', true) ?: '—',
        'Message' => get_post_meta($post->ID, '_cs_message', true),
    );
    echo '<table class="widefat" style="border:0"><tbody>';
    foreach ($fields as $label => $value) {
        echo '<tr>';
        echo '<th style="width:100px;padding:10px 12px;font-weight:600;vertical-align:top">' . esc_html($label) . '</th>';
        echo '<td style="padding:10px 12px">' . ($label === 'Email'
            ? '<a href="mailto:' . esc_attr($value) . '">' . esc_html($value) . '</a>'
            : nl2br(esc_html($value))
        ) . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
    // Mark as read automatically when opened
    if (get_post_meta($post->ID, '_cs_status', true) === 'new') {
        update_post_meta($post->ID, '_cs_status', 'read');
    }
}

function cs_inquiry_status_cb($post) {
    wp_nonce_field('cs_inquiry_status_save', 'cs_inquiry_status_nonce');
    $status = get_post_meta($post->ID, '_cs_status', true) ?: 'new';
    $options = array(
        'new'     => 'New',
        'read'    => 'Read',
        'replied' => 'Replied',
    );
    echo '<select name="cs_inquiry_status" style="width:100%">';
    foreach ($options as $key => $label) {
        echo '<option value="' . esc_attr($key) . '"' . selected($status, $key, false) . '>' . esc_html($label) . '</option>';
    }
    echo '</select>';
}

function cs_save_inquiry_status($post_id) {
    if (!isset($_POST['cs_inquiry_status_nonce']) || !wp_verify_nonce($_POST['cs_inquiry_status_nonce'], 'cs_inquiry_status_save')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if (isset($_POST['cs_inquiry_status'])) {
        $allowed = array('new', 'read', 'replied');
        $val = sanitize_key($_POST['cs_inquiry_status']);
        if (in_array($val, $allowed, true)) {
            update_post_meta($post_id, '_cs_status', $val);
        }
    }
}
add_action('save_post_cs_inquiry', 'cs_save_inquiry_status');

/* ── Dashboard badge: count new inquiries ── */
function cs_inquiry_admin_menu_badge() {
    $new_count = wp_count_posts('cs_inquiry');
    $new = isset($new_count->publish) ? (int) $new_count->publish : 0;
    // Count those with status = 'new'
    $new_unread = (int) (new WP_Query(array(
        'post_type'      => 'cs_inquiry',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'meta_query'     => array(array('key' => '_cs_status', 'value' => 'new', 'compare' => '=')),
        'fields'         => 'ids',
    )))->found_posts;
    if ($new_unread > 0) {
        global $menu;
        foreach ($menu as &$item) {
            if (isset($item[5]) && $item[5] === 'menu-posts-cs_inquiry') {
                $item[0] .= ' <span class="awaiting-mod">' . $new_unread . '</span>';
                break;
            }
        }
    }
}
add_action('admin_menu', 'cs_inquiry_admin_menu_badge');

/* ──────────────────────────────────────────────────────
   Custom Post Type: Career Applications (job apply form submissions)
   ────────────────────────────────────────────────────── */
function cs_register_career_application_cpt() {
    register_post_type('cs_career_application', array(
        'labels' => array(
            'name'               => __('Career Applications', 'central-strategies'),
            'singular_name'      => __('Career Application', 'central-strategies'),
            'all_items'          => __('Career Applications', 'central-strategies'),
            'view_item'          => __('View Application', 'central-strategies'),
            'not_found'          => __('No applications found.', 'central-strategies'),
            'not_found_in_trash' => __('No applications in trash.', 'central-strategies'),
        ),
        'public'        => false,
        'show_ui'       => true,
        'show_in_menu'  => true,
        'supports'      => array('title'),
        'menu_icon'     => 'dashicons-clipboard',
        'menu_position' => 23,
        'rewrite'       => false,
        'capabilities'  => array(
            'create_posts' => 'do_not_allow',
        ),
        'map_meta_cap'  => true,
    ));
}
add_action('init', 'cs_register_career_application_cpt');

function cs_career_application_columns($columns) {
    return array(
        'cb'           => $columns['cb'],
        'title'        => __('Applicant', 'central-strategies'),
        'cs_email'     => __('Email', 'central-strategies'),
        'cs_phone'     => __('Phone', 'central-strategies'),
        'cs_job'       => __('Job', 'central-strategies'),
        'cs_message'   => __('Cover letter', 'central-strategies'),
        'cs_status'    => __('Status', 'central-strategies'),
        'date'         => __('Date', 'central-strategies'),
    );
}
add_filter('manage_cs_career_application_posts_columns', 'cs_career_application_columns');

function cs_career_application_column_content($column, $post_id) {
    switch ($column) {
        case 'cs_email':
            $email = get_post_meta($post_id, '_cs_email', true);
            echo $email ? '<a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a>' : '—';
            break;
        case 'cs_phone':
            echo esc_html(get_post_meta($post_id, '_cs_phone', true) ?: '—');
            break;
        case 'cs_job':
            $jid   = (int) get_post_meta($post_id, '_cs_job_id', true);
            $title = get_post_meta($post_id, '_cs_job_title', true);
            if ($jid && get_post_status($jid)) {
                echo '<a href="' . esc_url(get_edit_post_link($jid, 'raw')) . '">' . esc_html($title ?: get_the_title($jid)) . '</a>';
            } else {
                echo esc_html($title ?: '—');
            }
            break;
        case 'cs_message':
            $msg = get_post_meta($post_id, '_cs_message', true);
            echo '<span title="' . esc_attr($msg) . '">' . esc_html(wp_trim_words($msg, 14, '…')) . '</span>';
            break;
        case 'cs_status':
            $status = get_post_meta($post_id, '_cs_status', true) ?: 'new';
            $labels = array('new' => '🟢 New', 'read' => '⚪ Read', 'replied' => '🔵 Replied');
            echo isset($labels[$status]) ? $labels[$status] : esc_html($status);
            break;
    }
}
add_action('manage_cs_career_application_posts_custom_column', 'cs_career_application_column_content', 10, 2);

function cs_career_application_sortable_columns($columns) {
    $columns['cs_status'] = 'cs_status';
    return $columns;
}
add_filter('manage_edit-cs_career_application_sortable_columns', 'cs_career_application_sortable_columns');

function cs_career_application_detail_meta_box() {
    add_meta_box('cs_career_application_detail', __('Application Details', 'central-strategies'), 'cs_career_application_detail_cb', 'cs_career_application', 'normal', 'high');
    add_meta_box('cs_career_application_status', __('Status', 'central-strategies'), 'cs_career_application_status_cb', 'cs_career_application', 'side', 'high');
}
add_action('add_meta_boxes', 'cs_career_application_detail_meta_box');

function cs_career_application_detail_cb($post) {
    $job_id    = (int) get_post_meta($post->ID, '_cs_job_id', true);
    $job_title = get_post_meta($post->ID, '_cs_job_title', true);
    $link_url  = get_post_meta($post->ID, '_cs_link_url', true);
    $email     = get_post_meta($post->ID, '_cs_email', true);
    $phone     = get_post_meta($post->ID, '_cs_phone', true);
    $message   = get_post_meta($post->ID, '_cs_message', true);
    $job_label = $job_title ?: ($job_id ? get_the_title($job_id) : '—');

    echo '<table class="widefat" style="border:0"><tbody>';
    echo '<tr><th style="width:160px;padding:10px 12px;font-weight:600;vertical-align:top">' . esc_html__('Applicant name', 'central-strategies') . '</th><td style="padding:10px 12px">' . esc_html(get_the_title($post->ID)) . '</td></tr>';
    echo '<tr><th style="padding:10px 12px;font-weight:600;vertical-align:top">' . esc_html__('Email', 'central-strategies') . '</th><td style="padding:10px 12px">';
    echo $email && is_email($email) ? '<a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a>' : esc_html($email ?: '—');
    echo '</td></tr>';
    echo '<tr><th style="padding:10px 12px;font-weight:600;vertical-align:top">' . esc_html__('Phone', 'central-strategies') . '</th><td style="padding:10px 12px">' . esc_html($phone ?: '—') . '</td></tr>';
    echo '<tr><th style="padding:10px 12px;font-weight:600;vertical-align:top">' . esc_html__('Job applied for', 'central-strategies') . '</th><td style="padding:10px 12px">' . esc_html($job_label) . '</td></tr>';
    echo '<tr><th style="padding:10px 12px;font-weight:600;vertical-align:top">' . esc_html__('LinkedIn / portfolio URL', 'central-strategies') . '</th><td style="padding:10px 12px">';
    if (!empty($link_url)) {
        echo '<a href="' . esc_url($link_url) . '" target="_blank" rel="noopener noreferrer">' . esc_html($link_url) . '</a>';
    } else {
        echo '—';
    }
    echo '</td></tr>';
    echo '<tr><th style="padding:10px 12px;font-weight:600;vertical-align:top">' . esc_html__('Cover letter', 'central-strategies') . '</th><td style="padding:10px 12px">' . nl2br(esc_html($message)) . '</td></tr>';

    if ($job_id && get_post($job_id)) {
        echo '<tr><th style="padding:10px 12px;font-weight:600;vertical-align:top">' . esc_html__('Job listing', 'central-strategies') . '</th><td style="padding:10px 12px">';
        echo '<a href="' . esc_url(get_edit_post_link($job_id, 'raw')) . '">' . esc_html__('Edit job in WordPress', 'central-strategies') . '</a>';
        echo ' · <a href="' . esc_url(get_permalink($job_id)) . '" target="_blank" rel="noopener noreferrer">' . esc_html__('View live posting', 'central-strategies') . '</a>';
        echo '</td></tr>';
    }
    echo '</tbody></table>';
    if (get_post_meta($post->ID, '_cs_status', true) === 'new') {
        update_post_meta($post->ID, '_cs_status', 'read');
    }
}

function cs_career_application_status_cb($post) {
    wp_nonce_field('cs_career_application_status_save', 'cs_career_application_status_nonce');
    $status = get_post_meta($post->ID, '_cs_status', true) ?: 'new';
    $options = array(
        'new'     => 'New',
        'read'    => 'Read',
        'replied' => 'Replied',
    );
    echo '<select name="cs_career_application_status" style="width:100%">';
    foreach ($options as $key => $label) {
        echo '<option value="' . esc_attr($key) . '"' . selected($status, $key, false) . '>' . esc_html($label) . '</option>';
    }
    echo '</select>';
}

function cs_save_career_application_status($post_id) {
    if (!isset($_POST['cs_career_application_status_nonce']) || !wp_verify_nonce($_POST['cs_career_application_status_nonce'], 'cs_career_application_status_save')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if (isset($_POST['cs_career_application_status'])) {
        $allowed = array('new', 'read', 'replied');
        $val = sanitize_key($_POST['cs_career_application_status']);
        if (in_array($val, $allowed, true)) {
            update_post_meta($post_id, '_cs_status', $val);
        }
    }
}
add_action('save_post_cs_career_application', 'cs_save_career_application_status');

function cs_career_application_admin_menu_badge() {
    $new_unread = (int) (new WP_Query(array(
        'post_type'      => 'cs_career_application',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'meta_query'     => array(array('key' => '_cs_status', 'value' => 'new', 'compare' => '=')),
        'fields'         => 'ids',
    )))->found_posts;
    if ($new_unread > 0) {
        global $menu;
        foreach ($menu as &$item) {
            if (isset($item[5]) && $item[5] === 'menu-posts-cs_career_application') {
                $item[0] .= ' <span class="awaiting-mod">' . $new_unread . '</span>';
                break;
            }
        }
    }
}
add_action('admin_menu', 'cs_career_application_admin_menu_badge');

/* ──────────────────────────────────────────────────────
   Custom Post Type: Service (Solutions section cards)
   ────────────────────────────────────────────────────── */
function cs_register_post_types() {
    register_post_type('cs_service', array(
        'labels' => array(
            'name'          => __('Services', 'central-strategies'),
            'singular_name' => __('Service', 'central-strategies'),
            'add_new_item'  => __('Add New Service', 'central-strategies'),
            'edit_item'     => __('Edit Service', 'central-strategies'),
            'not_found'     => __('No services found.', 'central-strategies'),
        ),
        'public'        => false,
        'show_ui'       => true,
        'show_in_menu'  => true,
        'supports'      => array('title', 'editor', 'excerpt', 'page-attributes'),
        'menu_icon'     => 'dashicons-desktop',
        'menu_position' => 20,
        'rewrite'       => false,
    ));

    register_post_type('cs_job', array(
        'labels' => array(
            'name'          => __('Jobs', 'central-strategies'),
            'singular_name' => __('Job', 'central-strategies'),
            'add_new_item'  => __('Add New Job', 'central-strategies'),
            'edit_item'     => __('Edit Job', 'central-strategies'),
            'view_item'     => __('View Job', 'central-strategies'),
            'not_found'     => __('No jobs found.', 'central-strategies'),
        ),
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => false,
        'exclude_from_search' => true,
        'supports'            => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
        'menu_icon'           => 'dashicons-id',
        'menu_position'       => 21,
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => 'careers/job',
            'with_front' => false,
        ),
    ));
}
add_action('init', 'cs_register_post_types');

/* ── Service icon meta box ── */
function cs_service_meta_boxes() {
    add_meta_box('cs_service_icon', __('Service Icon', 'central-strategies'), 'cs_service_icon_cb', 'cs_service', 'side');
    add_meta_box('cs_service_link', __('Card Link URL', 'central-strategies'), 'cs_service_link_cb', 'cs_service', 'side');
}
add_action('add_meta_boxes', 'cs_service_meta_boxes');

function cs_job_meta_boxes() {
    add_meta_box('cs_job_details', __('Job Details', 'central-strategies'), 'cs_job_details_cb', 'cs_job', 'side');
}
add_action('add_meta_boxes', 'cs_job_meta_boxes');

function cs_service_icon_cb($post) {
    wp_nonce_field('cs_service_meta', 'cs_service_meta_nonce');
    $icons   = cs_service_icon_options();
    $current = get_post_meta($post->ID, '_cs_service_icon', true) ?: 'data-engineering';
    echo '<select name="cs_service_icon" style="width:100%">';
    foreach ($icons as $key => $label) {
        echo '<option value="' . esc_attr($key) . '"' . selected($current, $key, false) . '>' . esc_html($label) . '</option>';
    }
    echo '</select>';
}

function cs_service_link_cb($post) {
    $url = get_post_meta($post->ID, '_cs_service_link', true);
    echo '<input type="url" name="cs_service_link" value="' . esc_attr($url) . '" placeholder="https://..." style="width:100%" />';
    echo '<p class="description">Leave blank to hide "Learn More" link.</p>';
}

function cs_job_details_cb($post) {
    wp_nonce_field('cs_job_meta', 'cs_job_meta_nonce');
    $type     = get_post_meta($post->ID, '_cs_job_type', true);
    $location = get_post_meta($post->ID, '_cs_job_location', true);

    echo '<p><label for="cs_job_type"><strong>' . esc_html__('Job Type', 'central-strategies') . '</strong></label></p>';
    echo '<input id="cs_job_type" type="text" name="cs_job_type" value="' . esc_attr($type) . '" placeholder="' . esc_attr__('Full-time', 'central-strategies') . '" style="width:100%" />';

    echo '<p style="margin-top:10px"><label for="cs_job_location"><strong>' . esc_html__('Location', 'central-strategies') . '</strong></label></p>';
    echo '<input id="cs_job_location" type="text" name="cs_job_location" value="' . esc_attr($location) . '" placeholder="' . esc_attr__('Washington, DC (Hybrid)', 'central-strategies') . '" style="width:100%" />';

    echo '<p class="description" style="margin-top:12px">' . esc_html__('Candidates apply on the public job page; submissions appear under Career Applications.', 'central-strategies') . '</p>';
}

function cs_save_service_meta($post_id) {
    if (!isset($_POST['cs_service_meta_nonce']) || !wp_verify_nonce($_POST['cs_service_meta_nonce'], 'cs_service_meta')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if (isset($_POST['cs_service_icon'])) {
        update_post_meta($post_id, '_cs_service_icon', sanitize_key($_POST['cs_service_icon']));
    }
    if (isset($_POST['cs_service_link'])) {
        update_post_meta($post_id, '_cs_service_link', esc_url_raw($_POST['cs_service_link']));
    }
}
add_action('save_post_cs_service', 'cs_save_service_meta');

function cs_save_job_meta($post_id) {
    if (!isset($_POST['cs_job_meta_nonce']) || !wp_verify_nonce($_POST['cs_job_meta_nonce'], 'cs_job_meta')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['cs_job_type'])) {
        update_post_meta($post_id, '_cs_job_type', sanitize_text_field($_POST['cs_job_type']));
    }
    if (isset($_POST['cs_job_location'])) {
        update_post_meta($post_id, '_cs_job_location', sanitize_text_field($_POST['cs_job_location']));
    }
}
add_action('save_post_cs_job', 'cs_save_job_meta');

function cs_job_columns($columns) {
    return array(
        'cb'              => $columns['cb'],
        'title'           => __('Position', 'central-strategies'),
        'cs_job_type'     => __('Type', 'central-strategies'),
        'cs_job_location' => __('Location', 'central-strategies'),
        'date'            => __('Date', 'central-strategies'),
    );
}
add_filter('manage_cs_job_posts_columns', 'cs_job_columns');

function cs_job_column_content($column, $post_id) {
    if ($column === 'cs_job_type') {
        echo esc_html(get_post_meta($post_id, '_cs_job_type', true) ?: '—');
    }
    if ($column === 'cs_job_location') {
        echo esc_html(get_post_meta($post_id, '_cs_job_location', true) ?: '—');
    }
}
add_action('manage_cs_job_posts_custom_column', 'cs_job_column_content', 10, 2);

function cs_service_icon_options() {
    return array(
        'data-engineering'   => 'Data Engineering',
        'cloud-computing'    => 'Cloud Computing',
        'cybersecurity'      => 'Cybersecurity',
        'enterprise-it'      => 'Enterprise IT Management',
        'ai-ml'              => 'AI / ML',
        'data-analytics'     => 'Data Analytics & BI',
        'automation'         => 'Technological Automation',
        'system-engineering' => 'System Engineering',
        'budget-planning'    => 'Budget Planning & Audit',
    );
}

function cs_service_icon_svg($key) {
    $map = array(
        'data-engineering'   => '<svg class="w-5 h-5 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" /></svg>',
        'cloud-computing'    => '<svg class="w-5 h-5 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" /></svg>',
        'cybersecurity'      => '<svg class="w-5 h-5 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>',
        'enterprise-it'      => '<svg class="w-5 h-5 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>',
        'ai-ml'              => '<svg class="w-5 h-5 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>',
        'data-analytics'     => '<svg class="w-5 h-5 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>',
        'automation'         => '<svg class="w-5 h-5 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>',
        'system-engineering' => '<svg class="w-5 h-5 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>',
        'budget-planning'    => '<svg class="w-5 h-5 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>',
    );
    return isset($map[$key]) ? $map[$key] : $map['data-engineering'];
}

/* Default services data (used as fallback when no cs_service posts exist) */
function cs_default_services() {
    return array(
        array('icon' => 'data-engineering',   'title' => 'Data Engineering',                         'desc' => 'Build resilient data pipelines, lakes, and platforms that turn raw data into actionable intelligence at scale.',                                               'link' => '#'),
        array('icon' => 'cloud-computing',    'title' => 'Cloud Computing',                          'desc' => 'Secure cloud migration, hybrid architecture, and infrastructure optimization for scalable operations.',                                                       'link' => '#'),
        array('icon' => 'cybersecurity',      'title' => 'Cybersecurity',                            'desc' => 'Threat assessment, zero-trust architecture, and continuous monitoring for critical infrastructure.',                                                          'link' => '#'),
        array('icon' => 'enterprise-it',      'title' => 'Enterprise IT Management &amp; Innovation','desc' => 'End-to-end IT management, modernization, and strategic technology innovation for enterprises.',                                                               'link' => '#'),
        array('icon' => 'ai-ml',              'title' => 'AI / ML',                                  'desc' => 'Artificial intelligence and machine learning solutions for predictive analytics and intelligent automation.',                                                  'link' => '#'),
        array('icon' => 'data-analytics',     'title' => 'Data Analytics &amp; Business Intelligence','desc' => 'Turn raw data into actionable insights with advanced analytics, dashboards, and reporting platforms.',                                                       'link' => '#'),
        array('icon' => 'automation',         'title' => 'Technological Automation',                 'desc' => 'Streamline workflows, reduce manual effort, and accelerate operations through intelligent automation.',                                                       'link' => '#'),
        array('icon' => 'system-engineering', 'title' => 'System Engineering',                       'desc' => 'Full-lifecycle system engineering, architecture design, and integration for complex IT ecosystems.',                                                          'link' => '#'),
        array('icon' => 'budget-planning',    'title' => 'Budget Planning, Accounting &amp; Audit',  'desc' => 'Financial planning, audit readiness, and accounting services aligned with federal standards.',                                                                'link' => '#'),
    );
}

/* ──────────────────────────────────────────────────────
   Customizer: register all homepage section settings
   ────────────────────────────────────────────────────── */
function cs_customize_register($wp_customize) {

    // Panels
    $wp_customize->add_panel('cs_homepage', array(
        'title'    => __('Homepage Sections', 'central-strategies'),
        'priority' => 30,
    ));
    $wp_customize->add_panel('cs_company', array(
        'title'    => __('Company Info', 'central-strategies'),
        'priority' => 31,
    ));

    // Helper: register a text or textarea setting + control in one call
    $reg = function($id, $label, $section, $default = '', $type = 'text') use ($wp_customize) {
        $wp_customize->add_setting($id, array(
            'default'           => $default,
            'sanitize_callback' => ($type === 'textarea') ? 'sanitize_textarea_field' : 'sanitize_text_field',
            'transport'         => 'refresh',
        ));
        $wp_customize->add_control($id, array(
            'label'   => $label,
            'section' => $section,
            'type'    => $type,
        ));
    };

    // ── Hero ────────────────────────────────────────────
    $wp_customize->add_section('cs_hero', array(
        'title' => __('Hero Section', 'central-strategies'), 'panel' => 'cs_homepage', 'priority' => 10,
    ));
    $reg('cs_hero_heading',     'Headline',      'cs_hero', 'Mission-Driven Intelligence & Government Advisory');
    $reg('cs_hero_subheading',  'Sub-headline',  'cs_hero', 'Central Strategies provides mission-aligned IT solutions that enable federal agencies to improve performance, strengthen operational resilience, and address complex technical challenges.', 'textarea');

    // ── About ───────────────────────────────────────────
    $wp_customize->add_section('cs_about', array(
        'title' => __('About Section', 'central-strategies'), 'panel' => 'cs_homepage', 'priority' => 30,
    ));
    $reg('cs_about_hero_title',       'About page — hero title',       'cs_about', 'Our Story');
    $reg('cs_about_hero_subheading',  'About page — hero intro',       'cs_about', 'The mission of Central Strategies is to protect our nation and its people through technology, talent, and trusted partnerships.', 'textarea');
    $reg('cs_about_para1',         'About Text',      'cs_about', 'Central Strategies was founded by Nicolas Schellman, a retired United States Coast Guard Officer. After 20 years of honorable service, Nick wanted to continue to protect our nation and its people. With an emphasis on IT solutions for federal industries, Central Strategies is committed to delivering superior services through outstanding technology and teams.', 'textarea');
    $reg('cs_about_pillar1_title', 'Capability 1',    'cs_about', 'Strategic advisory');
    $reg('cs_about_pillar2_title', 'Capability 2',    'cs_about', 'Program support');
    $reg('cs_about_pillar3_title', 'Capability 3',    'cs_about', 'Research & analysis');
    $reg('cs_about_pillar4_title', 'Capability 4',    'cs_about', 'Technology & innovation strategy');
    $reg('cs_about_cta_heading',    'About page — CTA heading', 'cs_about', 'Ready to work with a team that puts mission first?');
    $reg('cs_about_cta_subheading', 'About page — CTA subtext', 'cs_about', "Let's discuss how we can support your organization with custom information technology solutions.", 'textarea');

    // ── Careers ─────────────────────────────────────────
    $wp_customize->add_section('cs_careers', array(
        'title' => __('Careers Section', 'central-strategies'), 'panel' => 'cs_homepage', 'priority' => 70,
    ));
    $reg('cs_careers_heading',      'Heading',     'cs_careers', 'Join Our Mission');
    $reg('cs_careers_desc',         'Description', 'cs_careers', "We're always looking for talented professionals who are passionate about making a difference through technology. Join a veteran-led team where your work directly supports critical missions.", 'textarea');
    $reg('cs_careers_cta_url',      'Button URL',  'cs_careers', '#openings');
    $reg('cs_careers_job_about_text', 'Job page — “About” intro', 'cs_careers', 'Central Strategies is a Service-Disabled Veteran-Owned Small Business (SDVOSB) delivering mission-aligned information technology solutions for federal agencies and enterprise partners. We combine disciplined execution, cleared expertise, and modern engineering practices to help clients improve performance, strengthen resilience, and navigate complex technical challenges.', 'textarea');
    $tag_defaults = array('Cybersecurity Analysts', 'Cloud Engineers', 'Data Scientists', 'Program Managers', 'System Engineers');
    for ($i = 1; $i <= 5; $i++) {
        $reg("cs_careers_tag{$i}", "Job Tag {$i}", 'cs_careers', $tag_defaults[$i - 1]);
    }
    $reg('cs_careers_stat1_value', 'Stat 1 Value', 'cs_careers', '50+');
    $reg('cs_careers_stat1_label', 'Stat 1 Label', 'cs_careers', 'Team Members');
    $reg('cs_careers_stat2_value', 'Stat 2 Value', 'cs_careers', '85%');
    $reg('cs_careers_stat2_label', 'Stat 2 Label', 'cs_careers', 'Cleared Staff');
    $reg('cs_careers_stat3_value', 'Stat 3 Value', 'cs_careers', '4.8/5');
    $reg('cs_careers_stat3_label', 'Stat 3 Label', 'cs_careers', 'Glassdoor Rating');
    $reg('cs_careers_stat4_value', 'Stat 4 Value', 'cs_careers', '100%');
    $reg('cs_careers_stat4_label', 'Stat 4 Label', 'cs_careers', 'Remote Friendly');

    // ── Company Info ────────────────────────────────────
    $wp_customize->add_section('cs_company_info', array(
        'title' => __('Contact &amp; Identity', 'central-strategies'), 'panel' => 'cs_company', 'priority' => 10,
    ));
    $reg('cs_phone',      'Phone Number', 'cs_company_info', '(703) 873-7049');
    $reg('cs_email',      'Email Address','cs_company_info', 'info@centralstrategies.com');
    $reg('cs_address',    'Address',      'cs_company_info', 'Washington DC–Baltimore Area, United States', 'textarea');
    $reg('cs_cage_code',     'CAGE Code',     'cs_company_info', '9L4U3');
    $reg('cs_uei_number',    'UEI Number',    'cs_company_info', 'RVF8RK4SJRG8');
    $reg('cs_gsa_schedule',  'GSA Schedule',  'cs_company_info', 'GSA MAS');
    $reg('cs_footer_tagline', 'Footer — tagline', 'cs_company_info', 'A Veteran-Owned technology company specializing in advanced IT solutions that drive innovation, enhance efficiency, and solve complex challenges.', 'textarea');
    $reg('cs_footer_legal_name', 'Footer — copyright legal name', 'cs_company_info', 'Central Strategies, LLC');
}
add_action('customize_register', 'cs_customize_register');
