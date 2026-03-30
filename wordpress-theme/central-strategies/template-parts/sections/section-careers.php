

    <!-- ============================================================
         CAREERS SECTION
         WordPress: template-parts/sections/careers.php
         ============================================================ -->
    <section id="careers" class="py-20 lg:py-24 bg-white border-t border-slate-100">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-12 items-center">

          <div class="lg:col-span-3" data-animate="fade-right">
            <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
              <span class="w-8 h-px bg-cs-600"></span>
              Careers
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
              <?php echo esc_html(get_theme_mod('cs_careers_heading', 'Join Our Mission')); ?>
            </h2>
            <p class="mt-5 text-lg text-slate-500 leading-relaxed max-w-2xl">
              <?php echo esc_html(get_theme_mod('cs_careers_desc', "We're always looking for talented professionals who are passionate about making a difference through technology. Join a veteran-led team where your work directly supports critical missions.")); ?>
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
              <?php
              $cs_tag_defaults = array('Cybersecurity Analysts', 'Cloud Engineers', 'Data Scientists', 'Program Managers', 'System Engineers');
              for ($cs_i = 1; $cs_i <= 5; $cs_i++) :
                  $cs_tag = get_theme_mod("cs_careers_tag{$cs_i}", $cs_tag_defaults[$cs_i - 1]);
                  if (empty(trim($cs_tag))) continue;
              ?>
              <span class="px-4 py-2 bg-slate-50 text-slate-600 text-sm font-medium rounded-lg border border-slate-200"><?php echo esc_html($cs_tag); ?></span>
              <?php endfor; ?>
            </div>
            <a href="<?php echo esc_url(get_theme_mod('cs_careers_cta_url', '#')); ?>" class="mt-8 inline-flex items-center gap-2 px-7 py-3.5 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-700 transition-colors">
              <?php esc_html_e('View Open Positions', 'central-strategies'); ?>
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
            </a>
          </div>

          <div class="lg:col-span-2 grid grid-cols-2 gap-4" data-animate="fade-left">
            <?php
            $cs_career_stats = array(
                array('value' => get_theme_mod('cs_careers_stat1_value', '50+'),   'label' => get_theme_mod('cs_careers_stat1_label', 'Team Members')),
                array('value' => get_theme_mod('cs_careers_stat2_value', '85%'),   'label' => get_theme_mod('cs_careers_stat2_label', 'Cleared Staff')),
                array('value' => get_theme_mod('cs_careers_stat3_value', '4.8/5'), 'label' => get_theme_mod('cs_careers_stat3_label', 'Glassdoor Rating')),
                array('value' => get_theme_mod('cs_careers_stat4_value', '100%'),  'label' => get_theme_mod('cs_careers_stat4_label', 'Remote Friendly')),
            );
            foreach ($cs_career_stats as $cs_cstat) :
            ?>
            <div class="bg-slate-50 rounded-xl p-6 border border-slate-200 text-center">
              <div class="text-3xl font-extrabold text-cs-600"><?php echo esc_html($cs_cstat['value']); ?></div>
              <div class="mt-1 text-sm text-slate-500 font-medium"><?php echo esc_html($cs_cstat['label']); ?></div>
            </div>
            <?php endforeach; ?>
          </div>

        </div>
      </div>
    </section>
