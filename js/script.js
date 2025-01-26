const createServicesObserver = () => {
  let observer;

  let options = {
    root: null,
    rootMargin: "-100px",
    threshold: 0.1,
  };

  let servicesCallback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        let element = entry.target;

        if (element.classList.contains("hidden-slide-title-right")) {
          console.log("right");
          element.classList.add("animate-text-right-slide");
          element.classList.remove("hidden-slide-title-right");
        } else if (element.classList.contains("hidden-slide-title-left")) {
          element.classList.add("animate-text-left-slide");
          element.classList.remove("hidden-slide-title-left");
        }

        observer.unobserve(element);
      }
    });
  };

  observer = new IntersectionObserver(servicesCallback, options);
  document
    .querySelectorAll(".hidden-slide-title-right, .hidden-slide-title-left")
    .forEach((el) => {
      observer.observe(el);
    });
};

const createTitlesObserver = () => {
  let observer;

  let options = {
    root: null,
    rootMargin: "-100px",
    threshold: 0.5,
  };

  let titlesCallback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        let element = entry.target;

        element.classList.add("animate-slide-title-up");
        element.classList.remove("hidden-slide-title-up");

        observer.unobserve(element);
      }
    });
  };

  observer = new IntersectionObserver(titlesCallback, options);
  document.querySelectorAll(".hidden-slide-title-up").forEach((el) => {
    observer.observe(el);
  });
};

createServicesObserver();
createTitlesObserver();
