document.addEventListener("DOMContentLoaded", () => {
  /* =========================
            CONFIG INICIAL
            ========================= */
  if ("scrollRestoration" in history) {
    history.scrollRestoration = "manual";
  }

  window.scrollTo(0, 0);

  const header = document.querySelector(".site-header");
  const tabs = document.querySelectorAll(".tab-btn");
  const panels = document.querySelectorAll(".program-panel");
  const programContent = document.querySelector(".program-content");

  let currentIndex = 0;

  const colors = {
    licenciatura: "#83bc41",
    maestria: "#fab74a",
    doctorado: "#425584",
    postdoctorado: "#125955",
    administracion: "#2e5b9f",
    contaduria: "#35825f",
    mercadotecnia: "#d35d23",
    rci: "#258193",
    turismo: "#b98328",
  };

  /* =========================
            SCROLL CON OFFSET
            ========================= */
  function scrollToSection(targetSelector, extra = 170) {
    const target = document.querySelector(targetSelector);
    if (!target) return;

    const headerHeight = header.offsetHeight;
    const extraOffset = window.innerWidth < 768 ? 80 : extra;

    const y = target.getBoundingClientRect().top + window.scrollY;

    window.scrollTo({
      top: y - headerHeight - extraOffset,
      behavior: "smooth",
    });
  }

  /* =========================
            ALTURA DINÁMICA
            ========================= */
  function updateHeight(panel) {
    if (!panel) return;

    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        programContent.style.height = panel.scrollHeight + "px";
      });
    });
  }

  /* =========================
            CAMBIO DE PROGRAMA
            ========================= */
  function changeProgram(program) {
    const currentPanel = document.querySelector(".program-panel.active");
    const nextPanel = document.querySelector(
      `.program-panel[data-program="${program}"]`,
    );

    if (!nextPanel || currentPanel === nextPanel) return;

    const currentIndexLocal = [...panels].indexOf(currentPanel);
    const nextIndex = [...panels].indexOf(nextPanel);

    /* COLOR GLOBAL */
    document.documentElement.style.setProperty(
      "--program-color",
      colors[program],
    );

    /* LIMPIAR ANIMACIONES */
    panels.forEach((p) => {
      p.classList.remove(
        "exit-left",
        "exit-right",
        "enter-left",
        "enter-right",
      );
    });

    /* DIRECCIÓN */
    if (nextIndex > currentIndexLocal) {
      currentPanel.classList.add("exit-left");
      nextPanel.classList.add("enter-right");
    } else {
      currentPanel.classList.add("exit-right");
      nextPanel.classList.add("enter-left");
    }

    /* ACTIVAR */
    nextPanel.classList.add("active");

    updateHeight(nextPanel);

    setTimeout(() => {
      currentPanel.classList.remove("active");
    }, 300);

    /* TABS */
    tabs.forEach((btn) => btn.classList.remove("active"));

    document
      .querySelector(`.tab-btn[data-program="${program}"]`)
      ?.classList.add("active");

    currentIndex = nextIndex;
  }

  /* =========================
            EVENTOS
            ========================= */

  // Tabs
  tabs.forEach((btn) => {
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      changeProgram(this.dataset.program);
      scrollToSection("#programas");
    });
  });

  // Botones "Ver programa"
  document.querySelectorAll(".ver-programa").forEach((btn) => {
    btn.addEventListener("click", function (e) {
      e.preventDefault();

      changeProgram(this.dataset.program);
      scrollToSection("#programas");
    });
  });

  // Subnav (header interno)
  document.querySelectorAll(".subnav-inner a").forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      scrollToSection(this.getAttribute("href"));
    });
  });

  /* =========================
    FAQ
    ========================= */
  document.querySelectorAll(".faq-question").forEach((btn) => {
    btn.addEventListener("click", function (e) {
      e.preventDefault();

      const item = this.closest(".faq-item");
      const answer = item.querySelector(".faq-answer");
      console.log(answer.scrollHeight);

      if (!answer) return;

      document.querySelectorAll(".faq-item").forEach((i) => {
        if (i !== item) {
          i.classList.remove("active");
          const other = i.querySelector(".faq-answer");
          if (other) other.style.maxHeight = null;
        }
      });

      item.classList.toggle("active");

      if (item.classList.contains("active")) {
        answer.style.maxHeight = answer.scrollHeight + "px";
      } else {
        answer.style.maxHeight = null;
      }

      // 🔥 CLAVE: actualizar altura del contenedor
      setTimeout(() => {
        const activePanel = document.querySelector(".program-panel.active");
        if (activePanel) {
          programContent.style.height = activePanel.scrollHeight + "px";
        }
      }, 400);
    });
  });

  /* =========================
    INIT
    ========================= */
  window.addEventListener("load", () => {
    const activePanel = document.querySelector(".program-panel.active");
    updateHeight(activePanel);
  });

  document.querySelectorAll(".menu-link").forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();

      const program = this.dataset.program;
      const target = this.getAttribute("href"); // ej: #programas

      // cambiar contenido
      if (program) {
        changeProgram(program);
      }

      // hacer scroll
      if (target) {
        scrollToSection(target);
      }
    });
  });
});

