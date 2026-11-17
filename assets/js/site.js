/* Ezygo v2 — small, dependency-free, ES2017 for old Android Chrome. */
(function () {
  var root = document.documentElement;

  /* Theme: saved choice wins, else follow the device */
  var toggle = document.querySelector('[data-theme-toggle]');
  function isDark() {
    var t = root.getAttribute('data-theme');
    if (t) return t === 'dark';
    return window.matchMedia && matchMedia('(prefers-color-scheme: dark)').matches;
  }
  function syncLabel() {
    if (toggle) toggle.setAttribute('aria-label', isDark() ? 'Switch to light mode' : 'Switch to dark mode');
  }
  syncLabel();
  if (toggle) toggle.addEventListener('click', function () {
    var next = isDark() ? 'light' : 'dark';
    root.setAttribute('data-theme', next);
    try { localStorage.setItem('ezygo-theme', next); } catch (e) {}
    syncLabel();
  });

  /* Header border once scrolled */
  var header = document.querySelector('.site-header');
  function onScroll() { if (header) header.classList.toggle('scrolled', window.scrollY > 8); }
  window.addEventListener('scroll', onScroll, { passive: true }); onScroll();

  /* Mobile menu */
  var menu = document.getElementById('menu');
  var openBtn = document.querySelector('[data-menu-open]');
  function setMenu(open) {
    if (!menu) return;
    menu.hidden = !open;
    if (openBtn) openBtn.setAttribute('aria-expanded', String(open));
    document.body.style.overflow = open ? 'hidden' : '';
    if (open) { var c = menu.querySelector('[data-menu-close]'); if (c) c.focus(); }
    else if (openBtn) openBtn.focus();
  }
  if (openBtn) openBtn.addEventListener('click', function () { setMenu(true); });
  if (menu) {
    menu.addEventListener('click', function (e) {
      if (e.target === menu || e.target.closest('[data-menu-close]') || e.target.closest('a')) setMenu(false);
    });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && !menu.hidden) setMenu(false); });
  }

  /* "Book Sparky" etc. preselects that bike in the booking form */
  var names = { 'sparky': 'Sparky', 'eco-ride': 'Eco Ride', 'em1': 'EM1' };
  document.addEventListener('click', function (e) {
    var a = e.target.closest('[data-pick]');
    if (!a) return;
    var r = document.querySelector('input[name="vehicle_type"][value="' + names[a.getAttribute('data-pick')] + '"]');
    if (r) r.checked = true;
  });

  /* Form result from the server redirect (?status=success&form=rent_ev) */
  var q = new URLSearchParams(location.search);
  var status = q.get('status'), which = q.get('form');
  if (status) {
    var form = document.querySelector('[data-form="' + which + '"]') || document.querySelector('[data-form]');
    var n = form && form.querySelector('[data-notice="' + (status === 'success' ? 'success' : 'error') + '"]');
    if (n) { n.hidden = false; setTimeout(function () { n.scrollIntoView({ block: 'center' }); }, 50); }
    if (history.replaceState) history.replaceState(null, '', location.pathname + location.hash);
  }

  /* Friendly client-side validation: first problem gets focus and a clear message */
  Array.prototype.forEach.call(document.querySelectorAll('form[data-form]'), function (f) {
    f.addEventListener('submit', function (e) {
      var bad = null;
      Array.prototype.forEach.call(f.querySelectorAll('input, select, textarea'), function (el) {
        var wrap = el.closest('.field'); if (!wrap) return;
        var msg = wrap.querySelector('.err-msg');
        if (!el.checkValidity()) {
          if (!bad) bad = el;
          if (!msg) { msg = document.createElement('p'); msg.className = 'hint err-msg'; msg.style.color = 'var(--danger)'; wrap.appendChild(msg); }
          msg.textContent = el.validity.valueMissing ? 'This is required.' :
                            el.type === 'email' ? 'Enter an email like name@example.com.' :
                            el.type === 'tel' ? 'Enter a mobile number like 01712345678.' : 'Check this field.';
          el.setAttribute('aria-invalid', 'true');
        } else if (msg) { msg.remove(); el.removeAttribute('aria-invalid'); }
      });
      if (bad) { e.preventDefault(); bad.focus(); }
    });
  });
})();
