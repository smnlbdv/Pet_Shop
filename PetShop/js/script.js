window.addEventListener ("DOMContentLoaded", ()=>{
  new Swiper('.image-slider',{


    navigation:{
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    freeMode:true,
    pagination:{
        el:'.swiper-pagination',
        clicktable:true,
        dynamicBullets:true,
    },

    breakpoints:
    {
      1200:
      {
        slidesPerView:2,
      },
      1800:
      {
        slidesPerView:3,
      }, 
      1900:
      {
        slidesPerView:3.2,
      },  
    },

    slidesPerGroup:1,
    // spaceBetween:20,
    speed:800,

    


});
});

const hamb = document.querySelector("#menu_icon");
const popup = document.querySelector("#menu_body");
const bar = document.querySelector("#bar");
const bar1 = document.querySelector("#bar1");
const bar2 = document.querySelector("#bar2");

hamb.addEventListener('click',hambHandler );

function hambHandler (e)
{
  e.preventDefault();
  popup.classList.toggle("open");
  hamb.classList.toggle("active")
  bar.classList.toggle("open");
  bar1.classList.toggle("open");
  bar2.classList.toggle("open");

}