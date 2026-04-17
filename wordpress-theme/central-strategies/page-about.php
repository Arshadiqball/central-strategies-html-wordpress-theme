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
      <div class="absolute inset-0 bg-slate-900 bg-cover bg-center brightness-110 saturate-[1.06]" style="background-image: url('<?php echo esc_url($cs_hero_bg_url); ?>');" aria-hidden="true"></div>
      <div class="absolute inset-0 bg-gradient-to-r from-slate-950/78 via-slate-950/38 to-slate-950/12" aria-hidden="true"></div>
      <div class="absolute inset-0 opacity-[0.025]" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.35) 1px, transparent 0); background-size: 40px 40px;" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/40 to-transparent" aria-hidden="true"></div>
      <div class="relative max-w-site mx-auto px-5 lg:px-8 w-full py-20 lg:py-24">
        <div class="max-w-4xl">
          <div class="hero-badge inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-cs-600/30 bg-cs-600/10 mb-8">
            <svg class="w-4 h-4 text-cs-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
            <span class="text-xs font-bold text-cs-300 uppercase tracking-widest"><?php esc_html_e('About Us', 'central-strategies'); ?></span>
          </div>

          <h1 class="hero-h1 text-4xl sm:text-5xl lg:text-[4rem] font-extrabold text-white leading-[1.14] sm:leading-[1.12] lg:leading-[1.1] tracking-tight text-balance">
            <?php echo wp_kses($cs_about_hero_title_html, array('span' => array('class' => true))); ?>
          </h1>

          <p class="hero-p mt-7 text-lg text-slate-200/85 leading-relaxed max-w-3xl">
            <?php echo esc_html(get_theme_mod('cs_about_hero_subheading', 'The mission of Central Strategies is to protect our nation and its people through technology, talent, and trusted partnerships.')); ?>
          </p>

          <div class="hero-ctas mt-10">
            <a href="#who-we-are" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-500 transition-all shadow-lg shadow-cs-600/25">
              <?php esc_html_e('Read More', 'central-strategies'); ?>
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
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
          <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-normal text-balance">
            <?php echo esc_html(get_theme_mod('cs_about_heading', 'Built on service. Focused on results.')); ?>
          </h2>
        </div>

        <div class="max-w-3xl mx-auto text-lg text-slate-600 leading-relaxed" data-animate="fade-up">
          <p>
            <?php echo esc_html(get_theme_mod('cs_about_para1', 'Central Strategies was founded by Nicolas Schellman, a retired United States Coast Guard Officer. After 20 years of honorable service, Nick wanted to continue to protect our nation and its people. With an emphasis on IT solutions for federal industries, Central Strategies is committed to delivering superior services through outstanding technology and teams.')); ?>
          </p>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="relative py-20 lg:py-24 overflow-hidden bg-white border-t border-slate-100">
      <div class="max-w-site mx-auto px-5 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4" data-animate="fade-up">
          <span class="w-8 h-px bg-cs-600"></span>
          <?php esc_html_e('Learn More', 'central-strategies'); ?>
          <span class="w-8 h-px bg-cs-600"></span>
        </div>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight max-w-2xl mx-auto leading-normal text-balance" data-animate="fade-up">
          <?php echo esc_html(get_theme_mod('cs_about_cta_heading', 'Ready to work with a team that puts mission first?')); ?>
        </h2>
        <p class="mt-5 text-slate-500 max-w-xl mx-auto leading-relaxed" data-animate="fade-up">
          <?php echo esc_html(get_theme_mod('cs_about_cta_subheading', "Let's discuss how we can support your organization with custom information technology solutions.")); ?>
        </p>
        <div class="mt-8 flex justify-center" data-animate="fade-up">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('services')) ?: home_url('/services/')); ?>" class="inline-flex items-center gap-2 px-10 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-700 transition-colors shadow-lg shadow-cs-600/20">
            <?php esc_html_e('View Solutions', 'central-strategies'); ?>
          </a>
        </div>
      </div>
    </section>

</main>

<?php
get_footer();
