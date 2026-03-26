<?php
/**
 * Template Name: Contact
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
          <svg class="w-4 h-4 text-cs-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
          <span class="text-xs font-bold text-cs-300 uppercase tracking-widest"><?php esc_html_e('Contact', 'central-strategies'); ?></span>
        </div>
        <h1 class="hero-h1 text-4xl sm:text-5xl lg:text-[3.5rem] font-extrabold text-white leading-[1.1] tracking-tight text-balance max-w-4xl">
          <?php esc_html_e("Let's", 'central-strategies'); ?> <span class="text-cs-500"><?php esc_html_e('Connect', 'central-strategies'); ?></span>
        </h1>
        <p class="hero-p mt-7 text-lg text-slate-400 leading-relaxed max-w-3xl">
          <?php esc_html_e("Whether you have a question, need a proposal, or want to discuss a new initiative — we're ready to help.", 'central-strategies'); ?>
        </p>
      </div>
    </section>

    <section class="py-16 lg:py-24 bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="max-w-3xl mx-auto">
          <?php the_content(); ?>
        </div>
      </div>
    </section>

</main>

<?php
get_footer();
