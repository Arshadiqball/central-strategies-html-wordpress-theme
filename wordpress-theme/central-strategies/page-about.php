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

    <!-- Hero — custom bg position keeps antennas + hull + water all in frame -->
    <section class="relative pt-20 min-h-[78vh] sm:min-h-[82vh] flex items-center overflow-hidden bg-slate-950">
      <div class="absolute inset-0 bg-slate-900 bg-cover brightness-110 saturate-[1.06]" style="background-image: url('<?php echo esc_url($cs_hero_bg_url); ?>'); background-position: center 35%;" aria-hidden="true"></div>
      <div class="absolute inset-0 bg-black/55" aria-hidden="true"></div>
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
    <section id="who-we-are" class="pt-20 lg:pt-28 pb-2 lg:pb-3 bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-10" data-animate="fade-up">
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
            <?php
            $cs_about_para1 = get_theme_mod('cs_about_para1', 'Central Strategies was founded by Nicolas Schellman, a retired United States Coast Guard Officer. After 20 years of honorable service, Nick wanted to continue to protect our nation and its people. Central Strategies is committed to delivering superior services through outstanding technology and teams.');
            $cs_about_para1 = str_ireplace('With an emphasis on IT solutions for federal industries, ', '', $cs_about_para1);
            echo esc_html($cs_about_para1);
            ?>
          </p>
        </div>
      </div>
    </section>

    <!-- Why Central Strategies -->
    <section class="pt-8 lg:pt-10 pb-12 lg:pb-16 bg-white" aria-labelledby="why-central-strategies-heading">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="text-center max-w-3xl mx-auto" data-animate="fade-up">
          <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
            <span class="w-8 h-px bg-cs-600/50"></span>
            <?php esc_html_e('Why Central Strategies', 'central-strategies'); ?>
            <span class="w-8 h-px bg-cs-600/50"></span>
          </div>
          <h2 id="why-central-strategies-heading" class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-normal text-balance">
            <?php esc_html_e('A partner you can', 'central-strategies'); ?> <span class="text-cs-600"><?php esc_html_e('trust.', 'central-strategies'); ?></span>
          </h2>
          <p class="mt-4 text-slate-500 leading-relaxed">
            <?php esc_html_e('When you work with Central Strategies, you work with a team that understands the stakes.', 'central-strategies'); ?>
          </p>
        </div>

        <div class="mt-12 lg:mt-14 grid gap-6 lg:gap-8 lg:grid-cols-2 max-w-5xl mx-auto" data-stagger>
          <div class="rounded-xl border border-slate-200 bg-white p-6 lg:p-7" data-animate="fade-up">
            <div class="flex items-center gap-3 mb-3">
              <div class="w-9 h-9 rounded-lg bg-cs-50 text-cs-600 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" /><circle cx="12" cy="12" r="3" /></svg>
              </div>
              <h3 class="text-lg font-extrabold text-slate-900"><?php esc_html_e('Our Mission', 'central-strategies'); ?></h3>
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
              <h3 class="text-lg font-extrabold text-slate-900"><?php esc_html_e('Our Vision', 'central-strategies'); ?></h3>
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
              <h3 class="text-lg font-extrabold text-slate-900"><?php esc_html_e('Our Commitment', 'central-strategies'); ?></h3>
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
              <h3 class="text-lg font-extrabold text-slate-900"><?php esc_html_e('Our Values', 'central-strategies'); ?></h3>
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
    <section class="relative pt-4 lg:pt-6 pb-24 lg:pb-32 overflow-hidden bg-white">
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
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('services')) ?: home_url('/services/')); ?>" class="inline-flex items-center justify-center px-10 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-700 transition-colors shadow-lg shadow-cs-600/20">
            <?php esc_html_e('View Solutions', 'central-strategies'); ?>
          </a>
        </div>
      </div>
    </section>

</main>

<?php
get_footer();
