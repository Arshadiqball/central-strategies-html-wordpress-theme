    <section id="clients" class="py-16 lg:py-20 bg-slate-50 border-y border-slate-100">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="text-center mb-12" data-animate="fade-up">
          <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
            <span class="w-8 h-px bg-cs-600"></span>
            Trusted Partners
            <span class="w-8 h-px bg-cs-600"></span>
          </div>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
            <?php echo esc_html(get_theme_mod('cs_clients_heading', 'Trusted by Leading Organizations')); ?>
          </h2>
        </div>

        <?php
        // SVG icons keyed by position (decorative, non-editable)
        $cs_client_icons = array(
            '<svg class="w-7 h-7 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" /></svg>',
            '<svg class="w-7 h-7 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>',
            '<svg class="w-7 h-7 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" /></svg>',
            '<svg class="w-7 h-7 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" /></svg>',
            '<svg class="w-7 h-7 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>',
            '<svg class="w-7 h-7 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" /></svg>',
        );
        $cs_client_defaults = array('DEPT. OF DEFENSE', 'DHS', 'STATE DEPT.', 'NASA', 'NSA', 'DOJ');
        ?>

        <!-- Logo Row -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6 items-center" data-stagger>
          <?php for ($cs_i = 1; $cs_i <= 6; $cs_i++) :
              $cs_client_name = get_theme_mod("cs_client{$cs_i}_name", $cs_client_defaults[$cs_i - 1]);
              if (empty(trim($cs_client_name))) continue;
          ?>
          <div class="client-logo flex items-center justify-center h-20 bg-white rounded-lg border border-slate-100 px-4" data-animate="fade-up">
            <div class="flex flex-col items-center text-slate-700">
              <?php echo $cs_client_icons[$cs_i - 1]; ?>
              <span class="font-bold text-[11px] tracking-wide"><?php echo esc_html($cs_client_name); ?></span>
            </div>
          </div>
          <?php endfor; ?>
        </div>
      </div>
    </section>
