let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector('.header .navbar');

menu.addEventListener('click', () => {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
})
window.onscroll = () => {
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
}

var swiper = new Swiper(".home-slide", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".reviews-slider", {
  loop: true,
  spaceBetween: 20,
  autoHeight: true,
  grabCursor: true,
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

let load_more = document.querySelector(".packages .load-more .btn");
let currenttime = 3;

load_more.onclick = () => {
  let boxes = [...document.querySelectorAll(".packages .box-container .box")]
  for (let i = currenttime; i < currenttime + 3; i++) {
    boxes[i].style.display = 'inline-block';
  }
  currenttime += 3;
  if (currenttime >= boxes.length) {
    load_more.style.display = 'none';

  }
}
