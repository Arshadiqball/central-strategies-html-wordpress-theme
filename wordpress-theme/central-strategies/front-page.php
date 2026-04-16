<?php
/**
 * Front page template — ultra-lean single hero.
 *
 * @package Central_Strategies
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">
	<?php get_template_part('template-parts/sections/section', 'hero'); ?>
	<?php get_template_part('template-parts/sections/section', 'capabilities-banner'); ?>
</main>

<?php
get_footer();
