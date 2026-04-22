    <?php
    $hero_heading = get_theme_mod('cs_hero_heading', 'We Help Organizations Achieve More.');
    $hero_subheading = get_theme_mod(
      'cs_hero_subheading',
      'Central Strategies provides mission-aligned IT solutions that enable federal agencies to improve performance, strengthen operational resilience, and address complex technical challenges.'
    );

    // Keep heading editable from WordPress while styling key phrase in red.
    $hero_heading_highlighted = preg_replace(
      '/(Achieve More\.?)/i',
      '<span class="text-cs-500">$1</span>',
      esc_html($hero_heading),
      1
    );

    $cs_hero_visual_url = get_template_directory_uri() . '/assets/images/CS.png';
    ?>

    <section
      id="hero"
      class="relative min-h-[90vh] flex items-center pt-16 lg:pt-24 overflow-hidden bg-slate-950 bg-no-repeat bg-cover bg-center"
      style="background-image: linear-gradient(to right, rgba(7,11,23,0.92) 0%, rgba(7,11,23,0.78) 35%, rgba(7,11,23,0.35) 65%, rgba(7,11,23,0.15) 100%), url('<?php echo esc_url($cs_hero_visual_url); ?>');"
    >
      <div class="absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-cs-500/45 to-transparent" aria-hidden="true"></div>

      <div class="relative max-w-site mx-auto px-5 lg:px-8 w-full py-16 lg:py-24">
        <div class="grid items-center gap-12 lg:gap-8 lg:grid-cols-2">
          <div class="max-w-2xl">
            <h1 class="hero-h1 text-[2.5rem] leading-[1.14] sm:text-6xl sm:leading-[1.12] lg:text-[4.3rem] lg:leading-[1.1] font-extrabold text-white tracking-tight text-balance">
              <?php echo wp_kses($hero_heading_highlighted, array('span' => array('class' => true))); ?>
            </h1>

            <p class="hero-p mt-6 text-base sm:text-xl text-slate-300/95 leading-relaxed max-w-xl">
              <?php echo esc_html($hero_subheading); ?>
            </p>
          </div>
        </div>
      </div>
    </section>
