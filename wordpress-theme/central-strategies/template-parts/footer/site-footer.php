<?php
/**
 * Site footer — three-column grid + legal row.
 *
 * @package Central_Strategies
 */
?>
  <footer class="bg-slate-950 pt-16 pb-8">
    <div class="max-w-site mx-auto px-5 lg:px-8">
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10 lg:gap-12" data-stagger>

        <!-- Column 1: Brand -->
        <div data-animate="fade-up">
          <?php cs_logo('footer'); ?>
          <p class="mt-5 max-w-sm text-base leading-relaxed text-slate-400">
            <?php echo esc_html(get_theme_mod('cs_footer_tagline', 'A Veteran-Owned technology company specializing in advanced IT solutions that drive innovation, enhance efficiency, and solve complex challenges.')); ?>
          </p>
        </div>

        <!-- Column 2: Company (WordPress menu) -->
        <div data-animate="fade-up">
          <h4 class="text-white font-bold text-xs uppercase tracking-[0.15em] mb-5"><?php esc_html_e('Company', 'central-strategies'); ?></h4>
          <?php
          wp_nav_menu(array(
              'theme_location' => 'footer_company',
              'container'      => false,
              'items_wrap'     => '<ul class="space-y-3">%3$s</ul>',
              'walker'         => new CS_Footer_Nav_Walker(),
              'fallback_cb'    => 'cs_footer_company_fallback',
          ));
          ?>
        </div>

        <!-- Column 3: Contact info + credentials -->
        <div data-animate="fade-up">
          <h4 class="text-white font-bold text-xs uppercase tracking-[0.15em] mb-5"><?php esc_html_e('Contact', 'central-strategies'); ?></h4>
          <ul class="space-y-4 text-sm text-slate-500">
            <li class="flex items-start gap-3">
              <svg class="w-4 h-4 mt-0.5 text-slate-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
              <span>Washington DC&ndash;Baltimore Area<br />United States</span>
            </li>
            <li class="flex items-center gap-3">
              <svg class="w-4 h-4 text-slate-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
              <a href="mailto:info@centralstrategies.com" class="hover:text-white transition-colors">info@centralstrategies.com</a>
            </li>
            <li class="flex items-center gap-3">
              <svg class="w-4 h-4 text-slate-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
              <a href="tel:+17038737049" class="hover:text-white transition-colors">703.873.7049</a>
            </li>
          </ul>

          <!-- Credentials -->
          <div class="mt-6 space-y-3">
            <div class="p-3 bg-white/5 border border-white/10 rounded-lg">
              <div class="text-[10px] text-slate-600 uppercase tracking-wider font-medium">UEI Number</div>
              <div class="text-xs font-bold text-slate-400 font-mono tracking-wider mt-0.5"><?php echo esc_html(get_theme_mod('cs_uei_number', 'RVF8RK4SJRG8')); ?></div>
            </div>
            <div class="p-3 bg-white/5 border border-white/10 rounded-lg">
              <div class="text-[10px] text-slate-600 uppercase tracking-wider font-medium">CAGE Code</div>
              <div class="text-xs font-bold text-slate-400 font-mono tracking-wider mt-0.5"><?php echo esc_html(get_theme_mod('cs_cage_code', '9L4U3')); ?></div>
            </div>
            <div class="p-3 bg-white/5 border border-white/10 rounded-lg">
              <div class="text-[10px] text-slate-600 uppercase tracking-wider font-medium">GSA Schedule</div>
              <div class="text-xs font-bold text-slate-400 font-mono tracking-wider mt-0.5"><?php echo esc_html(get_theme_mod('cs_gsa_schedule', 'GSA MAS')); ?></div>
            </div>
          </div>
        </div>

      </div>

      <!-- Bottom Bar -->
      <div class="mt-14 pt-8 border-t border-white/5">
        <div class="text-center text-xs text-slate-600">
          <p>&copy; <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?>, LLC. <?php esc_html_e('All rights reserved.', 'central-strategies'); ?> <?php esc_html_e('Service-Disabled Veteran-Owned Small Business (SDVOSB).', 'central-strategies'); ?></p>
        </div>
      </div>
    </div>
  </footer>
