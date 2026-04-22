<?php
/**
 * Template Name: Careers
 *
 * @package Central_Strategies
 */

if (!defined('ABSPATH')) {
    exit;
}

$cs_jobs_query = new WP_Query(array(
    'post_type'      => 'cs_job',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => array(
        'menu_order' => 'ASC',
        'date'       => 'DESC',
    ),
));

$cs_hero_image_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : '';
if (empty($cs_hero_image_url)) {
    $cs_hero_image_url = get_template_directory_uri() . '/assets/images/careers-team.png';
}
$cs_open_positions_url = trim((string) get_theme_mod('cs_careers_cta_url', ''));
if ($cs_open_positions_url === '' || $cs_open_positions_url === '#') {
    $cs_open_positions_url = '#openings';
}

get_header();
?>

<main id="primary" class="site-main">
  <section class="pt-20 lg:pt-24 pb-16 bg-white">
    <div class="max-w-site mx-auto px-5 lg:px-8">
      <div class="overflow-hidden border border-slate-200 bg-white">
        <div class="grid lg:grid-cols-2">
          <div class="min-h-[240px] lg:min-h-[380px]">
            <img src="<?php echo esc_url($cs_hero_image_url); ?>" alt="<?php esc_attr_e('Central Strategies team collaborating in the office', 'central-strategies'); ?>" width="1024" height="593" class="block w-full h-full min-h-[240px] lg:min-h-[380px] object-cover object-center" />
          </div>
          <div class="bg-slate-100 min-h-[240px] flex flex-col justify-center items-center text-center p-8 lg:p-12">
            <h1 class="text-3xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
              <?php echo esc_html(get_theme_mod('cs_careers_heading', 'Ready to join a great team?')); ?>
            </h1>
            <?php
            $cs_jobs_cta_scroll = (strpos($cs_open_positions_url, '#') === 0 && strlen($cs_open_positions_url) > 1);
            ?>
            <a href="<?php echo esc_url($cs_open_positions_url); ?>" class="mt-8 inline-flex items-center <?php echo $cs_jobs_cta_scroll ? 'gap-2' : 'justify-center'; ?> px-6 py-3 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider hover:bg-cs-500 transition-colors">
              <?php esc_html_e('View Jobs', 'central-strategies'); ?>
              <?php if ($cs_jobs_cta_scroll) : ?>
              <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
              <?php endif; ?>
            </a>
          </div>
        </div>
      </div>

      <div class="max-w-2xl mx-auto text-center mt-14">
        <p class="text-slate-600 leading-relaxed">
          <?php echo esc_html(get_theme_mod('cs_careers_desc', 'With an emphasis on hiring and developing top talent, Central Strategies is committed to deliver superior services and results to the public sector and the private sector.')); ?>
        </p>
      </div>
    </div>
  </section>

  <section id="openings" class="pb-20 bg-white">
    <div class="max-w-3xl mx-auto px-5 lg:px-8">
      <h2 class="text-center text-3xl font-extrabold text-cs-600 tracking-tight">
        <?php esc_html_e('Current Job Openings', 'central-strategies'); ?>
      </h2>

      <div class="mt-5 border border-slate-200 bg-white">
        <div class="border-b border-slate-200 p-2">
          <input
            id="cs-job-search"
            type="search"
            class="w-full border border-slate-200 px-3 py-2 text-sm text-slate-700 placeholder-slate-400 outline-none focus:border-cs-600 focus:ring-1 focus:ring-cs-600/20"
            placeholder="<?php esc_attr_e('Search by job title or location...', 'central-strategies'); ?>"
          />
        </div>
        <table class="w-full text-sm">
          <thead>
            <tr class="border-b border-slate-200 bg-slate-50">
              <th class="text-left px-4 py-2.5 font-bold text-slate-800"><?php esc_html_e('Job Title', 'central-strategies'); ?></th>
              <th class="text-left px-4 py-2.5 font-bold text-slate-800"><?php esc_html_e('Location', 'central-strategies'); ?></th>
            </tr>
          </thead>
          <tbody>
            <?php if ($cs_jobs_query->have_posts()) : ?>
              <?php while ($cs_jobs_query->have_posts()) : $cs_jobs_query->the_post(); ?>
                <?php
                $cs_job_type     = get_post_meta(get_the_ID(), '_cs_job_type', true);
                $cs_job_location = get_post_meta(get_the_ID(), '_cs_job_location', true);
                $cs_detail_url   = get_permalink();
                $cs_search_raw   = trim(get_the_title() . ' ' . $cs_job_location . ' ' . $cs_job_type);
                $cs_search_blob  = function_exists('mb_strtolower') ? mb_strtolower($cs_search_raw, 'UTF-8') : strtolower($cs_search_raw);
                ?>
                <tr class="border-b border-slate-100 last:border-b-0" data-job-row data-search="<?php echo esc_attr($cs_search_blob); ?>">
                  <td class="px-4 py-2.5 text-slate-700">
                    <a href="<?php echo esc_url($cs_detail_url); ?>" class="font-medium text-slate-800 hover:text-cs-600 transition-colors">
                      <?php the_title(); ?>
                    </a>
                    <?php if (!empty($cs_job_type)) : ?>
                      <div class="text-xs text-slate-500 mt-0.5"><?php echo esc_html($cs_job_type); ?></div>
                    <?php endif; ?>
                  </td>
                  <td class="px-4 py-2.5 text-slate-700"><?php echo esc_html($cs_job_location ?: __('Remote / TBD', 'central-strategies')); ?></td>
                </tr>
              <?php endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>
            <tr id="cs-job-empty-row" class="<?php echo $cs_jobs_query->have_posts() ? 'hidden' : ''; ?>">
              <td colspan="2" class="px-4 py-5 text-center text-slate-500">
                <?php esc_html_e('No current job openings available.', 'central-strategies'); ?>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
  var input = document.getElementById('cs-job-search');
  if (!input) return;
  var rows = Array.prototype.slice.call(document.querySelectorAll('[data-job-row]'));
  var emptyRow = document.getElementById('cs-job-empty-row');

  function filterRows() {
    var query = input.value.toLowerCase().trim();
    var visibleCount = 0;

    rows.forEach(function (row) {
      var haystack = row.getAttribute('data-search') || '';
      var isMatch = query === '' || haystack.indexOf(query) !== -1;
      row.classList.toggle('hidden', !isMatch);
      if (isMatch) visibleCount += 1;
    });

    if (emptyRow) {
      emptyRow.classList.toggle('hidden', visibleCount > 0);
    }
  }

  input.addEventListener('input', filterRows);
});
</script>

<?php
get_footer();
