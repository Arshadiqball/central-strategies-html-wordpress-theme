<?php
/**
 * Main fallback template.
 *
 * @package Central_Strategies
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main max-w-site mx-auto px-5 py-24">
	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			the_content();
		}
	} else {
		echo '<p>' . esc_html__('No content found.', 'central-strategies') . '</p>';
	}
	?>
</main>

<?php
get_footer();
