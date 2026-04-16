    <section id="about" class="py-20 lg:py-28 bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">

          <!-- Visual column -->
          <div class="lg:col-span-5 order-2 lg:order-1" data-animate="fade-right">
            <div class="relative">
              <div class="absolute -inset-4 bg-gradient-to-br from-cs-100 to-brand-100 rounded-3xl opacity-50 blur-2xl" aria-hidden="true"></div>
              <div class="relative bg-slate-950 rounded-2xl p-8 lg:p-10 overflow-hidden">
                <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 24px 24px;" aria-hidden="true"></div>

                <!-- Company info card -->
                <div class="relative space-y-5">
                  <div class="overflow-hidden h-14 max-w-[min(100%,280px)]">
                    <?php
                    if (has_custom_logo()) {
                        $cs_logo_id  = get_theme_mod('custom_logo');
                        $cs_logo_url = wp_get_attachment_image_url($cs_logo_id, 'full');
                        echo '<img src="' . esc_url($cs_logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '" width="1080" height="1080" decoding="async" class="block h-[8rem] w-auto object-contain object-left brightness-0 invert origin-left -my-7" />';
                    } else {
                        echo '<span class="text-xl font-bold text-white">' . esc_html(get_bloginfo('name')) . '</span>';
                    }
                    ?>
                  </div>
                  <div class="h-px bg-white/10"></div>

                  <div class="flex items-center gap-3">
                    <div class="inline-flex shrink-0 items-center rounded border border-white/10 bg-white p-1.5">
                      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gsa-logo.png'); ?>" alt="GSA" width="120" height="80" decoding="async" class="h-[5.5rem] w-auto max-w-[5.5rem] object-contain object-center" />
                    </div>
                    <div class="inline-flex shrink-0 items-center rounded border border-white/10 bg-white p-1.5">
                      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sba-sdvosb-certified.png'); ?>" alt="SBA Service-Disabled Veteran-Owned Certified" width="120" height="180" decoding="async" class="h-[5.5rem] w-auto max-w-[5.5rem] object-contain object-left" />
                    </div>
                  </div>

                  <div class="flex items-center gap-3 pt-2">
                    <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                    <span class="text-xs text-slate-400 font-medium">Actively accepting new contracts</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Text column -->
          <div class="lg:col-span-7 order-1 lg:order-2" data-animate="fade-left">
            <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
              <span class="w-8 h-px bg-cs-600"></span>
              About Us
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-[2.75rem] font-extrabold text-slate-900 tracking-tight leading-normal text-balance">
              <?php echo esc_html(get_theme_mod('cs_about_heading', 'A Veteran-Owned Technology Company')); ?>
            </h2>
            <p class="mt-6 text-lg text-slate-500 leading-relaxed">
              <?php echo esc_html(get_theme_mod('cs_about_para1', 'Central Strategies was founded by Nicolas Schellman, a retired United States Coast Guard Officer. After 20 years of honorable service, Nick wanted to continue to protect our nation and its people. With an emphasis on IT solutions for federal industries, Central Strategies is committed to delivering superior services through outstanding technology and teams.')); ?>
            </p>
            <p class="mt-4 text-slate-500 leading-relaxed">
              <?php echo esc_html(get_theme_mod('cs_about_para2', 'Our team of cleared professionals brings deep domain expertise in cybersecurity, cloud computing, artificial intelligence, and enterprise IT management. We take a mission-first approach to every engagement, delivering measurable results that make a difference.')); ?>
            </p>
            <p class="mt-6">
              <?php
              $cs_about_page = get_page_by_path('about');
              $cs_about_url  = $cs_about_page ? get_permalink($cs_about_page) : home_url('/about/');
              ?>
              <a href="<?php echo esc_url($cs_about_url); ?>" class="inline-flex items-center gap-2 text-sm font-bold text-cs-600 uppercase tracking-wider hover:text-cs-700 transition-colors group">
                <?php esc_html_e('Read our full story', 'central-strategies'); ?>
                <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
              </a>
            </p>

            <!-- Value pillars -->
            <div class="mt-10 grid sm:grid-cols-2 gap-x-8 gap-y-5">
              <?php
              $cs_pillars = array(
                  array(
                      'title' => get_theme_mod('cs_about_pillar1_title', 'Veteran Leadership'),
                      'desc'  => get_theme_mod('cs_about_pillar1_desc',  'Service-driven culture and values'),
                  ),
                  array(
                      'title' => get_theme_mod('cs_about_pillar2_title', 'Cleared Professionals'),
                      'desc'  => get_theme_mod('cs_about_pillar2_desc',  'TS/SCI and Secret-cleared staff'),
                  ),
                  array(
                      'title' => get_theme_mod('cs_about_pillar3_title', 'Mission First'),
                      'desc'  => get_theme_mod('cs_about_pillar3_desc',  'Results-oriented delivery model'),
                  ),
                  array(
                      'title' => get_theme_mod('cs_about_pillar4_title', 'Innovation Driven'),
                      'desc'  => get_theme_mod('cs_about_pillar4_desc',  'Emerging tech with enterprise reliability'),
                  ),
              );
              foreach ($cs_pillars as $cs_pillar) :
              ?>
              <div class="flex items-start gap-3">
                <div class="mt-0.5 w-6 h-6 rounded bg-cs-50 flex items-center justify-center shrink-0">
                  <svg class="w-3.5 h-3.5 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                </div>
                <div>
                  <div class="text-sm font-bold text-slate-900"><?php echo esc_html($cs_pillar['title']); ?></div>
                  <div class="text-sm text-slate-500 mt-0.5"><?php echo esc_html($cs_pillar['desc']); ?></div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
