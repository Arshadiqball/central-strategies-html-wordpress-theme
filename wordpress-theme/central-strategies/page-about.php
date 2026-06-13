<?php
/**
 * Template Name: About
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
    $cs_about_id    = get_queried_object_id();
    $cs_hero_thumb  = get_the_post_thumbnail_url($cs_about_id, 'full');
    $cs_hero_bg_url = $cs_hero_thumb
        ? $cs_hero_thumb
        : (get_template_directory_uri() . '/assets/images/about-hero-bg.jpg');
    ?>

    <!-- Hero — photo only (full width, natural aspect — avoids bg-cover crop/zoom) -->
    <section class="relative pt-20 overflow-hidden bg-slate-950" aria-label="<?php esc_attr_e('About', 'central-strategies'); ?>">
      <img
        src="<?php echo esc_url($cs_hero_bg_url); ?>"
        alt="<?php esc_attr_e('Central Strategies', 'central-strategies'); ?>"
        width="1024"
        height="512"
        class="block w-full h-auto"
        loading="eager"
        decoding="async"
        fetchpriority="high"
      />
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/40 to-transparent" aria-hidden="true"></div>
    </section>

    <!-- Who We Are -->
    <section id="who-we-are" class="pt-16 lg:pt-20 pb-0 bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-8" data-animate="fade-up">
          <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
            <span class="w-8 h-px bg-cs-600"></span>
            <?php esc_html_e('Who We Are', 'central-strategies'); ?>
            <span class="w-8 h-px bg-cs-600"></span>
          </div>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-normal text-balance">
            <?php echo esc_html(get_theme_mod('cs_about_heading', 'Built on service. Focused on results.')); ?>
          </h2>
        </div>

        <div class="max-w-3xl mx-auto text-lg text-slate-600 leading-relaxed mb-0" data-animate="fade-up">
          <p>
            <?php echo esc_html(get_theme_mod('cs_about_para1', 'Central Strategies was founded by Nicolas Schellman, a retired United States Coast Guard Officer. After 20 years of honorable service, Nick wanted to continue to protect our nation and its people. With an emphasis on hiring and developing top talents, Central Strategies is committed to deliver superior services and results to the public sector and the private sector.')); ?>
          </p>
        </div>
      </div>
    </section>

    <!-- Mission, vision, commitment, values -->
    <section class="pt-4 lg:pt-6 pb-12 lg:pb-16 bg-white" aria-label="<?php esc_attr_e('Mission and values', 'central-strategies'); ?>">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="grid gap-6 lg:gap-8 lg:grid-cols-2 max-w-5xl mx-auto" data-stagger>
          <div class="rounded-xl border border-slate-200 bg-white p-6 lg:p-7" data-animate="fade-up">
            <div class="flex items-center gap-3 mb-3">
              <div class="w-9 h-9 rounded-lg bg-cs-50 text-cs-600 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" /><circle cx="12" cy="12" r="3" /></svg>
              </div>
              <h2 class="text-lg font-extrabold text-slate-900"><?php esc_html_e('Our Mission', 'central-strategies'); ?></h2>
            </div>
            <p class="text-sm text-slate-500 leading-relaxed">
              <?php esc_html_e('To empower organizations and their people to solve critical challenges.', 'central-strategies'); ?>
            </p>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 lg:p-7" data-animate="fade-up">
            <div class="flex items-center gap-3 mb-3">
              <div class="w-9 h-9 rounded-lg bg-cs-50 text-cs-600 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
              </div>
              <h2 class="text-lg font-extrabold text-slate-900"><?php esc_html_e('Our Vision', 'central-strategies'); ?></h2>
            </div>
            <p class="text-sm text-slate-500 leading-relaxed">
              <?php esc_html_e('To foster superior teams and to create cutting-edge products and services that revolutionize industries, protect our nation, and ensure mission success.', 'central-strategies'); ?>
            </p>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 lg:p-7 lg:col-span-2" data-animate="fade-up">
            <div class="flex items-center gap-3 mb-3">
              <div class="w-9 h-9 rounded-lg bg-cs-50 text-cs-600 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z" /></svg>
              </div>
              <h2 class="text-lg font-extrabold text-slate-900"><?php esc_html_e('Our Commitment', 'central-strategies'); ?></h2>
            </div>
            <p class="text-sm text-slate-500 leading-relaxed">
              <?php
              echo wp_kses(
                  __('Through our <strong class="font-semibold text-slate-700">commitment</strong> to excellence, collaboration, and sustainable practices, we aim to make emerging technology accessible, inclusive, and beneficial for all. Our industry-leading experts integrate themselves into your organization, applying industry expertise, powerful solutions, and innovative technology to deliver sustainable results. Whether it&rsquo;s helping you lead an emerging technology integration, leverage technological automation to streamline operations, enhance productivity, and reduce costs, deliver cybersecurity services, or drive digital transformation, Central Strategies creates tailored, data-driven solutions that foster innovation, build stakeholder trust, and exceed organizational goals.', 'central-strategies'),
                  array('strong' => array('class' => true))
              );
              ?>
            </p>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-6 lg:p-7 lg:col-span-2" data-animate="fade-up">
            <div class="flex items-center gap-3 mb-4">
              <div class="w-9 h-9 rounded-lg bg-cs-50 text-cs-600 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
              </div>
              <h2 class="text-lg font-extrabold text-slate-900"><?php esc_html_e('Our Values', 'central-strategies'); ?></h2>
            </div>
            <ul class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-sm text-slate-600">
              <?php
              $cs_values = array(
                  __('Operational Excellence', 'central-strategies'),
                  __('Integrity', 'central-strategies'),
                  __('Courage', 'central-strategies'),
                  __('Responsibility to Team', 'central-strategies'),
              );
              foreach ($cs_values as $cs_value) :
              ?>
              <li class="flex items-start gap-2">
                <svg class="w-4 h-4 mt-0.5 text-cs-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                <span class="font-semibold text-slate-700"><?php echo esc_html($cs_value); ?></span>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="relative pt-12 lg:pt-16 pb-24 lg:pb-32 overflow-hidden bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-6" data-animate="fade-up">
          <span class="w-8 h-px bg-cs-600"></span>
          <?php esc_html_e('Learn More', 'central-strategies'); ?>
          <span class="w-8 h-px bg-cs-600"></span>
        </div>
        <div class="flex justify-center" data-animate="fade-up">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('services')) ?: home_url('/services/')); ?>" class="inline-flex items-center justify-center px-10 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-700 transition-colors shadow-lg shadow-cs-600/20">
            <?php esc_html_e('View Solutions', 'central-strategies'); ?>
          </a>
        </div>
      </div>
    </section>

</main>

<?php
get_footer();
