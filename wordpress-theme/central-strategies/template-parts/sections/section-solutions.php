    <section id="solutions" class="py-20 lg:py-28 bg-white relative">
      <div class="max-w-site mx-auto px-5 lg:px-8">

        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-animate="fade-up">
          <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
            <span class="w-8 h-px bg-cs-600"></span>
            Our Capabilities
            <span class="w-8 h-px bg-cs-600"></span>
          </div>
          <h2 class="text-3xl sm:text-4xl lg:text-[2.75rem] font-extrabold text-slate-900 tracking-tight leading-normal text-balance">
            <?php echo esc_html(get_theme_mod('cs_solutions_heading', 'Advanced IT Solutions That Drive Innovation')); ?>
          </h2>
          <p class="mt-5 text-lg text-slate-500 leading-relaxed">
            <?php echo esc_html(get_theme_mod('cs_solutions_subheading', 'We deliver comprehensive information technology solutions tailored to meet the unique demands of government agencies and enterprise organizations.')); ?>
          </p>
        </div>

        <!-- Services Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5" data-stagger>
          <?php
          $cs_services_query = new WP_Query(array(
              'post_type'      => 'cs_service',
              'posts_per_page' => -1,
              'orderby'        => 'menu_order',
              'order'          => 'ASC',
              'post_status'    => 'publish',
          ));

          if ($cs_services_query->have_posts()) :
              while ($cs_services_query->have_posts()) : $cs_services_query->the_post();
                  $cs_icon_key = get_post_meta(get_the_ID(), '_cs_service_icon', true) ?: 'data-engineering';
                  $cs_card_url = get_post_meta(get_the_ID(), '_cs_service_link', true);
                  $cs_desc     = has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 20, '');
          ?>
          <div class="group relative bg-white rounded-xl border border-slate-200 p-7 hover:border-cs-200 hover:shadow-xl hover:shadow-cs-50 transition-all duration-300 overflow-hidden card-lift" data-animate="fade-up">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-cs-600 to-cs-400 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
            <div class="w-11 h-11 bg-cs-50 rounded-lg flex items-center justify-center mb-5 group-hover:bg-cs-100 transition-colors">
              <?php echo cs_service_icon_svg($cs_icon_key); ?>
            </div>
            <h3 class="text-base font-bold text-slate-900 mb-2"><?php the_title(); ?></h3>
            <p class="text-sm text-slate-500 leading-relaxed mb-5"><?php echo esc_html($cs_desc); ?></p>
            <?php if ($cs_card_url) : ?>
            <a href="<?php echo esc_url($cs_card_url); ?>" class="inline-flex items-center text-xs font-bold text-cs-600 uppercase tracking-wider hover:text-cs-700 transition-colors group/l">
              <?php esc_html_e('Learn More', 'central-strategies'); ?>
              <svg class="ml-1 w-3.5 h-3.5 group-hover/l:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
            </a>
            <?php endif; ?>
          </div>
          <?php
              endwhile;
              wp_reset_postdata();
          else :
              // Fallback: show hardcoded defaults when no posts have been added yet
              foreach (cs_default_services() as $cs_svc) :
          ?>
          <div class="group relative bg-white rounded-xl border border-slate-200 p-7 hover:border-cs-200 hover:shadow-xl hover:shadow-cs-50 transition-all duration-300 overflow-hidden card-lift" data-animate="fade-up">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-cs-600 to-cs-400 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
            <div class="w-11 h-11 bg-cs-50 rounded-lg flex items-center justify-center mb-5 group-hover:bg-cs-100 transition-colors">
              <?php echo cs_service_icon_svg($cs_svc['icon']); ?>
            </div>
            <h3 class="text-base font-bold text-slate-900 mb-2"><?php echo $cs_svc['title']; ?></h3>
            <p class="text-sm text-slate-500 leading-relaxed mb-5"><?php echo esc_html($cs_svc['desc']); ?></p>
            <a href="<?php echo esc_url($cs_svc['link']); ?>" class="inline-flex items-center text-xs font-bold text-cs-600 uppercase tracking-wider hover:text-cs-700 transition-colors group/l">
              <?php esc_html_e('Learn More', 'central-strategies'); ?>
              <svg class="ml-1 w-3.5 h-3.5 group-hover/l:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
            </a>
          </div>
          <?php
              endforeach;
          endif;
          ?>
        </div>

        <!-- Find Out More CTA -->
        <div class="mt-14 text-center" data-animate="fade-up">
          <a href="<?php echo esc_url(cs_contact_url()); ?>" class="inline-flex items-center gap-2 px-8 py-3.5 bg-slate-900 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-slate-800 transition-colors">
            <?php esc_html_e('Find Out More', 'central-strategies'); ?>
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
          </a>
        </div>
      </div>
    </section>
