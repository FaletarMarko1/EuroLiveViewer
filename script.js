window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader-hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});

document.getElementById("datum").addEventListener("focus", function (event) {
  event.target.showPicker();
});

const popoverTriggerList = document.querySelectorAll(
  '[data-bs-toggle="popover"]'
);
const popoverList = [...popoverTriggerList].map(
  (popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl)
);
const popover = new bootstrap.Popover(".popover-dismiss", {
  trigger: "focus",
});
