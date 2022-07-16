// BACKGROUND HEADER
function scrollHeader(){
    const header = document.getElementById('header')
    if(this.scrollY >= 1) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

// TYPING IN HOMEPAGE (TYPED JS)
var typed = new Typed(".auto-input", {
    strings: ["KELOMPOK 2", "KAMI"],
    typeSpeed: 100,
    backSpeed: 100,
    loop: true
})

// TESTIMONIAL (Use Swiper JS)
let swiperTestimonial = new Swiper('.testimonial__container', {
    loop: true,
    grabCursor: true,
    spaceBetween: 24,

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints:{
        768:{
            slidesPerView: 2,
        },
        1024:{
            slidesPerView: 3,
        }
    }
});