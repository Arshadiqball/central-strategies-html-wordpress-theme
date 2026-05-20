<?php
/**
 * Template Name: Services
 *
 * @package Central_Strategies
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">
    <!-- Services Hero -->
    <section id="services-hero" class="relative pt-20 overflow-hidden bg-slate-950">
      <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-brand-950" aria-hidden="true"></div>
      <div class="absolute inset-0 opacity-[0.04]" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 40px 40px;" aria-hidden="true"></div>
      <div class="absolute top-1/3 right-0 w-[600px] h-[600px] bg-cs-600/5 rounded-full blur-[120px]" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-brand-700/10 rounded-full blur-[100px]" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/40 to-transparent" aria-hidden="true"></div>

      <div class="relative max-w-site mx-auto px-5 lg:px-8 w-full py-24 lg:py-32">
        <div class="max-w-4xl mx-auto text-center">
          <h1 class="hero-h1 text-4xl sm:text-5xl lg:text-6xl xl:text-[4.1rem] font-extrabold text-white leading-[1.14] sm:leading-[1.12] lg:leading-[1.1] tracking-tight text-balance">
            <?php esc_html_e('Advanced IT Solutions That', 'central-strategies'); ?><br class="hidden xl:block" />
            <span class="text-cs-500"><?php esc_html_e('Drive Impact.', 'central-strategies'); ?></span>
          </h1>

          <p class="hero-p mt-7 p-0 bg-transparent text-lg lg:text-xl text-slate-300 leading-relaxed max-w-2xl mx-auto">
            <?php
            $cs_services_subheading = get_theme_mod('cs_services_subheading', 'Central Strategies, a Veteran-Owned technology company, specializes in advanced IT solutions that drive innovation, enhance efficiency, and solve complex challenges');
            if (trim($cs_services_subheading) === 'Three core disciplines. One integrated approach. We combine security, innovation, and operational excellence to deliver solutions that move the mission forward.') {
                $cs_services_subheading = 'Central Strategies, a Veteran-Owned technology company, specializes in advanced IT solutions that drive innovation, enhance efficiency, and solve complex challenges';
            }
            echo esc_html($cs_services_subheading);
            ?>
          </p>

          <div class="hero-ctas mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="#service-disciplines" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-500 transition-all shadow-lg shadow-cs-600/25">
              <?php esc_html_e('Explore Our Solutions', 'central-strategies'); ?>
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
            </a>
            <a href="<?php echo esc_url(cs_contact_url()); ?>" class="inline-flex items-center justify-center px-8 py-4 text-white font-bold text-sm uppercase tracking-wider rounded border border-white/20 hover:bg-white/10 transition-all">
              <?php esc_html_e('Contact Us', 'central-strategies'); ?>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Three Service Disciplines -->
    <section id="service-disciplines" class="py-16 lg:py-20 bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12" data-animate="fade-up">
          <h2 class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
            <span class="w-8 h-px bg-cs-600" aria-hidden="true"></span>
            <?php esc_html_e('What We Do', 'central-strategies'); ?>
            <span class="w-8 h-px bg-cs-600" aria-hidden="true"></span>
          </h2>
          <p class="text-lg text-slate-500 leading-relaxed">
            <?php esc_html_e('Security, Innovation, and Operations. Like any mission-critical system, the power is not in the components alone - it is in how they work together.', 'central-strategies'); ?>
          </p>
        </div>

        <?php
        $cs_capability_labels = array(
            'Cybersecurity',
            'Enterprise IT Management and Innovation',
            'AI/ML',
            'Data Analytics & Business Intelligence',
            'Technological Automation',
            'System Engineering',
            'Cloud Computing',
            'Budget Planning, Accounting, and Audit Services',
        );
        ?>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-4" data-stagger>
          <?php foreach ($cs_capability_labels as $cs_capability) : ?>
          <div class="group bg-slate-50 rounded-md border border-slate-200 min-h-[74px] px-4 py-4 flex items-center justify-center text-center transition-all duration-300 hover:border-cs-300 hover:bg-white hover:shadow-[0_0_0_1px_rgba(190,32,38,0.28),0_0_20px_rgba(190,32,38,0.22)]" data-animate="fade-up">
            <span class="text-[11px] md:text-xs font-extrabold uppercase tracking-wide text-slate-700 group-hover:text-slate-900 leading-snug">
              <?php echo esc_html($cs_capability); ?>
            </span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Detailed Solutions -->
    <section class="py-20 lg:py-24 bg-slate-50 border-y border-slate-100">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <?php
        $cs_solution_details = array(
            array(
                'title' => 'Information Technology',
                'desc'  => 'Our capabilities focus on delivering secure, automated, and innovative IT solutions. We safeguard digital assets, optimize workflows through intelligent automation, and leverage scalable cloud technologies for operational efficiency. By integrating advanced analytics, AI-driven insights, and automation, we enable data-driven decision-making that enhances performance and adaptability.',
                'image' => 'https://img1.wsimg.com/isteam/ip/b035d520-8899-4fd2-a537-05db45ef218c/blob-f1b08dc.png/:/cr=t:5.53%25,l:0%25,w:100%25,h:88.94%25/rs=w:600,h:300,cg:true',
                'alt'   => 'Information Technology',
                'items' => array('Cybersecurity', 'Technological Automation', 'Cloud Computing', 'Data Analytics', 'AI/ML Integration', 'Business Intelligence', 'Digital Transformation', 'Analytics Strategies', 'Enterprise Service Management', 'Enterprise Modernization', 'Health IT', 'IT Service Management', 'DevOpsSec'),
            ),
            array(
                'title' => 'Engineering',
                'desc'  => 'We provide comprehensive engineering and technology solutions that enhance system performance, infrastructure efficiency, and security.',
                'image' => 'https://img1.wsimg.com/isteam/stock/51159/:/cr=t:10.94%25,l:0%25,w:100%25,h:78.12%25/rs=w:600,h:300,cg:true',
                'alt'   => 'Engineering',
                'items' => array('Systems Engineering', 'Facilities Improvements and Support Services', 'Engineering Support Services', 'Cybersecurity Engineering', 'Software Engineering', 'Network Engineering', 'Telecommunication', 'Environmental Services', 'Research and Development Services'),
            ),
            array(
                'title' => 'Business Optimization',
                'desc'  => 'Mission success requires the alignment of all business processes. We provide industry and functional expertise to help our clients exceed requirements and address the most complex challenges.',
                'image' => 'https://img1.wsimg.com/isteam/stock/y6A7wxR/:/cr=t:12.4%25,l:0%25,w:100%25,h:75.21%25/rs=w:600,h:300,cg:true',
                'alt'   => 'Business Optimization',
                'items' => array('Acquisitions/Contracting', 'Logistics Management', 'Requirements Management', 'Strategic Planning', 'National Security Operations', 'Business Systems Transformation', 'Test and Evaluation Management', 'Budget Planning, Accounting, and Audit Remediation', 'Innovation Strategy', 'Workforce Analysis', 'Agile Development'),
            ),
        );
        ?>

        <div class="space-y-10 lg:space-y-12">
          <?php foreach ($cs_solution_details as $cs_i => $cs_solution) : ?>
          <article class="rounded-2xl border border-slate-200 bg-white overflow-hidden shadow-[0_14px_34px_rgba(15,23,42,0.08)] hover:shadow-[0_14px_36px_rgba(190,32,38,0.14)] transition-shadow duration-300" data-animate="fade-up">
            <div class="grid lg:grid-cols-2">
              <div class="<?php echo ($cs_i % 2 === 1) ? 'lg:order-2' : ''; ?>">
                <img
                  src="<?php echo esc_url($cs_solution['image']); ?>"
                  alt="<?php echo esc_attr($cs_solution['alt']); ?>"
                  class="h-full min-h-[220px] w-full object-cover"
                  loading="lazy"
                  decoding="async"
                />
              </div>
              <div class="p-7 lg:p-9 <?php echo ($cs_i % 2 === 1) ? 'lg:order-1' : ''; ?>">
                <h3 class="text-2xl lg:text-[1.75rem] font-extrabold text-slate-900 leading-tight"><?php echo esc_html($cs_solution['title']); ?></h3>
                <p class="mt-4 text-slate-600 leading-relaxed"><?php echo esc_html($cs_solution['desc']); ?></p>
                <ul class="mt-6 grid sm:grid-cols-2 gap-x-6 gap-y-2.5">
                  <?php foreach ($cs_solution['items'] as $cs_item) : ?>
                  <li class="flex items-start gap-2.5">
                    <svg class="w-4 h-4 mt-0.5 text-cs-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                    <span class="text-sm font-semibold text-slate-700 leading-snug"><?php echo esc_html($cs_item); ?></span>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Bottom CTA -->
    <section class="relative z-[1] -mt-8 lg:-mt-10 py-12 lg:py-14 overflow-hidden bg-slate-950">
      <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-brand-950" aria-hidden="true"></div>
      <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-cs-600/8 rounded-full blur-[100px]" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/30 to-transparent" aria-hidden="true"></div>

      <div class="relative max-w-site mx-auto px-5 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 text-cs-400 text-xs font-bold uppercase tracking-[0.2em] mb-3" data-animate="fade-in">
          <span class="w-8 h-px bg-cs-600"></span>
          <?php esc_html_e('Get Started', 'central-strategies'); ?>
          <span class="w-8 h-px bg-cs-600"></span>
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight max-w-3xl mx-auto leading-relaxed text-balance" data-animate="fade-up">
          <?php esc_html_e('Ready to Solve Your Most Difficult Challenges?', 'central-strategies'); ?>
        </h2>
        <div class="mt-5">
          <a href="<?php echo esc_url(cs_contact_url()); ?>" class="inline-flex items-center justify-center px-10 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-500 transition-colors shadow-lg shadow-cs-600/25">
            <?php esc_html_e('Contact Us', 'central-strategies'); ?>
          </a>
        </div>
      </div>
    </section>

</main>

<?php
get_footer();
