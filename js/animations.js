gsap.registerPlugin(ScrollTrigger);

gsap.from(".blog-item", {
  opacity: 0,
  y: 50,
  duration: 3,
  stagger: 0.5,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".blog-container",
    start: "top 80%",
    toggleActions: "play none none none"
  }
});

gsap.registerPlugin(ScrollTrigger);

gsap.from(".footer-bottom", {
  opacity: 0,
  y: 100, // pomak 100px prema dolje
  duration: 1,
  ease: "power3.out",
  scrollTrigger: {
    trigger: ".site-footer",
    start: "top 90%", // kad gornji rub footera dođe blizu dna ekrana
    toggleActions: "play none none none"
  }
});

gsap.from(".footer-social-icons", {
  opacity: 0,
  y: 100, // pomak 100px prema dolje
  duration: 1,
  ease: "power3.out",
  scrollTrigger: {
    trigger: ".site-footer",
    start: "top 90%", // kad gornji rub footera dođe blizu dna ekrana
    toggleActions: "play none none none"
  }
});

gsap.from(".footer-logo", {
  opacity: 0,
  y: 100, // pomak 100px prema dolje
  duration: 1,
  ease: "power3.out",
  scrollTrigger: {
    trigger: ".site-footer",
    start: "top 90%", // kad gornji rub footera dođe blizu dna ekrana
    toggleActions: "play none none none"
  }
});

gsap.from(".footer-links", {
  opacity: 0,
  y: 50, // pomak 100px prema dolje
  duration: 1,
  ease: "power3.out",
  scrollTrigger: {
    trigger: ".site-footer",
    start: "top 90%", // kad gornji rub footera dođe blizu dna ekrana
    toggleActions: "play none none none"
  }
});


 const text = "ARCHITECTURE for EVERYONE";
  const el = document.querySelector(".architecture-text");
  el.textContent = "";

  ScrollTrigger.create({
    trigger: ".architecture-text",
    start: "top 90%",
    onEnter: () => {
      gsap.to({}, {
        duration: text.length * 0.05,
        onUpdate: function () {
          const progress = Math.floor(this.progress() * text.length);
          el.textContent = text.substring(0, progress);
        },
        ease: "none"
      });
    },
    once: true
  });





