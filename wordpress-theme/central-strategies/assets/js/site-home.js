    (function () {
      /* ── Header scroll shadow + mobile menu ── */
      var header = document.getElementById('site-header');
      var toggle = document.getElementById('mobile-toggle');
      var nav = document.getElementById('mobile-nav');
      var iconHam = document.getElementById('icon-hamburger');
      var iconX = document.getElementById('icon-close');
      var menuOpen = false;

      window.addEventListener('scroll', function () {
        header.classList.toggle('shadow-md', window.scrollY > 10);
        header.classList.toggle('shadow-slate-200/60', window.scrollY > 10);
      });

      toggle.addEventListener('click', function () {
        menuOpen = !menuOpen;
        nav.classList.toggle('hidden', !menuOpen);
        iconHam.classList.toggle('hidden', menuOpen);
        iconX.classList.toggle('hidden', !menuOpen);
        toggle.setAttribute('aria-expanded', menuOpen);
      });

      nav.querySelectorAll('.mobile-link').forEach(function (a) {
        a.addEventListener('click', function () {
          menuOpen = false;
          nav.classList.add('hidden');
          iconHam.classList.remove('hidden');
          iconX.classList.add('hidden');
          toggle.setAttribute('aria-expanded', 'false');
        });
      });

      /* ── Scroll-triggered reveal animations ── */
      var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

      if (!prefersReduced) {
        var revealObserver = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              revealObserver.unobserve(entry.target);
            }
          });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        document.querySelectorAll('[data-animate]').forEach(function (el) {
          revealObserver.observe(el);
        });
      } else {
        document.querySelectorAll('[data-animate]').forEach(function (el) {
          el.classList.add('is-visible');
        });
      }

      /* ── Animated number counter for stats ── */
      var countersAnimated = false;

      function animateCounters() {
        if (countersAnimated) return;
        countersAnimated = true;

        document.querySelectorAll('.stat-number[data-count]').forEach(function (el) {
          var target = parseInt(el.getAttribute('data-count'), 10);
          var duration = 1800;
          var start = performance.now();

          function easeOutExpo(t) {
            return t === 1 ? 1 : 1 - Math.pow(2, -10 * t);
          }

          function tick(now) {
            var elapsed = now - start;
            var progress = Math.min(elapsed / duration, 1);
            var easedProgress = easeOutExpo(progress);
            el.textContent = Math.round(easedProgress * target);

            if (progress < 1) {
              requestAnimationFrame(tick);
            } else {
              el.textContent = target;
            }
          }

          requestAnimationFrame(tick);
        });
      }

      if (!prefersReduced) {
        var statsSection = document.getElementById('stats') || document.getElementById('capabilities-stats');
        if (statsSection) {
          var statsObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
              if (entry.isIntersecting) {
                setTimeout(animateCounters, 300);
                statsObserver.unobserve(entry.target);
              }
            });
          }, { threshold: 0.3 });
          statsObserver.observe(statsSection);
        }
      } else {
        document.querySelectorAll('.stat-number[data-count]').forEach(function (el) {
          el.textContent = el.getAttribute('data-count');
        });
      }

      /* ── Smooth parallax for header on scroll ── */
      var lastScroll = 0;
      var ticking = false;

      window.addEventListener('scroll', function () {
        lastScroll = window.scrollY;
        if (!ticking) {
          requestAnimationFrame(function () {
            if (lastScroll > 600) {
              header.style.borderBottomColor = 'rgba(190, 32, 38, 0.15)';
            } else {
              header.style.borderBottomColor = '';
            }
            ticking = false;
          });
          ticking = true;
        }
      });
    })();
