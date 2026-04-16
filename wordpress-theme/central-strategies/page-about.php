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
    $cs_about_id = get_queried_object_id();
    $cs_hero_bg  = get_the_post_thumbnail_url($cs_about_id, 'full');

    $cs_about_hero_title = get_theme_mod('cs_about_hero_title', 'Our Story');
    $cs_about_hero_title_html = preg_replace(
      '/(Story)/i',
      '<span class="text-cs-500">$1</span>',
      esc_html($cs_about_hero_title),
      1
    );
    ?>

    <!-- Hero -->
    <section class="relative pt-20 min-h-[74vh] flex items-center overflow-hidden bg-slate-950">
      <?php if ($cs_hero_bg) : ?>
      <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo esc_url($cs_hero_bg); ?>');" aria-hidden="true"></div>
      <div class="absolute inset-0 bg-slate-950/65" aria-hidden="true"></div>
      <?php else : ?>
      <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-brand-950" aria-hidden="true"></div>
      <?php endif; ?>
      <div class="absolute inset-0 opacity-[0.04]" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.35) 1px, transparent 0); background-size: 40px 40px;" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/40 to-transparent" aria-hidden="true"></div>
      <div class="relative max-w-site mx-auto px-5 lg:px-8 w-full py-20 lg:py-24">
        <div class="max-w-4xl">
          <div class="hero-badge inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-cs-600/30 bg-cs-600/10 mb-8">
            <svg class="w-4 h-4 text-cs-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
            <span class="text-xs font-bold text-cs-300 uppercase tracking-widest"><?php esc_html_e('About Us', 'central-strategies'); ?></span>
          </div>

          <h1 class="hero-h1 text-4xl sm:text-5xl lg:text-[4rem] font-extrabold text-white leading-[1.05] tracking-tight text-balance">
            <?php echo wp_kses($cs_about_hero_title_html, array('span' => array('class' => true))); ?>
          </h1>

          <p class="hero-p mt-7 text-lg text-slate-200/85 leading-relaxed max-w-3xl">
            <?php echo esc_html(get_theme_mod('cs_about_hero_subheading', 'Founded by a retired United States Coast Guard officer, Central Strategies carries forward a mission to protect our nation and its people through technology, talent, and trusted partnerships.')); ?>
          </p>

          <div class="hero-ctas mt-10 flex flex-col sm:flex-row gap-4">
            <a href="#who-we-are" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-500 transition-all shadow-lg shadow-cs-600/25">
              <?php esc_html_e('Read More', 'central-strategies'); ?>
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
            </a>
            <a href="<?php echo esc_url(cs_contact_url()); ?>" class="inline-flex items-center justify-center gap-2 px-8 py-4 text-white font-bold text-sm uppercase tracking-wider rounded border border-white/20 hover:bg-white/10 transition-all">
              <?php esc_html_e('Contact Us', 'central-strategies'); ?>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Who We Are -->
    <section id="who-we-are" class="py-20 lg:py-28 bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-14" data-animate="fade-up">
          <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
            <span class="w-8 h-px bg-cs-600"></span>
            <?php esc_html_e('Who We Are', 'central-strategies'); ?>
            <span class="w-8 h-px bg-cs-600"></span>
          </div>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
            <?php echo esc_html(get_theme_mod('cs_about_heading', 'Built on service. Focused on results.')); ?>
          </h2>
        </div>

        <div class="max-w-3xl mx-auto text-lg text-slate-600 leading-relaxed" data-animate="fade-up">
          <p>
            <?php echo esc_html(get_theme_mod('cs_about_para1', 'Central Strategies was founded by Nicolas Schellman, a retired United States Coast Guard Officer. After 20 years of honorable service, Nick wanted to continue to protect our nation and its people. With an emphasis on hiring and developing top talents, Central Strategies is committed to deliver superior services and results to the public sector and the private sector.')); ?>
          </p>
        </div>
      </div>
    </section>

    <!-- Mission & Vision -->
    <section class="relative py-20 lg:py-28 bg-slate-950 overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-brand-950" aria-hidden="true"></div>
      <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 32px 32px;" aria-hidden="true"></div>
      <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/30 to-transparent" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/30 to-transparent" aria-hidden="true"></div>

      <div class="relative max-w-site mx-auto px-5 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-stretch">
          <div class="relative flex flex-col" data-animate="fade-up">
            <div class="flex items-center gap-3 mb-8">
              <div class="w-10 h-10 rounded-lg bg-cs-600 flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
              </div>
              <span class="text-xs font-bold text-cs-400 uppercase tracking-[0.2em]"><?php esc_html_e('Our Mission', 'central-strategies'); ?></span>
            </div>
            <blockquote class="flex-1">
              <p class="text-2xl sm:text-3xl lg:text-[2rem] font-extrabold text-white leading-snug tracking-tight">
                <?php echo esc_html(get_theme_mod('cs_about_mission', 'To empower organizations and their people to solve critical challenges.')); ?>
              </p>
            </blockquote>
            <div class="mt-8 pt-8 border-t border-white/10">
              <p class="text-sm text-slate-400 leading-relaxed">
                <?php echo esc_html(get_theme_mod('cs_about_mission_support', 'We build trusted, resilient capabilities with measurable outcomes - enabling teams to move faster with confidence and clarity.')); ?>
              </p>
            </div>
          </div>

          <div class="relative flex flex-col" data-animate="fade-up">
            <div class="hidden lg:block absolute -left-8 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-white/10 to-transparent" aria-hidden="true"></div>
            <div class="flex items-center gap-3 mb-8">
              <div class="w-10 h-10 rounded-lg bg-brand-600 flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
              </div>
              <span class="text-xs font-bold text-brand-400 uppercase tracking-[0.2em]"><?php esc_html_e('Our Vision', 'central-strategies'); ?></span>
            </div>
            <blockquote class="flex-1">
              <p class="text-2xl sm:text-3xl lg:text-[2rem] font-extrabold text-white leading-snug tracking-tight">
                <?php echo esc_html(get_theme_mod('cs_about_vision', 'To foster superior teams and to create cutting-edge products and services that revolutionize industries, protect our nation, and ensure mission success.')); ?>
              </p>
            </blockquote>
            <div class="mt-8 pt-8 border-t border-white/10">
              <p class="text-sm text-slate-400 leading-relaxed">
                <?php echo esc_html(get_theme_mod('cs_about_vision_support', 'Shaping future-ready organizations through innovation, service, and technology that advances mission outcomes at scale.')); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="relative py-20 lg:py-24 overflow-hidden bg-white border-t border-slate-100">
      <div class="max-w-site mx-auto px-5 lg:px-8 text-center">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight max-w-2xl mx-auto leading-tight text-balance" data-animate="fade-up">
          <?php echo esc_html(get_theme_mod('cs_about_cta_heading', 'Ready to work with a team that puts mission first?')); ?>
        </h2>
        <p class="mt-5 text-slate-500 max-w-xl mx-auto leading-relaxed" data-animate="fade-up">
          <?php echo esc_html(get_theme_mod('cs_about_cta_subheading', 'Let us discuss how we can support your organization with tailored technology and consulting solutions.')); ?>
        </p>
        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4" data-animate="fade-up">
          <a href="<?php echo esc_url(cs_contact_url()); ?>" class="inline-flex items-center gap-2 px-10 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-700 transition-colors shadow-lg shadow-cs-600/20">
            <?php esc_html_e('Contact Us', 'central-strategies'); ?>
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
          </a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('services')) ?: home_url('/services/')); ?>" class="inline-flex items-center gap-2 px-10 py-4 text-slate-700 font-bold text-sm uppercase tracking-wider rounded border border-slate-200 hover:border-cs-200 hover:bg-cs-50 transition-all">
            <?php esc_html_e('View Services', 'central-strategies'); ?>
          </a>
        </div>
      </div>
    </section>

</main>

<?php
get_footer();
