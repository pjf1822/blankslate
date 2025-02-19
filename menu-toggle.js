document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.querySelector(".menu-toggle");
  const menuContainer = document.querySelector("#menu");

  menuToggle.addEventListener("click", function () {
    menuContainer.classList.toggle("open");
    const isExpanded =
      menuToggle.getAttribute("aria-expanded") === "true" || false;
    menuToggle.setAttribute("aria-expanded", !isExpanded);
  });
});
