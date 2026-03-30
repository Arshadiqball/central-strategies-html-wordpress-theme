    <section id="stats" class="relative py-20 lg:py-24 overflow-hidden">
      <!-- Two-tone background -->
      <div class="absolute inset-0 bg-gradient-to-r from-cs-700 via-cs-600 to-cs-700" aria-hidden="true"></div>
      <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 32px 32px;" aria-hidden="true"></div>

      <div class="relative max-w-site mx-auto px-5 lg:px-8">
        <?php
        $cs_stats = array(
            array(
                'value'  => get_theme_mod('cs_stat1_value',  '100'),
                'suffix' => get_theme_mod('cs_stat1_suffix', '+'),
                'label'  => get_theme_mod('cs_stat1_label',  'Projects Delivered'),
                'count'  => intval(get_theme_mod('cs_stat1_value', '100')),
            ),
            array(
                'value'  => get_theme_mod('cs_stat2_value',  '20'),
                'suffix' => get_theme_mod('cs_stat2_suffix', '+'),
                'label'  => get_theme_mod('cs_stat2_label',  'Government Agencies'),
                'count'  => intval(get_theme_mod('cs_stat2_value', '20')),
            ),
            array(
                'value'  => get_theme_mod('cs_stat3_value',  '10'),
                'suffix' => get_theme_mod('cs_stat3_suffix', '+'),
                'label'  => get_theme_mod('cs_stat3_label',  'Years Experience'),
                'count'  => intval(get_theme_mod('cs_stat3_value', '10')),
            ),
            array(
                'value'  => get_theme_mod('cs_stat4_value',  '99'),
                'suffix' => get_theme_mod('cs_stat4_suffix', '%'),
                'label'  => get_theme_mod('cs_stat4_label',  'Client Retention'),
                'count'  => intval(get_theme_mod('cs_stat4_value', '99')),
            ),
        );
        ?>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8" data-stagger>
          <?php foreach ($cs_stats as $cs_i => $cs_stat) : ?>
          <div class="text-center lg:text-left<?php echo $cs_i > 0 ? ' lg:border-l lg:border-white/15 lg:pl-8' : ''; ?>" data-animate="fade-up">
            <div class="text-5xl xl:text-6xl font-extrabold text-white">
              <span class="stat-number" data-count="<?php echo esc_attr($cs_stat['count']); ?>">0</span><span class="text-cs-200"><?php echo esc_html($cs_stat['suffix']); ?></span>
            </div>
            <div class="mt-2 text-sm text-white/70 font-medium uppercase tracking-wider"><?php echo esc_html($cs_stat['label']); ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
