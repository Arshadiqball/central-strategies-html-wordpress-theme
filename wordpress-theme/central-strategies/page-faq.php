<?php
/**
 * Template Name: FAQ
 *
 * @package Central_Strategies
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">

    <section class="relative pt-20 overflow-hidden bg-slate-950">
      <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-brand-950" aria-hidden="true"></div>
      <div class="absolute inset-0 opacity-[0.04]" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 40px 40px;" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cs-600/40 to-transparent" aria-hidden="true"></div>
      <div class="relative max-w-site mx-auto px-5 lg:px-8 w-full py-20 lg:py-24">
        <div class="hero-badge inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-cs-600/30 bg-cs-600/10 mb-8">
          <svg class="w-4 h-4 text-cs-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <span class="text-xs font-bold text-cs-300 uppercase tracking-widest"><?php esc_html_e('FAQ', 'central-strategies'); ?></span>
        </div>
        <h1 class="hero-h1 text-4xl sm:text-5xl lg:text-[3.5rem] font-extrabold text-white leading-[1.1] tracking-tight text-balance max-w-4xl">
          <?php esc_html_e('Frequently Asked', 'central-strategies'); ?> <span class="text-cs-500"><?php esc_html_e('Questions', 'central-strategies'); ?></span>
        </h1>
        <p class="hero-p mt-7 text-lg text-slate-400 leading-relaxed max-w-3xl">
          <?php esc_html_e('Quick answers about our certifications, capabilities, contract vehicles, and how we work with federal and enterprise clients.', 'central-strategies'); ?>
        </p>
      </div>
    </section>

    <section class="py-16 lg:py-24 bg-white">
      <div class="max-w-3xl mx-auto px-5 lg:px-8">

        <?php
        $cs_faqs = array(
            array(
                'q' => "What is Central Strategies' socioeconomic certification?",
                'a' => 'Central Strategies is a Service-Disabled Veteran-Owned Small Business (SDVOSB). We maintain current registration and certifications needed for federal and agency set-aside opportunities, including a valid UEI and CAGE code for government contracting.',
            ),
            array(
                'q' => 'What contract vehicles does Central Strategies hold?',
                'a' => 'We actively pursue and hold positions on key government-wide and agency-specific contract vehicles, including GSA MAS, CIO-SP3 Small Business, SEWP V, and various agency BPAs. Contact us for the most current list of our contract vehicles.',
            ),
            array(
                'q' => 'What industries does Central Strategies serve?',
                'a' => 'We primarily support federal civilian agencies, the Department of Defense, and the Intelligence Community. We also partner with state and local governments and commercial enterprises that require enterprise-grade IT, cybersecurity, and data solutions.',
            ),
            array(
                'q' => 'Does Central Strategies have security-cleared personnel?',
                'a' => 'Yes. A significant portion of our workforce holds active security clearances up to TS/SCI. We maintain a robust pipeline of cleared professionals ready for rapid deployment on classified programs.',
            ),
            array(
                'q' => 'What are Central Strategies core service areas?',
                'a' => 'Our core capabilities include Cybersecurity, Enterprise IT Management, Cloud Computing, Artificial Intelligence / Machine Learning, Data Analytics & BI, System Engineering, Technological Automation, and Budget & Accounting support.',
            ),
            array(
                'q' => 'How does Central Strategies approach cybersecurity?',
                'a' => 'We implement a defense-in-depth strategy anchored in Zero Trust Architecture principles. Our approach includes continuous monitoring, risk-based frameworks (NIST, CMMC), incident response planning, and tailored security assessments for each client environment.',
            ),
            array(
                'q' => 'Can Central Strategies support rapid staffing requirements?',
                'a' => 'Absolutely. We maintain a curated bench of pre-screened, cleared professionals across all our service areas. Our recruiting team specializes in fast-turnaround staffing for urgent mission needs.',
            ),
            array(
                'q' => 'How do I get started with Central Strategies?',
                'a' => 'Reach out through our contact page or email us directly at info@centralstrategies.com. We will schedule an initial consultation to understand your requirements and propose a tailored solution.',
            ),
        );

        foreach ($cs_faqs as $cs_faq) :
        ?>
        <details class="faq-item group rounded-xl border border-slate-200 bg-white px-6 py-1 transition-colors hover:border-slate-300 mb-3" data-animate="fade-up">
          <summary class="flex cursor-pointer items-center justify-between gap-4 py-5 text-left font-bold text-slate-900">
            <?php echo esc_html($cs_faq['q']); ?>
            <svg class="faq-chevron w-5 h-5 shrink-0 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
          </summary>
          <div class="pb-5 text-slate-600 leading-relaxed border-t border-slate-100 pt-4">
            <?php echo esc_html($cs_faq['a']); ?>
          </div>
        </details>
        <?php endforeach; ?>

      </div>
    </section>

    <section class="relative py-24 lg:py-32 overflow-hidden bg-slate-950">
      <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-brand-950" aria-hidden="true"></div>
      <div class="relative max-w-site mx-auto px-5 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mb-6" data-animate="fade-up"><?php esc_html_e('Still Have Questions?', 'central-strategies'); ?></h2>
        <p class="text-lg text-slate-400 max-w-xl mx-auto mb-10" data-animate="fade-up"><?php esc_html_e("We're here to help. Reach out and our team will get back to you within one business day.", 'central-strategies'); ?></p>
        <a href="<?php echo esc_url(cs_contact_url()); ?>" class="inline-flex items-center gap-2 px-10 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-500 transition-colors shadow-lg shadow-cs-600/25" data-animate="fade-up">
          <?php esc_html_e('Contact Us', 'central-strategies'); ?>
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
        </a>
      </div>
    </section>

</main>

<?php
get_footer();
