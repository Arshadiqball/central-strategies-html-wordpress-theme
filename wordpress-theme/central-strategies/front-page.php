<?php
/**
 * Front page template — maps to static central-strategies.html
 *
 * @package Central_Strategies
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">

	<?php
	/**
	 * Sections map 1:1 to template-parts/sections/*.php (extracted from central-strategies.html).
	 */
	get_template_part('template-parts/sections/section', 'hero');
	get_template_part('template-parts/sections/section', 'solutions');
	get_template_part('template-parts/sections/section', 'clients');
	get_template_part('template-parts/sections/section', 'about');
	get_template_part('template-parts/sections/section', 'stats');
	get_template_part('template-parts/sections/section', 'insights');
	get_template_part('template-parts/sections/section', 'cta');
	get_template_part('template-parts/sections/section', 'careers');
	?>

</main>

<?php
get_footer();
