<?php
/**
 * Template Name: About
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
          <svg class="w-4 h-4 text-cs-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
          <span class="text-xs font-bold text-cs-300 uppercase tracking-widest"><?php esc_html_e('About Us', 'central-strategies'); ?></span>
        </div>
        <h1 class="hero-h1 text-4xl sm:text-5xl lg:text-[3.5rem] font-extrabold text-white leading-[1.1] tracking-tight text-balance max-w-4xl">
          <?php esc_html_e('Our', 'central-strategies'); ?> <span class="text-cs-500"><?php esc_html_e('Story', 'central-strategies'); ?></span>
        </h1>
        <p class="hero-p mt-7 text-lg text-slate-400 leading-relaxed max-w-3xl">
          <?php esc_html_e('Founded by a retired United States Coast Guard officer, Central Strategies carries forward a mission to protect our nation and its people through technology, talent, and trusted partnerships.', 'central-strategies'); ?>
        </p>
        <div class="hero-ctas mt-10 flex flex-col sm:flex-row gap-4">
          <a href="#our-story" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-cs-600 text-white font-bold text-sm uppercase tracking-wider rounded hover:bg-cs-500 transition-all shadow-lg shadow-cs-600/25">
            <?php esc_html_e('Read more', 'central-strategies'); ?>
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
          </a>
          <a href="<?php echo esc_url(cs_contact_url()); ?>" class="inline-flex items-center justify-center gap-2 px-8 py-4 text-white font-bold text-sm uppercase tracking-wider rounded border border-white/20 hover:bg-white/10 transition-all">
            <?php esc_html_e('Contact Us', 'central-strategies'); ?>
          </a>
        </div>
      </div>
    </section>

    <section id="our-story" class="py-20 lg:py-28 bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="max-w-3xl mx-auto">
          <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4" data-animate="fade-up">
            <span class="w-8 h-px bg-cs-600"></span> Our Story
          </div>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-8" data-animate="fade-up">Who We Are</h2>
          <?php the_content(); ?>
        </div>
      </div>
    </section>

    <section class="py-20 lg:py-28 bg-slate-50">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto" data-stagger>
          <div class="bg-white rounded-xl border border-slate-200 p-8" data-animate="fade-up">
            <div class="w-12 h-12 rounded-xl bg-cs-50 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-cs-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
            </div>
            <h3 class="text-xl font-bold text-slate-900 mb-3"><?php esc_html_e('Our Mission', 'central-strategies'); ?></h3>
            <p class="text-slate-500 leading-relaxed">To deliver innovative, reliable, and secure technology solutions that empower organizations to fulfill their most critical missions.</p>
          </div>
          <div class="bg-white rounded-xl border border-slate-200 p-8" data-animate="fade-up">
            <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center mb-5">
              <svg class="w-6 h-6 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
            </div>
            <h3 class="text-xl font-bold text-slate-900 mb-3"><?php esc_html_e('Our Vision', 'central-strategies'); ?></h3>
            <p class="text-slate-500 leading-relaxed">To be the most trusted partner for organizations seeking to harness technology as a force multiplier for their mission and impact.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-20 lg:py-28 bg-white">
      <div class="max-w-site mx-auto px-5 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-6" data-animate="fade-up"><?php esc_html_e('Our Core Values', 'central-strategies'); ?></h2>
        <p class="text-slate-500 max-w-2xl mx-auto mb-14 leading-relaxed" data-animate="fade-up">The principles that guide every engagement, every solution, and every relationship.</p>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto" data-stagger>
          <?php
          $cs_values = array(
              array('title' => 'Service', 'desc' => 'Our military heritage drives us to serve with honor, putting the mission above all else.'),
              array('title' => 'Innovation', 'desc' => 'We leverage emerging technology to solve the most complex challenges our clients face.'),
              array('title' => 'Integrity', 'desc' => 'Transparency and accountability guide every decision and every deliverable.'),
              array('title' => 'Excellence', 'desc' => 'We set the highest standards and measure ourselves by the impact we create.'),
              array('title' => 'Collaboration', 'desc' => 'We work alongside our clients as true partners invested in shared success.'),
              array('title' => 'Commitment', 'desc' => 'Our team is dedicated to long-term relationships and sustained mission outcomes.'),
          );
          foreach ($cs_values as $cs_value) :
          ?>
          <div class="bg-slate-50 rounded-xl border border-slate-200 p-6 text-left hover:shadow-md transition-shadow" data-animate="fade-up">
            <h3 class="font-bold text-slate-900 mb-2"><?php echo esc_html($cs_value['title']); ?></h3>
            <p class="text-sm text-slate-500 leading-relaxed"><?php echo esc_html($cs_value['desc']); ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

</main>

<?php
get_footer();