const items = document.querySelectorAll(".testimonio");
const dots = document.querySelectorAll(".dot");

let current = 0;
let interval;

// 🔥 actualizar slider
function updateSlider() {
  items.forEach((item) => {
    item.classList.remove("active", "prev", "next", "hidden");
  });

  let prev = (current - 1 + items.length) % items.length;
  let next = (current + 1) % items.length;

  items[current].classList.add("active");
  items[prev].classList.add("prev");
  items[next].classList.add("next");

  items.forEach((item, index) => {
    if (index !== current && index !== prev && index !== next) {
      item.classList.add("hidden");
    }
  });

  dots.forEach((d) => d.classList.remove("active"));
  dots[current].classList.add("active");
}

// 🔥 iniciar autoplay
function startAutoSlide() {
  interval = setInterval(() => {
    current = (current + 1) % items.length;
    updateSlider();
  }, 9000);
}

// 🔥 reiniciar autoplay
function resetAutoSlide() {
  clearInterval(interval);
  startAutoSlide();
}

// dots click
dots.forEach((dot) => {
  dot.addEventListener("click", function (e) {
    e.preventDefault();

    current = parseInt(this.dataset.index);
    updateSlider();

    resetAutoSlide(); // 🔥 AQUÍ ESTÁ LA MAGIA
  });
});

// init
updateSlider();
startAutoSlide();

// DROPDOWN

document.addEventListener("DOMContentLoaded", function () {
  const dropdownLinks = document.querySelectorAll(".has-dropdown > a");

  dropdownLinks.forEach((link) => {
    link.addEventListener("pointerdown", function (e) {
      if (window.innerWidth <= 768) {
        e.preventDefault();

        const parent = this.parentElement;
        const isActive = parent.classList.contains("active");

        // cerrar todos
        document.querySelectorAll(".has-dropdown").forEach((el) => {
          el.classList.remove("active");
        });

        // abrir actual
        if (!isActive) {
          parent.classList.add("active");

          // 🔥 FORZAR CENTRADO INMEDIATO
          const dropdown = parent.querySelector(".dropdown");
          //   if (dropdown) {
          //     dropdown.style.transform = "translateX(-50%) translateY(-90px)";
          //   }
        }
      }
    });
  });

  // cerrar al tocar fuera
  document.addEventListener("click", function (e) {
    if (window.innerWidth <= 768) {
      if (!e.target.closest(".has-dropdown")) {
        document.querySelectorAll(".has-dropdown").forEach((el) => {
          el.classList.remove("active");
        });
      }
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const floating = document.querySelector(".floating-components");
  const headerHeight = 100; // 🔥 tu header real

  window.addEventListener("scroll", function () {
    if (window.scrollY > headerHeight) {
      floating.classList.add("show");
    } else {
      floating.classList.remove("show");
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const openBtn = document.getElementById("openFormBtn");
  const modal = document.getElementById("formModal");
  const closeBtn = document.getElementById("closeForm");
  const overlay = document.getElementById("formOverlay");

  // abrir
  openBtn.addEventListener("click", function (e) {
    e.preventDefault();
    modal.classList.add("active");
    document.body.style.overflow = "hidden";
  });

  // cerrar
  function closeModal() {
    modal.classList.remove("active");
    document.body.style.overflow = "";
  }

  closeBtn.addEventListener("click", closeModal);
  overlay.addEventListener("click", closeModal);
});
