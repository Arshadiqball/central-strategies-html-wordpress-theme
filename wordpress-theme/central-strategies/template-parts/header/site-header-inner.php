<?php
/**
 * Site header — Inner pages variant (identical structure, shares menus).
 *
 * @package Central_Strategies
 */
?>
  <header id="site-header" class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-100 transition-all duration-300">
    <div class="max-w-site mx-auto px-5 lg:px-8">
      <div class="flex items-center justify-between h-20">

        <?php cs_logo('header'); ?>

        <div class="flex items-center gap-6 lg:gap-10">
          <nav class="hidden lg:flex items-center gap-0 flex-wrap justify-end" aria-label="<?php esc_attr_e('Primary navigation', 'central-strategies'); ?>">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'items_wrap'     => '%3$s',
                'walker'         => new CS_Desktop_Nav_Walker(),
                'fallback_cb'    => false,
            ));
            ?>
          </nav>

          <div class="flex items-center gap-3">
            <a href="<?php echo esc_url(cs_contact_url()); ?>" class="hidden sm:inline-flex items-center gap-2 px-6 py-2.5 bg-cs-600 text-white text-[13px] font-bold uppercase tracking-wider rounded hover:bg-cs-700 transition-colors">
              <?php esc_html_e('Contact Us', 'central-strategies'); ?>
            </a>
            <button id="mobile-toggle" class="lg:hidden p-2 text-slate-600 hover:text-cs-600 transition-colors" aria-label="<?php esc_attr_e('Toggle menu', 'central-strategies'); ?>" aria-expanded="false">
              <svg id="icon-hamburger" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" /></svg>
              <svg id="icon-close" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
          </div>
        </div>
      </div>

      <nav id="mobile-nav" class="hidden lg:hidden pb-6" aria-label="<?php esc_attr_e('Mobile navigation', 'central-strategies'); ?>">
        <div class="flex flex-col border-t border-slate-100 pt-4 gap-1">
          <?php
          wp_nav_menu(array(
              'theme_location' => 'mobile',
              'container'      => false,
              'items_wrap'     => '%3$s',
              'walker'         => new CS_Mobile_Nav_Walker(),
              'fallback_cb'    => false,
          ));
          ?>
          <a href="<?php echo esc_url(cs_contact_url()); ?>" class="mt-2 px-4 py-3 bg-cs-600 text-white text-sm font-bold text-center rounded hover:bg-cs-700 transition-colors sm:hidden">
            <?php esc_html_e('Contact Us', 'central-strategies'); ?>
          </a>
        </div>
      </nav>
    </div>
  </header>
