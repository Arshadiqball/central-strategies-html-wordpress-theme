<?php
/**
 * Default page template — use Page Templates for About, Contact, etc., or the Block Editor.
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
	while (have_posts()) {
		the_post();
		the_title('<h1 class="text-3xl font-extrabold text-slate-900 mb-6">', '</h1>');
		the_content();
	}
	?>
</main>

<?php
get_footer();
