    <section id="clients" class="py-16 lg:py-20 bg-slate-50 border-y border-slate-100">
      <div class="max-w-site mx-auto px-5 lg:px-8">
        <div class="text-center mb-12" data-animate="fade-up">
          <div class="inline-flex items-center gap-2 text-cs-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">
            <span class="w-8 h-px bg-cs-600"></span>
            <?php esc_html_e('Trusted Partners', 'central-strategies'); ?>
            <span class="w-8 h-px bg-cs-600"></span>
          </div>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
            <?php echo esc_html(get_theme_mod('cs_clients_heading', 'Trusted by Leading Organizations')); ?>
          </h2>
        </div>

        <?php
        $cs_partners = array(
            array('name' => 'DHS',         'icon' => '<svg class="w-7 h-7 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>'),
            array('name' => 'USCG',        'icon' => '<svg class="w-7 h-7 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>'),
            array('name' => 'DOW',         'icon' => '<svg class="w-7 h-7 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" /></svg>'),
            array('name' => 'DOS',         'icon' => '<svg class="w-7 h-7 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" /></svg>'),
            array('name' => 'LEIDOS',      'icon' => '<svg class="w-7 h-7 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>'),
            array('name' => 'GDIT',        'icon' => '<svg class="w-7 h-7 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>'),
            array('name' => 'SAIC',        'icon' => '<svg class="w-7 h-7 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>'),
            array('name' => 'ECS FEDERAL', 'icon' => '<svg class="w-7 h-7 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>'),
            array('name' => 'DATABRICKS',  'icon' => '<svg class="w-7 h-7 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" /></svg>', 'highlight' => true),
        );
        ?>

        <div class="grid grid-cols-3 sm:grid-cols-5 lg:grid-cols-9 gap-4 items-center" data-stagger>
          <?php foreach ($cs_partners as $cs_p) :
              $cs_is_highlight = !empty($cs_p['highlight']);
          ?>
          <div class="client-logo flex items-center justify-center h-20 bg-white rounded-lg px-3 <?php echo $cs_is_highlight ? 'border border-cs-600/20 ring-1 ring-cs-600/10 bg-gradient-to-br from-white to-cs-50' : 'border border-slate-100'; ?>" data-animate="fade-up">
            <div class="flex flex-col items-center <?php echo $cs_is_highlight ? 'text-cs-700' : 'text-slate-700'; ?>">
              <?php echo $cs_p['icon']; ?>
              <span class="font-bold text-[11px] tracking-wide"><?php echo esc_html($cs_p['name']); ?></span>
              <?php if ($cs_is_highlight) : ?>
              <span class="text-[9px] font-semibold text-cs-500 uppercase tracking-wider"><?php esc_html_e('Partner', 'central-strategies'); ?></span>
              <?php endif; ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
