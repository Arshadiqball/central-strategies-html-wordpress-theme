    <section id="insights" class="py-20 lg:py-28 bg-slate-50">
      <div class="max-w-site mx-auto px-5 lg:px-8">

        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 mb-14" data-animate="fade-up">
          <div>
            <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
              <span class="w-8 h-px bg-cs-600"></span>
              Insights
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
              <?php echo esc_html(get_theme_mod('cs_insights_heading', 'Latest Thinking')); ?>
            </h2>
          </div>
          <?php
          $cs_blog_page = get_page_by_path('blog');
          $cs_blog_url  = $cs_blog_page ? get_permalink($cs_blog_page) : home_url('/blog/');
          ?>
          <a href="<?php echo esc_url($cs_blog_url); ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-cs-600 uppercase tracking-wider hover:text-cs-700 transition-colors group shrink-0">
            <?php esc_html_e('View All', 'central-strategies'); ?>
            <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
          </a>
        </div>

        <div class="grid md:grid-cols-3 gap-6" data-stagger>
          <?php
          $cs_insights_query = new WP_Query(array(
              'posts_per_page' => 3,
              'post_status'    => 'publish',
              'orderby'        => 'date',
              'order'          => 'DESC',
          ));

          // Gradient palettes cycling through 3 styles
          $cs_gradients = array(
              array('bg' => 'from-cs-100 via-cs-50 to-white',      'icon' => 'text-cs-200'),
              array('bg' => 'from-brand-100 via-brand-50 to-white', 'icon' => 'text-brand-200'),
              array('bg' => 'from-slate-100 via-slate-50 to-white', 'icon' => 'text-slate-200'),
          );

          if ($cs_insights_query->have_posts()) :
              $cs_idx = 0;
              while ($cs_insights_query->have_posts()) : $cs_insights_query->the_post();
                  $cs_grad = $cs_gradients[$cs_idx % 3];
                  $cs_cats = get_the_category();
                  $cs_cat  = !empty($cs_cats) ? $cs_cats[0]->name : '';
          ?>
          <article class="group bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg hover:shadow-slate-200/60 transition-all duration-300 card-lift" data-animate="fade-up">
            <?php if (has_post_thumbnail()) : ?>
            <div class="aspect-[16/9] overflow-hidden">
              <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500')); ?>
            </div>
            <?php else : ?>
            <div class="aspect-[16/9] bg-gradient-to-br <?php echo esc_attr($cs_grad['bg']); ?> flex items-center justify-center">
              <svg class="w-14 h-14 <?php echo esc_attr($cs_grad['icon']); ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="0.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>
            </div>
            <?php endif; ?>
            <div class="p-6">
              <div class="flex items-center gap-3 text-xs text-slate-400 font-medium mb-3">
                <?php if ($cs_cat) : ?>
                <span class="text-cs-600 bg-cs-50 px-2.5 py-1 rounded font-bold"><?php echo esc_html($cs_cat); ?></span>
                <?php endif; ?>
                <span><?php echo get_the_date('M j, Y'); ?></span>
              </div>
              <h3 class="text-base font-bold text-slate-900 group-hover:text-cs-600 transition-colors leading-snug">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <p class="mt-2 text-sm text-slate-500 leading-relaxed line-clamp-3"><?php echo wp_trim_words(get_the_excerpt(), 22, ''); ?></p>
            </div>
          </article>
          <?php
                  $cs_idx++;
              endwhile;
              wp_reset_postdata();
          else :
              // Fallback hardcoded cards when no posts exist
              $cs_fallback = array(
                  array(
                      'grad'  => 'from-cs-100 via-cs-50 to-white', 'icon' => 'text-cs-200',
                      'cat'   => 'Cybersecurity', 'cat_class' => 'text-cs-600 bg-cs-50',
                      'date'  => 'Mar 10, 2026',
                      'title' => 'Zero Trust Implementation: A Practical Guide for Federal Agencies',
                      'desc'  => 'Practical steps for implementing zero trust across legacy and modern federal IT systems with minimal disruption and maximum security posture improvement.',
                  ),
                  array(
                      'grad'  => 'from-brand-100 via-brand-50 to-white', 'icon' => 'text-brand-200',
                      'cat'   => 'Cloud', 'cat_class' => 'text-brand-700 bg-brand-50',
                      'date'  => 'Feb 28, 2026',
                      'title' => 'Cloud Computing Strategies for Government Modernization',
                      'desc'  => 'How agencies can leverage cloud-first strategies to modernize infrastructure, reduce costs, and improve citizen service delivery outcomes.',
                  ),
                  array(
                      'grad'  => 'from-slate-100 via-slate-50 to-white', 'icon' => 'text-slate-200',
                      'cat'   => 'AI / ML', 'cat_class' => 'text-slate-700 bg-slate-100',
                      'date'  => 'Feb 14, 2026',
                      'title' => 'Responsible AI in Government: Balancing Innovation with Accountability',
                      'desc'  => 'How agencies can adopt AI and machine learning while maintaining ethical standards, transparency, and mission-aligned governance.',
                  ),
              );
              foreach ($cs_fallback as $cs_fb) :
          ?>
          <article class="group bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg hover:shadow-slate-200/60 transition-all duration-300 card-lift" data-animate="fade-up">
            <div class="aspect-[16/9] bg-gradient-to-br <?php echo esc_attr($cs_fb['grad']); ?> flex items-center justify-center">
              <svg class="w-14 h-14 <?php echo esc_attr($cs_fb['icon']); ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="0.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>
            </div>
            <div class="p-6">
              <div class="flex items-center gap-3 text-xs text-slate-400 font-medium mb-3">
                <span class="<?php echo esc_attr($cs_fb['cat_class']); ?> px-2.5 py-1 rounded font-bold"><?php echo esc_html($cs_fb['cat']); ?></span>
                <span><?php echo esc_html($cs_fb['date']); ?></span>
              </div>
              <h3 class="text-base font-bold text-slate-900 group-hover:text-cs-600 transition-colors leading-snug">
                <a href="<?php echo esc_url($cs_blog_url); ?>"><?php echo esc_html($cs_fb['title']); ?></a>
              </h3>
              <p class="mt-2 text-sm text-slate-500 leading-relaxed line-clamp-3"><?php echo esc_html($cs_fb['desc']); ?></p>
            </div>
          </article>
          <?php endforeach; endif; ?>
        </div><!-- /grid -->
      </div><!-- /max-w-site -->
    </section>
