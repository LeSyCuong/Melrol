window.addEventListener("scroll", function () {
  const header = document.querySelector("header");
  if (window.scrollY > 0) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }

  const macbook = document.querySelector(".macbook");
  const phone = document.querySelector(".phone");
  const scrollY = window.scrollY;

  macbook.style.transform = `translateY(-${scrollY * 0.2}px)`;
  phone.style.transform = `translateY(-${scrollY * 0.2}px)`;
});

function handleScroll() {
  const images = document.querySelectorAll(".images img");
  images.forEach((img) => {
    const rect = img.getBoundingClientRect();
    if (rect.top < window.innerHeight && rect.bottom > 0) {
      img.classList.add("visible");
    }
  });
}
window.addEventListener("scroll", handleScroll);

document.addEventListener("DOMContentLoaded", function () {
  document.querySelector(".images").classList.add("visible");
  document.querySelector(".text").classList.add("visible");
});
document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".thang, .back");

  const elementInView = (el) => {
    const rect = el.getBoundingClientRect();
    return rect.top >= 0 && rect.bottom <= window.innerHeight;
  };

  const addAnimation = () => {
    elements.forEach((el) => {
      if (elementInView(el)) {
        el.classList.add("active");
      } else {
        el.classList.remove("active");
      }
    });
  };

  window.addEventListener("scroll", addAnimation);
  addAnimation();
});

const elements = document.querySelectorAll(
  ".next, .icon, .bot-img, .text-content, .di"
);

function handleScroll() {
  elements.forEach((el) => {
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight - 50) {
      el.classList.add("show");
    }
  });
}

window.addEventListener("scroll", handleScroll);
handleScroll();
