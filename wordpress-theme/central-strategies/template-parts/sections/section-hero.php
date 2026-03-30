    <section id="hero" class="relative min-h-[92vh] flex items-center pt-20 overflow-hidden bg-slate-950">
      <!-- Background layers -->
      <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-brand-950" aria-hidden="true"></div>
      <div class="absolute inset-0 opacity-[0.04]" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 40px 40px;" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/40 to-transparent" aria-hidden="true"></div>
      <div class="absolute top-1/3 right-0 w-[600px] h-[600px] bg-cs-600/5 rounded-full blur-[120px]" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-brand-700/10 rounded-full blur-[100px]" aria-hidden="true"></div>

      <div class="relative max-w-site mx-auto px-5 lg:px-8 w-full py-20 lg:py-28">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-8 items-center">

          <!-- Text Column -->
          <div class="lg:col-span-7">
            <!-- Veteran Badge -->
            <div class="hero-badge inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-cs-600/30 bg-cs-600/10 mb-8">
              <svg class="w-4 h-4 text-cs-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
              <span class="text-xs font-bold text-cs-300 uppercase tracking-widest"><?php echo esc_html(get_theme_mod('cs_hero_badge', 'Service-Disabled Veteran-Owned Small Business')); ?></span>
            </div>

            <h1 class="hero-h1 text-4xl sm:text-5xl lg:text-6xl xl:text-[4.25rem] font-extrabold text-white leading-[1.08] tracking-tight text-balance">
              <?php echo esc_html(get_theme_mod('cs_hero_heading', 'We Help Organizations Achieve More.')); ?>
            </h1>

            <p class="hero-p mt-7 text-lg lg:text-xl text-slate-400 leading-relaxed max-w-2xl">
              <?php echo esc_html(get_theme_mod('cs_hero_subheading', 'Our experts deliver tailored solutions to help organizations solve the most difficult challenges. Central Strategies specializes in advanced IT solutions that drive innovation, enhance efficiency, and solve complex challenges.')); ?>
            </p>

            <div class="hero-ctas mt-10 flex flex-col sm:flex-row gap-4">
              <a href="#solutions" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-500 transition-all shadow-lg shadow-cs-600/25">
                <?php echo esc_html(get_theme_mod('cs_hero_cta1_text', 'Learn More')); ?>
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
              </a>
              <a href="<?php echo esc_url(cs_contact_url()); ?>" class="inline-flex items-center justify-center gap-2 px-8 py-4 text-white font-bold text-sm uppercase tracking-wider rounded border border-white/20 hover:bg-white/10 transition-all">
                <?php esc_html_e('Contact Us', 'central-strategies'); ?>
              </a>
            </div>

            <!-- Quick Stats Row -->
            <div class="hero-stats mt-16 grid grid-cols-3 gap-8 max-w-lg">
              <div>
                <div class="text-3xl font-extrabold text-white"><?php echo esc_html(get_theme_mod('cs_hero_stat1_value', 'SDVOSB')); ?></div>
                <div class="mt-1 text-xs font-medium text-slate-500 uppercase tracking-wider"><?php echo esc_html(get_theme_mod('cs_hero_stat1_label', 'Certified')); ?></div>
              </div>
              <div class="border-l border-slate-800 pl-8">
                <div class="text-3xl font-extrabold text-white"><?php echo esc_html(get_theme_mod('cs_hero_stat2_value', '100+')); ?></div>
                <div class="mt-1 text-xs font-medium text-slate-500 uppercase tracking-wider"><?php echo esc_html(get_theme_mod('cs_hero_stat2_label', 'Projects')); ?></div>
              </div>
              <div class="border-l border-slate-800 pl-8">
                <div class="text-3xl font-extrabold text-white"><?php echo esc_html(get_theme_mod('cs_hero_stat3_value', '24/7')); ?></div>
                <div class="mt-1 text-xs font-medium text-slate-500 uppercase tracking-wider"><?php echo esc_html(get_theme_mod('cs_hero_stat3_label', 'Support')); ?></div>
              </div>
            </div>
          </div>

          <!-- Visual Column -->
          <div class="lg:col-span-5 hidden lg:block" aria-hidden="true">
            <div class="relative">
              <!-- Glowing ring -->
              <div class="absolute inset-0 flex items-center justify-center">
                <div class="hero-ring w-80 h-80 rounded-full border border-cs-600/20"></div>
              </div>
              <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-60 h-60 rounded-full border border-brand-600/15"></div>
              </div>

              <!-- Center shield -->
              <div class="relative flex items-center justify-center h-[420px]">
                <div class="hero-visual-shield w-48 h-48 bg-gradient-to-br from-cs-600/20 to-brand-700/20 rounded-3xl rotate-45 flex items-center justify-center border border-white/5 backdrop-blur-sm shadow-2xl shadow-cs-600/10">
                  <div class="-rotate-45">
                    <svg class="w-20 h-20 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="0.8">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                  </div>
                </div>

                <!-- Floating nodes -->
                <div class="hero-node-1 absolute top-8 right-12 w-14 h-14 bg-slate-800/80 border border-slate-700/50 rounded-2xl flex items-center justify-center backdrop-blur-sm">
                  <svg class="w-6 h-6 text-cs-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                </div>
                <div class="hero-node-2 absolute bottom-16 left-8 w-14 h-14 bg-slate-800/80 border border-slate-700/50 rounded-2xl flex items-center justify-center backdrop-blur-sm">
                  <svg class="w-6 h-6 text-brand-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" /></svg>
                </div>
                <div class="hero-node-3 absolute top-20 left-4 w-12 h-12 bg-slate-800/80 border border-slate-700/50 rounded-xl flex items-center justify-center backdrop-blur-sm">
                  <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                </div>
                <div class="hero-node-4 absolute bottom-8 right-16 w-12 h-12 bg-slate-800/80 border border-slate-700/50 rounded-xl flex items-center justify-center backdrop-blur-sm">
                  <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
