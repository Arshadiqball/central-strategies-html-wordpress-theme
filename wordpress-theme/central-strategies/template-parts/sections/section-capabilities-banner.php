    <section id="capabilities-banner" class="bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8 pt-20 pb-16 lg:pt-24 lg:pb-20">
        <div class="text-center max-w-4xl mx-auto" data-animate="fade-up">
          <p class="text-xl sm:text-2xl lg:text-[1.75rem] font-bold text-slate-900 leading-relaxed text-balance max-w-3xl mx-auto">
            <?php echo esc_html(get_theme_mod('cs_capabilities_subheading', 'Central Strategies, a Veteran-Owned technology company, specializes in advanced IT solutions that drives innovation, enhance efficiency, and solve complex challenges.')); ?>
          </p>

          <div class="mt-10">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('services')) ?: home_url('/services/')); ?>" class="inline-flex items-center justify-center px-9 py-3.5 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-500 transition-colors shadow-lg shadow-cs-600/20">
              <?php esc_html_e('Learn More', 'central-strategies'); ?>
            </a>
          </div>

          <div class="mt-10 flex justify-center">
            <img
              src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sba-sdvosb-certified.png'); ?>"
              alt="<?php esc_attr_e('SBA Service-Disabled Veteran-Owned Certified', 'central-strategies'); ?>"
              width="120"
              height="180"
              loading="lazy"
              decoding="async"
              class="h-28 sm:h-32 w-auto object-contain"
            />
          </div>
        </div>
      </div>

      <?php
      $cs_logo_base = get_template_directory_uri() . '/assets/images/clients/';
      $cs_client_logos = array(
          array('file' => 'dos-seal.png',  'alt' => 'U.S. Department of State', 'seal' => true),
          array('file' => 'dhs-seal.png',  'alt' => 'U.S. Department of Homeland Security', 'seal' => true),
          array('file' => 'dia-seal.png',  'alt' => 'Defense Intelligence Agency', 'seal' => true),
          array('file' => 'uscg-seal.png', 'alt' => 'United States Coast Guard', 'seal' => true),
      );
      ?>
      <div class="relative overflow-hidden flex items-center" style="padding-top:5px;padding-bottom:5px;">
        <div class="absolute inset-0 bg-gradient-to-r from-cs-700 via-cs-600 to-cs-700" aria-hidden="true"></div>
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.24) 1px, transparent 0); background-size: 34px 34px;" aria-hidden="true"></div>

        <div class="relative w-full max-w-site mx-auto px-5 lg:px-8" role="region" aria-label="<?php esc_attr_e('Clients and partners', 'central-strategies'); ?>">
          <div class="cs-partner-seals">
            <?php foreach ($cs_client_logos as $cs_logo) : ?>
            <div class="cs-logo-card cs-logo-card--seal">
              <img
                src="<?php echo esc_url($cs_logo_base . $cs_logo['file']); ?>"
                alt="<?php echo esc_attr($cs_logo['alt']); ?>"
                loading="lazy"
                decoding="async"
              />
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
