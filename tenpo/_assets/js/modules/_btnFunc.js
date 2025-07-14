export const btnFunc = () => {
  const sol1 = document.querySelector(".u-sol01");
  const sol2 = document.querySelector(".u-sol02");
  const sol3 = document.querySelector(".u-sol03");
  const fullItems = document.querySelectorAll(".u-full");

  const isValid = sol1 && sol2 && sol3 && fullItems.length >= 3;
  if (!isValid) return; // exit early if elements not found

  const showOnly = (index) => {
    fullItems.forEach((item, i) => {
      item.classList.toggle("is-visible", i === index);
    });
  };

  const mouseEnterHandlers = [
    () => showOnly(0),
    () => showOnly(1),
    () => showOnly(2),
  ];

  const addListeners = () => {
    sol1.addEventListener("mouseenter", mouseEnterHandlers[0]);
    sol2.addEventListener("mouseenter", mouseEnterHandlers[1]);
    sol3.addEventListener("mouseenter", mouseEnterHandlers[2]);
  };

  const removeListeners = () => {
    sol1.removeEventListener("mouseenter", mouseEnterHandlers[0]);
    sol2.removeEventListener("mouseenter", mouseEnterHandlers[1]);
    sol3.removeEventListener("mouseenter", mouseEnterHandlers[2]);
    fullItems.forEach(item => item.classList.remove("is-visible"));
  };

  const mediaQuery = window.matchMedia("(min-width: 768px)");

  const handleMediaChange = (e) => {
    if (!isValid) return; // prevent further issues
    if (e.matches) {
      addListeners();
      showOnly(0);
    } else {
      removeListeners();
    }
  };

  if (mediaQuery.matches) {
    addListeners();
    showOnly(0);
  }

  mediaQuery.addEventListener("change", handleMediaChange);
};