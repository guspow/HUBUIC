/**
 * Menú Lateral Izquierdo - Funcionalidad completa
 */

(function () {
  "use strict";

  document.addEventListener("DOMContentLoaded", function () {
    const openMenuBtns = document.querySelectorAll(".open-side-menu");
    const closeMenuBtn = document.getElementById("closeMenu");
    const menuOverlay = document.getElementById("menuOverlay");
    const menuContainer = document.getElementById("sideMenu");
    const menuPanel = document.getElementById("menuPanel");
    const submenuToggles = document.querySelectorAll(".submenu-toggle");

    /* ==============================
    ABRIR MENÚ
    ============================== */
    function openMenu() {
      if (!menuContainer) return;

      menuContainer.classList.add("active");
      document.body.classList.add("menu-open");
      const scrollBarWidth =
        window.innerWidth - document.documentElement.clientWidth;

      document.body.style.overflow = "hidden";
      document.body.style.paddingRight = scrollBarWidth + "px";

      // 🔥 BLOQUEO REAL DEL SCROLL (mobile fix)
      document.body.style.position = "fixed";
      document.body.style.top = `-${window.scrollY}px`;
      document.body.style.width = "100%";
    }

    /* ==============================
    CERRAR MENÚ
    ============================== */
    function closeMenu() {
      if (!menuContainer) return;

      menuContainer.classList.remove("active");
      document.body.classList.remove("menu-open");

      // 🔥 recuperar scroll
      const scrollY = document.body.style.top;

      document.body.style.overflow = "";
      document.body.style.paddingRight = ""; // 🔥 limpiar
      document.body.style.position = "";
      document.body.style.top = "";
      document.body.style.width = "";

      window.scrollTo(0, parseInt(scrollY || "0") * -1);

      /* cerrar submenús */
      // document.querySelectorAll(".sub-menu.active").forEach((sub) => {
      //   sub.classList.remove("active");
      // });

      // document.querySelectorAll(".submenu-toggle.active").forEach((toggle) => {
      //   toggle.classList.remove("active");
      // });
    }

    /* ==============================
   BOTONES ABRIR
============================== */
    openMenuBtns.forEach((btn) => {
      btn.addEventListener("click", openMenu);
    });

    /* ==============================
   BOTÓN CERRAR
============================== */
    if (closeMenuBtn) {
      closeMenuBtn.addEventListener("click", closeMenu);
    }

    /* ==============================
   CLICK EN OVERLAY
============================== */
    if (menuOverlay) {
      menuOverlay.addEventListener("click", closeMenu);
    }

    /* ==============================
   TECLA ESC
============================== */
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && menuContainer.classList.contains("active")) {
        closeMenu();
      }
    });

    /* ==============================
   SUBMENÚS
============================== */
    submenuToggles.forEach((toggle) => {
      toggle.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();

        const parent = this.closest(".menu-item-has-children");
        const submenu = parent.querySelector(".sub-menu");

        /* cerrar otros submenus */
        document.querySelectorAll(".sub-menu").forEach((menu) => {
          if (menu !== submenu) {
            menu.classList.remove("active");
          }
        });

        document.querySelectorAll(".submenu-toggle").forEach((btn) => {
          if (btn !== this) {
            btn.classList.remove("active");
          }
        });

        /* abrir actual */
        this.classList.toggle("active");
        submenu.classList.toggle("active");
      });
    });

    /* ==============================
   PREVENIR CIERRE AL HACER CLICK
============================== */
    if (menuPanel) {
      menuPanel.addEventListener("click", function (e) {
        e.stopPropagation();
      });
    }
  });
})();
