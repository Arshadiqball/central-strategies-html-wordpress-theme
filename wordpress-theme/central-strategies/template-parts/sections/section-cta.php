    <!-- ============================================================
         CTA SECTION
         WordPress: template-parts/sections/section-cta.php
         ============================================================ -->
    <section id="contact" class="relative w-full py-24 lg:py-32 overflow-hidden bg-slate-950">
      <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-brand-950" aria-hidden="true"></div>
      <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-cs-600/8 rounded-full blur-[100px]" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/30 to-transparent" aria-hidden="true"></div>

      <div class="relative z-[1] w-full max-w-site mx-auto px-5 lg:px-8 text-center">
        <div class="inline-flex items-center justify-center gap-2 text-cs-400 text-xs font-bold uppercase tracking-[0.2em] mb-6" data-animate="fade-in">
          <span class="w-8 h-px bg-cs-600 shrink-0"></span>
          <?php esc_html_e('Get Started', 'central-strategies'); ?>
          <span class="w-8 h-px bg-cs-600 shrink-0"></span>
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight max-w-3xl mx-auto leading-tight text-balance" data-animate="fade-up">
          <?php esc_html_e('Ready to Solve Your Most Difficult Challenges?', 'central-strategies'); ?>
        </h2>
        <p class="mt-6 text-lg text-slate-400 max-w-xl mx-auto leading-relaxed" data-animate="fade-up">
          <?php esc_html_e('Our experts deliver tailored solutions that drive innovation, enhance efficiency, and create lasting impact. Let\'s discuss your mission.', 'central-strategies'); ?>
        </p>
        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4" data-animate="fade-up">
          <a href="<?php echo esc_url(cs_contact_url()); ?>" class="inline-flex items-center gap-2 px-10 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-500 transition-colors shadow-lg shadow-cs-600/25">
            <?php esc_html_e('Contact Us', 'central-strategies'); ?>
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
          </a>
          <a href="tel:+17038737049" class="inline-flex items-center gap-2 px-10 py-4 text-white/80 font-semibold text-sm rounded border border-white/10 hover:bg-white/5 transition-all">
            <?php esc_html_e('Call (703) 873-7049', 'central-strategies'); ?>
          </a>
        </div>
      </div>
    </section>
