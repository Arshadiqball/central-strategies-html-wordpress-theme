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

    <section class="relative pt-20 overflow-hidden bg-slate-950">
      <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-brand-950" aria-hidden="true"></div>
      <div class="absolute inset-0 opacity-[0.04]" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 40px 40px;" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/40 to-transparent" aria-hidden="true"></div>
      <div class="relative max-w-site mx-auto px-5 lg:px-8 w-full py-20 lg:py-24">
        <div class="hero-badge inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-cs-600/30 bg-cs-600/10 mb-8">
          <svg class="w-4 h-4 text-cs-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
          <span class="text-xs font-bold text-cs-300 uppercase tracking-widest"><?php esc_html_e('Services', 'central-strategies'); ?></span>
        </div>
        <h1 class="hero-h1 text-4xl sm:text-5xl lg:text-[3.5rem] font-extrabold text-white leading-[1.1] tracking-tight text-balance max-w-4xl">
          <?php esc_html_e('Our', 'central-strategies'); ?> <span class="text-cs-500"><?php esc_html_e('Solutions', 'central-strategies'); ?></span>
        </h1>
        <p class="hero-p mt-7 text-lg text-slate-400 leading-relaxed max-w-3xl">
          <?php esc_html_e('Enterprise-grade IT, cybersecurity, cloud, and AI solutions built to address the most complex challenges.', 'central-strategies'); ?>
        </p>
      </div>
    </section>

    <section class="py-16 lg:py-24 bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <?php the_content(); ?>
      </div>
    </section>

</main>

<?php
get_footer();
