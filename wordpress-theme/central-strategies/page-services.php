<?php
/**
 * Template Name: Services
 *
 * @package Central_Strategies
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">
    <!-- Services Hero -->
    <section id="services-hero" class="relative pt-20 overflow-hidden bg-slate-950">
      <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-brand-950" aria-hidden="true"></div>
      <div class="absolute inset-0 opacity-[0.04]" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 40px 40px;" aria-hidden="true"></div>
      <div class="absolute top-1/3 right-0 w-[600px] h-[600px] bg-cs-600/5 rounded-full blur-[120px]" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-brand-700/10 rounded-full blur-[100px]" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/40 to-transparent" aria-hidden="true"></div>

      <div class="relative max-w-site mx-auto px-5 lg:px-8 w-full py-24 lg:py-32">
        <div class="max-w-4xl mx-auto text-center">
          <h1 class="hero-h1 text-4xl sm:text-5xl lg:text-6xl xl:text-[4.1rem] font-extrabold text-white leading-[1.14] sm:leading-[1.12] lg:leading-[1.1] tracking-tight text-balance">
            <?php esc_html_e('Advanced IT Solutions That', 'central-strategies'); ?><br class="hidden xl:block" />
            <span class="text-cs-500"><?php esc_html_e('Drive Impact.', 'central-strategies'); ?></span>
          </h1>

          <p class="hero-p mt-7 text-lg lg:text-xl text-slate-400 leading-relaxed max-w-2xl mx-auto">
            <?php echo esc_html(get_theme_mod('cs_services_subheading', 'Three core disciplines. One integrated approach. We combine security, innovation, and operational excellence to deliver solutions that move the mission forward.')); ?>
          </p>

          <div class="hero-ctas mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="#service-disciplines" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-500 transition-all shadow-lg shadow-cs-600/25">
              <?php esc_html_e('Explore Our Solutions', 'central-strategies'); ?>
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
            </a>
            <a href="<?php echo esc_url(cs_contact_url()); ?>" class="inline-flex items-center justify-center px-8 py-4 text-white font-bold text-sm uppercase tracking-wider rounded border border-white/20 hover:bg-white/10 transition-all">
              <?php esc_html_e('Contact Us', 'central-strategies'); ?>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Three Service Disciplines -->
    <section id="service-disciplines" class="py-16 lg:py-20 bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12" data-animate="fade-up">
          <h2 class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
            <span class="w-8 h-px bg-cs-600" aria-hidden="true"></span>
            <?php esc_html_e('What We Do', 'central-strategies'); ?>
            <span class="w-8 h-px bg-cs-600" aria-hidden="true"></span>
          </h2>
          <p class="text-lg text-slate-500 leading-relaxed">
            <?php esc_html_e('Security, Innovation, and Operations. Like any mission-critical system, the power is not in the components alone - it is in how they work together.', 'central-strategies'); ?>
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6" data-stagger>
          <div class="bg-white rounded-xl border border-slate-200 p-8 text-center card-lift" data-animate="fade-up">
            <div class="w-11 h-11 bg-cs-50 rounded-xl flex items-center justify-center mx-auto mb-5">
              <svg class="w-5 h-5 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.9"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" /></svg>
            </div>
            <h3 class="text-lg font-extrabold text-slate-900 mb-2"><?php esc_html_e('Operations', 'central-strategies'); ?></h3>
            <p class="text-sm text-slate-500 leading-relaxed"><?php esc_html_e('Data engineering, analytics, and automation capabilities built to optimize every dollar.', 'central-strategies'); ?></p>
          </div>

          <div class="bg-white rounded-xl border border-slate-200 p-8 text-center card-lift" data-animate="fade-up">
            <div class="w-11 h-11 bg-brand-50 rounded-xl flex items-center justify-center mx-auto mb-5">
              <svg class="w-5 h-5 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.9"><path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" /></svg>
            </div>
            <h3 class="text-lg font-extrabold text-slate-900 mb-2"><?php esc_html_e('Innovation', 'central-strategies'); ?></h3>
            <p class="text-sm text-slate-500 leading-relaxed"><?php esc_html_e('Cloud modernization and AI-powered solutions that keep pace with emerging threats.', 'central-strategies'); ?></p>
          </div>

          <div class="bg-white rounded-xl border border-slate-200 p-8 text-center card-lift" data-animate="fade-up">
            <div class="w-11 h-11 bg-slate-100 rounded-xl flex items-center justify-center mx-auto mb-5">
              <svg class="w-5 h-5 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.9"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
            </div>
            <h3 class="text-lg font-extrabold text-slate-900 mb-2"><?php esc_html_e('Security', 'central-strategies'); ?></h3>
            <p class="text-sm text-slate-500 leading-relaxed"><?php esc_html_e('System engineering and cybersecurity solutions with full-lifecycle threat monitoring.', 'central-strategies'); ?></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Approach -->
    <section class="py-20 lg:py-24 bg-slate-50 border-y border-slate-100">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="max-w-4xl mx-auto text-center" data-animate="fade-up">
          <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
            <span class="w-8 h-px bg-cs-600"></span>
            <?php esc_html_e('Our Approach', 'central-strategies'); ?>
            <span class="w-8 h-px bg-cs-600"></span>
          </div>
          <h2 class="text-3xl sm:text-4xl lg:text-[2.75rem] font-extrabold text-slate-900 tracking-tight leading-relaxed text-balance">
            <?php esc_html_e('Mission complexity demands', 'central-strategies'); ?> <span class="text-cs-600"><?php esc_html_e('integrated delivery.', 'central-strategies'); ?></span>
          </h2>
          <p class="mt-6 text-lg text-slate-500 leading-relaxed max-w-2xl mx-auto">
            <?php esc_html_e('Government IT is complex, high-stakes, and constantly evolving. We take a fully integrated approach with our teams that is seamless across security, engineering, and data expertise.', 'central-strategies'); ?>
          </p>
        </div>

        <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-4 gap-5" data-stagger>
          <?php
          $cs_steps = array(
              array('num' => '01', 'title' => 'Discover', 'desc' => 'Deep-dive into mission environments and constraints to define the real problem.'),
              array('num' => '02', 'title' => 'Architect', 'desc' => 'Design solutions that balance innovation, compliance, security, and speed.'),
              array('num' => '03', 'title' => 'Deliver', 'desc' => 'Implement with agile sprints, transparent reporting, and continuous testing.'),
              array('num' => '04', 'title' => 'Sustain', 'desc' => 'Provide ongoing optimization, monitoring, and long-term mission support.'),
          );
          foreach ($cs_steps as $cs_step) :
          ?>
          <div class="bg-white rounded-xl border border-slate-200 p-6 text-center" data-animate="fade-up">
            <div class="text-cs-500 text-lg font-extrabold mb-4"><?php echo esc_html($cs_step['num']); ?></div>
            <h3 class="text-base font-bold text-slate-900 mb-2"><?php echo esc_html($cs_step['title']); ?></h3>
            <p class="text-sm text-slate-500 leading-relaxed"><?php echo esc_html($cs_step['desc']); ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Bottom CTA -->
    <section class="relative z-[1] -mt-8 lg:-mt-10 py-12 lg:py-14 overflow-hidden bg-slate-950">
      <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-brand-950" aria-hidden="true"></div>
      <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-cs-600/8 rounded-full blur-[100px]" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/30 to-transparent" aria-hidden="true"></div>

      <div class="relative max-w-site mx-auto px-5 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 text-cs-400 text-xs font-bold uppercase tracking-[0.2em] mb-3" data-animate="fade-in">
          <span class="w-8 h-px bg-cs-600"></span>
          <?php esc_html_e('Get Started', 'central-strategies'); ?>
          <span class="w-8 h-px bg-cs-600"></span>
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight max-w-3xl mx-auto leading-relaxed text-balance" data-animate="fade-up">
          <?php esc_html_e('Ready to Solve Your Most Difficult Challenges?', 'central-strategies'); ?>
        </h2>
        <div class="mt-5">
          <a href="<?php echo esc_url(cs_contact_url()); ?>" class="inline-flex items-center justify-center px-10 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-500 transition-colors shadow-lg shadow-cs-600/25">
            <?php esc_html_e('Contact Us', 'central-strategies'); ?>
          </a>
        </div>
      </div>
    </section>

</main>

<?php
get_footer();
