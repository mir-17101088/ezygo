/* ===================================================
   EzygoBD — Our EVs Page JS  (evs.js)
   ===================================================
   1. Hero video fade-in
   2. .ef-fade IntersectionObserver (staggered)
   3. White-label mini-stat counters (.wl-mstat-val)
   4. Success-story counters (.ss-count)
   5. FAQ accordion
   6. Contact form submit handler
   ================================================= */

document.addEventListener('DOMContentLoaded', () => {

  /* ── 1. Hero video fade-in ──────────────────────── */
  const heroVideo = document.querySelector('.evs-hero-video');
  if (heroVideo) {
    if (heroVideo.readyState >= 3) {
      heroVideo.classList.add('loaded');
    } else {
      heroVideo.addEventListener('canplaythrough', () => {
        heroVideo.classList.add('loaded');
      }, { once: true });
    }
  }

  /* ── 2. Staggered ef-fade observer ─────────────── */
  const fadeEls = document.querySelectorAll('.ef-fade');
  if (fadeEls.length) {
    const obs = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        const siblings = [...entry.target.parentElement.children]
          .filter(c => c.classList.contains('ef-fade'));
        const delay = siblings.indexOf(entry.target) * 80;
        setTimeout(() => entry.target.classList.add('visible'), delay);
        obs.unobserve(entry.target);
      });
    }, { threshold: 0.1 });
    fadeEls.forEach(el => obs.observe(el));
  }

  /* ── Generic integer counter helper ────────────── */
  const easeOut = t => 1 - Math.pow(1 - t, 2.5);

  function runCounter(el, target, duration = 2000, formatFn = null) {
    const start = performance.now();
    const tick = (now) => {
      const p   = Math.min((now - start) / duration, 1);
      const val = Math.round(target * easeOut(p));
      el.textContent = formatFn ? formatFn(val) : val.toLocaleString('en-US');
      if (p < 1) requestAnimationFrame(tick);
      else el.textContent = formatFn ? formatFn(target) : target.toLocaleString('en-US');
    };
    requestAnimationFrame(tick);
  }

  function observeAndCount(selector, sectionSelector, duration = 2000) {
    const els = document.querySelectorAll(selector);
    if (!els.length) return;
    const root = els[0].closest(sectionSelector) || els[0];
    let fired = false;
    const obs = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting && !fired) {
        fired = true;
        els.forEach(el => {
          const t = parseInt(el.dataset.target, 10);
          if (!isNaN(t)) runCounter(el, t, duration);
        });
        obs.disconnect();
      }
    }, { threshold: 0.3 });
    obs.observe(root);
  }

  /* ── 3. White-label mini stats ──────────────────── */
  observeAndCount('.wl-mstat-val', '.wl-tech-box', 1800);

  /* ── 4. Success story counters ──────────────────── */
  observeAndCount('.ss-count', '.ss-stats-row', 2200);

  /* ── 5. FAQ accordion ───────────────────────────── */
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const btn = item.querySelector('.faq-q');
    const ans = item.querySelector('.faq-a');
    if (!btn || !ans) return;
    btn.addEventListener('click', () => {
      const isOpen = item.classList.contains('open');
      /* Close all */
      faqItems.forEach(i => {
        i.classList.remove('open');
        i.querySelector('.faq-q').setAttribute('aria-expanded', 'false');
        i.querySelector('.faq-a').style.maxHeight = null;
      });
      /* Open clicked if it was closed */
      if (!isOpen) {
        item.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
        ans.style.maxHeight = ans.scrollHeight + 'px';
      }
    });
  });

  /* ── 6. Contact form ─────────────────────────────── */
  const form = document.querySelector('.ec-form');
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const btn = form.querySelector('.ec-submit');
      btn.textContent = 'Message Sent!';
      btn.style.background = '#009624';
      btn.disabled = true;
      setTimeout(() => {
        btn.innerHTML = 'Send Message <i class="fa-solid fa-paper-plane"></i>';
        btn.style.background = '';
        btn.disabled = false;
        form.reset();
      }, 3500);
    });
  }

  /* ── 7. Vehicle spec display on select ───────────── */
  const vehicleSpecs = {
    'E-Scooter': [
      { icon: 'fa-road', label: 'Range: 120 km' },
      { icon: 'fa-bolt', label: 'Charge: 3 hrs' },
      { icon: 'fa-gauge-high', label: 'Speed: 60 km/h' },
      { icon: 'fa-weight-hanging', label: 'Payload: 150 kg' },
      { icon: 'fa-car-battery', label: '72V Lithium' },
      { icon: 'fa-plug', label: '2000W BLDC' }
    ],
    'E-Bike': [
      { icon: 'fa-road', label: 'Range: 80 km' },
      { icon: 'fa-bolt', label: 'Charge: 2.5 hrs' },
      { icon: 'fa-gauge-high', label: 'Speed: 35 km/h' },
      { icon: 'fa-weight-hanging', label: 'Weight: 22 kg' },
      { icon: 'fa-car-battery', label: '48V Lithium' },
      { icon: 'fa-plug', label: '500W Hub Motor' }
    ],
    'E-Rickshaw': [
      { icon: 'fa-road', label: 'Range: 100 km' },
      { icon: 'fa-bolt', label: 'Charge: 4 hrs' },
      { icon: 'fa-gauge-high', label: 'Speed: 40 km/h' },
      { icon: 'fa-box', label: 'Cargo: 500 kg' },
      { icon: 'fa-car-battery', label: '72V Lead-acid' },
      { icon: 'fa-plug', label: '1500W BLDC' }
    ]
  };

  const vSelect = document.getElementById('revVehicle');
  const specsWrap = document.getElementById('revVehicleSpecs');
  const specsGrid = document.getElementById('revSpecsGrid');
  if (vSelect && specsWrap && specsGrid) {
    vSelect.addEventListener('change', () => {
      const val = vSelect.value;
      if (vehicleSpecs[val]) {
        specsGrid.innerHTML = vehicleSpecs[val].map(s =>
          '<div class="rev-spec-item"><i class="fa-solid ' + s.icon + '"></i> ' + s.label + '</div>'
        ).join('');
        specsWrap.style.display = 'block';
      } else {
        specsWrap.style.display = 'none';
      }
    });
  }

});
