"use-strict";

const trigg = document.getElementById("light-dark-switch");
const checkTheme = document.getElementById("visualTheme");
const modeThemeLoad = () => {
  let modeToLoad = localStorage.getItem("mode");
  if (modeToLoad == "dark") {
    checkTheme.checked = true;
  } else {
    checkTheme.checked = false;
  }
};
const applyThemeStyles = () => {
  if (checkTheme.checked) {
    document.querySelector("html").setAttribute("data-bs-theme", "dark");
    localStorage.setItem("mode", "dark");
  } else {
    document.querySelector("html").setAttribute("data-bs-theme", "light");
    localStorage.setItem("mode", "light");
  }
};
modeThemeLoad();
applyThemeStyles();
trigg.addEventListener("click", (event) => {
  applyThemeStyles();
});
