    <?php
    $hero_heading = get_theme_mod('cs_hero_heading', 'We Help Organizations Achieve More.');
    $hero_subheading = get_theme_mod(
      'cs_hero_subheading',
      'Our experts deliver tailored solutions to help organizations solve the most difficult challenges. Central Strategies specializes in advanced IT solutions that drive innovation, enhance efficiency, and solve complex challenges.'
    );

    // Keep heading editable from WordPress while styling key phrase in red.
    $hero_heading_highlighted = preg_replace(
      '/(Achieve More\.?)/i',
      '<span class="text-cs-500">$1</span>',
      esc_html($hero_heading),
      1
    );
    ?>

    <section id="hero" class="relative min-h-[90vh] flex items-center pt-16 lg:pt-24 overflow-hidden bg-slate-950">
      <div class="absolute inset-0 bg-gradient-to-br from-[#070b17] via-[#0b1223] to-[#111628]" aria-hidden="true"></div>
      <div class="absolute inset-0 opacity-[0.08]" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.12) 1px, transparent 0); background-size: 46px 46px;" aria-hidden="true"></div>
      <div class="absolute top-1/2 -translate-y-1/2 right-[-120px] w-[540px] h-[540px] bg-cs-600/10 rounded-full blur-[120px]" aria-hidden="true"></div>
      <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-cs-500/45 to-transparent" aria-hidden="true"></div>

      <div class="relative max-w-site mx-auto px-5 lg:px-8 w-full py-16 lg:py-24">
        <div class="grid items-center gap-12 lg:gap-8 lg:grid-cols-2">
          <div class="max-w-2xl">
            <div class="hero-badge h-7 w-60 bg-black/85 rounded-sm mb-8"></div>

            <h1 class="hero-h1 text-[2.5rem] leading-[1.03] sm:text-6xl lg:text-[4.3rem] font-extrabold text-white tracking-tight text-balance">
              <?php echo wp_kses($hero_heading_highlighted, array('span' => array('class' => true))); ?>
            </h1>

            <p class="hero-p mt-6 text-base sm:text-xl text-slate-300/95 leading-relaxed max-w-xl">
              <?php echo esc_html($hero_subheading); ?>
            </p>

            <!-- <div class="hero-ctas mt-10">
              <a href="<?php echo esc_url(cs_contact_url()); ?>" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-500 transition-all shadow-lg shadow-cs-600/25">
                <?php esc_html_e('Contact Us', 'central-strategies'); ?>
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
              </a>
            </div> -->
          </div>

          <div class="relative hidden lg:block min-h-[420px]" aria-hidden="true">
            <div class="hero-ring absolute inset-0 rounded-[40px] border border-white/5"></div>

            <div class="hero-visual-shield absolute right-24 top-24 h-56 w-56 rounded-[2.25rem] bg-gradient-to-br from-cs-800/55 via-cs-700/35 to-brand-700/30 border border-white/10 backdrop-blur-sm shadow-2xl shadow-black/40 flex items-center justify-center rotate-45">
              <div class="-rotate-45">
                <svg class="w-16 h-16 text-white/95" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.9">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l7 3v5c0 5-3.5 8.5-7 10-3.5-1.5-7-5-7-10V6l7-3z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9.5 12.5l1.8 1.8 3.2-3.6" />
                </svg>
              </div>
            </div>

            <div class="hero-node-1 absolute top-8 right-8 h-12 w-12 rounded-xl border border-white/10 bg-slate-900/80 backdrop-blur-sm flex items-center justify-center">
              <svg class="w-5 h-5 text-cs-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.657 0 3-1.567 3-3.5S13.657 4 12 4s-3 1.567-3 3.5S10.343 11 12 11zM5 20a7 7 0 0114 0" />
              </svg>
            </div>
            <div class="hero-node-2 absolute top-20 left-10 h-11 w-11 rounded-xl border border-white/10 bg-slate-900/80 backdrop-blur-sm flex items-center justify-center">
              <svg class="w-[18px] h-[18px] text-brand-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <div class="hero-node-3 absolute bottom-20 left-16 h-11 w-11 rounded-xl border border-white/10 bg-slate-900/80 backdrop-blur-sm flex items-center justify-center">
              <svg class="w-[18px] h-[18px] text-cs-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 114.67-3.95A5.002 5.002 0 0117.93 13H18a3 3 0 010 6H6a3 3 0 01-3-3z" />
              </svg>
            </div>
            <div class="hero-node-4 absolute bottom-6 right-10 h-11 w-11 rounded-xl border border-white/10 bg-slate-900/80 backdrop-blur-sm flex items-center justify-center">
              <svg class="w-[18px] h-[18px] text-brand-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-6m3 6V7m3 10v-4m3 4V9M3 21h18" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </section>
