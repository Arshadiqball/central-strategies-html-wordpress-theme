<?php
/**
 * Site footer — four-column grid + legal row.
 *
 * @package Central_Strategies
 */
?>
  <footer class="bg-slate-950 pt-16 pb-8">
    <div class="max-w-site mx-auto px-5 lg:px-8">
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-12" data-stagger>

        <!-- Column 1: Brand -->
        <div data-animate="fade-up">
          <?php cs_logo('footer'); ?>
          <p class="text-sm text-slate-500 leading-relaxed">
            <?php echo esc_html(get_bloginfo('description')); ?>
          </p>
          <div class="flex items-center gap-3 mt-6">
            <a href="#" class="w-9 h-9 bg-white/5 border border-white/10 rounded-lg flex items-center justify-center hover:bg-cs-600 hover:border-cs-600 transition-all" aria-label="LinkedIn">
              <svg class="w-4 h-4 text-slate-500" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            </a>
            <a href="#" class="w-9 h-9 bg-white/5 border border-white/10 rounded-lg flex items-center justify-center hover:bg-cs-600 hover:border-cs-600 transition-all" aria-label="Twitter/X">
              <svg class="w-4 h-4 text-slate-500" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            </a>
          </div>
        </div>

        <!-- Column 2: Our Solutions (WordPress menu) -->
        <div data-animate="fade-up">
          <h4 class="text-white font-bold text-xs uppercase tracking-[0.15em] mb-5"><?php esc_html_e('Our Solutions', 'central-strategies'); ?></h4>
          <?php
          wp_nav_menu(array(
              'theme_location' => 'footer_solutions',
              'container'      => false,
              'items_wrap'     => '<ul class="space-y-3">%3$s</ul>',
              'walker'         => new CS_Footer_Nav_Walker(),
              'fallback_cb'    => false,
          ));
          ?>
        </div>

        <!-- Column 3: Company (WordPress menu) -->
        <div data-animate="fade-up">
          <h4 class="text-white font-bold text-xs uppercase tracking-[0.15em] mb-5"><?php esc_html_e('Company', 'central-strategies'); ?></h4>
          <?php
          wp_nav_menu(array(
              'theme_location' => 'footer_company',
              'container'      => false,
              'items_wrap'     => '<ul class="space-y-3">%3$s</ul>',
              'walker'         => new CS_Footer_Nav_Walker(),
              'fallback_cb'    => false,
          ));
          ?>
        </div>

        <!-- Column 4: Contact info -->
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
          <div class="mt-6 p-3 bg-white/5 border border-white/10 rounded-lg">
            <div class="text-[10px] text-slate-600 uppercase tracking-wider font-medium">UEI Number</div>
            <div class="text-xs font-bold text-slate-400 font-mono tracking-wider mt-0.5">RVF8RK4SJRG8</div>
          </div>
        </div>

      </div>

      <!-- Bottom Bar + legal links -->
      <div class="mt-14 pt-8 border-t border-white/5">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-600">
          <p>&copy; <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'central-strategies'); ?></p>
          <div class="flex items-center gap-6">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer_legal',
                'container'      => false,
                'items_wrap'     => '%3$s',
                'walker'         => new CS_Footer_Nav_Walker(),
                'fallback_cb'    => false,
                'depth'          => 1,
            ));
            ?>
          </div>
        </div>
      </div>
    </div>
  </footer>
