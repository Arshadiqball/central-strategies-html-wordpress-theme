<?php
/**
 * Site footer — brand left; Company + Contact grouped on the right + legal row.
 *
 * @package Central_Strategies
 */
$cs_phone      = get_theme_mod('cs_phone', '(703) 873-7049');
$cs_phone_raw  = preg_replace('/[^0-9+]/', '', $cs_phone);
$cs_email      = get_theme_mod('cs_email', 'info@centralstrategies.com');
$cs_address    = get_theme_mod('cs_address', "Washington DC–Baltimore Area\nUnited States");
$cs_legal_name = get_theme_mod('cs_footer_legal_name', 'Central Strategies, LLC');
?>
  <footer class="bg-[#080910] text-slate-400">
    <div class="h-2 w-full bg-cs-600" aria-hidden="true"></div>

    <div class="max-w-site mx-auto px-5 lg:px-8 pt-14 pb-10">
      <div class="flex flex-col gap-12 lg:flex-row lg:items-start lg:justify-between lg:gap-10 xl:gap-16">

        <!-- Left: Brand + credentials -->
        <div class="min-w-0 lg:max-w-xl xl:max-w-2xl" data-animate="fade-up">
          <?php cs_logo('footer'); ?>
          <p class="mt-5 max-w-md text-sm leading-relaxed text-slate-400">
            <?php echo esc_html(get_theme_mod('cs_footer_tagline', 'A Veteran-Owned technology company specializing in advanced IT solutions that drive innovation, enhance efficiency, and solve complex challenges.')); ?>
          </p>

          <div class="mt-10 flex flex-col gap-8 sm:flex-row sm:items-stretch">
            <div class="min-w-0 flex-1 space-y-3">
              <div class="rounded-md border border-white/[0.08] bg-[#12141c] px-4 py-3">
                <div class="text-[10px] font-bold uppercase tracking-[0.18em] text-slate-500"><?php esc_html_e('UEI Number', 'central-strategies'); ?></div>
                <div class="mt-1 font-mono text-sm font-bold tracking-wider text-slate-200"><?php echo esc_html(get_theme_mod('cs_uei_number', 'RVF8RK4SJRG8')); ?></div>
              </div>
              <div class="rounded-md border border-white/[0.08] bg-[#12141c] px-4 py-3">
                <div class="text-[10px] font-bold uppercase tracking-[0.18em] text-slate-500"><?php esc_html_e('CAGE Code', 'central-strategies'); ?></div>
                <div class="mt-1 font-mono text-sm font-bold tracking-wider text-slate-200"><?php echo esc_html(get_theme_mod('cs_cage_code', '9L4U3')); ?></div>
              </div>
              <div class="rounded-md border border-white/[0.08] bg-[#12141c] px-4 py-3">
                <div class="text-[10px] font-bold uppercase tracking-[0.18em] text-slate-500"><?php esc_html_e('GSA Schedule', 'central-strategies'); ?></div>
                <div class="mt-1 font-mono text-sm font-bold tracking-wider text-slate-200"><?php echo esc_html(get_theme_mod('cs_gsa_schedule', 'GSA MAS')); ?></div>
              </div>
            </div>
            <div class="flex shrink-0 items-center justify-center sm:w-44 sm:max-w-[11rem]">
              <img
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sba-sdvosb-certified.png'); ?>"
                alt="<?php esc_attr_e('SBA Service-Disabled Veteran-Owned Certified', 'central-strategies'); ?>"
                width="220"
                height="220"
                class="w-36 sm:w-40 h-auto object-contain"
                loading="lazy"
                decoding="async"
              />
            </div>
          </div>
        </div>

        <!-- Right: Company + Contact (adjacent, aligned to end) -->
        <div class="flex flex-col gap-10 sm:flex-row sm:gap-12 lg:gap-14 xl:gap-16 lg:pt-1 lg:shrink-0" data-animate="fade-up">
          <div class="sm:w-auto">
            <h4 class="text-white font-bold text-xs uppercase tracking-[0.2em] mb-6"><?php esc_html_e('Company', 'central-strategies'); ?></h4>
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
          <div class="sm:w-auto sm:min-w-[14rem]">
            <h4 class="text-white font-bold text-xs uppercase tracking-[0.2em] mb-6"><?php esc_html_e('Contact', 'central-strategies'); ?></h4>
            <ul class="space-y-4 text-sm text-slate-400">
              <li class="flex items-start gap-3">
                <svg class="w-4 h-4 mt-0.5 text-slate-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                <span><?php echo nl2br(esc_html($cs_address)); ?></span>
              </li>
              <li class="flex items-center gap-3">
                <svg class="w-4 h-4 text-slate-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                <a href="mailto:<?php echo esc_attr($cs_email); ?>" class="text-slate-400 hover:text-white transition-colors"><?php echo esc_html($cs_email); ?></a>
              </li>
              <li class="flex items-center gap-3">
                <svg class="w-4 h-4 text-slate-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                <a href="tel:+1<?php echo esc_attr($cs_phone_raw); ?>" class="text-slate-400 hover:text-white transition-colors"><?php echo esc_html($cs_phone); ?></a>
              </li>
            </ul>
          </div>
        </div>

      </div>

      <div class="mt-16 pt-8 border-t border-white/[0.06]">
        <p class="text-center text-xs text-slate-600 leading-relaxed max-w-4xl mx-auto">
          &copy; <?php echo esc_html((string) (int) current_time('Y')); ?> <?php echo esc_html($cs_legal_name); ?>. <?php esc_html_e('All rights reserved.', 'central-strategies'); ?> <?php esc_html_e('Service-Disabled Veteran-Owned Small Business (SDVOSB).', 'central-strategies'); ?>
        </p>
      </div>
    </div>
  </footer>
