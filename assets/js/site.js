/* EzygoBD v3 — dependency-free, ES5-safe for old Android Chrome. */
(function () {
  var root = document.documentElement;
  var doc = document;
  var reduce = window.matchMedia && matchMedia('(prefers-reduced-motion: reduce)').matches;
  var saveData = navigator.connection && navigator.connection.saveData;
  function $$(s, c) { return Array.prototype.slice.call((c || doc).querySelectorAll(s)); }

  /* ---------- Theme ---------- */
  var toggle = doc.getElementById('themeToggle');
  function isDark() {
    var t = root.getAttribute('data-theme');
    if (t) return t === 'dark';
    return window.matchMedia && matchMedia('(prefers-color-scheme: dark)').matches;
  }
  function syncTheme() {
    if (!toggle) return;
    toggle.setAttribute('aria-label', isDark() ? 'Switch to light mode' : 'Switch to dark mode');
    toggle.setAttribute('aria-pressed', String(isDark()));
  }
  syncTheme();
  if (toggle) toggle.addEventListener('click', function () {
    var next = isDark() ? 'light' : 'dark';
    root.setAttribute('data-theme', next);
    try { localStorage.setItem('ezygo-theme', next); } catch (e) {}
    syncTheme();
  });

  /* ---------- Header: solid once scrolled, hides on fast scroll down ---------- */
  var head = doc.querySelector('.site-head');
  var toTop = doc.getElementById('toTop');
  var dock = doc.querySelector('.dock');
  var lastY = window.pageYOffset, ticking = false;
  function onScroll() {
    var y = window.pageYOffset;
    if (head) {
      head.classList.toggle('is-stuck', y > 24);
      head.classList.toggle('is-hidden', y > 480 && y > lastY + 4 && !doc.body.classList.contains('menu-open'));
      if (y < lastY - 4) head.classList.remove('is-hidden');
    }
    if (toTop) toTop.classList.toggle('is-on', y > 900);
    if (dock) dock.classList.toggle('is-on', y > 420);
    lastY = y; ticking = false;
  }
  window.addEventListener('scroll', function () { if (!ticking) { ticking = true; requestAnimationFrame(onScroll); } }, { passive: true });
  onScroll();
  if (toTop) toTop.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' }); });

  /* ---------- Mega menu ---------- */
  var mega = doc.getElementById('megaMenu'), menuBtn = doc.getElementById('menuBtn'), megaClose = doc.getElementById('megaClose');
  function setMenu(open) {
    if (!mega) return;
    if (open) { mega.hidden = false; mega.offsetWidth; mega.classList.add('is-open'); }
    else { mega.classList.remove('is-open'); mega.hidden = true; }
    doc.body.classList.toggle('menu-open', open);
    if (menuBtn) menuBtn.setAttribute('aria-expanded', String(open));
    if (open && megaClose) megaClose.focus(); else if (!open && menuBtn) menuBtn.focus();
  }
  if (menuBtn) menuBtn.addEventListener('click', function () { setMenu(true); });
  if (megaClose) megaClose.addEventListener('click', function () { setMenu(false); });
  if (mega) {
    mega.addEventListener('click', function (e) { if (e.target.closest('a')) setMenu(false); });
    doc.addEventListener('keydown', function (e) {
      if (mega.hidden) return;
      if (e.key === 'Escape') setMenu(false);
      if (e.key === 'Tab') { /* keep focus inside the menu */
        var f = $$('a, button', mega); var first = f[0], last = f[f.length - 1];
        if (e.shiftKey && doc.activeElement === first) { e.preventDefault(); last.focus(); }
        else if (!e.shiftKey && doc.activeElement === last) { e.preventDefault(); first.focus(); }
      }
    });
  }

  /* ---------- Reveal on scroll (pop-in) ---------- */
  $$('[data-stagger]').forEach(function (g) {
    Array.prototype.forEach.call(g.children, function (c, i) {
      if (!c.hasAttribute('data-reveal')) c.setAttribute('data-reveal', g.getAttribute('data-stagger') || '');
      c.style.setProperty('--i', i);
    });
  });
  var revealEls = $$('[data-reveal]');
  if (reduce || !('IntersectionObserver' in window)) {
    revealEls.forEach(function (el) { el.classList.add('is-in'); });
  } else {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) { if (en.isIntersecting) { en.target.classList.add('is-in'); io.unobserve(en.target); } });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });
    revealEls.forEach(function (el) { io.observe(el); });
  }

  /* ---------- Count-up (real number stays in the HTML) ---------- */
  function countUp(el) {
    var raw = el.getAttribute('data-count');
    var m = raw.match(/^([^0-9]*)([0-9][0-9,]*\.?[0-9]*)(.*)$/);
    if (!m) return;
    var pre = m[1], numStr = m[2], post = m[3];
    var dec = (numStr.split('.')[1] || '').length, target = parseFloat(numStr.replace(/,/g, '')), comma = numStr.indexOf(',') > -1;
    var t0 = null, dur = 1400;
    function fmt(v) {
      var s = v.toFixed(dec);
      if (comma) { var p = s.split('.'); p[0] = p[0].replace(/\B(?=(\d{3})+(?!\d))/g, ','); s = p.join('.'); }
      return pre + s + post;
    }
    function step(t) {
      if (!t0) t0 = t;
      var k = Math.min(1, (t - t0) / dur), e = 1 - Math.pow(1 - k, 4);
      el.textContent = fmt(target * e);
      if (k < 1) requestAnimationFrame(step); else el.textContent = raw;
    }
    requestAnimationFrame(step);
  }
  var counters = $$('.countup');
  if (counters.length && !reduce && 'IntersectionObserver' in window) {
    var co = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) { if (en.isIntersecting) { countUp(en.target); co.unobserve(en.target); } });
    }, { threshold: 0.6 });
    counters.forEach(function (c) { co.observe(c); });
  }

  /* ---------- Background videos: play when visible, poster only for reduced motion / Save-Data ---------- */
  $$('video[data-autoplay]').forEach(function (v) {
    if (reduce || saveData) return; /* poster stays */
    v.preload = 'auto';
    if (!('IntersectionObserver' in window)) { v.play && v.play().catch(function () {}); return; }
    new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (en.isIntersecting) { var p = v.play(); if (p && p.catch) p.catch(function () {}); }
        else v.pause();
      });
    }, { threshold: 0.05 }).observe(v);
  });
  doc.addEventListener('visibilitychange', function () {
    $$('video[data-autoplay]').forEach(function (v) { if (doc.hidden) v.pause(); });
  });

  /* ---------- Gentle tilt on bike cards (mouse only) ---------- */
  if (!reduce && window.matchMedia && matchMedia('(hover: hover) and (pointer: fine)').matches) {
    $$('[data-tilt]').forEach(function (card) {
      card.addEventListener('mousemove', function (e) {
        var r = card.getBoundingClientRect(), x = (e.clientX - r.left) / r.width - .5, y = (e.clientY - r.top) / r.height - .5;
        card.style.transform = 'perspective(900px) rotateY(' + (x * 5) + 'deg) rotateX(' + (-y * 5) + 'deg) translateY(-4px)';
      });
      card.addEventListener('mouseleave', function () { card.style.transform = ''; });
    });
  }

  /* ---------- FAQ: one open at a time ---------- */
  $$('[data-faq]').forEach(function (list) {
    list.addEventListener('toggle', function (e) {
      if (e.target.open) $$('details', list).forEach(function (d) { if (d !== e.target) d.open = false; });
    }, true);
  });

  /* ---------- Tabs that set a hidden field (contact / join) ---------- */
  $$('[data-tabs]').forEach(function (tabs) {
    var input = doc.getElementById(tabs.getAttribute('data-tabs'));
    $$('button', tabs).forEach(function (b) {
      b.addEventListener('click', function () {
        $$('button', tabs).forEach(function (x) { x.setAttribute('aria-selected', 'false'); });
        b.setAttribute('aria-selected', 'true');
        if (input) input.value = b.getAttribute('data-value');
      });
    });
  });

  /* ---------- Tabs that switch form panels (contact) ---------- */
  $$('[data-panels]').forEach(function (list) {
    var tabs = $$('[role="tab"]', list);
    function select(t) {
      tabs.forEach(function (x) {
        var on = x === t, panel = doc.getElementById(x.getAttribute('aria-controls'));
        x.setAttribute('aria-selected', String(on)); x.tabIndex = on ? 0 : -1;
        if (panel) panel.hidden = !on;
      });
    }
    tabs.forEach(function (t, i) {
      t.addEventListener('click', function () { select(t); });
      t.addEventListener('keydown', function (e) {
        var k = e.key === 'ArrowRight' ? 1 : e.key === 'ArrowLeft' ? -1 : 0;
        if (k) { e.preventDefault(); var n = tabs[(i + k + tabs.length) % tabs.length]; select(n); n.focus(); }
      });
    });
    var m = location.search.match(/form=(support|partnership)/);
    if (m) select(tabs[m[1] === 'support' ? 1 : 2]);
  });

  /* ---------- Corporate video: big play button ---------- */
  var cv = doc.getElementById('corpVideo'), cp = doc.getElementById('corpPlay');
  if (cv && cp) {
    cp.addEventListener('click', function () { var p = cv.play(); if (p && p.catch) p.catch(function () {}); });
    cv.addEventListener('play', function () { cp.hidden = true; });
    cv.addEventListener('pause', function () { cp.hidden = false; });
  }

  /* ---------- Form result after the server redirect (?status=success&form=rent_ev) ---------- */
  var q = location.search.replace(/^\?/, '').split('&').reduce(function (o, kv) { var p = kv.split('='); if (p[0]) o[decodeURIComponent(p[0])] = decodeURIComponent(p[1] || ''); return o; }, {});
  if (q.status) {
    var form = doc.querySelector('form[data-form="' + q.form + '"]') || doc.querySelector('form[data-form]');
    var n = form && form.querySelector('[data-notice="' + (q.status === 'success' ? 'success' : 'error') + '"]');
    if (n) { n.hidden = false; setTimeout(function () { n.scrollIntoView({ block: 'center' }); }, 60); }
    if (history.replaceState) history.replaceState(null, '', location.pathname + location.hash);
  }

  /* ---------- Clear inline validation ---------- */
  $$('form[data-form]').forEach(function (f) {
    f.setAttribute('novalidate', '');
    f.addEventListener('submit', function (e) {
      var bad = null;
      $$('input, select, textarea', f).forEach(function (el) {
        var wrap = el.closest('.field'); if (!wrap || el.type === 'hidden') return;
        var msg = wrap.querySelector('.err-msg');
        if (!el.checkValidity()) {
          if (!bad) bad = el;
          if (!msg) { msg = doc.createElement('p'); msg.className = 'err-msg'; msg.setAttribute('role', 'alert'); wrap.appendChild(msg); }
          msg.textContent = el.validity.valueMissing ? 'This is required.' :
                            el.type === 'email' ? 'Enter an email like name@example.com.' :
                            el.type === 'tel' ? 'Enter a mobile number like 01712345678.' : 'Please check this field.';
          el.setAttribute('aria-invalid', 'true');
        } else if (msg) { msg.parentNode.removeChild(msg); el.removeAttribute('aria-invalid'); }
      });
      if (bad) { e.preventDefault(); bad.focus(); }
    });
  });
})();
