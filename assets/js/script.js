// Hamburger menu
const hamburgerBtn = document.getElementById('hamburgerMenu');
const drawerMenu = document.getElementById('drawerMenu');

hamburgerBtn.addEventListener('click', () => {
  const isOpen = hamburgerBtn.getAttribute('aria-expanded') === 'true';
  hamburgerBtn.setAttribute('aria-expanded', !isOpen);
  hamburgerBtn.classList.toggle('open');
  drawerMenu.classList.toggle('open');
});

// FV swiper
const fvSwiper = new Swiper('.fv__swiper', {
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false, // ユーザー操作後も自動再生継続
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.fv__swiper .swiper-button-next',
    prevEl: '.fv__swiper .swiper-button-prev',
  },
});

// 制作実績 works
const tabItems = document.querySelectorAll('.c-tabs__item');
const tabPanels = document.querySelectorAll('.c-tabs__panel');

tabItems.forEach(function (tabItem, index) {
  tabItem.addEventListener('click', () => {
    tabItems.forEach((item) => {
      item.classList.remove('active');
    });
    tabItems[index].classList.add('active');

    tabPanels.forEach((tabPanel) => {
      tabPanel.classList.remove('active');
    });
    tabPanels[index].classList.add('active');
  });
});

// お問い合わせ contact form select box
const selectElement = document.querySelector('.contact__form-select');
const selectWrapper = document.querySelector('.contact__form-select-wrapper');

selectElement.addEventListener('mousedown', () => {
  selectWrapper.classList.toggle('is-open');
});

document.addEventListener('click', (e) => {
  if (!selectWrapper.contains(e.target)) {
    selectWrapper.classList.remove('is-open');
  }
});

// トップに戻るボタン
// const togglePageTopBtn = () => {
//   let scrollY = window.scrollY;
//   const pageTop = document.getElementById('js-page-top');
//   const triggerPoint = window.innerHeight * 0.87;

//   if (scrollY >= triggerPoint) {
//     pageTop.classList.add('active');
//   } else {
//     pageTop.classList.remove('active');
//   }
// };
// window.addEventListener('scroll', togglePageTopBtn);
// window.addEventListener('DOMContentLoaded', togglePageTopBtn);
