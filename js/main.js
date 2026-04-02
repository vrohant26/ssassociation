/**
 * Main JavaScript File for SS Associates Theme
 */

document.addEventListener("DOMContentLoaded", function () {
  console.log("SS Associates Theme Loaded successfully.");

  // Initialize Lenis Smooth Scroll
  if (typeof Lenis !== "undefined") {
    const lenis = new Lenis();

    // Sync with GSAP ScrollTrigger
    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
      lenis.on("scroll", ScrollTrigger.update);
      gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
      });
      gsap.ticker.lagSmoothing(0);
    } else {
      function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
      }
      requestAnimationFrame(raf);
    }
  }

  // Full Page Menu Toggle Logic (GSAP Timeline)
  const menuBtn = document.querySelector(".btn-menu");
  const closeMenuBtn = document.getElementById("closeMenuBtn");
  const fullPageMenu = document.getElementById("fullPageMenu");
  const pageContainer = document.getElementById("page"); // To animate the whole structure down for parallax

  if (menuBtn && closeMenuBtn && fullPageMenu) {
    // Setup initial GSAP States for children
    gsap.set(".menu-text-mask a, .menu-reveal-item", { yPercent: 100 });
    gsap.set(".menu-img-reveal", { clipPath: "inset(100% 0 0 0)" });
    gsap.set(".menu-img-reveal img", { scale: 1.2 });

    const menuTl = gsap.timeline({
      paused: true,
      defaults: { ease: "power3.inOut" },
    });

    menuTl
      .set(fullPageMenu, { visibility: "visible" })
      // Slide entire overlay menu down into view
      .to(fullPageMenu, { y: "0%", duration: 0.8 })
      // Smoothly push the background page downwards subtly creating parallax depth
      .to(
        ".site-main, .site-footer",
        { y: "10vh", opacity: 0.5, duration: 0.8 },
        "<",
      )
      // Reveal the massive image from the bottom masking smoothly
      .to(
        ".menu-img-reveal",
        { clipPath: "inset(0% 0 0 0)", duration: 1 },
        "-=0.6",
      )
      // Scale down image naturally
      .to(".menu-img-reveal img", { scale: 1, duration: 1 }, "<")
      // Reveal the large nav links and secondary elements sequentially
      .to(
        ".menu-text-mask a, .menu-reveal-item",
        { yPercent: 0, duration: 1, stagger: 0.05, ease: "power3.out" },
        "-=0.75",
      );

    menuBtn.addEventListener("click", () => {
      fullPageMenu.classList.add("is-active");
      document.body.style.overflow = "hidden"; // Prevent scrolling behind menu
      menuTl.play();
    });

    closeMenuBtn.addEventListener("click", () => {
      menuTl.reverse().then(() => {
        fullPageMenu.classList.remove("is-active");
        document.body.style.overflow = ""; // Restore scrolling
      });
    });
  }

  // Sticky Header Slide Down logic with GSAP
  const header = document.getElementById("site-header");
  let lastScrollTop = 0;
  let isHeaderVisible = true;

  if (header) {
    window.addEventListener("scroll", () => {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      // Only engage sticky behavior past 150px scroll
      if (scrollTop > 150) {
        if (!header.classList.contains("is-stuck")) {
          header.classList.add("is-stuck");
          if (typeof gsap !== "undefined") {
            gsap.set(header, { yPercent: -100 });
          }
          isHeaderVisible = false;
        }

        if (scrollTop < lastScrollTop && !isHeaderVisible) {
          // Scrolling up -> animate into view smoothly
          if (typeof gsap !== "undefined") {
            gsap.to(header, { yPercent: 0, duration: 0.4, ease: "power2.out" });
          }
          isHeaderVisible = true;
        } else if (scrollTop > lastScrollTop && isHeaderVisible) {
          // Scrolling down -> animate out of view smoothly
          if (typeof gsap !== "undefined") {
            gsap.to(header, {
              yPercent: -100,
              duration: 0.4,
              ease: "power2.in",
            });
          }
          isHeaderVisible = false;
        }
      } else {
        // Returned precisely to the top
        if (
          header.classList.contains("is-stuck") &&
          !header.classList.contains("always-stuck")
        ) {
          header.classList.remove("is-stuck");
          if (typeof gsap !== "undefined") {
            gsap.set(header, { yPercent: 0 }); // reset layout natively
          }
          isHeaderVisible = true;
        }
      }

      lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For iOS rubber-banding
    });
  }

  // Generic GSAP Reveal Animations
  if (
    typeof gsap !== "undefined" &&
    typeof ScrollTrigger !== "undefined" &&
    typeof SplitType !== "undefined"
  ) {
    gsap.registerPlugin(ScrollTrigger);

    const revealSections = document.querySelectorAll(".gsap-reveal-section");

    revealSections.forEach((section) => {
      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: section,
          start: "top 60%", // standardized trigger
        },
      });

      // 0. Card Reveal (clip-path down) using generic .card-reveal
      const cards = section.querySelectorAll(".card-reveal");
      let hasCards = false;
      if (cards.length > 0) {
        hasCards = true;
        tl.fromTo(
          cards,
          { clipPath: "inset(0% 0 100% 0)" },
          {
            clipPath: "inset(0% 0 0% 0)",
            duration: 1.2,
            stagger: 0.15,
            ease: "power3.inOut",
          },
        );
      }

      // 1. Text slide up reveal line-by-line using Generic .text-mask wrapper
      const textBlocks = section.querySelectorAll(".text-mask > *");
      let elementsToAnimate = [];

      textBlocks.forEach((block) => {
        // Skip SplitType for flex containers like .section-tag or inner slide text
        if (
          block.classList.contains("section-tag") ||
          block.classList.contains("slide-step") ||
          block.classList.contains("slide-title") ||
          block.classList.contains("slide-desc")
        ) {
          elementsToAnimate.push(block);
          return;
        }

        // Temporarily prepare SplitType
        const split = new SplitType(block, { types: "lines" });

        split.lines.forEach((line) => {
          // Wrap the inner content
          const innerContent = line.innerHTML;
          line.innerHTML = "";
          const innerWrap = document.createElement("div");
          innerWrap.className = "line-inner";
          innerWrap.innerHTML = innerContent;
          line.appendChild(innerWrap);

          // Hide overflow on the line
          gsap.set(line, { overflow: "hidden", verticalAlign: "top" });

          elementsToAnimate.push(innerWrap);
        });
      });

      if (elementsToAnimate.length > 0) {
        tl.from(
          elementsToAnimate,
          {
            y: "150%", // slide up from below
            duration: 1,
            stagger: 0.1,
            ease: "power4.out",
          },
          hasCards ? "<0.5" : null, // If cards are revealing, start texts halfway through the clip. Otherwise start instantly.
        );
      }

      // 2. Image reveal (clip-path and scale) using generic .img-reveal
      const images = section.querySelectorAll(".img-reveal");
      if (images.length > 0) {
        tl.fromTo(
          images,
          { clipPath: "inset(0% 0 100% 0)" },
          {
            clipPath: "inset(0% 0 0% 0)",
            duration: 1.2,
            stagger: 0.2,
            ease: "power3.inOut",
          },
          "<+=0.2", // start shortly after text
        );

        tl.fromTo(
          section.querySelectorAll(".img-reveal img"),
          { scale: 1.2 },
          { scale: 1, duration: 1.2, stagger: 0.2, ease: "power3.out" },
          "<", // sync with clip path animation
        );
      }

      // 3. Border expansion reveal
      const expandableBorders = section.querySelectorAll(".border-expand");
      if (expandableBorders.length > 0) {
        tl.to(
          expandableBorders,
          { scaleX: 1, duration: 1, ease: "power3.inOut" },
          "<0.3", // Starts slightly after images or text
        );
      }
      // 4. Floating Card Subtle Parallax (Desktop Only)
      const floatingCards = section.querySelectorAll(".about-floating-card");
      if (floatingCards.length > 0) {
        let mm = gsap.matchMedia();
        mm.add("(min-width: 993px)", () => {
          floatingCards.forEach((card) => {
            gsap.to(card, {
              y: -80, // Subtly float up 80px relative to its container
              ease: "none",
              scrollTrigger: {
                trigger: section, // Bind strictly to the parent wrapper lifetime
                start: "top bottom", // Begin tracking when the card enters viewport
                end: "bottom top", // End when section leaves viewport
                scrub: 0.5, // 0.5 for mild interpolation smoothing
              },
            });
          });
        });
      }
    });
  } // End of Generic GSAP block

  // Process Slider Initialization with Swiper
  if (typeof Swiper !== "undefined") {
    const heroBgSwiper = new Swiper(".hero-bg-swiper", {
      loop: true,
      effect: "fade",
      fadeEffect: {
        crossFade: true,
      },
      speed: 1500,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      allowTouchMove: false,
    });

    const processSwiper = new Swiper(".process-swiper", {
      loop: true,
      speed: 600,
      effect: "slide",
      // fadeEffect: {
      //   crossFade: true,
      // },
      navigation: {
        nextEl: ".process-next",
        prevEl: ".process-prev",
      },
      pagination: {
        el: ".process-pagination",
        clickable: true,
      },
    });

    const successSwiper = new Swiper(".success-swiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: false,
      speed: 600,
      breakpoints: {
        768: {
          slidesPerView: 1.5,
        },
        1200: {
          slidesPerView: 1.4,
        },
      },
      navigation: {
        nextEl: ".success-next",
        prevEl: ".success-prev",
      },
    });
  }
});
