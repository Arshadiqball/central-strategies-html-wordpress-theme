<?php
/**
 * Head: Tailwind CDN, fonts, extended config, and home-page-only CSS.
 * WordPress: included from header.php after charset/viewport; use with add_theme_support( 'title-tag' ).
 *
 * @package Central_Strategies
 */
?>
  <meta name="description" content="Central Strategies, a service-disabled veteran-owned technology company, specializes in advanced IT solutions that drive innovation, enhance efficiency, and solve complex challenges." />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              950: '#142119',
              900: '#1a3023',
              800: '#22412e',
              700: '#2f5d3a',
              600: '#387047',
              500: '#458756',
              400: '#5a9e6d',
              300: '#7fb890',
              200: '#aad4b6',
              100: '#d4eadb',
              50:  '#eef6f0',
            },
            cs: {
              900: '#6e1115',
              800: '#8c161b',
              700: '#a51b21',
              600: '#be2026',
              500: '#cc2b31',
              400: '#d94f54',
              300: '#e57a7e',
              200: '#f0a8ab',
              100: '#f8d4d5',
              50:  '#fceeed',
            },
            slate: {
              950: '#0c0e13',
              900: '#12151c',
              800: '#1e2230',
              700: '#2d3348',
              600: '#454d68',
              500: '#636c8a',
              400: '#8a92ac',
              300: '#b1b7cb',
              200: '#d4d8e4',
              100: '#eceef4',
              50:  '#f6f7fa',
            },
          },
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
          },
          maxWidth: {
            site: '1300px',
          },
        },
      },
    }
  </script>
  <style type="text/tailwindcss">
    @layer base {
      html { scroll-behavior: smooth; }
    }
    @layer utilities {
      .text-balance { text-wrap: balance; }
      .client-logo { filter: grayscale(100%) opacity(0.45); transition: all 0.4s ease; }
      .client-logo:hover { filter: grayscale(0%) opacity(1); transform: translateY(-2px); }
      .line-clamp-3 { display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
    }
  </style>
  <style>
    /* Global h2 line-height (overrides Tailwind leading-* on headings) */
    h2 {
      line-height: 1.4 !important;
    }

    /* ── Scroll-reveal base states ── */
    [data-animate] {
      opacity: 0;
      will-change: transform, opacity;
      transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1),
                  transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
    }
    [data-animate="fade-up"]   { transform: translateY(40px); }
    [data-animate="fade-down"] { transform: translateY(-40px); }
    [data-animate="fade-left"] { transform: translateX(50px); }
    [data-animate="fade-right"]{ transform: translateX(-50px); }
    [data-animate="fade-in"]   { transform: scale(0.97); }
    [data-animate="zoom-in"]   { transform: scale(0.88); }

    [data-animate].is-visible {
      opacity: 1;
      transform: translateY(0) translateX(0) scale(1);
    }

    /* ── Stagger delays for grid children ── */
    [data-stagger] > [data-animate]:nth-child(1)  { transition-delay: 0ms; }
    [data-stagger] > [data-animate]:nth-child(2)  { transition-delay: 80ms; }
    [data-stagger] > [data-animate]:nth-child(3)  { transition-delay: 160ms; }
    [data-stagger] > [data-animate]:nth-child(4)  { transition-delay: 240ms; }
    [data-stagger] > [data-animate]:nth-child(5)  { transition-delay: 320ms; }
    [data-stagger] > [data-animate]:nth-child(6)  { transition-delay: 400ms; }
    [data-stagger] > [data-animate]:nth-child(7)  { transition-delay: 480ms; }
    [data-stagger] > [data-animate]:nth-child(8)  { transition-delay: 560ms; }

    /* ── Hero entrance keyframes ── */
    @keyframes heroFadeUp {
      from { opacity: 0; transform: translateY(30px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes heroFadeIn {
      from { opacity: 0; }
      to   { opacity: 1; }
    }
    @keyframes heroBadgeSlide {
      from { opacity: 0; transform: translateX(-20px); }
      to   { opacity: 1; transform: translateX(0); }
    }
    @keyframes statCount {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .hero-badge  { animation: heroBadgeSlide 0.6s cubic-bezier(0.16,1,0.3,1) 0.1s both; }
    .hero-h1     { animation: heroFadeUp 0.7s cubic-bezier(0.16,1,0.3,1) 0.25s both; }
    .hero-p      { animation: heroFadeUp 0.7s cubic-bezier(0.16,1,0.3,1) 0.4s both; }
    .hero-ctas   { animation: heroFadeUp 0.7s cubic-bezier(0.16,1,0.3,1) 0.55s both; }
    .hero-stats  { animation: heroFadeUp 0.7s cubic-bezier(0.16,1,0.3,1) 0.7s both; }
    .hero-cap-panel { animation: heroFadeUp 0.75s cubic-bezier(0.16,1,0.3,1) 0.35s both; }

    /* ── Hover micro-interactions for cards ── */
    .card-lift {
      transition: transform 0.3s cubic-bezier(0.16,1,0.3,1),
                  box-shadow 0.3s ease,
                  border-color 0.3s ease;
    }
    .card-lift:hover { transform: translateY(-4px); }

    /* ── Stat counter ── */
    .stat-number {
      display: inline-block;
      transition: transform 0.6s cubic-bezier(0.16,1,0.3,1);
    }
    .stat-number.counted { animation: statCount 0.6s cubic-bezier(0.16,1,0.3,1) both; }

    /* ── Reduce motion for accessibility ── */
    @media (prefers-reduced-motion: reduce) {
      [data-animate],
      .hero-badge, .hero-h1, .hero-p, .hero-ctas, .hero-stats, .hero-cap-panel {
        animation: none !important;
        transition: none !important;
        opacity: 1 !important;
        transform: none !important;
      }
      .card-lift:hover { transform: none; }
    }
  </style>
