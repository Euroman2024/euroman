gsap.from(".animated-div", {
    opacity: 0,
    y: 50,
    duration: 1,
    scrollTrigger: {
      trigger: ".animated-div",
      start: "top 80%",
      end: "top 20%",
      toggleActions: "play none none none",
    }
  });

  gsap.from(".another-animated-div", {
    opacity: 0,
    x: -50,
    duration: 1,
    scrollTrigger: {
      trigger: ".another-animated-div",
      start: "top 80%",
      end: "top 20%",
      toggleActions: "play none none none",
    }
  });
  gsap.from(".yet-another-animated-div", {
      opacity: 0,
      scale: 0.5,
      duration: 1,
      scrollTrigger: {
        trigger: ".yet-another-animated-div",
        start: "top 80%",
        end: "top 20%",
        toggleActions: "play none none none",
      }
    });