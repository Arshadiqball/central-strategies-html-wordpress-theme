    <!-- ============================================================
         CTA SECTION
         WordPress: template-parts/sections/section-cta.php
         ============================================================ -->
    <section id="contact" class="relative w-full py-14 lg:py-16 overflow-hidden bg-slate-950">
      <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-brand-950" aria-hidden="true"></div>
      <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-cs-600/8 rounded-full blur-[100px]" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/30 to-transparent" aria-hidden="true"></div>

      <div class="relative z-[1] w-full max-w-site mx-auto px-5 lg:px-8 text-center">
        <div class="inline-flex items-center justify-center gap-2 text-cs-400 text-xs font-bold uppercase tracking-[0.2em] mb-3" data-animate="fade-in">
          <span class="w-8 h-px bg-cs-600 shrink-0"></span>
          <?php esc_html_e('Get Started', 'central-strategies'); ?>
          <span class="w-8 h-px bg-cs-600 shrink-0"></span>
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight max-w-3xl mx-auto leading-normal text-balance" data-animate="fade-up">
          <?php echo esc_html(get_theme_mod('cs_cta_heading', 'Ready to Solve Your Most Difficult Challenges?')); ?>
        </h2>
        <?php
        $cs_phone     = get_theme_mod('cs_phone', '(703) 873-7049');
        $cs_phone_raw = preg_replace('/[^0-9+]/', '', $cs_phone);
        ?>
        <div class="mt-5 flex flex-col sm:flex-row items-center justify-center gap-4" data-animate="fade-up">
          <a href="<?php echo esc_url(cs_contact_url()); ?>" class="inline-flex items-center justify-center px-10 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-500 transition-colors shadow-lg shadow-cs-600/25">
            <?php esc_html_e('Contact Us', 'central-strategies'); ?>
          </a>
          <?php if ($cs_phone) : ?>
          <a href="tel:+1<?php echo esc_attr($cs_phone_raw); ?>" class="inline-flex items-center gap-2 px-10 py-4 text-white/80 font-semibold text-sm rounded border border-white/10 hover:bg-white/5 transition-all">
            <?php echo esc_html(sprintf(__('Call %s', 'central-strategies'), $cs_phone)); ?>
          </a>
          <?php endif; ?>
        </div>
      </div>
    </section>
