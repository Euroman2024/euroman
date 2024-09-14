document.addEventListener("DOMContentLoaded", function () {
    const sectionsToAnimate = document.querySelectorAll(".animated");

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = "1";
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 }); // Cambia el valor según tus necesidades

    sectionsToAnimate.forEach((section) => {
      observer.observe(section);
    });
  });