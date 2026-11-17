/* ===================================================
   EzygoBD — Join Us Page JS
   =================================================== */
document.addEventListener('DOMContentLoaded', () => {

  /* ── Fade-in animation ────────────────────────── */
  const fadeEls = document.querySelectorAll('.jf-fade');
  if (fadeEls.length) {
    const obs = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        setTimeout(() => entry.target.classList.add('visible'), 80);
        obs.unobserve(entry.target);
      });
    }, { threshold: 0.1 });
    fadeEls.forEach(el => obs.observe(el));
  }

  /* ── Smooth scroll for tab links ──────────────── */
  document.querySelectorAll('.join-tab').forEach(tab => {
    tab.addEventListener('click', (e) => {
      e.preventDefault();
      const target = document.querySelector(tab.getAttribute('href'));
      if (target) {
        const headerH = document.getElementById('header')?.offsetHeight || 70;
        window.scrollTo({ top: target.offsetTop - headerH - 20, behavior: 'smooth' });
      }
    });
  });

});
