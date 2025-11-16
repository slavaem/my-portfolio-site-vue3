const sliderMain = new Swiper('.slider_main', {
	freeMode: true,
	centeredSlides: true,
	mousewheel: true,
	parallax: true,
	breakpoints: {
		0: {
			slidesPerView: 2.5,
			spaceBetween: 20
		},
		680: {
			slidesPerView: 3.5,
			spaceBetween: 60
		}
	}
})
const sliderBg = new Swiper('.slider_bg', {
	centeredSlides: true,
	parallax: true,
	spaceBetween: 60,
	slidesPerView: 3.5
})
sliderMain.controller.control = sliderBg

const anchors = document.querySelectorAll('.slider__item');
for(var i=0; i<anchors.length;i++){
    anchors[i].addEventListener('click', selectDate, true);
}
function selectDate(){
    event.stopPropagation();
    if(this.classList.contains('opened')){
        for(let j = 0;j<anchors.length;j++){
        anchors[j].classList.remove('opened');
        anchors[j].removeEventListener("mousedown", closeSlideClickOverlay);}
    } 
    else {
    for(let x = 0;x<anchors.length;x++){
    anchors[x].classList.remove('opened');
    anchors[x].addEventListener("mousedown", closeSlideClickOverlay);}
    
    this.classList.toggle('opened');
    
    }
}
document.addEventListener('click', closeSlide);
  function closeSlide(){
  for(let h = 0;h<anchors.length;h++){
  anchors[h].classList.remove('opened');}
  }
 function closeSlideClickOverlay(e) {
 if (e.target === e.currentTarget) {
 closeSlide()
 }
 }


let desc = document.querySelector('.description')
sliderMain.on('slideChange', e => {
	sliderMain.activeIndex > 0 ? desc.classList.add('hidden') : desc.classList.remove('hidden')
})