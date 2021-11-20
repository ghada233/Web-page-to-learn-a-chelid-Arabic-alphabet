window.addEventListener('load', (event) => {
    gsap.from(".board", {duration: 2, opacity: 0,ease: "back.out(2)", y:100});
    gsap.from(".welcom ",{duration: 2, opacity: 0});
    gsap.from(".form-div ",{duration: 2, opacity: 0});
  });