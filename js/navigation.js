const burgerButton = document.querySelector(".toggle-burger-menu-container");
const checkbox = document.querySelector(".toggle-burger-menu-container > div");
const strokes = ["stroke1", "stroke2", "stroke3", "stroke4", "stroke5"].map(className => 
  checkbox.querySelector(`div > .${className}`)
);

const siteNavigation = document.getElementById("site-navigation");
const mainMenu = document.querySelector(".menu-main-menu-container");
const servicesMenu = document.querySelector(".menu-main-menu-container");

function toggleMenuVisibility() {
  mainMenu.classList.toggle("visible");
  const isExpanded = checkbox.getAttribute("aria-expanded") === "true";
  checkbox.setAttribute("aria-expanded", !isExpanded);
  burgerButton.setAttribute("aria-label", isExpanded ? "Open menu" : "Close menu");
}

function toggleCheckboxAnimation() {
  checkbox.classList.toggle("clicked");
  
  strokes.forEach((stroke, index) => {
    const animatedClass = `stroke${index + 1}-animated`;
    const notAnimatedClass = `stroke${index + 1}-not-animated`;
    
    if (checkbox.classList.contains("clicked")) {
      stroke.classList.add(animatedClass);
      stroke.classList.remove(notAnimatedClass);
    } else {
      stroke.classList.remove(animatedClass);
      stroke.classList.add(notAnimatedClass);
    }
  });
}

function resetAnimation() {
  checkbox.classList.remove("clicked");
  strokes.forEach((stroke, index) => {
    const animatedClass = `stroke${index + 1}-animated`;
    const notAnimatedClass = `stroke${index + 1}-not-animated`;
    
    stroke.classList.remove(animatedClass);
    stroke.classList.add(notAnimatedClass);
  });
}

burgerButton.addEventListener("click", () => {
  siteNavigation.classList.toggle("toggled");
  toggleMenuVisibility();
  toggleCheckboxAnimation();
});

servicesMenu.addEventListener("click", () => {
  toggleMenuVisibility();
  resetAnimation();
});
