    <section id="capabilities-banner" class="bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8 pt-20 pb-16 lg:pt-24 lg:pb-20">
        <div class="text-center max-w-4xl mx-auto" data-animate="fade-up">
          <div class="inline-flex items-center gap-3 text-cs-600 text-xs font-bold uppercase tracking-[0.2em]">
            <span class="w-10 h-px bg-cs-300"></span>
            <?php esc_html_e('Our Capabilities', 'central-strategies'); ?>
            <span class="w-10 h-px bg-cs-300"></span>
          </div>

          <h2 class="mt-4 text-4xl sm:text-5xl lg:text-[3.75rem] font-extrabold text-slate-900 leading-[1.18] sm:leading-[1.15] lg:leading-[1.12] tracking-tight text-balance">
            <?php echo esc_html(get_theme_mod('cs_capabilities_heading', 'Advanced IT Solutions That Drive Innovation')); ?>
          </h2>

          <p class="mt-6 text-lg lg:text-xl text-slate-500 leading-relaxed max-w-3xl mx-auto">
            <?php echo esc_html(get_theme_mod('cs_capabilities_subheading', 'We deliver comprehensive information technology solutions tailored to meet the unique demands of government agencies and enterprise organizations.')); ?>
          </p>

          <div class="mt-10">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('services')) ?: home_url('/services/')); ?>" class="inline-flex items-center justify-center px-9 py-3.5 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-500 transition-colors shadow-lg shadow-cs-600/20">
              <?php esc_html_e('Learn More', 'central-strategies'); ?>
            </a>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden py-10 lg:py-12">
        <div class="absolute inset-0 bg-gradient-to-r from-cs-700 via-cs-600 to-cs-700" aria-hidden="true"></div>
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.24) 1px, transparent 0); background-size: 34px 34px;" aria-hidden="true"></div>

        <?php
        $cs_stats = array(
            array(
                'value'  => get_theme_mod('cs_stat1_value', '100'),
                'suffix' => get_theme_mod('cs_stat1_suffix', '+'),
                'label'  => get_theme_mod('cs_stat1_label', 'Projects Delivered'),
            ),
            array(
                'value'  => get_theme_mod('cs_stat2_value', '20'),
                'suffix' => get_theme_mod('cs_stat2_suffix', '+'),
                'label'  => get_theme_mod('cs_stat2_label', 'Government Agencies'),
            ),
            array(
                'value'  => get_theme_mod('cs_stat3_value', '10'),
                'suffix' => get_theme_mod('cs_stat3_suffix', '+'),
                'label'  => get_theme_mod('cs_stat3_label', 'Years Experience'),
            ),
            array(
                'value'  => get_theme_mod('cs_stat4_value', '99'),
                'suffix' => get_theme_mod('cs_stat4_suffix', '%'),
                'label'  => get_theme_mod('cs_stat4_label', 'Client Retention'),
            ),
        );
        ?>

        <div class="relative max-w-site mx-auto px-5 lg:px-8">
          <div class="grid grid-cols-2 lg:grid-cols-4 gap-y-8 lg:gap-0" data-stagger>
            <?php foreach ($cs_stats as $cs_i => $cs_stat) : ?>
            <div class="text-center<?php echo $cs_i > 0 ? ' lg:border-l lg:border-white/15' : ''; ?>" data-animate="fade-up">
              <div class="text-[2.8rem] sm:text-5xl lg:text-[3.45rem] font-extrabold text-white leading-none tracking-tight">
                <?php echo esc_html($cs_stat['value']); ?><span class="text-cs-200"><?php echo esc_html($cs_stat['suffix']); ?></span>
              </div>
              <div class="mt-2 text-sm text-white/75 font-bold uppercase tracking-wide">
                <?php echo esc_html($cs_stat['label']); ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
