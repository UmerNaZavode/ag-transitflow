// aboutUsTabs.js
export default function aboutUsTabs(rootSelector = ".about-us") {
  const roots = document.querySelectorAll(rootSelector);
  if (!roots.length) return;

  roots.forEach((root) => {
    const buttons = root.querySelectorAll(".about-us__tabs-button");
    const panels = root.querySelectorAll(".about-us__tabs-content");
    if (!buttons.length || !panels.length) return;

    // Нормализуем data-tab (если не задано — ставим по индексу)
    buttons.forEach((btn, i) => { if (!btn.dataset.tab) btn.dataset.tab = String(i); });
    panels.forEach((p, i) => { if (!p.dataset.tab) p.dataset.tab = String(i); });

    // Функция активации по ключу (data-tab)
    const activateByKey = (key) => {
      let found = false;
      buttons.forEach((b) => b.classList.toggle("is-active", b.dataset.tab === key));
      panels.forEach((p) => {
        const match = p.dataset.tab === key;
        p.classList.toggle("about-us__tabs-content--active", match);
        if (match) found = true;
      });
      return found;
    };

    // Инициализация: если нет активной — активируем первую
    let initialKey = null;
    const activeBtn = [...buttons].find((b) => b.classList.contains("is-active"));
    initialKey = activeBtn ? activeBtn.dataset.tab : buttons[0].dataset.tab;
    if (!activateByKey(initialKey)) {
      // Фолбэк по индексу (на случай рассинхрона)
      panels.forEach((p, i) => p.classList.toggle("about-us__tabs-content--active", i === 0));
      buttons[0].classList.add("is-active");
    }

    // Обработчики
    buttons.forEach((btn) => {
      btn.addEventListener("click", () => {
        const key = btn.dataset.tab;
        if (!activateByKey(key)) {
          // Фолбэк по индексу, если вдруг не нашли панель с таким data-tab
          const idx = [...buttons].indexOf(btn);
          panels.forEach((p, i) => p.classList.toggle("about-us__tabs-content--active", i === idx));
          buttons.forEach((b, i) => b.classList.toggle("is-active", i === idx));
        }
        // ARIA + фокус
        buttons.forEach((b) => {
          const selected = b.classList.contains("is-active");
          b.setAttribute("aria-selected", selected ? "true" : "false");
          b.setAttribute("tabindex", selected ? "0" : "-1");
        });
      });
    });
  });
}
