<?php
/**
 * Template Name: Careers
 *
 * @package Central_Strategies
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero -->
    <section class="relative pt-20 overflow-hidden bg-slate-950">
      <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-brand-950" aria-hidden="true"></div>
      <div class="absolute inset-0 opacity-[0.04]" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 40px 40px;" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/40 to-transparent" aria-hidden="true"></div>
      <div class="absolute top-1/3 right-0 w-[600px] h-[600px] bg-cs-600/5 rounded-full blur-[120px]" aria-hidden="true"></div>

      <div class="relative max-w-site mx-auto px-5 lg:px-8 w-full py-24 lg:py-32">
        <div class="max-w-4xl">
          <div class="hero-badge inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-cs-600/30 bg-cs-600/10 mb-8">
            <svg class="w-4 h-4 text-cs-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
            <span class="text-xs font-bold text-cs-300 uppercase tracking-widest"><?php esc_html_e('Careers', 'central-strategies'); ?></span>
          </div>
          <h1 class="hero-h1 text-4xl sm:text-5xl lg:text-6xl xl:text-[4.25rem] font-extrabold text-white leading-[1.08] tracking-tight text-balance">
            <?php echo esc_html(get_theme_mod('cs_careers_heading', 'Join Our Mission')); ?>
          </h1>
          <p class="hero-p mt-7 text-lg lg:text-xl text-slate-400 leading-relaxed max-w-2xl">
            <?php echo esc_html(get_theme_mod('cs_careers_desc', "We're always looking for talented professionals who are passionate about making a difference through technology. Join a veteran-led team where your work directly supports critical missions.")); ?>
          </p>
          <div class="hero-ctas mt-10">
            <a href="<?php echo esc_url(get_theme_mod('cs_careers_cta_url', '#')); ?>" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-500 transition-all shadow-lg shadow-cs-600/25">
              <?php esc_html_e('View Open Positions', 'central-strategies'); ?>
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Roles We're Hiring -->
    <section class="py-16 lg:py-20 bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-14" data-animate="fade-up">
          <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
            <span class="w-8 h-px bg-cs-600"></span>
            <?php esc_html_e('Open Roles', 'central-strategies'); ?>
            <span class="w-8 h-px bg-cs-600"></span>
          </div>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
            <?php esc_html_e('We\'re Looking For', 'central-strategies'); ?>
          </h2>
        </div>

        <div class="flex flex-wrap justify-center gap-4" data-stagger>
          <?php
          $cs_tag_defaults = array('Cybersecurity Analysts', 'Cloud Engineers', 'Data Scientists', 'Program Managers', 'System Engineers');
          for ($cs_i = 1; $cs_i <= 5; $cs_i++) :
              $cs_tag = get_theme_mod("cs_careers_tag{$cs_i}", $cs_tag_defaults[$cs_i - 1]);
              if (empty(trim($cs_tag))) continue;
          ?>
          <span class="px-6 py-3 bg-white text-slate-700 text-sm font-semibold rounded-xl border border-slate-200 hover:border-cs-200 hover:shadow-md transition-all" data-animate="fade-up"><?php echo esc_html($cs_tag); ?></span>
          <?php endfor; ?>
        </div>

        <!-- Stats -->
        <div class="mt-16 grid sm:grid-cols-2 lg:grid-cols-4 gap-6" data-stagger>
          <?php
          $cs_career_stats = array(
              array('value' => get_theme_mod('cs_careers_stat1_value', '50+'),   'label' => get_theme_mod('cs_careers_stat1_label', 'Team Members')),
              array('value' => get_theme_mod('cs_careers_stat2_value', '85%'),   'label' => get_theme_mod('cs_careers_stat2_label', 'Cleared Staff')),
              array('value' => get_theme_mod('cs_careers_stat3_value', '4.8/5'), 'label' => get_theme_mod('cs_careers_stat3_label', 'Glassdoor Rating')),
              array('value' => get_theme_mod('cs_careers_stat4_value', '100%'),  'label' => get_theme_mod('cs_careers_stat4_label', 'Remote Friendly')),
          );
          foreach ($cs_career_stats as $cs_cstat) :
          ?>
          <div class="bg-slate-50 rounded-xl p-8 border border-slate-200 text-center" data-animate="fade-up">
            <div class="text-3xl font-extrabold text-cs-600"><?php echo esc_html($cs_cstat['value']); ?></div>
            <div class="mt-1 text-sm text-slate-500 font-medium"><?php echo esc_html($cs_cstat['label']); ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <?php get_template_part('template-parts/sections/section', 'cta'); ?>

</main>

<?php
get_footer();
