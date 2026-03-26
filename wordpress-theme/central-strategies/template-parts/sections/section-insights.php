    <section id="insights" class="py-20 lg:py-28 bg-slate-50">
      <div class="max-w-site mx-auto px-5 lg:px-8">

        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 mb-14" data-animate="fade-up">
          <div>
            <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
              <span class="w-8 h-px bg-cs-600"></span>
              Insights
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
              Latest Thinking
            </h2>
          </div>
          <?php
          $cs_blog_page = get_page_by_path('blog');
          $cs_blog_url  = $cs_blog_page ? get_permalink($cs_blog_page) : home_url('/blog/');
          ?>
          <a href="<?php echo esc_url($cs_blog_url); ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-cs-600 uppercase tracking-wider hover:text-cs-700 transition-colors group shrink-0">
            View All
            <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
          </a>
        </div>

        <div class="grid md:grid-cols-3 gap-6" data-stagger>

          <!-- Insight 1 -->
          <article class="group bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg hover:shadow-slate-200/60 transition-all duration-300 card-lift" data-animate="fade-up">
            <div class="aspect-[16/9] bg-gradient-to-br from-cs-100 via-cs-50 to-white flex items-center justify-center">
              <svg class="w-14 h-14 text-cs-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="0.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
            </div>
            <div class="p-6">
              <div class="flex items-center gap-3 text-xs text-slate-400 font-medium mb-3">
                <span class="text-cs-600 bg-cs-50 px-2.5 py-1 rounded font-bold">Cybersecurity</span>
                <span>Mar 10, 2026</span>
              </div>
              <h3 class="text-base font-bold text-slate-900 group-hover:text-cs-600 transition-colors leading-snug">
                <a href="#">Zero Trust Implementation: A Practical Guide for Federal Agencies</a>
              </h3>
              <p class="mt-2 text-sm text-slate-500 leading-relaxed line-clamp-3">Practical steps for implementing zero trust across legacy and modern federal IT systems with minimal disruption and maximum security posture improvement.</p>
            </div>
          </article>

          <!-- Insight 2 -->
          <article class="group bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg hover:shadow-slate-200/60 transition-all duration-300 card-lift" data-animate="fade-up">
            <div class="aspect-[16/9] bg-gradient-to-br from-brand-100 via-brand-50 to-white flex items-center justify-center">
              <svg class="w-14 h-14 text-brand-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="0.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" /></svg>
            </div>
            <div class="p-6">
              <div class="flex items-center gap-3 text-xs text-slate-400 font-medium mb-3">
                <span class="text-brand-700 bg-brand-50 px-2.5 py-1 rounded font-bold">Cloud</span>
                <span>Feb 28, 2026</span>
              </div>
              <h3 class="text-base font-bold text-slate-900 group-hover:text-cs-600 transition-colors leading-snug">
                <a href="#">Cloud Computing Strategies for Government Modernization</a>
              </h3>
              <p class="mt-2 text-sm text-slate-500 leading-relaxed line-clamp-3">How agencies can leverage cloud-first strategies to modernize infrastructure, reduce costs, and improve citizen service delivery outcomes.</p>
            </div>
          </article>

          <!-- Insight 3 -->
          <article class="group bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg hover:shadow-slate-200/60 transition-all duration-300 card-lift" data-animate="fade-up">
            <div class="aspect-[16/9] bg-gradient-to-br from-slate-100 via-slate-50 to-white flex items-center justify-center">
              <svg class="w-14 h-14 text-slate-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="0.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>
            </div>
            <div class="p-6">
              <div class="flex items-center gap-3 text-xs text-slate-400 font-medium mb-3">
                <span class="text-slate-700 bg-slate-100 px-2.5 py-1 rounded font-bold">AI / ML</span>
                <span>Feb 14, 2026</span>
              </div>
              <h3 class="text-base font-bold text-slate-900 group-hover:text-cs-600 transition-colors leading-snug">
                <a href="#">Responsible AI in Government: Balancing Innovation with Accountability</a>
              </h3>
              <p class="mt-2 text-sm text-slate-500 leading-relaxed line-clamp-3">How agencies can adopt AI and machine learning while maintaining ethical standards, transparency, and mission-aligned governance.</p>
            </div>
          </article>

        </div><!-- /grid -->
      </div><!-- /max-w-site -->
    </section>
