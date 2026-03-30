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

    <!-- Hero -->
    <section class="relative pt-20 overflow-hidden bg-slate-950">
      <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-brand-950" aria-hidden="true"></div>
      <div class="absolute inset-0 opacity-[0.04]" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 40px 40px;" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/40 to-transparent" aria-hidden="true"></div>
      <div class="absolute top-1/3 right-0 w-[600px] h-[600px] bg-cs-600/5 rounded-full blur-[120px]" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-brand-700/10 rounded-full blur-[100px]" aria-hidden="true"></div>

      <div class="relative max-w-site mx-auto px-5 lg:px-8 w-full py-24 lg:py-32">
        <div class="max-w-4xl mx-auto text-center">
          <div class="hero-badge inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-cs-600/30 bg-cs-600/10 mb-8">
            <svg class="w-4 h-4 text-cs-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
            <span class="text-xs font-bold text-cs-300 uppercase tracking-widest"><?php esc_html_e('What We Do', 'central-strategies'); ?></span>
          </div>
          <h1 class="hero-h1 text-4xl sm:text-5xl lg:text-6xl xl:text-[4.25rem] font-extrabold text-white leading-[1.08] tracking-tight text-balance">
            <?php esc_html_e('Advanced IT Services That', 'central-strategies'); ?> <br class="hidden xl:block" />
            <span class="text-cs-500"><?php esc_html_e('Drive Real Impact.', 'central-strategies'); ?></span>
          </h1>
          <p class="hero-p mt-7 text-lg lg:text-xl text-slate-400 leading-relaxed max-w-2xl mx-auto">
            <?php esc_html_e('Three core disciplines. One integrated approach. We combine security, innovation, and operational excellence to deliver solutions that move the mission forward.', 'central-strategies'); ?>
          </p>
          <div class="hero-ctas mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="#operations" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-500 transition-all shadow-lg shadow-cs-600/25">
              <?php esc_html_e('Explore Our Services', 'central-strategies'); ?>
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
            </a>
            <a href="<?php echo esc_url(cs_contact_url()); ?>" class="inline-flex items-center justify-center gap-2 px-8 py-4 text-white font-bold text-sm uppercase tracking-wider rounded border border-white/20 hover:bg-white/10 transition-all">
              <?php esc_html_e('Contact Us', 'central-strategies'); ?>
            </a>
          </div>
        </div>
      </div>
    </section>


    <!-- Three Pillars Overview -->
    <section class="py-16 lg:py-20 bg-white border-b border-slate-100">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14" data-animate="fade-up">
          <h2 class="text-3xl sm:text-4xl lg:text-[2.75rem] font-extrabold text-slate-900 tracking-tight leading-tight">
            <?php esc_html_e('We do three things', 'central-strategies'); ?> <span class="text-cs-600"><?php esc_html_e('exceptionally well.', 'central-strategies'); ?></span>
          </h2>
          <p class="mt-5 text-lg text-slate-500 leading-relaxed">
            <?php esc_html_e('Security, Innovation, and Operations. Like any mission-critical system, the power isn\'t in the components alone — it\'s in how they work together.', 'central-strategies'); ?>
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6" data-stagger>
          <a href="#operations" class="group relative bg-white rounded-xl border border-slate-200 p-8 hover:border-cs-200 hover:shadow-xl hover:shadow-cs-50 transition-all duration-300 card-lift text-center" data-animate="fade-up">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-cs-600 to-cs-400 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
            <div class="w-14 h-14 bg-cs-50 rounded-2xl flex items-center justify-center mb-5 mx-auto group-hover:bg-cs-100 transition-colors">
              <svg class="w-7 h-7 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" /></svg>
            </div>
            <h3 class="text-lg font-extrabold text-slate-900 mb-2"><?php esc_html_e('Data Engineering & Operations', 'central-strategies'); ?></h3>
            <p class="text-sm text-slate-500 leading-relaxed"><?php esc_html_e('Building resilient data platforms, pipelines, and analytics that turn complexity into clarity and optimize every dollar.', 'central-strategies'); ?></p>
            <span class="inline-flex items-center mt-5 text-xs font-bold text-cs-600 uppercase tracking-wider group-hover:translate-x-1 transition-transform">
              <?php esc_html_e('Explore', 'central-strategies'); ?>
              <svg class="ml-1 w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
            </span>
          </a>

          <a href="#innovation" class="group relative bg-white rounded-xl border border-slate-200 p-8 hover:border-brand-200 hover:shadow-xl hover:shadow-brand-50 transition-all duration-300 card-lift text-center" data-animate="fade-up">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-brand-600 to-brand-400 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
            <div class="w-14 h-14 bg-brand-50 rounded-2xl flex items-center justify-center mb-5 mx-auto group-hover:bg-brand-100 transition-colors">
              <svg class="w-7 h-7 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" /></svg>
            </div>
            <h3 class="text-lg font-extrabold text-slate-900 mb-2"><?php esc_html_e('Cloud & Innovation', 'central-strategies'); ?></h3>
            <p class="text-sm text-slate-500 leading-relaxed"><?php esc_html_e('Accelerating missions with cloud computing, AI, and enterprise IT modernization that keeps pace with emerging threats.', 'central-strategies'); ?></p>
            <span class="inline-flex items-center mt-5 text-xs font-bold text-brand-600 uppercase tracking-wider group-hover:translate-x-1 transition-transform">
              <?php esc_html_e('Explore', 'central-strategies'); ?>
              <svg class="ml-1 w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
            </span>
          </a>

          <a href="#security" class="group relative bg-white rounded-xl border border-slate-200 p-8 hover:border-slate-300 hover:shadow-xl hover:shadow-slate-100 transition-all duration-300 card-lift text-center" data-animate="fade-up">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-slate-700 to-slate-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
            <div class="w-14 h-14 bg-slate-100 rounded-2xl flex items-center justify-center mb-5 mx-auto group-hover:bg-slate-200 transition-colors">
              <svg class="w-7 h-7 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
            </div>
            <h3 class="text-lg font-extrabold text-slate-900 mb-2"><?php esc_html_e('Security & Infrastructure', 'central-strategies'); ?></h3>
            <p class="text-sm text-slate-500 leading-relaxed"><?php esc_html_e('Protecting critical systems with zero-trust architectures, resilient infrastructure, and continuous threat monitoring.', 'central-strategies'); ?></p>
            <span class="inline-flex items-center mt-5 text-xs font-bold text-slate-700 uppercase tracking-wider group-hover:translate-x-1 transition-transform">
              <?php esc_html_e('Explore', 'central-strategies'); ?>
              <svg class="ml-1 w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
            </span>
          </a>
        </div>
      </div>
    </section>


    <!-- Pillar 1: Data Engineering & Operations -->
    <section id="operations" class="py-20 lg:py-28 bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-start">

          <div class="lg:col-span-4 lg:sticky lg:top-28" data-animate="fade-right">
            <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
              <span class="w-8 h-px bg-cs-600"></span>
              <?php esc_html_e('Pillar One', 'central-strategies'); ?>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight"><?php esc_html_e('Data Engineering & Operations', 'central-strategies'); ?></h2>
            <p class="mt-5 text-lg text-slate-500 leading-relaxed"><?php esc_html_e('Better decisions come from better data. We help organizations build robust data platforms, harness analytics, automate workflows, and implement financial governance that ensures every resource counts.', 'central-strategies'); ?></p>
            <div class="mt-8 p-5 bg-cs-50 rounded-xl border border-cs-100">
              <div class="flex items-center gap-3 mb-3">
                <div class="w-8 h-8 bg-cs-600 rounded-lg flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" /></svg>
                </div>
                <span class="text-sm font-bold text-cs-800"><?php esc_html_e('Pipelines. Insight. Accountability.', 'central-strategies'); ?></span>
              </div>
              <p class="text-sm text-cs-700/80 leading-relaxed"><?php esc_html_e('Turn raw data into strategic advantage, automate the repetitive, and build financial systems that withstand any audit.', 'central-strategies'); ?></p>
            </div>
          </div>

          <div class="lg:col-span-8 space-y-0">
            <?php
            $cs_p1_services = array(
                array(
                    'icon' => '<svg class="w-6 h-6 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" /></svg>',
                    'icon_bg' => 'bg-cs-50',
                    'title' => 'Data Engineering',
                    'desc'  => 'Design, build, and operate scalable data platforms and pipelines that power mission-critical analytics. We architect data lakes, implement ETL/ELT workflows, enforce data governance and quality standards, and deploy real-time streaming solutions — giving your organization a reliable data foundation that scales with demand and meets the highest federal security requirements.',
                    'tags'  => array('Data Pipelines &amp; ETL', 'Data Lakes &amp; Warehouses', 'Data Governance', 'Real-Time Streaming'),
                ),
                array(
                    'icon' => '<svg class="w-6 h-6 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>',
                    'icon_bg' => 'bg-cs-50',
                    'title' => 'Data Analytics &amp; Business Intelligence',
                    'desc'  => 'Transform raw data into actionable insights with advanced analytics, interactive dashboards, and enterprise reporting platforms. We build visualization layers, implement self-service BI tools, and deliver the predictive models that help leadership make faster, smarter decisions grounded in evidence rather than intuition.',
                    'tags'  => array('BI Dashboards', 'Predictive Models', 'Self-Service Analytics', 'Data Visualization'),
                ),
                array(
                    'icon' => '<svg class="w-6 h-6 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>',
                    'icon_bg' => 'bg-cs-50',
                    'title' => 'Technological Automation',
                    'desc'  => 'Streamline workflows, reduce manual effort, and accelerate operations through intelligent automation. We design and deploy robotic process automation (RPA), workflow orchestration, intelligent document processing, and API-driven integration solutions that free your teams to focus on the work that actually moves the mission forward.',
                    'tags'  => array('RPA', 'Workflow Orchestration', 'Document Processing', 'API Integration'),
                ),
                array(
                    'icon' => '<svg class="w-6 h-6 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>',
                    'icon_bg' => 'bg-cs-50',
                    'title' => 'Budget Planning, Accounting &amp; Audit',
                    'desc'  => 'Financial planning, audit readiness, and accounting services aligned with federal standards. We support program budget formulation, cost analysis, financial statement preparation, internal controls, and audit support — helping agencies maintain fiscal accountability and pass oversight reviews with confidence.',
                    'tags'  => array('Budget Formulation', 'Audit Readiness', 'Internal Controls', 'Cost Analysis'),
                ),
            );
            foreach ($cs_p1_services as $cs_svc) :
            ?>
            <div class="service-offering py-10 first:pt-0 border-b border-slate-100 last:border-0" data-animate="fade-up">
              <div class="flex items-start gap-5">
                <div class="w-12 h-12 <?php echo esc_attr($cs_svc['icon_bg']); ?> rounded-xl flex items-center justify-center shrink-0 mt-1">
                  <?php echo $cs_svc['icon']; ?>
                </div>
                <div>
                  <h3 class="text-xl font-extrabold text-slate-900 mb-3"><?php echo $cs_svc['title']; ?></h3>
                  <p class="text-slate-500 leading-relaxed"><?php echo esc_html($cs_svc['desc']); ?></p>
                  <div class="flex flex-wrap gap-2 mt-5">
                    <?php foreach ($cs_svc['tags'] as $tag) : ?>
                    <span class="px-3 py-1.5 bg-slate-50 text-slate-600 text-xs font-semibold rounded-lg border border-slate-200"><?php echo $tag; ?></span>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>


    <!-- Pillar 2: Cloud & Innovation -->
    <section id="innovation" class="py-20 lg:py-28 bg-slate-50 border-y border-slate-100">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-start">

          <div class="lg:col-span-4 lg:sticky lg:top-28" data-animate="fade-right">
            <div class="inline-flex items-center gap-2 text-brand-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
              <span class="w-8 h-px bg-brand-600"></span>
              <?php esc_html_e('Pillar Two', 'central-strategies'); ?>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight"><?php esc_html_e('Cloud & Innovation', 'central-strategies'); ?></h2>
            <p class="mt-5 text-lg text-slate-500 leading-relaxed"><?php esc_html_e('Legacy systems slow down missions. We bring cutting-edge technology — cloud-native architectures, artificial intelligence, and enterprise modernization — to organizations that can\'t afford to fall behind.', 'central-strategies'); ?></p>
            <div class="mt-8 p-5 bg-brand-50 rounded-xl border border-brand-100">
              <div class="flex items-center gap-3 mb-3">
                <div class="w-8 h-8 bg-brand-600 rounded-lg flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" /></svg>
                </div>
                <span class="text-sm font-bold text-brand-800"><?php esc_html_e('Cloud-first. Enterprise reliability.', 'central-strategies'); ?></span>
              </div>
              <p class="text-sm text-brand-700/80 leading-relaxed"><?php esc_html_e("We don't just adopt new technology — we integrate it into your existing mission environment with minimal disruption and maximum impact.", 'central-strategies'); ?></p>
            </div>
          </div>

          <div class="lg:col-span-8 space-y-0">
            <?php
            $cs_p2_services = array(
                array(
                    'icon' => '<svg class="w-6 h-6 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" /></svg>',
                    'icon_bg' => 'bg-brand-50',
                    'title' => 'Cloud Computing',
                    'desc'  => 'Secure cloud migration, hybrid and multi-cloud architecture, and infrastructure optimization for scalable operations. We guide organizations through every phase — from cloud readiness assessments and migration planning to DevSecOps implementation and ongoing optimization — across AWS GovCloud, Azure Government, and private cloud environments.',
                    'tags'  => array('Cloud Migration', 'Hybrid Architecture', 'DevSecOps', 'FedRAMP'),
                ),
                array(
                    'icon' => '<svg class="w-6 h-6 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>',
                    'icon_bg' => 'bg-brand-50',
                    'title' => 'Artificial Intelligence &amp; Machine Learning',
                    'desc'  => 'From predictive analytics to intelligent automation, our AI/ML practice transforms how organizations process information and make decisions. We develop custom models, deploy natural language processing systems, build computer vision solutions, and integrate generative AI capabilities — all with the governance, explainability, and security that government missions demand.',
                    'tags'  => array('Predictive Analytics', 'NLP &amp; GenAI', 'Computer Vision', 'Responsible AI'),
                ),
                array(
                    'icon' => '<svg class="w-6 h-6 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>',
                    'icon_bg' => 'bg-brand-50',
                    'title' => 'Enterprise IT Management &amp; Innovation',
                    'desc'  => 'End-to-end IT management, modernization, and strategic technology planning for enterprise environments. We handle IT service management, infrastructure optimization, digital workplace transformation, and technology roadmap development — ensuring your IT operations align with mission objectives and deliver measurable return on investment.',
                    'tags'  => array('IT Modernization', 'ITSM', 'Digital Workplace', 'Technology Roadmaps'),
                ),
            );
            foreach ($cs_p2_services as $cs_svc) :
            ?>
            <div class="service-offering py-10 first:pt-0 border-b border-slate-200 last:border-0" data-animate="fade-up">
              <div class="flex items-start gap-5">
                <div class="w-12 h-12 <?php echo esc_attr($cs_svc['icon_bg']); ?> rounded-xl flex items-center justify-center shrink-0 mt-1">
                  <?php echo $cs_svc['icon']; ?>
                </div>
                <div>
                  <h3 class="text-xl font-extrabold text-slate-900 mb-3"><?php echo $cs_svc['title']; ?></h3>
                  <p class="text-slate-500 leading-relaxed"><?php echo esc_html($cs_svc['desc']); ?></p>
                  <div class="flex flex-wrap gap-2 mt-5">
                    <?php foreach ($cs_svc['tags'] as $tag) : ?>
                    <span class="px-3 py-1.5 bg-white text-slate-600 text-xs font-semibold rounded-lg border border-slate-200"><?php echo $tag; ?></span>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>


    <!-- Pillar 3: Security & Infrastructure -->
    <section id="security" class="py-20 lg:py-28 bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-start">

          <div class="lg:col-span-4 lg:sticky lg:top-28" data-animate="fade-right">
            <div class="inline-flex items-center gap-2 text-slate-700 text-xs font-bold uppercase tracking-[0.2em] mb-4">
              <span class="w-8 h-px bg-slate-700"></span>
              <?php esc_html_e('Pillar Three', 'central-strategies'); ?>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight"><?php esc_html_e('Security & Infrastructure', 'central-strategies'); ?></h2>
            <p class="mt-5 text-lg text-slate-500 leading-relaxed"><?php esc_html_e('Mission-critical environments demand uncompromising protection. We architect, implement, and continuously defend the systems your organization depends on — from perimeter to endpoint.', 'central-strategies'); ?></p>
            <div class="mt-8 p-5 bg-slate-50 rounded-xl border border-slate-200">
              <div class="flex items-center gap-3 mb-3">
                <div class="w-8 h-8 bg-slate-700 rounded-lg flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                </div>
                <span class="text-sm font-bold text-slate-800"><?php esc_html_e('Zero trust. Continuous monitoring. Full lifecycle.', 'central-strategies'); ?></span>
              </div>
              <p class="text-sm text-slate-500 leading-relaxed"><?php esc_html_e('Every engagement begins with a threat assessment tailored to your mission environment and compliance requirements.', 'central-strategies'); ?></p>
            </div>
          </div>

          <div class="lg:col-span-8 space-y-0">
            <?php
            $cs_p3_services = array(
                array(
                    'icon' => '<svg class="w-6 h-6 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>',
                    'icon_bg' => 'bg-slate-100',
                    'title' => 'Cybersecurity',
                    'desc'  => 'Advanced threat assessment, zero-trust architecture design, and continuous monitoring for critical infrastructure. Our cybersecurity practice spans vulnerability management, incident response, security operations center (SOC) services, and compliance frameworks including NIST, FedRAMP, and CMMC — ensuring your organization stays ahead of evolving threats while meeting the most rigorous federal standards.',
                    'tags'  => array('Zero Trust Architecture', 'Threat Intelligence', 'SOC-as-a-Service', 'NIST / CMMC'),
                ),
                array(
                    'icon' => '<svg class="w-6 h-6 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>',
                    'icon_bg' => 'bg-slate-100',
                    'title' => 'System Engineering',
                    'desc'  => 'Full-lifecycle system engineering from concept through sustainment. We design, integrate, and optimize complex IT ecosystems — handling requirements analysis, architecture design, testing and evaluation, configuration management, and technical documentation. Our systems engineers ensure every component works together seamlessly within your operational environment.',
                    'tags'  => array('Architecture Design', 'Integration &amp; Testing', 'Configuration Mgmt', 'Technical Documentation'),
                ),
            );
            foreach ($cs_p3_services as $cs_svc) :
            ?>
            <div class="service-offering py-10 first:pt-0 border-b border-slate-100 last:border-0" data-animate="fade-up">
              <div class="flex items-start gap-5">
                <div class="w-12 h-12 <?php echo esc_attr($cs_svc['icon_bg']); ?> rounded-xl flex items-center justify-center shrink-0 mt-1">
                  <?php echo $cs_svc['icon']; ?>
                </div>
                <div>
                  <h3 class="text-xl font-extrabold text-slate-900 mb-3"><?php echo $cs_svc['title']; ?></h3>
                  <p class="text-slate-500 leading-relaxed"><?php echo esc_html($cs_svc['desc']); ?></p>
                  <div class="flex flex-wrap gap-2 mt-5">
                    <?php foreach ($cs_svc['tags'] as $tag) : ?>
                    <span class="px-3 py-1.5 bg-slate-50 text-slate-600 text-xs font-semibold rounded-lg border border-slate-200"><?php echo $tag; ?></span>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>


    <!-- Our Approach -->
    <section class="py-20 lg:py-28 bg-slate-50 border-t border-slate-100">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="max-w-4xl mx-auto text-center" data-animate="fade-up">
          <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
            <span class="w-8 h-px bg-cs-600"></span>
            <?php esc_html_e('Our Approach', 'central-strategies'); ?>
            <span class="w-8 h-px bg-cs-600"></span>
          </div>
          <h2 class="text-3xl sm:text-4xl lg:text-[2.75rem] font-extrabold text-slate-900 tracking-tight leading-tight">
            <?php esc_html_e('Mission complexity demands', 'central-strategies'); ?> <span class="text-cs-600"><?php esc_html_e('integrated delivery.', 'central-strategies'); ?></span>
          </h2>
          <p class="mt-6 text-lg text-slate-500 leading-relaxed max-w-2xl mx-auto">
            <?php esc_html_e("Government IT is complex, high-stakes, and constantly evolving. We don't work in silos. Our teams integrate security, engineering, and data expertise from day one — working in tightly-knit, cross-discipline teams that share one goal: delivering measurable mission outcomes.", 'central-strategies'); ?>
          </p>
        </div>

        <div class="mt-16 grid sm:grid-cols-2 lg:grid-cols-4 gap-6" data-stagger>
          <?php
          $cs_steps = array(
              array('num' => '01', 'title' => 'Discover',  'desc' => 'Deep-dive into your mission environment, threat landscape, and operational constraints to define the real problem.'),
              array('num' => '02', 'title' => 'Design',    'desc' => 'Architect a tailored solution — integrating security, data, and technology — that maps directly to mission objectives.'),
              array('num' => '03', 'title' => 'Deliver',   'desc' => 'Execute with agile discipline. Transparent milestones, no surprises, and outcomes that are measurable from day one.'),
              array('num' => '04', 'title' => 'Sustain',   'desc' => 'Provide continuous improvement, monitoring, and support to keep your systems secure, optimized, and mission-ready.'),
          );
          foreach ($cs_steps as $cs_step) :
          ?>
          <div class="bg-white rounded-xl border border-slate-200 p-7 text-center" data-animate="fade-up">
            <div class="w-12 h-12 bg-cs-50 rounded-xl flex items-center justify-center mx-auto mb-5">
              <span class="text-xl font-extrabold text-cs-600"><?php echo esc_html($cs_step['num']); ?></span>
            </div>
            <h3 class="text-base font-bold text-slate-900 mb-2"><?php echo esc_html($cs_step['title']); ?></h3>
            <p class="text-sm text-slate-500 leading-relaxed"><?php echo esc_html($cs_step['desc']); ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>


    <!-- CTA -->
    <?php get_template_part('template-parts/sections/section', 'cta'); ?>

</main>

<?php
get_footer();
